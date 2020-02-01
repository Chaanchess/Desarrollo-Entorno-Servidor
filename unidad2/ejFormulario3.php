<?php
/**
 *  Enviar datos de un formulario
 * @author Francisco José Sánchez Romero
 * @fecha 04/10/2019
 */

$nombre="";
$mensajeError="";
echo "<form method='post' action='mostrarFormulario3.php'>";
    echo "Nombre: ";
    echo "<br/>";
    echo "<input type'text' name='nombre'/>";
    echo "<br/>";
    echo "Apellidos: ";
    echo "<br/>";
    echo "<input type'text' name='apellidos'/>";
    echo "<br/>";
    echo "Dirección: ";
    echo "<br/>";
    echo "<input type'text' name='direccion'/>";
    echo "<br/>";
    echo "Sexo:";
    echo "<br/>";
    echo "<input type='radio' name='genero' value='Hombre'>Hombre<br>";
    echo "<input type='radio' name='genero' value='Mujer'>Mujer<br>";
    echo "<input type='radio' name='genero' value='No definido' checked>No definido<br>";
    echo "<br/>";
    echo "Seleccione uno de sus hobbits: ";
    echo "<select name='hobbit'>";
        echo "<option value='Correr'>Correr</option>";
        echo "<option value='Videojuegos'>Videojuegos</option>";
        echo "<option value='Dormir'>Dormir</option>";
        echo "<option value='Nada'>Nada</option>";
    echo "</select>";
    echo "<br/>";
    echo "Seleccione varios colores: ";
    echo "<br/>";
    echo "<select name='colores[]' multiple>";
        echo "<option value='Rojo'>Rojo</option>";
        echo "<option value='Azul'>Azul</option>";
        echo "<option value='Amarillo'>Amarillo</option>";
        echo "<option value='Verde'>Verde</option>";
    echo "</select>";
    echo "<br/>";
    echo "<br/>";
    echo "<input type='submit' name='enviar' />";
    
    
echo "</form>";
echo "<a href=../"."verCodigo.php?src=".str_replace("/unidad2","unidad2",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 
?>