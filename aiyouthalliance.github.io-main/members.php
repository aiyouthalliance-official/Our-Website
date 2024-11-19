<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Members</title>
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
    $members_folder = 'data/members/';  // Folder where member HTML files are stored
    $members = array_diff(scandir($members_folder), array('.', '..'));  // Get all files except '.' and '..'

    if (!empty($members)) {
        foreach ($members as $member_file) {
            // Only include HTML files
            if (pathinfo($member_file, PATHINFO_EXTENSION) == 'html') {
                echo '<div class="member-entry">';
                include($members_folder . $member_file);  // Include the member's profile HTML file
                echo '</div>';
            }
        }
    } else {
        echo '<p>No member profiles available at the moment. Check back later!</p>';
    }
    ?>
</main>

<?php include('footer.html'); ?>

</body>
</html>
