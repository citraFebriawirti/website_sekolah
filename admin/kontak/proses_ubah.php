<?php
// Sisipkan file koneksi
include "../koneksi.php";
session_start();
$_SESSION['update_success'] = '  Data Berhasil Diubah 😍';

$id_kontak = $_POST['id_kontak'];
$alamat_kontak = $_POST['alamat_kontak'];
$telepon_kontak = $_POST['telepon_kontak'];
$email_kontak = $_POST['email_kontak'];
$facebook_kontak = $_POST['facebook_kontak'];
$instagram_kontak = $_POST['instagram_kontak'];
$googlemap_link_kontak = $_POST['googlemap_link_kontak'];

// query insert ke database
$ubah= mysqli_query($koneksi, "UPDATE tb_kontak SET id_kontak='$id_kontak',alamat_kontak='$alamat_kontak',telepon_kontak='$telepon_kontak',email_kontak='$email_kontak',facebook_kontak='$facebook_kontak',instagram_kontak='$instagram_kontak',googlemap_link_kontak='$googlemap_link_kontak' WHERE id_kontak='$id_kontak'");




// jika query berhasil 
if ($ubah) {
    echo "<script>
   window.location.href='../?page=kontak/index'
    </script>";
    // jika query gagala
    } else { 
        echo "<script>

    window.location.href='../?page=kontak/ubah&id_kontak=$id_kontak'
    </script>";
    }
    ?>