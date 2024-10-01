<?php
// Sisipkan file koneksi
include "../koneksi.php";
session_start();
$_SESSION['update_success'] = '  Data Berhasil Diubah 😍';


$id_about = $_POST ['id_about'];
$deskripsi_about = $_POST['deskripsi_about'];
$visi_about = $_POST['visi_about'];
$misi_about = $_POST['misi_about'];

$gambar_about = $_FILES['gambar_about']['name'];

if (!empty($gambar_about)) {
    // Pindahkan file gambar yang diupload ke folder uploads
    move_uploaded_file($_FILES['gambar_about']['tmp_name'], "gambar_about/$gambar_about");
    
    // Query untuk mengupdate data dengan gambar baru
    $sql = "UPDATE tb_about SET 
              deskripsi_about='$deskripsi_about', 
                visi_about='$visi_about', 
                misi_about='$misi_about', 
                gambar_about='$gambar_about'
              
            WHERE id_about=$id_about";
} else {
    // Query untuk mengupdate data tanpa mengganti gambar
    $sql = "UPDATE tb_about SET 
               deskripsi_about='$deskripsi_about', 
                visi_about='$visi_about', 
                misi_about='$misi_about' 
            WHERE id_about='$id_about'";
}

// Eksekusi query
$ubah = mysqli_query($koneksi, $sql);




// Jika query berhasil
if ($ubah) {
    echo "<script>
           
            window.location.href='../?page=about/index';
          </script>";
} else {
    // Jika query gagal
    echo "<script>
          
            window.location.href='../?page=about/ubah&id_about=$id_about';
          </script>";
}
?>