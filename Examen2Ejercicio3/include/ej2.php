<?php
session_start();
if($_SESSION["perfil"]=="ej2" or $_SESSION["perfil"]=="admin"){
    echo "<h1>Bienvenido al acceso del ejercicio 2</h1>";
}else{
    header("Location: index.php");
}


?>