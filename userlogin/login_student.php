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
<form action="admin2.php" method="post">
	<h2>Login Form</h2>
  <div class="imgcontainer">
    <img src="image/putra.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email"  autocomplete="off" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password"  autocomplete="off" name="password" id="pass" required>
    <input type="checkbox" onclick="myFunction()">Show Password 
     
    <button type="submit" name="login">Login</button>
    <label>
     
    </label>
  </div>
  
  
  

  <div class="container" style="background-color:#f1f1f1">
   
  <a href="../index.php"class="cancelbtn" >Cancel</a>
	
   

  </div>
</form>
	
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
