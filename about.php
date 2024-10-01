<!-- Header Start -->
<header class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Tentang Kami</h1>
        <nav aria-label="breadcrumb" class="wow fadeInDown" data-wow-delay="0.3s">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                <li class="breadcrumb-item active text-primary" aria-current="page">Tentang Kami</li>
            </ol>
        </nav>
    </div>
</header>
<!-- Header End -->

<!-- About Start -->
<section class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <?php
            include "koneksi.php";
            $query = "SELECT * FROM tb_about ORDER BY id_about DESC ";
            $result = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($result)) {
        ?>
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <figure class="about-img">
                    <img src="admin/about/gambar_about/<?= $data['gambar_about'] ?>"
                        class="img-fluid w-100 rounded-top bg-white" alt="Gambar Tentang Kami"
                        style="height: 400px; object-fit: cover;">
                </figure>
            </div>

            <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <article>
                    <header>
                        <h2 class="text-primary">Tentang Kami</h2>
                        <h1 class="display-5 mb-4">Lightmind International School</h1>
                    </header>
                    <p class="text ps-4 mb-4"><?= $data['deskripsi_about'] ?></p>

                    <section>
                        <h3>Visi</h3>
                        <div class="col-lg-12 col-xl-12 d-flex justify-content-center align-items-center">
                            <p class="text-dark">
                                <i class="fas fa-check-circle text-primary me-1"></i>
                                <?=$data['visi_about']?>
                            </p>
                        </div>
                    </section>

                    <section class="mt-3">
                        <h3>Misi</h3>
                        <p class="text-dark"><?=$data['misi_about']?></p>
                    </section>
                </article>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<!-- About End -->