<?php
// include "./koneksi.php";

$ubah = mysqli_query($koneksi, "SELECT * FROM tb_kontak ORDER BY id_kontak DESC");
while($data = mysqli_fetch_array($ubah)){


?>
<!-- Modal -->
<div class="modal fade" id="editkontak<?=$data['id_kontak']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data kontak</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="kontak/proses_ubah.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_kontak" value="<?= $data['id_kontak'] ?>">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <input type="hidden" name="id_kontak" value="<?= $data['id_kontak']; ?>">


                            <div class="form-group">
                                <label for="alamat_kontak">Alamat </label>
                                <input type="text" class="form-control" name="alamat_kontak"
                                    value="<?= $data['alamat_kontak']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="telepon_kontak">Telepon </label>
                                <input type="text" class="form-control" name="telepon_kontak"
                                    value="<?= $data['telepon_kontak']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email_kontak">Email </label>
                                <input type="text" class="form-control" name="email_kontak"
                                    value="<?= $data['email_kontak']?>" required>
                            </div>



                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="facebook_kontak">Facebook </label>
                                <input type="text" class="form-control" name="facebook_kontak"
                                    value="<?= $data['facebook_kontak']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="instagram_kontak">Instagram </label>
                                <input type="text" class="form-control" name="instagram_kontak"
                                    value="<?= $data['instagram_kontak']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="googlemap_link_kontak">Link Google Maps </label>
                                <input type="text" class="form-control" name="googlemap_link_kontak"
                                    value="<?= $data['googlemap_link_kontak']?>" required>
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