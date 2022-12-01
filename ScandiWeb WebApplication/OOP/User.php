<?php
class User extends  dbConnecting
{

  public int $sku;
  public string $name;
  public float $price;

  public function __construct(string  $sku, string $name, string  $price, ) {
    $this->sku = $sku;
    $this->name = $name;
    $this->price = $price;
  }

  protected function getAllProducts()
  {
    $FurnitureSQL="SELECT it.SKU,it.name,it.price,fur.Height,fur.Width,fur.Length from items as it inner join furniture as fur on it.sku = fur.sku order by it.sku;";
    $result=$this->connect()->query($FurnitureSQL);
    $numRows = $result->num_rows;

    if($numRows>0)
    {
      while ($row=$result->fetch_assoc())
      {
        $this->sku = $row['SKU'];
        $this->name = $row['Name'];
        $this->price = $row['Price'];
      }
    }
  }


  public function getSKU(): int
  {
    return $this->sku;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getPrice(): float
  {
    return $this->price;
  }


}
