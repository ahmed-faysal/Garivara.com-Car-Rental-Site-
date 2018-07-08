<?php 
	include('db.php');
	include('function.php');
   
   	$username = test_input($_POST['lname']);
	$password = test_input($_POST['lpass']);

	$query1 = mysqli_query($conn,"SELECT * from userinfo where username = '$username'")or die(mysqli_error($conn));
	$count1 = mysqli_num_rows($query1);

	if ($count1<1)
	{
		echo "<script type='text/javascript'>alert('Username does not exist');</script>";
		echo "<script>document.location='signup.php'</script>";  
	}

	$query2 = mysqli_query($conn,"SELECT * from userinfo where username = '$username' and password = '$password'")or die(mysqli_error($conn));
	$count2 = mysqli_num_rows($query2);

	if ($count2>0)
	{
		//echo "<script type='text/javascript'>alert('Logged In !');</script>";
		if($username == 'admin')
		{
			echo "<script type='text/javascript'>alert('Admin Logged In !');</script>";
			echo "<script>document.location='admin.php'</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('User Logged In !');</script>";
			echo "<script>document.location='user.php'</script>";
		}
		
	}
	else
	{
		echo "<script type='text/javascript'>alert('Password incorrect !');</script>";
		echo "<script>document.location='login.php'</script>";
	}
 ?>