<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "finnrasmus2000@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Message:\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "There was a problem sending the message.";
    }
}
?>
