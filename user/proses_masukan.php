<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>kultural</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->

    <link rel="stylesheet" href= "web saya.css" />
  </head>

  <body>
    <section>
    <nav class="navbar">
        <a href="#home" class="navbar-logo">Sosial<span>Budaya</span>.</a>
  
        <div class="navbar-nav">
          <a href="web saya.php">Home</a>
          <a href="pakaian adat.php">Pakaian Adat</a>
          <a href="tarian adat.php">Tarian</a>
          <a href="alat musik.php">Alat musik</a>
          <a href="proses_masukan.php">Masukan</a>
        </div>
  
      </nav>
    </section>
    
      <section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      <div class="halaman-masukan">
        <h1>Kirim kritik dan saran anda</h1>
        <form action="proses_masukan.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Nama" required>
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Email" required>
            
            <label for="pesan">Pesan:</label>
            <input type="text" id="pesan" name="pesan" placeholder="Pesan" required>
 
            <input type="submit" name="submit" value="Kirim Masukan">

            <?php
                    if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $pesan = $_POST['pesan'];

                    include_once("../koneksi.php");

                    $result = mysqli_query($mysqli,
                    "INSERT INTO halaman_masukan(nama, email, pesan) VALUES ('$nama', '$email', '$pesan')");

                    }
                    ?>

        </form>

    </div>
      </section>
      
       <!-- Footer start -->
    <section>
        <footer>

        <div class="links">
          <a href="web saya.html">Home</a>
          <a href="pakaian adat.html">Pakaian Adat</a>
          <a href="tarian adat.html">Tarian</a>
          <a href="alat musik.html">Alat Musik</a>
          <a href="proses_masukan">Masukan</a>
        </div>
  
        <div class="credit">
          <p>Created by <a href="">Raffi Akbar</a>. | &copy; 2023.</p>
        </div>
      </footer>
    </section>
       
      
      <!-- Footer end -->
  </body>
  </html>