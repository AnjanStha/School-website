<?php
session_start();
include('../includes/config.php');
// if($_SESSION['alogin']!=''){
// $_SESSION['alogin']='';
// }
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$sql ="SELECT StudentEmail,RollId FROM tblstudents WHERE StudentEmail=:email and RollId=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':StudentEmail', $email, PDO::PARAM_STR);
$query-> bindParam(':RollId', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['email'];
echo "<script type='text/javascript'> document.location = '../dashboard1.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Details');</script>";

}

}

?>