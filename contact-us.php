<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>

<header>
    <div class="contact-header">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Please fill out the form below and we'll get in touch with you as soon as possible.</p>
    </div>
</header>

<main class="contact-form">
    <form action="send-contact.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="message">Message</label>
        <textarea name="message" id="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</main>

<?php include('footer.html'); ?>

</body>
</html>
