<!DOCTYPE html>
<html>
<head>
    <title>GET Form</title>

    <style>
        body {
            font-family: Arial;
            background: #eef2f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: black;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #333;
        }

        .result {
            text-align: center;
            margin-top: 10px;
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="form-box">

    <h2>GET Form</h2>

    <form method="GET">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="city" placeholder="Enter your city">
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET['name']) && isset($_GET['city'])) {

        $name = $_GET['name'];
        $city = $_GET['city'];

        echo "<div class='result'>Hello $name from $city 👋</div>";
    }
    ?>

</div>

</body>
</html>