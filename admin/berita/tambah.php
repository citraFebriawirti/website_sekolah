<!-- Modal -->
<div class="modal fade" id="tambahberita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data berita</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="berita/proses_tambah.php" method="post" enctype="multipart/form-data">
                    <div class=" ">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="id_kategori">Nama Kategori</label>
                                    <select name="id_kategori" id="id_kategori" class="form-control" required>
                                        <option value="">Silahkan Dipilih</option>
                                        <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $data['id_kategori'] ?>">
                                            <?= $data['nama_kategori'] ?>
                                        </option>

                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="judul_berita">judul berita</label>
                                    <input type="text" id="judul_berita" name="judul_berita" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="author_berita">author berita</label>
                                    <input type="text" id="author_berita" name="author_berita" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_berita">tanggal berita</label>
                                    <input type="date" id="tanggal_berita" name="tanggal_berita" class="form-control"
                                        required>
                                </div>




                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="deskripsi_berita">Deskripsi berita</label>
                                    <textarea id="deskripsi_berita" name="deskripsi_berita" class="form-control"
                                        rows="5" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="gambar_berita">Gambar berita</label>
                                    <input type="file" id="gambar_berita" name="gambar_berita" class="form-control-file"
                                        required>
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
</div>