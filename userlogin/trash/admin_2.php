<?php
session_start();
include('../includes/config.php');
// if($_SESSION['alogin']!=''){
// $_SESSION['alogin']='';
// }
if(isset($_POST['login']))

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
	   if(isset($_POST['login'])){
	if($_POST['email']==$row['StudentEmail'] && $_POST['password']==$row['RollId'])
	{
		$email=$_POST['email'];
		$RollId=$_POST['password'];
		
	
		session_start();
		$_SESSION['alogin']=$_POST['email'];
		mysqli_close($con);
echo "<script type='text/javascript'> document.location = '../dashboard1.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Details');</script>";

}

}

?>