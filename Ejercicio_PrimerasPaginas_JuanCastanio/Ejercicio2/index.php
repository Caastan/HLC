<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Declaración del conjunto de caracteres utilizado y la configuración de la vista adaptable para dispositivos móviles -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la página que se muestra en el navegador -->
    <title>Dado</title>
    <!-- Enlace a la hoja de estilos CSS externa que contiene el diseño visual de la página -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Codigo php con la lógica para conseguir el resultado random cada vez que se ejecute -->
    <?php 
    //Se definen las dos variables que voy a usar asignandole el valor mínimo y máximo
    $min = 1;
    $max = 6;

    // Se genera un número aleatorio entre los valores definidos
    $res = rand( $min, $max);
    ?>
    
    <!-- Contenedor utilizado para darle estilo -->
    <div class="container">
        <!-- Título de la página que muestra el número aleatorio generado por PHP -->
        <h2>
            El número aleatorio es : <span> <?= $res?></span>
        </h2>
    </div>
</body>
</html>