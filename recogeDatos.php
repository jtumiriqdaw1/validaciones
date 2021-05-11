<?php

include "includes/cabecera.php";
?>
    <!--  COMPLETA -->

<form id='formul4' name="formul4" action="validar.php" method="post">
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" /><br />

           <!-- TODAVíA no hay POO, ni mantener datos antiguos-->

        <label>¿Qué edad tienes?</label><br />
        <div classs="uno">
            <input type="radio" name="edad" value="uno" />Entre 1 y 18<br /> <!--value="uno" menor de edad -->
            <input type="radio" name="edad" value="dos" />Entre 18 y 65<br /> <!--value="dos" mayor de edad -->
        </div>
        <label>&nbsp;</label>
        <p>¿Qué aficiones tienes?</p><br />

            <!--  COMPLETA ya-->

        <select name="aficiones[]"  multiple= 'multiple'>
            <option value="cine" >Cine</option>
            <option value="lectura">Lectura</option>
            <option value="deporte">Deporte</option>
            <option value="baile">Baile</option>
        </select><br />
        <label>&nbsp;</label>
        <input type="submit" name="enviar" value="Enviar" /><br />
    </div>
</form>
<?php
include "includes/pie.php";
?>