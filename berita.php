<!-- Header Start -->
<header class="container-fluid bg-breadcrumb mb-5">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Berita</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Berita</li>
            </ol>
        </nav>
    </div>
</header>
<!-- Header End -->

<!-- Blog Start -->
<main class="container-fluid blog pb-5">
    <div class="container pb-5">
        <header class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h2 class="text-primary">Berita</h2>
            <h1 class="display-4">Berita Menarik</h1>
        </header>

        <section class="row g-4 justify-content-center">
            <?php
            include "koneksi.php";
            $query = "SELECT * FROM tb_berita
            JOIN tb_kategori ON tb_berita.id_kategori = tb_kategori.id_kategori
            ORDER BY id_berita DESC";
            $result = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($result)) {
            ?>
            <article class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
                    <header class="mb-4">
                        <h3 class="text-primary mb-2"><?= $data['judul_berita'] ?></h3>
                        <div class="d-flex justify-content-between">
                            <p class="mb-0">
                                <span class="text-dark fw-bold">On </span><?= $data['tanggal_berita'] ?>
                            </p>
                            <p class="mb-0">
                                <span class="text-dark fw-bold">By </span><?= $data['author_berita'] ?>
                            </p>
                        </div>
                    </header>
                    <div class="project-img">
                        <img src="admin/berita/uploads/<?= $data['gambar_berita'] ?>" class="img-fluid w-100 rounded"
                            alt="Image" />
                        <div class="blog-plus-icon">
                            <a href="admin/berita/uploads/<?= $data['gambar_berita'] ?>" data-lightbox="blog-1"
                                class="btn btn-primary btn-md-square rounded-pill">
                                <i class="fas fa-plus fa-1x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="my-4">
                        <a href="detail_berita-<?= $data['slug'] ?>"
                            class="h4"><?= substr($data['deskripsi_berita'], 0, 60) ?>...</a>
                    </div>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="detail_berita-<?= $data['slug'] ?>">Lihat
                        Detail</a>
                </div>
            </article>
            <?php } ?>
        </section>
    </div>
</main>
<!-- Blog End -->