<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc; /* Light grayish-blue background */
            color: #333;
        }

        header {
            background-color: #007bff; /* Blue background */
            color: #fff;
            padding: 30px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        /* Contact form styles */
        .contact-form {
            padding: 40px 20px;
            text-align: center;
            background-color: #fff;
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
            margin: 30px auto;
            max-width: 700px;
            width: 100%;
        }

        .contact-form h2 {
            font-size: 32px;
            color: #007bff; /* Blue color for form header */
            margin-bottom: 20px;
        }

        .contact-form label {
            font-size: 18px;
            color: #555;
            margin-top: 10px;
            display: block;
            text-align: left;
            margin-left: 10px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            box-sizing: border-box;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #007bff; /* Blue border on focus */
            outline: none;
        }

        .contact-form button {
            background-color: #007bff; /* Blue button */
            color: #fff;
            padding: 15px 25px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        /* Footer styles */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px;
            font-size: 14px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

<header>
    <div class="contact-header">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Please fill out the form below and we'll get in touch with you as soon as possible.</p>
    </div>
</header>

<main class="contact-form">
    <h2>Get in Touch</h2>
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

<?php include('../includes/footer.php'); ?>

</body>
</html>
