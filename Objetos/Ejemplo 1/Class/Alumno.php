<?php
require_once "Persona.php";
class Alumno extends Persona{
    private $_nie;

    public function saluda(){
        echo "<br>";
        echo parent::saluda();
        echo " soy un alumno<br>";
    }
}
?>