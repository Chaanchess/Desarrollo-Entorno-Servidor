<?php
$errorNombre="";
$errorNota="";
$nombre="";
$nota=0;
if (!isset($_REQUEST["submit"]) || empty($_REQUEST["nombre"]) || $_REQUEST["nota"]<0 || $_REQUEST["nota"]>10){
    echo "<form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>";
    echo "Nombre del alumno: ";
    echo "<br/>";
    if(empty($_REQUEST["nombre"])){
        echo "<input type='text' name='nombre' value='".$nombre."'>";
    }else{
        $nombre=$_REQUEST["nombre"];
        echo "<input type='text' name='nombre' value='".$nombre."'><br/>";
    }
    
    if(empty($nombre)){
        $errorNombre=" Campo obligatorio<br/>";
        echo $errorNombre;
    }
    echo "<br/>";
    echo "Nota: ";
    echo "<br/>";
    if(empty($_REQUEST["nota"])){
        $nota=$nota;
        echo "<input type='number' name='nota' value='".$nota."'><br/>";
    }else{
        $nota=$_REQUEST["nota"];
        echo "<input type='number' name='nota' value='".$nota."'>";
    }

    if($nota<0 || $nota>10){
        $errorNota=" La nota debe de ser entre 1 y 10";
        echo $errorNota;
    }
    echo "<br/>";
    echo "<br/><input type='submit' name='submit' value='Enviar'>";
echo "</form>";
}else{
    $nombre=$_REQUEST["nombre"];
    echo "El nombre el alumno es: ".$nombre."";
    echo "<br>";
    
    $nota=$_REQUEST["nota"];
    
    echo "Su nota es: ".$nota."";
    echo "<br>";
}
?>