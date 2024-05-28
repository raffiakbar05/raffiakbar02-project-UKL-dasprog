<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah tarian</title>
    <link rel="stylesheet" href="../styleregister.css">
</head>
<body>
    <div class="container">
        <h1 class="title">tambah tarian</h1><br>
        <form class="form" action="tambah_tarian.php" method="post">
            <input type="text" name="nama_tarian" placeholder="nama_tarian"> 
            <input type="text" name="jenis_tarian" placeholder="jenis_tarian">
            <input type="text" name="asal_tarian" placeholder="asal_tarian">
            <input type="text" name="aksesoris_tarian" placeholder="aksesoris_tarian">
            <button class="button" name="sumbit" type="submit">tambah tarian</button>
            <?php
            if(isset($_POST['sumbit'])){
                $nama_tarian= $_POST['nama_tarian'];
                $jenis_tarian= $_POST['jenis_tarian'];
                $asal_tarian= $_POST['asal_tarian'];
                $aksesoris_tarian= $_POST['aksesoris_tarian'];
             

                include_once("../koneksi.php");

                $result = mysqli_query($mysqli,
                "INSERT INTO tarian_adat(nama_tarian,jenis_tarian,asal_tarian,aksesoris_tarian) VALUES ('$nama_tarian','$jenis_tarian','$asal_tarian','$aksesoris_tarian')");

                header("location:tarian.php");
            }
            ?>
        </form>
    </div>
</body>
</html>