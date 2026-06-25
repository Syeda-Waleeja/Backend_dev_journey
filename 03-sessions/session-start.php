<?php
session_start();

$_SESSION['name'] = "Waleeja";

echo "Session Started Successfully <br>";
echo "Name: " . $_SESSION['name'];
?>