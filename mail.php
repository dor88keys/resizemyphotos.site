<?php
$message = '';
if (!$_GET[feedback]==1) {
	$other = $_POST['other'];
	$reason = $_POST['reason'];
	$subject = 'uninstalled feedback';
	$message = 'reason: '.$reason.'<br/>';
	$message .= 'other: '.$other.'<br/>';
}else{
	$subject = 'feedback & suggestions';
}

$moreInfo = $_POST['more-info'];
$email = $_POST['email'];
$to      = 'theguys@resizemy.photos';
$message .= 'moreInfo: '.$moreInfo.'<br/>';
$message .= 'email: '.$email.'<br/>';
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@resizemy.photos>' . "\r\n";

mail($to, $subject, $message, $headers);

echo 'Thank you for your feedback';

?> 