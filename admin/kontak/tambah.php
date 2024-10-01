<!-- Modal -->
<div class="modal fade" id="tambahkontak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data kontak</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="kontak/proses_tambah.php" method="post" enctype="multipart/form-data">
                    <div class=" ">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="alamat_kontak">Alamat </label>
                                    <input type="text" class="form-control" placeholder="Masukkan Alamat Kontak.."
                                        name="alamat_kontak" required />
                                </div>
                                <div class="form-group">
                                    <label for="telepon_kontak">Telepon </label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Kategori.."
                                        name="telepon_kontak" required />
                                </div>
                                <div class="form-group">
                                    <label for="email_kontak">Email </label>
                                    <input type="email" class="form-control" placeholder="Masukkan Nama Kategori.."
                                        name="email_kontak" required />
                                </div>
                                <div class="form-group">
                                    <label for="facebook_kontak">Facebook </label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Kategori.."
                                        name="facebook_kontak" required />
                                </div>

                            </div>
                            <div class="col-md-6 col-lg-6">

                                <div class="form-group">
                                    <label for="instagram_kontak">Instagram </label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Kategori.."
                                        name="instagram_kontak" required />
                                </div>
                                <div class="form-group">
                                    <label for="googlemap_link_kontak">Link Google Maps </label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Kategori.."
                                        name="googlemap_link_kontak" required />
                                </div>







                            </div>

                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>