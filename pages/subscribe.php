<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the submitted email
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Simulate saving to the database (for demonstration)
        // You can replace this with actual database logic to store the email
        // For now, we simulate a success and redirect the user back to blogs.php
        header("Location: blogs.php?status=success");
        exit();
    } else {
        // If the email is not valid, redirect with error
        header("Location: blogs.php?status=error");
        exit();
    }
}
?>
