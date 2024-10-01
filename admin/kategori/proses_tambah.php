<?php

include "../koneksi.php";


session_start();
$_SESSION['save_success'] = '  Data Berhasil Ditambahkan 😍';


$nama_kategori = $_POST['nama_kategori'];

// query insert ke database
$tambah =mysqli_query($koneksi,"INSERT INTO tb_kategori (nama_kategori) VALUES ('$nama_kategori')");

if($tambah){
    // jika query berhasil
    echo "<script>
    window.location.href='../?page=kategori/index';
</script>";
}else{
    // jika query gagal
    echo "<script>
      window.location.href='../?page=kategori/index';
    </script>";
}

?>