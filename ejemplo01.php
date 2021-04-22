<?php

//error_reporting(0);
$nombre=$_POST['nombre'];
$resultado = "Nombre: " . $nombre;
if (isset($_POST['edad']))
{
    $edad = $_POST['edad'];
    switch ($edad) {
        case "uno": $resultado .= "<br/>Edad: Entre 1 y 18";
            break;

        case "dos": $resultado .= "<br/>Edad: Entre 18 y 65";
            break;

        case "tres": $resultado .= "<br/>Edad: Mayor de 65";
            break;
    }
}

include "includes/vista_resultado.php";
?>
