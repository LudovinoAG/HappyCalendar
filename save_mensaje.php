<?php
    include_once "variable_conexion.php";
    include_once "Querys.php";
    include_once "mydb.php";

        $Mensaje_Nuevo = $_POST['mensaje'];
        if($Mensaje_Nuevo!=""){
            //$Condicion = $mensajeid . " WHERE tarjeta=" . $IDEmp;
            $NombreCriterio = $sql_add_mensaje ."('".$Mensaje_Nuevo. "')";

            $Datos = new MyDB();
            $Datos->Conectar($DB, $serverName);
            $emp = $Datos->AddMensaje($Datos->conn, $NombreCriterio);
            echo "1";
        }else{
            echo "0";
        }
          
?>
