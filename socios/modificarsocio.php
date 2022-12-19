<?php
    require '../modelo/modelo.php';
    session_start();    

    $isbn = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $socios = $_SESSION['socios'];


    for ($i = 0; $i < count($socios); $i++) {
        if($dni == $socios[$i]->dni){
            $socios[$i]->nombre = $nombre;
            $socios[$i]->apellidos = $apellidos;
            $socios[$i]->dni = $dni;
            $socios[$i]->telefono = $telefono;
            $socios[$i]->direccion = $direccion;
            break;
        }
    }

    $_SESSION['socios'] = $socios;

    header('Location: socios.php');
?>
