<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the form submission
    $email = $_POST['email'];

    // Validate email format
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Here you can either save the email to a database or a file
        // For example, saving to a text file
        $file = 'subscribers.txt'; // A file to store the email addresses
        file_put_contents($file, $email . PHP_EOL, FILE_APPEND);

        // Redirect back to the blog page with a success message
        header("Location: blog.php?status=success");
        exit();
    } else {
        // Redirect back to the blog page with an error message
        header("Location: blog.php?status=error");
        exit();
    }
}
?>
