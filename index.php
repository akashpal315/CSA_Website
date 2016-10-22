<!DOCTYPE html>
<html>
<head>
<title>CS-A | Sharda</title>
<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
<link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Bungee+Shade|Farsan|Lobster|Lemonada" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
#margin{
	margin-top: 80px;
}
#card{
	width: 90%;
	margin-left:15px;
	margin-top:100%;
	padding: 16px;
}
#marg{
	padding:10px;
	text-color: blue;
}
</style>
</head>
<body>

<nav class="w3-sidenav w3-collapse w3-white w3-card-2 w3-animate-left" style="width:300px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-large w3-hide-large w3-margin-0">Close &times;</a>
  <div id="margin">
  <div class="w3-hover-shadow w3-center"><a href="https://drive.google.com/drive/u/2/folders/0B_e5uxHU4xV-dGwzQzh4QVNXMWc">Placement Drive</a></div>
  <div class="w3-hover-shadow w3-center"><a href="https://drive.google.com/drive/u/0/folders/0B_e5uxHU4xV-RHVCTkN2aVNGRjA">English</a></div>
  <div class="w3-hover-shadow w3-center"><a href="https://drive.google.com/drive/u/0/folders/0B_e5uxHU4xV-RHVCTkN2aVNGRjA">SPM</a></div>
  <div class="w3-hover-shadow w3-center"><a href="https://drive.google.com/drive/u/0/folders/0B_e5uxHU4xV-RHVCTkN2aVNGRjA">Wireless Network</a></div>
  <div class="w3-hover-shadow w3-center"><a href="https://drive.google.com/drive/u/0/folders/0B_e5uxHU4xV-RHVCTkN2aVNGRjA">Advance Java</a></div>
  <div class="w3-hover-shadow w3-center"><a href="https://drive.google.com/drive/u/0/folders/0B_e5uxHU4xV-RHVCTkN2aVNGRjA">.Net</a></div>
  <div class="w3-hover-shadow w3-center"><a href="https://drive.google.com/drive/u/0/folders/0B_e5uxHU4xV-RHVCTkN2aVNGRjA">AI</a></div>
  <div class="w3-hover-shadow w3-center"><a href="https://drive.google.com/drive/u/0/folders/0B_e5uxHU4xV-RHVCTkN2aVNGRjA">Waste Management</a></div>
  <div class="w3-hover-shadow w3-center"><a href="https://drive.google.com/drive/u/0/folders/0B_e5uxHU4xV-RHVCTkN2aVNGRjA">RTS</a></div>
  <div class="w3-hover-shadow w3-center"><a href="https://sites.google.com/site/shardacsa/information">Information</a></div>
  </div>
</nav>

<div class="w3-main" style="margin-left:300px">
<header class=" w3-card-4 w3-container w3-blue">
  <span class="w3-opennav w3-xlarge w3-hide-large w3-left w3-margin-right w3-margin-top" onclick="w3_open()">&#9776;</span>
  <h2 class="w3-left">CS-A Sharda</h2>
  <div class="w3-margin w3-right">
<button onclick="window.location.href='user.php'" class="w3-btn w3-white w3-hover-shadow w3-card-2 w3-text-pink">Update</button>
  </div>
</header>

  <?php
require 'connect.php';


if(mysqli_connect_errno()){
		echo "<div class='w3-card'>";
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		echo "</div>";
	}
	else{
		$i=1;
		$result = mysqli_query($con,'select * from updates order by id desc');
		if($result === false){
			
			die(mysqli_error($con));
			
		}
		while($row = mysqli_fetch_array($result)){
			echo'<div class="w3-card-4 w3-section w3-margin w3-border">';
			echo'<header class="w3-container w3-border-bottom w3-border-red">';
			echo'<h4><i>'.$row['subject'].'</i></h4>';
			echo"</header>";
			echo'<div class="w3-container w3-margin">';
			echo'<p id="box">'.$row['body'].'</p>';
			echo"</div>";
			echo"<footer class='w3-container'>";
			echo"<div id='marg'>Posted By:- ".$row['username']."</div>";
			echo"</footer>";
			echo'</div>';
		}
	}
?>
<footer class="w3-container w3-theme w3-blue w3-padding-16">
  <h5 class="w3-right">Made by <a href="https://www.facebook.com/akash.k.pal"> <span class="w3-card-2 w3-yellow w3-padding-small">Akash</span></a></h5>
</footer>
</div>
<script>
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
</script>
     
</body>
</html>

