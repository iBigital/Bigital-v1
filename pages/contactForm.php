<?php

$name = $_POST[htmlspecialchars('name')];
$phone = $_POST[htmlspecialchars('phone')];
$visitor_email = $_POST[htmlspecialchars('email')];
$service = $_POST[htmlspecialchars('service')];
$message = $_POST[htmlspecialchars('message')];

$site_url='http://callofdooty702.com/';

$email_from = "admin@callofdooty702.com/";

$to = "admin@ibigital.com";

$email_subject = "Contact Form from CallofDooty702.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

$email_body = "You have received a new message from $name (email: $visitor_email & phone #: $phone). \r\n They are requesting $service service. \r\n Here is the message: \r\n $message";

mail($to,$email_subject,$email_body,$headers);

echo '<META HTTP-EQUIV=REFRESH CONTENT="15; '.$site_url.'">';

echo "<h1> FORM SENT SUCCESS! </h1>";

echo "Thank you " .$name. ", if your browser doesn't automatically redirect you in 30 seconds please ";

echo "<a href='".$site_url."'>CLICKHERE.</a>";

?>