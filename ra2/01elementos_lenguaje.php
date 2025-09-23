<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Elementos del Lenguaje</title>
    </head>
    <body>
        <h1>Elementos del Lenguaje PHP</h1>
        <h2>Entrada y salida</h2>
        <p>La entrada de datos en PHP es con un formulario o enlace. La salida siempre se produce 
            con la función Echo y su forma abreviada, y la función print.
        Además, tenemos la función printf para la salida con formato.
        </p>
        <h3>Función de echo</h3>
<?php
echo "<p>La función echo emite el resultado de una expresión a la salida (del servidor al cliente web).
Se puede usar como función o como construcción del lenguaje. (Con o sin paréntesis)</p>";
echo "<p>Esto es un parrafo html enviado con echo</p>";
$nombre = "Juan";
echo = "<p> Hola $nombre, ¿Que tal estas?</p>";
?>
</html>