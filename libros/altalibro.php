<?php
    require '../modelo/modelo.php';
    session_start();    

    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $fecha = $_POST['fecha'];

    $libros = $_SESSION['libros'];

    $libro = new Libro($isbn, $titulo, $autor, $fecha);

    array_push($libros, $libro);

    $_SESSION['libros'] = $libros;

    header('Location: libros.php');
?>
