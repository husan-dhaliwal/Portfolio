<?php
session_start();
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']) {
    header('Location: admin_dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
        }

        /* Header styles */
        #header {
            color: #fff;
            padding: 20px;
        }

        #header a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
        }

        #menu {
            list-style: none;
            padding: 0;
        }

        #menu li {
            display: inline;
            margin-right: 10px;
        }

        #menu li a {
            color: #fff;
            text-decoration: none;
        }

        #mobile {
            display: none;
        }

        /* Shop header styles */
        #shop-header {
            text-align: center;
            padding: 50px 0;
        }

        #shop-header h2 {
            margin: 0;
            font-size: 1.5em;
            /* Reduced the heading size */
        }

        /* Product section styles */
        .section-p1 {
            padding: 50px 0;
            background: #f9f9f9;
        }

        .pro-container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            /* Place containers vertically */
            align-items: center;
            gap: 20px;
        }

        article {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 600px;
            /* Increased the width */
            text-align: center;
        }

        article h2 {
            margin-top: 0;
        }

        .cart-section {
            padding: 50px;
            background: #e0e0e0;
            text-align: center;
        }

        .cart-section ul {
            list-style: none;
            padding: 0;
        }

        .cart-section li {
            background: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-section li a {
            color: #f00;
            text-decoration: none;
        }

        /* Footer styles */
        footer.section-p1 {
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        footer .col {
            text-align: left;
        }

        footer .col h4,
        footer .col p {
            margin: 10px 0;
        }

        footer .icon {
            display: flex;
            gap: 10px;
        }

        footer .icon i {
            font-size: 1.5em;
            color: #fff;
        }

        footer p {
            margin: 0;
        }

        .news-section {
            display: flex;
            flex-direction: column;

            align-items: center;
            gap: 20px;
        }

        .news-section article {
            width: 100%;
            max-width: 800px;

        }
    </style>
    <header id="header">
        <a href="#"><img src="img/img/logo.png" alt="logo"></a>
        <ul id="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="resume.html">Resume</a></li>
            <li><a href="projects.html">Past projects</a></li>
            <li><a href="products.php">my products</a></li>
            <li><a href="fan.php">become a fan</a></li>
            <li><a href="admin.html">News</a></li>
            <li><a href="admin_login.php">admin</a></li>
            <li id="lg-bag"><a href="Cart.html" id="icon"><i class="fa-solid fa-bag-shopping"></i></a></li>
            <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
        </ul>
        <div id="mobile">
            <a href="Cart.html" id="icon"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
    </header>
    <section id="shop-header">
        <h2>admin login </h2>
    </section>
    <section id="product1" class="section-p1">
        <div class="container">
            <?php
            if (isset($_SESSION['error'])) {
                echo '<p>' . htmlspecialchars($_SESSION['error']) . '</p>';
                unset($_SESSION['error']);
            }
            ?>
            <form action="admin_login_process.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </form>
        </div>
        </div>
    </section>
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/img/logo.png" alt="no image found">
            <h4>Contact</h4>

            <p><strong>Phone : </strong> +1 (123) 4567</p>

            <div class="follow">
                <h4>Folow me</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    <i class="fa-brands fa-tiktok"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
        </div>


        (C) Copyright 2022
    </footer>
</body>

</html>