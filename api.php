<?php
// Define the directory for saving posts
$forum_folder = 'data/forum/';

// Function to sanitize HTML content for security (prevent XSS)
function sanitize_html($content) {
    return htmlspecialchars($content, ENT_QUOTES, 'UTF-8');
}

// Endpoint to create a new post (or save formatted text)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_post'])) {
    $title = sanitize_html($_POST['title']);  // Sanitize title
    $content = $_POST['content'];             // Do not sanitize content since it's HTML

    // Create a unique filename for the post
    $post_filename = $forum_folder . uniqid() . '.html';

    // Save the HTML content into the post file
    file_put_contents($post_filename, "<h1>$title</h1>$content");

    // Return a success response
    echo json_encode(['status' => 'success', 'message' => 'Post created successfully!', 'file' => $post_filename]);
    exit;
}

// Endpoint to retrieve a specific post (view content)
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['view_post'])) {
    $post_file = $_GET['view_post'];

    // Check if the file exists
    if (file_exists($forum_folder . $post_file)) {
        $post_content = file_get_contents($forum_folder . $post_file);

        // Return the content as a response
        echo json_encode(['status' => 'success', 'content' => $post_content]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Post not found']);
    }
    exit;
}
?>
