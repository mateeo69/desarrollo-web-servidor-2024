<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edades</title>
</head>
<body>
    <?php
    $edad = rand(-10,140);

    /*
    Con IF y con MATCH:
    - Si la persona tiene entre 0 y 4 años, es un BEBÉ
    - Si la persona tiene entre 5 y 18 años, es MENOR DE EDAD
    - Si la persona tiene entre 18 y 65 años, es ADULTO
    - Si la persona tiene entre 66 y 120 años, es JUBILADO
    - Si la edad está fuera de rango es ERROR.
    */

    if ($edad >= 0 && $edad < 5) {
        echo "<p>Eres un bebé</p>";
    }elseif($edad >= 5 && $edad < 18) {
        echo "<p>Eres menor de edad</p>";
    }elseif($edad >= 18 && $edad <= 65) {
        echo "<p>Eres adulto</p>";
    }elseif($edad >= 66 && $edad <= 120) {
        echo "<p>Eres jubilado</p>";
    }else{
        echo "<p>ERROR máquina</p>";
    }

    $resultado = match(true) {
        $edad >= 0 && $edad < 5 => "<p>Eres un bebé</p>",
        $edad >= 5 && $edad < 18 => "<p>Eres menor de edad</p>",
        $edad >= 18 && $edad <= 65 => "<p>Eres adulto</p>",
        $edad >= 66 && $edad <= 120 => "<p>Eres jubilado</p>",
        default => "<p>ERROR máquina</p>"
    };

    echo $resultado;

    ?>
</body>
</html>