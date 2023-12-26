<?php
    require 'phpmailer/PHPMailerAutoload.php';

    //we need to create an instance of PHPMailer
    $mail = new PHPMailer();

    $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
$mail->Port = '587';

$mail->SMTPSecure = 'tls';


$mail->SMTPAuth = true;
$mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

$mail->Username = "email";

$mail->Password = "password";



$mail->setFrom('email', 'alisha adhikari');


$mail->addReplyTo('email', 'Reply me');

$mail->addAddress( 'email2', 'Anil Bista');

$mail->Subject = 'GMail ';

    //type of email
    $mail->isHTML(true);

    //write email
    $mail->Body = "<p>this is our email body</p><br><br><a href='http://google.com'>Google</a>";

    //include attachment
    $mail->addAttachment('fbcover.png', 'Facebook cover.png');

    //send an email
    if (!$mail->send())
        echo "Something wrong happened!";
    else
        echo "Mail sent";
?>