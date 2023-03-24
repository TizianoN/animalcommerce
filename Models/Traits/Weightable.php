<?php 

trait Weightable {
  protected $weight_unit;
  protected $weight;

  public function getFullWeight() {
    return "$this->weight $this->weight_unit";
  }
} 