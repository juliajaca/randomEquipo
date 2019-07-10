<?php

    require_once("datos.php");

    if (isset($_POST) && !empty($_POST)) {
        
        $seleccionados = [];

        foreach ($desarrollador as $value) {
            if ( strtolower($value['caracteristica']) == $_POST['caracteristica'] ){
                $seleccionados[] = $value;
            }
        }

        $cantSeleccionados = count($seleccionados);
        $equipo = [];
        if ( $cantSeleccionados > $_POST['cantidad'] ) {

            shuffle($seleccionados);

            for($i=0; $i < $_POST['cantidad']; $i++) { 
                $equipo[] = $seleccionados[$i];
            }
            echo('<p>Se han elegido estos miembros de entre los ' . $cantSeleccionados . ' disponibles: </p>');
        }
        elseif ( $cantSeleccionados == $_POST['cantidad']){
            $equipo = $seleccionados;
            echo('<p>Este equipo requerirá la participacion de todos los mimebros con esta espacializacion. Aquí los integrantes: </p>');
        }
        else {
            $equipo = $seleccionados;
            echo('<p>El equipo no puede ser formado porque no hay suficientes miembros. Faltaría/n ' . ($_POST['cantidad'] - $cantSeleccionados) . ' integrante/s. Estos son los miembros disponibles: </p>');
        }

        if(!empty($equipo)){
            foreach ($equipo as $item) {
                //echo('<p>Nombre: ' . $item['nombre'] . '</p>');
                echo('<p>' . $item['nombre'] . '</p>');
            }
        }
    }
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