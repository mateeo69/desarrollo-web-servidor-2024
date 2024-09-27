<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros aleatorios</title>
</head>
<body>
    <?php
    //Función rand para hacer un numero aleatorio entre los dos parámetros ofrecidos. 
    $n = rand(1,3);

    switch($n){
        case 1:
            echo "<p>El número aleatorio es $n</p>";
            break;
        case 2:
            echo "<p>El número aleatorio es $n</p>";
            break;
        default:
            echo "<p>El número aleatorio es $n</p>";
            break;
    }

    /*
    Comprobar con un switch si un número aleatorio del 1 al 10 es par o impar
    */
    
    $n = rand(1,10);
    $modulo = $n%2;
    
    switch($modulo) {
        case 0:
            echo "<p>El número $n es par</p>";
            break;
        case 1:
            echo "<p>El número $n es impar</p>";
            break;
    }

    $n = rand(1,3);
    $resultado = match($n) {
        1,2,3 => "<p>El número aleatorio es $n</p>"
    };

    $n = rand(1,10);
    $resultado2 = match($modulo) {
        0 => "<p>El número $n es par</p>",
        1 => "<p>El número $n es impar</p>"
    }

    ?>
</body>
</html>