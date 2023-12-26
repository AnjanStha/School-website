
<?php

session_start();
//include('../includes/config.php');
// if($_SESSION['alogin']!=''){
// $_SESSION['alogin']='';
// }
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];
	$conn = mysqli_connect("localhost","root","", "srms");
	//mysqli_connect("localhost","root","");
	//mysqli_select_db("srms");
	$query="SELECT * from tblstudents where StudentEmail='$email' and RollId='$password'";
	$data =mysqli_query($conn,$query);
	$total= mysqli_num_rows($data);
	if($total>0){
		$_SESSION['alogin']=$_POST['email'];
		echo "<script type='text/javascript'> document.location = '../dashboard1.php'; </script>";
	}
	else{
		  echo "<script>alert('Invalid Details');</script>";
	}
}
?>