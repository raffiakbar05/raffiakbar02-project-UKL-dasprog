<?php
include '../koneksi.php';

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama_tarian= $_POST['nama_tarian'];
    $jenis_tarian = $_POST['jenis_tarian'];
    $asal_tarian = $_POST['asal_tarian'];
    $aksesoris_tarian = $_POST['aksesoris_tarian'];

    // Lakukan proses update data di database
    $query = "UPDATE tarian_adat SET nama_tarian='$nama_tarian', jenis_tarian='$jenis_tarian', asal_tarian='$asal_tarian', aksesoris_tarian='$aksesoris_tarian' WHERE id=$id";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        echo "Data berhasil diperbarui.";
        header("Location: tarian.php"); // Redirect kembali ke halaman data user
        exit();
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($mysqli);
    }
}

// Mendapatkan data user yang akan diupdate
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM tarian_adat WHERE id=$id";

    $result = $mysqli->query($query);

    if($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();
        var_dump($data);
    } else {
        echo "Data tarian tidak ditemukan.";
    }
} else {
    echo "ID tarian tidak ditemukan.";
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
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label for="nama_tarian">Nama tarian</label><br>
        <input type="text" id="nama_tarian" name="nama_tarian" value="<?php echo $data['nama_tarian']; ?>"><br>

        <label for="jenis_tarian">Jenis tarian:</label><br>
        <input type="text" id="jenis_tarian" name="jenis_tarian" value="<?php echo $data['jenis_tarian']; ?>"><br>

        <label for="asal_tarian">Asal tarian:</label><br>
        <input type="text" id="asal_tarian" name="asal_tarian" value="<?php echo $data['asal_tarian']; ?>"><br>

        <label for="aksesoris_tarian">Aksesoris tarian:</label><br>
        <input type="text" id="aksesoris_tarian" name="aksesoris_tarian" value="<?php echo $data['aksesoris_tarian']; ?>"><br>

        <input type="submit" name="update" value="Update" class="button">
    </form>
        </section>
    </div>
    
</body>
</html>