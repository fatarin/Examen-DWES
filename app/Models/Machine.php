<?php
namespace App\Models;

class Machine extends Human{
    private $autonomy;
    public function __construct($name, $type, $speed, $strength, $life, $autonomy){
        this->autonomy = $autonomy;
        parent::__construct(name, $type, $speed, $strength, $life);
    }

    use Wear;
}
?>