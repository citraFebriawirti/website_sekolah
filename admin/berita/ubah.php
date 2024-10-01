<?php
// include "./koneksi.php";

$ubah = mysqli_query($koneksi, "SELECT * FROM tb_berita ORDER BY id_berita DESC");
while($data = mysqli_fetch_array($ubah)){


?>
<!-- Modal -->
<div class="modal fade" id="editberita<?=$data['id_berita']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data berita</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="berita/proses_ubah.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_berita" value="<?= $data['id_berita'] ?>">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <input type="hidden" name="id_berita" value="<?= $data['id_berita']; ?>">


                            <div class="form-group">
                                <label for="id_kategori">Nama Kategori</label>
                                <select name="id_kategori" id="id_kategori" class="form-control" required>
                                    <option value="">Silahkan Dipilih</option>
                                    <?php
                                    $kategoriData = $koneksi->query("SELECT * FROM tb_kategori");
                                    while ($kategori = $kategoriData->fetch_assoc()) {
                                    ?>
                                    <option value="<?= $kategori['id_kategori'] ?>"
                                        <?= $kategori['id_kategori'] == $data['id_kategori'] ? 'selected' : '' ?>>
                                        <?= $kategori['nama_kategori'] ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="judul_berita">Judul berita</label>
                                <input type="text" name="judul_berita" id="judul_berita" class="form-control"
                                    value="<?= $data['judul_berita']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="author_berita">author berita</label>
                                <input type="text" name="author_berita" id="author_berita" class="form-control"
                                    value="<?= $data['author_berita']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_berita">tanggal berita</label>
                                <input type="text" name="tanggal_berita" id="tanggal_berita" class="form-control"
                                    value="<?= $data['tanggal_berita']; ?>" required>
                            </div>





                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="deskripsi_berita">Deskripsi berita</label>
                                <textarea name="deskripsi_berita" class="form-control" cols="100"
                                    rows="10"><?= $data['deskripsi_berita'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gambar_berita">Gambar berita:</label>
                                <input type="file" name="gambar_berita" id="gambar_berita" class="form-control-file">
                                <?php if ($data['gambar_berita']): ?>
                                <img src="berita/uploads/<?= $data['gambar_berita']?>" alt="Foto Lama"
                                    class="img-fluid mt-2" style="max-width: 200px;">
                                <?php endif; ?>
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
<?php }?>