<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>
    <?php
    //Muestra un mensaje en el que te diga si el día de hoy es par o impar
    $date = date("j");

    if ($date%2 == 0) {
        echo "<p>El día de hoy es par</p>";
    }
    else {
        echo "<p>El día de hoy es impar</p>";
    }
    ?>
</body>
</html>