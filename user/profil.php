<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['level'] != "user") {
    header("Location: ../login");
    exit();
}

// Menyertakan file koneksi database
include '../koneksi.php';

// Memastikan koneksi berhasil
if (!$mysqli) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Mengambil data pengguna dari database berdasarkan sesi username
$username = $_SESSION['username'];
$query = "SELECT username, password, email FROM user WHERE username = '$username'";
$result = $mysqli->query($query);

// Memastikan query berhasil dijalankan
if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Gagal mengambil data profil pengguna.";
    exit();
}

// Fungsi untuk logout
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>

    <link rel="stylesheet" href="profil.css">

</head>
<body>
    <nav class="navbar">
        <a href="#home" class="navbar-logo">Sosial<span>Budaya</span>.</a>
        <div class="navbar-nav">
            <a href="web saya.php">Home</a>
            <a href="pakaian adat.php">Pakaian Adat</a>
            <a href="tarian adat.php">Tarian</a>
            <a href="alat musik.php">Alat musik</a>
            <a href="../index.php">Log Out</a>
        </div>
    </nav>
<br><br><br><br><br><br><br>
    <div class="profile-container">
        
        <div class="profile-info">
            <h3>Profil Pengguna</h3>
            <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
            <p><strong>Password:</strong> <?php echo htmlspecialchars($user['password']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
        </div>
        <a href="edit_profil.php" class="edit-button">Edit Profil</a>
        <form method="post" style="display:inline;">
            <button type="submit" name="logout" class="logout-button">Logout</button>
        </form>
    </div>

</body>
</html>
<?php
// Close the connection
$mysqli->close();
?>