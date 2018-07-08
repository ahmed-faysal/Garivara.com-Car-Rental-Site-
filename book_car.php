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
		<div style= "float:right"><a class="active" href="Homepage.php">Logout</a></div>
		
	</div>

	<div class="login">
		<?php
		$id = $_GET['id'];
		include ("db.php");
		$i ="select * from inventory where id=".$id;
		$h= mysqli_query($conn, $i);
		if($tr=mysqli_fetch_array($h))
		{
			?>
			<form method="post" action="confirm.php">
				<div class="main">
					<label>ID :</label>
					<?php echo $tr[0]; ?>
					<?php $_SESSION['cid'] = $tr[0]; ?>
					<br>
					<img src="uploads/<?php echo $tr[4];?>" width="340" height="200">
					<br>
					<label style="font-weight:bold; font-size= 5px;">Vehicle Type:</label>
					<?php echo $tr[2]; ?>
					<br>
					<label>Vehicle Name:</label>
					<?php echo $tr[1]; ?>
					<br>
					<label>Capacity:</label>
					<?php echo $tr[3]; ?>
					<br>
					<label>Hire Cost/Day:</label>
					<?php echo $tr[6];?>
					<?php $_SESSION['cost'] = $tr[6]; ?>
					<br>
					<br>
					<label>Book For Days: </label>
					<input type="text" name="days" value="1">
					<br>
					<input type="submit" value="Book Now" style="color:GhostWhite;font-weight:bold;font-size:20px;background-color:DeepSkyBlue;padding-right: 50px;padding-left: 50px;padding-top: 8px;padding-bottom: 15px">
					<br>
				</div>
			</form>
			<?php
		}
		?>
	</div>

</body>
</html>
