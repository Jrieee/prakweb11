<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "login_db"; // Buat DB ini di phpMyAdmin Laragon

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
