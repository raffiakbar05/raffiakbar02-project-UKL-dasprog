<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah alat musik</title>
    <link rel="stylesheet" href="../styleregister.css">
</head>
<body>
    <div class="container">
        <h1 class="title">tambah alat musik</h1><br>
        <form class="form" action="tambah_alatmusik.php" method="post">
            <input type="text" name="nama" placeholder="nama"> 
            <input type="text" name="jenis" placeholder="jenis">
            <input type="text" name="aksesoris" placeholder="aksesoris">
            <input type="text" name="asal" placeholder="asal">
            <button class="button" name="sumbit" type="submit">tambah</button>
            <?php
            if(isset($_POST['sumbit'])){
                $nama= $_POST['nama'];
                $jenis= $_POST['jenis'];
                $aksesoris= $_POST['aksesoris'];
                $asal= $_POST['asal'];
             

                include_once("../koneksi.php");

                $result = mysqli_query($mysqli,
                "INSERT INTO alat_musik(nama,jenis,aksesoris,asal) VALUES ('$nama','$jenis','$aksesoris','$asal')");

                header("location:alat_musik.php");
            }
            ?>
        </form>
    </div>
</body>
</html>