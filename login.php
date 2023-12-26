<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Details');</script>";

}

}

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/login.css">
	</head>
<body>
<form  method="post">
	<h2>Login Form</h2>
  <div class="imgcontainer">
    <img src="../image/putra.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username"  autocomplete="off" name="uname" id="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password"  autocomplete="off" name="pass" id="pass" required>
    <input type="checkbox" onclick="myFunction()">Show Password 
     
    <button type="submit" name="login">Login</button>
    <label>
      <input type="checkbox"  name="remember" value="1"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" href=> Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
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
