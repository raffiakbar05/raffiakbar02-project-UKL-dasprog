<?php
include '../koneksi.php';

$IDmasukan = $_GET['id']; // Ambil id user dari parameter URL

// Hapus data user dari database
$hapus = mysqli_query($mysqli, "DELETE FROM halaman_masukan WHERE IDmasukan = '$IDmasukan'") or die(mysqli_error($mysqli));

if($hapus) {
    // Redirect kembali ke halaman user.php setelah berhasil menghapus
    header("location:halaman_masukan.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>