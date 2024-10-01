<?php
// Sisipkan file koneksi
include "../koneksi.php";

$id_user = mysqli_real_escape_string($koneksi, $_POST['id_user']);
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Menggunakan hashing untuk password
$nama_lengkap = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);

$foto = $_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], "gambar_register/$foto");

// Cek apakah username sudah ada di database
$cek_username = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
if (mysqli_num_rows($cek_username) > 0) {
    // Jika username sudah digunakan
    echo "<script>
    alert('Username sudah digunakan');
    window.location.href='../index.php';
    </script>";
    exit; // Menghentikan eksekusi lebih lanjut
} else {
    // Jika username belum digunakan, lakukan insert
    $tambah = mysqli_query($koneksi, "INSERT INTO user (id_user, username, password, nama_lengkap, foto) 
    VALUES ('$id_user', '$username', '$password', '$nama_lengkap', '$foto')");

    if ($tambah) {
        // Jika query berhasil
        echo "<script>
        alert('Data Berhasil Ditambahkan');
        window.location.href='../index.php';
        </script>";
        exit; // Menghentikan eksekusi lebih lanjut
    } else {
        // Jika query gagal
        echo "<script>
        alert('Data Gagal Ditambahkan: " . mysqli_error($koneksi) . "');
        window.location.href='../index.php';
        </script>";
        exit; // Menghentikan eksekusi lebih lanjut
    }
}
?>