<?php
    include_once "variable_conexion.php";
    include_once "Querys.php";
    include_once "mydb.php";

            $IDEmp = $_POST['tarjeta'];
            $mensajeid = $_POST['idmensaje'];
            
         
                $Condicion = $mensajeid . " WHERE tarjeta=" . $IDEmp;
                $NombreCriterio = $sql_msg_empleado . $Condicion;

                $Datos = new MyDB();
                $Datos->Conectar($DB, $serverName);
                $emp = $Datos->SetMensaje_empleado($Datos->conn, $NombreCriterio);

                
                echo $Datos->DB_mensaje;
          
?>
