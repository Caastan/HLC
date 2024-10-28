<?php

require 'vendor/autoload.php'; // Cargar autoload de Composer

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;

$host = 'http://localhost:4444'; // Cambia esto si tu Selenium Server está en otro lugar

// Configurar las capacidades del navegador
$capabilities = DesiredCapabilities::chrome();
$capabilities->setCapability('chromeOptions', [
    'binary' => 'C:\Perfiles\DAM\Documents\2DAM-M\HLC\prueba_practica_php\Selenium\chromedriver.exe'
]);

$driver = RemoteWebDriver::create($host, $capabilities);

// URL del evento de VividSeats
$url = "https://www.vividseats.com/real-madrid-tickets-estadio-santiago-bernabeu-12-22-2024--sports-soccer/production/5045935";

// Navegar a la página
$driver->get($url);

// Esperar a que el contenido esté disponible
$driver->wait()->until(
    WebDriverExpectedCondition::presenceOfElementLocated(WebDriverBy::className('ticket-listing')) // Ajusta esto a la clase correcta
);

// Obtener la lista de entradas
$entradas = $driver->findElements(WebDriverBy::className('ticket-listing'));

// Iterar sobre cada entrada y extraer la información deseada
foreach ($entradas as $entrada) {
    $sector = $entrada->findElement(WebDriverBy::className('sector'))->getText() ?? 'N/A';
    $fila = $entrada->findElement(WebDriverBy::className('row'))->getText() ?? 'N/A';
    $precio = $entrada->findElement(WebDriverBy::className('price'))->getText() ?? 'N/A';

    echo "Sector: $sector, Fila: $fila, Precio: $precio<br>";
}

// Cerrar el navegador
$driver->quit();
?>
