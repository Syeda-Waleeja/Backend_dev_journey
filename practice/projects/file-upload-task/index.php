<?php

$message = "";

if(isset($_POST['upload']))
{
    $fileName = $_FILES['file']['name'];
    $tempName = $_FILES['file']['tmp_name'];

    if(!empty($fileName))
    {
        move_uploaded_file($tempName, "uploads/" . $fileName);
        $message = "File uploaded successfully!";
    }
    else
    {
        $message = "Please select a file.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

    <h1>File Upload System</h1>

    <?php
    if($message != "")
    {
        echo "<p class='message'>$message</p>";
    }
    ?>

    <form method="POST" enctype="multipart/form-data">

        <input type="file" name="file">

        <button type="submit" name="upload">
            Upload File
        </button>

    </form>

</div>
</body>
</html>