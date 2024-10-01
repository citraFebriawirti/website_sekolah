<?php
//memulai session
session_start();

$_SESSION['save_success'] = '  Data Berhasil Ditambahkan 😍';

//menghapus session
session_destroy();

echo "<script>

window.location.href='index.php'
</script>";

?>