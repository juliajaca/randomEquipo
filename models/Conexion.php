<?php

class Conexion {

public $conexion;

public function __construct($servidor, $usuario, $password, $bd){
    $this->conexion = new \mysqli($servidor, $usuario, $password, $bd);
}

public function hacerGrupo(){

    if (isset($_POST) && !empty($_POST)) {
        
        $seleccionados = [];

        //LEER TABLA
        $desarrollador = $this->conexion->query("SELECT * FROM desarrollador");       

        foreach ($desarrollador as $value) {
            if ( strtolower($value['caracteristica']) == $_POST['caracteristica'] ){
                $seleccionados[] = $value; //lleno el array con los alumnos con las habilidades seleccionadas
            }
        }

        $cantSeleccionados = count($seleccionados);//la cantidad de gente que cumplen el requisito
        $equipo = []; //array vacio con los seleccionados
        if ( $cantSeleccionados > $_POST['cantidad'] ) {
            //si hay mas candidatos que puestos, hago random
            shuffle($seleccionados);

            for($i=0; $i < $_POST['cantidad']; $i++) { 
                $equipo[] = $seleccionados[$i];
            }
            echo('<p>Se han elegido estos miembros de entre los ' . $cantSeleccionados . ' disponibles: </p>');
        } //si hay tantos candidatos como puestos, muestro todos
        elseif ( $cantSeleccionados == $_POST['cantidad']){
            $equipo = $seleccionados;
            echo('<p>Este equipo requerirá la participacion de todos los mimebros con esta espacializacion. Aquí los integrantes: </p>');
        }
        else { //si hay menos candidatos que puestos
            $equipo = $seleccionados;
            echo('<p>El equipo no puede ser formado porque no hay suficientes miembros. Faltaría/n ' . ($_POST['cantidad'] - $cantSeleccionados) . ' integrante/s. Estos son los miembros disponibles: </p>');
        }

        if(!empty($equipo)){
            foreach ($equipo as $item) {
                echo('<p>' . $item['nombre'] . '</p>');
            }
        }else{
             echo 'No hay nadie con esa especialidad';
        }
     }

}
// fin de la clase
}