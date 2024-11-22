<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Events</title>
    <style>
        .no-events-message {
            background-color: #f44336; /* Red background */
            color: white;
            padding: 20px;
            font-size: 1.2em;
            text-align: center;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
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
    // Define both folders
    $upcoming_folder = '../data/events/upcoming_events'; 
    $past_folder = '../data/events/past_events'; 

    // Check if the folders exist and are readable
    $folders = [$upcoming_folder, $past_folder];

    foreach ($folders as $folder) {
        if (is_dir($folder)) {
            $events = array_diff(scandir($folder), array('.', '..'));  // Get all files except '.' and '..'

            if (!empty($events)) {
                foreach ($events as $event_file) {
                    // Only include HTML files
                    if (pathinfo($event_file, PATHINFO_EXTENSION) == 'html') {
                        // Get event content and extract title
                        $event_content = file_get_contents($folder . '/' . $event_file);
                        preg_match('/<h1>(.*?)<\/h1>/', $event_content, $matches);
                        $event_title = isset($matches[1]) ? $matches[1] : 'Untitled Event';

                        // Display the event title and content
                        echo '<div class="event-entry">';
                        echo '<h2>' . htmlspecialchars($event_title) . '</h2>';
                        echo '<div class="event-content">' . $event_content . '</div>';
                        echo '</div>';
                    }
                }
            } else {
                // Add colorful message for no events
                if ($folder === $past_folder) {
                    echo '<div class="no-events-message">No Past Events at the moment.</div>';
                } else {
                    echo '<p>No upcoming events at the moment. Check back later!</p>';
                }
            }
        } else {
            echo '<p>Error: The ' . basename($folder) . ' Just Wait. Something Special is cooking.</p>';
        }
    }
    ?>
</main>

<?php include('../includes/footer.php'); ?>

</body>
</html>
