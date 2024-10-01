<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Data Kelola Data About</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="?page=index">Dashbaord</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Data about</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Data About</h4>
                            <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                                data-bs-target="#tambahabout">
                                <i class="fa fa-plus"></i>
                                Tambah Data
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table table-bordered table-responsive">
                            <table id="basic-datatables" class="display table table-bordered table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th style="width: 10px;">No </th>
                                        <th>Deskripsi</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no=1;
                                    $query = mysqli_query($koneksi,"SELECT * FROM tb_about ORDER BY id_about DESC");
                                    // looping data  
                                    while( $data = mysqli_fetch_array($query)){
                                    ?>
                                    <tr class="text-center">
                                        <td><?= $no++?> </td>
                                        <td><?=$data['deskripsi_about']?></td>
                                        <td><?=$data['visi_about']?></td>
                                        <td><?=$data['misi_about']?></td>

                                        <td>
                                            <?= "<img src='about/gambar_about/".$data['gambar_about']."' style='width: 200px; height: 200px; object-fit: cover;' alt='About' >"; ?>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center  ">
                                                <a href="?page=about/ubah&id_about=<?= $data['id_about'] ?>"
                                                    class="btn btn-success me-4" data-bs-toggle="modal"
                                                    data-bs-target="#editabout<?=$data['id_about']?>"><i
                                                        class="fa fa-pencil-alt"></i></a>

                                                <a onclick="return confirm('Yakin Ingin Dihapus')"
                                                    href="about/hapus.php?page=ubah_about&id_about=<?= $data['id_about'] ?>"
                                                    class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>

                                    </tr>

                                    <?php }?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<?php include 'about/tambah.php'; ?>
<?php include 'about/ubah.php'; ?>


<?php
    if (isset($_SESSION['save_success'])) :
    ?>

<script>
Swal.fire({
    position: "center",
    icon: "success",
    title: "<?= $_SESSION['save_success'] ?>",
    showConfirmButton: false,
    timer: 1500
});
</script>

<?php
        unset($_SESSION['save_success']);
    endif; ?>


<?php
    if (isset($_SESSION['update_success'])) :
    ?>

<script>
Swal.fire({
    position: "center",
    icon: "success",
    title: "<?= $_SESSION['update_success'] ?>",
    showConfirmButton: false,
    timer: 1500
});
</script>

<?php
        unset($_SESSION['update_success']);
    endif; ?>


<?php
    if (isset($_SESSION['delete_success'])) :
    ?>

<script>
Swal.fire({
    position: "center",
    icon: "success",
    title: "<?= $_SESSION['delete_success'] ?>",
    showConfirmButton: false,
    timer: 1500
});
</script>

<?php
        unset($_SESSION['delete_success']);
    endif; ?>