<?php 

class Category {
  protected $name;
  public $icon;
  
  private static $accepted_categories = [
    "Cane",
    "Gatto"
  ];

  public function __construct($name, $icon)
  {
    $this->icon = $icon;

    try {
      if(!$this->setName($name)) throw new Exception("Invalid argument 'name' for 'Category' class. It must be a string and within the accepted_categories array");
    } catch (Exception $e) {
      $error_message = $e->getMessage();
      include __DIR__ . "/../error_page.php";
      exit;
    }    
  }

  public function setName($name) {
    if(!is_string($name) || !in_array($name, self::$accepted_categories)) return false;
    $this->name = $name;
    return $this;
  }

  public function getName() {
    return $this->name;
  }
}