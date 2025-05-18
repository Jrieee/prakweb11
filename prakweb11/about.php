<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>About Page</h2>
    <p>Halaman ini dibuat untuk latihan login.</p>
    <a href="home.php">Kembali ke Dashboard</a>
</div>
</body>
</html>
