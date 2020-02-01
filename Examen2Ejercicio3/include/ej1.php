<?php
session_start();
if($_SESSION["perfil"]=="ej1" or $_SESSION["perfil"]=="admin"){
    echo "<h1>Bienvenido al acceso del ejercicio 1</h1>";
   
}else{
    header("Location: index.php");
}


?>