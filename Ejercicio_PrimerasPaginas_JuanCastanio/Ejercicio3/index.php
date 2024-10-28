<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Declaración del conjunto de caracteres utilizado y la configuración de la vista adaptable para dispositivos móviles -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la página que se muestra en el navegador -->
    <title>Color</title>
    <!-- Enlace a la hoja de estilos CSS externa que contiene el diseño visual de la página -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Codigo php con la lógica para conseguir el resultado random cada vez que se ejecute -->
    <?php 
    // Asignación de valores minimos y máximos del rgb
    $min = 0;
    $max = 255;

    // Hacer función random para cada valor de la variable
    $rojo = rand( $min, $max);
    $verde = rand( $min, $max);
    $azul = rand( $min, $max);

    // Asignación de los valores random a la variable rgb con comas
    $rgb = $rojo . ',' . $verde . ',' . $azul;
    ?>
    
    <!-- Contenedor utilizado para darle estilo -->
    <div class="container">
        <!-- Título de la página que muestra el número aleatorio generado por PHP -->
        <h2>
            El color generado aleatorio es: (<?= $rgb ?>)
        </h2>

        <!--  Contendor utilizado para mostrar el color aleatorio-->
        <div class="cuadro" style="background-color: rgb(<?= $rgb ?>);"></div>
    </div>
</body>
</html>