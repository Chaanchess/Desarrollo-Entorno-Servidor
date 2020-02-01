<?php
//require_once "app/models/Perro.php";
//require_once "app/models/Persona.php";
require_once "vendor/autoload.php";

use App\models\Perro;
use App\models\Persona;

$perro = new Perro("Kira","Negro");
echo $perro->darPata();
echo $perro->entrenar();
echo $perro->entrenar();
echo $perro->entrenar();
echo $perro->entrenar();
echo $perro->entrenar();
echo $perro->darPata();
?>