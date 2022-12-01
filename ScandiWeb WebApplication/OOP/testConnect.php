<?php


if(isset($_POST['mass_delete']))
{
  $product=$_POST['product_delete'];
  $extract_SKU=implode(',',$product);
  echo $extract_SKU;
}
