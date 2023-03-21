<?php
include "variable_conexion.php";
include "Querys.php";
include "mydb.php";

$resultado=false;

if(isset($_POST['tarjeta'])){
  $Valorcriterio = $_POST['tarjeta'];
  $NombreCriterio = $Sql_busqueda_Empleado . " WHERE tarjeta=" . $Valorcriterio;


$Datos = new MyDB();
$Datos->Conectar($DB, $serverName);
$emp = $Datos->BuscarEmpleados_Creterio($Datos->conn, $NombreCriterio);
$count = 0;


$row = sqlsrv_fetch_array($Datos->resul, SQLSRV_FETCH_ASSOC);

$array = [$row['nombre'],$row['foto']];

echo json_encode($array);




$Datos->CerrarDB($Datos->conn);
}


?>