<?php
// sisipkan file koneksi
include "../koneksi.php";

session_start();
$_SESSION['save_success'] = '  Data Berhasil Ditambahkan 😍';



$judul_kegiatan = $_POST['judul_kegiatan'];
$slug = str_replace('+','-',urlencode($judul_kegiatan));
$tanggal_kegiatan =date('Y-m-d');
$deskripsi_kegiatan = $_POST['deskripsi_kegiatan'];



$gambar_kegiatan = $_FILES['gambar_kegiatan']['name'];

move_uploaded_file($_FILES['gambar_kegiatan']['tmp_name'], "gambar_kegiatan/$gambar_kegiatan");
// query insert ke database
$tambah = mysqli_query($koneksi, "INSERT INTO tb_kegiatan (judul_kegiatan,slug,tanggal_kegiatan,deskripsi_kegiatan, gambar_kegiatan) 
VALUES ( '$judul_kegiatan','$slug', '$tanggal_kegiatan','$deskripsi_kegiatan','$gambar_kegiatan')");

if($tambah){
    // jika query berhasil
    echo "<script>
   
    window.location.href='../?page=kegiatan/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
  
    window.location.href='../?page=kegiatan/tambah'
    </script>";
}

?>