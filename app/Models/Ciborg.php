<?php
namespace App\Models;

class Ciborg extends Human{
    private $mechanical_parts = [];

    public function __construct($name, $type, $speed, $strength, $life, $mechanical_parts){
        this->mechanical_parts = $mechanical_parts;
        parent::__construct(name, $type, $speed, $strength, $life);
    }

    use Wear;
    
}
?>