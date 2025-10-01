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
</body>
</html>