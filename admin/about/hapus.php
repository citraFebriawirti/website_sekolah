<?php
// sisipkan file koneksi
include "../koneksi.php";
session_start();
$_SESSION['delete_success'] = '  Data Berhasil Dihapus 😍';

$id_about = $_GET['id_about'];


// query insert ke database
$hapus =mysqli_query($koneksi,"DELETE FROM  tb_about WHERE id_about='$id_about'");

if($hapus){
    // jika query berhasil
    echo "<script>
  
    window.location.href='../?page=about/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
    
    window.location.href='../?page=about/index'
    </script>";
}

?>