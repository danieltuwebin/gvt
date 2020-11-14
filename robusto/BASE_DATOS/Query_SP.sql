
-- 06112020

DROP PROCEDURE IF EXISTS SP_Obtener_TblAtencion_x_IdMascota;
DELIMITER ;;
CREATE PROCEDURE `SP_Obtener_TblAtencion_x_IdMascota`(IN `Pint_IdMascota` INT)
BEGIN
SELECT
case when length(ta.Atencion_Id) = 1 then concat('A000',ta.Atencion_Id) 
when length(ta.Atencion_Id) = 2 then concat('A00',ta.Atencion_Id) 
when length(ta.Atencion_Id) = 3 then concat('A0',ta.Atencion_Id) 
when length(ta.Atencion_Id) = 4 then concat('A',ta.Atencion_Id) else 'ERROR' end AS Codigo, 
ta.Atencion_Fecha,  ta.Atencion_Sintomas, ta.Atencion_T, ta.Atencion_FC, ta.Atencion_FR, ta.Atencion_sc_Deshidratacion, ta.Atencion_sc_Mucosas, ta.Atencion_sc_TLLC, ta.Atencion_sc_Vomitos, ta.Atencion_sc_Diarreas, ta.Atencion_sc_Ganglios, ta.Atencion_sc_Peso,
ta.Atencion_dx_Presuntivo, ta.Atencion_dx_Definitivo, ta.Atencion_dx_Solicitado, ta.Atencion_tr_Descripcion, ta.Atencion_tr_Observacion, ta.Atencion_tr_Precio, 
CONCAT('../../files/',ta.Atencion_Id) AS file, ta.Atencion_Id
-- ta.Atencion_Id
FROM tblAtencion ta
LEFT JOIN tblMascota tm ON ta.Atencion_IdMascota = tm.Mascota_Id
LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id
WHERE ta.Atencion_Estado = 1 AND ta.Atencion_IdMascota = Pint_IdMascota AND ta.Atencion_Cita = 1 ;
END ;;