<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Lightmind International School
                        </h4>
                        <?php
            include "koneksi.php";
            $query = "SELECT * FROM tb_about
            ORDER BY id_about DESC";
            $result = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($result)) {
            ?>
                        <p class="mb-3">
                            <?= substr($data['deskripsi_about'], 0, 50) . (strlen($data['deskripsi_about']) > 30 ? '...' : '') ?>
                        </p>

                        <?php }?>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Menu</h4>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Beranda</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Tentang Kami</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Kegiatan</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Berita</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Kontak</a>

                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Kontak</h4>
                    <?php
                            include "koneksi.php";
                            $query = "SELECT * FROM tb_kontak
                            ORDER BY id_kontak DESC";
                            $result = mysqli_query($koneksi, $query);
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
                    <a href=""><i class="fa fa-map-marker-alt me-2"></i> <?=$data['alamat_kontak']?></a>
                    <a href=""><i class="fas fa-envelope me-2"></i> <?=$data['email_kontak']?></a>

                    <a href=""><i class="fas fa-phone me-2"></i> <?=$data['telepon_kontak']?></a>

                    <div class="d-flex align-items-center">
                        <a class="btn btn-light btn-md-square me-2" href="<?=$data['facebook_kontak']?>"><i
                                class="fab fa-facebook-f"></i></a>

                        <a class="btn btn-light btn-md-square me-2" href="<?=$data['instagram_kontak']?>"><i
                                class="fab fa-instagram"></i></a>

                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item-post d-flex flex-column">
                    <h4 class="text-white mb-4">Popular Post</h4>
                    <?php
            include "koneksi.php";
            $query = "SELECT * FROM tb_kegiatan
            ORDER BY id_kegiatan DESC LIMIT 1";
            $result = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_array($result)) {
            ?>
                    <div class="d-flex flex-column mb-3">
                        <p class="text-uppercase text-primary mb-2"><?= $data['judul_kegiatan'] ?></p>
                        <a href="#" class="text-body"><?= $data['deskripsi_kegiatan'] ?></a>
                    </div>
                    <?php }?>

                    <div class="footer-btn text-start">
                        <a href="kegiatan" class="btn btn-light rounded-pill px-4">View All Post <i
                                class="fa fa-arrow-right ms-1"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-body"><a href="#" class="border-bottom text-primary"><i
                            class="fas fa-copyright text-light me-2"></i>Citra Febriawirti</a>, All right
                    reserved.</span>
            </div>

        </div>
    </div>
</div>
<!-- Copyright End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/wow/wow.min.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>
<script src="assets/lib/waypoints/waypoints.min.js"></script>
<script src="assets/lib/counterup/counterup.min.js"></script>
<script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="assets/js/main.js"></script>