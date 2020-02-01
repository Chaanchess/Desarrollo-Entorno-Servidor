<?php
/**
 *  Hola mundo
 * @author Francisco José Sánchez Romero
 * 
 */
echo "Hola mundo";
echo "<br/>"; 
echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/unidad1","unidad1",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 
?>