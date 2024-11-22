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
    <title>Our Projects</title>
    <link rel="stylesheet" href="../assets/css/projects.css"> <!-- Link to your CSS file -->
</head>
<body>

<header>
    <div class="projects-header">
        <h1>Our Projects</h1>
        <p>Explore the exciting projects we're working on in the AI Youth Alliance. Our members are engaged in cutting-edge AI research, development, and real-world applications.</p>
    </div>
</header>

<main class="projects-content">
    <?php
    $projects_folder = 'data/projects/';  // Folder where project HTML files will be stored
    if (is_dir($projects_folder)) {
        $projects = array_diff(scandir($projects_folder), array('.', '..'));  // Get all files except '.' and '..'

        if (!empty($projects)) {
            foreach ($projects as $project_file) {
                // Only include HTML files
                if (pathinfo($project_file, PATHINFO_EXTENSION) == 'html') {
                    echo '<div class="project-entry">';
                    include($projects_folder . $project_file);  // Include the project HTML file
                    echo '</div>';
                }
            }
        } else {
            echo '<p>No projects available at the moment. Check back later!</p>';
        }
    } else {
        echo '<p>Upcoming.</p>';
    }
    ?>
</main>

<?php include('../includes/footer.php'); ?>

</body>
</html>
