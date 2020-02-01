<?php
$trabajo= array(
"Lunes"=>3,
"Martes"=> 8,
"Miercoles"=>5,
"Jueves"=>6,
"Vienes"=>2
);
$total=0;
$horasMax =0;
$diaMax="";

foreach($trabajo as $dia=>$hora) {
    $total=$total+$hora;
    if($horasMax <= $hora){
        $diaMax=$dia;
        $horasMax=$hora;
    }
    }
    echo "Horas totales: ".$total;
    echo "<br/>";
    echo "Dia de mas trabajo: ".$diaMax;
    echo "<br/>";
    echo "Máximo de horas trabajadas: ".$horasMax;
    echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/unidad2","unidad2",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 
?>
