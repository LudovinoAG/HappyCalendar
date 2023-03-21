<?php
    include "variable_conexion.php";
    include "Querys.php";
    include "mydb.php";

    $tarjeta = $_POST['tarjeta'];
    $nombre = $_POST['nombre'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $supervisor = $_POST['supervisor'];
    $segmento = $_POST['segmento'];
    $foto = $_POST['foto'];
    $idmensaje = $_POST['idmensaje'];


    if($tarjeta!=""){
        $Valorcriterio = "('" . $tarjeta . "','" . $nombre . "','" . $fechaNacimiento . "','"
        . $supervisor . "','" . $segmento .  "','" . $foto . "','" . $idmensaje . "')";
    
        $NombreCriterio = $sql_insertar_empleado . $Valorcriterio;

        $Datos = new MyDB();
        $Datos->Conectar($DB, $serverName);
        $emp = $Datos->setEmpleado($Datos->conn, $NombreCriterio);
        echo $Datos->DB_mensaje;
    }else{
        echo "Debe indicar una tarjeta de empleado";
    }

    
    
?>