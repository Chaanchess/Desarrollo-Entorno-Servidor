<?php
/**
 * @author Francisco José Sánchez Romero
 * @descripcion Realizar el buscaminas
 * @fecha 21/11/2019
 */
session_start();

const N_FILAS = 10;
const N_COLUMNAS = 10;
const N_MINAS = 10;
$nDescubiertas=0;

if (!isset($_SESSION['tablero'])) {
    $_SESSION['tablero'] = array();
    $_SESSION['visible'] = array();
    crearTablero();
    generarMinas();
    $_SESSION['nDescubiertas'] = 0;

}

if (isset($_GET["fila"]) && isset($_GET["columna"])) {
    clickCasilla($_GET["fila"], $_GET["columna"]);
}

echo "<h1>Buscaminas</h1>";

pintarTablero();

function crearTablero(){
    for ($fila = 0; $fila < N_FILAS; $fila++) {
        for ($columna = 0; $columna < N_COLUMNAS; $columna++) {
            $_SESSION['tablero'][$fila][$columna] = 0;
            $_SESSION['visible'][$fila][$columna] = 0;
        }
    }
}


function pintarTablero()
{
    echo "<table style='border:1px solid black'>";
    for ($fila = 0; $fila < N_FILAS; $fila++) {
        echo '<tr>';
        for ($columna = 0; $columna < N_COLUMNAS; $columna++) {
            if ($_SESSION["visible"][$fila][$columna] == 1) {
                $num = $_SESSION["tablero"][$fila][$columna];
                if ($num == 0) {
                    echo "<td style='border:1px solid black; width:50px; height:50px;text-align:center;text-size:20px;'>";
                } else if ($num == -1) {
                    echo "<td style='border:1px solid black;  width:50px; height:50px;text-align:center'><img src='mina.jpg' width='20px' heigth='20px'></td>";
                } else {
                    echo "<td style='border:1px solid black;  width:50px; height:50px;text-align:center'>" . $num . "</td>";
                }

            } else {
                echo "<td style='background-color:#9c9c9c;border:1px solid black; width:50px; height:50px;text-align:center;'>
                  <a href=\"buscaminas.php?fila=$fila&columna=$columna\" style='display: block;width: 100%;height:100%;text-decoration: none; color: gray'>&nbsp</a></td>";
            }
            
        }
        echo "</tr>";
    }
    echo "</table>";
}

function generarMinas() {

    $contador = 0;
    while ($contador < N_MINAS) {
        do {
            $fila = rand(0, N_FILAS - 1);
            $columna = rand(0, N_COLUMNAS - 1);
        } while ($_SESSION['tablero'][$fila][$columna] == -1);

        $_SESSION['tablero'][$fila][$columna] = -1;

        for ($i = max(0,$fila - 1); $i <= min(N_FILAS - 1,$fila + 1); $i++) {
            for ($j = max(0, $columna - 1); $j <= min( N_COLUMNAS - 1,$columna + 1); $j++) {
                if ($_SESSION['tablero'][$i][$j] != -1) {
                    $_SESSION['tablero'][$i][$j]++;
                }
            }
        }
        $contador++;
    }
}

function clickCasilla($fila, $columna)
{
    if ($_SESSION["visible"][$fila][$columna] == 0) {
        $_SESSION["visible"][$fila][$columna] = 1;
        $_SESSION['nDescubiertas']++;
        if ($_SESSION["tablero"][$fila][$columna] == -1) {
            echo "<h2>HAS PERDIDO</h2>";
            echo '<li><a href="cierresesion.php">VOLVER A JUGAR</a></li>';
        } else if (substr($_SESSION['nDescubiertas'], -2) == 90) {
            echo "<h2>HAS GANADO</h2>";
        }   else if ($_SESSION["tablero"][$fila][$columna] == 0) {
            for ($j = max(0,$fila - 1); $j <= min(N_FILAS - 1,$fila + 1); $j++) {
                for ($k = max(0,$columna - 1); $k <= min(N_COLUMNAS - 1,$columna + 1); $k++) {
                    clickCasilla($j, $k);
                }
            }

        }

    }
}


echo "<br>";
echo '<li><a href="cierresesion.php">Cerrar sesión</a></li>';
echo "<h4>Creado por Francisco José Sánchez Romero</h4>"


?>