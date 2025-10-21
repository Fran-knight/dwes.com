<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Elementos del Lenguaje</title>
    </head>
    <body>

<p>
Invocación o llamada a la función -> La sentencia que solicita la ejecución de la función, momento en el cual el flujo del programa se desvía a la primera sentencia de la función y comienza su ejecución.
</p>

<p>Las funciones habitualmente utilizan datos que se les pasan en el momento de invocarse. Estos datos se conocen como parámetros o argumentos.
</p>

<p>Pueden devolver uno varios valores al punto de invocación.

<p>Tipos de función:</p>
<ul>
<li> Intermas, integradas o predefinidas. Las propias del lenguaje y que forman la biblioteca estándar del lenguaje. Sin embargo, es posible que el lenguaje tenga habilitados módulos los cuales también proporcionan funciones integradas
</li>
<li>Métodos -> Funciones definidas dentro de una clase de objetos </li>
<li>De usuario -> Funciones que el desarrollador define en sus scripts- </li>
</ul>
</p>
<h2> 3.1 Definicion de una funcion </h2>
<p>
    Antes de emplear una funcion hay que definirla. 
    En su definicion se indica nombre de la funcion,
    conjunto de argumentos o de parámetros. Sentencias de la funcion incluyendo
    el retorno de su valor.
    
    Sintaxis:
    <pre>
        funcion <nombreFuncion>([<par1>, <par2>, <par3>, ... , <parN>]) {
        <Sentencias>    
        return <expresion>
    }
    </pre>
</p>

<h2>3.2 Paso de parámetros</h2>
<p>PArámetros: Dato que la función necesita para ejecutarse
    Los parámetyros permiten ejecutar una función 
    muchas veces con diferentes valores.<br>
    Tipos de parámetros:
    <ul>
        <li>PArámetro formal -> El que se define en la cabecera de la función.
            Este parámetro es equivalente a una variable y, por ende, 
            sigue las reglas de nombrado de identificadores. </li>
        <li> PArámetro real -> El que se indica en la invocación de la función. 
            Puede ser una expresión de cualquier tipo. Se les conoce como 
            argumentos.
    </ul>
</p>
<?php 
define ("PI", 3.14);

function areaTriangulo($base, $altura) {
    $area = $base * $altura / 2;
    return $area;
}
?>

<h2> Invocacion de las funciones de ejemplo</h2>
<?php
$area = areaTriangulo(5, 4);
echo "<p>El área del triangulo de base 5 y altura 4 es $area </p>"
?>

<h2> PAseo de parámetros por valor y por referencia</h2>

<p>
Entro los argumentos y parámetros de la función hay una asignacion en orden,
es decir, el primer argumento corresponde al primer parámetro, el segundo 
al segundo parámetro...  
<ul>
    <li>
        Paso de paámetro por valor -> El argumento en la llamada de 
        la función SE COPIA en el parámetro de la función. SON DOS VARIABLES
        DIFERENTES, CADA UNA CON SU VALOR. Al terminar la función el parámetro
        desaparece y el argumento permanece </li>
    </li>
</ul>  
</p>
<p>
    Paso por valor: <br>
    nombreFunction($arg1, arg2, arg3)
    function nombreFuncion($par1, $par2, $par3) {
        //sentencias
        return;
    }
</p>
<ul>
    <li>Paso por referencia -> El argumento que se pasa en la invocación 
        de la función es una referencia a una variable.. Por tanto, solo hay 
        UNA ÚNICA VARIABLE entre el argumento y su correspondiente parámetro. 
        De ahí que si dentro de la funcion se modifica el parámetro,
        el nuevo valor es visible.
    </li>
</ul>

<?php  
function areaPentagono2(&$perimetro, &$apotema){
    $area = $perimetro * $apotema / 2;
    return $area;
}
$p = 30;
$a = 5;
echo "<p>Script principal</p>";
$area = areaPentagono2($p, $a);
echo "<p>El area del pentagono con valores $p y $a es $area </p>";
?>

<p>Los arrays y los objetos siempre se pasan por referencia, 
    y los tipos primitivos por valor
</p>

<?php 
function duplicaValoresArray(&$array) {
    for ($i =0; $i < count($array); $i++) {
        $array[$i] = $array[$i] * 2;
    }
}
$numeros = [5,4,3,2,1,0];
echo "<p>Array antes de la función: ";
foreach ($numeros as $numero) echo "$numero ";
echo "</p>";

duplicaValoresArray($numeros);
echo "<p>Array después de la función: ";
foreach ($numeros as $numero) echo "$numero ";

?>
<h3>Parámetros pasados por defecto</h3>
<p>Puede definir un parámetroen la cabecera de la funcion con un valor 
    por defecto. Si en la invocación no indica un argumento para 
    ese parámetro, utiliza el valor indicado por defecto </p>

<?php
function volumenCilindro($radio, $altura= 10) {
    $volumen = $radio ** 2 * PI * $altura;
    return $volumen;
}

$volumen = volumenCilindro(5);
echo "<p> El volumen del cilindro es $volumen cm<sup>3</sup></p>";

$volumen = volumenCilindro(5, 11);
echo "<p> El volumen del cilindro es $volumen cm<sup>3</sup></p>";


/*Esto NO se puede hacer
function volumenCilindro2(altura = 10, $radio ) {

}
volumenCilindro2(5)
*/
?>
<h3> Tipos de datos en los parametros y valor de devolucion 
    de la funcion.</h3>
<p>Puedo indicar un tipo de datos a cada parámetro en la definición 
    de la función. Al invocar la función se intenta convertir el argumento 
al tipo indicado para el parámetro. Si no puede, se dispara la excepción 
TypeError. Si puede hacer la conversión, continua.</p>

<p>Tipos de datos:
    <ul>
        <li>Int</li>
        <li>Float</li>
        <li>Boolean</li>
        <li>String</li>
        <li>Callable (Una función)</li>
        <li>Object</li>
        <li>&lt;Clase&gt;</li>
        <li>Array</li>
    </ul>
    Cada tipo puede ir precedido por ? indicando que se espera un 
    argumento de ese tipo o un valor nulo. 

<h3>PArámetros con nombre</h3>
<p>Consiste en utilizar el nombre de un parámetro en la invocación de la función</p>
<h3>Valor de devolucion</h3>
<p>Con la sentencia return, en cualquier lugar de la funcion, se devuelve 
    un valor al punto de invocacion. Cualquier sentencia debajo de un return 
    no se ejecuta </p>

    <p>Podeoms devolver mas de un valor. Para ello  tenemos que 
        primero devolver en la funcion un array con todos los 
        valores que queremos devolver. En el punto de invocacion 
        podemos recoger el array con una funcion list</p>
<?php
function areaLongitud(float $radio): array {
    $resultado[] = $radio ** 2 * PI;
    $resultado[] = $radio * 2 * PI;
    return $resultado;
}
list($areaCirculo, $longitudCircunferencia) = areaLongitud(5);
echo "<p>El area es $areaCirculo y su circunferencia $longitudCircunferencia</p>";
?>

<h2>Ambito y visivilidad</h2>
<p>Ambito es la parte del programa donbde una variable existe</p>
<p>Ambito es la parte del programa donbde una variable existe y es accesible.</p>

<p>Si modificamos una variable global en una funcion, su valor modificado es el que persiste.</p>
<p>Las variables estaticas se definen en una funcion y solo son visibles dentro de la funcion.
    Pero conservan su valor entre llamadas a la funcion.
</p>
<p>Los parametros de la funcion son variables locales, iguales a las variables de la funcion. Solo son visibles
    y accesibles dentro de la funcion.
</p>

<?php
$a= 9;
$b = 5;
function suma() {
    global $a, $b;
    $suma = $a + $b;
    return $suma;
}

$suma = suma();
echo "<p>La suma de $a + $b es $suma.</p>";

function contadorEjecuciones() {
static $contador = 1;
echo "<p>Esta funcion se ha ejecutado $contador veces.</p>";

$contador++;
}
//1º ejecucion
contadorEjecuciones();

//2º Ejecucion, el valor tiene el valor que tenia al ejecutar la vez anterior, 2
contadorEjecuciones();

//3º Ejecuciń, igual que la anterior pero ahora vale 3
contadorEjecuciones();
?>
<h3>Numero indeterminado de parametros</h3>
<?php
//Funcion que calcula y devuelve la media aritmetica
/*
function mediaAritmetica() {
    $total = 0;
    foreach ($numeros as $numero){
        $total += $numero;
    }
    $media = $total / count($numeros);
    return $media;
}
    
$n1 = 4;
$n2 = 3;
$n3 = 9;
$media = mediaAritmetica($n1, 4, $n2, 6, $n3, 15);
echo "<p>LA media aritmetica es $media</p>";
*/
?>
<h2> Funciones anonimas y funciones flecha</h2>
<p>Funcion anonima es aquella que no tiene nombre, se emplean para construir una expresion de funcion 
    en la que funciones asignan una variable</p>
<p>Funcion flecha es aquella forma de expresar una funcion anonima cuando solo tiene una 

</p>

<?php
$suma = function($a, $b) {
    $suma = $a + $b;
}


?>

    </body>
</html>
