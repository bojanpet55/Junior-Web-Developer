<?php
$dbServerName="localhost";
$dbUserName="id19927465_bojanpet55";
$dbPassword="Piperka51EAnastasija?";
$dbName ="id19927465_product";
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


  $Id = $_POST['SKU'];
  $Name = $_POST['Name'];
  $Price = $_POST['price'];
  $Weight = $_POST['Weight'];
  $Size = $_POST['Size'];
  $Height = $_POST['Height'];
  $Width = $_POST['Width'];
  $Length = $_POST['Length'];
  $selected= $_POST['dropdown'];

  if (empty($Id) || empty($Name) || empty($Price))
  {
    header("Location: ../addProductPage/addProduct.php?Form=empty");
  }
  else {
    if ($selected == "Book") {
      if (empty($Weight)) {
        header("Location: ../addProductPage/addProduct.php?Weight=empty");
      } else {
        $sql = "INSERT INTO items2(SKU,name,price) VALUES ('$Id','$Name','$Price') ;";
        $sql4 = "INSERT INTO book2(SKU,Weight) VALUES ('$Id','$Weight') ;";
        mysqli_query($conn, $sql4);
        mysqli_query($conn, $sql);

        header("Location: ../index.php");
      }
    }
    else if ($selected == "Furniture") {
      if (empty($Height) || empty($Width) || empty($Length)) {
        header("Location: ../addProductPage/addProduct.php?Furniture=empty");
      }
      $sql = "INSERT INTO items2(SKU,name,price) VALUES ('$Id','$Name','$Price') ;";
      $sql2 = "INSERT INTO furniture2(SKU,Height,Width,Length) VALUES ('$Id','$Height','$Width','$Length') ;";
      mysqli_query($conn, $sql2);
      mysqli_query($conn, $sql);

      header("Location: ../index.php");
    }
    else if ($selected == "DVD") {
      if (empty($Size)) {
        header("Location: ../addProductPage/addProduct.php?Size=empty");
      }
      $sql = "INSERT INTO items2(SKU,name,price) VALUES ('$Id','$Name','$Price') ;";
      $sql3 = "INSERT INTO dvd_disc2(SKU,size) VALUES ('$Id','$Size') ;";
      mysqli_query($conn, $sql3);
      mysqli_query($conn, $sql);

      header("Location: ../index.php");
    }
    else{
      header("Location: ../addProductPage/addProduct.php?Form=empty");
    }
  }

//   $stmt = $conn->prepare("INSERT INTO items(SKU, name,price) VALUES (?, ?, ?);");
//    $stmt2 = $conn->prepare("INSERT INTO book(SKU,weight) VALUES (?,?,?);");
//    $stmt3 = $conn->prepare("INSERT INTO dvd_disc(SKU,size) VALUES (?,?,?);");
//    $stmt4 = $conn->prepare("INSERT INTO furniture(SKU,Height,Width,Length) VALUES (?,?,?,?);");
//
//    $stmt->bind_param("isf", $SKU, $name, $price);
//    $stmt2->bind_param("if", $SKU, $weight);
//    $stmt3->bind_param("if", $SKU, $size);
//    $stmt4->bind_param("if", $SKU, $Height,$Width,$Length);
//

 //   $SKU = $Id;
 //   $name = $Name;
 //   $price = $Price;
 //   $weight = $Weight;
 //   $size = $Size;
 //   $stmt->execute();
//    $stmt2->execute();
 //   $stmt3->execute();


//    echo "Registration successfully...";
//    $conn->close();




