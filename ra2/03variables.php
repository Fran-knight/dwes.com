<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Elementos del Lenguaje</title>
    </head>
    <body>
<?php
//Una variable se declara al asignarle un valor por primera vez
//sintaxis $variable = expresión

$numero = 45;
//Si utilizo una variable que no esta declarada, entonces es undefined
$resultado = $num + 4;
echo "<p> el resultado es $resultado</p>"
?>

<h2>Análisis de variables</h2>
<h3>Análisis simple</h3>
<?php
//Consiste en introducir una variable en una cadena con " o heredoc
// para incrustar su valor dentro de la cadena
$num= 5;
echo "<p>Variable num interpolada: $num</p>";
?>

<h3>Análisis complejo</h3>
<?php
$calle = "trafalgar Sq";
$numero = 5;
$poblacion = "London";
$distrito = 5000;
//Tiene que salir: 5gh, Trafalgar sq, London 5000
echo "<p>Mi dirección en Londres es $numeroth, $calle $poblacion $distrito</p>";
//Lo evitamos con {} "
echo "<p>Mi dirección en Londres es {$numero}th, $calle $poblacion $distrito</p>";
?>

<h2>Funciones para variables</h2>
<?php
//Funcion Gettype() -> Devuelve el tipo de una variable como cadena de caracteres
$numero = 10;
echo "<p>El tipo de $resultado es: " . gettype($resultado) . "</p>";
echo "<p>El tipo de datos de una expresión es : " . gettype($numero + 3.45) . "</p>";

//Función empty() -> Devuelve true si la variable es vacía o no está definida. 
//Si es un entero, devuelve True con un 0.
//Si es un float, devuelve true si es 0.0
//Si es cadena devuelve true si es cadena vacia
//Devuelve true si la avriable es null o false
if (empty($numero)) echo "<p> \$numero está vacía <br>";
else echo "<p> \$numero tiene contenido $numero <br>";

//funcion isset() -> Devuelve true si la variable está definida y no es null
if (isset($nuevavariable)) echo "<p> La variable está definida <br>";
else echo "<p> La variable no está definida <br>";

$variable_null= null;
if (isset($variable_null)) echo "<p> La variable null está definida <br>";
else echo "<p> La variable null no está definida <br>";

echo "</p>";

/*Funciones que comprueban el tipo de datos 
is_bool() -> True si es boolean
is_int() -> True si es entero
is_float() -> True si es float
is_string() -> True si es cadena
is_array() -> True si es array

En cualquier otro caso, de vuelve false
*/ 


$edad = 25;
$mayor_edad= $edad > 18;
$numero_e = 2.71;
$mensaje = "El numero e es {$numero_e}<br>";

if (is_int($edad)) echo "<p> Edad es un entero <br>";
if (is_bool($mayor_edad)) echo "<p> Mayor_edad es boolean <br>";
if (is_float($numero_e)) echo "<p> Numero_e es float <br>";
if (is_string($mensaje)) echo "<p> Mensaje es cadena <br>";
?>

<h2>Constantes</h2>
<p>Una constante es un valor con nombre que no puede cambiar su valor a lo largo del programa.
    Se le asigna un valor en la declaración y permanece invariable. Hay dos formas de definir una constante:
        <ul>
            <li>Mediante la funcion define()</li>
            <li>Mediante la palabra reservada const</li>
        </ul>
</p>
<?php
//1º forma: Funcion define()
define("PI", 3.1416);
define("PRECIO_BASE", 1500);
define("DIRECTORIO_SUBIDAS", "/var/www/archivos");

echo "<p>El valor de PI es " . PI . "<br>";
$area_circulo = PI * 4 * 4;
echo "El área del círculo es $area_circulo<br>";
$path_archivo = DIRECTORIO_SUBIDAS . "/foto1.jpg";
echo "El archivo subido es $path_archivo<br>";

$precio_rebajado = PRECIO_BASE - PRECIO_BASE * 0.25;
echo "El precio rebajado es $precio_rebajado<br>";


//2º forma, mediante la palabra clave const
const SESION_USUARIO = 600;
echo "La sesion de usuario finaliza en " . SESION_USUARIO . "segundos <br>";

//Constantes predefinidas
echo "Este script es" . __FILE__ . "y esta en el directorio" . __DIR__ .  "y esta línea es " . __LINE__ . "<br>";
?> 
</body>
</html>