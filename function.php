<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function delete_user($id){
	$sql = "DELETE FROM userinfo WHERE id = '$id'";
	mysqli_query($conn, $sql);
}

?>