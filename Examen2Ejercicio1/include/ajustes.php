<?php
include "include/arrays.php";
echo "<h1>Seleccione sus preferencias</h1>";
echo "<form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>";
foreach($noticias as $key=>$value){
    echo "<input type='checkbox' name='preferencias[]' value=".$key.">".$key."";
    echo "<br/>";
}
echo "<br><input type='submit' name='enviar' value='Guardar preferencias'/>";
echo "</form>";
?>