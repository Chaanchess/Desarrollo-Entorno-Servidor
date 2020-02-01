<?php
session_start();
echo '<ul>';
if($_SESSION["perfil"]=="Invitado"){
    echo '<li><a href="index.php?page=home">Inicio</a></li>';
}
if($_SESSION["perfil"]=="ej1"){
    echo '<li><a href="index.php?page=home">Inicio</a></li>';
    echo '<li><a href="index.php?page=ej1">Zona ej1</a></li>';
    echo '<li><a href="index.php?page=cerrar">Salir</a></li>';
}

if($_SESSION["perfil"]=="ej2"){
    echo '<li><a href="index.php?page=home">Inicio</a></li>';
    echo '<li><a href="index.php?page=ej2">Zona ej2</a></li>';
    echo '<li><a href="index.php?page=cerrar">Salir</a></li>';
}

if($_SESSION["perfil"]=="admin"){
    echo '<li><a href="index.php?page=home">Inicio</a></li>';
    echo '<li><a href="index.php?page=ej1">Zona ej1</a></li>';
    echo '<li><a href="index.php?page=ej2">Zona ej2</a></li>';
    echo '<li><a href="index.php?page=cerrar">Salir</a></li>';
}
echo '</ul>';
