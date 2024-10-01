<?php
// include "./koneksi.php";

$ubah = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user DESC");
while($data = mysqli_fetch_array($ubah)){


?>
<!-- Modal -->
<div class="modal fade" id="edituser<?=$data['id_user']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data user</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="user/proses_ubah.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_user" value="<?= $data['id_user'] ?>">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <input type="hidden" name="id_user" value="<?= $data['id_user']; ?>">
                            <div class="form-group">
                                <label for="username">Username </label>
                                <input type="text" class="form-control" name="username" value="<?= $data['username']?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password"
                                    value="<?= $data['password']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="nama_lengkap" class="form-control" name="nama_lengkap"
                                    value="<?= $data['nama_lengkap']?>" required>
                            </div>



                            <div class="form-group">
                                <label for="foto">Gambar user</label>

                                <input type="file" name="foto" id="foto" class="form-control-file">
                                <?php if ($data['foto']): ?>
                                <img src="user/gambar_user/<?= $data['foto']?>" alt="Foto Lama" class="img-fluid mt-2"
                                    style="max-width: 200px;">
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