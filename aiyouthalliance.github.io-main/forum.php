<?php
// Define the folder where posts are stored
$forum_folder = 'data/forum/';

// Display all posts
$forum_posts = array_diff(scandir($forum_folder), array('.', '..'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
</head>
<body>

<?php include('header.php'); ?> <!-- Include the header -->

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
                    // Display the title of each post as a link
                    $post_content = file_get_contents($forum_folder . $post_file);
                    preg_match('/<h1>(.*?)<\/h1>/', $post_content, $matches);
                    $post_title = $matches[1] ?? 'Untitled Post';

                    echo '<div class="forum-post">';
                    echo "<h3><a href='forum.php?view_post=" . urlencode($post_file) . "'>$post_title</a></h3>";
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
        $post_file = $_GET['view_post'];
        if (file_exists($forum_folder . $post_file)) {
            $post_content = file_get_contents($forum_folder . $post_file);
            echo '<section class="view-post">';
            echo $post_content;
            echo "<br><a href='forum.php'>Back to forum</a>";
            echo '</section>';
        } else {
            echo "<p>Post not found.</p>";
        }
    }
    ?>
</main>

<?php include('footer.html'); ?> <!-- Include the footer -->

</body>
</html>
