<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Data Kelola Data Kategori</h3>
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
                    <a href="#">Dashbaord</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Data Kategori</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Data Ketegori</h4>
                            <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                                data-bs-target="#tambahkategori">
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
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no=1;
                                    $query = mysqli_query($koneksi,"SELECT * FROM tb_kategori ORDER BY id_kategori DESC");
                                    // looping data  
                                    while( $data = mysqli_fetch_array($query)){
                                    ?>
                                    <tr class="text-center">
                                        <td><?= $no++?> </td>
                                        <td><?=$data['nama_kategori']?></td>
                                        <td>
                                            <div class="d-flex justify-content-center  ">
                                                <a href="?page=kategori/ubah&id_kategori=<?= $data['id_kategori'] ?>"
                                                    class="btn btn-success me-4" data-bs-toggle="modal"
                                                    data-bs-target="#editkategori<?=$data['id_kategori']?>"><i
                                                        class="fa fa-pencil-alt"></i></a>

                                                <a onclick="return confirm('Yakin Ingin Dihapus')"
                                                    href="kategori/hapus.php?page=ubah_kategori&id_kategori=<?= $data['id_kategori'] ?>"
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
<?php include 'kategori/tambah.php'; ?>
<?php include 'kategori/ubah.php'; ?>

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