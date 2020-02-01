<?php
/**
 * @author Francisco José Sánchez Romero
 * @descripcion Crear un formulario que controle los campos introducidos e indique errores en caso de que los haya.
 */
$nombre = "";
$nota = "";
$Error=false;
$errorNombre="";
$errorNota="";
if (isset($_POST["submit"])) {
    if (empty($_POST["nombre"])) {
        $errorNombre = " El campo nombre es obligatorio";
        $Error = true;
    } else {
        $nombre = limpiaCampo($_POST["nombre"]);
    }

    if (empty($_POST["nota"])) {
        $errorNota = " El campo nota es obligatorio";
        $Error = true;
    } elseif( ($_POST["nota"])<0 || ($_POST["nota"])>10) {
        $nota=$_POST["nota"];
        $errorNota = " La nota debe de estar comprendida entre 1 y 10";
        $Error = true;
    }else{
        $nota = limpiaCampo($_POST["nota"]);
    }
}

if (!isset($_POST["submit"]) || $Error){
    echo "<form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>";
    echo "Nombre del alumno: ";
    echo "<br/>";
    echo "<input type='text' name='nombre' value='".$nombre."'><span class='error'>".$errorNombre."</span>";//echo <option vaule=\"".$i."\">"
    echo "<br/>";
    echo "<br/>";

    echo "Nota del alumno: ";
    echo "<br/>";
    echo "<input type='number' name='nota' value='".$nota."'><span class='error'>".$errorNota."</span>";
    echo "<br/>";
    echo "<br/><input type='submit' name='submit' value='Enviar'>";
    echo "</form>";
    echo "<a href=../"."verCodigo.php?src=".str_replace("/unidad2","unidad2",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>";
}else{
    echo "El nombre el alumno es: ".$nombre."";
    echo "<br>";
    
    echo "Su nota es: ".$nota."";
    echo "<br>";
}
function limpiaCampo($campo){
    $campo = trim($campo);
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
    }

    
?>

