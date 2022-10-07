<?php
    require '../modelo/modelo.php';
    session_start();    

    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];

    $libros = $_SESSION['libros'];

    $libro = new Libro($isbn, $titulo);

    array_push($libros, $libro);

    $_SESSION['libros'] = $libros;

    header('Location: libros.php');
?>
