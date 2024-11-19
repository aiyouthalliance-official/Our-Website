<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // You can either save the data to a file, send an email, or store it in a database.
    // Example: Save to a file
    $formData = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n\n";
    file_put_contents('contact-requests.txt', $formData, FILE_APPEND);

    // Redirect to a thank-you page or show a success message
    header('Location: thank-you.php');
    exit();
}
?>
