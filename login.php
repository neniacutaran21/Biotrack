<?php
session_start();

if(isset($_SESSION['user'])){
    header("Location: index.php");
    exit();
}

$error = "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Demo Account
    if($username == "admin" && $password == "123456"){

        $_SESSION['user'] = $username;

        header("Location: index.php");
        exit();

    }else{
        $error = "Invalid Username or Password!";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>BioTrack | Login</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins,sans-serif;
}

body{
display:flex;
justify-content:center;
align-items:center;
height:100vh;
background:linear-gradient(135deg,#0f172a,#1e3a8a,#2563eb);
}

.login-box{

width:400px;
background:rgba(255,255,255,.10);
padding:40px;
border-radius:20px;
backdrop-filter:blur(20px);
text-align:center;
color:white;
box-shadow:0 10px 30px rgba(0,0,0,.3);

}

.logo{

font-size:60px;

}

h1{

margin:15px 0;

}

p{

color:#ddd;
margin-bottom:25px;

}

input{

width:100%;
padding:15px;
margin-bottom:20px;
border:none;
border-radius:10px;
outline:none;
background:rgba(255,255,255,.15);
color:white;
font-size:16px;

}

input::placeholder{

color:#ddd;

}

button{

width:100%;
padding:15px;
border:none;
border-radius:10px;
background:#38bdf8;
color:white;
font-size:18px;
cursor:pointer;

}

button:hover{

background:#0ea5e9;

}

.error{

margin-top:15px;
color:#ff8080;

}

.demo{

margin-top:20px;
padding:15px;
background:rgba(255,255,255,.08);
border-radius:10px;
font-size:14px;

}

</style>

</head>

<body>

<div class="login-box">

<div class="logo">🔒</div>

<h1>BioTrack</h1>

<p>Biometric Event Monitoring System</p>

<form method="POST">

<input
type="text"
name="username"
placeholder="Username"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button name="login">

Login

</button>

<div class="error">

<?php echo $error; ?>

</div>

</form>



</div>

</body>
</html>