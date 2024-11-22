<?php
require "vendor/autoload.php";

// Define base URL dynamically
$baseUrl = "/";

// Set error reporting for development
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Get the current page to highlight the active menu item
$currentPage = basename($_SERVER["PHP_SELF"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AI Youth Alliance - Empowering the next generation of AI innovators and leaders. Join us to shape the future of AI.">
    <meta name="keywords" content="AI, Artificial Intelligence, Youth Alliance, Innovation, Technology, Research, AI Leadership">
    <meta name="author" content="AI Youth Alliance">
    <title>AI Youth Alliance</title>
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/styles.css">

    <!-- AI Inspired Multi-Colored Oceanic Wave Notification Bar CSS -->
    <style>
    /* AI Inspired Multi-Colored Oceanic Wave Notification Bar */
    .wave-notification-bar {
        background: linear-gradient(45deg, #00bcd4, #4caf50, #ffeb3b, #ff5722, #9c27b0);
        color:red ;
        padding: 10px 0;
        position: relative;
        animation: waveAnimation 30s infinite linear;
        text-align: center;
        font-weight: 600; /* Slightly bolder text */
        font-size: 28px; /* Increased font size */
        font-family: 'Arial', motorola; /* readable font */
    }

    .wave-notification-bar .wave-content {
        padding: 0 20px;
        display: inline-block;
    }

    @keyframes waveAnimation {
        0% {
            transform: translateX(-100%);
        }
        100% {
            transform: translateX(100%);
        }
    }

    .wave-notification-bar span {
        display: block;
        animation: slideIn 30s infinite linear;
    }

    /* Animation to slide the text across the screen */
    @keyframes slideIn {
        0% {
            transform: translateX(-100%);
        }
        100% {
            transform: translateX(100%);
        }
    }

    .wave-notification-bar a {
        color: white;
        text-decoration: underline;
        font-weight: 700; /* Bold the link for better visibility */
    }
</style>

</head>

<body>

    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="logo">
                <img src="<?php echo $baseUrl; ?>assets/image/logo.jpg" width="150px" height="150px" alt="AI Youth Alliance Logo">
            </div>
            <nav>
                <ul class="primary-nav">
                    <li><a href="<?php echo $baseUrl; ?>index.php" class="<?php echo $currentPage == "index.php" ? "active" : ""; ?>">Home</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/about-us.php" class="<?php echo $currentPage == "about-us.php" ? "active" : ""; ?>">About Us</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/join.php" class="<?php echo $currentPage == "join.php" ? "active" : ""; ?>">Join</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/contact-us.php" class="<?php echo $currentPage == "contact-us.php" ? "active" : ""; ?>">Contact Us</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/events.php" class="<?php echo $currentPage == "events.php" ? "active" : ""; ?>">Upcoming Events</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/past-events.php" class="<?php echo $currentPage == "past-events.php" ? "active" : ""; ?>">Past Events</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/research.php" class="<?php echo $currentPage == "research.php" ? "active" : ""; ?>">Research</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/blogs.php" class="<?php echo $currentPage == "blogs.php" ? "active" : ""; ?>">Blogs</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/projects.php" class="<?php echo $currentPage == "projects.php" ? "active" : ""; ?>">Projects</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/free-classes.php" class="<?php echo $currentPage == "free-classes.php" ? "active" : ""; ?>">Free Classes</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/forum.php" class="<?php echo $currentPage == "forum.php" ? "active" : ""; ?>">Forum</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/resources.php" class="<?php echo $currentPage == "resources.php" ? "active" : ""; ?>">Resources</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/mentors.php" class="<?php echo $currentPage == "mentors.php" ? "active" : ""; ?>">Mentors</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/ambassadors.php" class="<?php echo $currentPage == "ambassadors.php" ? "active" : ""; ?>">Ambassadors</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/volunteers.php" class="<?php echo $currentPage == "volunteers.php" ? "active" : ""; ?>">Volunteers</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/members.php" class="<?php echo $currentPage == "members.php" ? "active" : ""; ?>">Members</a></li>
                    <li><a href="<?php echo $baseUrl; ?>pages/partners.php" class="<?php echo $currentPage == "partners.php" ? "active" : ""; ?>">Partners</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- AI Inspired Multi-Colored Oceanic Wave Notification Bar -->
    <div class="wave-notification-bar">
        <div class="wave-content">
        <span>🌊 AI Youth Alliance is hosting an exciting workshop on Google Duplex 10 December 2024! <a href="https://forms.gle/XhBYmK5JPx2qByan6" target="_blank">Register here</a>! 🚀</span>
        </div>
    </div>
     
    <!-- Homepage Section  -->
    <?php include('homepage-content.php'); ?>
    
    <!-- Footer Section -->
    <?php include "includes/footer.php"; ?>

</body>
</html>
