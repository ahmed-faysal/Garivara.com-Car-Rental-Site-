<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="main.css">

	<style>
	body{
		background-image: url("1.jpg");
	}
	.head{
		text-align: center;
		color:red;
		font-family: 'Oleo Script', cursive;
		font-size: 30px;
	}
	a {
		text-decoration: none;
		color: red;
	}
	
	.login
	{
		color: white;
		max-width: 350px;
		margin:auto;
		margin-top: 10px;
		border: 2px solid black;
		padding:20px 30px;
		background: rgba(0,0,0,0.5);
		font-family: 'Oleo Script', cursive;
		font-weight: bold;
		border-radius:5px;
	}

	.navbar {
		overflow: hidden;
		background-color: #333;
		font-family:'Oleo Script', cursive;
		font-weight: bold;
	}

	.navbar a {
		float: left;
		font-size: 16px;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.navbar a:hover, .dropdown:hover .dropbtn {
		background-color: red;
	}


	.show {
		display: block;
	}
</style>
</head>

<body>
	<div class="head">
		<h5><a href="Homepage.php">GaRiVaRa.CoM</a></h5>
	</div>

	<div class="navbar"> 
		
		<div><a class="active" href="user.php">Profile</a></div>
		<div style= "float:right"><a class="active" href="Homepage.php">Logout</a></div>
	</div>

	<div class="login">
		<p> Your car has been reserved. Please complete payment to the given numbers with your username by today or visit us for confirmation. </p>
		<br>
		<p>Total Price: <?php echo $_SESSION['total'] ?> </p><br>
		<p>DBBL Payment NO: 017XXXXXXXX</p>
		<p>bKash Payment NO: 018XXXXXXX</p>
	</div>

</body>
</html>
