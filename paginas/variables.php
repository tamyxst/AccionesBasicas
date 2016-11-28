<?php

/**
 * Página -> Declaración de variables
 * Haz el Ejercicio 1.- Declaración de variables de la sección de actividades modificando
 * Cambia el valor de las variables
 * Visualiza con print en lugar que con echo
 * Volver al index después de 5 segundos*
 */
//Asignamos las variables
$decimal = 125;
$octal = 074; //0874??
$hex = 0xAbC12;
$binario = 0b1100;
$cadena1 = "Esto es una cadena de caracteres";
$cadena2 = "Esto es otra cadena de caracteres";
$cadenaHeredoc3 = <<<FIN
        <pre>
        Esto es una cadena
        multilinea
        y termina aqui
        </pre>
FIN;
$cadenaNowdoc4 = <<<'FIN'
        <pre>
        Esto es una cadena
        multilinea
        y termina aqui
        </pre>
FIN;
$numR = 1.23432230003322014000002234101;
$numCientif = 1234E-2;
$valorNulo = null;
$varBool1 = true;
$varBool2 = false;


//Visualizamos las variables.
echo "<h3>Visualizamos las variables</h3><br />";

printf("El numero decimal es %d=%d <br />", $decimal, $decimal);
printf("El numero octal es %d=%o <br />", $octal, $octal);
printf("El numero hexadecimal es %d=%x <br />", $hex, $hex);
printf("El numero binario es %d=%b <br /><br />", $binario, $binario);

printf("Cadena1 = $cadena1 <br />");
printf("Cadena2 = $cadena2 <br />");
printf("Cadena Heredoc = $cadenaHeredoc3 <br />");
printf("Cadena Nowdoc = $cadenaNowdoc4 <br /><br />");
printf("Número real %5.30f <br />", $numR);
printf("Número Centífico %e <br /><br />", $numCientif);
printf("Valor nulo (null) = $valorNulo <br />");
printf("Valor Booleano 1 (true)  = $varBool1 <br />");
printf("Valor Booleano 2 (false) = $varBool2 <br />");

header("Refresh:5 ;url=../index.php");
?>
