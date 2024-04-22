<!DOCTYPE html> <!-- Define el tipo de documento -->
<html lang="en"> <!-- Define el idioma del documento -->
<head> <!-- Inicia la sección de metadatos -->
    <meta charset="UTF-8"> <!-- Especifica la codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura la vista en dispositivos móviles -->
    <title>Nombres</title> <!-- Define el título del documento -->
</head>
<body> <!-- Inicia la sección del cuerpo del documento -->

<?php
// Array de nombres y apellidos
$nombres = array( // Define un array de nombres
    "JUAN", "PEDRO", "MARÍA", "RAÚL", "LUIS", "ANA", "JOSÉ", "LAURA", "SOFÍA", "DAVID",
    "CARLA", "JAVIER", "MARTA", "DANIEL", "ELENA", "PABLO", "LUCÍA", "DIEGO", "PAULA", "MARIO"
);

$apellidos = array( // Define un array de apellidos
    "GÓMEZ", "PÉREZ", "RODRÍGUEZ", "SÁNCHEZ", "MARTÍNEZ", "GONZÁLEZ", "FERNÁNDEZ", "LÓPEZ", "DÍAZ", 
    "TORRES", "RUIZ", "JIMÉNEZ", "MORENO", "ÁLVAREZ", "ROMERO", "GUTIÉRREZ", "NAVARRO", "ORTEGA",
    "SERRANO", "RAMÍREZ"
);


// Función para combinar y formatear nombres y apellidos
function combinarNombresApellidos($nombres, $apellidos) { // Define una función para combinar y formatear nombres y apellidos
    $nombres_apellidos_combinados = array(); // Inicializa un array para almacenar los nombres y apellidos combinados
    $total_nombres = count($nombres); // Obtiene el número total de nombres
    $total_apellidos = count($apellidos); // Obtiene el número total de apellidos

    // Combinar nombres y apellidos de forma aleatoria
    for ($i = 0; $i < $total_nombres; $i++) { // Itera sobre los nombres
        $nombre = $nombres[$i]; // Obtiene un nombre aleatorio
        $apellido = $apellidos[rand(0, $total_apellidos - 1)]; // Obtiene un apellido aleatorio
        $nombre_formateado = ucfirst(strtolower($nombre)); // Formatea el nombre con la primera letra en mayúscula
        $apellido_formateado = ucfirst(strtolower($apellido)); // Formatea el apellido con la primera letra en mayúscula
        $nombres_apellidos_combinados[] = $nombre_formateado . ' ' . $apellido_formateado; // Combina nombre y apellido y los agrega al array
    }

    return $nombres_apellidos_combinados; // Retorna los nombres y apellidos combinados
}

// Combinar y formatear nombres y apellidos
$nombres_apellidos_combinados = combinarNombresApellidos($nombres, $apellidos); // Llama a la función para combinar nombres y apellidos

// Imprimir el resultado
echo "<pre>"; // Inicia una sección de preformateado para una mejor visualización
print_r($nombres_apellidos_combinados); // Muestra los nombres y apellidos combinados
echo "</pre>"; // Cierra la sección de preformateado
?>

</body> <!-- Cierra la sección del cuerpo del documento -->
</html> <!-- Cierra el elemento raíz del documento -->
