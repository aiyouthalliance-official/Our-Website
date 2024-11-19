<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Events</title>
</head>
<body>

<header>
    <div class="events-header">
        <h1>Our Events</h1>
        <p>Stay up to date with our latest events, workshops, and AI-related activities!</p>
    </div>
</header>

<main class="events-content">
    <?php
    $events_folder = 'data/events/';  // Folder where event HTML files will be stored
    $events = array_diff(scandir($events_folder), array('.', '..'));  // Get all files except '.' and '..'

    if (!empty($events)) {
        foreach ($events as $event_file) {
            // Only include HTML files
            if (pathinfo($event_file, PATHINFO_EXTENSION) == 'html') {
                echo '<div class="event-entry">';
                include($events_folder . $event_file);  // Include the event's HTML file
                echo '</div>';
            }
        }
    } else {
        echo '<p>No upcoming events at the moment. Check back later!</p>';
    }
    ?>
</main>

<?php include('footer.html'); ?>

</body>
</html>
