<?php
session_start();
if($_SESSION["perfil"]=="administrador"){
    echo "<h1>Bienvenido al acceso de administrador</h1>";
    
}else{
    header("Location: index.php");
}


?>