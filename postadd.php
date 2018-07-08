<!DOCTYPE html>
 <html>
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

<body>
<div class="head">
        <h5><a href="Homepage.php">GaRiVaRa.CoM</a></h5>
    </div>

<div class="login">

<form  action="insertad.php" method="post" enctype = "multipart/form-data"> 
<div class="main">
		<h1>Post Add Here</h1>
        <label>Vehicle Type</label><br>
        <input type="text" name="ctype" required>
		<br>
		<br>
		<label>Vehicle Name</label><br>
        <input type="text"  name="cname" required>
        <br>
		<br>
        <label>Capacity</label><br>
        <input type="text" name="ccap" required>
        <br>
		<br>
        <label>Hire Cost</label><br>
        <input type="text" name="cost" required>
		<br>
		<br>
		<label>Upload Image</label><br>
		<input type="file" name="adpic" required>
        <br>
		<br>
        <input type="submit" value="Submit" style="color:GhostWhite;font-weight:bold;font-size:20px;background-color:DeepSkyBlue;padding-right: 50px;padding-left: 50px;padding-top: 8px;padding-bottom: 15px">
        <br>
        <br>
</form>

</div>
</body>
</html> 

