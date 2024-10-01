<?php
// Sisipkan file koneksi
include "../koneksi.php";

session_start();
$_SESSION['update_success'] = '  Data Berhasil Diubah 😍';


$id_kategori = $_POST['id_kategori'];
$id_berita = $_POST['id_berita'];
$judul_berita = $_POST['judul_berita'];
$author_berita = $_POST['author_berita'];
$deskripsi_berita = $_POST['deskripsi_berita'];
$tanggal_berita = $_POST['tanggal_berita'];


$gambar_berita = $_FILES['gambar_berita']['name'];

if (!empty($gambar_berita)) {
    // Pindahkan file gambar yang diupload ke folder uploads
    move_uploaded_file($_FILES['gambar_berita']['tmp_name'], "uploads/$gambar_berita");
    
    // Query untuk mengupdate data dengan gambar baru
    $sql = "UPDATE tb_berita SET 
                id_kategori='$id_kategori', 
                judul_berita='$judul_berita', 
                author_berita='$author_berita', 
                deskripsi_berita='$deskripsi_berita', 
                tanggal_berita='$tanggal_berita', 
              
                gambar_berita='$gambar_berita' 
                
            WHERE id_berita=$id_berita";
} else {
    // Query untuk mengupdate data tanpa mengganti gambar
    $sql = "UPDATE tb_berita SET 
                id_kategori='$id_kategori', 
                judul_berita='$judul_berita', 
                author_berita='$author_berita', 
                tanggal_berita='$tanggal_berita',
                deskripsi_berita='$deskripsi_berita' 
                
                
            WHERE id_berita='$id_berita'";
}

// Eksekusi query
$ubah = mysqli_query($koneksi, $sql);

// $gambar_berita = $_FILES['gambar_berita']['name'];
// move_uploaded_file($_FILES['gambar_berita']['tmp_name'], "uploads/$gambar_berita"); 



// Jika query berhasil
if ($ubah) {
    echo "<script>
        
            window.location.href='../?page=berita/index';
          </script>";
} else {
    // Jika query gagal
    echo "<script>
   
            window.location.href='../?page=berita/ubah&id_berita=$id_berita';
          </script>";
}
?>