<?php
/**
 *  Enviar datos de un formulario
 * @author Francisco José Sánchez Romero
 * @fecha 03/10/2019
 */
$datosPersonales=
array(
    "Nombre",
    "Apellidos",
    "Direccion"
);

echo "<form method='post' action='mostrarFormulario2.php'>";
foreach($datosPersonales as $dato){
    echo $dato.": ";
    echo "<input type='text' name='".$dato."'/><br/>";
    echo "<br/>";
}
echo "<input type='submit' name='enviar' />";
echo "</form>";
echo "<a href=../"."verCodigo.php?src=".str_replace("/unidad2","unidad2",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 
?>