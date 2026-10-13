<!--Crea un programa agenda.php que permita almacenar y mostrar contactos en un array.
• Cada contacto tendrá nombre, teléfono y correo.
• Muestra la lista completa de contactos en una tabla HTML.
• Permite añadir un contacto nuevo mediante un formulario (usando POST).-->
<?php

$agenda = [
    ["nombre" => "pepe", "telefono" => 654321789, "correo" => "pepe@gmail.com"],
    ["nombre" => "juan", "telefono" => 654321788, "correo" => "juan@gmail.com"]
];

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];

$agenda[count($agenda)] = ["nombre"=>$nombre, "telefono"=>$telefono, "correo"=>$email];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
</head>

<body>

<h1>Lista de contactos</h1>

<table border="1">

    <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Correo</th>
    </tr>

    <?php foreach ($agenda as $contacto) { ?>

        <tr>
            <td><?php echo $contacto["nombre"]; ?></td>
            <td><?php echo $contacto["telefono"]; ?></td>
            <td><?php echo $contacto["correo"]; ?></td>
        </tr>

    <?php } ?>

</table>

</body>
</html>