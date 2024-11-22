<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Members</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
        }

        .members-header {
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, #f7f70a, #f507d5);
            color: white;
        }

        .members-header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .members-header p {
            font-size: 1.2em;
            margin-top: 10px;
        }

        .members-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .member-entry {
            background-color: #e6ffed; /* Light green background */
            border: 1px solid #85c78f; /* Green border */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 15px;
            padding: 20px;
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .member-entry:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        .member-entry img {
            max-width: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 2px solid #85c78f; /* Green border around image */
        }

        .member-entry h3 {
            font-size: 1.5em;
            color: #2f8c3e; /* Dark green text */
            margin-bottom: 10px;
        }

        .member-entry p {
            font-size: 1em;
            color: #3c3c3c; /* Neutral dark text */
        }

        @media (max-width: 600px) {
            .member-entry {
                width: 100%;
                margin: 10px;
            }

            .members-header h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="members-header">
        <h1>Our Members</h1>
        <p>Meet the passionate individuals behind AI Youth Alliance. Here, you can explore our members' profiles, skills, and contributions.</p>
    </div>
</header>

<main class="members-content">
    <?php
    $members_folder = '../data/members/';  // Folder where member HTML files are stored
    if (is_dir($members_folder)) {
        $members = array_diff(scandir($members_folder), array('.', '..'));  // Exclude '.' and '..'
        if (!empty($members)) {
            foreach ($members as $member_file) {
                if (pathinfo($member_file, PATHINFO_EXTENSION) == 'html') {
                    echo '<div class="member-entry">';
                    include($members_folder . $member_file);  // Include the member's profile HTML file
                    echo '</div>';
                }
            }
        } else {
            echo '<p>No member profiles available at the moment. Check back later!</p>';
        }
    } else {
        echo '<p>Information Updating.</p>';
    }
    ?>
</main>

<?php include('../includes/footer.php'); ?>
</body>
</html>
