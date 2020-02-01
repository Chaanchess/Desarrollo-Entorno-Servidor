<?php
class Usuario{
    private $_nombre;
    private $_usuario;
    private $_password;
    private static $longMinimaPassword = 6;

    public function __contruct($nombre){
        $this->_nombre=$nombre;
    }

    public static function restriccion(){
        return "La longitud mínima de la clave debe de ser de ".self::$longMinimaPassword." caracteres";
    }

    private static function validatePassword($password){
        $lvalido=false;
        if(strlen($password)>=self::$longMinimaPassword){
            $lvalido=true;
        }
        return $lvalido;

    }

    public function setPassword($usuario, $password){
        $lvalido=false;
        if(self::validatePassword($password)){
            $this->_usuario=$usuario;
            $this->_password=$password;
            $lvalido=true;
        }
        return $lvalido;
    }
}
?>