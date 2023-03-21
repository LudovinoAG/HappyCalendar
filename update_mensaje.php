<?php
    include "variable_conexion.php";
    include "Querys.php";
    include "mydb.php";

    $ID = $_POST['id'];
    $Mensaje = $_POST['mensaje'];

    if($ID!=""){
        $Valorcriterio = $ID;
    
        $NombreCriterio = $sql_update_mensaje ."'". $Mensaje . "' WHERE id=" . $Valorcriterio;

        $Datos = new MyDB();
        $Datos->Conectar($DB, $serverName);
        $emp = $Datos->SetMsg($Datos->conn, $NombreCriterio);
        echo $Datos->DB_mensaje;
    }else{
        echo "Debe indicar ID del mensaje";
    }

    
    
?>