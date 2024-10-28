<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Declaración del conjunto de caracteres utilizado y la configuración de la vista adaptable para dispositivos móviles -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la página que se muestra en el navegador -->
    <title>Inicio</title>
    <!-- Enlace a la hoja de estilos CSS externa que contiene el diseño visual de la página -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Codigo php con la lógica para asignar valores de etiquetas -->
    <?php 
    //Asignacion de las variables inicio y enlace con las etiquetas a mostrar
    $inicio = '<h1>Página de inicio</h1>';
    $enlace = '<a href="pag2.php">Ir a página de destino</a>';
    ?>

    <!-- Contendor para dar estilo y mostrar las etiquetas -->
    <div  class="container">
        <?= $inicio ?>
        <?= $enlace ?>
    </div>
</body>
</html>