<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 1</title>
</head>
<body>
    <?php
    /*
        Ejercicio 1
        Calcula la suma de todos los numeros pares del 0 al 20
    */

    $i = 0;
    $suma = 0;

    while($i<=20){
        if($i%2 == 0) $suma += $i;
        $i++;
    }

    /* 
        if($i % 2) Eso da resultado 0 o 1. Por lo que si es impar (1) es TRUE y entra dentro del if y si es par (0) es FALSE y no entra
    */

    echo "<p>$suma";

    /* 
        Ejercicio 2 (Hay que investigar un poco)
        Muestra por pantalla la fecha actual con el siguiente formato:
            "Miercoles 25 de septiembre de 2024"
    */
    
    $diaSem = date("l");
    $diaNum = date("j");
    $mes = date("F");
    $año = date("Y");

    switch ($diaSem){
        case "Monday":
            $diaSem = "Lunes";
            break;
        case "Tuesday":
            $diaSem = "Martes";
            break;
        case "Wednesday":
            $diaSem = "Miercoles";
            break;
        case "Thursday":
            $diaSem = "Jueves";
            break;
        case "Friday":
            $diaSem = "Viernes";
            break;
        case "Saturday":
            $diaSem = "Sabado";
            break;
        case "Sunday":
            $diaSem = "Domingo";
            break;
    }


    switch ($mes){
        case "January":
            $mes = "Enero";
            break;
        case "February":
            $mes = "Febrero";
            break;
        case "March":
            $mes = "Marzo";
            break;
        case "April":
            $mes = "Abril";
            break;
        case "May":
            $mes = "Mayo";
            break;
        case "June":
            $mes = "Junio";
            break;
        case "July":
            $mes = "Julio";
            break;
        case "August":
            $mes = "Agosto";
            break;
        case "September":
            $mes = "Septiembre";
            break;
        case "October":
            $mes = "Octubre";
            break;
        case "November":
            $mes = "Noviembre";
            break;
        case "Decemeber":
            $mes = "Diciembre";
            break;
    }

    echo "<p>$diaSem, $diaNum de $mes de $año</p>";
    ?>

    <?php
    /* 
        Muestra una lista de todos los numeros primos del 1 al 50.
        $num = 2;
        $esPrimo = TRUE;

        while ($num <= 50){
            for($i = 2; $i < $num; $i++) {
                if($num % $i == 0){
                    $esPrimo = FALSE;
                    break;
                }
            }
        
            if($esPrimo) echo "<p>$num es primo</p>";
            $num++;
            $esPrimo = TRUE;
        }
    */

    
    /*

    Calcular LOS 50 PRIMEROS PRIMOS

    */
        $contador = 0;
        $num = 2;

        while ($contador < 50){
            $esPrimo = TRUE;

            for($i = 2; $i < $num; $i++) {
                if($num % $i == 0){
                    $esPrimo = FALSE;
                    break;
                }
            }
            if($esPrimo){
                $contador++;
                echo "<p>$num</p>";
            }
            $num++;
        }

    


    /* 
        Calcular el FIBONACCI de los 10 primeros numeros primeros
    */
    
    
    

    ?>
    
</body>
</html>