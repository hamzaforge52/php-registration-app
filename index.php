<?php

$pageTitle = "HamzaStore | Home";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $pageTitle; ?></title>

    <link rel="stylesheet" href="css/Style.css">

</head>

<body>

    <!-- ================= HEADER ================= -->

    <header>

        <div class="logo">
            <h2>HamzaStore</h2>
        </div>

        <nav>

            <ul>

                <li><a href="#">Home</a></li>

                <li><a href="#">Products</a></li>

                <li><a href="#">About</a></li>

                <li><a href="#">Contact</a></li>

            </ul>

        </nav>

    </header>



    <!-- ================= HERO SECTION ================= -->

    <section class="hero">

        <h1>Welcome to HamzaStore</h1>

        <p>Your One-Stop Online Shopping Store</p>
        <a href="auth/register.php" class="btn">Register Now</a>

        

    </section>



    <!-- ================= FEATURED PRODUCTS ================= -->

    <section class="products">

        <h2>Featured Products</h2>

        <div class="product-container">

            <div class="card">
                <h3>💻 Laptop</h3>
                <p>Powerful laptops for work and gaming.</p>
            </div>

            <div class="card">
                <h3>📱 Smartphone</h3>
                <p>Latest smartphones at affordable prices.</p>
            </div>

            <div class="card">
                <h3>🎧 Headphones</h3>
                <p>Enjoy crystal clear sound quality.</p>
            </div>

            <div class="card">
                <h3>⌚ Smart Watch</h3>
                <p>Stay connected and track your fitness.</p>
            </div>

        </div>

    </section>



    <!-- ================= ABOUT ================= -->

    <section class="about">

        <h2>About HamzaStore</h2>

        <p>

            HamzaStore is a demo e-commerce project built to learn
            HTML, CSS, JavaScript, PHP, and AWS Cloud services.

        </p>

    </section>



    <!-- ================= CONTACT ================= -->

    <section class="contact">

        <h2>Contact Us</h2>

        <p>Email: support@hamzastore.com</p>

    </section>



    <!-- ================= FOOTER ================= -->

    <footer>

        <p>© 2026 HamzaStore | Powered by AWS</p>

    </footer>



    <script src="js/script.js"></script>

</body>

</html>