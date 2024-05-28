<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah masukan</title>
    <link rel="stylesheet" href="../styleregister.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Tambah Masukan</h1><br>
        <form class="form" action="halaman_masukan.php" method="post">
            <input type="text" name="nama" placeholder="nama"> 
            <input type="text" name="email" placeholder="jenis">
            <input type="text" name="pesan" placeholder="pesan">
            <button class="button" name="sumbit" type="submit">tambah</button>
            <?php
            if(isset($_POST['sumbit'])){
                $nama= $_POST['nama'];
                $email= $_POST['email'];
                $pesan= $_POST['pesan'];
             

                include_once("../koneksi.php");

                $result = mysqli_query($mysqli,
                "INSERT INTO_halaman_masukan(nama,email,pesan,) VALUES ('$nama','$email','$pesan')");

                header("location_adat.php");
            }
            ?>
        </form>
    </div>
</body>
</html>