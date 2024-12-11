<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEAPONS</title>
    <link rel="stylesheet" type="text/css" href="order.css"/>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }

        .header-container {
            position: relative;
            width: 100%;
        }

        .header-image {
            width: 100%;
            height: auto; /* Maintain aspect ratio */
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
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
        }

        

        .tablee {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .tablee th,
        .tablee td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .tablee th {
            background-color: #6f42c1;
            color: white;
            font-weight: bold;
        }

        .tablee tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .tablee tr:hover {
            background-color: #d1e0ff;
        }

        .tablee img {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
            border-radius: 5px;
            display: block;
            margin: 0 auto;
        }
        .entries {
    max-width: 800px; /* Limit width for better readability */
    margin: 20px auto; /* Center the div with spacing */
    padding: 20px; /* Add padding for inner spacing */
    background-color: #ffffff; /* White background */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Deeper shadow for depth */
}

.entries h3 {
    font-size: 2.5em; /* Increase font size for section header */
    color: #333; /* Darker text color for contrast */
    margin-bottom: 15px; /* Spacing below header */
    border-bottom: 3px solid #6f42c1; /* Bottom border for emphasis */
    padding-bottom: 10px; /* Padding below header */
    transition: color 0.3s; /* Transition for hover effect */
}

.entries h3:hover {
    color: #6f42c1; /* Change color on hover */
}

.entries p {
    font-size: 1.2em; /* Slightly larger font for better readability */
    line-height: 1.8; /* Increase line height for better spacing */
    color: #555; /* Softer text color */
    margin-bottom: 25px; /* Spacing below paragraphs */
}

.entries h4 {
    font-size: 1.8em; /* Font size for subheaders */
    color: #444; /* Color for subheaders */
    margin-top: 25px; /* Margin above subheaders */
    margin-bottom: 15px; /* Margin below subheaders */
    border-bottom: 2px solid #6f42c1; /* Bottom border for emphasis */
    padding-bottom: 5px; /* Padding below subheader */
    transition: color 0.3s; /* Transition for hover effect */
}

.entries h4:hover {
    color: #6f42c1; /* Change color on hover */
}

.entries ul {
    list-style-type: disc; /* Bulleted list */
    padding-left: 20px; /* Indent for bullet points */
    margin-bottom: 20px; /* Margin below the list */
}

.entries ul li {
    margin-bottom: 12px; /* Spacing between list items */
    font-size: 1.2em; /* Font size for list items */
    color: #555; /* Color for list items */
    transition: transform 0.2s; /* Transition for hover effect */
}

.entries ul li:hover {
    transform: translateX(5px); /* Subtle movement on hover */
}

form {
    background-color: #f9f9f9; /* Light background for the form */
    padding: 20px; /* Padding for form */
    border-radius: 10px; /* Rounded corners for the form */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Shadow for depth */
}

form label {
    font-weight: bold; /* Bold labels */
    color: #333; /* Darker text color for contrast */
}

form button:hover {
    background-color: #5a2a9e; /* Darker button on hover */
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
        <h3>Contact Us</h3>
        <p>If you have any questions or need assistance, feel free to reach out to us. We're here to help!</p>
        
        <h4>Get in Touch</h4>
        <form action="#" method="POST">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="cname" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px;"><br>
            
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px;"><br>
            
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px;"></textarea><br>
            
           <!-- <button type="submit"  style="background-color: #6f42c1; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                Send Message
            </button>-->
            <input type="submit" name="submit" value="Submit" style="background-color: #6f42c1; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
        </form>

        
    <?php
    if (isset($_POST['submit'])) {
        $host = "localhost:3377";
        $user = "root";
        $passwd = "";
        $database = "weapons";
        $table_name = "contact";
        $connect = mysqli_connect($host, $user, $passwd, $database) or die("Could not load");

        $cname = mysqli_real_escape_string($connect, $_POST['cname']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $message = mysqli_real_escape_string($connect, $_POST['message']);
    

        $sql = "INSERT INTO contact(cname, email, message, Date)
                VALUES('$cname', '$email', '$message', NOW())";

        if (!mysqli_query($connect, $sql)) {
            die('Error: ' . mysqli_error($connect));
        } else {
            echo "<center>Successfully added</center>";
        }
        mysqli_close($connect);
    }
    ?>
        
        <h4>Other Contact Information</h4>
        <p>Email: <a href="mailto:paingmoeoo599@gmail.com">paingmoeoo599@gmail.com</a></p>
        <p>Phone: <a href="tel:+959683517412">+959683517412</a></p>
        <p>Address: Taunggyi, Thittaw Quater, Main Road</p>
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
