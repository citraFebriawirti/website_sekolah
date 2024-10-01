<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Data Kelola Data Kontak</h3>
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
                    <a href="#">Data Kontak</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Data Kontak</h4>
                            <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                                data-bs-target="#tambahkontak">
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
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                        <th>Email</th>
                                        <th>Facebook</th>
                                        <th>Instagram</th>
                                        <th>Link Google maps</th>

                                        <th>Aksi</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no=1;
                                    $query = mysqli_query($koneksi,"SELECT * FROM tb_kontak ORDER BY id_kontak DESC");
                                    // looping data  
                                    while( $data = mysqli_fetch_array($query)){
                                    ?>
                                    <tr class="text-center">
                                        <td><?= $no++?> </td>
                                        <td><?=$data['alamat_kontak']?></td>
                                        <td><?=$data['telepon_kontak']?></td>
                                        <td><?=$data['email_kontak']?></td>
                                        <td><?=$data['facebook_kontak']?></td>
                                        <td><?=$data['instagram_kontak']?></td>
                                        <td><?=$data['googlemap_link_kontak']?></td>

                                        <td>
                                            <div class="d-flex justify-content-center  ">
                                                <a href="?page=kontak/ubah&id_kontak=<?= $data['id_kontak'] ?>"
                                                    class="btn btn-success me-4" data-bs-toggle="modal"
                                                    data-bs-target="#editkontak<?=$data['id_kontak']?>"><i
                                                        class="fa fa-pencil-alt"></i></a>

                                                <a onclick="return confirm('Yakin Ingin Dihapus')"
                                                    href="kontak/hapus.php?page=ubah_kontak&id_kontak=<?= $data['id_kontak'] ?>"
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
<?php include 'kontak/tambah.php'; ?>
<?php include 'kontak/ubah.php'; ?>

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