<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Declaración del conjunto de caracteres utilizado y la configuración de la vista adaptable para dispositivos móviles -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la página que se muestra en el navegador -->
    <title>Destino</title>
    <!-- Enlace a la hoja de estilos CSS externa que contiene el diseño visual de la página -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Codigo php con la lógica para asignar valores de etiquetas -->
    <?php 
    //Asignacion de las variables inicio y enlace con las etiquetas a mostrar
    $hola = '<h1>¡Hola, Mundo!</h1>';
    $volver = '<a href="pag1.php">Volver</a>';
    ?>

    <!-- Contendor para dar estilo y mostrar las etiquetas -->
    <div class="container">
        <?= $hola ?> 
        <?= $volver ?>
    </div>;
    
</body>
</html>