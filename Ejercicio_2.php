<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 2</h1>
<?php
    //Este es un comentario de una linea

    /*
    Este es 
    un comentario de multiples
    lineas
    */
    $NombreClase = "Lenguaje 4";

    echo "<html><head><meta charset=\"utf-8\"></head";
    echo "<body>";
    echo "<h2>Esta es la clase de $NombreClase mañana y tarde (Símbolo)</h2>";
    echo "<h2>Esta es otra fila de la clase de ".$NombreClase." con dos cadenas concatenadas</h2>";
    echo "</body>";
    echo "<html>";

    $numero = 50;
    $calculo = $numero/2 + 6;
    echo "El resultado de la operacion es: $calculo";

    $logico = true;
    $logico2 = false;
    echo "<p>El contenido de una variable tipo booleana verdadero: $logico y variable falsa: $logico2</p>";

    $variableNombreClase = "NombreClase";
    echo "<p>Este es un nombre de una variable extraído de una cadena ".$$variableNombreClase."</p>";
?>

</body>
</html>
