<?php include('../includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <style>
        .editor {
            width: 100%;
            height: 300px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            overflow: auto;
        }
        button {
            margin: 5px;
        }
    </style>
</head>
<body>

<h1>Create a New Post</h1>

<!-- Title input -->
<input type="text" id="postTitle" placeholder="Enter post title" style="width: 100%; padding: 10px; margin-bottom: 10px;">

<!-- Toolbar for formatting options -->
<div class="toolbar">
    <button onclick="document.execCommand('bold')"><b>B</b></button>
    <button onclick="document.execCommand('italic')"><i>I</i></button>
    <button onclick="document.execCommand('underline')"><u>U</u></button>
    <button onclick="document.execCommand('insertOrderedList')">OL</button>
    <button onclick="document.execCommand('insertUnorderedList')">UL</button>
    <button onclick="document.execCommand('justifyLeft')">Left</button>
    <button onclick="document.execCommand('justifyCenter')">Center</button>
    <button onclick="document.execCommand('justifyRight')">Right</button>
    <button onclick="document.execCommand('formatBlock', false, 'h1')">H1</button>
    <button onclick="document.execCommand('formatBlock', false, 'h2')">H2</button>
    <button onclick="document.execCommand('createLink', false, prompt('Enter URL:'))">Link</button>
</div>

<!-- Editable div where users will create their posts -->
<div class="editor" contenteditable="true" id="editor" placeholder="Write your post here..."></div>

<!-- Submit button -->
<button onclick="submitPost()">Submit Post</button>

<!-- Script to handle submission to the API -->
<script>
    function submitPost() {
        const title = document.getElementById('postTitle').value;
        const content = document.getElementById('editor').innerHTML;

        if (title && content) {
            // Create a FormData object
            const formData = new FormData();
            formData.append('title', title);
            formData.append('create_post', true);
            formData.append('content', content);

            // Send the request to the PHP API to create the post
            fetch('api.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert(data.message); // Notify success
                    window.location.href = 'forum.php'; // Redirect to forum page
                } else {
                    alert(data.message); // Show error message
                }
            })
            .catch(error => alert('Error: ' + error));
        } else {
            alert('Title and content are required!');
        }
    }
</script>

<?php include('../includes/footer.php'); ?>

</body>
</html>
