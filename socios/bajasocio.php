<?php
    require '../modelo/modelo.php';
    session_start();    

    $isbn = $_GET['isbn'];

    $libros = $_SESSION['libros'];


    for ($i = 0; $i < count($libros); $i++) {
        if($isbn == $libros[$i]->isbn){
            array_splice($libros,$i,1);
            break;
        }
    }

    $_SESSION['libros'] = $libros;

    header('Location: libros.php');
?>
