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
echo "<p> Hola $nombre, ¿Que tal estas?</p>";
//NO -> echo ("<p> Hola", $nombre, "¿Que tal estas?</p>"); // No se puede hacer así
echo ("Hola $nombre, ¿Que tal estas?"); // Con paréntesis

//Salto de línea al final de la línea
echo "<p>Hola, esta línea acaba en un salto \n";
echo "y esta línea empieza en la siguiente línea \n y esta va despues.</p>";

$nombre = "María";
$apellidos = "Gómez";
echo "<br> Mi nombre es $nombre y mi apellido es $apellidos <br>";
echo "<br>Mi nombre es " . $nombre . " y mi apellido es " . $apellidos . "<br>";

echo "<br>Uno mas dos son " . (1 + 2) . " y tiene que haber salido 3<br>";

echo "<h4> Forma abreviada de echo </h4>";
echo "<p> Cuando hay que enviar a la salida el resultado de una expresión pequeña
disponemos de la forma abreviada de echo, que pemrite intercalarse en el código html con menos esfuerzo y más legible.</p>";
$tiene_portatil = true;
?>
<!-- Estamos en modo html -->
<p>Mi nombre es <? $nombre. " ". $apellidos ?> y estoy programando en PHP </p>
<!--Uso habitual de echo abreviado en formularios-->
<input type="test" size="30" name="nombre" id="nombre" value="<?=$nombre?>">
<input type="checkbox" name="portatil" id="portatil" <?=$tiene_portatil ? "checked" : ""?> >
<?php
//Que ocurre si tengo que enviar a la salida codigo html con cadenas de caracteres
echo "<input type= 'text' name='nombre' id='apellidos' size='30'>";
?>

<!-- Funcion print -->
 <h4>Función print</h4>
 <p>Funciona como echo </p>
<?php
print "<p>Esto es una cadena \n que tiene mas de una linea \n y se envía a la salida </p>";
$pi = 3.1416;
$radio = 3;
$circunferencia = 2*$pi*$radio;
print"<br>La longitud de radio $radio es $circunferencia <br>";

//La funcion printf permite dar salida con formato
echo "<h4>Función printf</h4>";
printf("<br>La circunferencia de radio %d es %f", $radio, $circunferencia);
?>
    </body>
</html>