<?php
$to = "edc@egspec.org";
$subject = "Email from my website";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$headers .= "content-type: text/html;\r\n";
$headers .= "From: $email";
mail($to, $subject, $message, $headers);
echo "Email has been sent! Thank you $name";
?>