<?php 
    require '../modelo/modelo.php';

    session_start();

    $socios = $_SESSION['socios'];

    //print_r($socios);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de socios</title>

    <style>
        table, th, td {
        border: 1px solid;
        }
    </style>

</head>
<body>
    <h2>socios</h2>
    <table>
        <tr>
            <th>nombre</th>
            <th>apellidos</th>
            <th>dni</th>
            <th>telefono</th>
            <th>direccion</th>

            <th colspan="2"><a href="nuevosocio.php">Nuevo</a></th>
        </tr>
            <?php
            //    print_r($socios);

                foreach($socios as $socio) {
                    echo "<tr>";
                    echo "<td>$socio->nombre</td>";
                    echo "<td>$socio->apellidos</td>";
                    echo "<td>$socio->dni</td>";
                    echo "<td>$socio->telefono</td>";
                    echo "<td>$socio->direccion</td>";
                    echo "<td><a href=\"socio.php?dni=$socio->dni\">editar</a></td>";
                    echo "<td><a href=\"bajasocio.php?dni=$socio->dni\">eliminar</a></td>";
                    echo "</tr>";
                }
            ?>
    </table>

    <a href="modificarsocio.php?dni"></a>
</body>
</html>