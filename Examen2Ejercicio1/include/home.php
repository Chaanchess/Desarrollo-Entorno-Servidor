<?php
include "include/arrays.php";
$prefencias="";
echo "<h1>Estos son sus intereses</h1>";

if(isset($_COOKIE["preferencias"])){
    $prefencias=json_decode($_COOKIE['preferencias'], true);
    foreach ($prefencias as $key => $value) {
            foreach ($noticias[$value] as $key => $valor) {
                echo $valor;
                echo "<br>";  
            }
    }
}

if(isset($_POST["enviar"])){
    if(isset($_POST["preferencias"])){
        $prefencias=$_POST["preferencias"];
        setcookie("preferencias", json_encode($prefencias), time() + 3600);
    }
    

}
?>