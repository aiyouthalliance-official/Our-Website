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
    <title>Free Classes</title>
</head>
<body>

<header>
    <div class="free-classes-header">
        <h1>Our Free Classes</h1>
        <p>Explore our free classes and workshops to enhance your knowledge in AI, technology, and more!</p>
    </div>
</header>

<main class="free-classes-content">
    <?php
    $free_classes_folder = 'data/free-classes/'; // Folder where free classes HTML files are stored
    
    // Check if the directory exists before scanning
    if (is_dir($free_classes_folder)) {
        // Get all files in the folder, excluding '.' and '..'
        $free_classes = array_diff(scandir($free_classes_folder), array('.', '..'));

        // Check if the directory contains any files
        if (!empty($free_classes)) {
            foreach ($free_classes as $class_file) {
                // Only include HTML files
                if (pathinfo($class_file, PATHINFO_EXTENSION) == 'html') {
                    echo '<div class="class-entry">';
                    include($free_classes_folder . $class_file);  // Include the HTML file of each class
                    echo '</div>';
                }
            }
        } else {
            echo '<p>No free classes available at the moment. Check back later!</p>';
        }
    } else {
        echo '<p>Upcoming.</p>';
    }
    ?>
</main>

<?php include('../includes/footer.php'); ?>

</body>
</html>
