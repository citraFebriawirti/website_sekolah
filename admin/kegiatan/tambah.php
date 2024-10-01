<!-- Modal -->
<div class="modal fade" id="tambahkegiatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data kegiatan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="kegiatan/proses_tambah.php" method="post" enctype="multipart/form-data">
                    <div class=" ">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="judul_kegiatan">judul </label>
                                    <input type="text" class="form-control" placeholder="Masukkan judul kegiatan.."
                                        name="judul_kegiatan" required />
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_kegiatan">Tanggal </label>
                                    <input type="date" class="form-control" placeholder="Masukkan tanggal kegiatan.."
                                        name="tanggal_kegiatan" required />
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi_kegiatan">Deskripsi</label>
                                    <textarea class="form-control " name="deskripsi_kegiatan" rows="10"
                                        placeholder="Masukkan Deskripsi Kegiatan..." required></textarea>
                                </div>




                                <div class="form-group">
                                    <label for="gambar_kegiatan">Gambar kegiatan</label>
                                    <br>
                                    <input type="file" id="gambar_kegiatan" name="gambar_kegiatan"
                                        class="form-control-file" required>
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