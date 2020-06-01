<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 5</h1>

<?php
    header ("Content-type: text/html;charset=\"utf-8\"");
    for ($i=1;$i<=10;$i++)
    {
        echo "<p>$i</P>";
    }
    echo "<p>Finaliza ciclo for</p>";

    for ($i=10;$i<=0;$i--)
    {
        echo "<p>$i</p>";
    }
    echo "<p>Finaliza ciclo for</p>";

    $familia = array("María","Ana","José","Pedro");

    for ($i=0;$i<=sizeof($familia);$i++)
    {
        echo "<h2>$familia[$i] número de elemento $i </h2>";
        echo "<br>";
    }

    echo "<p>ejercicio usando el ciclo While </p>";
    
    $contador = 0; //variable que se usará para lograr un incremento de los números

    while ($contador < count($familia)) { //Extraemos los datos del array de uno en uno mientras haya datos
           $contador++; //Usamos la variable para ir incrementando los números
           echo "<h2>$familia[$contador] número de elemento $contador </h2>";
           echo "<br>"; 
    }  
     
    ?>
    </body>
    </html>
