<?php
    require '../modelo/modelo.php';
    session_start();    

    $dni = $_GET['dni'];

    $socios = $_SESSION['socios'];


    for ($i = 0; $i < count($socios); $i++) {
        if($dni == $socio[$i]->dni){
            array_splice($socios,$i,1);
            break;
        }
    }

    $_SESSION['socios'] = $socios;

    header('Location: socios.php');
?>
