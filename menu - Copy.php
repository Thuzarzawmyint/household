<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f8f8f8;
    }
    header{
      background-color: #000000;
      padding: 20px;
      text-align: center;
    }
    .logo{
      width: 300px;
      height: auto;
    }
    nav{
      background-color: #284458;
      overflow: hidden;
    }
    nav a{
      color: #fff;
      text-decoration: none;
      padding: 14px 16px;
      display: inline-block;
      font-size: 13px;
    }
    .content{
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
    }
    .product-table{
      width: 100%;
      border-collapse: collapse;
      }
      .product-table th, .product-table td{
        padding: 10px;
        text-align: left;
      }
      .product-table th{
        background-color: #f2f2f2;
        font-weight: bold;
      }
      .product-table img{
        width: 100px;
        height: 100px;
      }
      .product-table tr:nth-child(even){
        background-color:  #f8f8f8;
      }
      .product-table tr:hover{
        background-color: #e0e0e0;
      }
  </style>
</head>
<body>
  <center>
    <img src="" marging="auto" width="370px heigh="200px" alt="">
    <p><h3>Life is dull without Good Food</h3></p>
    <br>

    <p>
      <nav>
      <div class="topnav" id="myTopnav">
        <a href="Home.html">Home</a>
        <a href="About.html">Our Story</a>
        <a href="menu.php">Menu</a>
        <a href="Order.php">Order</a>
        <a href="UReview.php">Review</a>
        <a href="Contact.html">Contact</a>
        <a href="">Admin Log In</a>
    </div>
      </nav>
    </p>
  </center>
  <br>
  <div class="entries">
      <?php
      $host = "localhost:3377";
      $user = "root";
      $passwd = "";
      $database = "fooddrinkdb";
      $table_name = "product";
      $connect = mysqli_connect($host, $user, $passwd, $database) or die("could not load");

      $query = "Select * From product";
      $db = mysqli_select_db($connect, $database);
      $result = mysqli_query($connect, $query);

      echo "<div class='entries'>";
      echo "<h1 align='center'>MENU</h1>";

      if($result){
        print "<table class='product-table' align='center'>";
        print "<th>Category</th><th>Name</th><th>Price</th><th>Photo</th>";
        
        while ($row = mysqli_fetch_array($result)){
          $pcat = $row['catname'];
          $pname = $row['productname'];
          $price = $row['price'];
          $photo = $row['photo'];

          print "<tr>";
          print "<td>". $pcat . "</td>";
          print "<td>". $pname . "</td>";
          print "<td>". $price . "</td>";
          print "<td>"."<img src='".$photo."'controls width = '100px' height='100px'>"."</td>";
        }
          print "</table>";
      }else{
      die("Query = $query failed!");
        }echo "</div>";
        mysqli_close($connect);
        ?>
        
    </center>
  </div>
</body>
</html>