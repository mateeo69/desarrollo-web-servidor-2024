<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
    $numero = 30;

    if($numero > 0) {
        echo "<p>El numero es positivo</p>";
    } else if($numero == 0) {
        echo "<p>El numero es cero</p>";
    } else {
        echo "<p>El numero es negativo</p>";
    }

    if($numero > 0) echo "<p>El numero es positivo</p>";
    elseif($numero == 0) echo "<p>El numero es cero</p>";
    else echo "<p>El numero es negativo</p>";
    
    //Rangos: [-10,0) , [0,10] , (10,20]  -- Paréntesis no está incluido, corchete sí está incluido.
    if($numero >= -10 && $numero < 0) echo "<p>El numero $numero está en el rango [-10,0)</p>";
    elseif($numero >= 0 && $numero <= 10) echo "<p>El numero $numero está en el rango [0,10]</p>";
    elseif($numero > 10 && $numero <= 20) echo "<p>El numero $numero está en el rango (10,20]</p>";
    else echo "<p>El numero $numero no se encuentra en ninguno de los rangos ofrecidos.</p>";

    $numero = rand(-10,20);
    $resultado = match(true) {
        $numero >= -10 && $numero < 0 => "<p>El número $numero está en el rango [-10,0)</p>",
        $numero >= 0 && $numero <= 10 => "<p>El número $numero está en el rango (0,10]</p>",
        $numero > 10 && $numero <= 20 => "<p>El número $numero está en el rango (10,20]</p>",
    };
    
    /* Como se hace con puntos
    if($numero >= -10 && $numero <0):
        echo "<p>El numero $numero está en el rango [-10,0)</p>";
    elseif($numero >= 0 && $numero <= 10):
        echo "<p>El numero $numero está en el rango [0,10]</p>";
    elseif($numero > 10 && $numero <= 20):
        echo "<p>El numero $numero está en el rango (10,20]</p>";
    else: 
        echo "<p>El numero $numero no se encuentra en ninguno de los rangos ofrecidos.</p>";
    endif;
    ?>
    */

    //ESCRIBIR UN IF QUE DECIDA CUAL DE LOS DOS NUMEROS ES MAYOR, O SI SON IGUALES
    //TWO DIFFERENT WAYS TO MAKE IT

    $numero1 = 3;
    $numero2 = 4;

    //MANERA 1
    if ($numero1 > $numero2) {
        echo "El número $numero1 es mayor que $numero2";
    } elseif($numero2 > $numero1) {
        echo "El número $numero2 es mayor que $numero1";
    } else {
        echo "El número $numero1 es igual que $numero2";
    }

    //MANERA 2
    if ($numero1 > $numero2) echo "El número $numero1 es mayor que $numero2";
    elseif($numero2 > $numero1) echo "El número $numero2 es mayor que $numero1";
    else echo "El número $numero1 es igual que $numero2";
    ?>
</body>
</html>