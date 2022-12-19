<?php
    require '../modelo/modelo.php';
    session_start();    

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $socios = $_SESSION['socios'];

    $socio = new Socio($nombre, $apellidos, $dni, $telefono, $direccion);

    array_push($socios, $socio);

    $_SESSION['socios'] = $socios;

    header('Location: socios.php');
?>
