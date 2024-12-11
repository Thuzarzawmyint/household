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
    color: white; /* White text for cells */
    
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
    background-color: #3e6b5b; /* Purple background for buttons */
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
    background-color: #f08080;
    color: #ffffff;
/* Darker purple on hover */
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
<h1 class="welcomeheader">Welcome to Household Essentials</h1>
<h2 class="proheader">Your one-stop shop for all household needs</h2>
        </div>

</div>


<div class="entries">
    <h1 class="proheader">Product Add</h1>
        </br>
        <form name="productdd" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype='multipart/form-data'>
        <center>
        <table class="tablee">
    <tr>
        <th>Category Name</th>
        <td><input type="text" name="pcategory"></td>
    </tr>
    <tr>
        <th>Product Name</th>
        <td><input type="text" name="pname"></td>
    </tr>
    <tr>
        <th>Price</th>
        <td><input type="text" name="price"></td>
    </tr>
    <tr>
        <th>Photo</th>
        <td><input type="file" name="pfile"></td>
    </tr>
    <tr>
    <td colspan="2" style="text-align: center;" class="td_last">
        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Reset Form">
    </td>
</tr>

</table>


        </form>
        </center>
    
    <?php
    if(isset($_POST['submit'])){
        $host = "localhost:3377";
        $user = "root";
        $passwd = "";
        $database = "weapons";
        $table_name = "product";
        $connect = mysqli_connect($host, $user, $passwd, $database) or die("could not load");
  
        //$name = $_FILES['pfile']['name'];
        $target_dir = "img/";
        $target_file = $target_dir . $_FILES["pfile"]["name"];
        $maxsize = 5242880; //5MB

        //Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        //Valid file extensions
        $extensions_arr = array("png", "jpeg", "jpg");

        //Check extension
        if(in_array($imageFileType, $extensions_arr)){
            
            //Check file size
            if(($_FILES['pfile']['size'] >= $maxsize) || ($_FILES["pfile"]["size"] == 0)){
                echo "File too large. File must be less than 5MB.";

            }else{

                if(move_uploaded_file($_FILES["pfile"]["tmp_name"], $target_file)) {
                
                    $imageData = file_get_contents($target_file);
                    $imageData = mysqli_real_escape_string($connect, $imageData);
                //Insert record
                $sql = "INSERT INTO product(catname,productname,price,photo)
                VALUES('$_POST[pcategory]','$_POST[pname]','$_POST[price]','".$imageData."')";

                if(!mysqli_query($connect,$sql)){
                    die('Error: ' . mysqli_error($connect));

                }else{
                    echo "<center>Successfully added</center>";

                }
                mysqli_close($connect);

            }}

        }else{
            echo "Invalid file extension.";
        }
    }
    else{
        
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

<?php
}
?>