<!--Escribe un programa en PHP llamado tabla.php que pida un número entero y muestre la
tabla de multiplicar de ese número del 1 al 10.
• Si el número es negativo, muestra un mensaje de error.
• Si es cero, muestra “La tabla del 0 siempre es 0”.-->
<?php
    $numero = readline("Dime un numero: ");
        if ($numero < 0) {
            echo "El número introducido es negativo";
        } else if ($numero == 0) {
            echo "La tabla del 0 siempre es 0";
        } else {
            for ($i = 0; $i <= 10; $i++) {
                echo $numero*$i . "\n";
            }
        }