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
    <title>Our Research</title>
</head>
<body>

<header>
    <div class="research-header">
        <h1>Our Research</h1>
        <p>Discover the latest research and findings from the AI Youth Alliance community. Our members are working on groundbreaking research in AI and related fields.</p>
    </div>
</header>

<main class="research-content">
    <?php
    $research_folder = 'data/research/';  // Folder where research HTML files will be stored
    
    // Check if the directory exists before scanning
    if (is_dir($research_folder)) {
        // Get all files in the folder, excluding '.' and '..'
        $research_files = array_diff(scandir($research_folder), array('.', '..'));

        // Check if the directory contains any files
        if (!empty($research_files)) {
            foreach ($research_files as $research_file) {
                // Only include HTML files
                if (pathinfo($research_file, PATHINFO_EXTENSION) == 'html') {
                    echo '<div class="research-entry">';
                    include($research_folder . $research_file);  // Include the HTML file of each research entry
                    echo '</div>';
                }
            }
        } else {
            echo '<p>No research content available at the moment. Check back later!</p>';
        }
    } else {
        echo '<p>Upcoming</p>';
    }
    ?>
</main>

<?php include('../includes/footer.php'); ?>

</body>
</html>
