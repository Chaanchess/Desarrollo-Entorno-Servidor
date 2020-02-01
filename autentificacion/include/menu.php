<?php
session_start();
echo '<ul>';
echo '<li><a href="index.php?page=home">Inicio</a></li>';
if ($_SESSION["aut"]) {
    echo '<li><a href="index.php?page=privado">Zona Privada</a></li>';
    echo '<li><a href="index.php?page=cerrar">Salir</a></li>';
}
echo '</ul>';

?>