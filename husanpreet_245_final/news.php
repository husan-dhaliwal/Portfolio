<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>News</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #84a9ac;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: 300;
        }

        nav {
            background-color: #3b6978;
            padding: 10px 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #204051;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .news-section {
            margin: 30px 0;
        }

        .news-section article {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .news-section h2 {
            color: #333;
            font-size: 2em;
            margin-bottom: 10px;
        }

        .news-section p {
            font-size: 1.2em;
            color: #555;
            line-height: 1.6em;
        }

        .news-section img {
            max-width: 100%;
            border-radius: 5px;
            margin-top: 10px;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #84a9ac;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <header>
        <h1>News</h1>
        <p>Recent photos or blog posts.</p>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../resume/resume.php">Resume</a></li>
                <li><a href="../past_projects/past_projects.php">Past Projects</a></li>
                <li><a href="../products/products.php">My Products</a></li>
                <li><a href="../fan/fan.php">Become a Fan</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="../admin/admin.php">Admin</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <section class="news-section">
            <article>
                <h2>Exciting New Certification Achieved!</h2>
                <p>We are thrilled to announce that Husanpreet Kaur has achieved the Certified Information Systems
                    Security Professional (CISSP) certification. This certification highlights her advanced skills in
                    cybersecurity and is a significant milestone in her professional development.</p>
                <img src="../images/cissp.jpg" alt="CISSP Certification">
            </article>

            <article>
                <h2>New Job Opening: IT Support Specialist</h2>
                <p>Our team is looking for a skilled IT Support Specialist to join us. The ideal candidate will have
                    experience in troubleshooting hardware and software issues and providing exceptional customer
                    service. Interested candidates can apply by visiting our careers page.</p>
                <img src="../images/it_support.jpg" alt="IT Support Specialist">
            </article>

            <article>
                <h2>Tech Workshop: Advanced Coding Techniques</h2>
                <p>Join us for a tech workshop focusing on advanced coding techniques. This workshop will cover the
                    latest trends and tools in software development and provide hands-on experience with real-world
                    applications.</p>
                <img src="../images/tech_workshop.jpg" alt="Tech Workshop">
            </article>

            <article>
                <h2>Announcing New Microsoft Certification: Azure Fundamentals</h2>
                <p>Husanpreet Kaur has successfully completed the Microsoft Certified: Azure Fundamentals certification.
                    This certification validates her foundational knowledge of Microsoft Azure and cloud services,
                    further enhancing her skills in cloud computing.</p>
                <img src="../images/azure_fundamentals.jpg" alt="Azure Fundamentals">
            </article>

            <article>
                <h2>Latest Innovations in AI and Machine Learning</h2>
                <p>Stay updated with the latest innovations in AI and Machine Learning. We explore recent advancements
                    and how they are shaping the future of technology. Read more about the exciting developments in this
                    ever-evolving field.</p>
                <img src="../images/ai_innovations.jpg" alt="AI Innovations">
            </article>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Manas Kalra. All Rights Reserved.</p>
    </footer>
</body>

</html>