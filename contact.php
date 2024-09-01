<?php
// Validate and sanitize inputs
$name = htmlspecialchars($_POST['name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($_POST['message']);

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $to = "bastiansoutdoorsolutions@gmail.com";
    $subject = "New Message from Website";

    // The following text will be sent
    $txt = "Name: $name\r\nEmail: $email\r\nMessage:\r\n$message";

    $headers = "From: noreply@demosite.com\r\n" .
               "CC: somebodyelse@example.com";

    // Send the email
    if (mail($to, $subject, $txt, $headers)) {
        // Redirect on successful email send
        header("Location: last.html");
        exit(); // Prevent further script execution
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid email format.";
}
?>
