<?php
include "variable_conexion.php";
include "Querys.php";
include "mydb.php";

$resultado=false;

$NombreCriterio = $sql_mensajes;

$Datos = new MyDB();
$Datos->Conectar($DB, $serverName);
$emp = $Datos->getCustomMSG($Datos->conn, $NombreCriterio);
$count = 0;

echo "<table class='table table-condensed table-striped tbl_mensajes'>
<thead>
    <th>#</th>
    <th>Mensajes</th>
    <th>Asignado</th>
    <th>Editar</th>
</thead>

<tbody>";

while($row = sqlsrv_fetch_array($Datos->resul, SQLSRV_FETCH_ASSOC)){
$count++;
$resultado = true;

echo "<tr>
        <td>".$count."</td>
        <td id='$count' class='result_tarjeta'>" . $row['Mensaje'] . "</td>
        <td class='result_Nombre'>" . $row['Nombre'] . "</td>
        <td><button onclick='set_edit(event," . $row['id'] . ",$count);' id='" .$row['id']. "'class='btn btn-warning btn-sm boton-msg fas fa-edit fa-sm'></button>
        </tr>";

}
echo "<span id='result_count'>Registros encontrados:" .$count. "</span>";

echo "</tbody></table>";

if(!$resultado){
  echo "<span id='msg_error'>Registros no encontrados</span>";
}

$Datos->CerrarDB($Datos->conn);

?>