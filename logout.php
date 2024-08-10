<?php session_start();
session_unset();
session_destroy();

// Hapus cookie
setcookie("session_id", "", time() - 3600, "/");

// Arahkan ke halaman login setelah logout
header("Location: index.php");
exit;
