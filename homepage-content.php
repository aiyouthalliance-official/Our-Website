<?php
// Hero Section Variables
$hero_title = "Welcome to AI Youth Alliance";
$highlighted_word = "AI Youth Alliance";
$hero_subtitle = "At AI Youth Alliance, we empower the next generation of AI innovators and leaders. Join us to explore, learn, and contribute to the ever-evolving field of artificial intelligence.";
$cta_text = "Join Us Today";
$cta_link = "pages/join.php"; 
$background_color = "linear-gradient(90deg, #4CAF50 0%, #2196F3 100%)"; // Gradient background
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Youth Alliance</title>
    <style>
        /* Hero Section Styles */
        .hero {
            background: <?php echo $background_color; ?>;
            color: white;
            padding: 50px 20px;
            position: relative;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            text-align: center;
            z-index: 1;
        }

        .hero h1 {
            font-family: 'Arial', sans-serif;
            font-size: 48px;
            margin-bottom: 20px;
            animation: fadeInDown 1s;
        }

        .hero p {
            font-family: 'Georgia', serif;
            font-size: 20px;
            line-height: 1.8;
            margin-bottom: 30px;
            animation: fadeIn 1.5s;
        }

        .hero a {
            display: inline-block;
            background-color: #FFEB3B;
            color: #4CAF50;
            padding: 15px 30px;
            font-size: 20px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: transform 0.3s;
            animation: pulse 3s infinite;
            transform: translateY(0);
            text-transform: uppercase;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        /* Animations */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes fadeInDown {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        /* About Us Section Styles */
        #about-us {
            background-color: #f5f5f5;
            padding: 60px 0;
            opacity: 0;
            animation: fadeInUp 1.5s forwards;
        }
        
        .about-us-section .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-us-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: 600;
            color: #333;
        }

        .about-us-section p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 30px;
        }

        .about-us-image {
            width: 100%;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .about-us-image:hover {
            transform: scale(1.05);
        }

        .btn-primary {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>
            <?php echo $hero_title; ?>
            <span style="color: #FFEB3B;"><?php echo $highlighted_word; ?></span>
        </h1>
        <p>
            <?php echo $hero_subtitle; ?>
        </p>
        <a href="<?php echo $cta_link; ?>"><?php echo $cta_text; ?></a>
    </div>
</section>

<section id="about-us" class="section">
  <div class="section-content">
    <h2 class="section-title">🚀 Become Part of Our Growing Community of AI Innovators</h2>
    <p class="section-description">
      Join our mission to shape the future of AI and innovation. By becoming a part of <span class="highlight">AI Youth Alliance</span>, you'll gain access to exciting opportunities, learning resources, and a community of like-minded individuals. Together, we can push the boundaries of artificial intelligence and make a meaningful impact in the world.
    </p>

    <div class="highlight-box">
      <h3 class="highlight-title">🌟 Why Join Us?</h3>
      <ul class="benefits-list">
        <li>🎓 Access to exclusive AI resources and workshops</li>
        <li>🤝 Collaborate with global innovators on AI projects</li>
        <li>📈 Stay up-to-date with the latest AI trends and research</li>
        <li>💡 Contribute to real-world AI applications and solutions</li>
        <li>🌐 Build a professional network with industry leaders and peers</li>
      </ul>
    </div>

    <div class="highlight-box">
      <h3 class="highlight-title">💡 How Can You Contribute?</h3>
      <ol class="steps-list">
        <li>🛠️ Engage in hands-on projects</li>
        <li>📡 Participate in online workshops and webinars</li>
        <li>🤝 Collaborate with other members to solve AI challenges</li>
        <li>✍️ Share your knowledge through blog posts and discussions</li>
      </ol>
    </div>

    <p class="cta-text">Ready to make a difference? Take the first step towards becoming an AI innovator!</p>

    <a href="/pages/join.php" class="join-now-button">🎉 Join Now</a>
  </div>
</section>

<style>
  /* Section Styling */
  #about-us {
    padding: 60px 30px;
    background: linear-gradient(135deg, #f4f4f4, #e6f7ff);
    text-align: center;
    border-top: 5px solid #0056b3;
    border-bottom: 5px solid #0056b3;
    opacity: 0;
    animation: fadeIn 1.5s forwards;
  }

  /* Fade-in Animation */
  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }

  .section-content {
    max-width: 900px;
    margin: 0 auto;
    text-align: left;
    font-family: 'Arial', sans-serif;
  }

  /* Section Title */
  .section-title {
    font-size: 2.5em;
    color: #003366;
    margin-bottom: 20px;
    text-align: center;
    font-weight: bold;
  }

  /* Section Description */
  .section-description {
    font-size: 1.3em;
    color: #555;
    line-height: 1.8;
    margin-bottom: 30px;
  }

  .highlight {
    color: #0056b3;
    font-weight: bold;
  }

  /* Highlight Box */
  .highlight-box {
    background-color: #fff;
    border: 2px solid #0056b3;
    padding: 20px;
    margin: 20px 0;
    border-radius: 10px;
  }

  .highlight-title {
    font-size: 1.8em;
    color: #333;
    margin-bottom: 15px;
  }

  /* Lists */
  .benefits-list,
  .steps-list {
    margin: 15px 0;
    padding-left: 40px;
    font-size: 1.1em;
    color: #333;
  }

  .benefits-list li,
  .steps-list li {
    margin-bottom: 10px;
  }

  /* Call-to-Action Text */
  .cta-text {
    font-size: 1.4em;
    color: #0056b3;
    margin: 20px 0;
    text-align: center;
    font-weight: bold;
  }

  /* Button Styling */
  .join-now-button {
    display: inline-block;
    background-color: #0056b3;
    color: white;
    padding: 12px 25px;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
    border-radius: 8px;
    transition: background-color 0.3s ease, transform 0.2s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .join-now-button:hover {
    background-color: #004080;
    transform: translateY(-3px);
  }
</style>
