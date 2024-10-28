<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Declaración del conjunto de caracteres utilizado y la configuración de la vista adaptable para dispositivos móviles -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la página que se muestra en el navegador -->
    <title>Emoticono</title>
    <!-- Enlace a la hoja de estilos CSS externa que contiene el diseño visual de la página -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Codigo php con la lógica para conseguir el resultado random cada vez que se ejecute -->
    <?php 
    // Definimos el rango de emoticonos Unicode
    $min = 128512; // Carácter Unicode mínimo
    $max = 128586; // Carácter Unicode máximo

    // Generamos un número aleatorio dentro del rango
    $emoticonoUnicode = rand($min, $max);
    ?>

    <!-- Contenedor para mostrar el emoticono generado -->
    <div class="container">
        <!-- Título de la página que muestra el emoticono aleatorio generado por PHP -->
        <h2>
            Emoticono Aleatorio: <span>&#<?= $emoticonoUnicode; ?></span>
        </h2><br>

        <!-- Etiqueta para mostrar el codigo generado -->
        <h3>
            El codigo generado es: <?= $emoticonoUnicode; ?>
        </h3>

    </div>
</body>
</html>