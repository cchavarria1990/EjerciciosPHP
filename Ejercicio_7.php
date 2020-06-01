<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>

<?php
header ("Content-type: text/html;charset=\"utf-8\"");

    if (is_numeric($_GET['num']) && $_GET['num'] >1)
    {function primo($num){
        $cont=0;
        for($i=1;$i<=$num;$i++){
            echo 3/2."<br>";
            if($num% $i==0){
                echo "$i<br>";
            $cont++;
            }
        }
    if($cont==2){
        return true;

    }
    else{
        return false;
    }
    }
    }
    else
    {
        echo "<h3>El valor ".$_GET['num']." No es numerico</h3>";
        echo "<h2>El número ".$_GET['num']." No es primo</h2>";
    }

    
?>
<form>
    Escribe un número:
    <input name="num" type="text" placeholder="Escribe número">
    <input type="submit" value="Comprobar">
</form>

</body>
</html>
