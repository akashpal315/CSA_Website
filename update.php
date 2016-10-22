<?php
session_start();
if(!isset($_SESSION['login_user'])){
	header('Location:testlogin.php');
	mysqli_close($con);
}
else{
	if(isset($_POST['submit'])){
		require 'connect.php';
		$username = $_SESSION["login_user"];
		$sub = htmlentities($_POST['subject']);
		$comment = htmlentities($_POST['comment']);
		$sub = mysqli_real_escape_string($con,$sub);
		$comment = mysqli_real_escape_string($con,$comment);
		$sql = "INSERT INTO updates (`username`, `subject`, `body`)VALUES ('$username', '$sub', '$comment')";
		if (mysqli_query($con, $sql)) {
			session_destroy();
			header("location:index.php");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
	//echo 'welcome '.$_SESSION['login_user'];
	echo '<div class="w3-card-4" id="cent">';
	echo '<header class="w3-container w3-blue">';
	echo '<h1>'.$_SESSION["login_user"].'</h1>';
	echo '</header>';
	echo '<div class="w3-container">';
	echo '<form method="post">';
	echo '<div class="w3-margin-top "><textarea rows="2" name="subject" id="subject" placeholder="Subject" required></textarea></div>';
	echo '<div class="w3-margin-top "><textarea rows="5" name="comment" id="comment" placeholder="Update" required></textarea></div>';
	echo '<p><button name="submit" class="w3-btn w3-dark-grey">Update</button></p>';
	echo '</form>';
	echo '</div>';
	
}
?>
<title>Update</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
textarea {
	border: 4px solid rgba(0,0,0,0.1);
	padding: 8px 10px;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	
	outline: 0;
	width: 100%;
}
</style>

