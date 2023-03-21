<?php
    include_once "variable_conexion.php";
    include_once "Querys.php";
    include_once "mydb.php";

            $ID = $_POST['id'];
            if($ID!='...'){
                $Condicion = " WHERE id=" . $ID;
                $NombreCriterio = $sql_mensajes_ver . $Condicion;
                $Datos = new MyDB();
                $Datos->Conectar($DB, $serverName);
                $emp = $Datos->GetMsg($Datos->conn, $NombreCriterio);
                $row = sqlsrv_fetch_array($Datos->resul, SQLSRV_FETCH_ASSOC);
                echo $row['mensaje'];
            }
          
?>
