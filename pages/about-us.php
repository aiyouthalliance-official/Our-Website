<?php include('../includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - AI Youth Alliance</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc; /* Light grayish-blue background */
            color: #333;
        }

        header {
            background-color: #007bff; /* Blue background */
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        /* Main about us section */
        .about-us {
            padding: 60px 20px;
            text-align: center;
            background-color: #fff;
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
            margin: 20px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .about-us h1 {
            font-size: 40px;
            color: #007bff; /* Blue color for header */
            margin-bottom: 30px;
        }

        .about-us p {
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 20px;
            color: #555; /* Dark gray text for better readability */
        }

        /* Footer styles */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

<section id="about-us" class="about-section">
  <div class="wave-container">
    <svg class="wave" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,64L120,80C240,96,480,128,720,144C960,160,1200,160,1200,160L1200,0L960,0C720,0,480,0,240,0L0,0Z" fill="#0056b3" />
    </svg>
  </div>
  <div class="section-content">
    <h1 class="section-title">🌍 About AI Youth Alliance</h1>
    <p class="section-intro">
      AI Youth Alliance is a global community of young minds passionate about artificial intelligence and its transformative power. 
      Our mission is to empower youth to explore, learn, and innovate in the field of AI, providing them with the tools, resources, and 
      network needed to thrive in the world of technology.
    </p>

    <div class="highlight-box">
      <h2>Our Story</h2>
      <p>
        Founded by <span class="founder-highlight">Niloy Deb</span>, AI Youth Alliance began as a vision to create a space where young individuals 
        could connect and develop skills in AI. Today, the alliance has grown into a vibrant community of aspiring AI enthusiasts 
        and innovators, fostering a dynamic and inclusive environment.
      </p>
    </div>

    <div class="content-box">
      <h2>🌟 Our Mission</h2>
      <p>
        We aim to inspire, educate, and empower young minds to become pioneers in AI. By democratizing access to AI education and opportunities, 
        we ensure that individuals from diverse backgrounds contribute to the advancement of AI technology.
      </p>
    </div>

    <div class="content-box">
      <h2>🌌 Our Vision</h2>
      <p>
        Envisioning a future where AI is responsibly developed, we empower young leaders to transform AI into a tool that enhances human experiences, 
        solves global challenges, and operates ethically. Our community is built on inclusivity and innovation.
      </p>
    </div>

    <div class="card-container">
      <div class="info-card">
        <h3>🎓 Educational Programs</h3>
        <p>We offer workshops, courses, webinars, and boot camps to help members acquire essential AI skills.</p>
      </div>
      <div class="info-card">
        <h3>🤝 Mentorship and Guidance</h3>
        <p>Connect with experienced AI professionals and industry leaders for mentorship and career advice.</p>
      </div>
      <div class="info-card">
        <h3>💡 Collaborative Projects</h3>
        <p>Participate in real-world AI projects that address critical challenges and drive innovation.</p>
      </div>
    </div>

    <div class="impact-section">
      <h2>🚀 Our Impact</h2>
      <p>
        Since our founding, we have empowered countless young individuals globally, enabling them to excel in academia, research, and industry. 
        Our members lead AI initiatives, launch successful careers, and tackle pressing challenges using AI.
      </p>
    </div>

    <div class="cta-section">
      <p>Join our vibrant community and be part of the transformation.</p>
      <a href="join.php" class="join-now-button">🌟 Join Now</a>
    </div>
  </div>
</section>

<style>
  /* General Styling */
  .about-section {
    font-family: 'Arial', sans-serif;
    color: #333;
    background: linear-gradient(135deg, #e6f7ff, #f4f4f4);
    position: relative;
    padding: 60px 20px;
    overflow: hidden;
  }

  .wave-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 150px;
    z-index: 1;
  }

  .wave {
    position: relative;
    width: 100%;
    height: 100%;
    z-index: 2;
  }

  .section-content {
    max-width: 1000px;
    margin: 0 auto;
    text-align: center;
    position: relative;
    z-index: 3;
  }

  .section-title {
    font-size: 3em;
    color: #0056b3;
    margin-bottom: 20px;
    animation: fadeIn 1.5s ease-in-out;
  }

  .section-intro {
    font-size: 1.5em;
    line-height: 1.8;
    color: #555;
    margin-bottom: 40px;
    animation: fadeIn 2s ease-in-out;
  }

  .highlight-box, .content-box {
    background: #fff;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    animation: slideUp 1s ease-in-out;
  }

  .highlight-box h2, .content-box h2 {
    font-size: 2em;
    color: #333;
    margin-bottom: 10px;
  }

  .founder-highlight {
    color: #0056b3;
    font-weight: bold;
  }

  .card-container {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin: 40px 0;
    animation: fadeIn 2s ease-in-out;
  }

  .info-card {
    flex: 1;
    background: linear-gradient(145deg, #e0e0e0, #ffffff);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  .info-card h3 {
    font-size: 1.5em;
    color: #0056b3;
    margin-bottom: 10px;
  }

  .cta-section {
    margin-top: 40px;
    animation: bounce 2s infinite;
  }

  .join-now-button {
    background-color: #0056b3;
    color: #fff;
    padding: 15px 30px;
    font-size: 1.2em;
    border-radius: 30px;
    text-decoration: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: background 0.3s, transform 0.2s;
  }

  .join-now-button:hover {
    background-color: #004080;
    transform: translateY(-5px);
  }

  /* Animations */
  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }

  @keyframes slideUp {
    0% {
      transform: translateY(20px);
      opacity: 0;
    }
    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }

  @keyframes bounce {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-10px);
    }
  }
</style>


<?php include('../includes/footer.php'); ?>

</body>
</html>
