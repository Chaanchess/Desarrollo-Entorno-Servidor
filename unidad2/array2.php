<?php
/**
 * Indicar en que turno del dia trabajas más horas.
 * @author Francisco José Sánchez Romero
 * 
 */
$trabajo = array(
    "Lunes" => array(
        "Mañana" => 3,
        "Tarde" => 4
    ),
    "Martes" => array(
        "Mañana" => 6,
        "Tarde" => 5
    ),
    "Miércoles" => array(
        "Mañana" => 3,
        "Tarde" => 7
    ),
    "Jueves" => array(
        "Mañana" => 5,
        "Tarde" => 3
    ),
    "Viernes" => array(
        "Mañana" => 4,
        "Tarde" => 5
    ),
);

$total=0;
$horasMax =0;
$diaMax="";
$turnoMax="";
$horasDia=0;

foreach($trabajo as $dia=>$jornada) {
    foreach($jornada as $turno=>$horas){
        $total=$total+$horas;
        if($horasMax<=$horas){
            $horasMax=$horas;
            $diaMax=$dia;
            $turnoMax=$turno;
        }
    }
}
    echo "Trabajas un total de: ".$total." horas.";
    echo "<br/>";
    echo "El ".$diaMax." en el turno de ".$turnoMax." es el turno en el que más horas trabajas, ya que trabajas ".$horasMax." horas.";
    echo "<br/>";
    echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/unidad2","unidad2",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 
?>