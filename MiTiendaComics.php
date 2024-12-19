<?php
// Definición del inventario de cómics
$inventario = [
    'suspense_terror' => [
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
    ],
    'accion' => [
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
    ],
    // Puedes agregar más categorías y cómics según sea necesario
];

// main
// antes descuento
mostrarComicsEnTabla();
mostrarValorAlmacen();
aplicarDescuentoManga();
// mostramos el inventario actualizado
mostrarComicsEnTabla();
mostrarValorAlmacen();

function mostrarComicsEnTabla()
{
    global $inventario;
    echo '<br>';
    echo '<table border="1">';
    echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>';

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            echo '<tr>';
            echo "<td>$categoria</td>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo '</tr>';
        }
    }

    echo '</table>';
}

function mostrarValorAlmacen()
{
    global $inventario;
    // Creamos 3 variables 1 para guardar el valor total del stock y una para el precio del comic y otra para su stock.
    $valorTotalStock = 0;
    $precio = 0;
    $stock = 0;
    // Luego se recorre el array y va asignando el precio y el stock a las variables y las multiplica y suma al valor total del stock
    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            $precio = $comic['precio'];
            $stock = $comic['stock'];
            $valorTotalStock += ($precio * $stock);
        }

    }
    // Imprime el valor total del stock
    echo "El valor total del almacen es $valorTotalStock.";
    echo "<br>";

}

function aplicarDescuentoManga()
{
    global $inventario;
    // Se cambia para que recorra todo el array y quitamos el accion para que afecte a las dos categorias
    foreach ($inventario as $categoria => &$comics) {
        // Se añade otro foreach para que llegue a los valores dentro de las categorias.
        foreach ($comics as &$comic)  {
            if ($comic['idioma'] == 'Japonés') {
                $comic['precio'] = $comic['precio'] * 0.7; // Aplicar descuento del 30%
            }
            
        }
    }

}
?>


