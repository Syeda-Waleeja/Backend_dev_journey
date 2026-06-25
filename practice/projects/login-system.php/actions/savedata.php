<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query

    $query = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";

    $result = mysqli_query($conn, $query);

     if($result)
    {
        header('Location: ../login.php');
        exit();
    }
    else
    {
        echo "Data insertion failed";
    }
}