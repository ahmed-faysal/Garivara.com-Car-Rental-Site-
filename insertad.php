<?php
	include('db.php');
	include('function.php');
?>

<?php

	echo "In the block";

	if(isset($_FILES['adpic']))
	{

		echo "File set";
		$imagename = basename($_FILES['adpic']['name']);
	    $type = test_input($_POST['ctype']);
	    $name = test_input($_POST['cname']);
	    $capacity = test_input($_POST['ccap']);
	    $rate = test_input($_POST['cost']);

	    echo "Data stored";

	    $errors= array();

	    $img = $_FILES['adpic']['name'];
	    $file_size = $_FILES['adpic']['size'];//determine file size format
	    $file_type = $_FILES['adpic']['type'];//determine type
	    $file_ext= strtolower(end(explode('.', $_FILES['adpic']['name'])));

	    $extensions= array("jpeg","jpg","png");

	    if(in_array($file_ext,$extensions) === false){
	        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
	    }

	    if($file_size > 512097152) {
	        $errors[]='File size must be less than 5 MB';
	    }

	    if(empty($errors)==true) {
	        move_uploaded_file($_FILES['adpic']['tmp_name'],'uploads/'.$img);//save file in uploads/ folder
	        echo "Success";
	    }else{
	        print_r($errors);//show error msg
	    }

	    $sql_p = "INSERT INTO inventory(c_name, c_type, capacity, image, status, hire_cost) VALUES ('$name','$type','$capacity','$imagename','Available','$rate')";

	    mysqli_query($conn, $sql_p) or die(mysqli_error($conn));//if sql_p work then insert will be 1 otherwise 0

	    echo "Query done";
	    echo "<script>document.location='admin.php'</script>";
	        //header('Location:HomePage.php');//back to login page

	}
?>