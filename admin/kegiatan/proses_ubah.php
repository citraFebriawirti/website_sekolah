<?php
// Sisipkan file koneksi
include "../koneksi.php";
session_start();
$_SESSION['update_success'] = '  Data Berhasil Diubah 😍';


$id_kegiatan = $_POST ['id_kegiatan'];
$judul_kegiatan = $_POST['judul_kegiatan'];
$tanggal_kegiatan = $_POST['tanggal_kegiatan'];
$deskripsi_kegiatan = $_POST['deskripsi_kegiatan'];



$gambar_kegiatan = $_FILES['gambar_kegiatan']['name'];

if (!empty($gambar_kegiatan)) {
    // Pindahkan file gambar yang diupload ke folder uploads
    move_uploaded_file($_FILES['gambar_kegiatan']['tmp_name'], "gambar_kegiatan/$gambar_kegiatan");
    
    // Query untuk mengupdate data dengan gambar baru
    $sql = "UPDATE tb_kegiatan SET 
              judul_kegiatan='$judul_kegiatan', 
              tanggal_kegiatan='$tanggal_kegiatan', 
                deskripsi_kegiatan='$deskripsi_kegiatan', 
             
                gambar_kegiatan='$gambar_kegiatan'
              
            WHERE id_kegiatan=$id_kegiatan";
} else {
    // Query untuk mengupdate data tanpa mengganti gambar
    $sql = "UPDATE tb_kegiatan SET 
               judul_kegiatan='$judul_kegiatan', 
               tanggal_kegiatan='$tanggal_kegiatan', 
                deskripsi_kegiatan='$deskripsi_kegiatan'
                
             
            WHERE id_kegiatan='$id_kegiatan'";
}

// Eksekusi query
$ubah = mysqli_query($koneksi, $sql);




// Jika query berhasil
if ($ubah) {
    echo "<script>
          
            window.location.href='../?page=kegiatan/index';
          </script>";
} else {
    // Jika query gagal
    echo "<script>
           
            window.location.href='../?page=kegiatan/ubah&id_kegiatan=$id_kegiatan';
          </script>";
}
?>