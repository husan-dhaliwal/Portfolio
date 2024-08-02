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
            padding: 20px;
            text-align: center;
        }

        #header a {
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
            font-size: 2em;
        }

        /* Container styles */
        .container {
            width: 50%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-section {
            width: 100%;
            margin: 30px 0;
        }

        .form-section h2 {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-section form {
            width: 100%;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-section label {
            display: block;
            margin-bottom: 10px;
            font-size: 1.1em;
            width: 100%;
        }

        .form-section input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-section button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1.1em;
            cursor: pointer;
        }

        .form-section button:hover {
            background-color: #555;
        }

        /* Footer styles */
        footer.section-p1 {
            background: #FFFFFF;
            color: #fff;
            padding: 20px;
            text-align: center;
            height: 0%;
        }

        */
    </style>
</head>

<body>
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
        <h2>Become a Fan</h2>
    </section>
    <div class="container">
        <section class="form-section">
            <h2>Register</h2>
            <form action="register.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Register</button>
            </form>
        </section>
        <section class="form-section">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <label for="loginUsername">Username:</label>
                <input type="text" id="loginUsername" name="loginUsername" required>
                <label for="loginPassword">Password:</label>
                <input type="password" id="loginPassword" name="loginPassword" required>
                <button type="submit">Login</button>
            </form>
        </section>
    </div>
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/img/logo.png" alt="Logo">
            <h4>Contact</h4>
            <p><strong>Phone:</strong> +1 (123) 4567</p>
            <div class="follow">
                <h4>Follow Me</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    <i class="fa-brands fa-tiktok"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
        </div>
        <p>&copy; 2024 Husanpreet Kaur. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>