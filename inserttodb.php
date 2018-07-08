<?php
	include('db.php');
	include('function.php');
?>

<?php

	$name = test_input($_POST['fname']);
	$email = test_input($_POST['email']);
	$username = test_input($_POST['uname']);
	$pass = test_input($_POST['pass1']);
	$pass_r = test_input($_POST['pass2']);

	$reg_ok = true;

	if ($pass != $pass_r)
	{
		echo "<script type='text/javascript'>alert('Password Mismatch. Retype password correctly.');</script>";
		echo "<script>document.location='signup.php'</script>";
	}

	$query_m = mysqli_query($conn,"SELECT * from userinfo where email = '$email'")or die(mysqli_error($conn));
	$count_m = mysqli_num_rows($query_m);

	$query_u = mysqli_query($conn,"SELECT * from userinfo where username = '$username'")or die(mysqli_error($conn));
	$count_u = mysqli_num_rows($query_u);


	if ($count_m>0)
	{
		//$reg_ok = false;
		echo "<script type='text/javascript'>alert('Email already in use! Try a different email.');</script>";
		echo "<script>document.location='signup.php'</script>";  
	}

	if ($count_u>0)
	{
		//$reg_ok = false;
		echo "<script type='text/javascript'>alert('Username not available. Already Exists.');</script>";
		echo "<script>document.location='signup.php'</script>";
	}

	$sql = "INSERT INTO userinfo(fullname, email, username, password) VALUES ('$name', '$email', '$username', '$pass')";

	if($reg_ok){

		mysqli_query($conn, $sql) or die(mysqli_error($conn));

		echo "<script type='text/javascript'>alert('Successfully registered!');</script>";
		echo "<script>document.location='login.php'</script>";
	}
?>