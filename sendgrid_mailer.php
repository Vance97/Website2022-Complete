<?php
require 'vendor/autoload.php';
require sendgrid-php.php // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

	$submit=$_POST['submit'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact_number=$_POST['contact'];
	$subject=$_POST['subject'];
	$comment=$_POST['comment'];

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom($email, $name);
$email->setSubject($subject);
$email->addTo("admin@puno.africa", "Admin");
$email->addContent($comment);

$sendgrid = new \SendGrid(getenv('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
'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}