<!DOCTYPE html>
<html>
<head>
	<style>
	.head{
		text-align: center;
		color:red;
		font-family:'Oleo Script', cursive;
		font-size: 30px;
	}

	.login
	{
		color: white;
		max-width: 300px;
		margin:auto;
		border: 2px solid black;
		padding:20px 30px;
		background: rgba(0,0,0,0.5);
		font-family: 'Oleo Script', cursive;
		font-weight: bold;
		border-radius:5px;
	}

	a {
		text-decoration: none;
		color: red;
	}
	body
	{
		background-image:url("backlogin.jpg");
		background-position:right-top;
		background-repeat:no-repeat;
		background-size:cover;
		background-attachment:fixed;
		color: #e7e7e7; 	 
	}

	input
	{
		width:250px;
		height:30px;
	}
	input[type="submit"]
	{
		background: #3399ff;
		border: 0;
		width: 250px;
		height: 40px;
		border-radius: 3px;
		color: white;
	}

	
</style>
</head>

<body>
	<div class="head">
		<h5><a href="Homepage.php">GaRiVaRa.CoM</a></h5>
	</div>

	<div class="login">

		<center>
			<div>
				<?php
				$id = $_GET['id'];
				include ("db.php");
				$i ="select * from inventory where id=".$id;
				$h= mysqli_query($conn, $i);
				if($tr=mysqli_fetch_array($h))
				{
					?>
						<form method="post" action="edit_inventory.php">
							<div class="main">
								<label>ID</label>
								<input type="text" name="txtid" value="<?php echo $tr[0]; ?>">
								<br>
								<br>
								<label>Vehicle Type</label><br>
								<input type="text" name="txttype" value="<?php echo $tr[2]; ?>">
								<br>
								<br>
								<label>Vehicle Name</label><br>
								<input type="text" name="txtname" value="<?php echo $tr[1]; ?>">
								<br>
								<br>
								<label>Capacity</label><br>
								<input type="text" name="txtcapacity" value="<?php echo $tr[3]; ?>">
								<br>
								<br>
								<label>Hire Cost</label><br>
								<input type="text" name="txtcost" value="<?php echo $tr[6];?>">
								<br>
								<br>
								<label>Status</label>
								<input type="text" name="txtstatus" value="<?php echo $tr[5]; ?>" >
								<br>
								<br>
								<label>Change Image</label><br>
								<input type="file" name="adpic">
								<br>
								<br>
								<input type="submit" value="Submit" style="color:GhostWhite;font-weight:bold;font-size:20px;background-color:DeepSkyBlue;padding-right: 50px;padding-left: 50px;padding-top: 8px;padding-bottom: 15px">
								<br>
							</div>
						</form>
						<?php
				}
			?>
			</div>
			</center>
		</div>
	</body>
	</html>