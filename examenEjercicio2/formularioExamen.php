<?php

/**
 * @author Francisco José Sánchez Romero
 * @descripcion Completar el formulario y obtener una nota dependiendo de lo seleccionado
 * @fecha 19/11/2019
 */
$nombre = "";
$nivel="";
$errorNombre = "";
$Error = false;

if (isset($_POST["submit"])) {
    if (empty($_POST["nombre"])) {
        $errorNombre = " El campo nombre es obligatorio";
        $Error = true;
    } else {
        $nombre = limpiaCampo($_POST["nombre"]);
        $nivel = limpiaCampo($_POST["nivel"]);
    }
}

$nivelIngles = array("A1", "A2", "B1", "B2", "C1", "C2");

$arrayPreguntas = array(
    array(
        "pregunta" => "The room where secretaries work is called an .....",
        "Tipo" => "text",
        "Respuesta" => array("office"),
        "Acierto" => 1,
        "Fallo" => 0
    ),
    array(
        "pregunta" => "To go to the top of the building you can take the .....",
        "Tipo" => "text",
        "Respuesta" => array("lift", "elevator"),
        "Acierto" => 1,
        "Fallo" => 0
    ),
    array(
        "pregunta" => "I ..... tennis every Sunday morning.",
        "Tipo" => "Multiple-choice",
        "Opciones" => array("playing", "play", "am playing", "am play"),
        "Respuesta" => "play",
        "Acierto" => 1,
        "Fallo" => -0.25
    ),
    array(
        "pregunta" => "Don't make so much noise. Noriko ..... to study for her ESL test!",
        "Tipo" => "Multiple-choice",
        "Opciones" => array("try", "tries", "tried", "is trying"),
        "Respuesta" => "is trying",
        "Acierto" => 1,
        "Fallo" => -0.25
    ),
    array(
        "pregunta" => "Jun-Sik ..... his teeth before breakfast every morning.",
        "Tipo" => "Multiple-choice",
        "Opciones" => array("will cleaned", "is cleaning", "cleans", "clean"),
        "Respuesta" => "cleans",
        "Acierto" => 1,
        "Fallo" => -0.25
    ),
    array(
        "pregunta" => "Sorry, she can't come to the phone. She ..... a bath!",
        "Tipo" => "Multiple-choice",
        "Opciones" => array("is having", "having", "have", "has"),
        "Respuesta" => "is having",
        "Acierto" => 1,
        "Fallo" => -0.25
    ),
    array(
        "pregunta" => "	..... many times every winter in Frankfurt.",
        "Tipo" => "Multiple-choice",
        "Opciones" => array("It snows", "snowed", "It is snowing", "It is snow"),
        "Respuesta" => "It snows",
        "Acierto" => 1,
        "Fallo" => -0.25
    )
);

if (!isset($_POST["submit"]) || $Error) {
    echo "<h2>Rellene estos datos antes de empezar el formulario</h2>";
    echo "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
    echo "Nombre: ";
    echo "<br/>";
    echo "<input type='text' name='nombre' value='" . $nombre . "'><span>" . $errorNombre . "</span>";
    echo "<br/>";
    echo "<br/>";

    echo "Nivel de inglés: ";
    echo "<br/>";
    echo "<select name='nivel'>";
    foreach ($nivelIngles as $nivel) {
        echo "<option value='" . $nivel . "'>" . $nivel . "</option>";
    }
    echo "</select>";
    echo "<br/>";
    echo "<br/><input type='submit' name='submit' value='Empezar cuestionario'>";
    echo "</form>";
} else {
    echo "<h2>Cuestionario de inglés</h2>";
    echo "Has entrado al cuestionario con nombre: <strong>".$nombre."</strong> y nivel <strong>".$nivel."</strong>";
    echo "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
    $contador=1;
    foreach ($arrayPreguntas as $key => $value) {
        echo "<hr>";
        foreach ($value as $key => $value) {

            if ($key == "pregunta") {
                echo "<strong>Pregunta ".$contador.":</strong> ".$value . "<br>";
            }
            if($key == "Tipo"){
                if($value=="text"){
                    echo "Respuesta: ";
                    echo "<input type='text' name='respuesta".$contador."'>";
                    echo "<br>";
                }
            }
            if($key=="Opciones"){
                foreach ($value as $key => $value) {
                    echo "<input type='radio' name='respuesta".$contador."' value='".$value."'>".$value;
                    echo "<br>";
                }
                echo "<br>";
            }

        }
        $contador++;
        
    }
    echo "<input type='submit' name='corregir' value='Corregir'>";
    echo "</form>";
    
}

if (isset($_POST["corregir"])) {
    $contadorRespuesta = 1;
    $correcta=false;
    $notaFinal=0;
    $fallos=0;
    $aciertos=0;
    foreach ($arrayPreguntas as $pregunta) {
        if($pregunta["Respuesta"] == $_POST["respuesta".$contadorRespuesta]){
            echo "La respuesta a la pregunta ".$contadorRespuesta." es correcta.<br>";
            $correcta=true;
            $aciertos=$aciertos+1;
        }else{
            echo "La respuesta a la pregunta ".$contadorRespuesta." es incorrecta.<br>";
            $correcta=false;
            $fallos=$fallos+1;
        }
        $contadorRespuesta++;
        if($correcta){
            $notaFinal=$pregunta["Acierto"]+$notaFinal;
        }else{
            $notaFinal=$notaFinal+$pregunta["Fallo"];
        }
    }

    echo "<br><h3>Has tenido un total de ".$aciertos." aciertos, y ".$fallos." fallos. Tu nota final es: ".$notaFinal."/7.</h3>";

    if($notaFinal>3.5){
        echo "Bien hecho, has aprobado!";
    }else{
        echo "No has aprobado... Deberías de intentarlo de nuevo."; 
    }
    
    
}


    

function limpiaCampo($campo)
{
    $campo = trim($campo);
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
}
