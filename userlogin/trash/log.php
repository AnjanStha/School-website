<html>
	<head>
		<script src="../alert/alert.js"></script>
	</head>
	<body>
		<script>
			function fail(){
				swal("Sorry!", "Wrong username or password!!!.", "error");
			}
			
			</script>
<?php
		include('../includes/config.php');
   if(isset($_POST['submit']))
   {
  
	//require_once("../connection/connection.php");
	$result=mysqli_query($con,"select * from tblstudents");
	if($result==false)
	{
	  echo "error";
	}
	else
	{
	$row=mysqli_fetch_array($result);
	}
	   if(isset($_POST['submit'])){
	if($_POST['email']==$row['StudentEmail'] && $_POST['password']==$row['RollId'])
	{
		$email=$_POST['email'];
		$RollId=$_POST['password'];
		
	
		session_start();
		mysqli_close($con);
		$_SESSION['alogin']=$email;
		//$_SESSION['flag']=1;
		//echo $_SESSION['uname'];
		//echo"you are the admin";
		header("location:../dashboard1.php");
	}
	else {
	//echo "<tr>";
		mysqli_close($con);
	//	echo "<th colspan=2>"."<font color='red' size=5>"."Wrong username or password!!!"."</font>"."</th>";
	//echo "</tr>";
	header("location:login.php");
		echo"<script>fail();</script>";
	    }
	}
else{
	header("location:login.php");
}
   }
?>
	</body>
</html>