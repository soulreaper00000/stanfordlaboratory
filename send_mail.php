<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "info@stanford.com.ph"; // Replace with your clinic email
    $subject = "Website Inquiry from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    mail($to, $subject, $body);

    echo "<script>alert('Message sent successfully!'); window.location='index.php#contact';</script>";
}
?>
