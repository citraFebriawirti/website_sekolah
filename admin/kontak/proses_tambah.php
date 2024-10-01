<?php
// sisipkan file koneksi
include "../koneksi.php";
session_start();
$_SESSION['save_success'] = '  Data Berhasil Ditambahkan 😍';



$alamat_kontak = $_POST['alamat_kontak'];
$telepon_kontak = $_POST['telepon_kontak'];
$email_kontak = $_POST['email_kontak'];
$facebook_kontak = $_POST['facebook_kontak'];
$instagram_kontak = $_POST['instagram_kontak'];
$googlemap_link_kontak = $_POST['googlemap_link_kontak'];



// query insert ke database
$tambah = mysqli_query($koneksi, "INSERT INTO tb_kontak (alamat_kontak, telepon_kontak, email_kontak, facebook_kontak, instagram_kontak, googlemap_link_kontak)
VALUES ('$alamat_kontak', '$telepon_kontak', '$email_kontak', '$facebook_kontak', '$instagram_kontak', '$googlemap_link_kontak')");


if($tambah){
    // jika query berhasil
    echo "<script>
   
    window.location.href='../?page=kontak/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
    
    window.location.href='../?page=kontak/tambah'
    </script>";
}

?>