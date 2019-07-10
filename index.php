<?php

    require_once ('models/Conexion.php');

    $conexion = new Conexion ('localhost' , 'root', '', 'creadorgrupodesarrollo');

    require_once("datos.php");
    $conexion->hacerGrupo();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" min="1" required>
        <label for="caracteristica">Sector:</label>
        <select name="caracteristica" required>
            <option value="" selected></option>
            <?php
                foreach ($caracteristicas as $value) {
                    $toLower = strtolower($value);
                    echo('<option value="' . $toLower . '">' . $value . '</option>');
                }
            ?>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>