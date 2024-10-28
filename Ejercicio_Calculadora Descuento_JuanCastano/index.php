<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Descuentos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>

<h1>Calculadora de Descuentos</h1>
<form action="index.php" method="POST">

    <!-- Aqui con este formulario solicito todos los datos del usuario para utilizarlo en la lógica php -->
    <label for="nombre_producto">Nombre del Producto:</label>
    <input type="text" id="nombre_producto" name="nombre_producto" required>

    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" min="1" required>

    <label for="precio_unidad">Precio por Unidad:</label>
    <input type="number" id="precio_unidad" name="precio_unidad" step="0.01" required>

    <!-- Boton para poder enviar el formulario -->
    <input type="submit" value="Calcular">
</form>


<!-- Lógica php para realiozar todo -->
<?php if(isset($_POST["nombre_producto"])) {?>
    <div>
        <h2>Detalles producto</h2>
        <table>
            <!-- Para mostrar el titulo de cada campo -->
            <tr>
            <!-- Variable de tipo String con el nombre del producto -->
            <td> <?php $nombreProducto = 'Nombre de Producto'; echo $nombreProducto;?> </td>
            <td>Cantidad</td>
            <td>Precio por Unidad</td>
            <td>Total sin Descuento</td>
            <td>Descuento</td>
            <td>Total con Descuento</td>
            </tr>

            <tr
            >
            <td><?php 
            // Variable recogida del formulario y mostrada.
            $nombre_producto =  $_POST["nombre_producto"];
            echo $nombre_producto; 
            ?></td>
            <td><?php 
            $cantidad = $_POST["cantidad"];
            echo $cantidad; ?></td>
            <!-- Formateo en € del precio por unidad -->
            <td><?php 
            $precio_unidad = $_POST["precio_unidad"];
            echo $precio_unidad . " €";  ?></td>
            <td><?php
            // Iniciación de la variable total con el total recogido del formulario
            $total = $cantidad * $precio_unidad;
            echo "$total €"; 
            ?>
            </td>
            <td><?php   
            // Lógica para hacer el descuento si el total es mayor a 50.
            $descuento = 0.00;
             if($total > 50.00){
                $descuento = 10.00;
             }
             
             echo $descuento;
             ?></td>

            <td><?php
            $totalFinal = $total * (1 - $descuento / 100); // Aplicar descuento si existe
            
            $formateo =  number_format($totalFinal, 2, ',', '.');
            // Mostrar el total (con o sin descuento) y formateado. (CONCATENACIÓN DE STRING CON NUMERO)
            echo $formateo . " €";
            ?></td>
            </tr>
        </table>

        <?php 
        //Variable boolean para poder hacer la logica de compra grande
        $boolean = true;
        if($total > 100){
            $boolean = true;
        }else{
            $boolean = false;
        }
            if($boolean){
                echo "<script>alert('¡Compra Grande!');</script>";
            }else{
                echo "<script>alert('¡Compra Normal!')</script>";
            }
        }?>

    </div>
</body>
</html>