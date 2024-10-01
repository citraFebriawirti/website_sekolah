<?php
// sisipkan file koneksi
include "../koneksi.php";
session_start();
$_SESSION['delete_success'] = '  Data Berhasil Dihapus 😍';

$id_user = $_GET['id_user'];


// query insert ke database
$hapus =mysqli_query($koneksi,"DELETE FROM user WHERE id_user='$id_user'");

if($hapus){
    // jika query berhasil
    echo "<script>
  
    window.location.href='../?page=user/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
   
    window.location.href='../?page=user/index'
    </script>";
}

?>