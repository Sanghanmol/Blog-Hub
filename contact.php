<?php
// Retrieve form data
$fullName = $_POST['full_name'];
$email = $_POST['email'];
$message = $_POST['message'];

$body = "Full Name: $fullName\n";
$body .= "Email: $email\n";
$body .= "Message: $message\n";

// Set the recipient email address
$to = " "; // Replace with your email address

$subject = "Contact Form Submission";

$headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

// Send the email
$mailSent = mail($to, $subject, $body, $headers);
if ($mailSent) {
    echo "Email sent successfully!";
} else {
    echo "Oops! Something went wrong.";
}
?>

