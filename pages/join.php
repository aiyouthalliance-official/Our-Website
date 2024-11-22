<?php include('../includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join AI Youth Alliance</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .join-header h1 {
            margin: 0;
            font-size: 36px;
        }

        .join-intro, .role-section {
            padding: 40px 20px;
            margin: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .join-intro h2, .role-section h2 {
            font-size: 28px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .join-intro ul {
            font-size: 16px;
            color: #555;
            list-style-type: none;
            padding: 0;
        }

        .join-intro ul li {
            margin-bottom: 10px;
        }

        .role-entry {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .role-entry h3 {
            font-size: 24px;
            color: #333;
        }

        .role-entry p {
            font-size: 16px;
            color: #555;
            margin: 10px 0;
        }

        .cta-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }

        .role-section:hover, .join-intro:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<header>
    <div class="join-header">
        <h1>🌟 Join AI Youth Alliance 🌟</h1>
        <p>🚀 Be a part of the next wave of AI innovators. Apply for internships, research roles, full-time positions, volunteer ambassadorships, and more!</p>
    </div>
</header>

<main class="join-content">

    <!-- Introduction Section -->
    <section class="join-intro">
        <h2>🤔 Why Join AI Youth Alliance?</h2>
        <p>🌍 The AI Youth Alliance is a dynamic and forward-thinking global community dedicated to empowering the next generation of leaders in artificial intelligence and technology. Our mission is to cultivate young talent by providing opportunities for learning, collaboration, and innovation in the field of AI.</p>
        
        <h3>✨ Benefits of Joining:</h3>
        <ul>
            <li>🌟 <strong>Make a global impact:</strong> Contribute to meaningful projects that shape the future of AI and technology.</li>
            <li>🤝 <strong>Collaborate with passionate peers:</strong> Work alongside like-minded individuals in a collaborative and inclusive environment.</li>
            <li>💪 <strong>Develop your skills:</strong> Gain experience, enhance your leadership abilities, and learn new skills.</li>
            <li>👥 <strong>Be a part of a growing community:</strong> Join a network of AI enthusiasts, thought leaders, and professionals.</li>
            <li>💡 <strong>Innovate and inspire:</strong> Engage in creative problem-solving and take the lead on initiatives.</li>
            <li>🏠 <strong>Flexible and remote:</strong> Enjoy the flexibility of working remotely in a supportive team.</li>
            <li>📈 <strong>Advance your career:</strong> Build your portfolio, gain hands-on experience, and take on leadership roles.</li>
        </ul>
        <p>🌟 By joining us, you’re not just filling a role—you’re becoming part of a movement that’s driving the future of AI and technology.</p>
    </section>

    <!-- Requirements Section -->
    <section class="join-intro">
        <h2>📋 Requirements</h2>
        <ul>
            <li>🧑‍🎓 16-20 years old</li>
            <li>🤖 Genuine interest in AI/tech</li>
            <li>📘 Commitment to learning and development</li>
            <li>🗣️ Active engagement in community activities</li>
            <li>🙏 Open and respectful interaction</li>
            <li>⏰ Regular time dedication to community work</li>
            <li>👨‍💻 Willingness to work with peers on projects</li>
            <li>💻 Basic AI knowledge and access to a computer/mobile/tablet</li>
            <li>📱 Must have a Discord account</li>
            <li>⚖️ Follow community rules and conduct</li>
        </ul>
        <p><strong>⏳ Duration:</strong> 3 months commitment.</p>
        <p><strong>💵 Compensation:</strong> This is an unpaid position.</p>
    </section>

    <!-- Dynamic Roles Section -->
    <?php
    $role_folders = [
        'Ambassadors' => 'Ambassadors',
        'Externships' => 'Externships',
        'Full-Time' => 'Full-Time',
        'Internships' => 'Internships',
        'Research' => 'Research',
        'Volunteer' => 'Volunteer',
        'Other-Opportunities' => 'Other Opportunities'
    ];

    foreach ($role_folders as $folder_key => $folder_name) {
        $folder_path = '../data/join/' . $folder_key; 
        echo '<section class="role-section">';
        echo '<h2>🔍 ' . $folder_name . '</h2>';

        if (is_dir($folder_path)) {
            $role_files = array_diff(scandir($folder_path), array('.', '..')); 

            if (!empty($role_files)) {
                foreach ($role_files as $role_file) {
                    if (pathinfo($role_file, PATHINFO_EXTENSION) == 'html') {
                        $role_content = file_get_contents($folder_path . '/' . $role_file); 
                        echo '<div class="role-entry">';
                        echo $role_content; 
                        echo '</div>';
                    }
                }
            } else {
                echo '<p>No roles available at the moment. Check back later! 🕒</p>';
            }
        } else {
            echo '<p>Folder not found or not readable: ' . $folder_name . ' ❌</p>';
        }

        echo '</section>';
    }
    ?>

</main>

<?php include('../includes/footer.php'); ?>

</body>
</html>
