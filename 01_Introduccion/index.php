<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    //Como definir una constante.
    define("EDAD", 25);


    $var = "Hola mundo";
    //Información de la variable;
    var_dump($var);

    echo EDAD;

    echo "<br>";
    //Puedes meter HTML y CSS en un echo. NO es buena práctica pero se hace.
    echo "<h2 style='color: orange'>La variable es $var</h2>";

    $frase1 = "hola";
    $frase2 = "mundo";
    //Concatenar Strings.
    echo "<p>$frase1 "."$frase2</p>";



    ?>
</body>
</html>