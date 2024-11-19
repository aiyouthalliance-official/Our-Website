<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join AI Youth Alliance</title>
</head>
<body>

<header>
    <div class="join-header">
        <h1>Join AI Youth Alliance</h1>
        <p>Be a part of the next wave of AI innovators. Fill out the form to join our community and stay updated with the latest projects, events, and news!</p>
    </div>
</header>

<main class="join-content">
    <form action="join-thank-you.php" method="POST">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required placeholder="Enter your full name">
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email address">
        </div>

        <div class="form-group">
            <label for="message">Why do you want to join?</label>
            <textarea id="message" name="message" required placeholder="Tell us why you want to join AI Youth Alliance"></textarea>
        </div>

        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
</main>

<?php include('footer.html'); ?>

</body>
</html>
