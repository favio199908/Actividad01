<!DOCTYPE html> <!-- Define el tipo de documento -->
<html> <!-- Inicia el elemento raíz del documento -->
<head> <!-- Inicia la sección de metadatos -->
    <title>Bienvenido</title> <!-- Define el título del documento -->
</head>
<body> <!-- Inicia la sección del cuerpo del documento -->
    <h1>Bienvenido</h1> <!-- Encabezado principal -->

    <?php
    // Función para detectar el navegador
    function detectarNavegador($user_agent) { // Define una función para detectar el navegador
        if (strpos($user_agent, 'Firefox') !== false) { // Comprueba si el agente de usuario contiene 'Firefox'
            return 'Mozilla Firefox'; // Retorna si se detecta Firefox
        } elseif (strpos($user_agent, 'Chrome') !== false) { // Comprueba si el agente de usuario contiene 'Chrome'
            return 'Google Chrome'; // Retorna si se detecta Chrome
        } elseif (strpos($user_agent, 'Safari') !== false) { // Comprueba si el agente de usuario contiene 'Safari'
            return 'Safari'; // Retorna si se detecta Safari
        } elseif (strpos($user_agent, 'Opera') !== false) { // Comprueba si el agente de usuario contiene 'Opera'
            return 'Opera'; // Retorna si se detecta Opera
        } elseif (strpos($user_agent, 'Edge') !== false) { // Comprueba si el agente de usuario contiene 'Edge'
            return 'Microsoft Edge'; // Retorna si se detecta Edge
        } else {
            return 'Navegador desconocido'; // Retorna si no se detecta ninguno de los navegadores conocidos
        }
    }

    // Obtener el agente de usuario del navegador
    $user_agent = $_SERVER['HTTP_USER_AGENT']; // Obtiene el agente de usuario del servidor

    // Llamar a la función para detectar el navegador
    $navegador = detectarNavegador($user_agent); // Llama a la función para detectar el navegador

    // Mostrar el mensaje de bienvenida y el navegador
    echo "<p>Estás utilizando $navegador.</p>"; // Muestra un mensaje con el navegador detectado
    ?>
</body> <!-- Cierra la sección del cuerpo del documento -->
</html> <!-- Cierra el elemento raíz del documento -->
