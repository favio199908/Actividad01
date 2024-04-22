<!DOCTYPE html> <!-- Define el tipo de documento -->
<html> <!-- Inicia el elemento raíz del documento -->
<head> <!-- Inicia la sección de metadatos -->
    <title>Análisis de Frase</title> <!-- Define el título del documento -->
</head>
<body> <!-- Inicia la sección del cuerpo del documento -->
    <h2>Análisis de Frase</h2> <!-- Encabezado de análisis de frase -->

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> <!-- Formulario de análisis -->
        <label for="frase">Ingrese una frase:</label><br> <!-- Etiqueta para el campo de frase -->
        <input type="text" id="frase" name="frase" required><br><br> <!-- Campo de entrada para la frase -->
        <input type="submit" value="Analizar"> <!-- Botón para enviar el formulario -->
    </form>

    <?php
    // Función para contar las ocurrencias de una letra en una cadena
    function contarLetra($cadena, $letra) { // Define una función para contar las ocurrencias de una letra en una cadena
        $contador = 0; // Inicializa un contador
        for ($i = 0; $i < strlen($cadena); $i++) { // Itera sobre la cadena
            if ($cadena[$i] == $letra) { // Comprueba si el carácter actual es igual a la letra
                $contador++; // Incrementa el contador si la letra coincide
            }
        }
        return $contador; // Retorna el contador de ocurrencias
    }

    // Función para obtener las vocales de una cadena
    function obtenerVocales($cadena) { // Define una función para obtener las vocales de una cadena
        $vocales = array('a', 'e', 'i', 'o', 'u'); // Define un array con las vocales
        $vocales_encontradas = array(); // Inicializa un array para almacenar las vocales encontradas
        foreach ($vocales as $vocal) { // Itera sobre las vocales
            if (stripos($cadena, $vocal) !== false) { // Comprueba si la vocal está presente en la cadena (ignorando mayúsculas/minúsculas)
                $vocales_encontradas[] = $vocal; // Agrega la vocal encontrada al array
            }
        }
        return $vocales_encontradas; // Retorna las vocales encontradas
    }

    // Función para contar las ocurrencias de cada vocal en una cadena
    function contarVocales($cadena) { // Define una función para contar las ocurrencias de cada vocal en una cadena
        $vocales = array('a', 'e', 'i', 'o', 'u'); // Define un array con las vocales
        $ocurrencias = array(); // Inicializa un array para almacenar las ocurrencias de cada vocal
        foreach ($vocales as $vocal) { // Itera sobre las vocales
            $ocurrencias[$vocal] = contarLetra(strtolower($cadena), $vocal); // Cuenta las ocurrencias de la vocal en minúsculas y la almacena en el array
        }
        return $ocurrencias; // Retorna el array de ocurrencias de vocales
    }

    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") { // Comprueba si se ha enviado el formulario mediante el método POST
        $frase = $_POST["frase"]; // Obtiene la frase ingresada del formulario

        // Contar las ocurrencias de la letra "o"
        $ocurrencias_o = contarLetra(strtolower($frase), 'o'); // Cuenta las ocurrencias de la letra "o" en minúsculas

        // Obtener las vocales que aparecen en la frase
        $vocales_encontradas = obtenerVocales(strtolower($frase)); // Obtiene las vocales encontradas en minúsculas

        // Contar las ocurrencias de cada vocal en la frase
        $ocurrencias_vocales = contarVocales($frase); // Cuenta las ocurrencias de cada vocal en la frase

        // Imprimir resultados
        echo "<p>La letra 'o' aparece $ocurrencias_o veces en la frase.</p>"; // Muestra las ocurrencias de la letra "o"
        echo "<p>Las vocales que aparecen en la frase son: " . implode(', ', $vocales_encontradas) . "</p>"; // Muestra las vocales encontradas
        echo "<p>Cuántas veces aparecen cada una de las vocales:</p>"; // Encabezado para mostrar las ocurrencias de vocales
        foreach ($ocurrencias_vocales as $vocal => $ocurrencias) { // Itera sobre las ocurrencias de vocales
            echo "$vocal: $ocurrencias<br>"; // Muestra la vocal y su cantidad de ocurrencias
        }
    }
    ?>
</body> <!-- Cierra la sección del cuerpo del documento -->
</html> <!-- Cierra el elemento raíz del documento -->
