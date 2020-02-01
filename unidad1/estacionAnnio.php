<?php
/**
 *  Cabecera en función de la estación del año
 * @author Francisco José Sánchez Romero
 * 
 */
$dia = 9;
$mes = 30;
echo "Fecha: ".$dia."/".$mes;
echo "<br/>"; 
if($mes >= 1 && $mes <=3 && $dia<20){
   echo '<img src="images/invierno.jpg"/>';
} else if($mes >=3 && $mes <=6 && $dia<21){
    echo '<img src="images/primavera.jpg"/>';
} else if($mes >=6 && $mes <=9 && $dia<23){
    echo '<img src="images/verano.jpg"/>';
    //<?php echo "<img src=\"".$imagen."\"/>"
}else{
    echo '<img src="images/otonnio.jpg"/>';
}
echo "<br/>"; 
echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/unidad1","unidad1",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>";   
   

?>
