<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #000000, #434343);
        }

        .card {
            width: 400px;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #111;
        }

        .input-box {
            margin-bottom: 15px;
        }

        .input-box label {
            display: block;
            font-size: 13px;
            margin-bottom: 6px;
            color: #333;
        }

        .input-box input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }

        .input-box input:focus {
            border-color: black;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: black;
            color: white;
            font-size: 15px;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s;
        }

        button:hover {
            background: #333;
        }

        .link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .link a {
            color: black;
            font-weight: bold;
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
        }

    </style>
</head>

<body>

    <div class="card">

        <h2>Create Account ✨</h2>

        <form action="actions/savedata.php" method="POST">

            <div class="input-box">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter username" required>
            </div>

            <div class="input-box">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter email" required>
            </div>

            <div class="input-box">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password" required>
            </div>

            <button type="submit" name="submit">Register</button>

        </form>

        <div class="link">
            Already have an account?
            <a href="login.php">Login here</a>
        </div>

    </div>

</body>

</html>