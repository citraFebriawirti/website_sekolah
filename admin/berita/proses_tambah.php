<?php
// sisipkan file koneksi
include "../koneksi.php";
session_start();

$response = array();

$id_kategori = $_POST['id_kategori'];
$judul_berita = $_POST['judul_berita'];
$slug = str_replace('+','-',urlencode($judul_berita));
$author_berita = $_POST['author_berita'];
$deskripsi_berita = $_POST['deskripsi_berita'];
$tanggal_berita = $_POST['tanggal_berita'];
$gambar_berita = $_FILES['gambar_berita']['name'];

// Move uploaded file
if (move_uploaded_file($_FILES['gambar_berita']['tmp_name'], "uploads/$gambar_berita")) {
    // Query insert ke database
    $tambah = mysqli_query($koneksi, "INSERT INTO tb_berita (id_kategori, judul_berita, slug, author_berita, deskripsi_berita, tanggal_berita, gambar_berita) 
    VALUES ('$id_kategori', '$judul_berita', '$slug', '$author_berita', '$deskripsi_berita', '$tanggal_berita', '$gambar_berita')");

    if ($tambah) {
        // Success response
        $response['success'] = true;
    } else {
        // Query failed
        $response['success'] = false;
    }
} else {
    // File upload failed
    $response['success'] = false;
}

// Return JSON response
echo json_encode($response);
?>