<?php
session_start();



$vFecha="";
$vTarea="";
$procesaFormulario=false;
$msgError="";
$msgErrorFecha="";

$tareas=array();

if(!isset($_SESSION["tareas"])){
    $_SESSION["tareas"]=array();
}



if (isset($_POST['submit'])) {
    $procesaFormulario=true;
    $vFecha= limpiaCampo($_POST["fecha"]);
    $vTarea= limpiaCampo($_POST["tarea"]);

    if(empty($vFecha)){
        $msgErrorFecha="La fecha no puede estar vacía";
        $procesaFormulario=false;
    }

    if(empty($vTarea)){
        $msgError="La descripción no puede estar vacía";
        $procesaFormulario=false;
    }
}

echo "<form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>";
echo "Fecha: ";
echo "<br/>";
echo "<input type='text' name='fecha' value='".$vFecha."'<span>".$msgErrorFecha."</span>";
echo "<br/>";
echo "<br/>";

echo "Tarea: ";
echo "<br/>";
echo "<input type='text' name='tarea' value='".$vTarea."'><span>".$msgError."</span>";

echo "<br/><input type='submit' name='submit' value='Enviar'><br/>";
echo "</form>";

if($procesaFormulario){
    $_SESSION["tareas"][] = array("fecha"=>$vFecha,"tarea"=>$vTarea);

    foreach($tareas as $clave => $valor){
        echo $valor["fecha"]."--->".$valor["tarea"]."<br/>";
    }
}

function limpiaCampo($campo)
{
    $campo = trim($campo);
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
}

?>