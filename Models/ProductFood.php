<?php 

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Traits/Weightable.php";
require_once __DIR__ . "/Traits/Typeable.php";

class ProductFood extends Product {
  use Weightable;
  use Typeable;

  public function __construct(
    string $name,
    float $price,
    Category $category,
    string $weight_unit,
    int $weight,
    string $type
  )
  {
    parent::__construct($name, $price, $category);

    $this->weight_unit = $weight_unit;
    $this->weight = $weight;
    $this->type = $type;
  }

  public function getTextClassname() {
    return "Cibo";
  }
}