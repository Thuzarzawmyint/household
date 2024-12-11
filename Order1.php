<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset = 'utf-8'>
        <title>GOOD FOOD</title>
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
            text-align: left;
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
                <a href="Contact.html" class="nav-link">Contact</a>
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
    <center>
        <h1 class="page-header text-center">Order Successfully!!!!</h1>
        <p>Thanks for Shopping!</p>
        </center>
</div>

<div>
<?php
if (isset($_POST['submit'])) {
    $host = "localhost:3377";
    $user = "root";
    $passwd = "";
    $database = "weapons";
    $table_name = "orders";
    $conn = mysqli_connect($host, $user, $passwd, $database);

    // Check if connection is successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get customer data
    $customer_name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    // Check if product Ids are selected
    if (isset($_POST['productid']) && !empty($_POST['productid'])) {
        $productIds = $_POST['productid'];

        // Prepare the SQL statement
        $insertSql = "INSERT INTO orders ( quantity, customer_name, address, phone) VALUES ( ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertSql);

        if (!$stmt) {
            die("Prepared statement failed: " . $conn->error);
        }

        // Loop through the selected products and insert them into the database
        foreach ($productIds as $productId) {
            // Get the quantity for each product
            $quantity = isset($_POST['quantity_' . $productId]) ? intval($_POST['quantity_' . $productId]) : 0;

            // Only insert if quantity is greater than 0
            if ($quantity > 0) {
                // Bind parameters and execute the prepared statement
                $stmt->bind_param("isss", $quantity, $customer_name, $address, $phone);

                // Execute the statement and check for success
                if ($stmt->execute()) {
                    echo "Order for product ID $productId saved successfully!<br>";
                } else {
                    echo "Error inserting data for product ID $productId: " . $stmt->error . "<br>";
                }
            } else {
                echo "Quantity for product ID $productId is invalid (must be greater than 0).<br>";
            }
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "No products selected.";
    }

    // Close the database connection
    $conn->close();
}
?>

                                   </div>
                               </body>
                               </html>
                    