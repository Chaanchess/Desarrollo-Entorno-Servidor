<?php
/**
 * @author Francisco José Sánchez Romero
 * @descripcion Mostrar en una tabla paises con su capital y bandera
 * @fecha 12/10/2019
 */

$aContinentes = array(
    "Europa" => array("paises" => array("España" => array("capital" => "Madrid", "bandera" => "images/españa.png"),
                                        "Alemania" => array("capital" => "Berlín","bandera" => "images/alemania.png"),
                                        "Francia" => array("capital" => "París","bandera" => "images/francia.png"))),

    "América" => array("paises" => array("Brasil" => array("capital" => "Brasilia", "bandera" => "images/brasil.png"),
                                        "Argentina" => array("capital" => "Buenos aires","bandera" => "images/argentina.png"),
                                        "México" => array("capital" => "Ciudad de México","bandera" => "images/mexico.png"))),

    "África" => array("paises" => array("Nigeria" => array("capital" => "Abuya", "bandera" => "images/nigeria.png"),
                                        "Egipto" => array("capital" => "El cairo","bandera" => "images/egipto.png"),
                                        "Guinea" => array("capital" => "Conakri","bandera" => "images/guinea.png"))),

    "Asia" => array("paises" => array("Corea del norte" => array("capital" => "Pionyang", "bandera" => "images/corea.png"),
                                        "Japón" => array("capital" => "Tokio","bandera" => "images/japon.png"),
                                        "India" => array("capital" => "Nueva Delhi","bandera" => "images/india.png"))),

    "Oceanía" => array("paises" => array("Australia" => array("capital" => "Canberra", "bandera" => "images/australia.png"),
                                        "Fiyi" => array("capital" => "Suva","bandera" => "images/fiyi.png"),
                                        "Islas Salomón" => array("capital" => "Wellington","bandera" => "images/salomon.png"))),

    );

    if(isset($_POST["submit"])){
        $nameContinente=$_POST["continente"];
        foreach($aContinentes as $continente =>$valor){
            if($continente==$nameContinente){
                echo "<table border='2px'>";
                echo "<h2>Países de ".$nameContinente."</h2>";
                echo "<th>Nombre país</th><th>Capital</th><th>Bandera</th>";
                foreach($valor as $key=>$paises){
                    foreach($paises as $nombrePais=>$value){
                        echo "<tr>";
                        echo "<td>".$nombrePais."</td>";
                        foreach($value as $clave=>$imagen){
                            if($clave=="bandera"){
                                echo "<td><img src='".$imagen."' style='height='60px'; width='60px'></td>";
                            }else{
                                echo "<td>".$imagen."</td>";
                            }
                            
                        }
                        echo "</tr>";

                    }
                    
                }
                echo "</table><br/>";
                echo "<a href='javascript:history.go(-1);'><button>Volver atrás</button></a>";
            }
            
        }
    }else{
        echo "<form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>";
        echo "Elige un continente: ";
        echo "<select name='continente'>";
        foreach($aContinentes as $key=>$value){
            echo "<option value='".$key."'>".$key."</option>";
        }
        echo "<br/>";
        echo "<input type='submit' name='submit' value='Enviar'>";
        echo "</form>";
        echo "<a href=../"."verCodigo.php?src=".str_replace("/unidad2","unidad2",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 
    }

?>