<?php
/**
 *  Calcular el número mayor
 * @author Francisco José Sánchez Romero
 * 
 */
$numero1 = 11;
$numero2 = 9;
if($numero1 > $numero2){
    echo "El número ".$numero1." es mayor que el número ".$numero2;
}else{
    echo "El número ".$numero1." es menor que el número ".$numero2;
}
echo "<br/>"; 
echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/unidad1","unidad1",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 
?>