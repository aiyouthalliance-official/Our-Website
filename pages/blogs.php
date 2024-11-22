<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('../includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Blogs</title>
    <link rel="stylesheet" href="../assets/css/blog.css"> <!-- Link to CSS file -->
</head>
<body>

<header>
    <div class="blog-header">
        <h1>Our Blogs</h1>
        <p>Welcome to our blog section! Here you'll find articles, updates, and insights about AI, technology, and much more. Stay informed and inspired!</p>
    </div>
</header>

<main class="blog-content">
    <?php
    $blog_folder = '../data/blogs/'; // Folder that contains your blog posts (HTML files)
    $blogs = array_diff(scandir($blog_folder), array('.', '..')); // Exclude '.' and '..' directories

    if (!empty($blogs)) {
        foreach ($blogs as $blog_file) {
            // Only include HTML files
            if (pathinfo($blog_file, PATHINFO_EXTENSION) == 'html') {
                echo '<div class="blog-entry">';
                include($blog_folder . $blog_file); // Dynamically include each blog file
                echo '</div>';
            }
        }
    } else {
        echo '<p>No blogs available at the moment. Check back later!</p>';
    }
    ?>
</main>

<section class="blog-subscription">
    <h2>Subscribe to Our Blog</h2>
    <p>Get the latest updates and insights directly to your inbox.</p>
    <form action="subscribe.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
    </form>
</section>

<?php
// Display subscription status messages
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'success') {
        echo '<p>Thank you for subscribing! You will receive blog updates soon.</p>';
    } elseif ($_GET['status'] == 'error') {
        echo '<p>There was an issue with your subscription. Please try again.</p>';
    }
}
?>

<?php include('../includes/footer.php'); ?>

</body>
</html>











