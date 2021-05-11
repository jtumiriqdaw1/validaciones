<?php

// La función verArray() va a servir para ver al final las reglas y los errores
function verArray($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

//COMPLETA la Función validar()
function validar($campos, $reglas) {
    
    // Se crea el array $errores
    $errores=array();

    // Se recorre el array de reglas y el array de 
     foreach($reglas as $key => $valor){
        foreach($valor as $regla){
            if($regla["required"]== false){
                $errores="Este campo es requerido";
            }
           
        }
        }

        foreach($campos as $campo){
           $a = $campos;
           $b=$campo;
        }
     }
    // Si el campo es un elemento botón, casilla o elemento de lista sin seleccionar,
    // es decir no está isset, daría error: Hay que tratarlo
        unset($valor); // Para limpiar la variable en cada recorrido
       

        

    //COMPLETA

    return // El array de errores

}
    

