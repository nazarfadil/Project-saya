<?php
session_start();

require 'koneksi.php';

// Mengambil username dan password dari POST
$username = $_POST['username'];
$password = $_POST['password'];

// Menjalankan query untuk mengambil data admin berdasarkan username
$result = $koneksi->query("SELECT * FROM admin WHERE username='$username'");

// Memeriksa apakah ada hasil dari query
if ($result->num_rows > 0) { 
    // Mengambil data baris hasil query
    $row = $result->fetch_assoc();

    // Debugging: Menampilkan password yang tersimpan dan hasil hashing dari input password
    // echo $row['password'] . '<br>';
    // echo password_hash($password, PASSWORD_DEFAULT) . '<br>';
    // echo password_verify($password, $row['password']);
    // die;

    // Memverifikasi password
    if (password_verify($password, $row['password'])) {
        $_SESSION['login'] = true;
        header('Location: modifikasi.php');
        exit();
    } 
} else {
    echo "
        <script>
            alert('Username atau Password Salah');
            window.location = 'login.php';
        </script>";
}
?>
