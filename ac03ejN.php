<!DOCTYPE html> <!-- Define el tipo de documento -->
<html lang="en"> <!-- Define el idioma del documento -->
<head> <!-- Inicia la sección de metadatos -->
    <meta charset="UTF-8"> <!-- Especifica la codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura la vista en dispositivos móviles -->
    <title>Numeros primos</title> <!-- Define el título del documento -->
</head>
<body> <!-- Inicia la sección del cuerpo del documento -->

<?php
// Función para verificar si un número es primo
function esPrimo($numero) { // Define una función para verificar si un número es primo
    if ($numero <= 1) { // Verifica si el número es menor o igual a 1
        return false; // Retorna falso si el número es menor o igual a 1
    }
    for ($i = 2; $i <= sqrt($numero); $i++) { // Itera desde 2 hasta la raíz cuadrada del número
        if ($numero % $i == 0) { // Comprueba si el número es divisible por algún otro número
            return false; // Retorna falso si el número es divisible
        }
    }
    return true; // Retorna verdadero si el número es primo
}

// Función para generar N números primos aleatorios
function generarNumerosPrimos($cantidad) { // Define una función para generar números primos aleatorios
    $numeros_primos = array(); // Inicializa un array para almacenar los números primos
    while (count($numeros_primos) < $cantidad) { // Repite hasta que se generen la cantidad deseada de números primos
        $numero_aleatorio = rand(1, 109); // Genera un número aleatorio entre 1 y 109
        if (esPrimo($numero_aleatorio) && !in_array($numero_aleatorio, $numeros_primos)) { // Verifica si el número es primo y no se repite
            $numeros_primos[] = $numero_aleatorio; // Agrega el número primo al array
        }
    }
    return $numeros_primos; // Retorna el array de números primos generados
}

// Definir la cantidad de números primos a generar
$N = 20; // Define la cantidad de números primos deseados

// Generar N números primos aleatorios menores que 110
$numeros_primos_generados = generarNumerosPrimos($N); // Llama a la función para generar números primos

// Imprimir los números primos generados
print_r($numeros_primos_generados); // Muestra los números primos generados
?>

</body> <!-- Cierra la sección del cuerpo del documento -->
</html> <!-- Cierra el elemento raíz del documento -->
