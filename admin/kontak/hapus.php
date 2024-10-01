<?php
// sisipkan file koneksi
include "../koneksi.php";
session_start();
$_SESSION['delete_success'] = '  Data Berhasil Dihapus 😍';

$id_kontak = $_GET['id_kontak'];


// query insert ke database
$hapus =mysqli_query($koneksi,"DELETE FROM  tb_kontak WHERE id_kontak='$id_kontak'");

if($hapus){
    // jika query berhasil
    echo "<script>
   
    window.location.href='../?page=kontak/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
   
    window.location.href='../?page=kontak/index'
    </script>";
}

?>