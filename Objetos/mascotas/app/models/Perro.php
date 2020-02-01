<?php
namespace App\models;
class Perro{
    private $_color;
    private $_nombre;
    private $_habilidad;
    private $_sociabilidad;

    public function __contruct($nombre, $color){
        $this->_nombre=$nombre;  
        $this->_color=$color;
        $this->_habilidad=0;
        $this->_sociabilidad=5;
    }

    public function entrenar(){
        echo "<br/>Has entrenado al perro para que te de la patita<br/>";
        if($this->_habilidad<=100){
            $this->_habilidad++;
        }else{
            echo "El perro está demasiado cansado de entrenar y te va a hacer caso siempre. PESAO";
        }
    }

    public function darPata(){
        echo "<br/>Dame la patita";
        $mensajePerro="<br/>¿GUAU? *el perro ".$this->_nombre." no sabe dar la patita*<br/>";
        if($this->_habilidad >= 5){
            $mensajePerro="<br/>¡GUAU! *el perro ".$this->_nombre." te da la patita*";
        }
        return $mensajePerro;
    }
}


?>