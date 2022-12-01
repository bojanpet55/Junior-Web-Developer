<?php
class ViewProduct extends User
{


  public function printAllProducts()
  {
    $datas = $this->getAllProducts();


    foreach ($datas as $data){
      echo $data['name'];
    }
  }
}
