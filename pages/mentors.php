<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Mentors</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        /* Main content styles */
        .mentors-content {
            padding: 40px;
            background-color: #fff;
            border-radius: 8px;
            margin: 20px auto;
            max-width: 900px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .mentor-entry {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
        }

        .mentor-entry img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
        }

        .mentor-info h3 {
            font-size: 22px;
            color: #007bff;
        }

        .mentor-info p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <h1>Our Mentors</h1>
    <p>Meet the experts who are guiding and mentoring the next generation of AI leaders!</p>
</header>

<main class="mentors-content">
    <?php
    // Define the path to the mentors' data
    $mentors_folder = '../data/mentors/';
    $mentors = array_diff(scandir($mentors_folder), array('.', '..')); // Get all files except '.' and '..'

    if (!empty($mentors)) {
        foreach ($mentors as $mentor_file) {
            // Only include HTML files
            if (pathinfo($mentor_file, PATHINFO_EXTENSION) == 'html') {
                echo '<div class="mentor-entry">';
                // Include each mentor's profile HTML file
                include($mentors_folder . $mentor_file);
                echo '</div>';
            }
        }
    } else {
        echo '<p>Recruiting. Check back later!</p>';
    }
    ?>
</main>

<?php include('../includes/footer.php'); ?>

</body>
</html>
