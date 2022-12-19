<?php
    require '../modelo/modelo.php';
    session_start();    

    $dni = $_GET['dni'];
    $socio_match;

    $socios = $_SESSION['socios'];

    foreach($socios as $socio){
        if($dni == $socio->dni){
            $socio_match = $socio;
            break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>socio</title>
</head>
<body>

    <form action="modificarsocio.php" method="post">
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $socio_match->nombre ?>">
        <label for="apellidos">apellidos</label>
        <input type="text" name="apellidos" id="apellidos" value="<?php echo $socio_match->apellidos ?>">
        <label for="dni">dni</label>
        <input type="text" name="dni" id="dni" value="<?php echo $socio_match->dni ?>">
        <label for="telefono">telefono</label>
        <input type="text" name="telefono" id="telefono" value="<?php echo $socio_match->telefono ?>">
        <label for="direccion">direccion</label>
        <input type="text" name="direccion" id="direccion" value="<?php echo $socio_match->direccion ?>">
        <input type="submit" value="Modificar">
    </form>
    
</body>
</html>