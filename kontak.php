<!-- Header Start -->
<header class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kontak</h4>
        <nav>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                <li class="breadcrumb-item active text-primary">Kontak</li>
            </ol>
        </nav>
    </div>
</header>
<!-- Header End -->

<!-- Contact Start -->
<section class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <article class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="contact-item">
                    <div class="pb-5">
                        <h4 class="text-primary">Kontak</h4>
                        <h1 class="display-4 mb-4">Silahkan Hubungi Kami</h1>
                    </div>
                    <?php
                        include "koneksi.php";
                        $query = "SELECT * FROM tb_kontak ORDER BY id_kontak DESC";
                        $result = mysqli_query($koneksi, $query);
                        while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary btn-lg-square rounded-circle p-4"><i class="fa fa-home text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h4>Alamat</h4>
                            <p class="mb-0"><?=$data['alamat_kontak']?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary btn-lg-square rounded-circle p-2"><i
                                class="fa fa-phone-alt text-white"></i></div>
                        <div class="ms-4">
                            <h4>Telepon</h4>
                            <p class="mb-0">+<?=$data['telepon_kontak']?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary btn-lg-square rounded-circle p-2"><i
                                class="fa fa-envelope-open text-white"></i></div>
                        <div class="ms-4">
                            <h4>Email</h4>
                            <p class="mb-0"><?=$data['email_kontak']?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </article>
            <article class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <form method="POST" action="send_email.php" id="contactForm">
                    <div class="row g-3">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"
                                    required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="message" id="message"
                                    placeholder="Leave a message here" style="height: 160px" required></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 py-3" id="submitButton">
                                Send Message
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"
                                    style="display: none;"></span>
                            </button>
                        </div>
                    </div>
                </form>
            </article>
            <article class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <?php
                    include "koneksi.php";
                    $query = "SELECT * FROM tb_kontak ORDER BY id_kontak DESC";
                    $result = mysqli_query($koneksi, $query);
                    while ($data = mysqli_fetch_array($result)) {
                ?>
                <div class="rounded h-100">
                    <iframe class="rounded-top w-100" style="height: 500px; margin-bottom: -6px;"
                        src="<?=$data['googlemap_link_kontak']?>" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-bottom p-4">
                        <div class="d-flex">
                            <a class="btn btn-dark btn-lg-square rounded-circle me-2"
                                href="<?=$data['facebook_kontak']?>"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-lg-square rounded-circle mx-2"
                                href="<?=$data['instagram_kontak']?>"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </article>
        </div>
    </div>
</section>
<!-- Contact End -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        var button = $('#submitButton');
        var spinner = button.find('.spinner-border');

        // Show spinner and change button text
        spinner.show(); // Show spinner
        button.prop('disabled', true);
        button.text('Sending...');

        // Send form using AJAX
        var formData = new FormData(this);
        $.ajax({
            url: 'send_email.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                // Display success message if needed
                alert('Pesan Berhasil Dikirim');
            },
            error: function() {
                alert('Pesan Gagal Dikirim');
            },
            complete: function() {
                // Reset button after submission
                button.prop('disabled', false);
                button.text('Send Message');
                spinner.hide(); // Hide spinner
            }
        });
    });
});
</script>

<style>
.spinner-border {
    display: none;
    /* Hide spinner by default */
    margin-left: 10px;
}
</style>