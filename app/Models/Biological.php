<?php
namespace App\Models;
class Biological extends Human{
    private $gender;
    public function __construct($name, $type, $speed, $strength, $life, $gender){
        this->gender = $gender;
        parent::__construct(name, $type, $speed, $strength, $life);
    }
}
?>