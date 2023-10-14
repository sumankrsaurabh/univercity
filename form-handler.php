<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massege = $_POST['massege'];

$email_from ='info@gmail.com';
$email_subject ='New Form Submission';
$email_body = "user name : $name.\n";
"user name : $visitor_email.\n".
"user name : $subject.\n".
"user name : $massege.\n";
$to = 'sumankrsaurabh2005@gmail.com';

$headers = "from: $email_from\r\n";

$headers = "reply-to: $visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);

// header("location: contact.html");

echo "name = $name"
echo "visitor_email = $visitor_email"
echo "subject = $subject"
echo "massege = $massege"

?>