<?php
/**
 *  Mostrar un formulario recorriendo los campos de un array
 * @author Francisco José Sánchez Romero
 * @fecha 03/10/2019
 */
$datosPersonales=
array(
    "Nombre",
    "Apellidos",
    "Dirección",
    "Provincia",
    "Localidad"
);

echo "<form>";
foreach($datosPersonales as $dato){
    echo $dato.": ";
    echo "<input type='text' name='nombre'/><br/>";
    echo "<br/>";
}
echo "</form>";
echo "<a href=../"."verCodigo.php?src=".str_replace("/unidad2","unidad2",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 
?>