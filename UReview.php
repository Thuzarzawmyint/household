<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Household Essentials</title>
        <link rel="stylesheet" type="text/css" href="order.css" />
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
            height: auto;
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

        .entries {
            text-align: center;
            overflow-x: hidden;
        }

        .tablee {
            width: 43%;
            max-width: 600px;
            margin: 20px auto;
            border-collapse: separate;
            border-spacing: 0;
            border: 1px solid #6f42c1;
            border-radius: 8px;
            overflow: hidden;
        }

        .tablee th,
        .tablee td {
            padding: 12px;
            text-align: left;
            border-radius: 10px;
        }

        .tablee th {
            color: #333;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .tablee td {
            background-color: transparent;
            color: #333;
        }

        .tablee tr:hover .td_last {
            background-color: #f8f8f8;
        }

        .tablee td {
            border: none;
        }

        table.tablee .td_last {
            background-color: #f8f8f8;
            color: black;
            padding: 10px;
        }

        .tablee input[type="text"],
        .tablee input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #6f42c1;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        .tablee input[type="text"]:focus,
        .tablee input[type="file"]:focus {
            border-color: #c1426f;
            outline: none;
            color: #6f42c1;
        }

        .tablee input[type="submit"],
        .tablee input[type="reset"] {
            background-color: #3e6b5b;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .tablee input[type="submit"]:hover,
        .tablee input[type="reset"]:hover {
            background-color: #f08080;
            color: #ffffff;
            
        }

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
    </style>
</head>

<body>
<div class="header-container">
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="Home.html" class="nav-link">Home</a>
                <a href="menu.php" class="nav-link">Menu</a>
                <a href="Order.php" class="nav-link">Order</a>
                <a href="UReview.php" class="nav-link">Review</a>
                <a href="contact.php" class="nav-link">Contact</a>
                <a href="Login.php" class="nav-link">Admin Log In</a>
            </div>
        </nav>

        <img src="img/background.png" class="header-image" alt="Header Image">
        <div class="header-text">
            <h1 class="welcomeheader">Welcome to Household Essentials</h1>
            <h2 class="proheader">Your one-stop shop for all household needs</h2>
        </div>
    </div>

    <div class="entries">
        <h1 class="proheader">Review Form</h1>
        <br />
        <form name="registerForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <table class="tablee">
                <tr>
                    <td>Customer Name:</td>
                    <td><input type="text" name="cname" size="30"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" size="30"></td>
                </tr>
                <tr>
                    <td>Product Name</td>
                    <td><input type="text" name="pname" size="30"></td>
                </tr>
                <tr>
                    <td>Comment</td>
                    <td><input type="text" name="comment" size="30"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Reset Form">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $host = "localhost:3377";
            $user = "root";
            $passwd = "";
            $database = "weapons";
            $table_name = "review";
            $connect = mysqli_connect($host, $user, $passwd, $database) or die("Could not load");

            $cname = mysqli_real_escape_string($connect, $_POST['cname']);
            $email = mysqli_real_escape_string($connect, $_POST['email']);
            $pname = mysqli_real_escape_string($connect, $_POST['pname']);
            $comment = mysqli_real_escape_string($connect, $_POST['comment']);

            $sql = "INSERT INTO review(customer, email, productname, comment, Date)
                    VALUES('$cname', '$email', '$pname', '$comment', NOW())";

            if (!mysqli_query($connect, $sql)) {
                die('Error: ' . mysqli_error($connect));
            } else {
                echo "<center>Successfully added</center>";
            }
            mysqli_close($connect);
        }
        ?>
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
