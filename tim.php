<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i
                                class="fa fa-chevron-right"></i></a></span> <span>Tim <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Tim</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <?php
            include "koneksi.php";
            $query = "SELECT * FROM tb_tim
                    
            ORDER BY id_tim DESC ";
            $result = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($result)) {
            ?>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="blog-single.html" class="block-20 "
                        style="background-image: url('admin/tim/gambar_tim/<?= $data['gambar_tim'] ?>');width:350px">
                    </a>
                    <div class="text">

                        <h3 class="heading"><a href="#"><?=$data['nama_tim']?></a></h3>
                        <p><?=$data['jabatan_tim']?>
                        </p>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <?php }?>

        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-intro ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="img" style="background-image: url(assets/images/bg_2.jpg);">
                    <div class="overlay"></div>
                    <h2>Kami Adalah Pasific Travel Agency</h2>
                    <p>Kami dapat mengelola bangunan impian Anda Sebuah sungai kecil bernama Duden mengalir di
                        tempatnya</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Lihat Selengkapnya</a></p>
                </div>
            </div>
        </div>
    </div>
</section>