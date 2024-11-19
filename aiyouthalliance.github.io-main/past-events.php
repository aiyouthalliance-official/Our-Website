<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Past Events</title>
</head>
<body>

<header>
    <div class="events-header">
        <h1>Past Events</h1>
        <p>Here you'll find a list of our past events, workshops, and sessions.</p>
    </div>
</header>

<main class="events-content">
    <?php
    $events_folder = 'data/events/past-events/';  // Folder where past events HTML files will be stored
    
    // Check if the directory exists
    if (is_dir($events_folder)) {
        // Get all files except '.' and '..'
        $events_files = array_diff(scandir($events_folder), array('.', '..'));
        
        // Check if there are any files
        if (!empty($events_files)) {
            foreach ($events_files as $event_file) {
                // Only include HTML files
                if (pathinfo($event_file, PATHINFO_EXTENSION) == 'html') {
                    echo '<div class="event-entry">';
                    include($events_folder . $event_file);  // Include the event file
                    echo '</div>';
                }
            }
        } else {
            echo '<p>No past events available at the moment. Check back later!</p>';
        }
    } else {
        echo '<p>The events directory does not exist. Please check the directory structure.</p>';
    }
    ?>
</main>

<?php include('footer.html'); ?>

</body>
</html>
