<?php 
    require 'modelo.php';

    $libro1 = new Libro("1234", "La casa de los espíritus");
  
    $libro2 = new Libro("9897", "El silencio de los corderos");
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Librería</title>
</head>
<body>

<h2>Menú</h2>
<p><a href="libros.php">Libros</a></p>
<p><a href="socios.php">Socios</a></p>

</body>
</html>
