<?php
session_start();

if(isset($_POST['submit']))
{
    $username = $_POST['username'];

    $_SESSION['username'] = $username;

    echo "Welcome " . $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Session</title>
</head>
<body>

<form method="POST">

    <input type="text" name="username" placeholder="Enter Username">

    <button type="submit" name="submit">Login</button>

</form>

</body>
</html>