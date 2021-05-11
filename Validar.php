<?php

include 'includes/cabecera.php';
include "helper/funciones.php";
//Se debe incluir los archivos necesarios

//Crea un array $reglasValidacion con las reglas de validación indicadas.

$reglasValidacion =array(
    'nombre'=>array("required" => true),
    'edad'=>array("required" => true),
    'aficiones[]'=>array("required" => false)
);
// Recoge los datos del formulario
$datos = $_POST;
 

//Se llama a la función Validar con los datos de las reglas de validación y los datos del formulario
// COMPLETA

    $errores = validar($datos, $reglasValidacion);
  
    if(empty($errores)) {
          // Si el array() $errores está vacío los datos son correctos
        // COMPLETA
          echo"Los datos son correfctos";

        echo "<hr />";
    } else {
       
        //Si el array() tiene datos, hay errores
        // COMPLETA
         if(isset($errores)){
            verArray($errores);
         }

        echo "<hr />";
    }
include 'includes/pie.php';
