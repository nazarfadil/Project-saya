<!-- <?php
session_start();

?> -->
<?php
$servername = "localhost"; // Nama server database
$username = "root"; // Username database
$password = ""; // Password database
$dbname = "dbwisata"; // Nama database

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($koneksi->error) {
    die("Koneksi gagal: " . $koneksi->error);
}

// Jika koneksi berhasil
// echo "Koneksi berhasil";
?>
