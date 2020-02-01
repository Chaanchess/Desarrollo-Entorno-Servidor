<?php
class Mascota{
    private $_nombre;
    private $_fechaNacimiento;
    public static $contador;

    public function __construct($nombre, $fechaNacimiento){
        $this->_nombre=$nombre;
        $this->_fechaNacimiento=$fechaNacimiento;
        self::$contador++;
    }


    public function infoMascota(){
        return "La mascota número ".self::$contador." tiene de nombre: ".$this->_nombre." y nació el: ".$this->_fechaNacimiento."<br>";  
    }
}
?>