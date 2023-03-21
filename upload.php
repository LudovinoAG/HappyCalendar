<?php
include "variable_conexion.php";
include "Querys.php";
include "mydb.php";

    $filename = $_POST['file_foto'];
    $Valorcriterio = $_POST['tarjeta'];
    $carpeta = "fotos/";
    $target_file = $carpeta.basename($_FILES['file']['name']);
    $size = $_FILES['file']['size'];
    if($filename!=""){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            if($size < '8388608'){
                if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
                    $Datos = new MyDB();
                    $Datos->Conectar($DB, $serverName);
                    $NombreCriterio = $sql_update_foto . "'http://989j4v1:81/AutoCalendar/" . $target_file .
                    "' WHERE tarjeta='" . $Valorcriterio . "'";
                    $emp = $Datos->SetFoto($Datos->conn, $NombreCriterio);
                    echo "La foto fue cargada correctamente.";
                }else{
                    echo "Error al subir el archivo";
                }
            }else{
                echo "El archivo supera los 4 Megas.";
            }
        }
    }else{
        echo "Debe seleccionar una imagen para continuar.";
    }
        
    
?>