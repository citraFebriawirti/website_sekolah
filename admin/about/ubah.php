<?php
// include "./koneksi.php";

$ubah = mysqli_query($koneksi, "SELECT * FROM tb_about ORDER BY id_about DESC");
while($data = mysqli_fetch_array($ubah)){


?>
<!-- Modal -->
<div class="modal fade" id="editabout<?=$data['id_about']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data About</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="about/proses_ubah.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_about" value="<?= $data['id_about'] ?>">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <input type="hidden" name="id_about" value="<?= $data['id_about']; ?>">


                            <div class="form-group">
                                <label for="deskripsi_about">Deskripsi about</label>
                                <textarea name="deskripsi_about" class="form-control ckeditor"
                                    id="editor"><?= $data['deskripsi_about'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gambar_about">Gambar Berita:</label>
                                <input type="file" name="gambar_about" id="gambar_about" class="form-control-file">
                                <?php if ($data['gambar_about']): ?>
                                <img src="about/gambar_about/<?= $data['gambar_about']?>" alt="Foto Lama"
                                    class="img-fluid mt-2" style="max-width: 200px;">
                                <?php endif; ?>
                            </div>


                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="visi_about">Visi</label>
                                <textarea name="visi_about" class="form-control ckeditor" cols="100" rows="10"
                                    id="editor"><?= $data['visi_about'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="misi_about">Misi</label>
                                <textarea name="misi_about" class="form-control ckeditor" cols="100"
                                    rows="10"><?= $data['misi_about'] ?></textarea>
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