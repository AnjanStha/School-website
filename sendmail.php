
<html>
	<head>
		<script src="alert/alert.js"></script>
	</head>
	<body>
		<script>
		
			function send(){
				swal("Thank you!", "The mail has been sent.", "success");
			}
			function fail(){
				swal("Sorry!", "Mail not sent.", "error");
			}
			
			</script>
		<?php
		
$mailto=$_POST['email'];
$mailSub=$_POST['mail_sub'];
$mailMsg=$_POST['mail_msg'];
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
$mail ->Body=$mailMsg;
$mail ->AddAddress($mailto);
				
if(!$mail->Send())
{
	include("message.php");
echo "mail not sent";
	echo"<script>fail();</script>";
}
		
else{
	include("message.php");
echo "mail sent";
	echo"<script>send();</script>";
}
		
		
?>
	</body>
</html>