<?php
/**
 * Página -> Selección
 * Usando la selección del tipo switch haz un programa que nos pregunte la edad 
 * y nos diga si somos niños (0-11) adolescentes (12-17) 
 * jovenes (18-35) adultos (36-65) jubilados (66- ...)
 * La edad que no esté en el intevalo 0-110 años se visualizará
 * 'edad no contenplada en nuestra encuesta'
 * Volver al index después de 2 segundos
 */
if (isset($_POST['enviar'])) {
    $edad = filter_input(INPUT_POST, 'edad');
    //$edad= (int)$edad1;
    switch (true) {
        case ($edad<0):
            echo "Edad negativa no puede ser ";
            break;
        case($edad <=11):
        //case($edad <=11):
            echo "Eres un niño";
            break;
        case($edad <= 17):
            echo "Eres un adolescente";
            break;
        case($edad <= 35):
            echo "Eres joven";
            break;
        case($edad <= 65):
            echo "Eres adulto";
            break;
        case($edad <= 110):
            echo "Eres adulto";
            break;
        default:
            echo "Edad no contemplada en nuestra encuesta";
    }
    /*
    switch($edad){
        case 0-11:
           echo "Eres un niño";
            break;
        case 12-17:
            echo "Eres un adolescente";
            break;
        case 18-35:
            echo "Eres joven";
            break;
        case 36-65:
            echo "Eres adulto";
            break;
        case 66-110:
            echo "Eres adulto";
            break;
        default:
            echo "Edad no contemplada en nuestra encuesta";
    }*/
    
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Selección en php</title>
    </head>
    <body>
        <form method="POST" action="seleccion.php">
            Edad <input type="text" name="edad" value=""/>
            <input type="submit" name="enviar" value="enviar"/>
        </form>
    </body>
</html>