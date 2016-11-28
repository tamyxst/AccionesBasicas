<?php

/**
 * Página -> Asignación
 * Asigna a una variable valores de diferente procedencia
 *      Un valor constante
 *      Un valor de una expresión numérica
 *      Un valor de una expresión de cadena de caracteres
 *      Un valor que devuelva una función , por ejemplo la función print
 *      El valor de una expresión que sea una asignación
 * Visualiza luego los valores especificando de qué donde viene su valor
 * Volver al index después de 5 segundos
 */

//Un valor constante
define("IVA",0.21);
$iva=IVA; //La variable tendrá el valor de la constante.
echo "Asignación de una constante = " .$iva. "<br />";

//Un valor de una expresión numérica
$num=2;
echo "Valor de num antes de la asignación = ". $num. "<br />";
// A num se le mantiene el valor 2, y se le suma el valor 5 = 7.
$num+=5; 
echo "Valor de num despues de la asignación = ". $num. "<br />";

//Un valor de una expresión de cadena de caracteres
$cadena="Hola ";
echo "Valor de cadena antes de la asignación = ". $cadena. "<br />";
$cadena=$cadena."Adios";
echo "Valor de cadena despues de la asignación = ". $cadena. "<br />";

//Un valor que devuelva una función , por ejemplo la función print
function devolverValor(){
    $num1=6;
    $resultado = $num1*20;
    return $resultado;
}

//El valor de num1 será el resultado que devuelva la función.
$num1=devolverValor();
print "Valor de num1 al llamar la función ". $num1 . "<br />";

//El valor de una expresión que sea una asignación
$num3=5;
$num4=10;
echo "Valor de num3 = $num3 y valor de num4 = $num4 antes de la asignación<br /> ";
//1º num3 tendra el valor de num4. 
//2º num5 tendra el valor de num5.
$num5 = ($num3 = $num4); 
echo "Valor de num3 = $num3 y valor de num4 = $num4 despueś de la asignación<br />";
echo "Valor de num5 despues de la asignación = $num5";

header("Refresh:5 ;url=../index.php");

?>