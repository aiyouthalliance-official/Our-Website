<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Volunteers</title>
</head>
<body>

<header>
    <div class="partners-header">
        <h1>Our Partners</h1>
        <p>We are proud to collaborate with these amazing organizations, working together to advance the future of AI and technology.</p>
    </div>
</header>

<main class="partners-content">
    <?php
    $partners_folder = 'data/partners/';  // Folder where partners HTML files will be stored
    $partners_files = array_diff(scandir($partners_folder), array('.', '..'));  // Get all files except '.' and '..'

    if (!empty($partners_files)) {
        foreach ($partners_files as $partners_file) {
            // Only include HTML files
            if (pathinfo($partners_file, PATHINFO_EXTENSION) == 'html') {
                echo '<div class="partner-entry">';
                include($partners_folder . $partners_file);  // Include the partner HTML file
                echo '</div>';
            }
        }
    } else {
        echo '<p>No partners content available at the moment. Check back later!</p>';
    }
    ?>
</main>

<?php include('footer.html'); ?>

</body>
</html>
