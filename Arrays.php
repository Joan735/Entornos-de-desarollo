<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php

    echo "<h1>Ejercicio 1</h1>";
    // Se crea el array con las claves y datos del ejercicio.
    $informacion = array('nombre' => 'Sara', 'apellido' => 'Martínez', 'edad' => 23, 'ciudad' => 'Barcelona');
    // Se crea una variable para numerar los datos.    
    $num = 1;
    // Usamos el foreach para asociar $informacion con $datos para mostrar los datos del array con el echo y sumamos 1 unidad a $num.
    foreach ($informacion as $datos) {
        echo "dato $num º: $datos <br>";
        $num++;
    }


    echo "<br><h1>Ejercicio 2</h1>";
    // Usamos el foreach para asociar $informacion con $clave, que muestra el indice, y $datos, que muestra el valor,
    // para que se muestra los datos del array con el echo.
    foreach ($informacion as $clave => $datos) {
        echo "$clave: $datos <br>";
    }


    echo "<br><h1>Ejercicio 3</h1>";
    // Modificamos el array poniendo el array con su clave entre[] y luego el valor que le queremos asignar.
    $informacion['edad'] = 24;
    // Le volvemos a asignar a la variable num el valor 1.
    $num = 1;
    // Usamos el foreach para asociar $informacion con $datos para mostrar los datos del array con el echo y sumamos 1 unidad a $num.
    foreach ($informacion as $datos) {
        echo "dato $num º: $datos <br>";
        $num++;
    }


    echo "<br><h1>Ejercicio 4</h1>";
    // Usamos la funcion unset para borrar ciudad.
    unset($informacion['ciudad']);
    // Usamos var_dump para que se muestren los datos 
    var_dump($informacion);


    echo "<br><br><h1>Ejercicio 5</h1>";
    // Se crea la variable con las letras.
    $letters = 'a,b,c,d,e,f';
    // Usamos la funcion explode para que separe cada letra de $letters y lo meta en el array $letras.
    $letras = explode(',', $letters);
    // Con arsort se ordena el array con valores de texto
    arsort($letras);
    // Asiganmos a la variable un 6 para que la numeracion sea descendente.
    $num = 6;
    // Usamos foreach para que asociar el array con otra variable y la mostramos con echo y restamos 1 unidad a $num.
    foreach ($letras as $abecedario) {
        echo "datos $num º: $abecedario <br>";
        $num--;
    }


    echo "<br><h1>Ejercicio 6</h1>";
    // Creamos el array con los datos, notas, y sus claves, nombres.
    $notas = array('Miguel' => 5, 'Luís' => 7, 'Marta' => 10, 'Isabel' => 8, 'Aitor' => 4, 'Pepe' => 1);
    // Con arsort ordenamos en orden descendente numerico y que se pueda mostrar las claves con texto.
    arsort($notas);
    // Usamos el foreach para asignar y el echo para mostrar los datos y sus claves.
    echo "Notas de los estudiantes: ";
    foreach ($notas as $clave => $datos) {
        echo "$clave: $datos, ";
    }


    echo "<br><br><h1>Ejercicio 7</h1>";
    // Creamos una variable para la suma de las notas
    $sumaNotas = 0;
    // Creamos una variable para contar la cantidad de notas.
    $cantidad = 0;
    // Usamos foreach para asignar cada dato a una variable y luego se suma con la variable $sumaNotas y le sumamos 1 unidad a $cantidad.
    foreach ($notas as $nota) {
        $sumaNotas += $nota;
        $cantidad++;
    }
    // Se crea una varibale para calcular la media y con round redondeamos a 2 decimales.
    $notaMedia = round(($sumaNotas / $cantidad), 2);
    // Mostramos con echo la media.
    echo "Media de las notas: $notaMedia <br>";
    echo "Alumnos con nota por encima de la media: <br>";
    // Hacemos un foreach para asigne los datos del array en una varible y con un if lo compara con la $notaMedia, si es 
    // mayor se muestra su $clave.
    foreach ($notas as $clave => $datos) {
        if ($datos > $notaMedia) {
            echo "$clave <br>";
        }
    }


    echo "<br><h1>Ejercicio 8</h1>";
    // Creamos dos variables una para que guarde la nota mas alta y otra para el nombre.
    $notaAlta = 0;
    $alumno;
    // Usamos el foreach para asignarlos a variables y con un if lo vamos comparando para que si la nota es mas alta que 
    // $notaAlta se subtituya los datos y claves.
    foreach ($notas as $clave => $datos) {
        if($datos > $notaAlta){
            $notaAlta = $datos;
            $alumno = $clave;
        }
    }
    echo "La nota mas alta es $notaAlta y el mejor alumno es $alumno. <br>";
    
    ?>

</body>

</html>