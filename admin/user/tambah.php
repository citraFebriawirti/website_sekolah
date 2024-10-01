<!-- Modal -->
<div class="modal fade" id="tambahuser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data user</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="user/proses_tambah.php" method="post" enctype="multipart/form-data">
                    <div class=" ">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="username">Username </label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Username.."
                                        name="username" required />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password </label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Password.."
                                        name="password" required />
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap </label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama nama lengkap.."
                                        name="nama_lengkap" required />
                                </div>


                                <div class="form-group">
                                    <label for="foto">Gambar user</label>
                                    <br>
                                    <input type="file" id="foto" name="foto" class="form-control-file" required>
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