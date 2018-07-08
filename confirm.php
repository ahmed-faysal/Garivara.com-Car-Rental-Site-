<?php
	include('db.php');
	include('function.php');
	session_start();

	$id = $_SESSION['cid'];

	$cost = $_SESSION['cost'];
	$qty = $_POST['days'];

	$tot = $cost * $qty;

	$_SESSION['total'] = $tot;

	$sql = "UPDATE inventory SET status='Booked' WHERE id= $id";

	mysqli_query($conn, $sql) or die(mysqli_error($conn));

	echo "<script>document.location='confirm_booking.php'</script>";
?>