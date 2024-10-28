<?php 
/* 
Ejercicio 1: Escribe un script que calcule el área y el perímetro de un rectángulo dados el ancho y el
alto.
*/

echo("Ejercicio 1: Calculo del área y perímetro de un rectángulo" . nl2br("\n"));

$ancho = 6;
$alto = 8;

$resP = $ancho*2 + $alto*2;
$resA = $ancho * $alto;

echo("El perímetro de un rectángulo de ancho " . $ancho . "m y alto " . $alto ."m es de " . $resP ." metros.".nl2br("\n")." El área es de " 
.$resA . " metros cuadrados." 
. nl2br("\n \n"));
/* 
Ejercicio 2: Dado dos números enteros, calcula el cociente y el resto de la división
*/
echo("Ejercicio 2: Calculo del cociente y resto de una división" . nl2br("\n"));

$num1 = 10;
$num2 = 5;

$cociente =  $num1 / $num2;
$resto =  $num1 % $num2;

echo("Los número que voy a utilizar son: " . $num1 . " y " . $num2 . "." . nl2br("\n") . "Cuyo cociente es de " . $cociente . " y su resto es " . $resto . "." .nl2br("\n \n"));


/* 
Ejercicio 3: Crea un script que muestre la diferencia entre el pre-incremento y el post-incremento.
*/

echo("Ejercicio 3: Diferencia entre el pre-incremento y el post-incremento" . nl2br("\n"));

$numero = 5;


echo "Valor inicial: $numero" . nl2br("\n");


$preIncremento = ++$numero;
echo "Después del pre-incremento:" . nl2br("\n");
echo "Valor de \$numero: $numero" . nl2br("\n");
echo "Valor de \$preIncremento: $preIncremento" . nl2br("\n");


$numero = 5;


$postIncremento = $numero++; 
echo "\nDespués del post-incremento:" . nl2br("\n");
echo "Valor de \$numero: $numero" . nl2br("\n"); 
echo "Valor de \$postIncremento: $postIncremento" . nl2br("\n \n"); 


/* 
Ejercicio 4: Redondeo de un número
Utiliza la función round() para redondear un número a 2 decimales.
*/

echo("Ejercicio 4: Redondeo de un número" . nl2br("\n"));

$numero = 12.34567;
$numeroRedondeado = round($numero, 2);

echo("El número " . $numero . " redondeado a 2 decimales es " . $numeroRedondeado . "." . nl2br("\n \n"));

/* 
Ejercicio 5: Calcular potencias
Escribe un script que calcule y muestre el valor de 3 elevado a la 4ta potencia usando el operador **.
*/

echo("Ejercicio 5: Calcular potencias" . nl2br("\n"));

$base = 3;
$exponente = 4;
$resultadoPotencia = $base ** $exponente;

echo($base . " elevado a la " . $exponente . " es " . $resultadoPotencia . "." . nl2br("\n \n"));

/* 
Ejercicio 6: Número aleatorio
Genera un número aleatorio entre 1 y 50 usando mt_rand().
*/

echo("Ejercicio 6: Número aleatorio" . nl2br("\n"));

$numeroAleatorio = mt_rand(1, 50);

echo("El número aleatorio generado entre 1 y 50 es: " . $numeroAleatorio . "." . nl2br("\n \n"));

/* 
Ejercicio 7: Conversión de tipos con operadores de comparación
Compara un número entero con una cadena de texto usando === y == para mostrar la diferencia.
*/

echo("Ejercicio 7: Conversión de tipos con operadores de comparación" . nl2br("\n"));

$numeroEntero = 5;
$cadenaTexto = "5";

echo("Comparando con ===: " . var_export($numeroEntero === $cadenaTexto, true) . nl2br("\n")); // Estrictamente igual
echo("Comparando con ==: " . var_export($numeroEntero == $cadenaTexto, true) . nl2br("\n \n")); // Igual, pero tipo convertido

/* 
Ejercicio 8: Formatear un número con separador de miles y decimales
Usa number_format() para mostrar un número con separador de miles y 3 decimales.
*/

echo("Ejercicio 8: Formatear un número con separador de miles y decimales" . nl2br("\n"));

$numeroAFormatear = 1234567.89123;
$numeroFormateado = number_format($numeroAFormatear, 3, '.', ',');

echo("El número " . $numeroAFormatear . " formateado es " . $numeroFormateado . "." . nl2br("\n \n"));

/* 
Ejercicio 9: Evaluar expresiones con operadores lógicos
Usa operadores lógicos para determinar si un número está entre 10 y 20.
*/

echo("Ejercicio 9: Evaluar expresiones con operadores lógicos" . nl2br("\n"));

$numeroEvaluar = 15;
$estaEntre = ($numeroEvaluar >= 10 && $numeroEvaluar <= 20);

echo("El número " . $numeroEvaluar . " está entre 10 y 20: " . var_export($estaEntre, true) . "." . nl2br("\n \n"));

/* 
Ejercicio 10: Incremento de caracteres
Muestra cómo se comporta el incremento en caracteres con el operador ++.
*/

echo("Ejercicio 10: Incremento de caracteres" . nl2br("\n"));

$caracter = 'a';
echo("El carácter inicial es: " . $caracter . nl2br("\n"));

$caracterIncrementado = ++$caracter; // Incrementa el carácter

echo("El carácter incrementado es: " . $caracterIncrementado . "." . nl2br("\n"));


?>