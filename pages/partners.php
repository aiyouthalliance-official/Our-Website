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
    <title>Our Partners</title>
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

    // Check if the directory exists
    if (is_dir($partners_folder)) {
        // Get all files in the folder, excluding '.' and '..'
        $partners_files = array_diff(scandir($partners_folder), array('.', '..'));

        // Check if there are any files in the folder
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
    } else {
        // If the folder doesn't exist
        echo '<p>We are looking for our valuable Partners.</p>';
    }
    ?>
</main>

<?php include('../includes/footer.php'); ?>

</body>
</html>
