<?php
include '../koneksi.php';

$id = $_GET['id']; // Ambil id user dari parameter URL

// Hapus data user dari database
$hapus = mysqli_query($mysqli, "DELETE FROM tarian_adat WHERE id = '$id'") or die(mysqli_error($mysqli));

if($hapus) {
    // Redirect kembali ke halaman user.php setelah berhasil menghapus
    header("location:tarian.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>