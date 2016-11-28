<?php

/**
 *  Usando el operador ternario pide un número y visualiza si el número es par o impar
 *  Volver al index después de 2 segundos
 */

if (isset($_POST['enviar'])) {
    $num = filter_input(INPUT_POST, 'num');
    $par = false;
    
    if(($num%2==0)){
        $par=true;
    }
    
    if($par){
        echo "El número $num es par";
    }else{
        echo "El número $num no es par";
    }
    
    
    
}

//header("Refresh:2 ;url=../index.php");

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Operador ternario</title>
    </head>
    <body>
        <form method="POST" action="ternario.php">
            <h3>¿Es un número par o impar?</h3>
            Introduce un numero= <input type="text" name="num" value=""/>
            <input type="submit" name="enviar" value="enviar"/>
        </form>
    </body>
</html>