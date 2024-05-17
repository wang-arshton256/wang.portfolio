<?php
// Get data from form
$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

$to      = "wangarshton@gmail.com";
$subject = "From wanglayouts.com";

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt = "Name = " . $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;

$headers = "From: noreply@demosite.com" . "\r\n" .
    "CC: somebodyelse@example.com";
if ($email != null) {
    mail($to, $subject, $txt, $headers);
}

// Redirect to
header("Location:contact.php");
