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
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Ini adalah halaman dashboard.</p>
    <a href="about.php">About</a><br>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
