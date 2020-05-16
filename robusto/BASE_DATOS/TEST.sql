/*DROP PROCEDURE IF EXISTS SP_Actualizar_TblDesparacitacion;
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblDesparacitacion(IN Pint_IdDesparacitacion INT,
                                            IN Pdat_Fecha DATE,
    								 		IN Pint_IdProducto INT,
                                            IN Pflo_Precio FLOAT,
    								 		IN Pint_IdMascota INT,
    								 		IN Pvchr_Observacion VARCHAR(1000),
    								 		IN Pint_Cita INT,                                      
                                            IN Pvchr_Usuario VARCHAR(50))
BEGIN
IF EXISTS(SELECT Desparacitacion_Id FROM tblDesparacitacion WHERE Desparacitacion_Id = Pint_IdDesparacitacion AND Desparacitacion_CitaEstado LIKE 'A') THEN
UPDATE tblDesparacitacion SET 
Desparacitacion_Fecha=Pdat_Fecha,
Desparacitacion_IdProducto=Pint_IdProducto,
Desparacitacion_Precio=Pflo_Precio,
Desparacitacion_IdMascota=Pint_IdMascota,
Desparacitacion_Observacion=Pvchr_Observacion,
Desparacitacion_Cita=Pint_Cita,
Desparacitacion_FechaGrab_Edicion=NOW(),
Desparacitacion_UserGrab_Edicion=Pvchr_Usuario
WHERE Desparacitacion_Id = Pint_IdDesparacitacion;
SELECT '1' AS CODIGO;
ELSE
SELECT '2' AS CODIGO;
END IF;
END$$
DELIMITER ;
*/

CREATE DEFINER=`gavet`@`localhost` PROCEDURE `SP_Registrar_TblVenta_TblVentaDetalle`(
	IN `Pint_IdVenta` INT,
 	IN `Pint_IdVBDA` INT, 
	IN `Pint_Atencion_Agen` INT,
	IN `Pint_IdProducto` INT,
	IN `Pint_Kardex` INT,
	IN `Pdat_Fecha` DATE,
	IN `Pint_TipoVenta` INT, 
	IN `Pint_TipoPago` INT, 
	IN `Pint_IdMascota` INT, 
	IN `Pint_IdAlmacen` INT, 
	IN `Pvchr_Observacion` VARCHAR(100), 
	IN `Pint_Estado` INT, 
	IN `Pvchr_Usuario` VARCHAR(100))
BEGIN
DECLARE IdVenta INT;
DECLARE IdVBDA INT;
DECLARE PrecioVenta FLOAT;
DECLARE DescuentoVenta FLOAT;
DECLARE CantidadVenta FLOAT;
DECLARE PrecioTotalVenta FLOAT;
-- DECLARE IdAtencion INT;

SET PrecioVenta = 0;
SET DescuentoVenta = 0;
SET CantidadVenta = 0;
SET PrecioTotalVenta = 0;


INSERT INTO tblVenta(Venta_IdKardex, Venta_Fecha, Venta_Tipo, Venta_TipoPago, Venta_IdMascota, Venta_IdAlmacen, Venta_Precio, Venta_Descuento, Venta_Cantidad, Venta_PrecioTotal, Venta_Observacion, Venta_Estado, Venta_FechaGra, Venta_UserGrab)
VALUES
(Pint_Kardex, Pdat_Fecha, Pint_TipoVenta, Pint_TipoPago, Pint_IdMascota, Pint_IdAlmacen, PrecioVenta, DescuentoVenta, CantidadVenta, PrecioTotalVenta, Pvchr_Observacion, Pint_Estado, NOW(), Pvchr_Usuario );
SET IdVenta = (SELECT Venta_Id FROM tblVenta ORDER BY Venta_Id DESC LIMIT 1);

INSERT INTO tblVentaDetalle (VentaDetalle_VentaId, VentaDetalle_IdProducto, VentaDetalle_Precio, VentaDetalle_Descuento, VentaDetalle_Cantidad, VentaDetalle_PrecioTotal, VentaDetalle_Estado, VentaDetalle_FechaGra, VentaDetalle_UserGrab)
SELECT IdVenta, VentaDetalle_tmp_IdProducto, VentaDetalle_tmp_Precio, VentaDetalle_tmp_Descuento, VentaDetalle_tmp_Cantidad, VentaDetalle_tmp_PrecioTotal, VentaDetalle_tmp_Estado, NOW(), VentaDetalle_tmp_UserGrab FROM tblVentaDetalle_tmp WHERE VentaDetalle_tmp_VentaId = Pint_IdVenta;

SET PrecioVenta = (SELECT SUM(VentaDetalle_tmp_Precio) FROM tblVentaDetalle_tmp WHERE VentaDetalle_tmp_VentaId = Pint_IdVenta );
SET DescuentoVenta = (SELECT SUM(VentaDetalle_tmp_Descuento) FROM tblVentaDetalle_tmp WHERE VentaDetalle_tmp_VentaId = Pint_IdVenta );
SET CantidadVenta = (SELECT SUM(VentaDetalle_tmp_Cantidad) FROM tblVentaDetalle_tmp WHERE VentaDetalle_tmp_VentaId = Pint_IdVenta );
SET PrecioTotalVenta = (SELECT SUM(VentaDetalle_tmp_PrecioTotal) FROM tblVentaDetalle_tmp WHERE VentaDetalle_tmp_VentaId = Pint_IdVenta );
UPDATE tblVenta SET Venta_Precio = PrecioVenta, Venta_Descuento = DescuentoVenta, Venta_Cantidad = CantidadVenta, Venta_PrecioTotal = PrecioTotalVenta WHERE Venta_Id = IdVenta;

IF Pint_Atencion_Agen = '' THEN
SELECT IdVenta AS CODIGO, '0' AS CODIGO_SERVICIO;
END IF;

IF Pint_Atencion_Agen = 0 THEN /* VENTA DIRECTA SIN AGENDAR */

IF Pint_TipoVenta = 1 THEN
INSERT INTO tblVacunas
 (Vacunas_IdVenta, Vacunas_Fecha, Vacunas_IdProducto, Vacunas_Precio, Vacunas_IdMascota, Vacunas_Observacion, Vacunas_Cita, Vacunas_CitaEstado, Vacunas_Estado, Vacunas_FechaGra, Vacunas_UserGrab)
VALUES
 (IdVenta, Pdat_Fecha, Pint_IdProducto, PrecioTotalVenta, Pint_IdMascota, Pvchr_Observacion, 1, 'A', 1, now(), Pvchr_Usuario);
 SET IdVBDA = (SELECT Vacunas_Id FROM tblVacunas ORDER BY Vacunas_Id DESC LIMIT 1);
 SELECT IdVenta AS CODIGO, IdVBDA AS CODIGO_SERVICIO;
ELSEIF Pint_TipoVenta = 2 THEN
INSERT INTO tblBanio
(Banio_IdVenta, Banio_Fecha, Banio_IdProducto, Banio_Precio, Banio_IdMascota, Banio_Observacion, Banio_Cita, Banio_CitaEstado, Banio_Estado, Banio_FechaGra, Banio_UserGrab)
VALUES
(IdVenta, Pdat_Fecha, Pint_IdProducto, PrecioTotalVenta, Pint_IdMascota, Pvchr_Observacion, 1, 'A', 1, now(), Pvchr_Usuario);
SET IdVBDA = (SELECT Banio_Id FROM tblBanio ORDER BY Banio_Id DESC LIMIT 1);
SELECT IdVenta AS CODIGO, IdVBDA AS CODIGO_SERVICIO;
ELSEIF Pint_TipoVenta = 3 THEN
INSERT INTO tblDesparacitacion
(Desparacitacion_IdVenta, Desparacitacion_Fecha, Desparacitacion_IdProducto, Desparacitacion_Precio, Desparacitacion_IdMascota, Desparacitacion_Observacion, Desparacitacion_Cita,
Desparacitacion_CitaEstado, Desparacitacion_Estado, Desparacitacion_FechaGra, Desparacitacion_UserGrab)
VALUES
(IdVenta,Pdat_Fecha, Pint_IdProducto, PrecioTotalVenta, Pint_IdMascota, Pvchr_Observacion, 1, 'A', 1, now(), Pvchr_Usuario);
SET IdVBDA = (SELECT Desparacitacion_Id FROM tblDesparacitacion ORDER BY Desparacitacion_Id DESC LIMIT 1);
SELECT IdVenta AS CODIGO, IdVBDA AS CODIGO_SERVICIO;
ELSEIF Pint_TipoVenta = 4 THEN

SET IdVBDA = (SELECT VentaTemporal_Id_vbda FROM tblVentaTemporal WHERE VentaTemporal_Id = Pint_IdVBDA);
INSERT INTO tblAtencion (Atencion_IdVenta, Atencion_Fecha, Atencion_IdProducto, Atencion_IdMascota, Atencion_Sintomas, Atencion_T, Atencion_FC, Atencion_FR, Atencion_sc_Deshidratacion, Atencion_sc_Mucosas, Atencion_sc_TLLC, Atencion_sc_Vomitos, Atencion_sc_Diarreas, Atencion_sc_Ganglios, Atencion_sc_Peso, Atencion_dx_Presuntivo, Atencion_dx_Definitivo, Atencion_dx_Solicitado, Atencion_tr_Descripcion, Atencion_tr_Observacion, Atencion_tr_Precio, Atencion_IdDocumento, Atencion_Cita, Atencion_CitaEstado, Atencion_Estado, Atencion_FechaGra, Atencion_UserGrab)
SELECT IdVenta, Atencion_Fecha, Atencion_IdProducto, Atencion_IdMascota, Atencion_Sintomas, Atencion_T, Atencion_FC, Atencion_FR, Atencion_sc_Deshidratacion, Atencion_sc_Mucosas, Atencion_sc_TLLC, Atencion_sc_Vomitos, Atencion_sc_Diarreas, Atencion_sc_Ganglios, Atencion_sc_Peso, Atencion_dx_Presuntivo, Atencion_dx_Definitivo, Atencion_dx_Solicitado, Atencion_tr_Descripcion, Atencion_tr_Observacion, Atencion_tr_Precio, Atencion_IdDocumento, Atencion_Cita, Atencion_CitaEstado, Atencion_Estado, Atencion_FechaGra, Atencion_UserGrab FROM tblAtencionTemporal WHERE Atencion_Id = IdVBDA;
SET IdVBDA = (SELECT Atencion_Id FROM tblAtencion ORDER BY Atencion_Id DESC LIMIT 1);
SELECT IdVenta AS CODIGO, IdVBDA AS CODIGO_SERVICIO;
             
END IF;

ELSE /* VENTA INDIRECTA AGENDADA */

IF Pint_TipoVenta = 1 THEN
UPDATE tblVacunas SET Vacunas_IdVenta = IdVenta, Vacunas_Precio = PrecioTotalVenta, Vacunas_CitaEstado = 'C', Vacunas_Cita = 1,Vacunas_FechaGrab_Edicion = NOW(),Vacunas_UserGrab_Edicion = Pvchr_Usuario
WHERE Vacunas_Id  = Pint_IdVBDA;
SELECT IdVenta AS CODIGO, Pint_IdVBDA AS CODIGO_SERVICIO;
ELSEIF Pint_TipoVenta = 2 THEN
UPDATE tblBanio SET Banio_IdVenta = IdVenta, Banio_Precio = PrecioTotalVenta, Banio_CitaEstado = 'C',Banio_Cita = 1, Banio_FechaGrab_Edicion = NOW(), Banio_UserGrab_Edicion = Pvchr_Usuario
WHERE Banio_Id  = Pint_IdVBDA;
SELECT IdVenta AS CODIGO, Pint_IdVBDA AS CODIGO_SERVICIO;
ELSEIF Pint_TipoVenta = 3 THEN
UPDATE tblDesparacitacion SET Desparacitacion_IdVenta = IdVenta, Desparacitacion_Precio = PrecioTotalVenta, Desparacitacion_CitaEstado = 'C', Desparacitacion_Cita = 1, Desparacitacion_FechaGrab_Edicion = NOW(), Desparacitacion_UserGrab_Edicion = Pvchr_Usuario
WHERE Desparacitacion_Id  = Pint_IdVBDA;
SELECT IdVenta AS CODIGO, Pint_IdVBDA AS CODIGO_SERVICIO;
ELSEIF Pint_TipoVenta = 4 THEN
UPDATE tblAtencion SET Atencion_IdVenta = IdVenta, Atencion_tr_Precio = PrecioTotalVenta, Atencion_CitaEstado = 'C', Atencion_Cita = 1, Atencion_FechaGrab_Edicion = NOW(), Atencion_UserGrab_Edicion = Pvchr_Usuario
WHERE Atencion_Id = Pint_IdVBDA;
SELECT IdVenta AS CODIGO, Pint_IdVBDA AS CODIGO_SERVICIO;
END IF;
END IF;

END


/*---------------------*/
CREATE DEFINER=`gavet`@`localhost` PROCEDURE `SP_Actualizar_TblVenta_Validando_Stock`(IN Pint_IdVenta INT, IN Pdat_Fecha DATE, IN Pint_IdAlmacenNuevo INT, IN Pint_TipoPago INT, Pvchr_Usuario VARCHAR(100))
BEGIN
DECLARE Producto FLOAT DEFAULT 0;
DECLARE Cantidad FLOAT DEFAULT 0;
DECLARE IdProceso FLOAT DEFAULT 0;
DECLARE Fin INT DEFAULT FALSE;
DECLARE IdSede INT;
DECLARE id INT;

  DEClARE curC CURSOR FOR SELECT VentaDetalle_IdProducto,VentaDetalle_Cantidad FROM tblVentaDetalle WHERE VentaDetalle_Id = Pint_IdVenta;
   DECLARE CONTINUE HANDLER FOR NOT FOUND SET Fin = 1;
-- utitlizada por 2 SP
IF (SELECT FUN_Actualizar_TblAlmacen_Por_EliminacionCompra(Pint_IdVenta) = 1) THEN
SELECT '0' AS CODIGO;
ELSE
-- SELECT 'SE PUEDE ELIMINAR';

SET IdSede = (SELECT Venta_IdAlmacen FROM tblVenta WHERE Venta_Id = Pint_IdVenta);
OPEN curC;
GetCompraDet: LOOP  
    FETCH curC INTO Producto,Cantidad;
    IF Fin = 1 THEN
        LEAVE GetCompraDet;
    END IF;

   UPDATE tblAlmacen
   SET Almacen_Cantidad = Almacen_Cantidad + Cantidad, Almacen_FechaGrab_Edicion = NOW(), Almacen_UserGrab_Edicion = Pvchr_Usuario
   WHERE Almacen_IdProducto = Producto AND Almacen_IdSede = IdSede;
   
   UPDATE tblAlmacen
   SET Almacen_Cantidad = Almacen_Cantidad - Cantidad, Almacen_FechaGrab_Edicion = NOW(), Almacen_UserGrab_Edicion = Pvchr_Usuario
   WHERE Almacen_IdProducto = Producto AND Almacen_IdSede = Pint_IdAlmacenNuevo;
 

END LOOP GetCompraDet;
CLOSE curC;

END IF;

  UPDATE tblVenta SET Venta_IdAlmacen = Pint_IdAlmacenNuevo,Venta_Fecha =Pdat_Fecha, Venta_TipoPago = Pint_TipoPago,Venta_FechaGrab_Edicion = NOW(),Venta_UserGrab_Edicion = Pvchr_Usuario   WHERE Venta_Id = Pint_IdVenta;
  SELECT '1' AS CODIGO;
 
END

/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

CREATE DEFINER=`gavet`@`localhost` PROCEDURE `SP_Actualizar_TblAlmacen_Por_EliminacionVenta`(IN Pint_IdVenta INT, IN Pvchr_Usuario VARCHAR(100))
BEGIN
DECLARE Producto FLOAT DEFAULT 0;
DECLARE Cantidad FLOAT DEFAULT 0;
-- DECLARE IdProceso FLOAT DEFAULT 0;
DECLARE Fin INT DEFAULT FALSE;
DECLARE IdSede INT;
DECLARE IdTipoVenta INT;
DECLARE IdVBDA INT;
-- DECLARE id INT;

  DEClARE curC CURSOR FOR SELECT VentaDetalle_IdProducto,VentaDetalle_Cantidad FROM tblVentaDetalle WHERE VentaDetalle_VentaId = Pint_IdVenta;
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET Fin = 1;

SET IdSede = (SELECT Venta_IdAlmacen FROM tblVenta WHERE Venta_Id = Pint_IdVenta);
SET IdTipoVenta = (SELECT Venta_Tipo FROM tblVenta WHERE Venta_Id = Pint_IdVenta);
OPEN curC;
GetCompraDet: LOOP  
FETCH curC INTO Producto,Cantidad;
IF Fin = 1 THEN
LEAVE GetCompraDet;
END IF;

UPDATE tblAlmacen
SET Almacen_Cantidad = Almacen_Cantidad + Cantidad, Almacen_FechaGrab_Edicion = NOW(), Almacen_UserGrab_Edicion = Pvchr_Usuario
WHERE Almacen_IdProducto = Producto AND Almacen_IdSede = IdSede;
 
-- CALL SP_Eliminar_TblCompra(Pint_IdVenta);

END LOOP GetCompraDet;
CLOSE curC;

CALL SP_Eliminar_TblVenta(Pint_IdVenta);

IF IdTipoVenta = 1 THEN
SET IdVBDA = (SELECT Vacunas_Id FROM tblVacunas WHERE Vacunas_IdVenta = Pint_IdVenta);
UPDATE tblVacunas SET Vacunas_Estado = 2, Vacunas_CitaEstado = 'V', Vacunas_FechaGrab_Edicion = NOW(),Vacunas_UserGrab_Edicion = Pvchr_Usuario
WHERE Vacunas_Id  = IdVBDA;
SELECT '1' AS CODIGO;
ELSEIF IdTipoVenta = 2 THEN
SET IdVBDA = (SELECT Banio_Id FROM tblBanio WHERE Banio_IdVenta = Pint_IdVenta);
UPDATE tblBanio SET Banio_Estado = 2, Banio_CitaEstado = 'V', Banio_FechaGrab_Edicion = NOW(),Banio_UserGrab_Edicion = Pvchr_Usuario
WHERE Banio_Id  = IdVBDA;
SELECT '2' AS CODIGO;
ELSEIF IdTipoVenta = 3 THEN
SET IdVBDA = (SELECT Desparacitacion_Id FROM tblDesparacitacion WHERE Desparacitacion_IdVenta = Pint_IdVenta);
UPDATE  tblDesparacitacion SET Desparacitacion_Estado = 2, Desparacitacion_CitaEstado = 'V', Desparacitacion_FechaGrab_Edicion = NOW(),Desparacitacion_UserGrab_Edicion = Pvchr_Usuario
WHERE Desparacitacion_Id  = IdVBDA;
SELECT '3' AS CODIGO;
ELSEIF IdTipoVenta = 4 THEN
SET IdVBDA = (SELECT Atencion_Id FROM tblAtencion WHERE Atencion_IdVenta = Pint_IdVenta);
UPDATE tblAtencion SET Atencion_Estado = 2, Atencion_CitaEstado = 'V', Atencion_FechaGrab_Edicion = NOW(),Atencion_UserGrab_Edicion = Pvchr_Usuario
WHERE Atencion_Id  = IdVBDA;
SELECT '4' AS CODIGO;
END IF;

  SELECT '5' AS CODIGO;
 
END