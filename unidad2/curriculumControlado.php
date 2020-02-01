<?php
/**
 * @author Francisco José Sánchez Romero
 * @descripcion Crear un formulario para mostrar un curriculum vitae.
 * @fecha 12/10/2019
 */
$nombre = "";
$apellidos = "";
$diaNacimiento="";
$mesNacimiento="";
$annioNacimiento="";
$sexo="";
$ingles="";
$aleman="";
$frances="";
$ciudad="";
$titulos="";
$vehiculos="";

$ErrorNombre="";
$ErrorApellidos="";
$ErrordiaNacimiento="";
$ErrormesNacimiento="";
$ErrorannioNacimiento="";
$Errorsexo="";
$ErrorCiudad="";
$ErrorTitulos="";
$ErrorVehiculos="";

$Error=false;

if (isset($_POST["submit"])) {
    if (empty($_POST["nombre"])) {
        $ErrorNombre = " El campo nombre es obligatorio";
        $Error = true;
    } else {
        $nombre = limpiaCampo($_POST["nombre"]);
    }

    if (empty($_POST["apellidos"])) {
        $ErrorApellidos = " El campo apellidos es obligatorio";
        $Error = true;
    }else{
        $apellidos = limpiaCampo($_POST["apellidos"]);
    }

    if (empty($_POST["diaNacimiento"])) {
        $ErrordiaNacimiento = " El dia de nacimiento es obligatorio";
        $Error = true;
    } elseif( ($_POST["diaNacimiento"])<1 || ($_POST["diaNacimiento"])>31) {
        $diaNacimiento=$_POST["diaNacimiento"];
        $ErrordiaNacimiento = " El día debe de ser un día válido";
        $Error = true;
    }else{
        $diaNacimiento = limpiaCampo($_POST["diaNacimiento"]);
    }

    if (empty($_POST["mesNacimiento"])) {
        $ErrormesNacimiento = " El mes de nacimiento es obligatorio";
        $Error = true;
    }else{
        $mesNacimiento = limpiaCampo($_POST["mesNacimiento"]);
    }

    if (empty($_POST["annioNacimiento"])) {
        $ErrorannioNacimiento = " El año de nacimiento es obligatorio";
        $Error = true;
    } elseif( $_POST["annioNacimiento"]>2019) {
        $annioNacimiento=$_POST["annioNacimiento"];
        $ErrorannioNacimiento = " El año debe de ser un año válido";
        $Error = true;
    }else{
        $annioNacimiento = limpiaCampo($_POST["annioNacimiento"]);
    }

    if (empty($_POST["sexo"])) {
        $Errorsexo = " El campo sexo es obligatorio";
        $Error = true;
    }else{
        $sexo = limpiaCampo($_POST["sexo"]);
    }

    if (empty($_POST["ingles"])){
        $ingles=" No tengo titulación de inglés";
    }else{
        $ingles=" Tengo titulación de inglés";
    }

    if (empty($_POST["aleman"])){
        $aleman=" No tengo titulación de alemán";
    }else{
        $aleman=" Tengo titulación de alemán";
    }

    if (empty($_POST["frances"])){
        $frances=" No tengo titulación de francés";
    }else{
        $frances=" Tengo titulación de francés";
    }

    if (empty($_POST["ciudad"])) {
        $ErrorCiudad = " El campo ciudad es obligatorio";
        $Error = true;
    }else{
        $ciudad = limpiaCampo($_POST["ciudad"]);
    }

    if (empty($_POST["vehiculo"])) {
        $vehiculos="No tengo vehículos propios.";
    }else{
        $vehiculos = $_POST["vehiculo"];
    }



}

if (!isset($_POST["submit"]) || $Error){
    echo "<h1>Currículum vitae</h1>";
    echo "<form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>";
    echo "Nombre: ";
    echo "<br/>";
    echo "<input type='text' name='nombre' value='".$nombre."'><span>".$ErrorNombre."</span>";
    echo "<br/>";
    echo "<br/>";

    echo "Apellidos: ";
    echo "<br/>";
    echo "<input type='text' name='apellidos' value='".$apellidos."'><span>".$ErrorApellidos."</span>";
    echo "<br/>";
    echo "<br/>";

    echo "Día de nacimiento: ";
    echo "<br/>";
    echo "<input type='number' name='diaNacimiento' value='".$diaNacimiento."'><span>".$ErrordiaNacimiento."</span>";
    echo "<br/>";
    echo "<br/>";

    echo "Mes de nacimiento: ";
    echo "<br/>";
    echo "<select name='mesNacimiento'>";
    if($mesNacimiento=="Enero"){
        echo "<option value='Enero' selected>Enero</option>";
    }else{
        echo "<option value='Enero'>Enero</option>";
    }

    if($mesNacimiento=="Febrero"){
        echo "<option value='Febrero' selected>Febrero</option>";
    }else{
        echo "<option value='Febrero'>Febrero</option>";
    }

    if($mesNacimiento=="Marzo"){
        echo "<option value='Marzo' selected>Marzo</option>";
    }else{
        echo "<option value='Marzo'>Marzo</option>";
    }
    
    if($mesNacimiento=="Abril"){
        echo "<option value='Abril' selected>Abril</option>";
    }else{
        echo "<option value='Abril'>Abril</option>";
    }

    if($mesNacimiento=="Mayo"){
        echo "<option value='Mayo' selected>Mayo</option>";
    }else{
        echo "<option value='Mayo'>Mayo</option>";
    }

    if($mesNacimiento=="Junio"){
        echo "<option value='Junio' selected>Junio</option>";
    }else{
        echo "<option value='Junio'>Junio</option>";
    }

    if($mesNacimiento=="Julio"){
        echo "<option value='Julio' selected>Julio</option>";
    }else{
        echo "<option value='Julio'>Julio</option>";
    }

    if($mesNacimiento=="Agosto"){
        echo "<option value='Agosto' selected>Agosto</option>";
    }else{
        echo "<option value='Agosto'>Agosto</option>";
    }

    if($mesNacimiento=="Septiembre"){
        echo "<option value='Septiembre' selected>Septiembre</option>";
    }else{
        echo "<option value='Septiembre'>Septiembre</option>";
    }

    if($mesNacimiento=="Octubre"){
        echo "<option value='Octubre' selected>Octubre</option>";
    }else{
        echo "<option value='Octubre'>Octubre</option>";
    }
   
    if($mesNacimiento=="Noviembre"){
        echo "<option value='Noviembre' selected>Noviembre</option>";
    }else{
        echo "<option value='Noviembre'>Noviembre</option>";
    }

    if($mesNacimiento=="Diciembre"){
        echo "<option value='Diciembre' selected>Diciembre</option>";
    }else{
        echo "<option value='Diciembre'>Diciembre</option>";
    }
    
    echo "</select>";
    echo "<br/>";
    echo "<br/>";

    echo "Año de nacimiento: ";
    echo "<br/>";
    echo "<input type='number' name='annioNacimiento' value='".$annioNacimiento."'><span>".$ErrorannioNacimiento."</span>";
    echo "<br/>";
    echo "<br/>";

    echo "Sexo:";
    if($sexo=="Hombre"){
        echo "<input type='radio' name='sexo' value='Hombre' checked>Hombre";
    }else{
        echo "<input type='radio' name='sexo' value='Hombre'>Hombre";
    }
    if($sexo=="Mujer"){
        echo "<input type='radio' name='sexo' value='Mujer' checked>Mujer";
    }else{
        echo "<input type='radio' name='sexo' value='Mujer'>Mujer";
    }
    if($sexo=="Otro"){
        echo "<input type='radio' name='sexo' value='Otro' checked>Otro";
    }else{
        echo "<input type='radio' name='sexo' value='Otro'>Otro<span>".$Errorsexo."</span>";
    }
    
    echo "<br/>";
    echo "<br/>";
    
    echo "Idiomas dominados: ";
    echo "<br/>";
    echo "Inglés";
    if($ingles==" Tengo titulación de inglés"){
        echo "<input type='checkbox' name='ingles' value='Inglés' checked>";
    }else{
        echo "<input type='checkbox' name='ingles' value='Inglés'>";
    }

    echo "<br/>Alemán";

    if($aleman==" Tengo titulación de alemán"){
        echo "<input type='checkbox' name='aleman' value='Alemán' checked>";
    }else{
        echo "<input type='checkbox' name='aleman' value='Alemán'>";
    }
    echo "<br/>Francés";
    if($frances==" Tengo titulación de francés"){
        echo "<input type='checkbox' name='frances' value='Francés' checked>";
    }else{
        echo "<input type='checkbox' name='frances' value='Francés'>";
    }
    echo "<br/>";
    echo "<br/>";

    echo "<br/>Ciudad: ";
    echo "<select name='ciudad'>";
    if($ciudad=="Almería"){
        echo "<option value='Almería' selected>Almería</option>";
    }else{
        echo "<option value='Almería'>Almería</option>";
    }
    if($ciudad=="Córdoba"){
        echo "<option value='Córdoba' selected>Córdoba</option>";
    }else{
        echo "<option value='Córdoba'>Córdoba</option>";
    }
    if($ciudad=="Málaga"){
        echo "<option value='Málaga' selected>Málaga</option>";
    }else{
        echo "<option value='Málaga'>Málaga</option>";
    }
    if($ciudad=="Granada"){
        echo "<option value='Granada' selected>Granada</option>";
    }else{
        echo "<option value='Granada'>Granada</option>";
    }
    if($ciudad=="Jaén"){
        echo "<option value='Jaén' selected>Jaén</option>";
    }else{
        echo "<option value='Jaén'>Jaén</option>";
    }
    if($ciudad=="Huelva"){
        echo "<option value='Huelva' selected>Huelva</option>";
    }else{
        echo "<option value='Huelva'>Huelva</option>";
    }
    if($ciudad=="Cádiz"){
        echo "<option value='Cádiz' selected>Cádiz</option>";
    }else{
        echo "<option value='Cádiz'>Cádiz</option>";
    }
    if($ciudad=="Sevilla"){
        echo "<option value='Sevilla' selected>Sevilla</option>";
    }else{
        echo "<option value='Sevilla'>Sevilla</option>";
    }
    echo "</select>";
    echo "<br/>";
    echo "<br/>";

    echo "Posesión de vehículos:";
    echo "<br/>";
    echo "<select multiple name='vehiculo[]'>";
    if($vehiculos=="Coche"){
        echo "<option value='Coche' selected>Coche</option>";
    }else{
        echo "<option value='Coche'>Coche</option>";
    }
    if($vehiculos=="Moto"){
        echo "<option value='Moto' selected>Moto</option>";
    }else{
        echo "<option value='Moto'>Moto</option>";
    }
    if($vehiculos=="Otro"){
        echo "<option value='Otro' selected>Otro</option>";
    }else{
        echo "<option value='Otro'>Otro</option>";
    }
    
    
    echo "</select>";

    echo "<br/>";
    echo "<br/>";
    echo "<br/><input type='submit' name='submit' value='Enviar'><br/>";
    echo "<br/><input type='reset' name='reset' value='Limpiar'>";
    echo "</form>";
    echo "<a href=../"."verCodigo.php?src=".str_replace("/unidad2","unidad2",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>";
}else{
    echo "<h1>Currículum vitae</h1>";
    echo "Nombre: ".$nombre."";
    echo "<br>";
    
    echo "Apellidos: ".$apellidos."";
    echo "<br>";

    echo "Dia de nacimiento: ".$diaNacimiento."";
    echo "<br>";

    echo "Mes de nacimiento: ".$mesNacimiento."";
    echo "<br>";

    echo "Año de nacimiento: ".$annioNacimiento."";
    echo "<br>";

    echo "Sexo: ".$sexo."";
    echo "<br>";

    echo $ingles;
    echo "<br>";

    echo $frances;
    echo "<br>";

    echo $aleman;
    echo "<br>";

    echo "Vivo en: ".$ciudad."";
    echo "<br>";

    echo "Transporte:";
    echo "<br/>";
    if(!empty($_REQUEST["vehiculo"])){
        foreach ($_REQUEST["vehiculo"] as $vehiculo){
            echo $vehiculo."\n";
        }
    }else{
        echo $vehiculos;
    }
    
}


function limpiaCampo($campo){
    $campo = trim($campo);
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
    
    }


?>