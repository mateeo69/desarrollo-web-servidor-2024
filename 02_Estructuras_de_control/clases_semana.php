<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dia = date("l");
    echo "<h1>Hoy es $dia</h1>";

    /* Hacer un switch que muestre por pantalla si hoy hay clases de web servidor */

    switch ($dia){
        case "Monday":
            echo "<p>Hoy no tenemos clase</p>";
            break;
        case "Tuesday":
            echo "<p>Hoy tenemos clase</p>";
            break;
        case "Wednesday":
            echo "<p>Hoy tenemos clase</p>";
            break;
        case "Thursday":
            echo "<p>Hoy no tenemos clase</p>";
            break;
        case "Friday":
            echo "<p>Hoy tenemos clase</p>";
            break;
        default:
            echo "<p>ES FINDE!!</p>";
            break;
    }

        // MANERA PRO//
        /*  switch ($dia) {
                case "Tuesday":
                case "Wednesday":
                case "Friday":
                    echo "<p>Hoy tenemos clase de Servidores</p>";
                    break;
                default:
                    echo "<p>Hoy no tenemos clase de Servidores</p>";
                    break;
            }
        */

        /*
        1. CREAR UN SWITCH QUE SEGUN EL DIA EN EL QUE ESTAMOS, ALMACENE EN UNA VARIABLE EL DIA EN ESPAÑOL
        2. REESCRIBIR EL SWITCH DE LA ASIGNATURA CON LOS DÍAS EN ESPAÑOL.
        */

        switch ($dia){
            case "Monday":
                $dia = "Lunes";
                break;
            case "Tuesday":
                $dia = "Martes";
                break;
            case "Wednesday":
                $dia = "Miercoles";
                break;
            case "Thursday":
                $dia = "Jueves";
                break;
            case "Friday":
                $dia = "Viernes";
                break;
            case "Saturday":
                $dia = "Sabado";
                break;
            case "Sunday":
                $dia = "Domingo";
                break;
        }

        switch ($dia) {
            case "Martes":
            case "Miercoles":
            case "Viernes":
                echo "<p>Hoy tenemos clase de Servidores</p>";
                break;
            default:
                echo "<p>Hoy no tenemos clase de Servidores</p>";
                break;
        }

        // ESTRUCTURA MATCH

        $resultado = match($dia) {
            "Martes","Miercoles","Viernes" => "<p>Hoy $dia si tenemos clase de web servidor</p>",
            default => "<p>Hoy $dia no tenemos clase de web servidor</p>"
        };

        echo $resultado;

    ?>
    
</body>
</html>