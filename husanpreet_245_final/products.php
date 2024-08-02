<?php
session_start();

// Hard-coded products data
function fetchProducts()
{
    return [
        [
            'name' => 'Classic green Shirt',
            'description' => 'A stylish and comfortable classic white shirt made from high-quality cotton. Perfect for casual and formal occasions.',
            'price' => '29.99',
            'image' => 'img/img/b10.jpg'
        ],
        [
            'name' => 'Tech books',
            'description' => 'A sleek and modern book ideal for tech enthusiasts. Features a durable cover and high-quality paper for all your notes.',
            'price' => '15.99',
            'image' => 'img/img/b19.jpg'
        ],
        [
            'name' => '2 layered shirt',
            'description' => 'Shirt with two layers. perfect for fall.',
            'price' => '24.99',
            'image' => 'img/img/f6.jpg'
        ],
        [
            'name' => 'Collared shirt',
            'description' => 'Premium quality shirt with multi colours.',
            'price' => '79.99',
            'image' => 'img/img/f1.jpg'
        ]
    ];
}

// Initialize shopping cart if not already initialized
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle adding products to cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_name'])) {
    $product_name = $_POST['product_name'];
    if (!in_array($product_name, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $product_name;
    }
}

// Handle removing products from cart
if (isset($_GET['remove'])) {
    $product_name = $_GET['remove'];
    if (($key = array_search($product_name, $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]);
    }
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
            /* background: #333; */
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
            font-size: 2em;
        }

        /* Product section styles */
        .section-p1 {
            padding: 50px 0;
            background: #f9f9f9;
        }

        .pro-container {
            display: flex;

            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        article {
            background: #fff;

            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        article h2 {
            margin-top: 0;
        }

        article img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        article form {
            margin-top: 10px;
        }

        /* Cart section styles */
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
            /* background: #333; */
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
        <h2>My Shop</h2>
    </section>
    <section id="product1" class="section-p1">
        <div class="pro-container">
            <?php
            $products = fetchProducts();

            if (empty($products)) {
                echo "<p>No products found.</p>";
            } else {
                foreach ($products as $product) {
                    echo "<article>";
                    echo "<h2>{$product['name']}</h2>";
                    echo "<p>{$product['description']}</p>";
                    echo "<p>Price: \${$product['price']}</p>";
                    if (!empty($product['image'])) {
                        echo "<img src='{$product['image']}' alt='Product Image'>";
                    }
                    echo "<form method='post' action='products.php'>";
                    echo "<input type='hidden' name='product_name' value='{$product['name']}'>";
                    echo "<button type='submit'>Add to Cart</button>";
                    echo "</form>";
                    echo "</article>";
                }
            }
            ?>
        </div>
    </section>
    <section class="cart-section">
        <h2>Shopping Cart</h2>
        <ul>
            <?php
            if (empty($_SESSION['cart'])) {
                echo "<p>Your cart is empty.</p>";
            } else {
                foreach ($_SESSION['cart'] as $cart_item) {
                    echo "<li>$cart_item <a href='products.php?remove=$cart_item'>Remove</a></li>";
                }
            }
            ?>
        </ul>
    </section>
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