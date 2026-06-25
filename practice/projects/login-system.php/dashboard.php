<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Dashboard</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Segoe UI, sans-serif;
}

body{
    background:#f1f5f9;
}

/* Navbar */

.navbar{
    background:#111827;
    color:white;
    padding:18px 40px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    font-size:24px;
    font-weight:bold;
}

.user{
    font-size:16px;
}

/* Layout */

.container{
    display:flex;
    min-height:calc(100vh - 70px);
}

/* Sidebar */

.sidebar{
    width:250px;
    background:#1e293b;
    color:white;
    padding:30px 20px;
}

.sidebar h2{
    margin-bottom:30px;
}

.sidebar ul{
    list-style:none;
}

.sidebar ul li{
    margin:20px 0;
}

.sidebar ul li a{
    text-decoration:none;
    color:white;
    display:block;
    padding:10px;
    border-radius:8px;
    transition:0.3s;
}

.sidebar ul li a:hover{
    background:#334155;
}

/* Main Content */

.main{
    flex:1;
    padding:40px;
}

.heading{
    margin-bottom:30px;
}

.heading h1{
    color:#0f172a;
}

.heading p{
    color:#64748b;
}

/* Cards */

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
    margin-bottom:30px;
}

.card{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 3px 10px rgba(0,0,0,0.08);
}

.card h2{
    color:#111827;
    margin-bottom:10px;
}

.card p{
    color:#64748b;
}

/* Activity */

.activity{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 3px 10px rgba(0,0,0,0.08);
}

.activity h2{
    margin-bottom:15px;
}

.activity ul{
    padding-left:20px;
}

.activity li{
    margin:10px 0;
}

/* Logout Button */

.logout{
    margin-top:30px;
}

.logout a{
    text-decoration:none;
    background:#dc2626;
    color:white;
    padding:12px 20px;
    border-radius:8px;
    display:inline-block;
}

.logout a:hover{
    background:#b91c1c;
}

</style>
</head>
<body>

<div class="navbar">
    <div class="logo">My Dashboard</div>
    <div class="user"><?php echo $_SESSION['username']; ?>
</div>
</div>

<div class="container">

    <div class="sidebar">

        <h2>Menu</h2>

        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Reports</a></li>
        </ul>

    </div>

    <div class="main">

        <div class="heading">
            <h1>Dashboard Overview</h1>
            <p>Manage your account and monitor activity.</p>
        </div>

        <div class="cards">

            <div class="card">
                <h2>150</h2>
                <p>Total Users</p>
            </div>

            <div class="card">
                <h2>25</h2>
                <p>Projects</p>
            </div>

            <div class="card">
                <h2>98%</h2>
                <p>Performance</p>
            </div>

        </div>

        <div class="activity">

            <h2>Recent Activity</h2>

            <ul>
                <li>Logged in successfully</li>
                <li>Updated profile information</li>
                <li>Viewed dashboard statistics</li>
                <li>Account remains active</li>
            </ul>

        </div>

        <div class="logout">
            <a href="#">Logout</a>
        </div>

    </div>

</div>

</body>
</html>