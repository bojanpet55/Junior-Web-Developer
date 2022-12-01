<?php
  include './dbConnecting.php';
  include './User.php';
  include './ViewProduct.php';

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <link rel="stylesheet" href="test.css">


  <meta charset="UTF-8">
  <title>Product type</title>
  <script src="withdraw.php"></script>
</head>

<body>

<div class="product">
  <div class="title"><?php $users = new User(); $users->getPrice()?><label>

  </div>
</div>



</body>
</html>

