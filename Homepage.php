<!DOCTYPE html>
<html>
<head>
<style>
.head{
			text-align: center;
            color: red;
            font-family:'Oleo Script', cursive;
            font-size: 50px;
    	}
		a {
		text-decoration: none;
		color: rgb(255,255,255);
		}
		
span
{
font-family:"Times New Roman",Times,serif;
font-size:2.0em;
font-width:bold;
}
h2{
    text-transform: capitalize;
	color:rgb(255,255,255);
	font-family:"Times New Roman",Times,serif;
	top:25%;
    left:30%;
	font-size:3.5em;
	position: absolute;
}
body
{
     background-image:url("2ndpage.jpg");
	 background-position:right-top;
	 background-repeat:no-repeat;
	 background-size:cover;
	 background-attachment:fixed;
	 color: #e7e7e7;
}
.button {
   display: inline-block;
   border-radius: 4px;
   background-color: rgb(185,122,87);
   border: none;
   color: brown;
   text-align: center;
   width: 300px;
   margin:auto;
   border: 2px solid ;
   padding:20px 30px;
   transition: all 0.5s;
   cursor: pointer;
   margin: 5px;
   position: absolute;
   top:60%;
   left:20%;
   height:80px;
}
.second {
   display: inline-block;
   border-radius: 4px;
   background-color: rgb(185,122,87);
   border: none;
   color: brown;
   text-align: center;
   width: 300px;
   margin:auto;
   border: 2px solid ;
   padding:20px 30px;
   transition: all 0.5s;
   cursor: pointer;
   margin: 5px;
   position: absolute;
   top:60%;
   left:60%;
   height:80px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style><center>
</head>
<body>
<div class="head">
        <h5><a href="Homepage.php">GaRiVaRa.CoM</a></h5>
    </div>

<h2>CHOSE YOUR OPTION</h2>

<a href="login.php"><button  class="button" style="vertical-align:middle"><span>LOGIN </span></button></a> 
<a href="signup.php"><button  class="button second" style="vertical-align:middle"><span>SIGN UP </span></button></a> 

</body>
</html>
