<html>
	<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="../alert/alert.js"></script>
	</head>
	<body>
		<script>
		
			function send(){
				swal("Thank you!", "The mail has been sent.", "success");
			}
			function fail(){
				swal("Sorry!", "There was an error!. Please try again.", "error");
			}
			
			</script>




<?php



/*$name= $POST['name'];
$subject= $POST['mail_sub'];
$mailFrom= $POST['email'];
$message= $POST['mail_msg'];

$mailTo="computerproject2073@gmail.com";
$header= "From: ".$mailFrom;
$txt= "You have received an email from ".$name."\n\n.$message";
mail($mailTo,$subject,$txt,$headers);
header("location:contact.php?mailsend")*/
	 if(isset($_POST['submit'])){
$name= $_POST['Name'];
$umail= $_POST['email'];
$mailSub=$_POST['mail_sub'];
$mailMsg=$_POST['mail_msg'];
$txt= "You have received an email from ".$name.".\n<br>Email: .\n".$umail.".\n<br>Message:".$mailMsg;
//require("PHPMailer-master/PHPMailerAutoload.php");
    require_once('mailer/src/PHPMailer.php');
	require_once('mailer/src/SMTP.php');
	require_once('mailer/src/Exception.php');
$mail= new PHPMailer\PHPMailer\PHPMailer();     //object creation
$mail ->IsSmtp();
	//	$mail->CharSet="UTF-8"
$mail ->SMTPDebug=0;
$mail ->SMTPAuth=true;
$mail ->SMTPSecure='tls';
$mail ->Host= 'smtp.gmail.com';
$mail ->Port = 587;
$mail ->IsHTML(true);
$mail ->Username="computerproject2073@gmail.com";
$mail ->Password="invisible14918";
$mail->SetFrom("computerproject2073@gmail.com");
$mail ->Subject=$mailSub;
$mail ->Body=$txt;
$mail ->AddAddress("nirav.shrestha.940@gmail.com");
	if(!$mail->Send())
{
	include("contact.php");
//echo "mail not sent";
		echo"<script>fail();</script>";
}
else{
	include("contact.php");
//echo "mail sent";
	echo"<script>send();</script>";
}}
?>