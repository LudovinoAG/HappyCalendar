/*Script consulta los TOP 5 empleados que esten proximo a cumplir aniversario
dentro del rango de meses iniciando del actual*/
SELECT TOP(5) tarjeta, nombre, foto, DATEADD(year,(YEAR(GETDATE()) - YEAR(fechaNacimiento)),
fechaNacimiento) AS NuevaFecha FROM Empleados WHERE MONTH(fechaNacimiento) BETWEEN MONTH(GETDATE()) AND 
DATEADD(month,2,MONTH(GETDATE())) AND DAY(fechaNacimiento) > DAY(GETDATE()) OR MONTH(fechaNacimiento)
> MONTH(GETDATE()) ORDER BY MONTH(fechaNacimiento), DAY(fechaNacimiento) ASC;

/*Script busqueda de empleados de acuerdo al criterio selecionado*/
SELECT tarjeta, nombre, segmento, supervisor FROM Empleados WHERE tarjeta='' OR nombre='' 
OR fechaNacimiento='';

SELECT tarjeta, nombre, segmento, supervisor FROM Empleados WHERE nombre LIKE 'L%';

SELECT tarjeta, nombre, segmento, supervisor FROM Empleados WHERE fechaNacimiento='?';

UPDATE Empleados SET foto='http://989j4v1:81/AutoCalendar/fotos/tobogan.jpg' WHERE id='1'

/*Script para insertar registro.*/
INSERT INTO Empleados (tarjeta, nombre, fechaNacimiento, supervisor, segmento, foto, idmensaje) VALUES
 ('989898', 'PRUEBA1', '1985-08-15', 'SUPPRUE', 'Soporte a Ventas', 'http://', 1);

 SELECT Mensajes.mensaje AS Mensaje, Empleados.nombre AS Nombre FROM Mensajes 
INNER JOIN Empleados ON Empleados.idmensaje = Mensajes.id

/*Actualizar registro*/
UPDATE Mensajes SET mensaje='Feliz cumple, cumple' WHERE id='1'

SELECT * FROM Mensajes;

SELECT * FROM Empleados;