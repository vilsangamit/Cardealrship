<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=htmlspecialchars($_POST["name"]);
$email=htmlspecialchars($_POST["email"]);
$subject=htmlspecialchars($_POST["subject"]);
$message=htmlspecialchars($_POST["message"]);

if(empty($name)||empty($email)||empty($subject)||empty($message)){

die("Please fill all fields.");

}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

die("Invalid Email Address.");

}

/*
For XAMPP:
Configure SMTP in php.ini to use mail()

$mailSent = mail(
"maheshgamit321@gmail.com",
$subject,
"Name: $name\nEmail: $email\n\n$message"
);
*/

echo "

<!DOCTYPE html>

<html>

<head>

<title>Message Sent</title>

<link rel='stylesheet' href='style.css'>

</head>

<body>

<div style='width:500px;margin:120px auto;text-align:center;'>

<h2>Thank You!</h2>

<p>Your message has been received successfully.</p>

<a href='contact.php' class='btn'>

Go Back

</a>

</div>

</body>

</html>

";

}
?>