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
    <h1 class="heading">Data Pakaian Adat</h1>
    <br>
        <a href="tambah_pakaian.php" class="btn">Tambah data</a>
        <br>
        <br>
        <table border="1" class="table">
            <tr>
                <th>Nomer</th>
                <th>id_pakaian</th>
                <th>nama_pakaian</th>
                <th>jenis_pakaian</th>
                <th>asal_pakaian</th>
                <th>aksesoris_pakaian</th>
                <th>Aksi</th>
                <th>Aksi</th>

            </tr>
            <?php
            include '../koneksi.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM pakaian_adat") or die(mysqli_error($mysqli));
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) { 
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['id_pakaian']; ?></td>
                <td><?php echo $data['nama_pakaian']; ?></td>
                <td><?php echo $data['jenis_pakaian']; ?></td>
                <td><?php echo $data['asal_pakaian']; ?></td>
                <td><?php echo $data['aksesoris_pakaian']; ?></td>
                <td><a href="hapus_pakaian.php?id=<?php echo $data['id_pakaian']; ?>" class="btn-hapus">Hapus</a> <!-- Tombol hapus --></td>
                <td><a href="update_pakaian.php?id=<?php echo $data['id_pakaian']; ?>" class="btn-update">Update</a> <!-- Tombol update --></td>
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