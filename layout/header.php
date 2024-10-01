<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Lightmind International School</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>


    <!-- Topbar Start -->
    <div class="container-fluid topbar px-0 d-none d-lg-block">
        <div class="container px-0">
            <?php
                            include "koneksi.php";
                            $query = "SELECT * FROM tb_kontak
                            ORDER BY id_kontak DESC";
                            $result = mysqli_query($koneksi, $query);
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
            <div class="row gx-0 align-items-center" style="height: 45px">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-muted me-4"><i
                                class="fas fa-map-marker-alt text-primary me-2"></i><?=$data['alamat_kontak']?></a>
                        <a href="#" class="text-muted me-4"><i
                                class="fas fa-phone-alt text-primary me-2"></i><?=$data['telepon_kontak']?></a>
                        <a href="#" class="text-muted me-0"><i
                                class="fas fa-envelope text-primary me-2"></i><?=$data['email_kontak']?></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="<?=$data['facebook_kontak']?>"
                            class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i
                                class="fab fa-facebook-f text-white"></i></a>

                        <a href="<?=$data['instagram_kontak']?>"
                            class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i
                                class="fab fa-instagram text-white"></i></a>

                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid sticky-top px-0">
        <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%"></div>
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                <a href="index.php" class="navbar-brand p-0 d-flex align-items-center">
                    <img src="assets/img/logo.png" alt="Logo" style="height: 40px; margin-right: 10px" />
                    <h4 class="text-primary m-0">Lightmind International School</h4>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="beranda"
                            class="nav-item nav-link <?php echo $page == 'beranda' ? 'active' : ''; ?>">Beranda</a>
                        <a href="tentang"
                            class="nav-item nav-link <?php echo $page == 'tentang' ? 'active' : ''; ?>">Tentang Kami</a>
                        <a href="kegiatan"
                            class="nav-item nav-link <?php echo $page == 'kegiatan' ? 'active' : ''; ?>">Kegiatan</a>
                        <a href="berita"
                            class="nav-item nav-link <?php echo $page == 'berita' ? 'active' : ''; ?>">Berita</a>
                        <a href="kontak"
                            class="nav-item nav-link <?php echo $page == 'kontak' ? 'active' : ''; ?>">Kontak</a>
                    </div>

                    <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                        <button class="btn btn-primary btn-md-square mx-2" data-bs-toggle="modal"
                            data-bs-target="#searchModal">
                            <i class="fas fa-search"></i>
                        </button>
                        <a href="admin/login/index.php"
                            class="btn btn-primary rounded-pill text-white py-2 px-4 ms-2 flex-wrap flex-sm-shrink-0">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="exampleModalLabel">
                        Search by keyword
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1" />
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->





</body>

</html>