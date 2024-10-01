<?php
include "../koneksi.php";
session_start();

// Pastikan tidak ada output sebelum session_start()
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menggunakan prepared statement untuk mencegah SQL Injection
    $stmt = $koneksi->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Ambil data user ke array
        $data = $result->fetch_assoc();

        // Simpan datanya ke session
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['foto'] = $data['foto'];
        
        $_SESSION['save_success'] = 'Login Berhasil 😍'; // Menyimpan pesan keberhasilan

        echo "<script>
            alert('Login Berhasil')
            window.location.href='../index.php'
        </script>";
    } else {
        echo "<script>
            alert('Username atau Password Salah')
            window.location.href='../index.php'
        </script>";
    }

    // Menutup statement dan koneksi
    $stmt->close();
}