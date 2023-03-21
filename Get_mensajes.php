
<select class="form-control" name="lstmensajes" id="lstmensajes">
    <option value="0">...</option>

    <?php
        include_once "variable_conexion.php";
        include_once "Querys.php";
        include_once "mydb.php";

            $NombreCriterio = $sql_mensajes_ver;

            $Datos = new MyDB();
            $Datos->Conectar($DB, $serverName);
            $emp = $Datos->GetMsg($Datos->conn, $NombreCriterio);
  
                while($row = sqlsrv_fetch_array($Datos->resul, SQLSRV_FETCH_ASSOC)){
                    echo "<option>". $row['id'] ."</option>";
                }
    ?>

</select>