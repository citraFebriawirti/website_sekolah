<?php 
$koneksi = mysqli_connect("localhost", "root", "", "db_sekolah");

// // Check connection
// if (!$koneksi) {
//     die("Connection failed: " . mysqli_connect_error());
// }


$kategori_count = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as count FROM tb_kategori"))['count'];
$berita_count = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as count FROM tb_berita"))['count'];
$about_count = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as count FROM tb_about"))['count'];
$kegiatan_count =mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as count FROM tb_kegiatan"))['count'];

$kontak_count =mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as count FROM tb_kontak"))['count'];
$user_count =mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as count FROM user"))['count'];
?>