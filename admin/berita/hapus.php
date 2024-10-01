<?php
// sisipkan file koneksi
include "../koneksi.php";

session_start();
$_SESSION['delete_success'] = '  Data Berhasil Dihapus 😍';

$id_berita = $_GET['id_berita'];


// query insert ke database
$hapus =mysqli_query($koneksi,"DELETE FROM  tb_berita WHERE id_berita='$id_berita'");

if($hapus){
    // jika query berhasil
    echo "<script>
  
    window.location.href='../?page=berita/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
 
    window.location.href='../?page=berita/index'
    </script>";
}

?>