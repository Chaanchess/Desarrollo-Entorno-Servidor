<?php
/**
 * @titulo Sumar numeros de manera dinámica
 * @descripcion Ejemplo de formulario con suma
 * @author Fco. José Sánchez Romero
 * @fecha 14/10/2019
 */

    function limpiaCampo($campo){
        $campo = trim($campo);
        $campo = stripslashes($campo);
        $campo = htmlspecialchars($campo);
        return $campo;
    }

    //Valores inciales
    $procesaFormulario=false;
    $ctdNumeros=0;
    $msgError=$clase_error="";

    $sumaFormulario=false;
    $valores=array();
    $clase_errorSumandos=array();
    $msgErrorSumandos=array();

    if(isset($_POST["enviar"])){
        $procesaFormulario=true;
        $ctdNumeros=limpiaCampo($_POST["ctdnumeros"]);
        if($ctdNumeros<=0){
            $msgError=" Introduzca un número mayor que 0";
            $clase_error="clase_error";
            $procesaFormulario=false;
        }
        if(empty($ctdNumeros)){
            $msgError=" El número no puede estar vacío";
            $clase_error="clase_error";
            $procesaFormulario=false;
        }
    }

    //inicializacion de segundo formulario
    if($procesaFormulario){
        for($i=1;$i<=$ctdNumeros;$i++){
            $valores[]=0;
            $clase_errorSumandos[]=$msgErrorSumandos[]="";

        }
    }

    if(isset($_POST["sumar"])){
        $ctdNumeros=$_POST["ctdnumeros"];
        $valores=$_POST["numeros"];
        $procesaFormulario=true;
        $sumaFormulario=true;
        for($i=0;$i<count($valores);$i++){
            $msgErrorSumandos[$i]=$clase_errorSumandos[$i]="";
            if(empty($valores[$i])){
                $sumaFormulario=false;
                $msgErrorSumandos[$i]=" El número ".($i+1)." no puede estar vacío";
                $clase_errorSumandos[$i]="clase_error";
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suma de numeros con formulario</title>
    <link rel="stylesheet" href="estilos.css">
</head>


<body>
<h1>Suma de números</h1>
<section>
<?php
echo "<form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>";
echo "<input type='number' name='ctdnumeros' value='".$ctdNumeros."'>";
echo "<span class='".$clase_error."'>".$msgError."</span>";
echo "<br/>";
echo "<br/><input type='submit' value='Enviar' name='enviar'>";
echo "</form>";
echo "<br/>";
echo "<br/>";

?>
</section>

<section>
<?php

if($procesaFormulario){
    echo "<form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>";
    for($i=0;$i<$ctdNumeros;$i++){
        echo "Número ".($i+1)." = ";
        echo "<input type='number' name='numeros[]' value='".$valores[$i]."'";
        echo "<span class='".$clase_errorSumandos[$i]."'>".$msgErrorSumandos[$i]."</span>";
        echo "<br/>";
    }
    echo "<input type='hidden' value='".$ctdNumeros."' name='ctdnumeros'>";
    echo "<br/>";
    echo "<input type='submit' value='Sumar' name='sumar'>";
    echo "</form>";
    echo "<br/>";
}

if($sumaFormulario){
    echo "Resultado de la suma = ".array_sum($_POST["numeros"]);
}
    echo "<br/>";

?>
</section>
<?php
echo "<a href=../"."verCodigo.php?src=".str_replace("/unidad2","unidad2",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>";
?>
    
</body>


</html>