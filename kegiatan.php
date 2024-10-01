<!-- Header Start -->
<header class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kegiatan</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                <li class="breadcrumb-item active text-primary" aria-current="page">Kegiatan</li>
            </ol>
        </nav>
    </div>
</header>
<!-- Header End -->

<!-- Main Content Start -->
<main class="container-fluid project pt-5">
    <section class="container pt-5">
        <header class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h2 class="text-primary">Kegiatan</h2>
            <h3 class="display-4">Explore Kegiatan Kami</h3>
        </header>
        <div class="project-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php
            include "koneksi.php";
            $query = "SELECT * FROM tb_kegiatan
            ORDER BY id_kegiatan DESC";
            $result = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($result)) {
            ?>
            <article class="project-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                <figure class="project-img">
                    <img src="admin/kegiatan/gambar_kegiatan/<?= $data['gambar_kegiatan'] ?>"
                        class="img-fluid w-100 rounded" alt="Gambar Kegiatan" />
                </figure>
                <div class="project-content bg-light rounded p-4">
                    <div class="project-content-inner">
                        <div class="project-icon mb-3">
                            <i class="fa fa-clock text-primary"></i>
                            <time datetime="<?= $data['tanggal_kegiatan'] ?>"><?= $data['tanggal_kegiatan'] ?></time>
                        </div>
                        <h4 class="text-primary fs-5 mb-3"><?= $data['judul_kegiatan'] ?></h4>

                        <a href="detail_kegiatan-<?= $data['slug'] ?>"
                            class="h4"><?= substr($data['deskripsi_kegiatan'], 0, 60) ?>...</a>
                        <div class="pt-4">
                            <a class="btn btn-light rounded-pill py-3 px-5"
                                href="detail_kegiatan-<?= $data['slug'] ?>">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </article>
            <?php }?>
        </div>
    </section>
</main>
<!-- Main Content End -->