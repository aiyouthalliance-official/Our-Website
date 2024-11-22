<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // Include Composer autoload file  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        // Set the mailer to use SMTP
        $mail->isSMTP();
        
        // Set the SMTP server
        $mail->Host = 'smtp.gmail.com';  // Use Gmail's SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com';  // Your Gmail address
        $mail->Password = 'your-email-password';  // Your Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        
        // Set the sender and recipient
        $mail->setFrom('your-email@gmail.com', 'Website Contact');
        $mail->addAddress('your-email@example.com');  // Recipient's email address
        
        // Set the email subject and body
        $mail->Subject = 'New Contact Us Message from ' . $name;
        $mail->Body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        
        // Send the email
        $mail->send();
        
        // Redirect to a "Thank You" page
        header("Location: thank-you.php");
        exit();
    } catch (Exception $e) {
        // Handle errors
        echo "Oops! Something went wrong: " . $mail->ErrorInfo;
    }
}
?>
