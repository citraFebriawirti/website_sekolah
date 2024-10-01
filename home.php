<div>
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <div class="header-carousel-item-img-1">
                <img src="assets/img/carousel-1.jpg" class="img-fluid w-100" alt="Image" />
            </div>
            <div class="carousel-caption">
                <div class="carousel-caption-inner text-start p-3">
                    <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                        data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s">
                        Lightmind International School
                    </h1>
                    <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                        style="animation-delay: 1.5s">
                        "Sekolah unggulan yang berkomitmen mencetak generasi berprestasi,
                        berkarakter, dan siap menghadapi tantangan masa depan."
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4 fadeInUp animate__animated"
                        data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s" href="#">Lebih
                        Lengkap</a>

                </div>
            </div>
        </div>
        <div class="header-carousel-item mx-auto">
            <div class="header-carousel-item-img-2">
                <img src="assets/img/carousel-2.jpg" class="img-fluid w-100" alt="Image" />
            </div>
            <div class="carousel-caption">
                <div class="carousel-caption-inner text-center p-3">
                    <h1 class="display-1 text-capitalize text-white mb-4">
                        Lightmind International School
                    </h1>
                    <p class="mb-5 fs-5">
                        "Lembaga pendidikan yang berfokus pada pengembangan akademik dan
                        karakter siswa, serta menciptakan lingkungan belajar yang inovatif dan inspiratif."
                    </p>

                    <a class="btn btn-dark rounded-pill py-3 px-5 mb-4" href="#">Lebih Lengkap</a>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <div class="header-carousel-item-img-3">
                <img src="assets/img/carousel-3.jpg" class="img-fluid w-100" alt="Image" />
            </div>
            <div class="carousel-caption">
                <div class="carousel-caption-inner text-end p-3">
                    <h1 class="display-1 text-capitalize text-white mb-4">
                        Lightmind International School
                    </h1>
                    <p class="mb-5 fs-5">
                        "Berperan aktif dalam membentuk siswa yang cerdas, berintegritas, dan berdaya
                        saing tinggi melalui pendidikan yang berkualitas dan kegiatan ekstrakurikuler yang beragam."
                    </p>

                    <a class="btn btn-dark rounded-pill py-3 px-5 mb-4" href="#">Lebih Lengkap</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <?php
            include "koneksi.php";
            $query = "SELECT * FROM tb_about
            ORDER BY id_about DESC";
            $result = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($result)) {
            ?>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="about-img">

                        <img src="admin/about/gambar_about/<?= $data['gambar_about'] ?>"
                            class="img-fluid w-100 rounded-bottom" alt="Image" />
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-primary">Tentang Kami</h4>
                    <h1 class="display-5 mb-4">
                        Lightmind International School

                    </h1>
                    <p class="text ps-4 mb-4 " style="text-align: justify;">
                        <?=$data['deskripsi_about']?>
                    </p>

                    <div class="row g-4 justify-content-between mb-5">
                        <div class="col-xl-5">
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-5">Lihat Selengkapnya</a>
                        </div>

                    </div>

                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- About End -->



    <!-- kegiatan Start -->
    <div class="container-fluid project">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px">
                <h4 class="text-primary">Kegiatan</h4>
                <h1 class="display-4">Explore Kegiatan Kami</h1>
            </div>
            <div class="project-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php
            include "koneksi.php";
            $query = "SELECT * FROM tb_kegiatan
            ORDER BY id_kegiatan DESC";
            $result = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="project-img">
                        <img src="admin/kegiatan/gambar_kegiatan/<?= $data['gambar_kegiatan'] ?>"
                            class="img-fluid w-100 rounded" alt="Image" />
                    </div>
                    <div class="project-content bg-light rounded p-4">
                        <div class="project-content-inner">
                            <div class="project-icon mb-3">
                                <i class="fa fa-clock text-primary"></i>
                                <?= $data['tanggal_kegiatan'] ?>
                            </div>
                            <p class="text-dark fs-5 mb-3"><?= $data['judul_kegiatan'] ?></p>
                            <a href="#" class="h4"><?= substr($data['deskripsi_kegiatan'], 0, 40) ?>...</a>
                            <div class="pt-4">
                                <a class="btn btn-light rounded-pill py-3 px-5"
                                    href="detail_kegiatan-<?= $data['slug'] ?>">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

            </div>
        </div>
    </div>
    <!-- kegiatan End -->

    <!-- Berita Start -->
    <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px">
                <h4 class="text-primary">Berita</h4>
                <h1 class="display-4">Berita Menarik</h1>
            </div>

            <div class="row g-4 justify-content-center">
                <?php
            include "koneksi.php";
            $query = "SELECT * FROM tb_berita
            JOIN tb_kategori ON tb_berita.id_kategori = tb_kategori.id_kategori
            ORDER BY id_berita DESC
           ";
            $result = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png)">
                        <div class="mb-4">
                            <h4 class="text-primary mb-2"><?= $data['judul_berita'] ?></h4>
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">
                                    <span class="text-dark fw-bold">On </span><?= $data['tanggal_berita'] ?>
                                </p>
                                <p class="mb-0">
                                    <span class="text-dark fw-bold">By </span> <?= $data['author_berita'] ?>
                                </p>
                            </div>
                        </div>
                        <div class="project-img">
                            <img src="admin/berita/uploads/<?= $data['gambar_berita'] ?>"
                                class="img-fluid w-100 rounded" alt="Image" />

                            <div class="blog-plus-icon">
                                <a href="admin/berita/uploads/<?= $data['gambar_berita'] ?>" data-lightbox="blog-1"
                                    class="btn btn-primary btn-md-square rounded-pill"><i
                                        class="fas fa-plus fa-1x"></i></a>

                            </div>
                        </div>
                        <div class="my-4">
                            <a href="detail_berita-<?= $data['slug'] ?>"
                                class="h4"><?= substr($data['deskripsi_berita'], 0, 40) ?>...</a>

                        </div>
                        <a class="btn btn-primary rounded-pill py-2 px-4"
                            href="detail_berita-<?= $data['slug'] ?>">Lihat Detail</a>
                    </div>
                </div>

                <?php }?>

            </div>

        </div>
    </div>
    <!-- Berita End -->



    <!-- FAQ Start -->
    <div class="container-fluid faq py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="pb-5">
                        <h4 class="text-primary">FAQs</h4>
                        <h1 class="display-4">Dapatkan Jawaban atas Pertanyaan Umum</h1>
                    </div>
                    <div class="accordion bg-light rounded p-4" id="accordionExample">
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button text-dark fs-5 fw-bold rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Apa itu Lightmind International School?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>Lightmind International School</h5>
                                    <p>
                                        Lightmind International School adalah sebuah sekolah internasional yang
                                        berkomitmen untuk
                                        memberikan pendidikan berkualitas tinggi berbasis kurikulum internasional.
                                        Sekolah ini
                                        mengedepankan perkembangan holistik siswa dengan menyediakan lingkungan belajar
                                        yang
                                        mendukung kreativitas, inovasi, dan keberagaman.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-dark fs-5 fw-bold rounded-top"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Apa program pendidikan yang ditawarkan oleh Lightmind International School?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>Program Pendidikan</h5>
                                    <p>
                                        Lightmind International School menawarkan program pendidikan mulai dari tingkat
                                        taman
                                        kanak-kanak hingga sekolah menengah atas (TK-SMA) berbasis kurikulum Cambridge
                                        yang
                                        terakreditasi internasional. Fokusnya pada mata pelajaran seperti Matematika,
                                        Sains, Bahasa
                                        Inggris, dan Teknologi Informasi.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-0">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed text-dark fs-5 fw-bold rounded-top"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    Apa keunggulan Lightmind International School dibandingkan sekolah lain?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>Keunggulan</h5>
                                    <p>
                                        Keunggulan Lightmind International School terletak pada kurikulum internasional
                                        berstandar
                                        tinggi, fasilitas lengkap, serta pendekatan pendidikan inovatif yang
                                        mempersiapkan siswa
                                        menjadi pemimpin masa depan yang berintegritas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="faq-img RotateMoveRight rounded">
                        <img src="assets/img/faq-img.jpg" class="img-fluid rounded w-100" alt="Image" />

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End -->
</div>