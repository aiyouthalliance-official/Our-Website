<?php
if (isset($_POST['create_post'])) {
    $title = htmlspecialchars($_POST['title']);  // Sanitize title
    $content = htmlspecialchars($_POST['content']);  // Sanitize content to prevent XSS

    // Define the folder where posts are stored
    $forum_folder = '../data/forum/';

    // Check if the folder exists, if not, create it
    if (!is_dir($forum_folder)) {
        mkdir($forum_folder, 0777, true);  // Create folder if it doesn't exist
    }

    // Generate a unique file name for the post
    $post_filename = $forum_folder . uniqid() . '.html';

    // Format the content of the post
    $post_content = "<h1>$title</h1>\n" . $content;

    // Save the post to a file
    if (file_put_contents($post_filename, $post_content)) {
        echo json_encode(['status' => 'success', 'message' => 'Post created successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to create post.']);
    }
}
?>
