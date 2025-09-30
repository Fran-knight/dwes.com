<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Elementos del Lenguaje</title>
    </head>
    <body>
<h1>Expresiones, operadores y operandos</h1>
<p>Una expresion es una combinacion de operandos y operadores
    que arroja un resultado. Tiene un tipo de datos que depende del tipo 
    de datos de sus operandos y de la operación realizada.<br>
    Un operador es un simbolo formado por uno o mas caracteres que 
    denota una operacion. <br>
    Los operadores pueden ser:
    <ul>
        <li>Unarios -> Solo necesitan un operando.</li>
        <li>Binasios -> Necesitan dos operandos. </li>
        <li>Ternarios -> Utilizan tres operandos. </li>
    </ul>
    Un operando es una expresion en si misma que siendo la 
    mas simple de un literal o una variable, pero tambien puede ser
    un valor devuelto por una función o el resultado de otra expresión. <br>
    Las operaciones de una expresión no se ejecutan a la vez, sino en un 
    orden según la precedencia y asociatividad del operador 
    Esto se puede cambiar a conveniencia.
</p>
<h2>Operadores</h2>
<h3>De asignación</h3>
<?php
$numero = 45;
$resultado = $numero + 5 -29;
$sin_valor = null;
?>

<h3>Aritméticos</h3>
<?php
/*
    + suma 
    - resta 
    * Multiplicacion 
    / Division 
    % modulo 
    ** Expenciacion

    Unarios 
    + Conversion a entero
    - El opuesto

*/

$numero1 = 15;
$numero2 = 18;
$suma = $numero1 + 10;

$resta = 25 - $numero2;
echo "<p>La suma de $numero1 y $numero2 es $suma y la resta es $resta </p>";

//El opuesto
$opuesto = -$numero1;
echo "<p>El opuesto de $numero1 es $opuesto </p>";
$resta = $numero2 - 75;
$opuesto = -$resta;
echo  "<p>El opuesto de $resta es $opuesto </p>";

$multiplicacion = $numero1 * 3;
$division = $numero1 / 3;
$modulo = $numero1 % 4;
$potencia = $numero1 ** 3;

echo "<p>La multiplicacion de $numero1 por 3 es $multiplicacion </p>";
echo "<p>La división de $numero1 por 3 es $$division </p>";
echo "<p>El módulo de $numero1 entre 4 es $$modulo </p>";
echo "<p>La potencia de $numero1 elevado a 3 es $$potencia </p>";

//Convertir a entero
$numero3 = "35";
$numero4 = +$numero3;
echo "<p> El \$numero3 es $numero3 y su tipo es ". gettype($numero3). "</p>";
echo "<p> El \$numero4 es $numero4 y su tipo es ". gettype($numero4). "</p>";

//Con float
$numero5 = 3.1416;
$numero6 = +$numero5;
echo "<p> El \$numero5 es $numero5 y su tipo es ". gettype($numero5). "</p>";
echo "<p> El \$numero6 es $numero6 y su tipo es ". gettype($numero6). "</p>";

?>
<h3>Asignación aumentada</h3>
<?php
/* Operadores de asignación aumentada
    además de una operación aritmética hay una asignación.

    ++ Incremento
    -- Decremento
    += Suma y asignación
    -= Resta y asignación

    *= Multiplicación y asignación
    /= División y asignación
    %= Módulo y asignación
*/

$numero = 4;
$numero++; //Equivalente a $numero = $numero + 1;

echo "<p>El numero incrementado es $numero </p>";

$numero = 10;
$resultado = $numero++ *2;
echo "<p>El resultado es $resultado</p>";

$numero += 5; //$numero = $numero + 5;

echo "<p>El numero es $numero </p>";
$numero -= 3;
echo "<p>El numero es $numero </p>";


$numero *= 3; 
echo "<p>El numero es $numero </p>";

$numero %= 7;
echo "<p>El numero es $numero </p>"; 

?>

<h2>Operaciones relacionales </h2>
<?php
/*
    == Igual a
    === Identico a (igual y del mismo tipo)
    !== Distinto o distinto tipo
    > mayor
    < menor 
    >= Mayor igual
    <= Menor igual
    <=> Nave espacial
*/

$n1 = 5;
$n2 = 8;
$cadena = "5";

$resultado = $n1 == $n2;
echo "<p>Es n1 igual que n2 " . (int)$resultado . "</p>";

$resultado = $n1 == $cadena;
echo "<p>Es n1 igual a cadena " . (int)$resultado . "</p>";

$resultado = $n1 === $cadena;
echo "<p>Es n1 igual a cadena " . (int)$resultado . "</p>";

$resultado = $n1 != $n2;
echo "<p>Es n1 igual a cadena " . (int)$resultado . "</p>";

$resultado = $n1 !== $cadena;
echo "<p>Es n1 no identico a cadena " . (int)$resultado . "</p>";

//Nave espacial

/* Si n1 es mayor que n2 -> 1
      n1 es igual que n2 -> 0
      n1 es menor que n2 -> -1
    Se emplea para evitar lo siguiente:
    if(n1 > n2) {
    } elsif(n1<n2) {
     }else {
        }

*/
$resultado = $n1 <=> $n2;
echo "<p>El resultado es $resultado</p>";

$nombre1 = "abcZacarias";
$nombre2 = "abcadela";
$resultado = $nombre1 > $nombre2;
echo "<p>El resultado es $resultado</p>";
?>

    </body>
</html>