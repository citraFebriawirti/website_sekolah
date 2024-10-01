<!-- Modal -->
<div class="modal fade" id="tambahabout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data About</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="about/proses_tambah.php" method="post" enctype="multipart/form-data">
                    <div class=" ">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="deskripsi_about">Deskripsi About</label>
                                    <textarea id="editor" name="deskripsi_about"
                                        class="form-control ckeditor"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="gambar_about">Gambar About</label>
                                    <input type="file" id="gambar_about" name="gambar_about" class="form-control-file"
                                        required>
                                </div>

                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="misi_about">Misi</label>
                                    <textarea id="editor" name="misi_about" class="form-control ckeditor"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="visi_about">Visi</label>
                                    <textarea id="editor" name="visi_about" class="form-control ckeditor"></textarea>
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