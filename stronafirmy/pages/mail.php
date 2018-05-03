<?php
$to      = 'seba900000@interia.pl';
$subject = $_POST['subject'];
$message = $_POST['message'];
//$headers = 'From: ' . $_POST['email'] . "\r\n" .
	//'Content-type: text/html; charset=utf-8';

$headers = 'From: webmaster@ormandier.cba.pl';

$status = mail($to, $subject, $message, $headers);

if($status)
{ 
    echo '<p>Your mail has been sent!</p>';
} else { 
    echo '<p>Something went wrong, Please try again!</p>'; 
}

?>