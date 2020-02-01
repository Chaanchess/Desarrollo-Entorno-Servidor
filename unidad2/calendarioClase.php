<?php
/**
 * @titulo Calendario
 * @descripcion Ejemplo de un calendario básico en php
 * @author Fco. José Sánchez Romero
 * @fecha 10/10/2019
 */
$arrayMeses=array(
    "Enero"=>array("ndias"=>31, 
                   "diasFestivos"=>array(1,6)
                ), 
    "Febrero"=>array("ndias"=>28, 
                     "diasFestivos"=>array(28)
                ), 
    "Marzo"=>array("ndias"=>31, 
                   "diasFestivos"=>array()
                ),
    "Abril"=>array("ndias"=>30, 
                   "diasFestivos"=>array()
                ),
    "Mayo"=>array("ndias"=>31, 
                  "diasFestivos"=>array(1)
                ),
    "Junio"=>array("ndias"=>30, 
                   "diasFestivos"=>array()
                ),
    "Julio"=>array("ndias"=>31, 
                   "diasFestivos"=>array()
                ),
    "Agosto"=>array("ndias"=>31, 
                    "diasFestivos"=>array(15)
                ),
    "Septiembre"=>array("ndias"=>30, 
                        "diasFestivos"=>array()
                ),
    "Octubre"=>array("ndias"=>31, 
                     "diasFestivos"=>array(12)
                ),
    "Noviembre"=>array("ndias"=>30, 
                       "diasFestivos"=>array(1)
                ),
    "Diciembre"=>array("ndias"=>31, 
                       "diasFestivos"=>array(6,8,12,25)
                ));


$diaActual=date("j");
$mesActual=date("n");
$annioActual=date("Y");
$confSelected="";
$errorAnnio="";
$errorMes="";
$diasMes = "";
$primerDiaMes = "";
$comienzoMes = "";
$contadorColumnas = 0;

$mesSeleccionado=$mesActual;
$annioSeleccionado=$annioActual;
$ldisplayCalendario=true;

if(isset($_POST["enviar"])){
    if(empty($_POST["mes"])){
        $ldisplayCalendario=false;

    }else{
        $mesSeleccionado=$_POST["mes"];
    }

    if(empty($_POST["annio"])){
        $ldisplayCalendario=false;
        $errorAnnio="No puedes dejar el año vacío";
    }else{
        $annioSeleccionado=$_POST["annio"];
    }
    
    
}

function mestoNumber($mes) {
    switch ($mes) {
        case "Enero":
            return 1;
            break;
        case "Febrero":
            return 2;
            break;
        case "Marzo":
            return 3;
            break;
        case "Abril":
            return 4;
            break;
        case "Mayo":
            return 5;
            break;
        case "Junio":
            return 6;
            break;
        case "Julio":
            return 7;
            break;
        case "Agosto":
            return 8;
            break;
        case "Septiembre":
            return 9;
            break;
        case "Octubre":
            return 10;
            break;
        case "Noviembre":
            return 11;
            break;
        case "Diciembre":
            return 12;
            break;
        default:
            return 0;
            break;
    }
}
//validacion


//if(esBisiesto($annioActual)){
    //$arrayMeses["Febrero"]["ndias"]=29;
//}
//Ajustar dias festivos


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendario hecho en Clase</title>
    <link rel="stylesheet" href="estilo.css">
</head>


<body>
    <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> method="post">
        <?php
        echo "Mes:";
        echo "<select name=\"mes\">";
        foreach($arrayMeses as $clave=>$valor){
            if (mestoNumber($clave) == $mesActual) {
                echo "<option value=\"".mestoNumber($clave)."\" selected>".$clave."</option>";
            } else {
                echo "<option value=\"".mestoNumber($clave)."\">".$clave."</option>";
            }
                         
           
        }
        echo "</select><br/>";
        echo "Año:";
        echo "<input type='number' value='".$annioActual."' name='annio'><br/>";
        echo "<br/>";
        echo "<input type='submit' name='enviar' value='Mostrar calendario'>";
        ?>
        
    </form>
    <?php
    if($ldisplayCalendario){
        $primerDiaMes = strtotime($annioSeleccionado."-".$mesSeleccionado."-01");
        $comienzoMes = date("N",$primerDiaMes);
        $contadorColumnas = 0;
        $diasMes = cal_days_in_month(CAL_GREGORIAN,$mesSeleccionado,$annioSeleccionado);
        echo "<table border='2px'>";
        echo "<tr><td colspan='7' align='center'>Mes:".$mesSeleccionado." Año: ".$annioSeleccionado."</td></tr>";
        echo "<tr><td>Lunes</td><td>Martes</td><td>Miércoles</td><td>Jueves</td><td>Viernes</td><td>Sábado</td><td>Domingo</td></tr>";
        echo "<tr>";
        for ($k = 1; $k < $comienzoMes; $k++) {
            echo "<td> </td>";
            $contadorColumnas++;
        }
        for ($i = 1; $i <= 35; $i++) {
            $contadorColumnas++;
            if ($contadorColumnas % 7 == 0) 
                echo "<td style='background-color:red;'>$i</td>";
            else if ($contadorColumnas % 7 == 0) 
                echo "<td style='background-color:red'>$i</td>";
            else 
                echo "<td>$i</td>";
            if ($contadorColumnas % 7 == 0) 
                echo "</tr><tr>";
            if ($i >= $diasMes) 
                return;
            }
    }else{
        echo "<br/>";
        echo "Error, no puedes dejar el año vacío";
    }
    ?>
    
</body>


</html>