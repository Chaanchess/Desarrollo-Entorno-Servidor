<?php
/**
 *  Calcular días del mes
 * @author Francisco José Sánchez Romero
 * 
 */
$calendario = CAL_GREGORIAN;
$annio =2019;
$mes=7;
$diasMes = cal_days_in_month($calendario,$mes,$annio);
echo "El mes ".$mes." tiene ".$diasMes." días.";
echo "<br/>"; 
echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/unidad1","unidad1",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 
?>
