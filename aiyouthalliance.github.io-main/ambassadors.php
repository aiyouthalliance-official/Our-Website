<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Ambassadors</title>
</head>
<body>

<header>
    <div class="ambassadors-header">
        <h1>Our Ambassadors</h1>
        <p>Meet our passionate ambassadors who are helping shape the future of AI and technology!</p>
    </div>
</header>

<main class="ambassadors-content">
    <?php
    $ambassadors_folder = 'data/ambassadors/';
    $ambassadors = array_diff(scandir($ambassadors_folder), array('.', '..'));

    if (!empty($ambassadors)) {
        foreach ($ambassadors as $ambassador_file) {
            // Only include HTML files
            if (pathinfo($ambassador_file, PATHINFO_EXTENSION) == 'html') {
                echo '<div class="ambassador-entry">';
                include($ambassadors_folder . $ambassador_file);
                echo '</div>';
            }
        }
    } else {
        echo '<p>No ambassadors listed at the moment. Check back later!</p>';
    }
    ?>
</main>

<?php include('footer.html'); ?>

</body>
</html>
