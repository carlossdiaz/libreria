<?php 
    require '../modelo/modelo.php';

    session_start();

    $libros = $_SESSION['libros'];

    //print_r($libros);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de libros</title>

    <style>
        table, th, td {
        border: 1px solid;
        }
    </style>

</head>
<body>
    <h2>libros</h2>
    <table>
        <tr>
            <th>isbn</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Fecha</th>
            <th colspan="2"><a href="nuevolibro.php">Nuevo</a></th>
        </tr>
            <?php
            //    print_r($libros);

                foreach($libros as $libro) {
                    echo "<tr>";
                    echo "<td>$libro->isbn</td>";
                    echo "<td>$libro->titulo</td>";
                    echo "<td>$libro->autor</td>";
                    echo "<td>$libro->fecha</td>";
                    echo "<td><a href=\"libro.php?isbn=$libro->isbn\">editar</a></td>";
                    echo "<td><a href=\"bajalibro.php?isbn=$libro->isbn\">eliminar</a></td>";
                    echo "</tr>";
                }
            ?>
    </table>

    <a href="editarlibro.php?isbn"></a>
</body>
</html>