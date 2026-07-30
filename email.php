<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;

        // Replace with your dealership email
        $mail->Username = "yourdealership@gmail.com";

        // Replace with your Gmail App Password
        $mail->Password = "YOUR_APP_PASSWORD";

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom($email, $name);

        // Dealership email
        $mail->addAddress("yourdealership@gmail.com");

        $mail->Subject = "New Car Enquiry";

        $mail->Body =
        "Customer Name : $name\n\n" .
        "Email : $email\n\n" .
        "Phone : $phone\n\n" .
        "Message :\n$message";

        $mail->send();

        echo "<script>
        alert('Thank you! Your enquiry has been sent successfully.');
        window.location='contact.html';
        </script>";

    } catch (Exception $e) {

        echo "Email could not be sent.";

    }

}