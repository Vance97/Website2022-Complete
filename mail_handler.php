<?php
require 'PHPMailerAutoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


$name=$_POST['name'];
$email=$_POST['email'];
$contact_number=$_POST['contact-number'];
$subject=$_POST['subject'];
$comment=$_POST['comment'];

$mail = new PHPMailer;
$mail->setFrom($email, $name);
$mail->addAddress('muchongo.vance@gmail.com', 'admin');
$mail->Subject  = $subject;
$mail->Body     = $comment;
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}