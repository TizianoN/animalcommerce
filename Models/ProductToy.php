<?php 

require_once __DIR__ . "/Product.php";

class ProductToy extends Product {
  public $material;

  public function __construct(
    string $name,
    float $price,
    Category $category,
    string $material
  )
  {
    parent::__construct($name, $price, $category);

    $this->material = $material;
  }

  public function getTextClassname() {
    return "Giocattolo";
  }
}