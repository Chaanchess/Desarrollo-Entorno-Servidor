<?php

/**
 * @author Francisco José Sánchez Romero
 * @descripcion Mostrar en una tabla el array con el horario de clase
 * @fecha 18/11/2019
 */

$arrayClases = array(
    "DWES" => array(
        "nombre" => "Desarrollo web en entorno servidor",
        "profesor" => "José Aguilera",
        "horario" => array(
            array("Dia" => "Lunes", "Hora" => "3ª"),
            array("Dia" => "Lunes", "Hora" => "4ª"),
            array("Dia" => "Martes", "Hora" => "5ª"),
            array("Dia" => "Martes", "Hora" => "6ª"),
            array("Dia" => "Jueves", "Hora" => "3ª"),
            array("Dia" => "Jueves", "Hora" => "4ª"),
            array("Dia" => "Viernes", "Hora" => "3ª"),
            array("Dia" => "Viernes", "Hora" => "4ª"),
        )
    ),
    "HLC" => array(
        "nombre" => "Desarrollo Android",
        "profesor" => "José Aguilera",
        "horario" => array(
            array("Dia" => "Martes", "Hora" => "3ª"),
            array("Dia" => "Martes", "Hora" => "4ª"),
            array("Dia" => "Miércoles", "Hora" => "6ª"),
        )
    ),
    "DIW" => array(
        "nombre" => "Desarrollo de Interfaces Web",
        "profesor" => "Jaime",
        "horario" => array(
            array("Dia" => "Lunes", "Hora" => "5ª"),
            array("Dia" => "Lunes", "Hora" => "6ª"),
            array("Dia" => "Martes", "Hora" => "1ª"),
            array("Dia" => "Martes", "Hora" => "2ª"),
            array("Dia" => "Jueves", "Hora" => "1ª"),
            array("Dia" => "Jueves", "Hora" => "2ª"),
        )
    ),
    "DEC" => array(
        "nombre" => "Desarrollo en Entorno Cliente",
        "profesor" => "Lourdes",
        "horario" => array(
            array("Dia" => "Lunes", "Hora" => "1ª"),
            array("Dia" => "Lunes", "Hora" => "2ª"),
            array("Dia" => "Miércoles", "Hora" => "4ª"),
            array("Dia" => "Miércoles", "Hora" => "5ª"),
            array("Dia" => "Viernes", "Hora" => "5ª"),
            array("Dia" => "Viernes", "Hora" => "6ª"),
        )
    ),
    "DAW" => array(
        "nombre" => "Despliegue de aplicaciones Web",
        "profesor" => "Mari Carmen Tripiana",
        "horario" => array(
            array("Dia" => "Miércoles", "Hora" => "3ª"),
            array("Dia" => "Jueves", "Hora" => "5ª"),
            array("Dia" => "Jueves", "Hora" => "6ª"),
        )
    ),
    "EINEM" => array(
        "nombre" => "Empesa e Iniciativa Emprendedora",
        "profesor" => "Belén",
        "horario" => array(
            array("Dia" => "Miércoles", "Hora" => "1ª"),
            array("Dia" => "Miércoles", "Hora" => "2ª"),
            array("Dia" => "Viernes", "Hora" => "1ª"),
            array("Dia" => "Viernes", "Hora" => "2ª"),
        )
    )

);

$arrayDias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];

function horarioDia($dia, $arrayPrincipal)
{
    $asignaturas = [];
    foreach ($arrayPrincipal as $asignatura => $array) {
        foreach ($array["horario"] as $key => $value) {
            if ($value["Dia"] == $dia) {
                if ($value["Hora"] == "1ª") {
                    $asignaturas[0] = $asignatura;
                }
                if ($value["Hora"] == "2ª") {
                    $asignaturas[1] = $asignatura;
                }
                if ($value["Hora"] == "3ª") {
                    $asignaturas[2] = $asignatura;
                }
                if ($value["Hora"] == "4ª") {
                    $asignaturas[3] = $asignatura;
                }
                if ($value["Hora"] == "5ª") {
                    $asignaturas[4] = $asignatura;
                }
                if ($value["Hora"] == "6ª") {
                    $asignaturas[5] = $asignatura;
                }
            }
        }
    }
    return $asignaturas;
}

echo "<h1>Horario 2º DAW</h1>";
echo "<table border='2px'>";
echo "<tr>";
echo "<th></th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th>";
echo "</tr>";
for ($i = 0; $i <= 5; $i++) {
    echo "<tr>";
    echo "<th>" . ($i + 1) . "ª hora</th>";
    for ($j = 0; $j < sizeof($arrayDias); $j++) {
        $clase = horarioDia($arrayDias[$j], $arrayClases);
        echo "<td align='center'>" . $clase[$i] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<br>";
echo "<h2>Leyenda del curso</h2>";
foreach ($arrayClases as $key => $value) {
    echo $key . ": ";
    foreach ($value as $key => $value) {
        if ($key == "nombre") {
            echo $value . " => ";
        } else if ($key == "profesor") {
            echo $value . "<br>";
        }
    }
}

echo "<br>";
echo "<h3>Francisco José Sánchez Romero</h3>";
?>