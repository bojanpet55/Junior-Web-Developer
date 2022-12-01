<?php

$dbServerName="localhost";
$dbUserName="id19927465_bojanpet55";
$dbPassword="Piperka51EAnastasija?";
$dbName ="id19927465_product";
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['mass_delete']))
{
  $product=$_POST['product_delete'];
  $extract_SKU=implode(',',$product);



  $query1 = "DELETE FROM items2 where items2.SKU IN('$extract_SKU');";
  $query2 = "DELETE FROM furniture2 where furniture2.SKU IN('$extract_SKU');";
  $query3 = "DELETE FROM dvd_disc2 where dvd_disc2.SKU IN('$extract_SKU');";
  $query4 = "DELETE FROM book2 where book2.SKU IN('$extract_SKU');";


  $query_run1 =mysqli_query($conn,$query1);
  $query_run2 =mysqli_query($conn,$query2);
  $query_run3 =mysqli_query($conn,$query3);
  $query_run4 =mysqli_query($conn,$query4);


  header("Location: ./ProductDeletedPage/ProductDeletedPage.php");

}
