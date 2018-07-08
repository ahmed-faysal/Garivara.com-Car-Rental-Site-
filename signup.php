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

	
</style><center>

<body>
<div class="head">
        <h5><a href="Homepage.php">GaRiVaRa.CoM</a></h5>
    </div>

<div class="login">

<form  action="inserttodb.php" method="post">
<div class="main">
		<h1>Sign Up Here</h1>
        <label>Full Name</label><br>
        <input type="text" placeholder="Enter your name" name="fname" required>
		<br>
		<br>
		<label>Username</label><br>
        <input type="text" placeholder="Enter your username" name="uname" required>
        <br>
		<br>
        <label>Email</label><br>
        <input type="email" placeholder="Enter your email" name="email" required>
        <br>
		<br>
        <label>Password</label><br>
        <input type="password" placeholder="Enter your password" name="pass1" required>
        <br>
		<br>
		<label>Confirm Password</label><br>
        <input type="password" placeholder="Confirm your password" name="pass2" required>
        <br>
		<br>
        <br>
        <input type="submit" value="SignUp" style="color:GhostWhite;font-weight:bold;font-size:20px;background-color:DeepSkyBlue;padding-right: 50px;padding-left: 50px;padding-top: 8px;padding-bottom: 15px">
        <br>
        <br>
        <br>
</form>

</div>
</body>
</html> 

