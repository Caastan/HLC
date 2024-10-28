<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Datos</title>
    
</head>
<body>

    <!-- Tipos de Datos -->
    <h2>1. Tipos de Datos</h2>
     
    <?php
    // Declaración de diferentes tipos de datos
    $entero = 10;
    $flotante = 10.5;
    $cadena = "Hola mundo";
    $booleano = true;

    // Mostrar los valores
    echo "Entero: $entero<br>";
    echo "Flotante: $flotante<br>";
    echo "Cadena: $cadena<br>";
    echo "Booleano: " . ($booleano ? 'true' : 'false') . "<br>";
    ?>
     

    <!-- Cadenas -->
    <h2>2. Cadenas</h2>
     
    <?php
    $cadena = "Hola";
    echo "Longitud de la cadena: " . strlen($cadena) . "<br>";
    echo "Cadena en mayúsculas: " . strtoupper($cadena) . "<br>";
    echo "Concatenar: " . $cadena . " Mundo" . "<br>";
    ?>
     

    <!-- Comillas dentro de cadenas -->
    <h2>3. Comillas dentro de cadenas</h2>
     
    <?php
    $cadena_comillas = "Este es un ejemplo de 'comillas simples' y \"comillas dobles\".";
    echo $cadena_comillas . "<br>";
    ?>
     

    <!-- Diferencias entre comillas simples y dobles -->
    <h2>4. Diferencias entre comillas simples y dobles</h2>
     
    <?php
    $variable = "mundo";
    echo 'Con comillas simples: Hola $variable<br>';
    echo "Con comillas dobles: Hola $variable<br>";
    ?>
     

    <!-- Comillas en código HTML/CSS -->
    <h2>5. Comillas en código HTML / CSS</h2>
     
    <?php
    $html = "<div style=\"color: red;\">Texto en rojo</div>";
    echo $html . "<br>";
    ?>
     

    <!-- Caracteres especiales -->
    <h2>6. Caracteres especiales</h2>
     
    <?php
    echo "Línea 1\nLínea 2\tTabulación \\ Barra invertida<br>";
    ?>
     

    <!-- Concatenar cadenas -->
    <h2>7. Concatenar cadenas</h2>
     
    <?php
    $cadena1 = "Hola";
    $cadena2 = " Mundo";
    echo $cadena1 . $cadena2 . "<br>";
    ?>
     

    <!-- Añadiendo saltos de línea -->
    <h2>8. Añadiendo saltos de línea</h2>
     
    <?php
    echo $cadena1 . "\n" . $cadena2 . "<br>";
    ?>
     

    <!-- Variables -->
    <h2>9. Variables</h2>
     
    <?php
    $variable = 10;
    echo "El valor de la variable es: $variable<br>";
    ?>
     

    <!-- Usar variables -->
    <h2>10. Usar variables</h2>
     
    <?php
    $a = 5;
    $b = 3;
    echo "La suma de $a y $b es: " . ($a + $b) . "<br>";
    ?>
     

    <!-- Concatenar variables y cadenas -->
    <h2>11. Concatenar variables y cadenas</h2>
     
    <?php
    $nombre = "Juan";
    echo "Hola, " . $nombre . "<br>";
    ?>
     

    <!-- Variables en cadenas -->
    <h2>12. Variables en cadenas</h2>
     
    <?php
    echo "Mi nombre es $nombre<br>";
    ?>
     

    <!-- Tipos de variables -->
    <h2>13. Tipos de variables</h2>
     
    <?php
    $entero = 25;
    $flotante = 3.14;
    $booleano = false;

    echo "Entero: $entero<br>";
    echo "Flotante: $flotante<br>";
    echo "Booleano: " . ($booleano ? 'true' : 'false') . "<br>";
    ?>
     

    <!-- Operaciones aritméticas -->
    <h2>14. Operaciones aritméticas</h2>
     
    <?php
    $x = 10;
    $y = 2;

    echo "Suma: " . ($x + $y) . "<br>";
    echo "Resta: " . ($x - $y) . "<br>";
    echo "Multiplicación: " . ($x * $y) . "<br>";
    echo "División: " . ($x / $y) . "<br>";
    ?>
     

    <!-- Nombres de variables -->
    <h2>15. Nombres de variables</h2>
     
    <?php
    $numeroDeEstudiantes = 20;
    $promedioEdad = 21.5;
    echo "Estudiantes: $numeroDeEstudiantes, Promedio de edad: $promedioEdad<br>";
    ?>
     

    <!-- Unir variables y texto -->
    <h2>16. Unir variables y texto</h2>
     
    <?php
    echo "Hay $numeroDeEstudiantes estudiantes con un promedio de edad de $promedioEdad<br>";
    ?>
     

    <!-- Variables lógicas -->
    <h2>17. Variables lógicas (boolean)</h2>
     
    <?php
    $esMayor = true;
    if ($esMayor) {
        echo "Es mayor de edad<br>";
    } else {
        echo "Es menor de edad<br>";
    }
    ?>
     

    <!-- Variables enteras -->
    <h2>18. Variables enteras (integer)</h2>
     
    <?php
    $edad = 30;
    echo "Edad: $edad<br>";
    ?>
     

    <!-- Notación complemento a dos -->
    <h2>19. Notación complemento a dos</h2>
     
    <?php
    $binario = 0b1010; // binario 10
    echo "Valor en binario: $binario<br>";
    ?>
     

    <!-- Variables decimales -->
    <h2>20. Variables decimales (float)</h2>
     
    <?php
    $precio = 19.99;
    $descuento = 5.00;
    echo "Precio final: " . ($precio - $descuento) . "<br>";
    ?>
     

    <!-- Variables de cadenas -->
    <h2>21. Variables de cadenas (string)</h2>
     
    <?php
    $mensaje = "buenos días";
    echo "Mensaje original: " . $mensaje . "<br>";
    echo "En mayúsculas: " . strtoupper($mensaje) . "<br>";
    ?>
     

    <!-- Conversiones de tipos -->
    <h2>22. Conversiones de tipos</h2>
     
    <?php
    $numero = 123;
    $cadena = (string)$numero;
    echo "Número como cadena: $cadena<br>";

    $cadena = "456";
    $numero = (int)$cadena;
    echo "Cadena como número: $numero<br>";
    ?>
     

    <!-- Conversión Explícita -->
    <h2>23. Conversión Explícita</h2>
     
    <?php
    $flotante = 10.75;
    $entero = (int)$flotante;
    echo "Flotante convertido a entero: $entero<br>";
    ?>
     

    <!-- Conversión Automática -->
    <h2>24. Conversión Automática</h2>
     
    <?php
    $entero = 10;
    $flotante = 2.5;
    $resultado = $entero + $flotante;
    echo "Resultado de la suma automática: $resultado<br>";
    ?>
     

    <!-- Variables como variables lógicas -->
    <h2>25. Variables como variables lógicas</h2>

    <?php
        $existeUsuario = true;

        if($existeUsuario){
            echo "El usuario existe";
        }else{
            echo "El usuario no existe";
        }

    ?>
