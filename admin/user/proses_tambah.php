<?php
// sisipkan file koneksi
include "../koneksi.php";
session_start();
$_SESSION['save_success'] = '  Data Berhasil Ditambahkan 😍';


$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];
$foto = $_FILES['foto']['name'];

move_uploaded_file($_FILES['foto']['tmp_name'], "gambar_user/$foto");
// query insert ke database
$tambah = mysqli_query($koneksi, "INSERT INTO user (id_user, username, password,nama_lengkap, foto ) 
VALUES ('$id_user', '$username', '$password','$nama_lengkap', '$foto')");

if($tambah){
    // jika query berhasil
    echo "<script>
 
    window.location.href='../?page=user/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
   
    window.location.href='../?page=user/tambah'
    </script>";
}

?>