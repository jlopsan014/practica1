<!--Crea un script llamado alumnos.php que almacene en un array asociativo los nombres de 5
alumnos y sus calificaciones.
1. Recorre el array con un foreach y muestra cada alumno con su nota.
2. Calcula el promedio del grupo.
3. Implementa una función llamada evaluarNota($nota) que devuelva si la nota es
“Suspenso”, “Aprobado”, “Notable” o “Sobresaliente”, y muéstralo junto a cada alumno.-->
<?php
    $alumnos = ["Ana" => 7,
        "Pepe" => 5,
        "Juan" => 4,
        "Alberto" => 3,
        "Jose" => 2,
        ];

    $numeroAlumnos = count($alumnos);
    $sumaNotas = 0;

    foreach ($alumnos as $nombre => $nota) {
        echo $nombre . " " . $nota . " " . evaluarNota($nota) . "\n";
        $sumaNotas += $nota;
    }
    $media = $sumaNotas / $numeroAlumnos;
    echo "La media de notas es: " . $media . "\n";
    function evaluarNota($nota) {
        if ($nota < 5) {
            return "suspenso";
        } else if ($nota < 7) {
            return "aprobado";
        } else if ($nota < 9) {
            return "notable";
        } else {
            return "sobresaliente";
        }
    }