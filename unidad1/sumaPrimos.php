<?php
$contador=0;
$suma=0;
echo "Los tres primeros números primos son: ";
for ($i = 1; $contador < 3; $i++){
    if($i % 2 == 0){
        echo $i." ";
        $contador++;
        $suma+=$i;
    }
}
echo "<br/>La suma de los tres primeros primos es: ".$suma;
echo "<br/>";
echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/unidad1","unidad1",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 
?>