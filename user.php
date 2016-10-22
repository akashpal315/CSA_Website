<?php
session_start();
	require 'connect.php';
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
    $myusername = htmlentities($_POST['username']); 
    $myusername = mysqli_real_escape_string($con,trim($myusername));
	$mypassword = htmlentities($_POST['password']);
    $mypassword = mysqli_real_escape_string($con,trim($mypassword)); 
	$result = mysqli_query($con,"SELECT pwd FROM `phplogin` WHERE uname='$myusername' LIMIT 1");
	$hash = mysqli_fetch_assoc($result);
	if(password_verify($mypassword, implode($hash))){
		$_SESSION['login_user'] = $myusername;
         
         header("location: update.php");
	}else{
		$error = "Your Login Name or Password is invalid";
		session_destroy();
		mysqli_close($con);
	}
	}
?>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
</style>
</head>
<body>
<div class="w3-card-8" id="myform">
<div class="w3-container w3-blue">
<h2>Login</h2>
</div>

<form action = "" class="w3-container" method="post">

<p>
<label>Username</label>
<input class="w3-input" type="text" name="username" required></p>

<p>
<label>Password</label>
<input class="w3-input" type="password" name="password" required></p>

<p>
 <input class="w3-btn w3-blue w3-card-2" type = "submit" value = " Submit "/>
</p>

</form>
</div>
</body>
</html>
