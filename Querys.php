<?php
/*Script consulta los TOP 5 empleados que esten proximo a cumplir aniversario
dentro del rango de meses iniciando del actual*/
$Sql_topEmpleados_ani = "SELECT TOP(5) tarjeta, nombre, foto, DATEADD(year,(YEAR(GETDATE()) - YEAR(fechaNacimiento)),
fechaNacimiento) AS NuevaFecha FROM Empleados WHERE MONTH(fechaNacimiento) BETWEEN MONTH(GETDATE()) AND 
DATEADD(month,2,MONTH(GETDATE())) AND DAY(fechaNacimiento) > DAY(GETDATE()) OR MONTH(fechaNacimiento)
> MONTH(GETDATE()) ORDER BY MONTH(fechaNacimiento), DAY(fechaNacimiento) ASC";

/*Script busqueda de empleados de acuerdo al criterio selecionado*/
$Sql_busqueda_Empleado =  "SELECT tarjeta, nombre, segmento, supervisor, id, foto FROM Empleados"; 

$sql_update_foto = "UPDATE Empleados SET foto=";

$sql_insertar_empleado = "INSERT INTO Empleados (tarjeta, nombre, fechaNacimiento, supervisor, segmento, foto, idmensaje)
 VALUES ";
$sql_mensajes = "SELECT Mensajes.mensaje AS Mensaje, Empleados.nombre AS Nombre, Mensajes.id 
FROM Mensajes INNER JOIN Empleados ON Empleados.idmensaje = Mensajes.id";

$sql_update_mensaje = "UPDATE Mensajes SET mensaje=";

$sql_mensajes_ver = "SELECT * FROM Mensajes";

$sql_msg_empleado = "UPDATE Empleados SET idmensaje=";

$sql_add_mensaje = "INSERT INTO Mensajes (mensaje) VALUES ";

/* */

?>