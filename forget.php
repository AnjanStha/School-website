<html>
	<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="../alert/alert.js"></script>
	</head>
	<body>
		<script>
			function match(){
				swal("Sorry!", "Your email address is not registered!", "error");
			}
			function send(){
				swal("Thank you!", "Now you will receive a mail containing your  username and password!", "success");
			}
			function fail(){
				swal("Sorry!", "Please try again!", "error");
			}
			
			</script>
<?php
		//if(isset($_POST('submit')){
		if(isset($_POST['submit'])){
$email =$_POST['email'];


if(!empty($email) ) {
	
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "srms";
	
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
		
		
     $SELECT = "SELECT email From adminemail Where email = ? Limit 1";
     
		//Prepared statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
		 include("forgetpass.php");
	//echo"The email doesn't matched";
		 echo"<script>match();</script>";
	 }
	 else{
		$sql = "SELECT UserName,Password FROM admin";
			$result = mysqli_query($conn,$sql);
		print_r($result);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					$admin=$row['UserName'];
				    $password=$row['Password'];
				}
			}
	
		
	 $mailSub="Forget password";
$mailMsg="Username:\n".$admin."\n<br>Password:\n".$password;
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
$mail ->AddAddress($email);
if(!$mail->Send())
{
	include("forgetpass.php");
 //echo"Please try again";
	 echo"<script>fail();</script>";
}
else{
	include("forgetpass.php");
 //echo"<p>Now you will receive mail in your account. Please do as the mail says</p>";
	echo"<script>send();</script>";
}
				}
			}
	}}
		
		//else{
		//	header("loacation:delete.php");
		//}

?>
	</body>
</html>
	 
	 