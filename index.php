<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>BioTrack - Biometric Event Monitoring System</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins,sans-serif;
}

body{
background:linear-gradient(135deg,#0f172a,#1e3a8a,#2563eb);
color:white;
}

header{
display:flex;
justify-content:space-between;
align-items:center;
padding:20px 8%;
}

.logo{

font-size:30px;
font-weight:bold;

}

.logo span{

color:#38bdf8;

}

nav{

display:flex;
align-items:center;

}

nav a{

margin-left:25px;
text-decoration:none;
color:white;

}

nav a:hover{

color:#38bdf8;

}

.user{

margin-left:30px;
font-weight:bold;
color:#38bdf8;

}

.logout{

margin-left:20px;
padding:10px 20px;
background:#38bdf8;
border-radius:30px;
text-decoration:none;

}

.hero{

display:flex;
justify-content:space-between;
align-items:center;
padding:80px 8%;
min-height:80vh;

}

.left{

width:50%;

}

.left h1{

font-size:55px;

}

.left span{

color:#38bdf8;

}

.left p{

margin:25px 0;
font-size:18px;
color:#ddd;

}

.btn{

display:inline-block;
padding:15px 35px;
background:#38bdf8;
text-decoration:none;
color:white;
border-radius:40px;

}

.right{

display:flex;
justify-content:center;
width:40%;

}

.card{

width:350px;
padding:40px;
background:rgba(255,255,255,.10);
border-radius:20px;
backdrop-filter:blur(20px);
text-align:center;

}

.icon{

font-size:80px;

}

footer{

padding:20px;
text-align:center;
background:#0f172a;

}

</style>

</head>

<body>

<header>

<div class="logo">

Bio<span>Track</span>

</div>

<nav>

<a href="#">Home</a>

<a href="#">Features</a>

<a href="#">About</a>

<a href="#">Contact</a>

<div class="user">

Welcome,
<?php echo $_SESSION['user']; ?>

</div>

<a href="logout.php" class="logout">

Logout

</a>

</nav>

</header>

<section class="hero">

<div class="left">

<h1>

Biometric <span>Event Monitoring</span> System

</h1>

<p>

A secure web-based attendance monitoring system that uses fingerprint authentication for accurate attendance monitoring.

</p>

<a href="#" class="btn">

Get Started

</a>

</div>

<div class="right">

<div class="card">

<div class="icon">

🔒

</div>

<h2>

Secure Attendance

</h2>

<p>

Fingerprint Authentication<br>

Real-Time Monitoring<br>

Automated Reports

</p>

</div>

</div>

</section>

<footer>

© 2026 BioTrack | Biometric Event Monitoring System

</footer>

</body>
</html>