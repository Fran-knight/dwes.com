<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Elementos del Lenguaje</title>
    </head>
    <body>
        <h1>Arrays</h1>
<p>Un array es un conjunto de elementos que se referencian con el mismo nombre
A cada variable o dato del array se le conoce como componente o elemento del array.
Cada componente tiene asociado una clave que se emplea para acceder a ese componente.
</p>
<p>Los arrays son muy flexibles:
	- Escalares -> Si la clave para acceder al componente es un número
	- Asociativos -> Si la clave para acceder a un componente es una cadena de caracteres
</p>
<p>Sintaxis $array[]</p>
<h3>Array escalar</h3>
<?php
//Como definir
$notas = Array();
//O
$numeros = [8,7,3,3,5,8];

//Si solamente se identifican los elementos del array, cada uno tiene su clave
//Según el orden en el que aparecen, comenzando por 0
//En el array escalar, la clave tmb se conoce como índice
echo "<p>La primera nota es $nota[0]<br>";
echo "<p>La segunda nota es $nota[1]<br>";

//No es obligatorio que php asigne índices a los elementos del array
//Podemos asignárselo nosotros.

$notas = Array(2 => 8.5, 4=> 4.75, 8=> 3.5);
//Puedo asignar un lugar a un componente 
//y que los siguientes sean asignados automaticamente

$notas = [3 =>5, 6.7, 8, 7 => 9,5];

//Borrado de elementos con la funcion unset[variable]
//Modificar el valor
$notas[5] = rand(0,10);
echo "El elemento 5 es {$notas[5]}<br>";

//Añadir un elemento al final del array

?>
<h3>Arrays asociativos</h3>
<?php
$coches['1234567'] = "Seat Leon";
$coches['1234561'] = "Skoda superb";
echo"<p>Mi coche es {$coches['1234567']}<br>";
echo"<p>El coche de mi vecino es {$coches['1234561']}<br>";
?>


<h3>Arrays mixtos</h3>
<?php
$alumno ['nombre'] = "Juan Gómez";
$alumno[0] = 4;
$alumno[1] = 6;
$alumno[2] = 5;
$alumno['media'] = 5;

echo "<p>El alumno {$alumno['nombre']} tiene las siguientes notas: {$alumno[0]},{$alumno[1]} y {$alumno[2]} }";
echo ". Su nota media es {$alumno['media']}</p>";
$alumno = ['nombre' => "Manu", 0=>3, 8, 5, 4, 'media' =>5];
?>

<h3>Arrays bidimensioonales</h3>
<p>  Arrrays de dos dimensiones es cuando cada elemento del array es otro array. En este caso 
    para acceder elementos individualles hayy que emplear dos claves.</p> 

<?php
$notas = Array(

    Array(3.5, 6, 4), 
    Array(2, 5, 6), 
    Array(1, 4, 6)
);

?>
<h3>Recorrido de un array</h3>
<?php
//Con un bucle tradicional
//Solo funciona con arrays escalares
$numeros = [6,33,69,360,90,66];
echo "<p>";
for($i=0; $i < count($numeros); $i++) {
    echo "Elemento $i es {$numeros[$i]}<br>";
}
echo "</p>";

//Para cualquier tipo de array (escalar o asociativo)
//Mejor emplear un array foreach
/* Sintaxis
    foreach($array as [$clave =>] $valor){
    Sentencias
    }*/
echo"<p>Array números foreach:<br>";
foreach($numeros as $numero){
    echo "El elemento es $numero <br>";
}
echo "</p>";

$alumno =[]; //Alumno = Array()
$alumno['nombre'] = "Juan";
$alumno['apellidos'] = "Hernandez Fernandez";
$alumno[0] = 5;
$alumno[1] = 6;
$alumno[2] = 7;
$alumno['media'] = 6;

echo"<p>";
foreach($alumno as $clave => $valor) {
    echo "Elemento con clave $clave y valor $valor <br>";
}
echo "</p>";

//Array asociativo
$componentes['cpu'] = "i7 ultra pro";
$componentes['mt'] = "Asus H18M2";
$componentes['ram'] = "Kingstone F-35";
$componentes['sdd'] = "Samsung ultra mega pro";
$componentes['caja'] = "Caja con fuente 700w y luces laçed gamer";
$componentes['monitor'] = "Ultra HD 4K 23\"";
$componentes['teclado'] = "Teclado 105 inalambrico retroiluminado";
$componentes['raton'] = "Raton 3 botones inalambrico";

echo "<p>Los componentes de mi PC: <br>";
foreach ($componentes as $componente ) {
    echo "Un componente: $componente<br>";
}
echo "</p>";

echo "<p> Los componentes de mi PC y sus tipos: <br>";
foreach ($componentes as $tipo => $componente) {
    echo "Componente $tipo -> $componente <br>";
}
echo "</p>";

//Array multidimensionales
$misNotas = Array(
    Array(5,6,2,8),
    Array(3,6,9,4),
    Array(7,8,5,9),
    Array(1,2,3,4),
);

for ($i = 0; $i < count($misNotas); $i++) {
    echo "Fila $i -> ";
    for ($j = 0; $j < count($misNotas[$i]); $j++) {
        echo "- {$misNotas[$i][$j]}";
    }
}
?>
</body>
</html>