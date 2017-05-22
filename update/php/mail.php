<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>BlueSquare</title>
</head>
<body>
<?php
require 'class.phpmailer.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom($_REQUEST['email'], $_REQUEST['name']);
//Set who the message is to be sent to
$mail->addAddress('update@bluesquaremfg.com');
$mail->addAddress('jacob@yanocreative.com');
//Set the subject line
$mail->Subject = 'BlueSquare Update Program Submission';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$message =  '<div style="padding: 64px; background-color: #f3f3f3; max-width: 480px; margin: 0 auto; text-align: center;">'.
            '<p style="color: #666; font-size: 24px;"><strong>An Update request has been submitted!</strong></p>'.
            '<p style="color: #666; font-size: 16px;"><strong>Name:</strong> '.$_REQUEST['name'].'</p>'.
            '<p style="color: #666; font-size: 16px;"><strong>Email Address:</strong> '.$_REQUEST['email'].'</p>'.
            '<p style="color: #666; font-size: 16px;"><strong>Phone:</strong> '.$_REQUEST['usrtel'].'</p>'.
            '<p style="color: #666; font-size: 16px;"><strong>Pageview:</strong> '.$_REQUEST['pageview'].'</p>'.
            '</div>';
$mail->msgHTML($message);
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo '<script>window.location = "../index.html?p=success#section2";</script>';
}
?>
</body>
</html>
