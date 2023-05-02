<?php

session_start();

include "conn.php";

$user = $_POST['username'];
$pass = $_POST['password'];
$error = "Username atau password salah. Silakan coba lagi.";

$sql = "SELECT * FROM siswa WHERE username='$user' AND password='$pass'";
$result = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
    $_SESSION['username'] = $username;
    header("Location: detail.php");
} else {
    echo $error;
}

?>