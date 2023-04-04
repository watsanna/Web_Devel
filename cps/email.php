<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Construct the email message
    $to = "watsanna@kean.edu"; // Replace with your own email address
    $cc = "$email";
    $subject = "New Website message from $name ";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $cc, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }

    header('Location: ThankYou.html');
exit;
}
?>
