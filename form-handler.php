<?php
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User email: $visitors_email.\n".
              "User message: $message.\n";
$to = 'ananyamanohar22@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>       