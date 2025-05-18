<?php
session_start();
include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit;
} else {
    header("Location: index.php?error=Username atau password salah!");
    exit;
}
?>
