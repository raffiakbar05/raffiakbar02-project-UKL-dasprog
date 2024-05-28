<?php
include '../koneksi.php';

if(isset($_POST['update'])) {
    $id_pakaian = $_POST['id_pakaian'];
    $nama_pakaian= $_POST['nama_pakaian'];
    $jenis_pakaian = $_POST['jenis_pakaian'];
    $asal_pakaian = $_POST['asal_pakaian'];
    $aksesoris_pakaian = $_POST['aksesoris_pakaian'];

    // Lakukan proses update data di database
    $query = "UPDATE pakaian_adat SET nama_pakaian='$nama_pakaian', jenis_pakaian='$jenis_pakaian', asal_pakaian='$asal_pakaian', aksesoris_pakaian='$aksesoris_pakaian' WHERE id_pakaian=$id_pakaian";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        echo "Data berhasil diperbarui.";
        header("Location: pakaian_adat.php"); // Redirect kembali ke halaman data user
        exit();
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($mysqli);
    }
}

// Mendapatkan data user yang akan diupdate
if(isset($_GET['id'])) {
    $id_pakaian = $_GET['id'];

    $query = "SELECT * FROM pakaian_adat WHERE id_pakaian=$id_pakaian";

    $result = $mysqli->query($query);

    if($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();
        var_dump($data);
    } else {
        echo "Data pakaian tidak ditemukan.";
    }
} else {
    echo "ID pakaian tidak ditemukan.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pakaian</title>
    <link rel="icon" type="image/png" href="img/logotitle.png">
    <link rel="stylesheet" href="styleupdate.css">
</head>
<body>
<div class="container">
        <header>
            <h1 class="title">Update Pakaian</h1>
        </header>
        <section class="form">
        <form method="POST" action="">
        <input type="hidden" name="id_pakaian" value="<?php echo $data['id_pakaian']; ?>">

        <input type="hidden" name="id_daerah" value="<?php echo $data['id_daerah']; ?>">

        <label for="nama_pakaian">Nama Pakaian</label><br>  
        <input type="text" id="nama_pakaian" name="nama_pakaian" value="<?php echo $data['nama_pakaian']; ?>"><br>

        <label for="jenis_pakaian">Jenis pakaian:</label><br>
        <input type="text" id="jenis_pakaian" name="jenis_pakaian" value="<?php echo $data['jenis_pakaian']; ?>"><br>

        <label for="asal_pakaian">Asal pakaian:</label><br>
        <input type="text" id="asal_pakaian" name="asal_pakaian" value="<?php echo $data['asal_pakaian']; ?>"><br>

        <label for="aksesoris_pakaian">Aksesoris pakaian:</label><br>
        <input type="text" id="aksesoris_pakaian" name="aksesoris_pakaian" value="<?php echo $data['aksesoris_pakaian']; ?>"><br>

        <input type="submit" name="update" value="Update" class="button">
    </form>
        </section>
    </div>
    
</body>
</html>