<?php
$dbServerName="localhost";
$dbUserName="id19927465_bojanpet55";
$dbPassword="Piperka51EAnastasija?";
$dbName ="id19927465_product";
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="UTF-8">
  <title>Product type</title>
  <link rel="stylesheet" href="ProductCSS.css">
  <script src=
            "https://code.jquery.com/jquery-1.12.4.min.js">
  </script>
  <script src="../JavaScript/Change%20Dropdown%20Menu.js"></script>
  <script src="../JavaScript/SideBar.js"></script>
  <script src="connect.php"></script>
</head>
<body>
  <hr class="line">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <hr class="line">
  <a href="../index.php">Home</a>
  <a href="../AboutPage/About.php">About</a>
  <a href="../ContactPage/Contact.php">Contact</a>
  <hr class="lineBottom">

  <p class="name">▌│█║▌║▌║<span id="smallLogo">MyStore</span>║▌║▌║█│▌</p>
  <hr class="line">
</div>


<span onclick="openNav()" > <button class="NavBar" type="button">Navigation Bar</button> </span>


<div id="split"  >
  <div id="OrangeBlock">
    <div style="width: 50%; float:left">
    <p class="logo">▌│█║▌║▌║<span class="LogoStore">MyStore</span>║▌║▌║█│▌ </p>
    </div>
    <div style="width: 50%; float:right" >
      <a type="submit" href="../AddProductPage/addProduct.php" id="Cancel" >Cancel</a>
    </div>
  </div>
  <h1 id="productAdd" style="float:right ;" >Product Information:</h1>
  <div id="rightSplit">


    <div id="img" style="width: 40%; float: left">
    <img id="slika" src="../includes/images/shopPhoto.jpg" alt="Shop Logo for product page">
    </div>



<form action="../AddProductPage/connect.php" method="POST" id="#product_form">
  <div id="FillinForm"  style="width: 50%; float: right" >
  <div class="inputType">
    <label for="#sku" class="NameField" >SKU:</label><input type="text" id="#sku" name="SKU" placeholder="#sku"><br>
    <div class="Description">
      *Unique ID for the product
    </div>
  </div>
  <div class="inputType">
    <label for="#name" class="NameField">Name:</label><input type="text" id="#name" name="Name" placeholder="#name"><br>
    <div class="Description">
      *Name of the product
    </div>
  </div>
  <div class="inputType">
    <label for="#price" class="NameField">Price ($):</label><input type="number" id="#price" name="price" placeholder="#price"><br>
    <div class="Description">
      *Price in dollars($)
    </div>
  </div>

  <div >
    <label for="dropdown" class="NameField" >Type of devices added: </label>
      <select name="dropdown" id="#productType" class="dropdown" >
        <option class="NameField" >Select</option>
        <option value="Book" class="NameField"  >Book</option>
        <option value="DVD" class="NameField" >DVD</option>
        <option value="Furniture" class="NameField" >Furniture</option>
      </select>
  </div>
  <div>
    <div class="Book GFG">
      <label for="#weight" class="NameField">Weight(KG)</label><input type="number" id="#weight" name="Weight" placeholder="#weight">
      <div class="Description">
        *Weight of the Book in Kilograms(kg)
      </div>
    </div>
    <div class="DVD GFG">
      <label for="#size" class="NameField">Size(MB)</label><input type="number" id="#size" name="Size" placeholder="#size">
      <div class="Description">
        *Size of the DVD in Megabytes(Mb)
      </div>
    </div>
    <div class="Furniture GFG">
      <div  id="FurnitureHeight" >
        <label for="#height" class="NameField">Height(CM)</label><input type="number" id="#height" name="Height" placeholder="#height">
        <div class="Description">
          *Height of the item in Centimeters(Cm)
        </div>
      </div>
      <div class="FurnitureWidth">
        <label for="#width" class="NameField">Width(CM) </label><input type="number" id="#width" name="Width" placeholder="#width">
        <div class="Description">
          *Width of the item in Centimeters(Cm)
        </div>
      </div>
      <div id="FurnitureLength ">
        <label for="#Length" class="NameField">Length(CM)</label><input type="number" id="#Length" name="Length" placeholder="#length">
        <div class="Description">
          *Length of the item in Centimeters(Cm)
        </div>
      </div>
    </div>
    </div>
    <?php
      $fullURL= "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


      if(strpos($fullURL, "Form=empty"))
      {
        echo "<p id='error'>Please, submit required data</p>";

      }
     else if(strpos($fullURL, "Weight=empty"))
    {
      echo "<p id='error'>Please, provide the data for Weight</p>";

    }
   else if(strpos($fullURL, "Furniture=empty"))
    {
      echo "<p id='error'>Please, provide the data for Furniture</p>";

    }
   else if(strpos($fullURL, "Size=empty"))
    {
      echo "<p id='error'>Please, provide the data for Size</p>";

    }


    ?>

    <div id="button" >
      <button type="submit" name="submit" id="Submit">Save</button>
    </div>

  </div>
</form>

  </div>
  </div>
</body>
<footer>
  <hr class="line">
  <div id="href">
    <nav class="PageScroll">
      <a href="../index.php">Page 1 |</a>
      <a href="./addProduct.php">Page 2</a>
    </nav>
  </div>
  <div id="scandiTestAssignment">
    <p> Scandiweb Test assignment</p>
  </div>
</footer>
</html>
