<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['level'] != "user") {
    header("Location: ../login.php");
    exit();
}
include "../koneksi.php";

// Mengecek apakah parameter 'id' terdefinisi
if (isset($_GET['id'])) {
    $id_pakaian = $_GET['id'];
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM pakaian_adat WHERE id_pakaian = '$id_pakaian'") or die(mysqli_error($mysqli));
    $data = mysqli_fetch_array($query_mysql);
    if (!$data) {
        echo "Pakaian tidak ditemukan";
        exit(); // Keluar dari skrip jika pakaian tidak ditemukan
    }
} else {
    echo "ID pakaian tidak disediakan";
    exit();
}

// Fungsi untuk mencegah inputan karakter yang tidak sesuai
function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Cek apakah ada kiriman form dari method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['id_user'])) {
        $id_user = $_SESSION['id_user']; // Mengambil id_user dari sesi
    } else {
        echo "ID User tidak ditemukan dalam sesi";
        exit();
    }

    $id_pakaian = input($_POST["id_pakaian"]);
    $waktu = input($_POST["waktu"]);
    $jumlah = input($_POST["jumlah"]);
    $total_pembelian = input($_POST["total_pembelian"]);

    // Query untuk menyimpan transaksi ke dalam database
    $sql = "INSERT INTO transaksi (id_user, id_pakaian, waktu, jumlah, total_pembelian) 
            VALUES ('$id_user', '$id_pakaian', '$waktu', '$jumlah', '$total_pembelian')";

    if (mysqli_query($mysqli, $sql)) {
        // Redirect ke halaman pakaian adat atau halaman lain yang diinginkan
        header("Location: pakaian_adat.php");
        exit(); // Pastikan untuk mengakhiri skrip setelah redirect
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }

    // Tutup koneksi
    mysqli_close($mysqli);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sewa Pakaian</title>
  <link rel="stylesheet" href="sewa1.css" />
  <script>
    function calculateTotal() {
        var harga = <?php echo $data['harga']; ?>;
        var jumlah = document.getElementById('jumlah').value;
        var total = harga * jumlah;
        document.getElementById('total_pembelian').value = total;
    }
  </script>
</head>
<body>
  <div class="container">
    <section class="detail-pakaian">
      <h2>Detail Pakaian Adat</h2>
      <div class="detail-card">
        <img src="../admin/uploaded_img/<?php echo $data['gambar']; ?>" alt="Pakaian Adat">
        <div class="detail-info">
          <h3><?php echo $data['nama_pakaian']; ?></h3>
          <p>Harga: Rp <?php echo $data['harga']; ?></p>
        </div>
      </div>
    </section>

    <section class="form-transaksi">
      <h2>Form Transaksi</h2>
      <form method="POST" action="">
        <label for="username">Nama</label>
        <input type="text" id="username" name="username" value="<?php echo $_SESSION['username']; ?>" readonly>
        
        <label for="id_pakaian">Nama Pakaian</label>
        <input type="hidden" name="id_pakaian" value="<?php echo $data['id_pakaian']; ?>">
        <input type="text" value="<?php echo $data['nama_pakaian']; ?>" readonly>
        
        <label for="waktu">Waktu Penyewaan</label>
        <input type="datetime-local" id="waktu" name="waktu" required>
        
        <label for="jumlah">Jumlah</label>
        <input type="number" id="jumlah" name="jumlah" required oninput="calculateTotal()">
        
        <label for="total_pembelian">Total Pembelian</label>
        <input type="text" id="total_pembelian" name="total_pembelian" readonly>
        
        <input type="submit" value="Submit" class="button">
      </form>
    </section>
  </div>
</body>
</html>
