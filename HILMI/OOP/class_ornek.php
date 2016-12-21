<?php
$metin = "Deneme Metin";
//mail("hilmi@hilmibaycan.com" ,"Deneme Email", $metin);

/**
 * This example shows sending a message using a local sendmail binary.
 */

require 'PHPMailer/PHPMailerAutoload.php';

date_default_timezone_set('Etc/UTC');

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "dershalic@gmail.com";
$mail->Password = "dershalic123";
$mail->addAddress('hilmi@hilmibaycan.com', 'Bir Dost');
$mail->Subject = 'PHPMailer SMTP test';
$mail->msgHTML("Bir metin");
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
