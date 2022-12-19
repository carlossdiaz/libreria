<?php
    require '../modelo/modelo.php';
    session_start();    

    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $fecha = $_POST['fecha'];

    $libros = $_SESSION['libros'];


    for ($i = 0; $i < count($libros); $i++) {
        if($isbn == $libros[$i]->isbn){
            $libros[$i]->isbn = $isbn;
            $libros[$i]->titulo = $titulo;
            $libros[$i]->autor = $autor;
            $libros[$i]->fecha = $fecha;
            break;
        }
    }

    $_SESSION['libros'] = $libros;

    header('Location: libros.php');
?>
