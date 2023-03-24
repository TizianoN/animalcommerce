<?php 

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Traits/Weightable.php";

class ProductBed extends Product {
  use Weightable;

  public $material;

  public function __construct(
    string $name,
    float $price,
    Category $category,
    string $weight_unit,
    int $weight,
    string $material
  )
  {
    parent::__construct($name, $price, $category);

    $this->weight_unit = $weight_unit;
    $this->weight = $weight;
    $this->material = $material;
  }
  
  public function getTextClassname() {
    return "Cuccia";
  }
}