<?php
include "variable_conexion.php";
include "Querys.php";
include "mydb.php";

$Datos = new MyDB();
$Datos->Conectar($DB, $serverName);
$emp = $Datos->Get_TopEmpleados_Aniversario($Datos->conn ,$Sql_topEmpleados_ani);

$count = 0;
while($row = sqlsrv_fetch_array($Datos->resul, SQLSRV_FETCH_ASSOC)){


echo "<table class='tbl_emp'>

<tr>
    <td class='Id_Agent'><label>" . $row['tarjeta'] . "</label</td>
    <td rowspan='2'><img src=" . $row['foto'] . "></td>
</tr>

<tr>
    <td class='Name_Agent'><label>" . $row['nombre'] . "</label</td>
</tr>

</table>";
$count++;
echo "<input hidden id='fecha".$count. "'type='text' value='" . date_format($row['NuevaFecha'],"Y-m-d") . "'>";
}


$Datos->CerrarDB($Datos->conn);
?>