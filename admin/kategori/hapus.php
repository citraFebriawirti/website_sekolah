<?php
// sisipkan file koneksi
include "../koneksi.php";
session_start();
$_SESSION['delete_success'] = '  Data Berhasil Dihapus 🤯';

$id_kategori = $_GET['id_kategori'];


// query insert ke database
$hapus =mysqli_query($koneksi,"DELETE FROM  tb_kategori WHERE id_kategori='$id_kategori'");

if($hapus){
    // jika query berhasil
    echo "<script>

    window.location.href='../?page=kategori/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
 
    window.location.href='../?page=kategori/index'
    </script>";
}

?>