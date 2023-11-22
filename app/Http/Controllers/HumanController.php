<?php

namespace APP\Http\Controllers;

use App\Models\Human;
use App\Models\Ciborg;
use App\Models\Biological;
use App\Models\Machine;
use App\Models\Wear;

class HumanController extends Controller{

    $humanos = [];
    
    public function inicilizaHumanos(){
        $human1 = new Ciborg("XJ-10", "Ciborg", 50, 200, 0, ["1"=>"brazo", "2"=>"pierna"]);
        $humanos.push($human1);
        $human2 = new Biological("Xena", "Bilogical", 150, 50, 0, "female");
        $humanos.push($human2);
        $human3 = new Machine("Borg", "Machine", 20, 100, 0, 100);
        $humanos.push($human3);
        return $humanos;
    }

    public function index(){
        $lista = inicilizaHumanos();
        $poblacion_total = Human->__get($population);
        return view('index.blade.php', compact('lista', 'poblacion_total'));
    }

    public function create($type){
        $lista = inicilizaHumanos();
        $inputs = [];
        for($tipo as $lista){
            if($tipo->type == $type){
                $input_name = ('name' => ['type' => 'text', 'label' => 'Nombre', 'placeholder' => 'Nombre']);
                $inputs.push($input_name);
                $input_type = ('type' => ['type' => 'text', 'label' => 'Tipo', 'placeholder' => 'Ciborg']);
                $inputs.push($input_type);
                $input_speed = ('speed' => ['type' => 'number', 'label' => 'Velocidad', 'placeholder' => '100']);
                $inputs.push($input_speed);
                $input_strength = ('strength' => ['type' => 'number', 'label' => 'Fuerza', 'placeholder' => '100']);
                $inputs.push($input_strength);
                $input_life = ('life' => ['type' => 'number', 'label' => 'Vida', 'placeholder' => '100']);
                $inputs.push($input_gender);
                if($tipo->type === "Ciborg"){
                    $input_mechs = ('mechanical_parts' => ['type' => 'text', 'label' => 'Partes mecánicas', 'placeholder' => 'Brazo']);
                    $inputs.push($input_mechs);    
                }
                if($tipo->type === "Biological"){
                    $input_gender = ('gender' => ['type' => 'text', 'label' => 'Género', 'placeholder' => 'Masculino']);
                    $inputs.push($input_geder);
                    }
                if($tipo->type === "Machine"){
                    $input_autonomy = ('Machine' => ['type' => 'number', 'label' => 'Autonomia', 'placeholder' => '100']);
                    $inputs.push($input_autonomy);
                 }
                
            }
        }
        return view('create.blade.php', compact('inputs'));
    }

    public function store(){
        /* aquí las acciones del metodo store */
    }

    public function lifeOrDeath(){
        /* aquí las acciones del metodo lifeOrDeath */
    }

}






?>