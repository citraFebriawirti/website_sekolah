<?php
$slug = $_GET['slug'];
$detail = mysqli_query($koneksi, "SELECT * FROM tb_berita 
JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori
WHERE slug='$slug'");
$data = mysqli_fetch_array($detail);
?>
<!-- Header Start -->
<header class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Detail Berita</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Berita</a></li>
                <li class="breadcrumb-item active text-primary" aria-current="page">Detail Berita</li>
            </ol>
        </nav>
    </div>
</header>
<!-- Header End -->

<!-- Article Start -->
<main class="container-fluid about bg-light py-5">
    <article class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <figure class="about-img">
                    <img src="admin/berita/uploads/<?= $data['gambar_berita'] ?>"
                        class="img-fluid w-100 rounded-top bg-white" alt="Image of <?= $data['judul_berita'] ?>">
                </figure>
            </div>
            <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <header>
                    <h2 class="text-primary">Detail</h2>
                    <h1 class="display-5 mb-4"><?= $data['judul_berita'] ?></h1>
                </header>
                <section class="row g-4 justify-content-between mb-5">
                    <div class="col-lg-6 col-xl-5">
                        <time class="text-dark" datetime="<?= $data['tanggal_berita'] ?>">
                            <i class="fas fa-check-circle text-primary me-1"></i><?= $data['tanggal_berita'] ?>
                        </time>
                    </div>
                    <div class="col-lg-6 col-xl-7">
                        <p class="text-dark">
                            <i class="fas fa-check-circle text-primary me-1"></i> <?= $data['author_berita'] ?>
                        </p>
                    </div>
                </section>
                <section>
                    <p class="text ps-4 mb-4"><?= $data['deskripsi_berita'] ?></p>
                </section>
            </div>
        </div>
    </article>
</main>
<!-- Article End -->