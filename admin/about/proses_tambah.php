<?php
// sisipkan file koneksi
include "../koneksi.php";

session_start();
$_SESSION['save_success'] = '  Data Berhasil Ditambahkan 😍';



$deskripsi_about = $_POST['deskripsi_about'];
$visi_about = $_POST['visi_about'];
$misi_about = $_POST['misi_about'];

$gambar_about = $_FILES['gambar_about']['name'];

move_uploaded_file($_FILES['gambar_about']['tmp_name'], "gambar_about/$gambar_about");
// query insert ke database
$tambah = mysqli_query($koneksi, "INSERT INTO tb_about ( deskripsi_about,visi_about, misi_about, gambar_about) 
VALUES ( '$deskripsi_about','$visi_about', '$misi_about', '$gambar_about')");

if($tambah){
    // jika query berhasil
    echo "<script>
  
    window.location.href='../?page=about/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
   
    window.location.href='../?page=about/tambah'
    </script>";
}

?>