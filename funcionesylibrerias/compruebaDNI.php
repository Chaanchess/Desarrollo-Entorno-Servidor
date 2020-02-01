<?php

/**
 * @titulo Comprobar DNI
 * @descripcion Hacer una función que comprueba que el DNI introducido es correcto
 * @author Fco. José Sánchez Romero
 * @fecha 21/10/2019
 */

$error = "";
$dni = "";
$letra="";

if(isset($_POST["submit"])){
    $dni = $_POST["dni"];
    if(empty($_POST["dni"]) || strlen($_POST["dni"]) != 9){
        $error = "El DNI introducido no es válido";
    }else{
        if(compruebaDNI($dni)){
            echo "El DNI es correcto";
        }else{
            echo "El DNI no es correcto";
        }
    }
}
echo '<form action="'.htmlspecialchars($_SERVER['PHP_SELF']).'" method="post">';
echo '<p>Introduce tu DNI <input type="text" name="dni" value="'.$dni.'"/> <span">'.$error.'</span></p>';
echo '<input type="submit" name="submit" value="Comprobar"/>';
echo '</form>';
echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/funcionesylibrerias","funcionesylibrerias",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 



function compruebaDNI($dni){
    $letras = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T');
    $letra=substr(strtoupper($dni), -1);
    if($letra==$letras[substr ($dni, 0, strlen($dni) - 1) % 23]){
        return true;
    }else{
        return false;
    }
}