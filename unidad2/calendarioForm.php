<?php
/**
 * @author Fco. José Sánchez Romero
 */

$Error=false;
$errorMes="";
$errorAnnio="";
$mes = "";
$annio = "";
$diasMes = "";
$primerDiaMes = "";
$comienzoMes = "";
$contadorColumnas = 0;

    if (isset($_POST["submit"])) {
        if (empty($_POST["annio"])) {
            $errorAnnio = " Debes de seleccionar un año.";
            $Error = true;
        }else{
            $annio = $_POST["annio"];
        }
    
        if (empty($_POST["mes"])) {
            $errorMes = " Debes de seleccionar un mes";
            $Error = true;
        }else{
            $mes = $_POST["mes"];
        }
    }

    if(!isset($_POST["submit"]) || $Error){
        echo "<h3>Selecciona un mes y un año</h3>";
        echo "<form action=".htmlspecialchars($_SERVER['PHP_SELF'])." method='post'>";
        echo "Mes: ";
        echo "<select id='mes' name='mes' value='".$mes."'>";
        for ($i = 1; $i <= 12; $i++) {
            echo "<option value='".$i."'>".$i."</option>";
        }
        echo "</select><br/>";
        echo "<br/>";
        echo "Año: ";
        echo "<select id='annio' name='annio'>";
        for ($i = 2000; $i <= 2050; $i++) {
            echo "<option value='".$i."'>".$i."</option>";
        }
        echo "</select><br/>";
        echo "<br/>";
        echo "<input type='submit' name='submit' value='Mostrar calendario'><br/>";
        echo "<br/>";
        echo "<p>".$errorMes."</p>";
        echo "<p>".$errorAnnio."</p>";
        echo "</form>";

    }else{
        $primerDiaMes = strtotime($annio."-".$mes."-01");
        $comienzoMes = date("N",$primerDiaMes);
        $contadorColumnas = 0;
        $diasMes = cal_days_in_month(CAL_GREGORIAN,$mes,$annio);
        echo "<table border='2px'>";
        echo "<tr><td colspan='7' align='center'>Mes:".$mes." Año: ".$annio."</td></tr>";
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
        
    }

    echo "<a href=../"."verCodigo.php?src=".str_replace("/unidad2","unidad2",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 

    
   
?>