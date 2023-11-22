<?php
namespace App\Models;

class Human {
    private $name;
    private $type;
    private $speed;
    private $strength;
    private $life;
    protected $population = 0;

    public function __construct($name, $type = 'Human', $speed = 5, $strength = 50, $life = 0) {
        $this->name = $name;
        $this->type = $type;
        $this->speed = $speed;
        $this->strength = $strength;
        $this->life = $life;
        $population ++;
    }

    //getters 
    public function __get($name){
        return this->name;
    }

    public function __get($type){
        return this->type;
    }

    public function __get($speed){
        return this->speed;
    }

    public function __get($strength){
        return this->strength;
    }

    public function __get($life){
        return this->life;
    }

    public function __get($mechanical_parts){
        return this->mechanical_parts;
    }

    public function __get($population){
        return $population;
    }

    //setters
    public function __set($name){
        this->name = $name;
    }
    public function __set($type){
       this->type = $type;
    }

    public function __set($speed){
        this->speed = $speed;
    }

    public function __set($strength){
        this->strength = $strength;
    }

    public function __set($life){
        this->life = $life;
    }

    public function __set($mechanical_parts){
        this->mechanical_parts = $mechanical_parts;
    }

    //toString
    public function __toString(){
        $message = "El " . $this->type . " con nombre " . $this->name . " tiene los siguientes atributos:\n";
        $message += "Atributo speed con valor: " . $this->speed . "\n";
        $message += "Atributo strength con valor: " . $this->strength . "\n";
        $message += "Atributo life con valor: " . $this->life . "\n";
        $message += "Atributo " . $this->speed . " con valor: " . $this->life . "\n";
        
    }
}

?>