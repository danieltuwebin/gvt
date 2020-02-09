DROP PROCEDURE IF EXISTS SP_Actualizar_TblDesparacitacion;
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