<?php
// Include notifications file
include('../includes/notifications.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Youth Alliance</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        /* Notification Bar with Colorful Design */
        @keyframes moveWave {
            0% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 100%;
            }
        }

        .notification-bar {
            position: sticky;
            top: 0;
            width: 100%;
            height: 50px; /* Adjust height as needed */
            background: linear-gradient(45deg, #00bcd4, #ff4081, #4caf50, #3f51b5, #9c27b0);
            background-size: 200% 200%;
            animation: moveWave 5s ease-in-out infinite;
            z-index: 1000;
            color: white;
            font-size: 18px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .notification-message {
            margin: 0 20px;
        }

        header {
            background-color: #fff;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            width: 150px;
            height: auto;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <div class="logo">
        <img src="../assets/image/logo.jpg" alt="AI Youth Alliance Logo">
        </div>
        <nav>
            <ul class="primary-nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../pages/about-us.php">About Us</a></li>
                <li><a href="../pages/join.php">Join</a></li>
                <li><a href="../pages/contact-us.php">Contact Us</a></li>
                <li><a href="../pages/events.php">Events</a></li>
                <li><a href="../pages/research.php">Research</a></li>
                <li><a href="../pages/blogs.php">Blogs</a></li>
                <li><a href="../pages/projects.php">Projects</a></li>
                <li><a href="../pages/free-classes.php">Free Classes</a></li>
                <li><a href="../pages/forum.php">Forum</a></li>
                <li><a href="../pages/resources.php">Resources</a></li>
                <li><a href="../pages/mentors.php">Mentors</a></li>
                <li><a href="../pages/ambassadors.php">Ambassadors</a></li>
                <li><a href="../pages/volunteers.php">Volunteers</a></li>
                <li><a href="../pages/members.php">Members</a></li>
                <li><a href="../pages/partners.php" class="active">Partners</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Notification Bar -->
<div class="notification-bar">
    <?php 
    // Loop through notifications array to display messages
    foreach ($notifications as $notification) {
        echo "<span class='notification-message'>$notification</span>";
    }
    ?>
</div>

</body>
</html>
