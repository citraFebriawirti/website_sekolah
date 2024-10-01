<?php
// sisipkan file koneksi

include "../koneksi.php";
session_start();
$_SESSION['update_success'] = '  Data Berhasil Diubah 🤩';

$id_kategori = $_POST ['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

// query insert ke database
$ubah= mysqli_query($koneksi, "UPDATE tb_kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");

// jika query berhasil 
if ($ubah) {
    echo "<script>
 window.location.href='../?page=kategori/index'
    </script>";
    // jika query gagala
    } else { 
        echo "<script>
    window.location.href='../?page=kategori/ubah&id_kategori=$id_kategori'
    </script>";
    }
    ?>