<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digite la siguiente información</h1>

    <form action="03_metodo_get.php" method="post">
        Nombre
        <input type="text" name="nombre"/>
        <br>
        Fecha
        <input type="date" name="fecha" id="">
        <br>
        Observación
        <input type="text" name="obs">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <h2>Información enviada es:</h2>

    <?php
    print_r($_POST);
    ?>
</body>
</html>