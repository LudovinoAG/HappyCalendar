<?php
include "variable_conexion.php";
include "Querys.php";
include "mydb.php";

$resultado=false;

if(isset($_POST['tarjeta'])){
  $Valorcriterio = $_POST['tarjeta'];
  $NombreCriterio = $Sql_busqueda_Empleado . " WHERE tarjeta=" . $Valorcriterio;
}else{
  if(isset($_POST['nombre'])){
    $Valorcriterio = $_POST['nombre'];
    $NombreCriterio = $Sql_busqueda_Empleado . " WHERE nombre LIKE '" . $Valorcriterio . "%'";
  }else{
    if(isset($_POST['mes'])){
      $Valorcriterio = $_POST['mes'];
      $NombreCriterio = $Sql_busqueda_Empleado . " WHERE fechaNacimiento='" . $Valorcriterio . "'";
    }
  }
}

$Datos = new MyDB();
$Datos->Conectar($DB, $serverName);
$emp = $Datos->BuscarEmpleados_Creterio($Datos->conn, $NombreCriterio);
$count = 0;

echo "<table class='table table-condensed table-striped tbl_emp'>
<thead>
    <th>#</th>
    <th>Tarjeta</th>
    <th>Nombre</th>
    <th>Segmento</th>
    <th>Supervisor</th>
</thead>

<tbody>";

while($row = sqlsrv_fetch_array($Datos->resul, SQLSRV_FETCH_ASSOC)){
$count++;
$resultado = true;

echo "<tr>
        <td>".$count."</td>
        <td class='result_tarjeta'>" . $row['tarjeta'] . "</td>
        <td class='result_Nombre'>" . $row['nombre'] . "</td>
        <td>" . $row['segmento'] . "</td>
        <td>" . $row['supervisor'] . "</td>
        <td><button onclick='set_vista(event,$count);' id='" .$row['id']. "'class='btn btn-primary btn-sm fa fa-arrow-right fa-sm'></button></td>
        <td hidden><label id='lblfoto_path' hidden>".$row['foto']."</label></td>
        </tr>";
}
echo "<span id='result_count'>Registros encontrados:" .$count. "</span>";

echo "</tbody>
</table>";
if(!$resultado){
  echo "<span id='msg_error'>Empleado no encontrado</span>";
}

$Datos->CerrarDB($Datos->conn);
?>