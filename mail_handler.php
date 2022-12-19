<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$contact_number=$_POST['contact-number'];
		$subject=$_POST['subject'];
		$comment=$_POST['comment'];

		$to='muchogo.vance@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='A message from puno.africa/contact page';
		$message="Name :".$name."\n"."Phone :".$contact_number."\n"."Wrote the following :"."\n\n".$comment;
		$headers="From: ".$email;

		if(mail($to, $subject, $comment, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>