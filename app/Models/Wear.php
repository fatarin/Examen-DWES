<?php
namespace App\Models;

trait Wear{
    public function wearAway(){
        $wear = 0;

        if($this->type == "ciborg") $wear = 1 + ($this->mechanical_parts.length/10);
        if($this->type == "machine") $wear = random(1, $this.autonomy);
        
        $this->life += $wear;
    }

}
?>