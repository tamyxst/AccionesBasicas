<?php

/**
 * Página -> Contantes
 * Haz un ejercicio donde definas la constante edad
 * A la constante Edad le asignas tu edad.
 * Luego visualiza los años que tienes y los años que te quedan para cumplir 100 años
 * Volver al index después de 2 segundos*
 */

//Defino constante y le asigno edad.
define("EDAD",29);

$meQuedan=100-EDAD;
//Muestro la edad y los años que me quedan.
echo "Mi edad es ". EDAD ." y me quedan ".$meQuedan. " años";

header("Refresh:2 ;url=../index.php");
?>