<?php
include '../koneksi.php';

$id = $_GET['id']; // Ambil id user dari parameter URL

// Hapus data user dari database
$hapus = mysqli_query($mysqli, "DELETE FROM alat_musik WHERE id = '$id'") or die(mysqli_error($mysqli));

if($hapus) {
    // Redirect kembali ke halaman user.php setelah berhasil menghapus
    header("location:alat_musik.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>