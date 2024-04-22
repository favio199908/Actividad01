<!DOCTYPE html> <!-- Define el tipo de documento -->
<html> <!-- Inicia el elemento raíz del documento -->
<head> <!-- Inicia la sección de metadatos -->
    <title>Inicio de Sesión</title> <!-- Define el título del documento -->
</head>
<body> <!-- Inicia la sección del cuerpo del documento -->
    <h2>Iniciar Sesión</h2> <!-- Encabezado de inicio de sesión -->

    <?php
    // Función para validar el usuario y la contraseña
    function validarUsuarioContraseña($usuario, $contraseña) { // Define una función para validar el usuario y la contraseña
        $usuarios_validos = array("juan", "pedro", "maria", "raul"); // Define un array con usuarios válidos
        $contraseña_valida = "D153n0W3b2"; // Define la contraseña válida

        // Verificar si el usuario y la contraseña son válidos
        if (in_array($usuario, $usuarios_validos) && $contraseña === $contraseña_valida) { // Comprueba si el usuario y la contraseña coinciden con los válidos
            return true; // Retorna verdadero si son válidos
        } else {
            return false; // Retorna falso si no son válidos
        }
    }

    // Verificar si se envió el formulario
    $mostrar_formulario = true; // Variable para controlar si se muestra el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") { // Comprueba si se ha enviado el formulario mediante el método POST
        $usuario = $_POST["usuario"]; // Obtiene el usuario del formulario
        $contraseña = $_POST["contraseña"]; // Obtiene la contraseña del formulario

        // Validar el usuario y la contraseña
        if (validarUsuarioContraseña($usuario, $contraseña)) { // Llama a la función para validar el usuario y la contraseña
            echo "<p>Bienvenido, $usuario!</p>"; // Muestra un mensaje de bienvenida si son válidos
            $mostrar_formulario = false; // No mostrar el formulario si el inicio de sesión es exitoso
        } else {
            echo "<p>Usuario o contraseña incorrectos. Inténtalo de nuevo.</p>"; // Muestra un mensaje de error si no son válidos
        }
    }

    // Mostrar el formulario solo si $mostrar_formulario es true
    if ($mostrar_formulario) { // Comprueba si se debe mostrar el formulario
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> <!-- Formulario de inicio de sesión -->
        <label for="usuario">Usuario:</label><br> <!-- Etiqueta para el campo de usuario -->
        <input type="text" id="usuario" name="usuario"><br> <!-- Campo de entrada para el usuario -->
        <label for="contraseña">Contraseña:</label><br> <!-- Etiqueta para el campo de contraseña -->
        <input type="password" id="contraseña" name="contraseña"><br><br> <!-- Campo de entrada para la contraseña -->
        <input type="submit" value="Iniciar Sesión"> <!-- Botón para enviar el formulario -->
    </form>
    <?php
    }
    ?>
</body> <!-- Cierra la sección del cuerpo del documento -->
</html> <!-- Cierra el elemento raíz del documento -->
