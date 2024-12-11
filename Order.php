<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Household Essentials</title>
    <link rel="stylesheet" type="text/css" href="order.css"/>
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

        table {
            width: 100%; /* Ensure the table takes full width */
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            table-layout: auto; /* Allow the table to adjust its layout */
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px; /* Increased padding for better spacing */
            text-align: center;
        }

        th {
            background-color: #3e6b5b;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        input[type="text"] {
            width: 50px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #3e6b5b;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 20px;
        }

        input[type="submit"]:hover {
            background-color: #f08080;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .col_md_4 {
            flex: 1;
            margin: 0 10px;
        }

        .col_md_4 input[type="text"] {
            width: 80%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
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
        <h1 class="proheader">ORDER</h1>
        <br>
        <form action="Order1.php" method="POST">
            <table class="table">
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Category</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $host = "localhost:3377";
                        $user = "root";
                        $passwd = "";
                        $database = "weapons";
                        $table_name = "product";
                        $conn = mysqli_connect($host, $user, $passwd, $database) or die("could not load");
                        $sql = "select * from product order by productname asc";
                        $query = $conn->query($sql);
                        $iterate = 0;

                        while($row = $query->fetch_array()){
                    ?>
                        <tr>
                            <td class="text-center">
                            <input type="checkbox" value="<?php echo $row['Id']; ?>" name="productid[]">
                            </td>
                            <td><?php echo $row['catname']; ?></td>
                            <td><?php echo $row['productname']; ?></td>
                            <td class="text-right">&#8369; <?php echo number_format($row['price'], 2); ?></td>
                            <td><input  type="text" class="from-control" name="quantity_<?php echo $row['Id']; ?>"></td>
                        </tr>
                    <?php
                        $iterate++;
                    }
                    ?>
                </tbody>
            </table>
            <br>
            <div class="form-container">
                <div class="col_md_4">
                    <label for="fullname">Name</label>
                    <input type="text" name="fullname" placeholder="Customer Name" required>
                </div>
                <div class="col_md_4">
                    <label for="address">Address</label>
                    <input type="text" name="address" placeholder="Shipping Address" required>
                </div>
                <div class="col_md_4">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" placeholder="Phone Number" required>
                </div>
            </div>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
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
