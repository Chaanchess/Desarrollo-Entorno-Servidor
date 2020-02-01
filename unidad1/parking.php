<?php
/**
 *  Devuelve dinero en billetes y monedas
 * @author Francisco José Sánchez Romero
 * 
 */
$entrada = 5;
$salida = 7.5;
$precio = 2.75;
$dineroPagado = 20;
$dineroPagadoCentimos= 2000;
$totaltiempo = $salida-$entrada;
$precioTotal = round($totaltiempo) * $precio;
$dineroDevuelto = $dineroPagado-$precioTotal;
$dineroDevuletoCentimos = $dineroDevuelto * 100;
$billete10 = $dineroDevuletoCentimos / 1000;
$restoBillete10 = $dineroDevuletoCentimos % 1000;
$billete5 = $restoBillete10 / 500;
$restoBillete5 = $restoBillete10 % 500;
$moneda2euros = $restoBillete5 / 200;
$restomoneda2euros = $restoBillete5 % 200;
$moneda1euro = $restomoneda2euros / 100;
$restomoneda1euro = $restomoneda2euros % 100;
$moneda50 = $restomoneda1euro / 50;
$restomoneda50 = $restomoneda1euro % 50;
$moneda20 = $restomoneda50 / 20;
$restomoneda20 = $restomoneda50 % 20;
$moneda10 = $restomoneda20 / 10;
$restomoneda10 = $restomoneda20 % 10;
$moneda5 = $restomoneda10 / 5;
$restomoneda5 = $restomoneda10 % 5;
$moneda2 = $restomoneda5 / 2;
$restomoneda2 = $restomoneda5 % 2;
$moneda1 = $restomoneda2 / 1;
$restomoneda1 = $restomoneda2 % 1;

echo "Hora Entrada: ".$entrada;
echo "<br>";
echo "Salida: ".$salida;
echo "<br>";
echo "Coste: ".$precio."€/hora";
echo "<br>";
echo "RESULTADO FINAL:";
echo "<br>";
echo "----------------------------";
echo "<br>";
echo "Tiempo en el parking: ".$totaltiempo." horas.";
echo "<br>";
echo "Debes de pagar por ".round($totaltiempo)." horas.";
echo "<br>";
echo "Dinero a pagar: ".$precioTotal."€";
echo "<br>";
echo "Usted ha pagado: ".$dineroPagado."€";
echo "<br>";
echo "Se le va a devolver: ".$dineroDevuelto."€";
echo "<br>";
echo "Billete de 10€: ".floor($billete10)." billete/s.";
echo "<br>";
echo "Billete de 5€: ".floor($billete5)." billete/s.";
echo "<br>";
echo "Moneda de 2€: ".floor($moneda2euros)." moneda/s.";
echo "<br>";
echo "Moneda de 1€: ".floor($moneda1euro)." moneda/s.";
echo "<br>";
echo "Moneda de 50 cent.: ".floor($moneda50)." moneda/s.";
echo "<br>";
echo "Moneda de 20 cent.: ".floor($moneda20)." moneda/s.";
echo "<br>";
echo "Moneda de 10 cent.: ".floor($moneda10)." moneda/s.";
echo "<br>";
echo "Moneda de 5 cent.: ".floor($moneda5)." moneda/s.";
echo "<br>";
echo "Moneda de 2 cent.: ".floor($moneda2)." moneda/s.";
echo "<br>";
echo "Moneda de 1 cent.: ".floor($moneda1)." moneda/s.";
echo "<br/>"; 
echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/unidad1","unidad1",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 
?>