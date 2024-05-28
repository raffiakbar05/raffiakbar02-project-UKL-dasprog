<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Pakaian</title>
    <link rel="stylesheet" href="../styleregister.css">
</head>
<body>
    <div class="container">
        <h1 class="title">tambah pakaian</h1><br>
        <form class="form" action="tambah_pakaian.php" method="post">
            <input type="text" name="nama_pakaian" placeholder="nama_pakaian"> 
            <input type="text" name="jenis_pakaian" placeholder="jenis_pakaian">
            <input type="text" name="asal_pakaian" placeholder="asal_pakaian">
            <input type="text" name="aksesoris_pakaian" placeholder="aksesoris_pakaian">
            <button class="button" name="sumbit" type="submit">tambah pakaian</button>
            <?php
            if(isset($_POST['sumbit'])){
                $nama_pakaian= $_POST['nama_pakaian'];
                $jenis_pakaian= $_POST['jenis_pakaian'];
                $asal_pakaian= $_POST['asal_pakaian'];
                $aksesoris_pakaian= $_POST['aksesoris_pakaian'];
             

                include_once("../koneksi.php");

                $result = mysqli_query($mysqli,
                "INSERT INTO pakaian_adat(nama_pakaian,jenis_pakaian,asal_pakaian,aksesoris_pakaian) VALUES ('$nama_pakaian','$jenis_pakaian','$asal_pakaian','$aksesoris_pakaian')");

                header("location:pakaian_adat.php");
            }
            ?>
        </form>
    </div>
</body>
</html>