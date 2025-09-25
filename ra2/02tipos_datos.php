<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Elementos del Lenguaje</title>
    </head>
    <body>


<h1>Tipos de datos</h1>
<h2>Tipos escalares (Primitivos)</h2>
<ul>
    <li>Booleanos</li>
    <li>Numérico entero</li>
    <li>Numérico en coma flotante</li>
    <li>Cadena de caracteres</li>
</ul>
<h2>Tipos de datos compuestos</h2>
<ul>
    <li>Arrays</li>
    <li>Objetos</li>
    <li>Callable (eng) (Funciones)</li>
    <li>Iterable</li>
</ul>
<h2>Tipos especiales</h2>
<ul>
    <li>Null</li>
    <li>Resource (eng)</li>
</ul>

<h2>Booleanos</h2>
<p>Inicialmente las constantes true y false son valores de tipo booleano, sin embargo,
PHP extiende el significado de valor Booleano a valor cierto y falsedad en
otros tipos de datos</p>
<ul>
    <li>Numérico entero: 0 y -0 es false, cualquier otro es true</li>
    <li>Numérico con coma flotante 0.0 y -0.0 es false, cualquier otro es true</li>
    <li>Un array de 0 elementos es false, con elementos es true </li>
    <li>El tipo especial null es false, un valor distinto es true>/li>
    <li>Una variable no definida es false</li>
    <li>La cadena vacía es false, cualquier otra es true</p>

</ul>
<?php
$valor_booleano = true;
$edad = 33;
$mayor_edad = $edad > 18;

echo "<p>Mayor de edad es booleano: ". is_bool($mayor_edad) . "</p>";
$dinero = 20;
if ($dinero) echo "<p>Soy rico</p>";

$mi_nombre = "Juan";
//Pregunta si $Mi_nombre es distinto de ""
if ($mi_nombre) echo "<p>Me llamo $mi_nombre</p>";
?>

<h2>Enteros</h2>
<p>En PHP los números enteros son de 32 bits. 
    Pueden expresarse en diferentes notaciones</p>
<?php
$numero_entero = 333;
echo "<p>El número entero es $numero_entero</p>";

$numero_negativo = -333;
echo "<p>El número negativo es $numero_negativo</p>";

//Podemos expresar un número en octal
$numero_octal = 0120;
echo "<p>El número octal 0120 es en el sistema decimal $numero_octal</p>";

//Puedo mostrar el número octal con la función decoct
echo "<p>El número octal 0120 expresado 
en octal es " . decoct($numero_octal) . "</p>";

//Humero en hexadecimal
$numero_hexadecimal= 0xAB9C;
echo "<p>El número hexadecimal 0xAB9C es en el sistema 
decimal $numero_hexadecimal</p>";

//Puedo mostrar el número hexadecimal con la función dechex()
echo "<p>El número hexadecimal 0xAB9C expresado
en hexadecimal es " . dechex($numero_hexadecimal) . "</p>";

//Número en binario
$numero_binario = 0b010101011101;
echo "<p>El número binario 0b010101011101 es en el sistema
decimal $numero_binario</p>";

//Puedo mostrar el número binario en binario con la función decbin()
echo "<p>El número binario 0b010101011101 expresado
en binario es " . decbin($numero_binario) . "</p>";

//Con cualquier funcion dec...() obtengo el número en un sistema de numeración
//diferente al decimal
echo "<p>El número binario $numero_binario expresado en hexadecimal es " . dechex($numero_binario) . "</p>";

$numero_binario = 0b11111111; // 255 en decimal y FF en hexadecimal
echo "<p>El número binario $numero_binario expresado en hexadecimal es " . dechex($numero_binario) . "</p>";
?>

<h2>Números en coma flotante</h2>
<p>El separador decimal es el punto . y se pueden expresar números muy grandes
    o muy pequeños con notación científica.</p>

<?php
$pi = 3.1416;
echo "<p>El número pi (relación entre longitud y 
diametro de una circunferencia) es $pi</p>";
echo "<p>El número pi pero con 3 decimales " . round($pi,3). "</p>";

$inf_int = 7.9e13;
echo "<p>La información que circula por internet en un día es $inf_int bytes</p>";

$tamayo_virus = 0.2e-9;
echo "<p>El tamaño de un virus es $tamayo_virus </p>";
?>

<h2>Cadenas de caracteres</h2>
<p>El tipo string o cadena de caracteres es una serie de caracteres
    cada caracter equivale a un byte. PHP solo admite 256 caracteres,
    las cadenas estan en ASCII y no hay soporte utf8. Hay 4 formas de 
    expresar una cadena de caracteres</p>
<ul>
    <li>Comillas simples ' '</li>
    <li>Comillas dobles " "</li>
    <li>Cadena heredoc </li>
    <li>Cadena nowdoc </li>
</ul>
<h3>Comillas simples</h3>
<?php
//Una cadena de caracteres entre comillas simples no reconoce 
//ningun caracter de escape excepto el de la propia comilla simple, excepto
// \' y \\ además, no podemos interpolar variables
echo '<p>Esto es una cadena sencilla</p>';
echo '<p>Puedo poner una cadena 
en varias líneas
por que la sentencia no acaba
hasta el punto y coma </p>';

//No se reconocen caracteres de escape, salvo \' y \\
echo 'El mejor pub irlandes es O\'Donnel</p>';
echo '<p>La raiz del disco duro en windows es C:\</p>';
echo '<p>La raiz del disco duro en windows es C:\\</p>';
echo '<p>Esta cadena tiene salto \n de linea</p>';

//NO interpola variables
echo '<p>Hola, me llamo $mi_nombre</p>';
?>

<h3>Comillas dobles</h3>
<p>Es la forma habitual de expresar cadenas de caracteres ya que expande
    los caracteres de escape y las variables</p>
<?php
$cadena = "Esto es una cadena con comillas dobles";
echo "<p>¿Es la cadena un objeto? " . is_object($cadena) . "</p>";
if (is_object($cadena)) echo "<p>Es un objeto</p>";
else echo "<p>La cadena no es un objeto</p>";

$con_secuencias = "\t\tEl símbolo \$ se emplea para las variables \n y
si lo quieres en una cadena hay que escaparlo con \\. Es mejor usar \" para
delimitar las cadenas en lugar de '</p>";

echo $con_secuencias;
?>

<h3>Cadenas Heredoc</h3>
<p>Es una cadena muy larga, incluyendo saltos de línea que se respetan, que comienza por <<<
y un identificador (Generalmente en mayúsculas). Justo después hay un salto de línea y
se escribe la cadena, con saltos de línea que sean necesarios, con interpolación de 
variable sy caracteres de escape. Para finalizar la cadena se hace un salto 
de línea y se vuelve a poner el mismo identificador</p>
<?php
$cadena_hd = <<<CADENAHD
Esto es una cadena heredoc que respeta
los saltos de línea, le puedo poner variables como $mi_nombre
y además secuencias de escape.
El identificado no necesita \$ y 
tampoco usamos \", simplemente la escribimos y
acabamos con un salto de línea más el identificador
CADENAHD;
/*
echo <<<TABLA
<table>
    <caption>Tabla de prueba</caption>
    <thread>
        <tr>
        <th>Referencia</th><th>Descripción</th><th>PvP</th>
        </tr>
    </thread>
    <tbody>
    </tbody>
TABLA;
*/
?>
<h3> Cadenas Nowdoc</h3>
<p>La cadena Nowdoc es como Heredoc pero con comillas simples. 
    No se interpolan variables ni se reconocen secuencias de escapa 
    mas allá de \ y ' . Si se respetan los saltos de línea</p>
<?php
$cadena_nd = <<<'ND'
<p>Esto es una cadena nowdoc
y el salto de línea no lo respeta,
no puedo meter variables y solo
reconoce \\ y \'</p>
ND;
?>

<h2>Conversión de tipos</h2>
<p>Hay dos tipos de conversiones de tipos: Implícitas y explícitas: 
    Las primeras ocurren cuando en una expresión hay operandos de diferente tipo. PHP convierte alguno de ellso 
    para evaluar la expresión.</p>

<?php
$cadena = "25";
$numero = 8;
$booleano = true;
$resultado = $cadena + $numero + $booleano; //25+8+1 (Por el true)
echo "<p>El resultado es $resultado</p>";

echo <<<IMPORTANTE
<p>Importante, cuando se haga la conversion implicita, solo afecta al operando durante la evaluacion 
de la expresión, pero no cambia el tipo de datos de la variable. Es decir, la conversión 
de la variable $cadena a entero solamente para evaluar la expresión de suma, pero $cadena sigue siendo tipo string</p>
IMPORTANTE;

$flotante = 3.5;
$resultado = $cadena + $flotante + $numero + $booleano;
echo "<p>El resultado es $resultado</p>";

$cadena = "25 marranos dan más provecho que 7 lechones";
$resultado = $numero + $cadena;
echo "<p>El resultado es $resultado</p>";

echo <<<EXPLICITAS
<p>Las conversiones explícitas , conocidas como casting o modelo, se hacen precediendo
la expresión con el tipo de datos a convertir entre paréntesis</p>
EXPLICITAS;
//Para convertir a un número entero sería (int)expresión, (float)expresión, (string)exoresión, etc...
echo"<p>Conversiones a entero</p>";
$valor_booleano = true;
$valor_convertido = (int)$valor_booleano;
echo "<p>El valor convertido a entero es $valor_convertido</p>"; 
$valor_float = 3.14159;
$valor_convertido = (int)$valor_float;
echo "<p>El valor convertido a entero es $valor_convertido</p>";

$valor_cadena = "123";
$valor_convertido = (int)$valor_cadena;
echo "<p>El valor convertido a entero es $valor_convertido</p>";

$valor_float = "3.5614";
$valor_convertido = (float)$valor_float;
echo "<p>El valor convertido a float es $valor_convertido</p>";

$valor_flot = "2.5e-10";
$valor_convertido = (float)$valor_flot;
echo "<p>El valor convertido a float es $valor_convertido</p>";
echo "<p>Tipo de datos del valor convertido ". gettype($valor_convertido) . "</p>";
?>
    </body>
</html>