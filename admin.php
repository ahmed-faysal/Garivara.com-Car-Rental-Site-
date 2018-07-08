<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="main.css">

<script type="text/javascript">
    function sureToDelete(id){
      if(confirm("Are you sure you want to delete this car?")){
        window.location.href ='delete_car.php?id='+id;
      }
    }


    function sureToUpdate(id){
      if(confirm("Are you sure you want to update this car info?")){
        window.location.href ='edit_car.php?id='+id;
      }
    }
</script>

<style>
 body{
            background-image: url(pink.jpg);
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

.actionicon {
    width: 25px;
    height: 25px;
}
</style>
</head>

<body>
<div class="head">
        <h5><a href="Homepage.php">GaRiVaRa.CoM</a></h5>
    </div>
<div class="navbar">
	<a href="postadd.php">Post AD</a>
  <div style= "float:right"><a class="active" href="Homepage.php">Logout</a></div>
    
</div>

 <section class="listings">
    <div class="wrapper">
      <ul class="properties_list">
      <?php
            include 'db.php';
            include 'function.php';
            $sel = "SELECT * FROM inventory";
            $rs = $conn->query($sel);
            while($rws = $rs->fetch_assoc()){
      ?>
        <li>
          <a href="book_car.php?id=<?php echo $rws['id'] ?>">
            <img src="uploads/<?php echo $rws['image'];?>" width="340" height="200">
          </a>
          <span class="price"><?php echo 'Tk.'.$rws['hire_cost'];?></span>
          <div class="property_details">
            <section style="float: right; padding: 10px;">
              <button type="submit" style="border: 0; background: transparent" onclick="sureToUpdate(<?php echo $rws['id'] ?>)" >
                <img class="actionicon" src="Edit.png" alt="Edit" >
              </button>
              <br><br>
              <button type="submit" style="border: 0; background: transparent" onclick="sureToDelete(<?php echo $rws['id'] ?>)" >
                <img class="actionicon" src="Delete.png" alt="Delete" >
              </button>
            </section>
            <h1>
              <a href="book_car.php?id=<?php echo $rws['id'] ?>"><?php echo 'Type> '.$rws['c_type'];?></a>
            </h1>
            <h2>Car Name/Model: <span class="property_size"><?php echo $rws['c_name'];?></span></h2>
            <h4>Status: <span class="property_size"><?php echo $rws['status'];?></span></h4>
          </div>
        </li>
      <?php
        }
      ?>
      </ul>
    </div>
  </section>
</body>
</html>
