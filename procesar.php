<!--El formulario debe enviarse a procesar.php mediante POST. En procesar.php :-->
<!--1. Valida que el nombre no esté vacío.-->
<!--2. Verifica que el correo tenga formato válido con filter_var .-->
<!--3. Comprueba que la edad sea mayor o igual a 18.-->
<!--4. Si todo es correcto, muestra un mensaje de bienvenida. Si hay errores, muéstralos en pantalla.-->
<?php
    $nombre = trim($_POST['nombre'] ?? "");
    $email = trim($_POST['email'] ?? "");
    $edad = $_POST['edad'];

    $errores = [];

    if (empty($nombre)) {
        $errores[] = "El nombre es requerido";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo no es valido";
    }
    if ($edad < 18) {
        $errores[] = "La edad es menor a 18";
    }

    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Bienvenido al sistema " . $nombre;
    }