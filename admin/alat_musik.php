<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman data USER</title>
    
    <link rel="stylesheet" href="styleadmin.css">
</head>
<body>
    <div class="navbar">
        <a href="user.php">user</a>
        <a href="pakaian_adat.php">Pakaian adat</a>
        <a href="tarian.php">Tarian</a>
        <a href="alat_musik.php">Alat musik</a>
        <a href="halaman_masukan.php">Masukan</a>
</div>
        
    <section class="user">
    <h1 class="heading">Data Alat Musik</h1>
    <br>
        <a href="tambah_alatmusik.php" class="btn">Tambah data</a>
        <br>
        <br>
        <table border="1" class="table">
            <tr>
                <th>Nomer</th>
                <th>id</th>
                <th>nama</th>
                <th>jenis</th>
                <th>asal</th>
                <th>aksesoris</th>
                <th>Aksi</th>
                <th>Aksi</th>

            </tr>
            <?php
            include '../koneksi.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM alat_musik") or die(mysqli_error($mysqli));
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) { 
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jenis']; ?></td>
                <td><?php echo $data['asal']; ?></td>
                <td><?php echo $data['aksesoris']; ?></td>
                <td><a href="hapus_alatmusik.php?id=<?php echo $data['id']; ?>" class="btn-hapus">Hapus</a> <!-- Tombol hapus --></td>
                <td><a href="update_alatmusik.php?id=<?php echo $data['id']; ?>" class="btn-update">Update</a> <!-- Tombol update --></td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <br>
    <a href="../index.php" class="btn">Log Out</a>
    </section>
    

    <script src="main.js"></script>
</body>
</html>