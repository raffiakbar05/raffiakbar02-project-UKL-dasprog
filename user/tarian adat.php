<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kultural</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <link rel="stylesheet" href="web_saya.css" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
    --primary: #d27a3f;
    --bg: #2e2d2c;
  }
  
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
  }
  
  html {
    scroll-behavior: smooth;
  }
  
  body {
    font-family: "Popins", sans-serif;
    background-color: var(--bg);
    color: #f4f4f4;
  }
    .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.4rem 7%;
    background-color: rgba(0, 0, 0, 0.8);
    border-bottom: 1px solid #b16921;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
  }
  
  .navbar .navbar-logo {
    font-size: 2rem;
    font-weight: 700;
    color: #fff;
    font-style: italic;
  }
  
  .navbar .navbar-logo span {
    color: var(--primary);
  }
  
  .navbar .navbar-nav a {
    color: #fff;
    display: inline-block;
    font-size: 1.1rem;
    margin: 0 1rem;
  }
  
  .navbar .navbar-nav a:hover {
    color: var(--primary);
  }
  
  .navbar .navbar-nav a::after {
    content: " ";
    display: block;
    padding-bottom: 0.5rem;
    border-bottom: 0.1rem solid var(--primary);
    transform: scaleX(0);
    transition: 0.2s linear;
  }
  
  .navbar .navbar-nav a:hover::after {
    transform: scaleX(0.5);
  }
  
  .navbar .navbar-extra a {
    color: #ff0000;
    margin: 0 0.5rem;
  }
  
  .navbar .navbar-extra a:hover {
    color: var(--primary);
  }
  

    .menu {
      padding: 50px 20px;
      background-color: #f4f4f4;
      text-align: center;
    }

    .menu h2 {
      font-size: 36px;
      margin-bottom: 20px;
      color: #FF8C00
    }

    .menu span {
      color: #FF8C00;
    }

    .row2 {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .menu-card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      max-width: 300px;
      width: 100%;
      overflow: hidden;
      text-align: left;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .menu-card img {
      width: 100%;
      height: auto;
    }

    .menu-card-title {
      padding: 20px;
      font-size: 16px;
      color: #333;
    }

    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 20px 0;
    }

    footer .links a {
      color: #f39c12;
      margin: 0 10px;
      text-decoration: none;
    }

    footer .credit a {
      color: #f39c12;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <nav class="navbar">
    <a href="#home" class="navbar-logo">Sosial<span>Budaya</span>.</a>
    <div class="navbar-nav">
      <a href="web saya.php">Home</a>
      <a href="pakaian adat.php">Pakaian Adat</a>
      <a href="tarian adat.php">Tarian</a>
      <a href="alat musik.php">Alat Musik</a>
      <a href="proses_masukan.php">Masukan</a>
    </div>

  </nav>
<br>
<br>
<br>
  <section id="tarian" class="menu">
    <h2><span>Tarian</span> Adat</h2>
    <div class="row2">
      <div class="menu-card">
        <img src="reog-ponorogo.jpg" alt="Tari Reog Ponorogo">
        <h3 class="menu-card-title">
          Tari Reog berasal dari Jawa Timur, Indonesia, dan memiliki akar yang 
          dalam dalam tradisi budaya Jawa. Kisah asal usulnya melibatkan tokoh legendaris dari zaman Majapahit,
          Dewi Songgolangit. Dikisahkan bahwa Dewi Songgolangit memiliki kekuatan gaib yang luar biasa.
        </h3>
      </div>
      <div class="menu-card">
        <img src="singo-ulung.jpg" alt="Singo Ulung">
        <h3 class="menu-card-title">
        Tari Singo Ulung memiliki akar sejarah yang mendalam dan erat kaitannya dengan legenda lokal yang telah diwariskan turun-temurun.
         Tarian ini konon berasal dari kisah perjuangan seorang pemuda bernama Kiai Singo Ulung yang berhasil mengalahkan seekor singa buas yang meneror desanya.
          Atas keberanian dan kepahlawanannya, Kiai Singo Ulung diabadikan dalam bentuk tarian yang menggambarkan pertarungan heroik tersebut.
        </h3>
      </div>
    </div>
  </section>

  <footer>
    <div class="links">
      <a href="web_saya.php">Home</a>
      <a href="pakaian adat.php">Pakaian Adat</a>
      <a href="tarian adat.php">Tarian</a>
      <a href="alat musik.php">Alat Musik</a>
      <a href="proses_masukan">Masukan</a>
    </div>
    <div class="credit">
      <p>Created by <a href="">Raffi Akbar</a>. | &copy; 2023.</p>
    </div>
  </footer>

  <script>
    feather.replace();
  </script>
</body>
</html>
