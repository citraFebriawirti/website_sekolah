<?php
// include "./koneksi.php";

$ubah = mysqli_query($koneksi, "SELECT * FROM tb_kegiatan ORDER BY id_kegiatan DESC");
while($data = mysqli_fetch_array($ubah)){


?>
<!-- Modal -->
<div class="modal fade" id="editkegiatan<?=$data['id_kegiatan']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data kegiatan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="kegiatan/proses_ubah.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_kegiatan" value="<?= $data['id_kegiatan'] ?>">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <input type="hidden" name="id_kegiatan" value="<?= $data['id_kegiatan']; ?>">
                            <div class="form-group">
                                <label for="judul_kegiatan">Judul </label>
                                <input type="text" class="form-control" name="judul_kegiatan"
                                    value="<?= $data['judul_kegiatan']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_kegiatan">tanggal</label>
                                <input type="date" class="form-control" name="tanggal_kegiatan"
                                    value="<?= $data['tanggal_kegiatan']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_kegiatan">Deskripsi</label>
                                <textarea name="deskripsi_kegiatan" class="form-control" cols="100"
                                    rows="10"><?= $data['deskripsi_kegiatan'] ?></textarea>
                            </div>


                            <div class="form-group">
                                <label for="gambar_kegiatan">Gambar kegiatan</label>

                                <input type="file" name="gambar_kegiatan" id="gambar_kegiatan"
                                    class="form-control-file">
                                <?php if ($data['gambar_kegiatan']): ?>
                                <img src="kegiatan/gambar_kegiatan/<?= $data['gambar_kegiatan']?>" alt="Foto Lama"
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