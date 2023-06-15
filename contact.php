<?php
// Retrieve form data
$fullName = $_POST['full_name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Compose email body
$body = "Full Name: $fullName\n";
$body .= "Email: $email\n";
$body .= "Message: $message\n";

// Set the recipient email address
$to = "anmolsangha02@gmail.com"; // Replace with your email address

// Set the email subject
$subject = "Contact Form Submission";

// Set additional headers
$headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

// Send the email
$mailSent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo "Email sent successfully!";
} else {
    echo "Oops! Something went wrong.";
}
?>

