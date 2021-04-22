<?php

require_once 'utilidades.php';
$nombre = $_POST['nombre'];

$resultado = "Nombre: " . $nombre;
$resultado .= "<br/>Aficiones: ";
if (isset($_POST['aficiones']))
{
    $aficiones = $_POST['aficiones'];
    foreach ($aficiones as $aficion) {
        $resultado.="<br/>- " . $aficion;
    }
} else
{
    $resultado.="No tiene esas aficiones";
}
include "resultado.php";
?>
