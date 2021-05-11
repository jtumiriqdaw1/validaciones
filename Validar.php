<?php

include 'includes/cabecera.php';
include "helper/funciones.php";
//Se debe incluir los archivos necesarios

//Crea un array $reglasValidacion con las reglas de validación indicadas.
// Recoge los datos del formulario
$reglasValidacion =array(
    $_POST['nombre']=>array("required" => true),
    $_POST['edad']=>array("required" => true,"maxlength"=>2),
    $_POST['aficiones[]']=>array("required" => false)
);

//Se llama a la función Validar con los datos de las reglas de validación y los datos del formulario
// COMPLETA

    $errores = validar();
  
    if (empty($errores)) {
          // Si el array() $errores está vacío los datos son correctos
        // COMPLETA
          echo"Los datos son correfctos";

        echo "<hr />";
    } else {
       
        //Si el array() tiene datos, hay errores
        // COMPLETA
         if(){
             "El campo  es requerido";
         }

        echo "<hr />";
    }
include 'includes/pie.php';
