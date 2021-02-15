<?php
$brand= $_REQUEST['brand'];
$shop= $_REQUEST['shop'];
$lips= $_REQUEST['lips'];
$face= $_REQUEST['face'];
$eyes= $_REQUEST['eyes'];
$nyx= $_REQUEST['nyx'];
$age= $_REQUEST['age'];
$city= $_REQUEST['city'];
$email= $_REQUEST['email'];

$to      = 'sarah_naamani@outlook.com';
$subject = 'NYX Survey Result';
$message = "Brand Used:".$brand."\r\n";
$message = $message."Shopping Style: ".$shop."\r\n";
$message = $message."NYX for lips? ".$lips."\r\n";
$message = $message."NYX for face? ".$face."\r\n";
$message = $message."NYX for eyes? ".$eyes."\r\n";
$message = $message."Return to NYX? ".$nyx."\r\n";
$message = $message."Age: ".$age."\r\n";
$message = $message."City: ".$city."\r\n";
$message = $message."Email: ".$email."\r\n";
$headers = 'From: moe@dayrakiarts.com' . "\r\n" .
    'Reply-To: moe@dayrakiarts.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
