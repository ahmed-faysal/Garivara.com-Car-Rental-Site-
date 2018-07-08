<?php
	include 'db.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM inventory WHERE id = '$id'";

	$result = mysqli_query($conn, $query);

	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Car Successfully Removed\");
					window.location = (\"admin.php\")
				</script>";
	}
?>
