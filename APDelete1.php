<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset = 'utf-8'>
        <title>WEAPONS</title>
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
            height: auto; /* Maintain aspect ratio */
        }
    
            
        nav {
            position: absolute;
            top: 0;
            width: 100%;
            max-width: 100vw; /* Prevent overflow */
            background: linear-gradient(to right, rgba(111, 66, 193, 0.8), rgba(50, 50, 150, 0.8)); /* Gradient background */
            padding: 15px 0; /* Increased padding */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); /* Deeper shadow */
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center; /* Center items vertically */
            flex-wrap: wrap; /* Allow wrapping for mobile */
            overflow: hidden; /* Prevent overflow */
            box-sizing: border-box; /* Include padding in width */
        }

        .nav-link {
            color: #ffffff;
            text-decoration: none;
            padding: 12px 20px; /* Slightly wider padding */
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s; /* Added transition for box-shadow */
            position: relative; /* For pseudo-element */
            white-space: nowrap; /* Prevent text wrapping */
        }

        .nav-link:hover {
            background-color: #c1426f;
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow on hover */
        }

        .nav-link.active {
            background-color: #004080; /* Darker color for active link */
            font-weight: bold; /* Make active link bold */
        }

        .nav-link::after {
            content: '';
            display: block;
            height: 2px;
            background: #fff;
            width: 0;
            transition: width 0.3s;
            position: absolute;
            bottom: -5px; /* Adjust the position */
            left: 50%;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%; /* Expand the underline on hover */
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .topnav {
                flex-direction: column; /* Stack vertically on small screens */
            }
            .nav-link {
                padding: 10px;
                width: 100%; /* Full-width links */
                text-align: center; /* Center text */
            }
        }
    
            .content {
                max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                background-color: #fff;
            }
    
            footer {
            background-color: #6f42c1;
            color: #fff;
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
            margin: 20px !important;
            min-width: 200px;
        }

        footer a {
            text-decoration: none;
        }

        footer a.footer-link {
            color: #66ff66;
            text-decoration: none;
            transition: color 0.3s, transform 0.3s;
            padding: 5px 10px;
            border-radius: 4px;
        }

        footer a.footer-link:hover {
            color: #99ff99;
            transform: scale(1.05);
        }

        footer h4 {
            color: #ffd700;
            margin-bottom: 10px;
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

        .footer-column h4 {
            font-weight: bold;
            font-size: 1.2em;
        }

            .entries {
            text-align: center;
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }

        .tablee {
    width: 43%; /* Set width to 43% of the page */
    max-width: 600px; /* Optional: Set a max width */
    margin: 20px auto; /* Center the table horizontally */
    border-collapse: separate; /* Change this to separate */
    border-spacing: 0; /* Remove default spacing */
    border: 1px solid #6f42c1; /* Add a thin purple border */
    border-radius: 8px; /* Rounded corners */
    overflow: hidden; /* Prevent overflow for rounded corners */
}


.tablee th, .tablee td {
    padding: 12px; /* Increase padding for better spacing */
    text-align: left; /* Align text to the left */
    border-radius: 10px; /* Add rounded corners */
}

.tablee th {
     /* Light gray header */
    color: #333; /* Dark text for header */
    font-weight: bold; /* Bold font for header */
    text-transform: uppercase; /* Uppercase header text */
    letter-spacing: 1px; /* Spacing between letters */
}

.tablee td {
    background-color: transparent; /* Purple background for cells */
    color: #333; /* White text for cells */
    
}



.tablee tr:hover .td_last {
    background-color: #f8f8f8; /* Maintain the same background color on hover */
}

/* Additional styles for td without borders */
.tablee td {
    border: none; /* Remove border from cells */
}



table.tablee .td_last {
    background-color: #f8f8f8; /* White background for the last row */
    color: black; /* Change text color to black for better contrast */
    padding: 10px; /* Optional: add padding for spacing */
    
}

.tablee input[type="text"],
.tablee input[type="file"] {
    width: 100%; /* Full width for inputs */
    padding: 10px; /* Add padding */
    border: 1px solid #6f42c1; /* Border for inputs */
    border-radius: 4px; /* Rounded corners for inputs */
    box-sizing: border-box; /* Include padding in width calculation */
    transition: border-color 0.3s; /* Smooth border transition */
}

.tablee input[type="text"]:focus,
.tablee input[type="file"]:focus {
    border-color: #c1426f; /* Purple border on focus */
    outline: none;
    color: #6f42c1; /* Remove outline */
}

.tablee input[type="submit"],
.tablee input[type="reset"] {
    background-color: #6f42c1; /* Purple background for buttons */
    color: white; /* White text */
    padding: 10px 15px; /* Padding for buttons */
    border: none; /* Remove border */
    border-radius: 4px; /* Rounded corners for buttons */
    cursor: pointer; /* Pointer cursor for buttons */
    transition: background-color 0.3s; /* Smooth background transition */
    margin-top: 10px; /* Spacing above buttons */
}

.tablee input[type="submit"]:hover,
.tablee input[type="reset"]:hover {
    background-color: #f8f8f8;
    color: #6f42c1;
    border: 1px solid #c1426f; /* Darker purple on hover */
}
        </style>
</head>
<body>

<div class="header-container">
    <img src="img/background.png class="header-image" alt="Header Image">
    
    <nav>
    <div class="topnav" id="myTopnav">
        <a href="APView.php" class="nav-link">View Products</a>
        <a href="ADAdd.php" class="nav-link">Add Product</a>
        <a href="APEdit.php" class="nav-link">Edit Product</a>
        <a href="ADDelete.php" class="nav-link">Delete Product</a>
        <a href="AOView.php" class="nav-link">View Orders</a>  
        <a href="AReview.php" class="nav-link">Review</a>  
        <a href="Logout.php" class="nav-link" title="Logout">Logout</a> 
    </div>
</nav>
<div class="header-text">
            <h1 class="welcomeheader">Welcome to Our Weapons Shop</h1>
            <h2 class="proheader">Your trusted source for quality weapons</h2>
        </div>

</div>

<footer style="background-color: #6f42c1; padding: 30px; border-top: 5px solid #ffd700;">
        <div style="max-width: 800px; margin: 0 auto; color: #f0f0f0;">
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
                    <p>Email: <a href="mailto:paingmoeoo599@gmail.com" style="color: #76ff03; text-decoration: none;">support@weaponsstore.com</a></p>
                    <p>Phone: <a href="tel:+959683517412" style="color: #76ff03; text-decoration: none;">+959683517412</a></p>
                </div>
            </div>
            <div style="text-align: center; margin: 20px 0; padding: 10px; background-color: rgba(255, 255, 255, 0.1); border-radius: 5px;">
                <h4 style="margin-bottom: 10px; color: #ffd700;">Location</h4>
                <p>Myanmar, Taunggyi City, Main Road</p>
                <a href="https://maps.app.goo.gl/Bko76z1zVKikAx477" style="color: #76ff03; text-decoration: none;">View on Map</a>
            </div>
            <div style="text-align: center; margin-top: 20px;">
                <p>&copy; 2024 Weapons Store. All rights reserved.</p>
            </div>
        </div>
    </footer>


<?php
    $host = "localhost:3377";
    $user = "root";
    $passwd = "";
    $database = "weapons";
    $table_name = "product";
    $connect = mysqli_connect($host, $user, $passwd, $database) or die("could not load");

    $query = "Select * From product";
        mysqli_select_db($connect, $database);
        $result = mysqli_query($connect, $query);
    
    $productid = $_POST["aproductid"];
    $myquery = "SELECT*FROM $table_name WHERE productid = '".$productid."'";

    $sql = "DELETE FROM $table_name WHERE productid = '".$productid."'";

    mysqli_select_db($connect,$database);
    $result = mysqli_query($connect,$myquery);
    $myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);

    if(!$myrow){
        print"<p>No such record</p>";
    }
    else{
        mysqli_query($connect,$sql);
        print"Product Id '$productid' has been deleted from the database";
        mysqli_close($connect);
    }
    
    ?>

    
</body>
</html>

<?php
}
?>