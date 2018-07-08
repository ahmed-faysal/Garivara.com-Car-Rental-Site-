    <?php
        include ("db.php");
        include ("function.php");

        $i = mysqli_query($conn, "update inventory set c_name='".$_POST['txtname']."', c_type='".$_POST['txttype']."', capacity='".$_POST['txtcapacity']."',  status='".$_POST['txtstatus']."', hire_cost='".$_POST['txtcost']."' where id=".$_POST['txtid']);
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php">';
        }
        //header('Location::index.php');
        //exit;
        //mysql_close();
    ?>