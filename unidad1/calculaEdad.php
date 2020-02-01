<?php
/**
 *  Calcula edad
 * @author Francisco José Sánchez Romero
 * 
 */
$fecha_nacimiento = new DateTime('1998-04-28');
$fecha_actual = new DateTime(date('d-M-y'));
$edad = $fecha_actual->diff($fecha_nacimiento);
echo "Tienes ".$edad->y." años";
echo "<br/>"; 
echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/unidad1","unidad1",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 
?>