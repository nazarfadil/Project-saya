<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .bg-costum {
            background-color: #9ec0de;
        }
        .header-image{
            width: 100%;
            height: auto;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header class="bg-costum text-center">
            <h1 class="h1">Selamat Datang Di Desa Wisata Pulesari</h1>
            <img src="header.jpg" class="header-image" alt="Desa Wisata Pulesari">

            <nav class="navbar navbar-expand navbar-light mb-3">
                <div class="container-fuild">
                    <ul class="navbar-nav">
                        <li class="nav-item-active">
                            <a class="nav-link" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="daftar_paket.php">Daftar Paket Wisata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="modifikasi.php">Modifikasi Pesanan</a>
                        </li>
                    </ul>
                    <?php
                    if (isset($_SESSION['login.php'])) {
                        ?>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    <?php }
                    ?>
                </div>
            </nav>
        </header>
 