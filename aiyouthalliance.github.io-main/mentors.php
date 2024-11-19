<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Mentors</title>
</head>
<body>

<header>
    <div class="mentors-header">
        <h1>Our Mentors</h1>
        <p>Meet the experts who are guiding and mentoring the next generation of AI leaders!</p>
    </div>
</header>

<main class="mentors-content">
    <?php
    $mentors_folder = 'data/mentors/';
    $mentors = array_diff(scandir($mentors_folder), array('.', '..'));

    if (!empty($mentors)) {
        foreach ($mentors as $mentor_file) {
            // Only include HTML files
            if (pathinfo($mentor_file, PATHINFO_EXTENSION) == 'html') {
                echo '<div class="mentor-entry">';
                include($mentors_folder . $mentor_file);
                echo '</div>';
            }
        }
    } else {
        echo '<p>No mentors listed at the moment. Check back later!</p>';
    }
    ?>
</main>

<?php include('footer.html'); ?>

</body>
</html>
