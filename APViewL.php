<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
}else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset='utf-8'>
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

            

            .tablee {
        width: 100%; /* Ensure the table takes full width */
        border-collapse: collapse;
        margin: 20px 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        table-layout: auto; /* Allow the table to adjust its layout */
    }


.tablee th, .tablee td {
    border: 1px solid #ddd;
    padding: 12px; /* Increased padding for better spacing */
    text-align: left;
}

.tablee th {
    background-color: #6f42c1; /* Purple header */
    color: white;
    font-weight: bold; /* Make header text bold */
}

.tablee tr:nth-child(even) {
    background-color: #f9f9f9; /* Light grey for even rows */
}

.tablee tr:hover {
    background-color: #d1e0ff; /* Light blue on hover */
}

.tablee img {
    max-width: 100px; /* Maintain max width for images */
    max-height: 100px; /* Maintain max height for images */
    object-fit: cover; /* Crop images to fit */
    border-radius: 5px; /* Rounded corners for images */
    display: block; /* Center image */
    margin: 0 auto; /* Center image */
}

.tablee td:nth-child(3) {
    font-weight: bold; /* Make product names bold */
    text-align: left; /* Align product name to the left */
}

.tablee td:nth-child(4) {
    text-align: center; /* Center align the price */
}

.tablee td:nth-child(5) {
    text-align: center; /* Center align the image */
}

.entries {
        text-align: center;
        overflow-x: hidden; /* Prevent horizontal scrolling */
    }

    



        </style>
</head>
<body>

<div class="header-container">
    <img src="img/background.png" class="header-image" alt="Header Image">
    
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
<div class="header-text">
            <h1 class="welcomeheader">Welcome to Our Weapons Shop</h1>
            <h2 class="proheader">Your trusted source for quality weapons</h2>
        </div>

</div>

<div class="entries">
    <center>
        <br>
        <h1 class="welcomeheader">WELCOME FROM THE WEAPON STORE</h1>
    </center>

    <br>
    <div class="entries">
        <center>
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

            echo "<div color=red class=entries>";
            echo "<h1 class='proheader'>Product List</h1>";

            if($result){
                print "<table class='tablee'>";
                print "<thead><tr><th>Product ID</th><th>Category</th><th>Name</th><th>Price</th><th>Photo</th></tr></thead><tbody>";
        
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $pid = $row['productid'];
                    $pcat = $row['catname'];
                    $pname = $row['productname'];
                    $price = $row['price'];
                    $photo = $row['photo'];
        
                    print "<tr>"; // Keep the row as is without JavaScript interaction
                    print "<td>".$pid."</td>";
                    print "<td>".$pcat."</td>";
                    print "<td>".$pname."</td>";
                    print "<td>$".$price."</td>";
                    print "<td><img src='".$photo."' alt='Product Image'></td>";
                    print "</tr>";
                }
                print "</tbody></table>";
            } else {
                die("Query=$query failed!");
            }
            echo "</div>";
            mysqli_close($connect);
            ?>
        </center>
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
