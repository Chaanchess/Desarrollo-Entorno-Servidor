<?php
session_start();
if(!$_SESSION["aut"]){
    header("Location: index.php");
}else{
    echo "<h1>Bienvenido a la zona privada</h1>";
}


?>