<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$msg = "

Name: $name
Email: $email
Subject: $subject
Message: $message
";

$to = "cathal.skelton@gmail.com";
$subject = "Message CSkel Website";
$message = $msg;
$headers = "Website Form";
mail($to,$subject,$message,$headers);

?>