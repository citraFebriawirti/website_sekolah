<?php
// sisipkan file koneksi
include "../koneksi.php";

session_start();
$_SESSION['delete_success'] = '  Data Berhasil Dihapus 😍';

$id_kegiatan = $_GET['id_kegiatan'];


// query insert ke database
$hapus =mysqli_query($koneksi,"DELETE FROM  tb_kegiatan WHERE id_kegiatan='$id_kegiatan'");

if($hapus){
    // jika query berhasil
    echo "<script>
   
    window.location.href='../?page=kegiatan/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
  
    window.location.href='../?page=kegiatan/index'
    </script>";
}

?>