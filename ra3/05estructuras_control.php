<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Elementos del Lenguaje</title>
    </head>
    <body>
        <h1>Estructuras de control</h1>
        <h2>Sentencias</h2>
        <p>
            Las sentencias simples acaban en ; pudiendo haber más de una en
            una misma línea.
        </p>
<?php
$numero = 3; echo "El número es $numero<br>"; $numero +=3; print "ahora es numero $numero</p>";
?>

<p>Un bloque de sentencias es un conjunto de sentencias simples encerradas entre llaves. 
    No suelen ir sueltas, sino formar parte de una estructura de control. Además, se pueden anidar</p>

<?php
{
    $numero = 5;
    echo "<p>El número es $numero<br>";
    $numero = 2;
    echo "<p>El número es $numero<br>";
    {
        $numero = 8;
        $numero = 2;
        "<p>El número es $numero</p>";
    }

}
?>
<h3>Estructura condicional simple</h3>
<?php
/*
    Sintaxis:

    if(<condicion>) <sentencia>
*/
$numero = 4;
if($numero >=4 ) echo"<p>El número es mayor o igual a 4</p>";

if( $numero === 4 and $numero %2 === 0 )
    echo"<p>El numero es igual a 4 y por tanto es par</p>";

if( $numero === 4 or $numero < 8) {
    echo "<p>El numero es igual a 4<br>";
    echo"<p>Además es inferior a 8</p>";
}

if($numero ===5 - 1 ) {
    echo "<p>El numero es igual a 5 - 1</p>";
}
?>

<h3>Estructura condicional compuesta</h3>

<?php
$n1 = 9;
$n2 = 5;
$n3 = 10;
echo "<p>";
if($n1 == 9 or $n2 < $n1 and $n3 > 10) {
    echo "el resultado global ha sido true";
} else {
    echo "El resultado global ha sido false";
}
echo "</p>";

//If con su única sentencia en una única línea y else con su sentencia en otra línea.

$tipoCarnet = "C1";
if ($tipoCarnet === "C1")
    echo <<<CARNETB1
    <h2>Documentación para solicitar la tarjeta de transporte</h2>
    <ul>
        <li>Fotocopia del carnet de conducir</li>
        <li>Certificado de penales</li>
        <li>Carnet B2<li>
    </ul>
    CARNETB1;
?>
<h2>Sentencia if anidada</h2>
<?php 
$nota = 6.5;
echo "<p>Con la nota $nota tienes un ";
if ($nota >= 0 && $nota > 5) {
    echo "Suspenso";
} else {
    if ($nota < 5){
        echo "Suficiente";
    } else {
        if ($nota < 7) {
            echo "Bien";
        }
        else {
            if ($nota < 9) {
            echo "Notable";
        }
        else {
            if ($nota <= 10) {
            echo "Sobresaliente";
        } else {
            echo "Error, la nota no puede ser mayor que 10";
        }
    }
}
    }
}
echo "</p>";
echo "<p>Con una nota $nota tienes un: ";
if ($nota >= 0 && $nota < 5) {
    echo "suspenso";
}
else if ($nota < 7) {
            echo "Bien";
} else if ($nota < 9) {
            echo "Notable";
}
else if ($nota <= 10) {
            echo "Sobresaliente";
}
else {
    echo "Error, la nota nu puede ser mayor que 10";
}
?>
<h2>Estructura condicional múltiple</h2>

<?php
//Sentencia switch
/*
switch (<expresión>) {
    case <valor 1>;
      //Sentencias a ejecutar si expresión es === a valor 1

    case <valor 2>;
      //Sentencias a ejecutar si expresión es === a valor 2

    . . .
    case <valor n>;
      //Sentencias a ejecutar si expresión es === a valor n

    [Default: 
    Sentencias si expresión !== De todos los valores
    ]
}
    //Siguiente sentencia a switch
*/
$nota= 7;
switch ($nota) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        echo "Suspenso";
        break;
    case 5:
        echo "aprobado";
        break;
    case 6:
        echo "Bien";
        break;
    case 7:
    case 8:
        echo "Notable";
        break;
    case 9:
    case 10:
        echo "Sobresaliente";
        break;
    default:
        echo "La nota tiene que estar entre 0 y 10";
}
echo "</p>";
$perfil = "admin";
echo "<p> Con un perfil de $perfil tienes acceso a; ";
switch ($perfil){
    case "user":
        echo "Lectura en la BD";
        break;
    case "admin":
        echo "Control total de la BD";
        break;
    case "invitado":
        echo "Lectura de la BD";
        break;
    default:
        echo "PErfil incorrecto";
}
echo "</p>";
?>

<h2>Expresión match</h2>
<?php
$calificacion = match($nota) {
    0, 1, 2, 3, 4       => "Suspenso",
    5                   => "Aprobado",
    6                   => "Bien",
    7, 8                => "Notable",
    9, 10               => "Sobresaliente",
    default             => "Error, la nota debe estar entre 0 y 10"
};
echo "<p>Con una nota de $nota tienes un $calificacion </p>";
?>

<h2> Operador ternario</h2>

<?php
//Sintaxis
// <condicion> ? <Expresión_true> : <expresión_false>;

$nota = 6;
$resultado = $nota >= 5 ? "Con un $nota estas aprobado" : "Con un $nota estas suspenso";
echo "<p>$resultado </p>";

$nombre = "XXX";
$conBeca = false;
?>
<input type="text" name ="nombre" size="30" value="<?=isset($nombre) ? $nombre : ""?>">
<form>
<input type="checkbox" name="conBeca" <?=$conBeca ? "checked" : ""?> value="Si">
</form>

<h2>Operador de fusion null</h2>
<?php
$metodo = "POST";
$segundoMetodo = "GET";
$por_defecto = "main";

$resultado = $metodo ?? $segundoMetodo;
echo "<p>El resultado es: $resultado";
?>

<h2>Bucles</h2>
<ul>
    <li>For con contador</li>
    <li>For para colecciones de datos</li>
    <li>While</li>
    <li>Do .. Wile</li>
    <li>Sentencias break y continue </li>
</ul>

<h3>Bucle for con contador de bucle</h3>
<?php
$numero = 4;
echo "<p>La tabla de multiplicar del 4</p>";
for ($i = 1; $i <= 10; $i++) {

    echo"$numero * $i =" . $numero * $i . "<br>";
}
?>

<h3>Bucle While</h3>

<?php 
//Sintaxis
//While (<condicion>) Sentencia

//Sumar numeros pares que se generan aleatoriamente hasta que salga el 0
$numero = rand(0,10);
$total = 0;
/*
while ($numero != 0) {
    echo "El numero generado es $numero <br>";
    if ( !($numero % 2)) $total += $numero

    $numero = rand(0,10);
}
echo "El total de los pares es $total</p>";
*/
?>
<h3>Budle Do .. While </h3>

<?php
//Sintaxis
/*
        do {
        }
        while (<condicion>);
*/
//Contar cuantos numeros impares se generan aleatoriamente hasta que se genere uno negativo
$contador = 0;
echo"<p>";
do {
    $numero = rand(-5,50);

    if ($numero % 2 ) $contador++;

} while($numero >= 0);

echo "Se han generado $contador numeros impares</p>";
?>

<h3>Sentencias break y continue </h3>

<?php
/*
    Break -> Termina la interaccion actual y se sale del bucle
    Continue -> Termina la interaccion actual e inicia la siguiente

*/
//Generar 20 numeros aleatorios hasta que se genere el 0 y presentar
//En color rojo los multiplos de 3

while(true) {
    $numero = rand(0,20);

    if ($numero % 3 || !$numero) {
        echo "El numero generado es $numero<br>";
    }
    else {
        echo "<span style='color:red;'> El numero generado es $numero </span><br>";
    }
    if (!$numero ) break;
}

//Generar numeros aleatorios entre 1 y 10, sumar los pares hasta que la suma sa superior a 100
// O se hayan generado 20 numeros como máximo.
$sumaPares = 0;
$numeros = 0;
echo "Suma de numeros que llega a 20 </p>";
while ($numeros < 20) {
    $numero = rand(0,10);
    $numeros++;

    if ($numero % 2 === 0 ) $sumaPares += $numero;
        echo "El número generado es $numero y llevamos $sumaPares<br>";
    if ($sumaPares > 100) break;

}
echo "La suma de pares es $sumaPares y se han generado $numeros</p>";

// Break admite un argumento numerico entero que indica 
//De que bucle se sale (cuando hay bucles anidados)

//Generar 200 numeros aleatorios entre 1 y 1000
//Por cada uno se comprueba cuantos numeros primos hay desde 1 hasta ese numero
//Si hay mas de 10 numeros primos, que termine.
//Al finalizar, visualizad cada numero generado y los primos 
//Hasta ese numero

for ($i = 0; $i < 200; $i++){
    $numero = rand(1,1000);
    $primos = 0;

for ($j = 1; $j < $numero; $j++) {
    //Si $j es primo se cuenta ++$primos
    //Si primos >10 se acaba break
    //Un numero es primo si no tiene divisores menores que su raiz cuadrada
    $raiz = intval($j ** 0.5); //sqrt($j)
    while ($raiz > 1) {
        if ($j % $raiz ===0) break;
    }
    //No ha encontrado ningun numero inferior a su raiz que sea divisible
    if (!$raiz) $primos++;
    echo "Números primos encontrados $primos";
}
}
echo "</p>";


//Bucle parra contar cuantos  impares se generan ue no sean multiplos de 3
$numero = rand(0,100);
$impares = 0;
while ($numero) {
    echo"El numero generado  es $numero</br>";
    if ($numero % 3 ==0) {
        $numero = rand(0,100);
        continue;
    }

    if ($numero % 2) $impares++;
}
echo "Se han generado $numeros impares no múltiplos  de 3</p>";


?>

</body>
</html>