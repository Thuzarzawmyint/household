<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} 
else {
?>
<!DOCTYPE html>
<html>
<head>
           <meta charset = 'utf-8'>
          <title>WEAPONS</title>
         <link rel="stylesheet" type="text/css" href="Order.css"/>
         <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #f8f8f8;
            }
    
            .header-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #ffffff;
    z-index: 2;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
    padding: 20px;
    border-radius: 10px; /* Optional for rounded corners */
}

.welcomeheader {
    font-size: 3em;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

.proheader {
    font-size: 1.5em;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}


        .header-container {
            position: relative;
            width: 100%;
        }

        .header-image {
            width: 100%;
            height: auto; /* Maintain aspect ratio */
        }
    
            
        /* Navigation */
        nav {
            position: absolute;
            top: 0;
            width: 100%;
            background: linear-gradient(to right, #2f4f4f, #3e6b5b); /* Dark green and brown gradient */
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            z-index: 1;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
    
        .nav-link {
            color: #ffffff; /* White text */
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
            position: relative;
            white-space: nowrap;
        }
    
        .nav-link:hover {
            background-color: #f08080; /* Darker Pink on hover */
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    
        .nav-link.active {
            background-color: #d2b48c; /* Light Brown when active */
            font-weight: bold;
        }
    
        .nav-link::after {
            content: '';
            display: block;
            height: 2px;
            background: #ffffff; /* White underline for better visibility */
            width: 0;
            transition: width 0.3s;
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
        }
    
        .nav-link:hover::after {
            width: 100%;
        }
    
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
            }
    
            .nav-link {
                width: 100%;
                text-align: center;
            }
        }
    
            .content {
                max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                background-color: #fff;
            }
    
            /* Footer */
        footer {
            background-color: #2c6b4f; /* Dark Green background for the footer */
            color: #ffffff; /* White text color */
            padding: 30px;
            font-size: 1.2em;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 800px;
            margin: 0 auto;
        }

        .footer-column {
            flex: 1;
            margin: 20px;
            min-width: 200px;
        }

        footer a {
            text-decoration: none;
        }

        footer a.footer-link {
            color: #f08080; /* Soft pink for footer links */
            transition: color 0.3s, transform 0.3s;
            padding: 5px 10px;
            border-radius: 4px;
        }

        footer a.footer-link:hover {
            color: #ffcccb; /* Lighter pink when hovered */
            transform: scale(1.05);
        }

        footer h4 {
            color: #ffd700; /* Golden color for footer section titles */
            margin-bottom: 10px;
        }

        .footer-column h4 {
            font-weight: bold;
            font-size: 1.2em;
        }

        .footer-link {
            color: #add8e6;
            text-decoration: none;
            transition: color 0.3s, transform 0.3s;
        }

        .footer-link:hover {
            color: #ffeb3b;
            transform: scale(1.05);
        }

        /* Location Section in Footer */
        .footer-location {
            text-align: center;
            margin: 20px 0;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }

        .footer-location h4 {
            margin-bottom: 10px;
            color: #ffcccb; /* Lighter pink for location header */
        }

        /* Footer copyright */
        .footer-copyright {
            text-align: center;
            margin-top: 20px;
        }

        .entries {
    max-width: 1000px;
    margin: 30px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.entries h1 {
    font-size: 2.5em;
    color: #2c6b4f;
    text-align: center;
}

.entries p {
    font-size: 1.2em;
    line-height: 1.6;
    color: #333;
    text-align: center;
}

.content-box {
    margin-top: 30px;
}

.content-box h2 {
    font-size: 2em;
    color: #2f4f4f;
    text-align: center;
    margin-bottom: 20px;
}

.product-list {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
}

.product-item {
    width: 30%;
    background-color: #f8f8f8;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.product-img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

.product-name {
    font-size: 1.4em;
    color: #2c6b4f;
    margin-top: 10px;
}

.product-description {
    font-size: 1em;
    color: #777;
    margin-top: 10px;
}

.view-more {
    display: inline-block;
    margin-top: 15px;
    color: #f08080;
    text-decoration: none;
    font-weight: bold;
}

.view-more:hover {
    text-decoration: underline;
}

.promo-message {
    background-color: #fff8e1;
    padding: 20px;
    margin-top: 30px;
    border-radius: 8px;
    text-align: center;
}

.promo-message h2 {
    color: #d32f2f;
    font-size: 1.8em;
}

.promo-message p {
    font-size: 1.2em;
    color: #333;
}

.testimonials {
    margin-top: 40px;
}

.testimonials h2 {
    font-size: 2em;
    color: #2f4f4f;
    text-align: center;
}

.testimonial-item {
    background-color: #f8f8f8;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin: 20px 0;
}

.testimonial-text {
    font-size: 1.2em;
    color: #555;
    line-height: 1.6;
}

.testimonial-author {
    font-size: 1.1em;
    font-weight: bold;
    color: #2c6b4f;
    margin-top: 10px;
}

        </style>
</head>


<body>
<div class="header-container">
    
    
    <nav>
    <div class="topnav" id="myTopnav">
        <a href="APView.php" class="nav-link">View Products</a>
        <a href="ADAdd.php" class="nav-link">Add Product</a>
        <a href="APEdit.php" class="nav-link">Edit Product</a>
        <a href="ADDelete.php" class="nav-link">Delete Product</a>
        <a href="AOView.php" class="nav-link">View Orders</a>  
        <a href="AReview.php" class="nav-link">Review</a>  
        <a href="home.html" class="nav-link" title="Logout">Logout</a> 
    </div>
</nav>
<img src="img/background.png" class="header-image" alt="Header Image">
<div class="header-text">
            <h1 class="welcomeheader">Welcome to Household Essentials</h1>
            <h2 class="proheader">Your one-stop shop for all household needs</h2>
        </div>
</div>
<div class="entries">
    <br><br>
    <h1>Log In Successful!</h1>

    <p>Welcome back, <strong><?php echo $_SESSION["sess_user"]; ?></strong>! We’re excited to have you on board.</p>
    <p>At Household Essentials, we provide you with top-quality products for all your household needs. Whether you’re looking for kitchen tools, home décor, or cleaning supplies, we’ve got you covered!</p>
    
    <div class="content-box">
        <h2>Featured Products</h2>
        <div class="product-list">
            <div class="product-item">
                <img src="img/product1.jpg" alt="Product 1" class="product-img">
                <p class="product-name">Essential Kitchen Set</p>
                <p class="product-description">Complete your kitchen with this all-in-one set featuring cookware, utensils, and more.</p>
                <a href="product-details.php?id=1" class="view-more">View More</a>
            </div>
            <div class="product-item">
                <img src="img/product2.jpg" alt="Product 2" class="product-img">
                <p class="product-name">Comfortable Bedding Set</p>
                <p class="product-description">Enjoy a good night’s sleep with our premium quality bedding sets available in various styles.</p>
                <a href="product-details.php?id=2" class="view-more">View More</a>
            </div>
            <div class="product-item">
                <img src="img/product3.jpg" alt="Product 3" class="product-img">
                <p class="product-name">Eco-friendly Cleaning Kit</p>
                <p class="product-description">Keep your home sparkling clean with this environmentally friendly cleaning set.</p>
                <a href="product-details.php?id=3" class="view-more">View More</a>
            </div>
        </div>
    </div>

    <div class="promo-message">
        <h2>Exclusive Offer Just for You!</h2>
        <p>For a limited time, enjoy a 20% discount on all orders above $100! Use the code <strong>ESSENTIALS20</strong> at checkout. Don’t miss out on this incredible deal!</p>
    </div>

    <div class="testimonials">
        <h2>What Our Customers Are Saying</h2>
        <div class="testimonial-item">
            <p class="testimonial-text">"I love Household Essentials! The quality of the products is fantastic, and the delivery was quick and reliable. Highly recommend!"</p>
            <p class="testimonial-author">– Sarah J., Happy Customer</p>
        </div>
        <div class="testimonial-item">
            <p class="testimonial-text">"A one-stop-shop for everything I need at home. The website is easy to navigate, and the customer support is excellent!"</p>
            <p class="testimonial-author">– John M., Regular Shopper</p>
        </div>
    </div>
</div>

<footer>
        <div class="footer-content">
            <div class="footer-column">
                <h4>Follow Us</h4>
                <a href="#" class="footer-link">Facebook</a><br>
                <a href="#" class="footer-link">Twitter</a><br>
                <a href="#" class="footer-link">Instagram</a>
            </div>
            <div class="footer-column">
                <h4>Store Hours</h4>
                <p>Monday - Friday: 9 AM - 7 PM</p>
                <p>Saturday: 10 AM - 5 PM</p>
                <p>Sunday: Closed</p>
            </div>
            <div class="footer-column">
                <h4>Customer Support</h4>
                <p>Email: <a href="mailto:support@householdessentials.com" style="color: #76ff03; text-decoration: none;">support@householdessentials.com</a></p>
                <p>Phone: <a href="tel:+1234567890" style="color: #76ff03; text-decoration: none;">+1234567890</a></p>
            </div>
        </div>
        <div class="footer-location">
            <h4>Location</h4>
            <p>123 Home Street, Cityville, Country</p>
            <a href="https://maps.app.goo.gl/example" style="color: #76ff03; text-decoration: none;">View on Map</a>
        </div>
        <div class="footer-copyright">
            <p>&copy; 2024 Household Essentials. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
<?php
}
?>