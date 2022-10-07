<?php
    require '../modelo/modelo.php';
    session_start();    

    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];

    $libros = $_SESSION['libros'];


    for ($i = 0; $i < count($libros); $i++) {
        if($isbn == $libros[$i]->isbn){
            $libros[$i]->isbn = $isbn;
            $libros[$i]->titulo = $titulo;
            break;
        }
    }

    $_SESSION['libros'] = $libros;

    header('Location: libros.php');
?>
