<?php
include '../koneksi.php';

$id_pakaian = $_GET['id']; // Ambil id user dari parameter URL

// Hapus data user dari database
$hapus = mysqli_query($mysqli, "DELETE FROM pakaian_adat WHERE id_pakaian = '$id_pakaian'") or die(mysqli_error($mysqli));

if($hapus) {
    // Redirect kembali ke halaman user.php setelah berhasil menghapus
    header("location:pakaian_adat.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>