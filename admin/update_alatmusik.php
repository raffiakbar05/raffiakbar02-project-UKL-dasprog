<?php
include '../koneksi.php';

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama= $_POST['nama'];
    $jenis = $_POST['jenis'];
    $asal = $_POST['asal'];
    $aksesoris = $_POST['aksesoris'];

    // Lakukan proses update data di database
    $query = "UPDATE alat_musik SET nama='$nama', jenis='$jenis', asal='$asal', aksesoris='$aksesoris' WHERE id=$id";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        echo "Data berhasil diperbarui.";
        header("Location: alat_musik.php"); // Redirect kembali ke halaman data user
        exit();
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($mysqli);
    }
}

// Mendapatkan data user yang akan diupdate
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM alat_musik WHERE id=$id";

    $result = $mysqli->query($query);

    if($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();
        var_dump($data);
    } else {
        echo "Data alat musik tidak ditemukan.";
    }
} else {
    echo "ID alat musik tidak ditemukan.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Alat Musik</title>
    <link rel="icon" type="image/png" href="img/logotitle.png">
    <link rel="stylesheet" href="styleupdate.css">
</head>
<body>
<div class="container">
        <header>
            <h1 class="title">Update Alat Musik</h1>
        </header>
        <section class="form">
        <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label for="nama">Nama </label><br>
        <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>"><br>

        <label for="jenis">Jenis</label><br>
        <input type="text" id="jenis" name="jenis" value="<?php echo $data['jenis']; ?>"><br>

        <label for="asal">Asal</label><br>
        <input type="text" id="asal" name="asal" value="<?php echo $data['asal']; ?>"><br>

        <label for="aksesoris">Aksesoris </label><br>
        <input type="text" id="aksesoris" name="aksesoris" value="<?php echo $data['aksesoris']; ?>"><br>

        <input type="submit" name="update" value="Update" class="button">
    </form>
        </section>
    </div>
    
</body>
</html>