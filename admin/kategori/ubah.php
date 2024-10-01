<?php


$ubah = mysqli_query($koneksi, "SELECT * FROM tb_kategori  ORDER BY id_kategori DESC");
while($data = mysqli_fetch_array($ubah)){
?>

<!-- Modal -->
<div class="modal fade" id="editkategori<?=$data['id_kategori']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Kategori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="kategori/proses_ubah.php" method="post">
                    <input type="hidden" name="id_kategori" value="<?= $data['id_kategori'] ?>">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori"
                                value="<?= $data['nama_kategori']?>" required>
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