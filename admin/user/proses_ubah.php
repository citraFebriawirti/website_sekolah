<?php
// Sisipkan file koneksi
include "../koneksi.php";
session_start();
$_SESSION['update_success'] = '  Data Berhasil Dihapus 😍';

$id_user = $_POST['id_user'];

$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];
$foto = $_FILES['foto']['name'];

if (!empty($foto)) {
    // Pindahkan file gambar yang diupload ke folder uploads
    move_uploaded_file($_FILES['foto']['tmp_name'], "gambar_user/$foto");
    
    // Query untuk mengupdate data dengan gambar baru
    $sql = "UPDATE user SET 
                username='$username', 
                password='$password', 
                nama_lengkap='$nama_lengkap',
                foto='$foto'
               
            WHERE id_user=$id_user";
} else {
    // Query untuk mengupdate data tanpa mengganti gambar
    $sql = "UPDATE user SET 
                username='$username', 
                password='$password', 
                nama_lengkap='$nama_lengkap'
            WHERE id_user='$id_user'";
}

// Eksekusi query
$ubah = mysqli_query($koneksi, $sql);

// $foto = $_FILES['foto']['name'];
// move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/$foto"); 



// Jika query berhasil
if ($ubah) {
    echo "<script>
           
            window.location.href='../?page=user/index';
          </script>";
} else {
    // Jika query gagal
    echo "<script>
          
            window.location.href='../?page=user/ubah&id_user=$id_user';
          </script>";
}
?>