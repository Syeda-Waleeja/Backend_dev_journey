<?php
session_start();

include 'config.php';

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password`= '$password'";

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
     $user = mysqli_fetch_assoc($result);
     $_SESSION['username'] = $user['username'];
    $_SESSION['email'] = $email;
    header("Location: ../dashboard.php");
    exit();
}
?>