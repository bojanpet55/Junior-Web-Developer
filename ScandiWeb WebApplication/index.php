<?php
$dbServerName="localhost";
$dbUserName="id19927465_bojanpet55";
$dbPassword="Piperka51EAnastasija?";
$dbName ="id19927465_product";
$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="IndexCSS.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>junior test.bojan.petrushevski</title>
  <link rel="stylesheet" href="includes/font-awesome-4.7.0">


</head>
<body>
<h1 class="Name" style="float:left;">
  ▌│█║▌║▌║MyStore║▌║▌║█│▌
</h1>
  <div id="topside">
    <div class="topnav">
      <a class="active" href="./index.php">Home</a>
      <a href="AboutPage/About.php">About</a>
      <a href="ContactPage/Contact.php">Contact</a>
    </div>
    <hr class="top"  >
</div>
<form action="./Massdelete.php" method="POST">
  <div class="productList_Header">

    <div id="NavButtons" >
      <button id="delete-product-btn" name="mass_delete" type="submit">MASS DELETE</button>
      <button id="add-product-btn" onclick="location.href='AddProductPage/addProduct.php'" type="button">ADD</button>
    </div>
  </div>


<section class="#product_form" >

  <h5 class="header5">Furniture</h5>
  <div class="container">
    <div class="horizontal_scroll1">
      <button type="button" class="btn-scroll1" id="btn-scroll-left1" onclick="scrollHorizontally1(1)"> <i class="fa fa-chevron-left" aria-hidden="true"></i></button>
      <button type="button" class="btn-scroll1" id="btn-scroll-right1" onclick="scrollHorizontally1(-1)"> <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
      <div class="story-container1">
          <?php


          $FurnitureSQL="SELECT it.SKU,it.name,it.price,fur.Height,fur.Width,fur.Length from items2 as it inner join furniture2 as fur on it.sku = fur.sku order by it.sku;";

          $FurniturePrint= mysqli_query($conn,$FurnitureSQL);
          $resultCheck2 = mysqli_num_rows($FurniturePrint);




          if(mysqli_num_rows($FurniturePrint)>0)
          {
            while ($row2 =mysqli_fetch_array($FurniturePrint))
            {
              ?>
              <div class="product">
                <div class="title"><?php echo $row2['name']; ?><label>
                    <input class=".delete-checkbox" type="checkbox" name="product_delete[]" value="<?= $row2['SKU']; ?>" style="float: left; accent-color: orange; ">
                  </label></div>
                <div class="price">HxWxL: <?php echo $row2['Height']."cm x " ?><?php echo $row2['Width']."cm x "?><?php echo $row2['Length']."cm" ?></div>
                <div class="price"> <?php echo $row2['price']."$" ?></div>
                <div class="buy-button_div">
                  <button class="buy-button">
                    Buy now
                  </button>
                </div>
              </div>

              <?php
            }

          }
          ?>
      </div>
    </div>
    <div class="horizontal_scroll2">
        <button type="button" class="btn-scroll2" id="btn-scroll-left2" onclick="scrollHorizontally2(1)"> <i class="fa fa-chevron-left" aria-hidden="true"></i></button>
      <button type="button" class="btn-scroll2" id="btn-scroll-right2" onclick="scrollHorizontally2(-1)"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </button>
      <div class="story-container2">
          <?php

          $sql3= "SELECT it.SKU,it.name,it.price,dvd.size from items2  as it inner join dvd_disc2 as dvd on it.sku = dvd.sku order by it.sku;";
          $sql= "SELECT it.SKU,it.name,it.price,bk.weight from items2  as it inner join book2 as bk on it.sku = bk.sku order by it.sku;";


          $result3 =mysqli_query($conn,$sql3);
          $result =mysqli_query($conn,$sql);

          $resultCheck = mysqli_num_rows($result);
          $resultCheck3 = mysqli_num_rows($result3);


          if(mysqli_num_rows($result)>0)
          {
            while ($row =mysqli_fetch_array($result))
            {
              ?>
              <div class="product">
                <div class="title"><?php echo $row['name']; ?><label>
                    <input class=".delete-checkbox" type="checkbox" name="product_delete[]" value="<?= $row['SKU']; ?>" style="float: left; accent-color: orange; ">
                  </label></div>
                <div class="price"> weight: <?php echo $row['weight']."Kg" ?></div>
                <div class="price"> <?php echo $row['price']."$" ?></div>
                <div class="buy-button_div">
                  <button class="buy-button">
                    Buy now
                  </button>
                </div>
              </div>

              <?php
            }

          }



          if(mysqli_num_rows($result3)>0)
          {
            while ($row3 =mysqli_fetch_array($result3))
            {
              ?>
              <div class="product">
                <div class="title"><?php echo $row3['name']; ?><label>
                    <input class=".delete-checkbox" type="checkbox" name="product_delete[]" value="<?= $row3['SKU']; ?>" style="float: left; accent-color: orange; ">
                  </label></div>
                <div class="price"> <?php echo $row3['size']." Mb"?></div>
                <div class="price"> <?php echo $row3['price']."$" ?></div>
                <div class="buy-button_div">
                  <button class="buy-button">
                    Buy now
                  </button>
                </div>
              </div>

              <?php
            }
          }
          ?>

      </div>
    </div>


  </div>

  <h4 class="header4">Books & Movies</h4>

</section>
</form>
</body>
<script >
  let currentScrollPosition1= 0;
  let scrollAmount1 = 150 ;
  let currentScrollPosition2= 0;
  let scrollAmount2 = 150 ;

  const sCont1= document.querySelector(".story-container1");
  const hScroll1 = document.querySelector(".horizontal_scroll1");
  const sCont2= document.querySelector(".story-container2");
  const hScroll2 = document.querySelector(".horizontal_scroll2");

  const btnScrollleft1 = document.querySelector("#btn-scroll-left1");
  const btnScrollright1 = document.querySelector("#btn-scroll-right1");

  const btnScrollleft2 = document.querySelector("#btn-scroll-left2");
  const btnScrollright2 = document.querySelector("#btn-scroll-right2");

  let  maxScroll1 = -sCont1.offsetWidth + hScroll1.offsetWidth;
  let  maxScroll2 = -sCont2.offsetWidth + hScroll2.offsetWidth;



  function scrollHorizontally1(val)
  {

    if(currentScrollPosition1 >= 0)
    {
      currentScrollPosition1=0;
    }

    if(currentScrollPosition1 <= maxScroll1)
    {
      currentScrollPosition1=maxScroll1;
    }

    currentScrollPosition1 +=(val * scrollAmount1);
    sCont1.style.left = currentScrollPosition1 +"px";
  }
  function scrollHorizontally2(val)
  {

    if(currentScrollPosition2 >= 0)
    {
      currentScrollPosition2=0;
    }

    if(currentScrollPosition2 <= maxScroll2)
    {
      currentScrollPosition2=maxScroll2;
    }

    currentScrollPosition2 +=(val * scrollAmount2);
    sCont2.style.left = currentScrollPosition2 +"px";
  }

</script>


<footer>
  <hr class="top">
  <div id="href">
    <nav>
      <a href="./index.php">Page 1 |</a>
      <a href="AddProductPage/addProduct.php">Page 2</a>
    </nav>
  </div>
  <div id="scandiTestAssignment">
    <p> Scandiweb Test assignment</p>
  </div>

</footer>
</html>
