<?php
session_start();
error_reporting(0);
include('../includes/config.php');


?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
<body>
<form action="admin.php" method="post">
	<h2>Login Form</h2>
  <div class="imgcontainer">
    <img src="image/putra.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username"  autocomplete="off" name="username" id="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password"  autocomplete="off" name="password" id="pass" required>
    <input type="checkbox" onclick="myFunction()">Show Password 
     
    <button type="submit" name="login">Login</button>
   
  </div>
  
  
  

  <div class="container" style="background-color:#f1f1f1">
     <a href="../index.php" class="cancelbtn" > Cancel</a>
   
    <span class="psw">Forgot <a href="forgetpass.php">password?</a></span>
  </div>
</form>
	<?php
	if(isset($_COOKIE['uname']) and isset($_COOKIE['pass'])){
		$uname=$_COOKIE['uname'];
		$pass=$_COOKIE['pass'];
		echo"<script>
		document.getElementById('uname').value= '$uname';
		document.getElementById('pass').value= '$pass';
		</script>";
			
	}
	
	?>

 <script>
function myFunction() {
    var x = document.getElementById("pass");
  
    if (x.type === "text") {
        x.type = "password";
    } else {
        x.type = "text";
    }
}
</script>

</body>

</html>
