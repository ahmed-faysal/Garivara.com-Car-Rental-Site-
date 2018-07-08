<!DOCTYPE html>
 <html>
 <style>
  .head{
			text-align: center;
            color: red;
            font-family:'Oleo Script', cursive;
            font-size: 30px;
			text-decoration: none;
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

	
</style><center>

<body>
<div class="head">
        <h5><a href="Homepage.php">GaRiVaRa.CoM</a></h5>
    </div>

<div class="login">

<form  action="logincheck.php" method="post"> 
<div class="main">
		<h1>Login Here</h1>
		<label>Username</label><br>
        <input type="text" placeholder="Enter your username" name="lname" required>
        <br>
		<br>
        <label>Password</label><br>
        <input type="password" placeholder="Enter your password" name="lpass" required>
        <br>
		<br>
        <br>
        <input type="submit" value="LogIn" style="color:GhostWhite;font-weight:bold;font-size:20px;background-color:DeepSkyBlue;padding-right: 50px;padding-left: 50px;padding-top: 8px;padding-bottom: 15px">
        <br>
        <br>
        <br>
</form>

</div>
</body>
</html> 

