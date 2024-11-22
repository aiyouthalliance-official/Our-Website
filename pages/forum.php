<?php
// Define the folder where posts are stored
$forum_folder = '../data/forum/';

// Check if the forum folder exists and is a directory
if (is_dir($forum_folder)) {
    // Display all posts
    $forum_posts = array_diff(scandir($forum_folder), array('.', '..'));
} else {
    // Handle the error gracefully if the directory doesn't exist
    $forum_posts = [];
    echo "<p>Error: Forum directory not found or inaccessible.</p>";
}

// Function to extract the title of the post from the content
function extractPostTitle($post_path) {
    $post_content = file_get_contents($post_path);
    preg_match('/<h1>(.*?)<\/h1>/', $post_content, $matches);
    return isset($matches[1]) ? $matches[1] : 'Untitled Post';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
</head>
<body>

<?php include('../includes/header.php'); ?>

<main>
    <!-- Link to the Create Post Page -->
    <section class="create-post-link">
        <a href="create-post.php">Create a New Post</a>
    </section>

    <!-- Display existing forum posts -->
    <section class="forum-posts">
        <?php
        if (!empty($forum_posts)) {
            foreach ($forum_posts as $post_file) {
                // Only include HTML files
                if (pathinfo($post_file, PATHINFO_EXTENSION) == 'html') {
                    $post_path = $forum_folder . $post_file;
                    $post_title = extractPostTitle($post_path);

                    echo '<div class="forum-post">';
                    echo "<h3><a href='forum.php?view_post=" . urlencode($post_file) . "'>" . htmlspecialchars($post_title) . "</a></h3>";
                    echo '</div>';
                }
            }
        } else {
            echo '<p>No posts available yet.</p>';
        }
        ?>
    </section>

    <!-- Display full post content when viewing a post -->
    <?php
    if (isset($_GET['view_post'])) {
        $post_file = basename($_GET['view_post']);  // Use basename() to prevent path traversal
        if (file_exists($forum_folder . $post_file)) {
            $post_content = file_get_contents($forum_folder . $post_file);
            echo '<section class="view-post">';
            // Display the content without htmlspecialchars to allow HTML tags to render
            echo $post_content;
            echo "<br><a href='forum.php'>Back to forum</a>";
            echo '</section>';
        } else {
            echo "<p>No post! So sad! Why waiting? Write your idea, wish, journey and whatever you want. Explore yourself. We are looking for you.</p>";
        }
    }
    ?>
</main>

<?php include('../includes/footer.php'); ?>

</body>
</html>
