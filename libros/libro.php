<?php
    require '../modelo/modelo.php';
    session_start();    

    $isbn = $_GET['isbn'];
    $libro_match;

    $libros = $_SESSION['libros'];

    foreach($libros as $libro){
        if($isbn == $libro->isbn){
            $libro_match = $libro;
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
    <title>Libro</title>
</head>
<body>

    <form action="modificarlibro.php" method="post">
        <label for="isbn">isbn</label>
        <input type="text" name="isbn" id="isbn" value="<?php echo $libro_match->isbn ?>">
        <label for="titulo">titulo</label>
        <input type="text" name="titulo" id="titulo" value="<?php echo $libro_match->titulo ?>">
        <label for="autor">autor</label>
        <input type="text" name="autor" id="autor" value="<?php echo $libro_match->autor ?>">
        <label for="fecha">fecha</label>
        <input type="text" name="fecha" id="fecha" value="<?php echo $libro_match->fecha ?>">
        
        <input type="submit" value="Modificar">
    </form>
    
</body>
</html>