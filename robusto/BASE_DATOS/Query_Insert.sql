

INSERT INTO tblCliente (`Cliente_Id`, `Cliente_Nombre`, `Cliente_Apellido`, `Cliente_TelefonoFijo`, `Cliente_TelefonoCel`, `Cliente_Email`, `Cliente_Foto`, `Cliente_Provincia`, `Cliente_Distrito`, `Cliente_Direccion`, `Cliente_Observacion`, `Cliente_Estado`, `Cliente_FechaGra`, `Cliente_UserGrab`, `Cliente_FechaGrab_Edicion`, `Cliente_UserGrab_Edicion`) VALUES (NULL, 'DANIEL', 'CCAHUAY', '5500502', '956055656', 'DANIEL.DACA91@GMAIL.COM', 'SN', 'LIMA', 'PUENTE PIEDRA', 'LAS BEGONIAS', 'SIN OBS', '1', '2019-09-22 00:00:00', 'DCCAHUAY', '1900-01-22 00:00:00', 'DCCAHUAY');
INSERT INTO `tblCliente` (`Cliente_Id`, `Cliente_Nombre`, `Cliente_Apellido`, `Cliente_TelefonoFijo`, `Cliente_TelefonoCel`, `Cliente_Email`, `Cliente_Foto`, `Cliente_Provincia`, `Cliente_Distrito`, `Cliente_Direccion`, `Cliente_Observacion`, `Cliente_Estado`, `Cliente_FechaGra`, `Cliente_UserGrab`, `Cliente_FechaGrab_Edicion`, `Cliente_UserGrab_Edicion`) VALUES (NULL, 'YOVELL', 'LEONARDO', '5500502', '956055656', 'DANIEL.DACA91@GMAIL.COM', 'SN', 'LIMA', 'PUENTE PIEDRA', 'LAS BEGONIAS', 'SIN OBS', '1', '2019-09-22 00:00:00', 'DCCAHUAY', '1900-01-22 00:00:00', 'DCCAHUAY');

/*
RUTA

F:\TEMPLATES\cliente vet\robusto\robusto
*/

INSERT INTO `tblMascota` (`Mascota_Id`, `Mascota_IdCliente`, `NombreMascota`, `Mascota_IdEspecie`, `Mascota_IdRaza`, `Mascota_IdSexo`, `Mascota_Color`, `Mascota_FechaNac`, `Mascota_Foto`, `Mascota_Observacion`, `Mascota_Estado`, `Mascota_FechaGra`, `Mascota_UserGrab`, `Mascota_FechaGrab_Edicion`, `Mascota_UserGrab_Edicion`) VALUES (NULL, '1', 'CHIHUAN', '1', '1', '1', 'CARAMELO', '2019-01-16', 'SF', 'OSB', '1', '2019-09-22 00:00:00', 'DCCAHUAY', '2019-09-22 00:00:00', 'DCCAHUAY');

INSERT INTO `tblAtencion` (`Atencion_Id`, `Atencion_Fecha`, `Atencion_Cita`, `Atencion_CitaFecha`, `Atencion_IdMascota`, `Atencion_Sintomas`, `Atencion_T`, `Atencion_FC`, `Atencion_FR`, `Atencion_sc_Deshidratacion`, `Atencion_sc_Mucosas`, `Atencion_sc_TLLC`, `Atencion_sc_Vomitos`, `Atencion_sc_Diarreas`, `Atencion_sc_Ganglios`, `Atencion_sc_Peso`, `Atencion_dx_Presuntivo`, `Atencion_dx_Definitivo`, `Atencion_dx_Solicitado`, `Atencion_tr_Descripcion`, `Atencion_tr_Observacion`, `Atencion_tr_Precio`, `Atencion_IdDocumento`, `Atencion_Estado`, `Atencion_FechaGra`, `Atencion_UserGrab`, `Atencion_FechaGrab_Edicion`, `Atencion_UserGrab_Edicion`) VALUES (NULL, '2019-09-22', '1', '2019-09-23', '1', 'NINGUNO', '12', 'SIN SINTOMAS', 'SIN SINTOMAS', 'SI', 'NO', 'SI', 'SI', 'SI', 'SI', '1556', 'NO TIENE', 'NO TIENE', 'NO TIENE', 'SI TIENE', 'SIN OBS', '158.3', '1', '1', '2019-09-22 00:00:00', 'DCCAHUAY', '2019-09-22 00:00:00', 'DCCAHUAY');

INSERT INTO `tblVenta` (`Venta_Id`, `Venta_Fecha`, `Venta_IdMascota`, `Venta_PrecioTotal`, `Venta_Cantidad`, `Venta_Observacion`, `Venta_Estado`, `Venta_FechaGra`, `Venta_UserGrab`, `Venta_FechaGrab_Edicion`, `Venta_UserGrab_Edicion`) VALUES (NULL, '2019-09-03', '1', '156.36', '10', 'SINOBS', '1', '2019-09-23 00:00:00', 'DCCAHUAY', '1900-01-01 00:00:00.000000', 'DCCAHUAY');
INSERT INTO `tblVenta` (`Venta_Id`, `Venta_Fecha`, `Venta_IdMascota`, `Venta_PrecioTotal`, `Venta_Cantidad`, `Venta_Observacion`, `Venta_Estado`, `Venta_FechaGra`, `Venta_UserGrab`, `Venta_FechaGrab_Edicion`, `Venta_UserGrab_Edicion`) VALUES (NULL, '2019-08-03', '1', '1568.36', '10', 'SINOBS', '1', '2019-09-23 00:00:00', 'DCCAHUAY', '1900-01-01 00:00:00.000000', 'DCCAHUAY');
INSERT INTO `tblVenta` (`Venta_Id`, `Venta_Fecha`, `Venta_IdMascota`, `Venta_PrecioTotal`, `Venta_Cantidad`, `Venta_Observacion`, `Venta_Estado`, `Venta_FechaGra`, `Venta_UserGrab`, `Venta_FechaGrab_Edicion`, `Venta_UserGrab_Edicion`) VALUES (NULL, '2019-09-09', '1', '15.38', '10', 'SINOBS', '1', '2019-09-23 00:00:00', 'DCCAHUAY', '1900-01-01 00:00:00.000000', 'DCCAHUAY');

INSERT INTO `tblTipoProducto` (`TipoProducto_Id`, `TipoProducto_Nombre`, `TipoProducto_Estado`, `TipoProducto_Observacion`, `TipoProducto_FechaGra`, `TipoProducto_UserGrab`, `TipoProducto_FechaGrab_Edicion`, `TipoProducto_UserGrab_Edicion`) VALUES ('1', 'BAÑO', '1', 'GRUPO TIPO DE BAÑOS', '2019-11-03 00:00:00', 'DCCAHUAY', '2019-11-03 00:00:00', 'DCCAHUAY');

INSERT INTO `tblUM` (`UM_Id`, `UM_NombreCorto`, `UM_NombreLargo`, `UM_Estado`, `UM_FechaGra`, `UM_UserGrab`, `UM_FechaGrab_Edicion`, `UM_UserGrab_Edicion`) VALUES (NULL, 'UND', 'UNIDAD', '1', '2019-11-03 00:00:00', 'DCCAHUAY', '2019-11-03 00:00:00', 'DCCAHUAY');

INSERT INTO `tblProducto` (`Producto_Id`, `Producto_Nombre`, `Producto_IdTipoPro`, `Producto_IdTipoCat`, `Producto_IdTipoUM`, `Producto_PrecioCompra`, `Producto_PrecioVenta`, `Producto_Observacion`, `Producto_Estado`, `Producto_FechaGra`, `Producto_UserGrab`, `Producto_FechaGrab_Edicion`, `Producto_UserGrab_Edicion`) VALUES (NULL, 'BAÑO PERRO GRANDE', '1', '0', '1', '56.36', '59.9', 'SIN PROD.', '1', '2019-11-03 00:00:00', 'DCCAHUAY', '2019-11-03 00:00:00', 'DCCAHUAY');

INSERT INTO `tblBanio` (`Banio_Id`, `Banio_Fecha`, `Banio_IdProducto`, `Banio_Precio`, `Banio_IdMascota`, `Banio_Observacion`, `Banio_Cita`, `Banio_Estado`, `Banio_FechaGra`, `Banio_UserGrab`, `Banio_FechaGrab_Edicion`, `Banio_UserGrab_Edicion`) VALUES (NULL, '2019-11-03', '1', '156.3', '1', 'SIN OBS', '1', '1', '2019-11-03 00:00:00', 'DCCAHUAY', '2019-11-03 00:00:00', 'DCCAHUAY');
INSERT INTO `tblBanio` (`Banio_Id`, `Banio_Fecha`, `Banio_IdProducto`, `Banio_Precio`, `Banio_IdMascota`, `Banio_Observacion`, `Banio_Cita`, `Banio_Estado`, `Banio_FechaGra`, `Banio_UserGrab`, `Banio_FechaGrab_Edicion`, `Banio_UserGrab_Edicion`) VALUES (NULL, '2019-11-03', '1', '133.3', '1', 'SIN OBS', '2', '1', '2019-11-03 00:00:00', 'DCCAHUAY', '2019-11-03 00:00:00', 'DCCAHUAY');

INSERT INTO `tblProducto` (`Producto_Id`, `Producto_Nombre`, `Producto_IdTipoPro`, `Producto_IdTipoCat`, `Producto_IdTipoUM`, `Producto_PrecioCompra`, `Producto_PrecioVenta`, `Producto_Observacion`, `Producto_Estado`, `Producto_FechaGra`, `Producto_UserGrab`, `Producto_FechaGrab_Edicion`, `Producto_UserGrab_Edicion`) VALUES (NULL, 'VACUNA I', '2', '0', '1', '60.36', '70.36', 'SIN PROD.', '1', '2019-11-03 00:00:00', 'DCCAHUAY', '2019-11-03 00:00:00', 'DCCAHUAY');

INSERT INTO `tblVacunas` (`Vacunas_Id`, `Vacunas_Fecha`, `Vacunas_IdProducto`, `Vacunas_Precio`, `Vacunas_IdMascota`, `Vacunas_Observacion`, `Vacunas_Cita`, `Vacunas_Estado`, `Vacunas_FechaGra`, `Vacunas_UserGrab`, `Vacunas_FechaGrab_Edicion`, `Vacunas_UserGrab_Edicion`) VALUES (NULL, '2019-11-05', '4', '63.36', '3', 'SIN OBS', '2', '1', '2019-11-06 00:00:00', 'DCCAHUAY', '2019-11-06 00:00:00', 'DCCAHUAY');

INSERT INTO `tblDesparacitacion` (`Desparacitacion_Id`, `Desparacitacion_Fecha`, `Desparacitacion_IdProducto`, `Desparacitacion_Precio`, `Desparacitacion_IdMascota`, `Desparacitacion_Observacion`, `Desparacitacion_Cita`, `Desparacitacion_Estado`, `Desparacitacion_FechaGra`, `Desparacitacion_UserGrab`, `Desparacitacion_FechaGrab_Edicion`, `Desparacitacion_UserGrab_Edicion`) VALUES (NULL, '2019-11-07', '6', '65', '2', 'NUE', '2', '1', '2019-11-07 00:00:00', 'DCCAHUAY', '1900-01-01 00:00:00.000000', 'DCCAHUAY');

INSERT INTO `tblCliente` (`Cliente_Id`, `Cliente_Nombre`, `Cliente_Apellido`, `Cliente_TelefonoFijo`, `Cliente_TelefonoCel`, `Cliente_Email`, `Cliente_Foto`, `Cliente_Provincia`, `Cliente_Distrito`, `Cliente_Direccion`, `Cliente_Observacion`, `Cliente_Estado`, `Cliente_FechaGra`, `Cliente_UserGrab`, `Cliente_FechaGrab_Edicion`, `Cliente_UserGrab_Edicion`) VALUES (NULL, 'LUIS', 'TORRES', '5005060', '956055656', 'LUIS@GMAIL.COM', 'SN', 'LIMA', 'LIMA', 'LAS DALIAS', 'SIN OBS', '1', '2019-11-07 00:00:00', 'DCCAHUAY', '2019-11-07 00:00:00', 'DCCAHUAY');

INSERT INTO `tblProvincia` (`Provincia_Id`, `Provincia_Nombre`, `Provincia_Estado`) VALUES (NULL, 'LIMA', '1'), (NULL, 'CALLAO', '1');


INSERT INTO `tblDistrito` (`Distrito_Id`, `Distrito_IdProvincia`, `Distrito_Nombre`, `Distrito_Estado`) VALUES (NULL, '2', 'LA PERLA', '1');
INSERT INTO `tblDistrito` (`Distrito_Id`, `Distrito_IdProvincia`, `Distrito_Nombre`, `Distrito_Estado`) VALUES (NULL, '2', 'LA PUNTA', '1');
INSERT INTO `tblDistrito` (`Distrito_Id`, `Distrito_IdProvincia`, `Distrito_Nombre`, `Distrito_Estado`) VALUES (NULL, '2', 'SAN MIGUEL', '1');
INSERT INTO `tblDistrito` (`Distrito_Id`, `Distrito_IdProvincia`, `Distrito_Nombre`, `Distrito_Estado`) VALUES (NULL, '3', 'NUEVA CANTA', '1');
INSERT INTO `tblDistrito` (`Distrito_Id`, `Distrito_IdProvincia`, `Distrito_Nombre`, `Distrito_Estado`) VALUES (NULL, '3', 'CANTA BAJA', '1');

INSERT INTO `tblEspecie` (`Especie_Id`, `Especie_Nombre`, `Especie_Estado`, `Especie_FechaGra`, `Especie_UserGrab`, `Especie_FechaGrab_Edicion`, `Especie_UserGrab_Edicion`) VALUES (NULL, 'PERRO', '1', '2019-11-20 00:00:00', 'DCCAHUAY', '1900-01-01 00:00:00.000000', 'DCCAHUAY');


INSERT INTO tblUsuario (Usuario_IdUsuario, Usuario_NombreCompleto, Usuario_IdPerfilUsuario, Usuario_NombreUsuario, Usuario_PassUsuario, Usuario_EstadoUsuario, Usuario_FechaGra, Usuario_UserGrab) VALUES (NULL, 'CCAHUAY ANAMPA DANIEL ALFREDO', '1', 'DCCAHUAY', '46764402', '1', '2019-11-17 00:00:00', 'DCCAHUAY');
INSERT INTO tblUsuario (Usuario_IdUsuario, Usuario_NombreCompleto, Usuario_IdPerfilUsuario, Usuario_NombreUsuario, Usuario_PassUsuario, Usuario_EstadoUsuario, Usuario_FechaGra, Usuario_UserGrab) VALUES (NULL, 'ALVARO GALINDO', '2', 'AGALINDO', '46764402', '1', '2019-11-17 00:00:00', 'DCCAHUAY');
INSERT INTO tblUsuario (Usuario_IdUsuario, Usuario_NombreCompleto, Usuario_IdPerfilUsuario, Usuario_NombreUsuario, Usuario_PassUsuario, Usuario_EstadoUsuario, Usuario_FechaGra, Usuario_UserGrab) VALUES (NULL, 'SHIRLEY ROJAS', '3', 'SROJAS', '46764402', '1', '2019-11-17 00:00:00', 'DCCAHUAY');

INSERT INTO `tblEspecie` (`Especie_Id`, `Especie_Nombre`, `Especie_Estado`, `Especie_FechaGra`, `Especie_UserGrab`, `Especie_FechaGrab_Edicion`, `Especie_UserGrab_Edicion`) VALUES (NULL, 'LORO', '1', '2019-11-20 00:00:00', 'DCCAHUAY', '1900-01-01 00:00:00', 'DCCAHUAY');
INSERT INTO `tblRaza` (`Raza_Id`, `Raza_IdEspecie`, `Raza_Nombre`, `Raza_Estado`, `Raza_FechaGra`, `Raza_UserGrab`, `Raza_FechaGrab_Edicion`, `Raza_UserGrab_Edicion`) VALUES (NULL, '2', 'SIAMES', '1', '2019-11-20 00:00:00', 'DCCAHUAY', '1900-01-01 00:00:00', 'DCCAHUAY'),
(NULL, '2', 'MONTES', '1', '2019-11-20 00:00:00', 'DCCAHUAY', '1900-01-01 00:00:00', 'DCCAHUAY'),(NULL, '3', 'PICRO ROJO', '1', '2019-11-20 00:00:00', 'DCCAHUAY', '1900-01-01 00:00:00', 'DCCAHUAY'),(NULL, '3', 'PICO AZUL', '1', '2019-11-20 00:00:00', 'DCCAHUAY', '1900-01-01 00:00:00', 'DCCAHUAY');


    DROP PROCEDURE IF EXISTS SP_Obtener_Totales_Dashboard;
    DELIMITER $$
    CREATE PROCEDURE SP_Obtener_Totales_Dashboard()
    BEGIN
    DECLARE TotalClientes INT;
    DECLARE TotalMascotas INT;
    DECLARE TotalAtenciones INT;
    DECLARE VentasDia FLOAT;
    DECLARE VentasSem FLOAT;      
    DECLARE VentasMes FLOAT;
    SET TotalClientes = (SELECT COUNT(*) FROM tblCliente WHERE Cliente_Estado = 1);
    SET TotalMascotas = (SELECT COUNT(*) FROM tblMascota WHERE Mascota_Estado = 1);
    SET TotalAtenciones = (SELECT COUNT(*) FROM tblAtencion WHERE Atencion_Estado = 1);
    SET VentasDia = (SELECT SUM(Venta_PrecioTotal) FROM tblVenta WHERE Venta_Estado = 1 AND Venta_Fecha = DATE(NOW()));    
    SET VentasSem = (SELECT SUM(Venta_PrecioTotal) FROM tblVenta WHERE Venta_Estado = 1 AND WEEK(Venta_Fecha) = WEEK(NOW()));
    SET VentasMes = (SELECT SUM(Venta_PrecioTotal) FROM tblVenta WHERE Venta_Estado = 1 AND MONTH(Venta_Fecha) = MONTH(NOW()));    
    SELECT TotalClientes,TotalMascotas,TotalAtenciones,VentasDia,VentasSem,VentasMes;
    END$$
    DELIMITER ;

    DROP PROCEDURE IF EXISTS SP_Obtener_TblBanios_Agendados;
    DELIMITER $$
    CREATE PROCEDURE SP_Obtener_TblBanios_Agendados()
    BEGIN
    SELECT tb.Banio_Id,tm.Mascota_Nombre,tp.Producto_Nombre,tb.Banio_Fecha
    FROM tblBanio tb 
    LEFT JOIN tblMascota tm ON tb.Banio_IdMascota = tm.Mascota_Id
    LEFT JOIN tblProducto tp ON tb.Banio_IdProducto = tp.Producto_Id
    WHERE tb.Banio_Cita = 2;
    END$$
    DELIMITER ;

    DROP PROCEDURE IF EXISTS SP_Obtener_TblVacunas_Agendados;
    DELIMITER $$
    CREATE PROCEDURE SP_Obtener_TblVacunas_Agendados()
    BEGIN
    SELECT tv.Vacunas_Id,tm.Mascota_Nombre,tp.Producto_Nombre,tv.Vacunas_Fecha
    FROM tblVacunas tv 
    LEFT JOIN tblMascota tm ON tv.Vacunas_IdMascota = tm.Mascota_Id
    LEFT JOIN tblProducto tp ON tv.Vacunas_IdProducto = tp.Producto_Id
    WHERE tv.Vacunas_Cita = 2;
    END$$
    DELIMITER ;

    DROP PROCEDURE IF EXISTS SP_Obtener_TblDesparacitacion_Agendados;
    DELIMITER $$
    CREATE PROCEDURE SP_Obtener_TblDesparacitacion_Agendados()
    BEGIN
    SELECT td.Desparacitacion_Id,tm.Mascota_Nombre,tp.Producto_Nombre,td.Desparacitacion_Fecha
    FROM tblDesparacitacion td
    LEFT JOIN tblMascota tm ON td.Desparacitacion_IdMascota = tm.Mascota_Id
    LEFT JOIN tblProducto tp ON td.Desparacitacion_IdProducto = tp.Producto_Id
    WHERE td.Desparacitacion_Cita = 2;
    END$$
    DELIMITER ;    

    DROP PROCEDURE IF EXISTS SP_Obtener_TblAtencion_Agendados;
    DELIMITER $$
    CREATE PROCEDURE SP_Obtener_TblAtencion_Agendados()
    BEGIN
    SELECT ta.Atencion_Id,tm.Mascota_Nombre,'ATENCION' as Atencion,ta.Atencion_Fecha
    FROM tblAtencion ta
    LEFT JOIN tblMascota tm ON ta.Atencion_IdMascota = tm.Mascota_Id
    WHERE ta.Atencion_Cita = 2;
    END$$
    DELIMITER ;      



    DROP PROCEDURE IF EXISTS SP_Registrar_TblCliente_NuevoCliente;
    DELIMITER $$
    CREATE PROCEDURE SP_Registrar_TblCliente_NuevoCliente(IN Pvchr_Nombre VARCHAR(100),
                                                        IN Pvchr_Apellido VARCHAR(100),
                                                        IN Pvchr_Dni VARCHAR(10),
                                                        IN Pvchr_Email VARCHAR(100),
                                                        IN Pint_Telefono INT,
                                                        IN Pint_TelefonoCel INT,
                                                        IN Pvchr_Foto VARCHAR(100),
                                                        IN Pvchr_Provincia VARCHAR(100),
                                                        IN Pvchr_Distrito VARCHAR(100),
                                                        IN Pvchr_Direccion VARCHAR(100),
                                                        IN Pvchr_Observacion VARCHAR(1000),
                                                        IN Pint_Estado INT,
                                                        IN Pvchr_Usuario VARCHAR(100))
    BEGIN
        IF Pvchr_Dni <> '12345678' THEN
        BEGIN
            IF NOT EXISTS(SELECT Cliente_Dni FROM tblCliente WHERE Cliente_Dni = Pvchr_Dni) THEN
            BEGIN
                INSERT INTO tblCliente 
                (Cliente_Id, Cliente_Nombre, Cliente_Apellido, Cliente_Dni, Cliente_TelefonoFijo, Cliente_TelefonoCel, Cliente_Email, Cliente_Foto, Cliente_Provincia, Cliente_Distrito, Cliente_Direccion, Cliente_Observacion, Cliente_Estado, Cliente_FechaGra, Cliente_UserGrab)
                VALUES (NULL, Pvchr_Nombre, Pvchr_Apellido, Pvchr_Dni, Pint_Telefono, Pint_TelefonoCel, Pvchr_Email , Pvchr_Foto, Pvchr_Provincia, Pvchr_Distrito, Pvchr_Direccion, Pvchr_Observacion, '1', NOW(), Pvchr_Usuario);
                SELECT '1' AS Codigo; /* NO EXISTE */
            END;
            ELSE
            BEGIN
                IF EXISTS(SELECT Cliente_Dni FROM tblCliente WHERE Cliente_Dni = Pvchr_Dni AND Cliente_Estado = 2) THEN
                BEGIN
                SELECT '2' AS Codigo; /* ELIMINADO*/
                END;
                ELSE
                BEGIN
                SELECT '3' AS Codigo; /* EXISTE */
                END;
                END IF;
            END;
            END IF;
        END;
        ELSE
        BEGIN
            INSERT INTO tblCliente 
            (Cliente_Id, Cliente_Nombre, Cliente_Apellido, Cliente_Dni, Cliente_TelefonoFijo, Cliente_TelefonoCel, Cliente_Email, Cliente_Foto, Cliente_Provincia, Cliente_Distrito, Cliente_Direccion, Cliente_Observacion, Cliente_Estado, Cliente_FechaGra, Cliente_UserGrab)
            VALUES (NULL, Pvchr_Nombre, Pvchr_Apellido, Pvchr_Dni, Pint_Telefono, Pint_TelefonoCel, Pvchr_Email , Pvchr_Foto, Pvchr_Provincia, Pvchr_Distrito, Pvchr_Direccion, Pvchr_Observacion, '1', NOW(), Pvchr_Usuario);
            SELECT '1' AS Codigo; /* NO EXISTE */
        END;
        END IF;        
    END$$
    DELIMITER ;


    DROP PROCEDURE IF EXISTS SP_Obtener_TblProvincia_all;
    DELIMITER $$
    CREATE PROCEDURE SP_Obtener_TblProvincia_all()
    BEGIN
    SELECT Provincia_Id,Provincia_Nombre FROM tblProvincia WHERE Provincia_Estado = 1;
    END$$
    DELIMITER ;


    DROP PROCEDURE IF EXISTS SP_Obtener_TblDistrito_x_Provincia;
    DELIMITER $$
    CREATE PROCEDURE SP_Obtener_TblDistrito_x_Provincia(IN Pint_ProvinciaId INT)
    BEGIN
    SELECT td.Distrito_Id,td.Distrito_Nombre FROM tblDistrito td LEFT JOIN tblProvincia tp ON td.Distrito_IdProvincia = tp.Provincia_Id
    WHERE tp.Provincia_Estado = 1 AND td.Distrito_IdProvincia = Pint_ProvinciaId;
    END$$
    DELIMITER ;


    DROP PROCEDURE IF EXISTS SP_Obtener_TblClientes_All;
    DELIMITER $$
    CREATE PROCEDURE SP_Obtener_TblClientes_All()
    BEGIN
    SELECT Cliente_Id,CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS 	Cliente_NombreCompleto,
    tc.Cliente_Dni,tc.Cliente_TelefonoCel,tc.Cliente_Email,
    tp.Provincia_Nombre AS Cliente_Provincia,td.Distrito_Nombre AS Cliente_Distrito,tc.Cliente_Direccion 
    FROM tblCliente tc LEFT JOIN tblProvincia tp ON tc.Cliente_Provincia = tp.Provincia_Id 
    LEFT JOIN tblDistrito td ON tc.Cliente_Distrito = td.Distrito_Id
    WHERE tc.Cliente_Estado = 1 
    ORDER BY Cliente_Id DESC;
    END$$
    DELIMITER ;   


DROP PROCEDURE IF EXISTS SP_Login_Sistema;
DELIMITER $$
CREATE PROCEDURE SP_Login_Sistema(IN Pvchr_User VARCHAR(100),IN Pvchr_Pass VARCHAR(100))
BEGIN
IF EXISTS(SELECT * FROM tblUsuario WHERE Usuario_NombreUsuario = Pvchr_User AND Usuario_PassUsuario = Pvchr_Pass AND Usuario_EstadoUsuario= 1) THEN
SELECT '1' as Codigo,Usuario_IdPerfilUsuario,Usuario_IdAlmacen FROM tblUsuario WHERE Usuario_NombreUsuario = Pvchr_User AND Usuario_PassUsuario = Pvchr_Pass;
ELSE
SELECT '2' as Codigo,'X' AS Usuario_IdPerfilUsuario, '0' AS Usuario_IdAlmacen;
END IF;
END$$
DELIMITER ; 


DROP PROCEDURE IF EXISTS SP_Obtener_TblMascota_All_x_Condicion;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblMascota_All_x_Condicion(IN Pint_Condicion INT, IN Pint_IdCliente INT)
BEGIN
IF Pint_Condicion = 1 THEN
BEGIN
SELECT tm.Mascota_Id,CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS Mascota_Cliente, tm.Mascota_Nombre,te.Especie_Nombre AS Mascota_Especie,tr.Raza_Nombre AS Mascota_Raza,CASE WHEN tm.Mascota_IdSexo = 1 THEN 'MACHO' ELSE 'HEMBRA' END AS Mascota_Sexo,TIMESTAMPDIFF(YEAR,`Mascota_FechaNac`,CURDATE()) AS Mascota_Edad FROM tblMascota tm LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id 
LEFT JOIN tblEspecie te ON tm.Mascota_IdEspecie = te.Especie_Id
LEFT JOIN tblRaza tr ON tm.Mascota_IdRaza = tr.Raza_Id
WHERE tm.Mascota_Estado = 1;
END;
ELSEIF Pint_Condicion = 2 THEN
BEGIN
SELECT tm.Mascota_Id,CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS Mascota_Cliente, tm.Mascota_Nombre,te.Especie_Nombre AS Mascota_Especie,tr.Raza_Nombre AS Mascota_Raza,CASE WHEN tm.Mascota_IdSexo = 1 THEN 'MACHO' ELSE 'HEMBRA' END AS Mascota_Sexo,TIMESTAMPDIFF(YEAR,`Mascota_FechaNac`,CURDATE()) AS Mascota_Edad FROM tblMascota tm LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id 
LEFT JOIN tblEspecie te ON tm.Mascota_IdEspecie = te.Especie_Id
LEFT JOIN tblRaza tr ON tm.Mascota_IdRaza = tr.Raza_Id
WHERE tm.Mascota_IdCliente = Pint_IdCliente AND tm.Mascota_Estado = 1;
END;
END IF;
/*********************************
SELECT tm.Mascota_Id,CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS Mascota_Cliente, tm.Mascota_Nombre,te.Especie_Nombre,tr.Raza_Nombre,CASE WHEN tm.Mascota_IdSexo = 1 THEN 'MACHO' ELSE 'HEMBRA' END AS Mascota_Sexo,tm.Mascota_Color,TIMESTAMPDIFF(YEAR,`Mascota_FechaNac`,CURDATE()) AS Mascota_Edad,tm.Mascota_FechaNac,tm.Mascota_Observacion,tm.Mascota_FechaGra,tm.Mascota_UserGrab FROM tblMascota tm LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id 
LEFT JOIN tblEspecie te ON tm.Mascota_IdEspecie = te.Especie_Id
LEFT JOIN tblRaza tr ON tm.Mascota_IdRaza = tr.Raza_Id;
*********************************/
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Registrar_TblMascota_NuevoMascota;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblMascota_NuevoMascota  (IN Pint_IdCliente INT,
                                                        IN Pvchr_Nombre VARCHAR(100),
                                                        IN Pint_IdEspecie INT,
                                                        IN Pint_IdRaza INT,
                                                        IN Pint_IdSexo INT,
                                                        IN Pvchr_Color VARCHAR(100),
                                                        IN Pdat_FechaNac DATE,
                                                        IN Pvchr_Obs VARCHAR(100),
                                                        IN Pint_Estado INT,
                                                        IN Pvchr_Usuario VARCHAR(100))
BEGIN
INSERT INTO tblMascota (Mascota_Id, Mascota_IdCliente, 	Mascota_Nombre, Mascota_IdEspecie, Mascota_IdRaza, Mascota_IdSexo, Mascota_Color, Mascota_FechaNac, Mascota_Foto, Mascota_Observacion, Mascota_Estado, Mascota_FechaGra, Mascota_UserGrab) 
VALUES (NULL, Pint_IdCliente, Pvchr_Nombre, Pint_IdEspecie, Pint_IdRaza, Pint_IdSexo, Pvchr_Color, Pdat_FechaNac, 'SF', Pvchr_Obs, Pint_Estado, NOW(), Pvchr_Usuario);
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Actualizar_TblCliente;
DELIMITER $$
CREATE PROCEDURE `SP_Actualizar_TblCliente`(IN Pvchr_Nombre VARCHAR(100),
                                         IN Pvchr_Apellido VARCHAR(100),
                                         /*IN Pvchr_Dni VARCHAR(10),*/
                                         IN Pvchr_Email VARCHAR(100),
                                         IN Pint_Telefono INT,
                                         IN Pint_TelefonoCel INT,
                                         IN Pvchr_Foto VARCHAR(100),
                                         IN Pint_Provincia INT,
                                         IN Pint_Distrito INT,
                                         IN Pvchr_Direccion VARCHAR(100),
                                         IN Pvchr_Observacion VARCHAR(1000),
                                         IN Pint_Estado INT,
                                         IN Pvchr_Usuario VARCHAR(100),
                                         IN Pint_IdCliente INT)
BEGIN
UPDATE tblCliente
SET Cliente_Nombre = Pvchr_Nombre,
Cliente_Apellido = Pvchr_Apellido,
/*Cliente_Dni = Pvchr_Dni,*/
Cliente_TelefonoFijo = Pint_Telefono,
Cliente_TelefonoCel = Pint_TelefonoCel,
Cliente_Email = Pvchr_Email,
Cliente_Foto = Pvchr_Foto,
Cliente_Provincia = Pint_Provincia,
Cliente_Distrito = Pint_Distrito,
Cliente_Direccion = Pvchr_Direccion,
Cliente_Observacion = Pvchr_Observacion,
Cliente_Estado = Pint_Estado,
Cliente_FechaGrab_Edicion = NOW(),
Cliente_UserGrab_Edicion = Pvchr_Usuario
WHERE Cliente_Id = Pint_IdCliente;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Eliminar_TblCliente;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblCliente (IN Pint_IdCliente INT)
BEGIN
/*DELETE FROM tblCliente WHERE Mascota_Id = Pint_IdCliente;*/
UPDATE tblCliente SET Cliente_Estado = 2 WHERE Cliente_Id = Pint_IdCliente;
END$$
DELIMITER ;

DROP PROCEDURE IF EXISTS SP_Obtener_TblClientes_Eliminados_x_Dni;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblClientes_Eliminados_x_Dni (IN Pvchr_Dni VARCHAR(10))
BEGIN
    SELECT Cliente_Id,Cliente_Nombre,Cliente_Apellido,Cliente_Dni,Cliente_Email,Cliente_TelefonoFijo,Cliente_TelefonoCel,Cliente_Provincia,Cliente_Distrito,Cliente_Direccion,Cliente_Observacion FROM tblCliente
    WHERE Cliente_Estado = 2 AND Cliente_Dni = Pvchr_Dni;
END$$
DELIMITER ;

DROP PROCEDURE IF EXISTS SP_Obtener_TblClientes_x_Dni;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblClientes_x_Dni (IN Pvchr_Dni VARCHAR(10))
BEGIN
    SELECT Cliente_Id,Cliente_Nombre,Cliente_Apellido,Cliente_Dni,Cliente_Email,Cliente_TelefonoFijo,Cliente_TelefonoCel,Cliente_Provincia,Cliente_Distrito,Cliente_Direccion,Cliente_Observacion FROM tblCliente
    WHERE Cliente_Estado = 2 AND Cliente_Dni = Pvchr_Dni;
END$$
DELIMITER ;


    DROP PROCEDURE IF EXISTS SP_Obtener_TblEspecie_all;
    DELIMITER $$
    CREATE PROCEDURE SP_Obtener_TblEspecie_all()
    BEGIN
    SELECT Especie_Id,Especie_Nombre FROM tblEspecie WHERE Especie_Estado = 1;
    END$$
    DELIMITER ;

    DROP PROCEDURE IF EXISTS SP_Obtener_TblRaza_x_Especie;
    DELIMITER $$
    CREATE PROCEDURE SP_Obtener_TblRaza_x_Especie(IN Pint_EspecieId INT)
    BEGIN
    SELECT Raza_Id,Raza_Nombre FROM tblRaza
    WHERE Raza_Estado = 1 AND Raza_IdEspecie = Pint_EspecieId;
    END$$
    DELIMITER ;    

DROP PROCEDURE IF EXISTS SP_Obtener_TblClientes_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblClientes_x_Id (IN Pint_Id VARCHAR(10))
BEGIN
    SELECT Cliente_Id,Cliente_Nombre,Cliente_Apellido,Cliente_Dni,Cliente_Email,Cliente_TelefonoFijo,Cliente_TelefonoCel,Cliente_Provincia,Cliente_Distrito,Cliente_Direccion,Cliente_Observacion FROM tblCliente
    WHERE Cliente_Estado = 1 AND Cliente_Id = Pint_Id;
END$$
DELIMITER ;    


/* DROP PROCEDURE IF EXISTS SP_Obtener_TblClientes_SoloNombre_x_Dni;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblClientes_SoloNombre_x_Dni (IN Pvchr_Dni VARCHAR(10))
BEGIN
    SELECT Cliente_Id,CONCAT(Cliente_Nombre,' ',Cliente_Apellido) AS Cliente_Nombre FROM tblCliente
    WHERE Cliente_Estado = 1 AND Cliente_Dni = Pvchr_Dni;
END$$
DELIMITER ; */


DROP PROCEDURE IF EXISTS SP_Obtener_TblClientes_SoloNombre_x_Dni;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblClientes_SoloNombre_x_Dni (IN Pvchr_Dni VARCHAR(10))
BEGIN
	IF EXISTS(SELECT * FROM tblCliente WHERE Cliente_Dni = Pvchr_Dni AND Cliente_Estado = 1) THEN
    BEGIN
    SELECT Cliente_Id,CONCAT(Cliente_Nombre,' ',Cliente_Apellido) AS Cliente_Nombre FROM tblCliente
    WHERE Cliente_Estado = 1 AND Cliente_Dni = Pvchr_Dni;
    END;
    ELSE
    BEGIN
    SELECT '0' AS Cliente_Id,'EL CLIENTE NO EXISTE O HA SIDO ELIMINADO' AS Cliente_Nombre;
    END;
    END IF;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_TblMascota_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblMascota_x_Id(IN Pint_IdMascota INT)
BEGIN
SELECT tm.Mascota_Id,tc.Cliente_Id,tc.Cliente_Dni,CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS 	Cliente_NombreCompleto,tm.Mascota_Nombre,tm.Mascota_IdEspecie,tm.Mascota_IdRaza,tm.Mascota_IdSexo,tm.Mascota_Color,tm.Mascota_FechaNac,tm.Mascota_Observacion FROM tblMascota tm LEFT JOIN  tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id
WHERE tm.Mascota_Id = Pint_IdMascota;
END$$
DELIMITER ;



DROP PROCEDURE IF EXISTS SP_Actualizar_TblMascota;
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblMascota (IN Pint_IdCliente INT,
                                          IN Pvchr_Nombre VARCHAR(100),
                                          /*IN Pvchr_Dni VARCHAR(10),*/
                                          IN Pint_Especie INT,
                                          IN Pint_Raza INT,
                                          IN Pint_Sexo INT,
                                          IN Pvchr_Color VARCHAR(100),
                                          IN Pdate_FechaNac DATE,
                                          IN Pvchr_Observacion VARCHAR(1000),
                                          IN Pint_Estado INT,
                                          IN Pvchr_Usuario VARCHAR(100),
                                          IN Pint_IdMascota INT)
BEGIN
UPDATE tblMascota 
SET Mascota_IdCliente = Pint_IdCliente,
Mascota_Nombre = Pvchr_Nombre,
/*Cliente_Dni = Pvchr_Dni,*/
Mascota_IdEspecie = Pint_Especie,
Mascota_IdRaza = Pint_Raza,
Mascota_IdSexo = Pint_Sexo,
Mascota_Color = Pvchr_Color,
Mascota_FechaNac = Pdate_FechaNac,
Mascota_Observacion = Pvchr_Observacion,
Mascota_Estado = Pint_Estado,
Mascota_FechaGrab_Edicion = NOW(),
Mascota_UserGrab_Edicion = Pvchr_Usuario
WHERE Mascota_Id = Pint_IdMascota;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Eliminar_TblMascota;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblMascota (IN Pint_IdMascota INT)
BEGIN
UPDATE tblMascota SET Mascota_Estado = 2 WHERE Mascota_Id = Pint_IdMascota;
END$$
DELIMITER ;




DROP PROCEDURE IF EXISTS SP_Registrar_TblProducto_NuevoProducto;
/* VALIDAR QUE NO SEA MISMO TIPO DE PRODUCTO - MISMA CATEGORIA - MISMA UM - Y MISMO NOMBRE */
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblProducto_NuevoProducto (IN Pvchr_nombre VARCHAR(100),
                                                         IN Pint_TipoProducto INT,
                                                         IN Pint_TipoCategoria INT,
                                                         IN Pint_TipoUM INT,
                                                         /*IN Pint_Sctock INT,*/
                                                         IN Pflo_PrecioCompra FLOAT (9.2),
                                                         IN Pflo_PrecioVenta FLOAT (9.2),
                                                         IN Pvchr_Observacion VARCHAR(100),
                                                         IN Pint_Estado INT,
                                                         IN Pvchr_Usuario VARCHAR(100))
BEGIN
IF EXISTS( SELECT * FROM tblProducto WHERE Producto_IdTipoPro = Pint_TipoProducto AND Producto_IdTipoCat = Pint_TipoCategoria AND Producto_IdTipoUM = Pint_TipoUM
          AND Producto_Nombre = Pvchr_nombre AND Producto_Estado = 2) THEN
SELECT '3' AS CODIGO;
ELSEIF EXISTS( SELECT * FROM tblProducto WHERE Producto_IdTipoPro = Pint_TipoProducto AND Producto_IdTipoCat = Pint_TipoCategoria AND Producto_IdTipoUM = Pint_TipoUM
          AND Producto_Nombre = Pvchr_nombre AND Producto_Estado = 1) THEN
SELECT '2' AS CODIGO;
ELSE
INSERT INTO tblProducto(Producto_Nombre, Producto_IdTipoPro, Producto_IdTipoCat, Producto_IdTipoUM, Producto_PrecioCompra, Producto_PrecioVenta, Producto_Observacion, Producto_Estado, Producto_FechaGra, Producto_UserGrab) 
VALUES (Pvchr_nombre, Pint_TipoProducto, Pint_TipoCategoria, Pint_TipoUM, Pflo_PrecioCompra, Pflo_PrecioVenta, Pvchr_Observacion, Pint_Estado,NOW(), Pvchr_Usuario);
SELECT '1' AS CODIGO;
END IF;
END$$
DELIMITER ;




DROP PROCEDURE IF EXISTS SP_Actualizar_TblProducto;
/* VALIDAR QUE NO SEA MISMO TIPO DE PRODUCTO - MISMA CATEGORIA - MISMA UM - Y MISMO NOMBRE */
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblProducto (IN Pvchr_nombre VARCHAR(100),
                                            IN Pint_TipoProducto INT,
                                            IN Pint_TipoCategoria INT,
                                            IN Pint_TipoUM INT,
                                            /*IN Pint_Sctock INT,*/
                                            IN Pflo_PrecioCompra FLOAT (9.2),
                                            IN Pflo_PrecioVenta FLOAT (9.2),
                                            IN Pvchr_Observacion VARCHAR(100),
                                            IN Pint_Estado INT,
                                            IN Pvchr_Usuario VARCHAR(100),
                                            IN Pint_IdProducto INT,
                                            IN Pint_TipoActualizacion INT)
BEGIN
IF Pint_TipoActualizacion = 1 THEN

    IF EXISTS( SELECT * FROM tblProducto WHERE Producto_IdTipoPro = Pint_TipoProducto AND Producto_IdTipoCat = Pint_TipoCategoria AND Producto_IdTipoUM = Pint_TipoUM
            AND Producto_Nombre = Pvchr_nombre AND Producto_Estado = 2) THEN
    SELECT '3' AS CODIGO;
    ELSEIF EXISTS( SELECT * FROM tblProducto WHERE Producto_IdTipoPro = Pint_TipoProducto AND Producto_IdTipoCat = Pint_TipoCategoria AND Producto_IdTipoUM = Pint_TipoUM
            AND Producto_Nombre = Pvchr_nombre AND Producto_Estado = 1) THEN
    SELECT '2' AS CODIGO;
    ELSE
    UPDATE tblProducto
        SET	Producto_Nombre			=Pvchr_nombre,
            Producto_IdTipoPro		=Pint_TipoProducto,
            Producto_IdTipoCat		=Pint_TipoCategoria,
            Producto_IdTipoUM		=Pint_TipoUM,
            /*Producto_PrecioCompra	=Pflo_PrecioCompra,
            Producto_PrecioVenta	=Pflo_PrecioVenta,*/
            Producto_Observacion	=Pvchr_Observacion,
            Producto_Estado			=Pint_Estado,
            Producto_FechaGrab_Edicion=NOW(),
            Producto_UserGrab_Edicion=Pvchr_Usuario
            WHERE Producto_Id=Pint_IdProducto;
    SELECT '1' AS CODIGO;
    END IF;

ELSEIF Pint_TipoActualizacion = 2 THEN

    UPDATE tblProducto
        SET	Producto_Nombre			=Pvchr_nombre,
            Producto_IdTipoPro		=Pint_TipoProducto,
            Producto_IdTipoCat		=Pint_TipoCategoria,
            Producto_IdTipoUM		=Pint_TipoUM,
            /*Producto_PrecioCompra	=Pflo_PrecioCompra,
            Producto_PrecioVenta	=Pflo_PrecioVenta,*/
            Producto_Observacion	=Pvchr_Observacion,
            Producto_Estado			=Pint_Estado,
            Producto_FechaGrab_Edicion=NOW(),
            Producto_UserGrab_Edicion=Pvchr_Usuario
            WHERE Producto_Id=Pint_IdProducto;
    SELECT '1' AS CODIGO;
END IF;
END$$
DELIMITER ;




DROP PROCEDURE IF EXISTS SP_Eliminar_TblProducto;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblProducto (IN Pint_IdProducto INT)
BEGIN
IF EXISTS(SELECT * FROM tblProducto WHERE Producto_Id = Pint_IdProducto AND Producto_Stock > 0) THEN
SELECT '2' AS CODIGO;
ELSE
UPDATE tblProducto SET Producto_Estado = 2 WHERE Producto_Id = Pint_IdProducto;
SELECT '1' AS CODIGO;
END IF;
END$$
DELIMITER ;



    DROP PROCEDURE IF EXISTS SP_Obtener_TblUM_all;
    DELIMITER $$
    CREATE PROCEDURE SP_Obtener_TblUM_all()
    BEGIN
    SELECT UM_Id,UM_NombreLargo FROM tblUM WHERE UM_Estado = 1;
    END$$
    DELIMITER ;

    DROP PROCEDURE IF EXISTS SP_Obtener_TblTipoProducto_all;
    DELIMITER $$
    CREATE PROCEDURE SP_Obtener_TblTipoProducto_all()
    BEGIN
    SELECT TipoProducto_Id,TipoProducto_Nombre FROM tblTipoProducto WHERE TipoProducto_Estado = 1;
    END$$
    DELIMITER ;

    DROP PROCEDURE IF EXISTS SP_Obtener_TblCategoria_x_TipoProducto;
    DELIMITER $$
    CREATE PROCEDURE SP_Obtener_TblCategoria_x_TipoProducto(IN Pint_TipoProductoId INT)
    BEGIN
    SELECT tc.Categoria_Id,tc.Categoria_Nombre FROM tblCategoria tc LEFT JOIN tblTipoProducto tt ON tc.Categoria_IdTipoPro = tt.TipoProducto_Id
    WHERE tc.Categoria_Estado = 1 AND tt.TipoProducto_Id = Pint_TipoProductoId;
    END$$
    DELIMITER ;    

DROP PROCEDURE IF EXISTS SP_Obtener_TblProducto_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblProducto_x_Id(IN Pint_IdProducto INT,IN Pint_CondicionObt INT)
BEGIN
IF Pint_CondicionObt = 1 THEN
SELECT Producto_Id,Producto_Nombre,Producto_IdTipoPro,Producto_IdTipoCat,Producto_IdTipoUM,Producto_PrecioCompra,Producto_PrecioVenta,Producto_Observacion FROM tblProducto 
WHERE Producto_Id = Pint_IdProducto AND Producto_Estado = 1;
ELSEIF Pint_CondicionObt = 2 THEN
SELECT Producto_Id,Producto_Nombre,Producto_IdTipoPro,Producto_IdTipoCat,Producto_IdTipoUM,Producto_PrecioCompra,Producto_PrecioVenta,Producto_Observacion FROM tblProducto 
WHERE Producto_Id = Pint_IdProducto;
END IF;
END$$
DELIMITER ;    



DROP PROCEDURE IF EXISTS SP_Obtener_TblEspecie_VariosCmps_all;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblEspecie_VariosCmps_all()
BEGIN
SELECT Especie_Id,Especie_Nombre,CASE WHEN Especie_Estado = 1 THEN 'A' ELSE 'C' END AS Especie_Estado,
CASE WHEN Especie_FechaGrab_Edicion = '1900-01-01 00:00:00' THEN Especie_FechaGra ELSE Especie_FechaGrab_Edicion END AS Especie_Fecha,
CASE WHEN Especie_UserGrab_Edicion = '' THEN Especie_UserGrab ELSE Especie_UserGrab_Edicion END AS Especie_User FROM tblEspecie WHERE Especie_Estado = 1;
END$$
DELIMITER ;

ALTER TABLE `tblEspecie` CHANGE `Especie_UserGrab_Edicion` `Especie_UserGrab_Edicion` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL DEFAULT '';
ALTER TABLE `tblRaza` CHANGE `Raza_UserGrab_Edicion` `Raza_UserGrab_Edicion` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL DEFAULT '';




DROP PROCEDURE IF EXISTS SP_Obtener_TblRaza_VariosCmps_all;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblRaza_VariosCmps_all()
BEGIN
SELECT tr.Raza_Id,te.Especie_Nombre,tr.Raza_Nombre, CASE WHEN tr.Raza_Estado = 1 THEN 'A' ELSE 'C' END AS Raza_Estado,
CASE WHEN tr.Raza_FechaGrab_Edicion = '1900-01-01 00:00:00' THEN tr.Raza_FechaGra ELSE tr.Raza_FechaGrab_Edicion END AS Raza_Fecha,
CASE WHEN tr.Raza_UserGrab_Edicion = '' THEN tr.Raza_UserGrab ELSE tr.Raza_UserGrab_Edicion END AS Raza_User
FROM tblRaza tr LEFT JOIN tblEspecie te ON tr.Raza_IdEspecie = te.Especie_Id
WHERE tr.Raza_Estado = 1 AND te.Especie_Estado = 1;
END$$
DELIMITER ;



DROP PROCEDURE IF EXISTS SP_Obtener_TblUM_VariosCmps_all;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblUM_VariosCmps_all()
BEGIN
SELECT UM_Id,UM_NombreCorto,UM_NombreLargo,CASE WHEN UM_Estado = 1 THEN 'A' ELSE 'C' END AS UM_Estado,
CASE WHEN UM_FechaGrab_Edicion = '1900-01-01 00:00:00' THEN UM_FechaGra ELSE UM_FechaGrab_Edicion END AS Um_Fecha,
CASE WHEN UM_UserGrab_Edicion = '' THEN UM_UserGrab ELSE UM_UserGrab_Edicion END AS Um_User FROM  tblUM WHERE UM_Estado = 1;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_tblTipoProducto_VariosCmps_all;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_tblTipoProducto_VariosCmps_all()
BEGIN
SELECT TipoProducto_Id,TipoProducto_Nombre,tipo,CASE WHEN TipoProducto_Estado = 1 THEN 'A' ELSE 'C' END AS TipoProducto_Estado,
CASE WHEN TipoProducto_FechaGrab_Edicion = '1900-01-01 00:00:00' THEN TipoProducto_FechaGra ELSE TipoProducto_FechaGrab_Edicion END AS TipoProducto_Fecha,
CASE WHEN TipoProducto_UserGrab_Edicion = '' THEN TipoProducto_UserGrab ELSE TipoProducto_UserGrab_Edicion END AS TipoProducto_User FROM tblTipoProducto WHERE TipoProducto_Estado = 1;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_tblCategoria_VariosCmps_all;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_tblCategoria_VariosCmps_all()
BEGIN
SELECT tc.Categoria_Id,tp.TipoProducto_Nombre,tc.Categoria_Nombre,tc.Categoria_Observacion,
CASE WHEN tc.Categoria_Estado = 1 THEN 'A' ELSE 'C' END AS Categoria_Estado,
CASE WHEN tc.Categoria_FechaGrab_Edicion = '1900-01-01 00:00:00' THEN tc.Categoria_FechaGra ELSE tc.Categoria_FechaGrab_Edicion END AS Categoria_Fecha,
CASE WHEN tc.Categoria_UserGrab_Edicion = '' THEN tc.Categoria_UserGrab ELSE tc.Categoria_UserGrab_Edicion END AS Categoria_User
FROM tblCategoria tc LEFT JOIN tblTipoProducto tp ON tc.Categoria_IdTipoPro = tp.TipoProducto_Id
WHERE tc.Categoria_Estado = 1 AND tp.TipoProducto_Estado = 1;
END$$
DELIMITER ;



DROP PROCEDURE IF EXISTS SP_Registrar_TblRaza_NuevoRaza;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblRaza_NuevoRaza(IN Pint_IdEspecie INT,
                                               	IN Pvchr_Nombre VARCHAR(100),
                                                IN Pvchr_Usuario VARCHAR(50))
BEGIN
IF EXISTS(SELECT Raza_Nombre FROM tblRaza WHERE Raza_IdEspecie = Pint_IdEspecie AND Raza_Nombre = Pvchr_Nombre AND Raza_Estado = 1) THEN
SELECT '2' AS CODIGO;
ELSE
INSERT INTO tblRaza (Raza_IdEspecie, Raza_Nombre, Raza_Estado, Raza_FechaGra, Raza_UserGrab)
VALUES
(Pint_IdEspecie,Pvchr_Nombre,1,NOW(),Pvchr_Usuario);
SELECT '1' AS CODIGO;
END IF;
END$$
DELIMITER ;

DROP PROCEDURE IF EXISTS SP_Obtener_TblRaza_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblRaza_x_Id(IN Pint_IdRaza INT)
BEGIN
SELECT Raza_Id,Raza_IdEspecie,Raza_Nombre FROM tblRaza WHERE Raza_Id = Pint_IdRaza;
END$$
DELIMITER ;




DROP PROCEDURE IF EXISTS SP_Eliminar_TblRaza;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblRaza(IN Pint_IdRaza INT)
BEGIN
UPDATE tblRaza SET Raza_Estado = 2 WHERE Raza_Id = Pint_IdRaza;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Actualizar_TblRaza;
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblRaza(IN Pint_IdRaza INT,
                                       IN Pint_IdEspecie INT,
                                       IN Pvchr_Nombre VARCHAR(100),
                                       IN Pvchr_User VARCHAR(50))
BEGIN
IF EXISTS (SELECT Raza_Id FROM tblRaza WHERE Raza_IdEspecie = Pint_IdEspecie AND Raza_Nombre = Pvchr_Nombre AND Raza_Estado = 1 AND Raza_Id <> Pint_IdRaza) THEN 
SELECT '2' AS CODIGO;
ELSE
UPDATE tblRaza SET 
Raza_IdEspecie = Pint_IdEspecie,
Raza_Nombre = Pvchr_Nombre,
Raza_FechaGrab_Edicion = NOW(),
Raza_UserGrab_Edicion = Pvchr_User
WHERE Raza_Id = Pint_IdRaza;
SELECT '1' AS CODIGO;
END IF;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Registrar_TblEspecie_NuevoEspecie;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblEspecie_NuevoEspecie(IN Pvchr_Nombre VARCHAR(100),
                                                	  IN Pvchr_Usuario VARCHAR(50))
BEGIN
IF EXISTS(SELECT Especie_Nombre FROM tblEspecie WHERE Especie_Nombre = Pvchr_Nombre AND Especie_Estado = 1) THEN
SELECT '2' AS CODIGO;
ELSE
INSERT INTO tblEspecie (Especie_Nombre, Especie_Estado, Especie_FechaGra, Especie_UserGrab)
VALUES
(Pvchr_Nombre,1,NOW(),Pvchr_Usuario);
SELECT '1' AS CODIGO;
END IF;
END$$
DELIMITER ;

DROP PROCEDURE IF EXISTS SP_Eliminar_TblEspecie;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblEspecie(IN Pint_IdEspecie INT)
BEGIN
UPDATE tblEspecie SET Especie_Estado = 2 WHERE Especie_Id = Pint_IdEspecie;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Actualizar_TblEspecie;
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblEspecie(IN Pint_IdEspecie INT,
                                          IN Pvchr_Nombre VARCHAR(100),
                                          IN Pvchr_User VARCHAR(50))
BEGIN
IF EXISTS(SELECT Especie_Nombre FROM tblEspecie WHERE Especie_Estado = 1 AND Especie_Nombre = Pvchr_Nombre) THEN
SELECT '2' AS CODIGO;
ELSE
UPDATE tblEspecie SET 
Especie_Nombre = Pvchr_Nombre,
Especie_FechaGrab_Edicion = NOW(),
Especie_UserGrab_Edicion = Pvchr_User
WHERE Especie_Id = Pint_IdEspecie;
SELECT '1' AS CODIGO;
END IF;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_TblEspecie_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblEspecie_x_Id(IN Pint_IdEspecie INT)
BEGIN
SELECT Especie_Id,Especie_Nombre FROM tblEspecie WHERE Especie_Id = Pint_IdEspecie;
END$$
DELIMITER ;



DROP PROCEDURE IF EXISTS SP_Registrar_TblUM_NuevoUM;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblUM_NuevoUM(IN Pvchr_NombreCorto VARCHAR(50),
                                            IN Pvchr_NombreLargo VARCHAR(100),
                                            IN Pvchr_Usuario VARCHAR(50))
BEGIN
IF EXISTS(SELECT UM_NombreLargo FROM tblUM WHERE UM_NombreCorto = Pvchr_NombreCorto AND UM_Estado = 1) THEN
SELECT '3' AS CODIGO;
ELSEIF EXISTS(SELECT UM_NombreLargo FROM tblUM WHERE UM_NombreLargo = Pvchr_NombreLargo AND UM_Estado = 1) THEN
SELECT '2' AS CODIGO;
ELSE
INSERT INTO tblUM (UM_NombreCorto, UM_NombreLargo, UM_Estado, UM_FechaGra, UM_UserGrab)
VALUES
(Pvchr_NombreCorto,Pvchr_NombreLargo,1,NOW(),Pvchr_Usuario);
SELECT '1' AS CODIGO;
END IF;
END$$
DELIMITER ;

DROP PROCEDURE IF EXISTS SP_Eliminar_TblUM;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblUM(IN Pint_IdUm INT)
BEGIN
UPDATE tblUM SET UM_Estado = 2 WHERE UM_Id = Pint_IdUm;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Actualizar_TblUM;
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblUM(IN Pint_IdUm INT,
    								 IN Pvchr_NombreCorto VARCHAR(50),
                                     IN Pvchr_NombreLargo VARCHAR(100),
                                     IN Pvchr_Usuario VARCHAR(50))
BEGIN
IF EXISTS(SELECT UM_NombreLargo FROM tblUM WHERE UM_NombreCorto = Pvchr_NombreCorto AND UM_Estado = 1 AND UM_Id <> Pint_IdUm) THEN
SELECT '3' AS CODIGO;
ELSEIF EXISTS(SELECT UM_NombreLargo FROM tblUM WHERE UM_NombreLargo = Pvchr_NombreLargo AND UM_Estado = 1 AND UM_Id <> Pint_IdUm) THEN
SELECT '2' AS CODIGO;
ELSE
UPDATE tblUM SET 
UM_NombreCorto = Pvchr_NombreCorto,
UM_NombreLargo = Pvchr_NombreLargo,
UM_FechaGrab_Edicion = NOW(),
UM_UserGrab_Edicion = Pvchr_Usuario
WHERE UM_Id = Pint_IdUm;
SELECT '1' AS CODIGO;
END IF;
END$$
DELIMITER ;

DROP PROCEDURE IF EXISTS SP_Obtener_TblUM_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblUM_x_Id(IN Pint_IdUm INT)
BEGIN
SELECT UM_Id,UM_NombreCorto,UM_NombreLargo FROM tblUM WHERE UM_Id = Pint_IdUm;
END$$
DELIMITER ;



DROP PROCEDURE IF EXISTS SP_Registrar_TblTipoProducto_NuevoTipoProducto;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblTipoProducto_NuevoTipoProducto(IN Pvchr_Nombre VARCHAR(50),
                                            					IN Pvchr_Notas VARCHAR(1000),
                                            					IN Pvchr_Usuario VARCHAR(50))
BEGIN
IF EXISTS(SELECT TipoProducto_Nombre FROM tblTipoProducto WHERE TipoProducto_Nombre = Pvchr_Nombre AND TipoProducto_Estado = 1) THEN
SELECT '2' AS CODIGO;
ELSE
INSERT INTO tblTipoProducto (TipoProducto_Nombre, TipoProducto_Estado, TipoProducto_Observacion, TipoProducto_FechaGra, TipoProducto_UserGrab)
VALUES
(Pvchr_Nombre,1,Pvchr_Notas,NOW(),Pvchr_Usuario);
SELECT '1' AS CODIGO;
END IF;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Eliminar_tblTipoProducto;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_tblTipoProducto(IN Pint_IdTipoProducto INT)
BEGIN
UPDATE tblTipoProducto SET TipoProducto_Estado = 2 WHERE TipoProducto_Id = Pint_IdTipoProducto;
END$$
DELIMITER ;

DROP PROCEDURE IF EXISTS SP_Actualizar_tblTipoProducto;
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_tblTipoProducto(IN Pint_IdTipoProducto INT,
    								 			IN Pvchr_Nombre VARCHAR(50),
                                            	IN Pvchr_Notas VARCHAR(1000),
                                            	IN Pvchr_Usuario VARCHAR(50))
BEGIN
IF EXISTS(SELECT TipoProducto_Nombre FROM tblTipoProducto WHERE TipoProducto_Nombre = Pvchr_Nombre AND TipoProducto_Estado = 1 AND  TipoProducto_Id <> Pint_IdTipoProducto) THEN
SELECT '2' AS CODIGO;
ELSE
UPDATE tblTipoProducto SET 
TipoProducto_Nombre = Pvchr_Nombre,
TipoProducto_Observacion = Pvchr_Notas,
TipoProducto_FechaGrab_Edicion = NOW(),
TipoProducto_UserGrab_Edicion = Pvchr_Usuario
WHERE TipoProducto_Id = Pint_IdTipoProducto;
SELECT '1' AS CODIGO;
END IF;
END$$
DELIMITER ;

DROP PROCEDURE IF EXISTS SP_Obtener_tblTipoProducto_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_tblTipoProducto_x_Id(IN Pint_IdTipoProducto INT)
BEGIN
SELECT TipoProducto_Id,TipoProducto_Nombre,TipoProducto_Observacion FROM tblTipoProducto WHERE TipoProducto_Id = Pint_IdTipoProducto;
END$$
DELIMITER ;




DROP PROCEDURE IF EXISTS SP_Registrar_TblCategoria_NuevoCategoria;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblCategoria_NuevoCategoria(IN Pint_IdTipoProducto INT,
                                               			  IN Pvchr_Nombre VARCHAR(100),
                                                          IN Pvchr_Notas VARCHAR(1000),
                                                		  IN Pvchr_Usuario VARCHAR(50))
BEGIN
IF EXISTS(SELECT Categoria_Nombre FROM tblCategoria WHERE Categoria_IdTipoPro = Pint_IdTipoProducto AND Categoria_Nombre = Pvchr_Nombre AND Categoria_Estado = 1 ) THEN
SELECT '2' AS CODIGO;
ELSE
INSERT INTO tblCategoria (Categoria_IdTipoPro, Categoria_Nombre, Categoria_Observacion, Categoria_Estado, Categoria_FechaGra, Categoria_UserGrab)
VALUES
(Pint_IdTipoProducto,Pvchr_Nombre,Pvchr_Notas,1,NOW(),Pvchr_Usuario);
SELECT '1' AS CODIGO;
END IF;
END$$
DELIMITER ;

DROP PROCEDURE IF EXISTS SP_Eliminar_TblCategoria;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblCategoria(IN Pint_IdCategoria INT)
BEGIN
UPDATE tblCategoria SET Categoria_Estado = 2 WHERE Categoria_Id = Pint_IdCategoria;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Actualizar_TblCategoria;
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblCategoria(IN Pint_IdCategoria INT,
                                            IN Pint_IdTipoProducto INT,
    								 		IN Pvchr_Nombre VARCHAR(50),
                                            IN Pvchr_Notas VARCHAR(1000),
                                            IN Pvchr_Usuario VARCHAR(50))
BEGIN
IF EXISTS(SELECT Categoria_Nombre FROM tblCategoria WHERE Categoria_IdTipoPro = Pint_IdTipoProducto AND Categoria_Nombre = Pvchr_Nombre AND Categoria_Estado = 1 AND Categoria_Id <> Pint_IdCategoria) THEN
SELECT '2' AS CODIGO;
ELSE
UPDATE tblCategoria SET 
Categoria_IdTipoPro = Pint_IdTipoProducto,
Categoria_Nombre = Pvchr_Nombre,
Categoria_Observacion = Pvchr_Notas,
Categoria_FechaGrab_Edicion = NOW(),
Categoria_UserGrab_Edicion = Pvchr_Usuario
WHERE Categoria_Id = Pint_IdCategoria;
SELECT '1' AS CODIGO;
END IF;
END$$
DELIMITER ;

DROP PROCEDURE IF EXISTS SP_Obtener_TblCategoria_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblCategoria_x_Id(IN Pint_IdCategoria INT)
BEGIN
SELECT Categoria_Id,Categoria_IdTipoPro,Categoria_Nombre,Categoria_Observacion FROM tblCategoria WHERE Categoria_Id = Pint_IdCategoria;
END$$
DELIMITER ;


/*ELIMINADO*/
DROP PROCEDURE IF EXISTS SP_Registrar_TblVacunas_NuevoVacunas;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblVacunas_NuevoVacunas(IN Pdate_Fecha VARCHAR(50),
                                            		  IN Pint_IdProducto INT,
                                            		  IN Pflo_Precio FLOAT,
                                                      IN Pint_IdMascota INT,
                                                      IN Pvchr_Observacion VARCHAR(100),
                                                      IN Pint_Cita INT,
                                                      IN Pvchr_CitaEstado VARCHAR(1),
                                                      IN Pint_Estado INT,
                                                      IN Pvchr_Usuario VARCHAR(50))
BEGIN
INSERT INTO tblVacunas (Vacunas_Fecha, Vacunas_IdProducto, Vacunas_Precio, Vacunas_IdMascota, Vacunas_Observacion, Vacunas_Cita, Vacunas_CitaEstado, Vacunas_Estado, Vacunas_FechaGra, Vacunas_UserGrab)
VALUES 
(Pdate_Fecha, Pint_IdProducto, Pflo_Precio, Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pvchr_CitaEstado, Pint_Estado, NOW(), Pvchr_Usuario );
-- SELECT '1' AS CODIGO;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_TblProducto_Inpendendientes;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblProducto_Inpendendientes(IN Pint_TipoProducto INT)
BEGIN
IF Pint_TipoProducto = 1 THEN
SELECT Producto_Id,Producto_Nombre FROM tblProducto WHERE Producto_Estado = 1 AND Producto_IdTipoPro = 1 AND Producto_IdTipoCat = 1;
ELSEIF Pint_TipoProducto = 2 THEN
SELECT Producto_Id,Producto_Nombre FROM tblProducto WHERE Producto_Estado = 1 AND Producto_IdTipoPro = 2 AND Producto_IdTipoCat = 2;
ELSEIF Pint_TipoProducto = 3 THEN
SELECT Producto_Id,Producto_Nombre FROM tblProducto WHERE Producto_Estado = 1 AND Producto_IdTipoPro = 3 AND Producto_IdTipoCat = 3;
END IF;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_TblProducto_Precio_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblProducto_Precio_x_Id(IN Pint_IdProducto INT)
BEGIN
SELECT Producto_Id,Producto_PrecioVenta FROM tblProducto WHERE Producto_Id = Pint_IdProducto;
END$$
DELIMITER ;    


DROP PROCEDURE IF EXISTS SP_Obtener_NombreCli_NombreMas_x_IdMascota;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_NombreCli_NombreMas_x_IdMascota(IN Pint_IdMascota INT)
BEGIN
SELECT tm.Mascota_Id, tm.Mascota_Nombre, tc.Cliente_Id,tc.Cliente_Dni, CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS Mascota_Cliente 
FROM tblMascota tm LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id 
WHERE tm.Mascota_Estado = 1 AND tm.Mascota_Id =  Pint_IdMascota;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_Nombre_x_Id_ClienteMascota;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_Nombre_x_Id_ClienteMascota (IN Pvchr_Dni VARCHAR(10), IN Pint_Condicion INT)
BEGIN
IF Pint_Condicion = 1 THEN 
-- CLIENTE 
SELECT DISTINCT(tc.Cliente_Id),CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS Cliente_Nombre FROM tblCliente tc LEFT JOIN tblMascota tm  ON tm.Mascota_IdCliente = tc.Cliente_Id WHERE tc.Cliente_Dni = Pvchr_Dni;
ELSEIF Pint_Condicion = 2 THEN 
-- MASCOTA
SELECT tc.Cliente_Id,CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS Cliente_Nombre,tm.Mascota_Id FROM tblMascota tm LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id WHERE tm.Mascota_Id = CAST(SUBSTRING(Pvchr_Dni, 2, 4) AS INT);
END IF;
END$$
DELIMITER ;








DROP PROCEDURE IF EXISTS SP_Registrar_TblVacunas;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblVacunas 
                                                   /* Variable Vacuna */
                                                   (IN Pint_IdTipoRegistro INT,
                                                   IN Pint_Idvacuna INT,                                                   
                                                   IN Pdat_Fecha DATE,
                                                   IN Pint_IdProducto INT,
                                                   IN Pflo_Precio FLOAT,
                                                   IN Pint_IdMascota INT,
                                                   IN Pvchr_Observacion VARCHAR(100),
                                                   IN Pint_Cita INT,
                                                   IN Pvchr_Usuario VARCHAR(50),
                                                   /* Variable Venta */
                                                   IN Pint_VentaTipo INT,
                                                   -- IN Pint_TipoPago INT,
                                                   -- IN Pflo_Descuento FLOAT,
                                                   IN Pflo_Cantidad FLOAT,
                                                   -- IN Pflo_PrecioTotal FLOAT,
                                                   -- IN Pvchr_ObservacionVenta VARCHAR(100),
                                                   IN Pint_IdAlmacen INT)
BEGIN
DECLARE IdVentaTemporal INT;
DECLARE IdAlmacen INT;
IF Pint_IdTipoRegistro = 1 THEN
    IF Pint_Cita = 1 THEN /* Registrar */
    /*VALIDAR QUE EXISTE STOCK*/
    IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 THEN
    INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
                                  VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
                                  VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
                                  VALUES 
                                 (Pint_IdTipoRegistro, Pint_Idvacuna, Pdat_Fecha, Pint_IdProducto, Pflo_Precio,
                                  Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
                                  Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
    /* OBTIENE ID DE VENTATEMPORAL */
    SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
    SELECT '1' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
    ELSE
    SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
    END IF;
    ELSEIF Pint_Cita = 2 THEN /* Agendar */
    /*INSERTA TBL VACUNAS*/
    INSERT INTO tblVacunas
    (Vacunas_Fecha, Vacunas_IdProducto, Vacunas_IdMascota, Vacunas_Observacion, Vacunas_Cita, Vacunas_CitaEstado, Vacunas_Estado, Vacunas_FechaGra, Vacunas_UserGrab)
     VALUES
    (Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Observacion, Pint_Cita, 'A', 1, now(), Pvchr_Usuario);
    SELECT '1' AS Codigo,'0' AS CodigoVentaTmp;
    END IF; 
ELSEIF Pint_IdTipoRegistro = 2 THEN
    IF Pint_Cita = 1 THEN
    /*VALIDAR QUE EXISTE STOCK*/
    IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 THEN
    INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
                                  VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
                                  VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
                                  VALUES 
                                 (Pint_IdTipoRegistro, Pint_Idvacuna, Pdat_Fecha, Pint_IdProducto, Pflo_Precio,
                                  Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
                                  Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
    /* OBTIENE ID DE VENTATEMPORAL */
    SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
    SELECT '2' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
    ELSE
    SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
    END IF;
    ELSEIF Pint_Cita = 2 THEN
    /* cod 2 */
    SELECT '3' AS Codigo,'1' AS CodigoVenta;
    ELSEIF Pint_Cita = 3 THEN
    /* ACTUALIZA TBL VACUNA */
    UPDATE tblVacunas SET 
    Vacunas_Fecha = Pdat_Fecha,
    Vacunas_Observacion = Pvchr_Observacion,
    Vacunas_Cita = 3,
    Vacunas_FechaGrab_Edicion = NOW(),
    Vacunas_UserGrab_Edicion = Pvchr_Usuario    
    WHERE Vacunas_Id = Pint_Idvacuna;
    SELECT '2' AS Codigo,'0' AS CodigoVenta;
    END IF;
END IF;
END$$
DELIMITER ;
























DROP PROCEDURE IF EXISTS SP_Registrar_TblVacunas_TblVenta;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblVacunas_TblVenta 
                                                   /* Variable Vacuna */
                                                   (IN Pint_IdTipoRegistro INT,
                                                   IN Pint_Idvacuna INT,                                                   
                                                   IN Pint_Idventa INT,
                                                   IN Pdat_Fecha DATE,
                                                   IN Pint_IdProducto INT,
                                                   IN Pflo_Precio FLOAT,
                                                   IN Pint_IdMascota INT,
                                                   IN Pvchr_Observacion VARCHAR(100),
                                                   IN Pint_Cita INT,
                                                   -- IN Pint_CitaEstado INT,
                                                   -- IN Pint_Estado INT,
                                                   IN Pvchr_Usuario VARCHAR(50),
                                                   /* Variable Venta */
                                                   IN Pint_VentaTipo INT,
                                                   IN Pint_TipoPago INT,
                                                   IN Pflo_Descuento FLOAT,
                                                   IN Pflo_Cantidad FLOAT,
                                                   IN Pflo_PrecioTotal FLOAT,
                                                   IN Pvchr_ObservacionVenta VARCHAR(100),
                                                   IN Pint_IdAlmacen INT)
BEGIN
DECLARE IdVenta INT;
DECLARE IdAlmacen INT;
-- DECLARE RId INT,
-- DECLARE RIdVenta INT;
IF Pint_IdTipoRegistro = 1 THEN
    IF Pint_Cita = 1 THEN
    /*INSERTA TBL VENTA*/
    INSERT INTO tblVenta (Venta_Fecha, Venta_Tipo, Venta_TipoPago, Venta_IdMascota, Venta_IdAlmacen, Venta_Precio, Venta_Descuento, Venta_Cantidad, Venta_PrecioTotal, Venta_Observacion, Venta_Estado, Venta_FechaGra, Venta_UserGrab)
    VALUES 
    (Pdat_Fecha, Pint_VentaTipo, Pint_TipoPago, Pint_IdMascota, Pint_IdAlmacen, Pflo_Precio, Pflo_Descuento, Pflo_Cantidad, Pflo_PrecioTotal, Pvchr_ObservacionVenta, 1, now(), Pvchr_Usuario);    
    /* OBTIENE ID DE VENTA */
    SET IdVenta =(SELECT MAX(Venta_Id) FROM tblVenta);
    /* INSERTAR TBL VENTA DETALLE */
    INSERT INTO tblVentaDetalle (VentaDetalle_VentaId, VentaDetalle_IdProducto, VentaDetalle_Precio, VentaDetalle_Descuento, VentaDetalle_Cantidad, VentaDetalle_PrecioTotal, VentaDetalle_Estado, VentaDetalle_FechaGra, VentaDetalle_UserGrab )
    VALUES 
    (IdVenta, Pint_IdProducto, Pflo_Precio, Pflo_Descuento, Pflo_Cantidad, Pflo_PrecioTotal, 1, now(), Pvchr_Usuario);
    /*INSERTA TBL VACUNAS*/
    INSERT INTO tblVacunas
    (Vacunas_IdVenta, Vacunas_Fecha, Vacunas_Precio, Vacunas_IdProducto, Vacunas_IdMascota, Vacunas_Observacion, Vacunas_Cita, Vacunas_CitaEstado, Vacunas_Estado, Vacunas_FechaGra, Vacunas_UserGrab)
     VALUES
    (IdVenta, Pdat_Fecha, Pint_IdProducto, Pflo_PrecioTotal, Pint_IdMascota, Pvchr_Observacion, Pint_Cita, 'C', 1, now(), Pvchr_Usuario);
    /* BUSCAR SEDE - ID PRODUCTO Y DESCONTAR */
        IF EXISTS(SELECT * FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) THEN
        SET IdAlmacen = (SELECT Almacen_Id FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen);
        UPDATE tblAlmacen SET Almacen_Cantidad = Almacen_Cantidad - Pflo_Cantidad WHERE Almacen_Id = IdAlmacen;
        SELECT '1' AS Codigo,IdVenta AS CodigoVenta;
        ELSE
        SELECT '3' AS Codigo,'0' AS CodigoVenta;
        END IF;
    ELSEIF Pint_Cita = 2 THEN
    /*INSERTA TBL VACUNAS*/
    INSERT INTO tblVacunas
    (Vacunas_Fecha, Vacunas_IdProducto, Vacunas_IdMascota, Vacunas_Observacion, Vacunas_Cita, Vacunas_CitaEstado, Vacunas_Estado, Vacunas_FechaGra, Vacunas_UserGrab)
     VALUES
    (Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Observacion, Pint_Cita, 'A', 1, now(), Pvchr_Usuario);
    SELECT '1' AS Codigo,'0' AS CodigoVenta;
    ELSEIF Pint_Cita = 3 THEN
    /*INSERTA TBL VACUNAS*/
    INSERT INTO tblVacunas
    (Vacunas_Fecha, Vacunas_IdProducto, Vacunas_IdMascota, Vacunas_Observacion, Vacunas_Cita, Vacunas_CitaEstado, Vacunas_Estado, Vacunas_FechaGra, Vacunas_UserGrab)
     VALUES
    (Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Observacion, Pint_Cita, 'A', 1, now(), Pvchr_Usuario);
    SELECT '1' AS Codigo,'0' AS CodigoVenta;   
    END IF; 
ELSEIF Pint_IdTipoRegistro = 2 THEN
    IF Pint_Cita = 1 THEN
    /*INSERTA TBL VENTA*/
    INSERT INTO tblVenta (Venta_Fecha, Venta_Tipo, Venta_TipoPago, Venta_IdMascota, Venta_IdAlmacen, Venta_Precio, Venta_Descuento, Venta_Cantidad, Venta_PrecioTotal, Venta_Observacion, Venta_Estado, Venta_FechaGra, Venta_UserGrab)
    VALUES 
    (Pdat_Fecha, Pint_VentaTipo, Pint_TipoPago, Pint_IdMascota, Pint_IdAlmacen, Pflo_Precio, Pflo_Descuento, Pflo_Cantidad, Pflo_PrecioTotal, Pvchr_ObservacionVenta, 1, now(), Pvchr_Usuario);        
    /* OBTIENE ID DE VENTA */
    SET IdVenta =(SELECT MAX(Venta_Id) FROM tblVenta);
    /* INSERTAR TBL VENTA DETALLE */
    INSERT INTO tblVentaDetalle (VentaDetalle_VentaId, VentaDetalle_IdProducto, VentaDetalle_Precio, VentaDetalle_Descuento, VentaDetalle_Cantidad, VentaDetalle_PrecioTotal, VentaDetalle_Estado, VentaDetalle_FechaGra, VentaDetalle_UserGrab )
    VALUES 
    (IdVenta, Pint_IdProducto, Pflo_Precio, Pflo_Descuento, Pflo_Cantidad, Pflo_PrecioTotal, 1, now(), Pvchr_Usuario);    
    /* ACTUALIZAR TBL VACUNA */
    UPDATE tblVacunas SET 
    Vacunas_IdVenta = IdVenta,
    Vacunas_Fecha = Pdat_Fecha,
    Vacunas_Precio = Pflo_PrecioTotal,
    Vacunas_Observacion = Pvchr_Observacion,
    Vacunas_CitaEstado = 'C',
    Vacunas_FechaGrab_Edicion = NOW(),
    Vacunas_UserGrab_Edicion = Pvchr_Usuario
    WHERE Vacunas_Id = Pint_Idvacuna;
    /* BUSCAR SEDE - ID PRODUCTO Y DESCONTAR */
        IF EXISTS(SELECT * FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) THEN
        SET IdAlmacen = (SELECT Almacen_Id FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen);
        UPDATE tblAlmacen SET Almacen_Cantidad = Almacen_Cantidad - Pflo_Cantidad WHERE Almacen_Id = IdAlmacen;
        SELECT '2' AS Codigo,IdVenta AS CodigoVenta;
        ELSE
        SELECT '3' AS Codigo,'0' AS CodigoVenta;
        END IF;
    ELSEIF Pint_Cita = 2 THEN
    SELECT '3' AS Codigo,'1' AS CodigoVenta;
    ELSEIF Pint_Cita = 3 THEN
    UPDATE tblVacunas SET 
    Vacunas_Fecha = Pdat_Fecha,
    Vacunas_Observacion = Pvchr_Observacion,
    Vacunas_Cita = 3,
    Vacunas_FechaGrab_Edicion = NOW(),
    Vacunas_UserGrab_Edicion = Pvchr_Usuario    
    WHERE Vacunas_Id = Pint_Idvacuna;
    SELECT '2' AS Codigo,IdVenta AS CodigoVenta;
    END IF;
END IF;
END$$
DELIMITER ;



INSERT INTO `tblSede` (`Sede_Id`, `Sede_Ubicacion`, `Sede_Nombre`, `Sede_Estado`, `Sede_FechaGra`, `Sede_UserGrab`, `Sede_FechaGrab_Edicion`, `Sede_UserGrab_Edicion`) VALUES (NULL, 'CARABAYLLO KM 25', 'GAVET 1', '1', '2019-12-13 00:00:00', 'ADMIN', '2019-12-13 00:00:00', 'ADMIN');
INSERT INTO `tblSede` (`Sede_Id`, `Sede_Ubicacion`, `Sede_Nombre`, `Sede_Estado`, `Sede_FechaGra`, `Sede_UserGrab`, `Sede_FechaGrab_Edicion`, `Sede_UserGrab_Edicion`) VALUES (NULL, 'CARABAYLLO KM 110', 'GAVET 2', '1', '2019-12-13 00:00:00', 'ADMIN', '2019-12-13 00:00:00', 'ADMIN');
INSERT INTO `tblSede` (`Sede_Id`, `Sede_Ubicacion`, `Sede_Nombre`, `Sede_Estado`, `Sede_FechaGra`, `Sede_UserGrab`, `Sede_FechaGrab_Edicion`, `Sede_UserGrab_Edicion`) VALUES (NULL, 'PUENTE PIEDRA KM 110', 'GAVET 3', '1', '2019-12-13 00:00:00', 'ADMIN', '2019-12-13 00:00:00', 'ADMIN');



DROP PROCEDURE IF EXISTS SP_Obtener_TblVacunas_All_x_Condicion;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblVacunas_All_x_Condicion(IN Pint_Condicion INT, IN Pint_IdMascota INT)
BEGIN
IF Pint_Condicion = 1 THEN
BEGIN
SELECT tv.Vacunas_Id,tm.Mascota_Id,tv.Vacunas_Fecha,tp.Producto_Nombre,tv.Vacunas_Precio,tm.Mascota_Nombre,
CASE WHEN tv.Vacunas_Cita = 1 THEN 'REALIZADO' WHEN tv.Vacunas_Cita = 2 THEN 'AGENDADO' ELSE 'REPROGRAMADO ' END AS Vacunas_Cita ,tv.Vacunas_Observacion
FROM tblVacunas tv LEFT JOIN tblMascota tm ON tv.Vacunas_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON tv.Vacunas_IdProducto = tp.Producto_Id
WHERE tv.Vacunas_Estado = 1;
END;
ELSEIF Pint_Condicion = 2 THEN
BEGIN
SELECT tv.Vacunas_Id,tm.Mascota_Id,tv.Vacunas_Fecha,tp.Producto_Nombre,tv.Vacunas_Precio,tm.Mascota_Nombre,
CASE WHEN tv.Vacunas_Cita = 1 THEN 'REALIZADO' WHEN tv.Vacunas_Cita = 2 THEN 'AGENDADO' ELSE 'REPROGRAMADO ' END AS Vacunas_Cita ,tv.Vacunas_Observacion
FROM tblVacunas tv LEFT JOIN tblMascota tm ON tv.Vacunas_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON tv.Vacunas_IdProducto = tp.Producto_Id
WHERE tv.Vacunas_Estado = 1 AND tm.Mascota_Id = Pint_IdMascota;
END;
END IF;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Eliminar_TblVacunas;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblVacunas(IN Pint_IdVacuna INT)
BEGIN
UPDATE tblVacunas SET Vacunas_Estado = 2 WHERE Vacunas_Id = Pint_IdVacuna;
END$$
DELIMITER ;

DROP PROCEDURE IF EXISTS SP_Actualizar_TblVacunas;
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblVacunas(IN Pint_IdVacuna INT,
                                            IN Pdat_Fecha DATE,
    								 		IN Pint_IdProducto INT,
                                            IN Pflo_Precio FLOAT,
    								 		IN Pint_IdMascota INT,
    								 		IN Pvchr_Observacion VARCHAR(1000),
    								 		IN Pint_Cita INT,                                      
                                            IN Pvchr_Usuario VARCHAR(50))
BEGIN
IF EXISTS(SELECT Vacunas_Id FROM tblVacunas WHERE Vacunas_Id = Pint_IdVacuna AND Vacunas_CitaEstado LIKE 'A') THEN
UPDATE tblVacunas SET 
Vacunas_Fecha=Pdat_Fecha,
Vacunas_IdProducto=Pint_IdProducto,
Vacunas_Precio=Pflo_Precio,
Vacunas_IdMascota=Pint_IdMascota,
Vacunas_Observacion=Pvchr_Observacion,
Vacunas_Cita=Pint_Cita,
Vacunas_FechaGrab_Edicion=NOW(),
Vacunas_UserGrab_Edicion=Pvchr_Usuario
WHERE Vacunas_Id = Pint_IdVacuna;
SELECT '1' AS CODIGO;
ELSE
SELECT '2' AS CODIGO;
END IF;
END$$
DELIMITER ;



DROP PROCEDURE IF EXISTS SP_Obtener_TblVacunas_All_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblVacunas_All_x_Id(IN Pint_IdVacuna INT)
BEGIN
SELECT tv.Vacunas_Id,tc.Cliente_Id,tc.Cliente_Dni,CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS Cliente_NombreCompleto,
tm.Mascota_Id,tm.Mascota_Nombre,tp.Producto_Id,tp.Producto_Nombre,tp.Producto_PrecioVenta,tv.Vacunas_Cita,tv.Vacunas_Fecha,tv.Vacunas_Observacion
FROM tblVacunas tv LEFT JOIN tblMascota tm ON tv.Vacunas_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON tv.Vacunas_IdProducto = tp.Producto_Id
LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id
WHERE tv.Vacunas_Estado = 1 AND tv.Vacunas_Id = Pint_IdVacuna;
END$$
DELIMITER ;








DROP PROCEDURE IF EXISTS SP_Registrar_TblBanio;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblBanio 
                                                   /* Variable Vacuna */
                                                   (IN Pint_IdTipoRegistro INT,
                                                   IN Pint_Idbanio INT,                                                   
                                                   IN Pdat_Fecha DATE,
                                                   IN Pint_IdProducto INT,
                                                   IN Pflo_Precio FLOAT,
                                                   IN Pint_IdMascota INT,
                                                   IN Pvchr_Observacion VARCHAR(100),
                                                   IN Pint_Cita INT,
                                                   IN Pvchr_Usuario VARCHAR(50),
                                                   /* Variable Venta */
                                                   IN Pint_VentaTipo INT,
                                                   -- IN Pint_TipoPago INT,
                                                   -- IN Pflo_Descuento FLOAT,
                                                   IN Pflo_Cantidad FLOAT,
                                                   -- IN Pflo_PrecioTotal FLOAT,
                                                   -- IN Pvchr_ObservacionVenta VARCHAR(100),
                                                   IN Pint_IdAlmacen INT)
BEGIN
DECLARE IdVentaTemporal INT;
DECLARE IdAlmacen INT;
IF Pint_IdTipoRegistro = 1 THEN
    IF Pint_Cita = 1 THEN /* Registrar */
    /*VALIDAR QUE EXISTE STOCK*/
    IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 THEN
    INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
                                  VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
                                  VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
                                  VALUES 
                                 (Pint_IdTipoRegistro, Pint_Idbanio, Pdat_Fecha, Pint_IdProducto, Pflo_Precio,
                                  Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
                                  Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
    /* OBTIENE ID DE VENTATEMPORAL */
    SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
    SELECT '1' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
    ELSE
    SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
    END IF;
    ELSEIF Pint_Cita = 2 THEN /* Agendar */
    /*INSERTA TBL VACUNAS*/
    INSERT INTO tblBanio
    (Banio_Fecha, Banio_IdProducto, Banio_IdMascota, Banio_Observacion, Banio_Cita, Banio_CitaEstado, Banio_Estado, Banio_FechaGra, Banio_UserGrab)
     VALUES
    (Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Observacion, Pint_Cita, 'A', 1, now(), Pvchr_Usuario);
    SELECT '1' AS Codigo,'0' AS CodigoVentaTmp;
    END IF; 
ELSEIF Pint_IdTipoRegistro = 2 THEN
    IF Pint_Cita = 1 THEN
    /*VALIDAR QUE EXISTE STOCK*/
    IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 THEN
    INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
                                  VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
                                  VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
                                  VALUES 
                                 (Pint_IdTipoRegistro, Pint_Idvacuna, Pdat_Fecha, Pint_IdProducto, Pflo_Precio,
                                  Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
                                  Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
    /* OBTIENE ID DE VENTATEMPORAL */
    SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
    SELECT '2' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
    ELSE
    SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
    END IF;
    ELSEIF Pint_Cita = 2 THEN
    /* cod 2 */
    SELECT '3' AS Codigo,'1' AS CodigoVenta;
    ELSEIF Pint_Cita = 3 THEN
    /* ACTUALIZA TBL VACUNA */
    UPDATE tblBanio SET 
    Banio_Fecha = Pdat_Fecha,
    Banio_Observacion = Pvchr_Observacion,
    Banio_Cita = 3,
    Banio_FechaGrab_Edicion = NOW(),
    Banio_UserGrab_Edicion = Pvchr_Usuario    
    WHERE Banio_Id = Pint_Idbanio;
    SELECT '2' AS Codigo,'0' AS CodigoVenta;
    END IF;
END IF;
END$$
DELIMITER ;



DROP PROCEDURE IF EXISTS SP_Obtener_TblBanio_All_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblBanio_All_x_Id(IN Pint_IdBanio INT)
BEGIN
SELECT tb.Banio_Id,tc.Cliente_Id,tc.Cliente_Dni,CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS Cliente_NombreCompleto,
tm.Mascota_Id,tm.Mascota_Nombre,tp.Producto_Id,tp.Producto_Nombre,tp.Producto_PrecioVenta,tb.Banio_Cita,tb.Banio_Fecha,tb.Banio_Observacion
FROM tblBanio tb LEFT JOIN tblMascota tm ON tb.Banio_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON tb.Banio_IdProducto = tp.Producto_Id
LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id
WHERE tb.Banio_Estado = 1 AND tb.Banio_Id = Pint_IdBanio;
END$$
DELIMITER ;



DROP PROCEDURE IF EXISTS SP_Obtener_TblBanio_All_x_Condicion;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblBanio_All_x_Condicion(IN Pint_Condicion INT, IN Pint_IdMascota INT)
BEGIN
IF Pint_Condicion = 1 THEN
BEGIN
SELECT tb.Banio_Id,tm.Mascota_Id,tb.Banio_Fecha,tp.Producto_Nombre,tb.Banio_Precio,tm.Mascota_Nombre,
CASE WHEN tb.Banio_Cita = 1 THEN 'REALIZADO' WHEN tb.Banio_Cita = 2 THEN 'AGENDADO' ELSE 'REPROGRAMADO ' END AS Banio_Cita ,tb.Banio_Observacion
FROM tblBanio tb LEFT JOIN tblMascota tm ON tb.Banio_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON tb.Banio_IdProducto = tp.Producto_Id
WHERE tb.Banio_Estado = 1;
END;
ELSEIF Pint_Condicion = 2 THEN
BEGIN
SELECT tb.Banio_Id,tm.Mascota_Id,tb.Banio_Fecha,tp.Producto_Nombre,tb.Banio_Precio,tm.Mascota_Nombre,
CASE WHEN tb.Banio_Cita = 1 THEN 'REALIZADO' WHEN tb.Banio_Cita = 2 THEN 'AGENDADO' ELSE 'REPROGRAMADO ' END AS Banio_Cita ,tb.Banio_Observacion
FROM tblBanio tb LEFT JOIN tblMascota tm ON tb.Banio_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON tb.Banio_IdProducto = tp.Producto_Id
WHERE tb.Banio_Estado = 1 AND tm.Mascota_Id = Pint_IdMascota;
END;
END IF;
END$$
DELIMITER ;



DROP PROCEDURE IF EXISTS SP_Actualizar_TblBanio;
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblBanio(IN Pint_IdBanio INT,
                                            IN Pdat_Fecha DATE,
    								 		IN Pint_IdProducto INT,
                                            IN Pflo_Precio FLOAT,
    								 		IN Pint_IdMascota INT,
    								 		IN Pvchr_Observacion VARCHAR(1000),
    								 		IN Pint_Cita INT,                                      
                                            IN Pvchr_Usuario VARCHAR(50))
BEGIN
IF EXISTS(SELECT Banio_Id FROM tblBanio WHERE Banio_Id = Pint_IdBanio AND Banio_CitaEstado LIKE 'A') THEN
UPDATE tblBanio SET 
Banio_Fecha=Pdat_Fecha,
Banio_IdProducto=Pint_IdProducto,
Banio_Precio=Pflo_Precio,
Banio_IdMascota=Pint_IdMascota,
Banio_Observacion=Pvchr_Observacion,
Banio_Cita=Pint_Cita,
Banio_FechaGrab_Edicion=NOW(),
Banio_UserGrab_Edicion=Pvchr_Usuario
WHERE Banio_Id = Pint_IdBanio;
SELECT '1' AS CODIGO;
ELSE
SELECT '2' AS CODIGO;
END IF;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Eliminar_TblBanio;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblBanio(IN Pint_IdBanio INT)
BEGIN
UPDATE tblBanio SET Banio_Estado = 2 WHERE Banio_Id = Pint_IdBanio;
END$$
DELIMITER ;

---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------

DROP PROCEDURE IF EXISTS SP_Registrar_TblDesparacitacion;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblDesparacitacion 
                                                   /* Variable Vacuna */
                                                   (IN Pint_IdTipoRegistro INT,
                                                   IN Pint_Iddesparacitacion INT,                                                   
                                                   IN Pdat_Fecha DATE,
                                                   IN Pint_IdProducto INT,
                                                   IN Pflo_Precio FLOAT,
                                                   IN Pint_IdMascota INT,
                                                   IN Pvchr_Observacion VARCHAR(100),
                                                   IN Pint_Cita INT,
                                                   IN Pvchr_Usuario VARCHAR(50),
                                                   /* Variable Venta */
                                                   IN Pint_VentaTipo INT,
                                                   -- IN Pint_TipoPago INT,
                                                   -- IN Pflo_Descuento FLOAT,
                                                   IN Pflo_Cantidad FLOAT,
                                                   -- IN Pflo_PrecioTotal FLOAT,
                                                   -- IN Pvchr_ObservacionVenta VARCHAR(100),
                                                   IN Pint_IdAlmacen INT)
BEGIN
DECLARE IdVentaTemporal INT;
DECLARE IdAlmacen INT;
IF Pint_IdTipoRegistro = 1 THEN
    IF Pint_Cita = 1 THEN /* Registrar */
    /*VALIDAR QUE EXISTE STOCK*/
    IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 THEN
    INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
                                  VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
                                  VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
                                  VALUES 
                                 (Pint_IdTipoRegistro, Pint_Iddesparacitacion, Pdat_Fecha, Pint_IdProducto, Pflo_Precio,
                                  Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
                                  Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
    /* OBTIENE ID DE VENTATEMPORAL */
    SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
    SELECT '1' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
    ELSE
    SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
    END IF;
    ELSEIF Pint_Cita = 2 THEN /* Agendar */
    /*INSERTA TBL VACUNAS*/
    INSERT INTO tblDesparacitacion
    (Desparacitacion_Fecha, Desparacitacion_IdProducto, Desparacitacion_IdMascota, Desparacitacion_Observacion, Desparacitacion_Cita, Desparacitacion_CitaEstado, Desparacitacion_Estado, Desparacitacion_FechaGra, Desparacitacion_UserGrab)
     VALUES
    (Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Observacion, Pint_Cita, 'A', 1, now(), Pvchr_Usuario);
    SELECT '1' AS Codigo,'0' AS CodigoVentaTmp;
    END IF; 
ELSEIF Pint_IdTipoRegistro = 2 THEN
    IF Pint_Cita = 1 THEN
    /*VALIDAR QUE EXISTE STOCK*/
    IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 THEN
    INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
                                  VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
                                  VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
                                  VALUES 
                                 (Pint_IdTipoRegistro, Pint_Idvacuna, Pdat_Fecha, Pint_IdProducto, Pflo_Precio,
                                  Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
                                  Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
    /* OBTIENE ID DE VENTATEMPORAL */
    SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
    SELECT '2' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
    ELSE
    SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
    END IF;
    ELSEIF Pint_Cita = 2 THEN
    /* cod 2 */
    SELECT '3' AS Codigo,'1' AS CodigoVenta;
    ELSEIF Pint_Cita = 3 THEN
    /* ACTUALIZA TBL VACUNA */
    UPDATE tblDesparacitacion SET 
    Desparacitacion_Fecha = Pdat_Fecha,
    Desparacitacion_Observacion = Pvchr_Observacion,
    Desparacitacion_Cita = 3,
    Desparacitacion_FechaGrab_Edicion = NOW(),
    Desparacitacion_UserGrab_Edicion = Pvchr_Usuario    
    WHERE Desparacitacion_Id = Pint_Iddesparacitacion;
    SELECT '2' AS Codigo,'0' AS CodigoVenta;
    END IF;
END IF;
END$$
DELIMITER ;

DROP PROCEDURE IF EXISTS SP_Obtener_TblDesparacitacion_All_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblDesparacitacion_All_x_Id(IN Pint_IdDesparacitacion INT)
BEGIN
SELECT td.Desparacitacion_Id,tc.Cliente_Id,tc.Cliente_Dni,CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS Cliente_NombreCompleto,
tm.Mascota_Id,tm.Mascota_Nombre,tp.Producto_Id,tp.Producto_Nombre,tp.Producto_PrecioVenta,td.Desparacitacion_Cita,td.Desparacitacion_Fecha,td.Desparacitacion_Observacion
FROM tblDesparacitacion td LEFT JOIN tblMascota tm ON td.Desparacitacion_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON td.Desparacitacion_IdProducto = tp.Producto_Id
LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id
WHERE td.Desparacitacion_Estado = 1 AND td.Desparacitacion_Id = Pint_IdDesparacitacion;
END$$
DELIMITER ;

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


DROP PROCEDURE IF EXISTS SP_Eliminar_TblDesparacitacion;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblDesparacitacion (IN Pint_IdDesparacitacion INT)
BEGIN
UPDATE tblDesparacitacion SET Desparacitacion_Estado = 2 WHERE Desparacitacion_Id = Pint_IdDesparacitacion;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_TblDesparacitacion_All_x_Condicion;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblDesparacitacion_All_x_Condicion(IN Pint_Condicion INT, IN Pint_IdMascota INT)
BEGIN
IF Pint_Condicion = 1 THEN
BEGIN
SELECT td.Desparacitacion_Id,tm.Mascota_Id,td.Desparacitacion_Fecha,tp.Producto_Nombre,td.Desparacitacion_Precio,tm.Mascota_Nombre,
CASE WHEN td.Desparacitacion_Cita = 1 THEN 'REALIZADO' WHEN td.Desparacitacion_Cita = 2 THEN 'AGENDADO' ELSE 'REPROGRAMADO ' END AS Desparacitacion_Cita ,td.Desparacitacion_Observacion
FROM tblDesparacitacion td LEFT JOIN tblMascota tm ON td.Desparacitacion_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON td.Desparacitacion_IdProducto = tp.Producto_Id
WHERE td.Desparacitacion_Estado = 1;
END;
ELSEIF Pint_Condicion = 2 THEN
BEGIN
SELECT td.Desparacitacion_Id,tm.Mascota_Id,td.Desparacitacion_Fecha,tp.Producto_Nombre,td.Desparacitacion_Precio,tm.Mascota_Nombre,
CASE WHEN td.Desparacitacion_Cita = 1 THEN 'REALIZADO' WHEN td.Desparacitacion_Cita = 2 THEN 'AGENDADO' ELSE 'REPROGRAMADO ' END AS Desparacitacion_Cita ,td.Desparacitacion_Observacion
FROM tblDesparacitacion td LEFT JOIN tblMascota tm ON td.Desparacitacion_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON td.Desparacitacion_IdProducto = tp.Producto_Id
WHERE td.Desparacitacion_Estado  = 1 AND tm.Mascota_Id = Pint_IdMascota;
END;
END IF;
END$$
DELIMITER ;


------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------


-- 0 NO EXISTE -- [ >0 ] EXISTE
/*
DROP PROCEDURE IF EXISTS SP_Registrar_TblCompraDetalletmp_tblCompratmp;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblCompraDetalletmp_tblCompratmp(IN Pint_IdCompraTmp INT,
                                                  IN Pint_IdProducto INT,
                                                  IN Pflo_Precio FLOAT,
                                                  IN Pflo_Cantidad FLOAT,                                                    
                                                  IN Pvchr_Usuario VARCHAR(50),
                                                  IN Pint_Sede INT)
BEGIN
DECLARE IdCompraTmp INT;
DECLARE CantidadProducto FLOAT;
DECLARE IdAlmacen INT;
SET CantidadProducto =  (SELECT CASE WHEN Almacen_Cantidad IS NULL THEN 0 ELSE Almacen_Cantidad END AS Almacen_Cantidad FROM tblAlmacen 
                      WHERE Almacen_IdSede = Pint_Sede AND Almacen_IdProducto = Pint_IdProducto AND Almacen_Estado = 1);
IF CantidadProducto >=  Pflo_Cantidad THEN
    IF Pint_IdCompraTmp = 0 THEN
    INSERT INTO tblCompra_tmp(Compra_tmp_FechaGra, Compra_tmp_UserGrab) VALUES (NOW(),Pvchr_Usuario);
    SET IdCompraTmp = (SELECT MAX(Compra_tmp_Id) FROM tblCompra_tmp);
    INSERT INTO tblCompraDetalle_tmp
    (CompraDetalle_tmp_CompraId, CompraDetalle_tmp_IdProducto, CompraDetalle_tmp_Precio, CompraDetalle_tmp_Cantidad, CompraDetalle_tmp_FechaGra, CompraDetalle_tmp_UserGrab)
    VALUES (IdCompraTmp,Pint_IdProducto,Pflo_Precio,Pflo_Cantidad,NOW(),Pvchr_Usuario);
    SELECT IdCompraTmp AS CODIGO,'1' AS ESTADO;
    ELSE
    INSERT INTO tblCompraDetalle_tmp
    (CompraDetalle_tmp_CompraId, CompraDetalle_tmp_IdProducto, CompraDetalle_tmp_Precio, CompraDetalle_tmp_Cantidad, CompraDetalle_tmp_FechaGra, CompraDetalle_tmp_UserGrab)
    VALUES (Pint_IdCompraTmp,Pint_IdProducto,Pflo_Precio,Pflo_Cantidad,NOW(),Pvchr_Usuario);
    SELECT Pint_IdCompraTmp AS CODIGO,'2' AS ESTADO;
    END IF;
    SET IdAlmacen = (SELECT Almacen_Id FROM tblAlmacen WHERE Almacen_IdSede = Pint_Sede AND Almacen_IdProducto = Pint_IdProducto AND Almacen_Estado = 1 );
    UPDATE tblAlmacen SET Almacen_Cantidad = Almacen_Cantidad - Pflo_Cantidad WHERE Almacen_Id = IdAlmacen;
ELSE
	SELECT '0' AS CODIGO,'2' AS ESTADO;
END IF;
END$$
DELIMITER ;
*/
DROP PROCEDURE IF EXISTS SP_Registrar_TblCompraDetalletmp_tblCompratmp;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblCompraDetalletmp_tblCompratmp(IN Pint_IdCompraTmp INT,
                                                  IN Pint_IdProducto INT,
                                                  IN Pflo_Precio FLOAT,
                                                  IN Pflo_Cantidad FLOAT,                                                    
                                                  IN Pvchr_Usuario VARCHAR(50),
                                                  IN Pint_Sede INT)
BEGIN
DECLARE IdCompraTmp INT;
DECLARE CantidadProducto FLOAT;
DECLARE IdAlmacen INT;
-- SET CantidadProducto =  (SELECT CASE WHEN Almacen_Cantidad IS NULL THEN 0 ELSE Almacen_Cantidad END AS Almacen_Cantidad FROM tblAlmacen 
--                      WHERE Almacen_IdSede = Pint_Sede AND Almacen_IdProducto = Pint_IdProducto AND Almacen_Estado = 1);
-- IF CantidadProducto >=  Pflo_Cantidad THEN
    IF Pint_IdCompraTmp = 0 THEN
        INSERT INTO tblCompra_tmp(Compra_tmp_FechaGra, Compra_tmp_UserGrab) VALUES (NOW(),Pvchr_Usuario);
        SET IdCompraTmp = (SELECT MAX(Compra_tmp_Id) FROM tblCompra_tmp);
        INSERT INTO tblCompraDetalle_tmp
        (CompraDetalle_tmp_CompraId, CompraDetalle_tmp_IdProducto, CompraDetalle_tmp_Precio, CompraDetalle_tmp_Cantidad, CompraDetalle_tmp_FechaGra, CompraDetalle_tmp_UserGrab)
        VALUES (IdCompraTmp,Pint_IdProducto,Pflo_Precio,Pflo_Cantidad,NOW(),Pvchr_Usuario);
        SELECT IdCompraTmp AS CODIGO,'1' AS ESTADO;
    ELSE
        IF EXISTS(SELECT CompraDetalle_tmp_Id FROM tblCompraDetalle_tmp WHERE CompraDetalle_tmp_CompraId = Pint_IdCompraTmp AND CompraDetalle_tmp_IdProducto = Pint_IdProducto) THEN
            SELECT Pint_IdCompraTmp AS CODIGO, '0' AS ESTADO;
        ELSE       
            INSERT INTO tblCompraDetalle_tmp
            (CompraDetalle_tmp_CompraId, CompraDetalle_tmp_IdProducto, CompraDetalle_tmp_Precio, CompraDetalle_tmp_Cantidad, CompraDetalle_tmp_FechaGra, CompraDetalle_tmp_UserGrab)
            VALUES (Pint_IdCompraTmp,Pint_IdProducto,Pflo_Precio,Pflo_Cantidad,NOW(),Pvchr_Usuario);
            SELECT Pint_IdCompraTmp AS CODIGO,'2' AS ESTADO;
        END IF;
    END IF;

--    SET IdAlmacen = (SELECT Almacen_Id FROM tblAlmacen WHERE Almacen_IdSede = Pint_Sede AND Almacen_IdProducto = Pint_IdProducto AND Almacen_Estado = 1 );
--    UPDATE tblAlmacen SET Almacen_Cantidad = Almacen_Cantidad - Pflo_Cantidad WHERE Almacen_Id = IdAlmacen;
-- ELSE
-- SELECT '0' AS CODIGO,'2' AS ESTADO;
-- END IF;
	END$$
DELIMITER ;
























DROP PROCEDURE IF EXISTS SP_Obtener_TblProducto_x_Nombre;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblProducto_x_Nombre (IN Pvchr_Nombre VARCHAR(50),
                                                  IN Pint_Sede INT)
BEGIN
/*
SELECT tp.Producto_Id,tp.Producto_Nombre,tp.Producto_PrecioVenta,CASE WHEN ta.Almacen_Cantidad IS NULL THEN '0' ELSE ta.Almacen_Cantidad END Almacen_Cantidad 
FROM tblProducto tp LEFT JOIN tblAlmacen ta ON tp.Producto_Id = ta.Almacen_IdProducto
WHERE ta.Almacen_IdSede = Pint_Sede AND tp.Producto_Nombre LIKE Pvchr_Nombre;
*/
SELECT tp.Producto_Id,tp.Producto_Nombre,tp.Producto_PrecioVenta
FROM tblProducto tp WHERE Producto_Estado = 1
END$$

DROP PROCEDURE IF EXISTS SP_Obtener_TblSede_all;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblSede_all()
BEGIN
SELECT Sede_Id,Sede_Nombre FROM tblSede WHERE Sede_Estado = 1;
END$$
DELIMITER ;



DROP PROCEDURE IF EXISTS SP_Obtener_TblCompraDetalle_tmp_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblCompraDetalle_tmp_x_Id (IN IdCompreTmp INT)
BEGIN
SET @numero=0;
SELECT @numero:=@numero+1 AS Orden,tct.CompraDetalle_tmp_Id,tp.Producto_Nombre,tct.CompraDetalle_tmp_Precio,tct.CompraDetalle_tmp_Cantidad,
ROUND(tct.CompraDetalle_tmp_Precio * tct.CompraDetalle_tmp_Cantidad,2) AS PrecioTotal FROM tblCompraDetalle_tmp tct LEFT JOIN tblProducto tp
ON tct.CompraDetalle_tmp_IdProducto = tp.Producto_Id
WHERE tct.CompraDetalle_tmp_CompraId = IdCompreTmp;
END$$




---
----



DROP PROCEDURE IF EXISTS SP_Validar_Stock_TblAlmacen_x_IdProducto;
DELIMITER $$
CREATE PROCEDURE SP_Validar_Stock_TblAlmacen_x_IdProducto (IN Pint_Producto INT,
                                                           IN Pint_Sede INT,
                                                  	 	   IN Pflo_Cantidad FLOAT)
BEGIN
DECLARE Cantidad FLOAT;
SET Cantidad = (SELECT CASE WHEN Almacen_Cantidad IS NULL THEN 0 ELSE Almacen_Cantidad END AS Almacen_Cantidad 
FROM tblAlmacen
WHERE Almacen_IdSede = Pint_Sede AND Almacen_IdProducto = Pint_Producto AND Almacen_Estado = 1);
IF Cantidad >=  Pflo_Cantidad THEN
SELECT '1' AS CODIGO;
ELSE
SELECT '0' AS CODIGO;
END IF;
END$$

DROP PROCEDURE IF EXISTS SP_Validar_Compra_TblCompraDetalleTmp;
DELIMITER $$
CREATE PROCEDURE SP_Validar_Compra_TblCompraDetalleTmp (IN Pint_IdCompraTmp INT,
                                                        IN Pint_IdProducto INT)
BEGIN
IF EXISTS(SELECT CompraDetalle_tmp_Id FROM tblCompraDetalle_tmp WHERE CompraDetalle_tmp_CompraId = Pint_IdCompraTmp AND CompraDetalle_tmp_IdProducto = Pint_IdProducto) THEN
SELECT '0' AS CODIGO;
ELSE
SELECT '1' AS CODIGO;
END IF;
END$$





-- TEST AVANCE DATA TRABAJADA


DECLARE Cantidad FLOAT;
SET Cantidad = (
SELECT CASE WHEN Almacen_Cantidad IS NULL THEN 0 ELSE Almacen_Cantidad END AS Almacen_Cantidad
FROM tblAlmacen
WHERE Almacen_IdSede = Pint_Sede AND Almacen_IdProducto = Pint_Producto AND Almacen_Estado = 1);
IF Cantidad >=  Pflo_Cantidad THEN
SELECT '1' AS CODIGO;
ELSE
SELECT '0' AS CODIGO;
END IF;

---



DROP PROCEDURE IF EXISTS SP_Registrar_TblCompra_TblCompraDetalle;
DELIMITER $$

CREATE PROCEDURE SP_Registrar_TblCompra_TblCompraDetalle(IN Pint_Condicion INT,
                                                         IN Pdat_Fecha DATE,
                                                         IN Pvchr_Guia VARCHAR(100),
                                                         -- IN Pflo_PrecioTotal FLOAT,
                                                         IN Pvchr_Proveedor VARCHAR(200),
                                                         IN Pvchr_Observacion VARCHAR(1000),
                                                         IN Pvchr_Usuario VARCHAR(50),
                                                         IN Pint_Sede INT,
                                                         IN Pint_IdcompraTmp INT)
BEGIN
   DECLARE Producto FLOAT DEFAULT 0;
   DECLARE Cantidad FLOAT DEFAULT 0;
   DECLARE Fin INT DEFAULT FALSE;
   
   DECLARE PrecioT FLOAT DEFAULT 0;
   DECLARE CantidadT FLOAT DEFAULT 0;  

   DECLARE UltimoIdCompra INT;  
   
   DEClARE curC CURSOR FOR SELECT CompraDetalle_tmp_IdProducto,CompraDetalle_tmp_Cantidad FROM tblCompraDetalle_tmp WHERE CompraDetalle_tmp_CompraId = Pint_IdcompraTmp;
   DECLARE CONTINUE HANDLER FOR NOT FOUND SET Fin = 1;
   
   OPEN curC;
   GetCompraDet: LOOP  
       FETCH curC INTO Producto,Cantidad;
       IF Fin = 1 THEN
           LEAVE GetCompraDet;
       END IF;
   
   IF EXISTS(SELECT * FROM tblAlmacen WHERE Almacen_IdProducto = Producto AND Almacen_IdSede = Pint_Sede )THEN
   UPDATE tblAlmacen SET Almacen_Cantidad = Almacen_Cantidad + Cantidad, Almacen_FechaGrab_Edicion = NOW(), Almacen_UserGrab_Edicion = Pvchr_Usuario  WHERE Almacen_IdProducto = Producto AND Almacen_IdSede = Pint_Sede;
   ELSE
   INSERT INTO tblAlmacen
(Almacen_IdKardex, Almacen_IdProducto, Almacen_Cantidad, Almacen_IdSede, Almacen_Observacion, Almacen_Estado, Almacen_FechaGra, Almacen_UserGrab)
   VALUES (0,Producto,Cantidad,Pint_Sede,'NUEVO PRODUCTO EN ALMACEN',1,NOW(),Pvchr_Usuario);
   END IF;
   
   -- select Producto,Cantidad,PrecioT;
   
   END LOOP GetCompraDet;
   CLOSE curC;
   
   SET PrecioT = (SELECT ROUND(SUM(CompraDetalle_tmp_Precio * CompraDetalle_tmp_Cantidad),2)  FROM tblCompraDetalle_tmp WHERE CompraDetalle_tmp_CompraId = Pint_IdcompraTmp);
   SET CantidadT = (SELECT SUM(CompraDetalle_tmp_Cantidad) FROM tblCompraDetalle_tmp WHERE CompraDetalle_tmp_CompraId = Pint_IdcompraTmp);    
   
   INSERT INTO tblCompra
(Compra_IdKardex, Compra_Fecha, Compra_Guia, Compra_PrecioTotal,Compra_Cantidad, Compra_Proveedor, Compra_Observacion, Compra_Estado, Compra_FechaGra, Compra_UserGrab)
VALUES (0,Pdat_Fecha,Pvchr_Guia,PrecioT,CantidadT,Pvchr_Proveedor,Pvchr_Observacion,1,NOW(),Pvchr_Usuario);    
   
   SET UltimoIdCompra = (SELECT MAX(Compra_Id) FROM tblCompra);

INSERT INTO tblCompraDetalle
(CompraDetalle_CompraId, CompraDetalle_IdProducto, CompraDetalle_Precio, CompraDetalle_Cantidad, CompraDetalle_Estado, CompraDetalle_FechaGra, CompraDetalle_UserGrab)
SELECT UltimoIdCompra,CompraDetalle_tmp_IdProducto,CompraDetalle_tmp_Precio,CompraDetalle_tmp_Cantidad,1,CompraDetalle_tmp_FechaGra,CompraDetalle_tmp_UserGrab
FROM tblCompraDetalle_tmp WHERE CompraDetalle_tmp_CompraId = Pint_IdcompraTmp;

   SELECT '1' AS CODIGO;
      
END$$

DELIMITER ;





DROP PROCEDURE IF EXISTS SP_Eliminar_TblCompraDetalle_tmp;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblCompraDetalle_tmp(IN Pint_IdCompraDetalleTmp INT)
BEGIN
DELETE FROM tblCompraDetalle_tmp WHERE CompraDetalle_tmp_Id = Pint_IdCompraDetalleTmp;
END$$
DELIMITER ;


--- revisar
DROP PROCEDURE IF EXISTS SP_Eliminar_TblCompraDetalletmp_tblCompratmp;
DELIMITER $$

CREATE PROCEDURE SP_Eliminar_TblCompraDetalletmp_tblCompratmp (IN Pint_Condicion INT,
                                                          		IN Pint_IdcompraTmp INT)
                                                          
BEGIN
	DELETE FROM tblCompra_tmp WHERE Compra_tmp_Id  = Pint_IdcompraTmp;
	DELETE FROM tblCompraDetalle_tmp WHERE CompraDetalle_tmp_CompraId = Pint_IdcompraTmp;   
END$$

DELIMITER ;



DROP PROCEDURE IF EXISTS SP_Obtener_TblCompra_All_x_Condicion;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblCompra_All_x_Condicion(IN Pint_Condicion INT, IN Pint_IdCompra INT)
BEGIN
IF Pint_Condicion = 1 THEN
BEGIN
SELECT Compra_Id,Compra_Fecha,Compra_Guia,Compra_Proveedor,Compra_PrecioTotal,Compra_Cantidad,Compra_Observacion,Compra_Estado,Compra_UserGrab,
Compra_FechaGra FROM tblCompra WHERE Compra_Estado = 1;
END;
ELSEIF Pint_Condicion = 2 THEN
BEGIN
SELECT 
Compra_Id,Compra_Fecha,Compra_Guia,Compra_Proveedor,Compra_PrecioTotal,Compra_Cantidad,Compra_Observacion,Compra_Estado,Compra_UserGrab,
Compra_FechaGra FROM tblCompra WHERE Compra_Id = Pint_IdCompra AND Compra_Estado = 1;
END;
END IF;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Actualizar_TblCompra;
-- ACTUALIZAR

DROP PROCEDURE IF EXISTS SP_Eliminar_TblCompra;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblCompra(IN Pint_IdCompra INT)
BEGIN
UPDATE tblCompra SET Compra_Estado = 2 WHERE Compra_Id = Pint_IdCompra;
UPDATE tblCompraDetalle SET CompraDetalle_Estado = 2 WHERE CompraDetalle_CompraId = Pint_IdCompra;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_TblCompraDetalle_x_IdCompra;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblCompraDetalle_x_IdCompra(IN Pint_IdCompra INT)
BEGIN
SET @numero=0;
SELECT @numero:=@numero+1 AS Orden,
tp.Producto_Nombre,tc.CompraDetalle_Precio,tc.CompraDetalle_Cantidad,
ROUND(tc.CompraDetalle_Precio *tc.CompraDetalle_Cantidad,2) AS TotalCompra FROM tblCompraDetalle tc LEFT JOIN tblProducto tp
ON tc.CompraDetalle_IdProducto = tp.Producto_Id WHERE CompraDetalle_CompraId = Pint_IdCompra;
END$$
DELIMITER ;



DROP PROCEDURE IF EXISTS Cargas_Masivas_Sicoper;
DELIMITER $$
CREATE PROCEDURE Cargas_Masivas_Sicoper (IN Pint_Condicion INT)
BEGIN
    DECLARE Cant INT;
    SET Cant = (SELECT COUNT(*) FROM tblsicoper_temporal_cm);
    IF Pint_Condicion = 1 THEN
        IF Cant > 0 THEN
        INSERT INTO tblsicoper (item, id_personal, fecha, hora, cac, nombres, estado, tipobus, idincidencia, incidencia, categoria, subcategoria, obsv, mintarde, usuario, fecgrab, itemsicorec, Link_Img, hora_inicio, hora_fin, descripcion_servicio) 
        SELECT NULL,tc.id_personal, tcm.fecha, '12:00', tcm.cac, CONCAT(tp.Apellido,' ',tp.Nombre), 'C', UPPER(tc.t_bus), 5,tcm.INCIDENCIA,'','',tcm.OBSERV,0,'DCCAHUAY',(ADDDATE(NOW(), INTERVAL 2 HOUR)),0,'','00:00','00:00',''  FROM tblsicoper_temporal_cm tcm LEFT JOIN tblCAC tc ON tcm.CAC = tc.CAC LEFT JOIN tblPersonal tp ON tp.id = tc.id_personal;
        END IF;
    ELSEIF Pint_Condicion = 0 THEN
        TRUNCATE TABLE tblsicoper;
    END IF;
END$$
DELIMITER ;

/******************************* 170220 *************/


DROP PROCEDURE IF EXISTS SP_Obtener_TblTipoProducto_all_VariasTbl;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblTipoProducto_all_VariasTbl()
BEGIN
SELECT Producto_Id,Producto_Nombre,ttp.TipoProducto_Nombre,tc.Categoria_Nombre,tu.UM_NombreCorto,tp.Producto_Stock,tp.Producto_PrecioCompra,
 tp.Producto_PrecioVenta
 FROM tblProducto tp 
 LEFT JOIN tblTipoProducto ttp ON tp.Producto_IdTipoPro = ttp.TipoProducto_Id
 LEFT JOIN tblCategoria tc ON tp.Producto_IdTipoCat = tc.Categoria_Id
 LEft JOIN tblUM tu ON tp.Producto_IdTipoUM = tu.UM_Id
 WHERE  Producto_Estado = 1;
END$$
DELIMITER ;




CREATE DEFINER=`gavet`@`localhost` PROCEDURE `SP_Registrar_TblAtencion`(IN Pint_IdTipoRegistro INT,
                                                 IN Pint_IdAtencion INT,                                                  
                                                 IN Pdat_Fecha DATE,
                                                 IN Pint_IdMascota INT,
                                                 IN Pvchr_Sintomas VARCHAR(3000),                                                
                                                 IN Pvchr_Atencion_T VARCHAR(100),
                                                 IN Pvchr_Atencion_FC VARCHAR(100),
                                                 IN Pvchr_Atencion_FR VARCHAR(100),                                                  
                                                 IN Pvchr_Atencion_sc_Des VARCHAR(100),
                                                 IN Pvchr_Atencion_sc_Muc VARCHAR(100),
                                                 IN Pvchr_Atencion_sc_TLLC VARCHAR(100),
                                                 IN Pvchr_Atencion_sc_Vom VARCHAR(100),
                                                 IN Pvchr_Atencion_sc_Dia VARCHAR(100),
                                                 IN Pvchr_Atencion_sc_Gan VARCHAR(100),
                                                 IN Pvchr_Atencion_sc_Pes VARCHAR(50),                                                  
                                                 IN Pvchr_Atencion_dx_Pre VARCHAR(150),
                                                 IN Pvchr_Atencion_dx_Def VARCHAR(150),
                                                 IN Pvchr_Atencion_dx_Sol VARCHAR(150),
                                                 IN Pvchr_Atencion_tr_Des VARCHAR(150),
                                                 IN Pvchr_Atencion_tr_Obs VARCHAR(150),
                                                 IN Pflo_Atencion_tr_Pre FLOAT,
                                                 IN Pint_Documento INT,
                                                 IN Pint_Cita INT,
                                                 IN Pint_CitaEstado INT,
                                                 IN Pint_Estado INT,                                                
                                                 IN Pvchr_Usuario VARCHAR(100),
                                                 IN Pint_VentaTipo INT,
                                                 IN Pint_IdAlmacen INT)
BEGIN
DECLARE IdVentaTemporal INT;
DECLARE IdAlmacen INT;
DECLARE Pint_IdProducto INT;
DECLARE Pflo_Cantidad FLOAT;
SET Pint_IdProducto = 4;
SET Pflo_Cantidad = 1;
IF Pint_IdTipoRegistro = 1 THEN

   INSERT INTO tblAtencion
   (Atencion_IdVenta, Atencion_Fecha, Atencion_IdMascota, Atencion_Sintomas,
    Atencion_T, Atencion_FC, Atencion_FR,
    Atencion_sc_Deshidratacion, Atencion_sc_Mucosas, Atencion_sc_TLLC, Atencion_sc_Vomitos, Atencion_sc_Diarreas, Atencion_sc_Ganglios, Atencion_sc_Peso,
    Atencion_dx_Presuntivo, Atencion_dx_Definitivo, Atencion_dx_Solicitado,
    Atencion_tr_Descripcion, Atencion_tr_Observacion, Atencion_tr_Precio,
    Atencion_IdDocumento, Atencion_Cita, Atencion_CitaEstado, Atencion_Estado, Atencion_FechaGra, Atencion_UserGrab)
   VALUES
   (Pint_IdAtencion, Pdat_Fecha, Pint_IdMascota, Pvchr_Sintomas,
    Pvchr_Atencion_T, Pvchr_Atencion_FC, Pvchr_Atencion_FR,
    Pvchr_Atencion_sc_Des, Pvchr_Atencion_sc_Muc, Pvchr_Atencion_sc_TLLC, Pvchr_Atencion_sc_Vom, Pvchr_Atencion_sc_Dia, Pvchr_Atencion_sc_Gan, Pvchr_Atencion_sc_Pes,
    Pvchr_Atencion_dx_Pre, Pvchr_Atencion_dx_Def, Pvchr_Atencion_dx_Sol,
    Pvchr_Atencion_tr_Des, Pvchr_Atencion_tr_Obs, Pflo_Atencion_tr_Pre,
    Pint_Documento, Pint_Cita, Pint_CitaEstado, Pint_Estado,NOW(), Pvchr_Usuario);

  IF Pint_Cita = 1 THEN /* Registrar */
  /*VALIDAR QUE EXISTE STOCK*/
  IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 THEN
 
  INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
                                VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
                                VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
                                VALUES
                               (Pint_IdTipoRegistro, Pint_IdAtencion, Pdat_Fecha, Pint_IdProducto, Pflo_Atencion_tr_Pre,
                                Pint_IdMascota, Pvchr_Atencion_tr_Obs, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
                                Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
  /* OBTIENE ID DE VENTATEMPORAL */
  SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
  SELECT '1001' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
  ELSE
  SELECT '3001' AS Codigo,'0' AS CodigoVentaTmp;
  END IF;
  ELSEIF Pint_Cita = 2 THEN /* Agendar */
  /*INSERTA TBL ATENCION*/

/*    INSERT INTO tblAtencion
   (Atencion_IdVenta, Atencion_Fecha, Atencion_IdMascota, Atencion_Sintomas,
    Atencion_T, Atencion_FC, Atencion_FR,
    Atencion_sc_Deshidratacion, Atencion_sc_Mucosas, Atencion_sc_TLLC, Atencion_sc_Vomitos, Atencion_sc_Diarreas, Atencion_sc_Ganglios, Atencion_sc_Peso,
    Atencion_dx_Presuntivo, Atencion_dx_Definitivo, Atencion_dx_Solicitado,
    Atencion_tr_Descripcion, Atencion_tr_Observacion, Atencion_tr_Precio,
    Atencion_IdDocumento, Atencion_Cita, Atencion_CitaEstado, Atencion_Estado, Atencion_FechaGra, Atencion_UserGrab)
   VALUES
   (Pint_IdAtencion, Pdat_Fecha, Pint_IdMascota, Pvchr_Sintomas,
    Pvchr_Atencion_T, Pvchr_Atencion_FC, Pvchr_Atencion_FR,
    Pvchr_Atencion_sc_Des, Pvchr_Atencion_sc_Muc, Pvchr_Atencion_sc_TLLC, Pvchr_Atencion_sc_Vom, Pvchr_Atencion_sc_Dia, Pvchr_Atencion_sc_Gan, Pvchr_Atencion_sc_Pes,
    Pvchr_Atencion_dx_Pre, Pvchr_Atencion_dx_Def, Pvchr_Atencion_dx_Sol,
    Pvchr_Atencion_tr_Des, Pvchr_Atencion_tr_Obs, Pflo_Atencion_tr_Pre,
    Pint_Documento, Pint_Cita, Pint_CitaEstado, Pint_Estado,NOW(), Pvchr_Usuario);*/

  SELECT '1' AS Codigo,'0' AS CodigoVentaTmp;
  END IF;
ELSEIF Pint_IdTipoRegistro = 2 THEN
  IF Pint_Cita = 1 THEN
  /*VALIDAR QUE EXISTE STOCK*/
  IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 THEN
  INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
                                VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
                                VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
                                VALUES
                               (Pint_IdTipoRegistro, Pint_IdAtencion, Pdat_Fecha, Pint_IdProducto, Pflo_Atencion_tr_Pre,
                                Pint_IdMascota, Pvchr_Atencion_tr_Obs, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
                                Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
  /* OBTIENE ID DE VENTATEMPORAL */
  SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
  SELECT '2' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
  ELSE
  SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
  END IF;
  ELSEIF Pint_Cita = 2 THEN
  /* cod 2 */
  SELECT '3' AS Codigo,'1' AS CodigoVenta;
  ELSEIF Pint_Cita = 3 THEN
  /* ACTUALIZA TBL ATENCION */
  /*
  UPDATE tblAtencion SET
  Vacunas_Fecha = Pdat_Fecha,
  Vacunas_Observacion = Pvchr_Observacion,
  Vacunas_Cita = 3,
  Vacunas_FechaGrab_Edicion = NOW(),
  Vacunas_UserGrab_Edicion = Pvchr_Usuario    
  WHERE Vacunas_Id = Pint_Idvacuna;
  */
  SELECT '2' AS Codigo,'0' AS CodigoVenta;
 
  END IF;
END IF;
END


------------ 220220

-- SELECT * FROM tblAtencion
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblAtencion_All_x_Condicion (IN Pint_Condicion INT, IN Pint_IdMascota INT)
BEGIN
IF Pint_Condicion = 1 THEN
BEGIN
SELECT ta.Atencion_Id,tm.Mascota_Id,ta.Atencion_Fecha,tp.Producto_Nombre,tm.Mascota_Nombre,ta.Atencion_tr_Precio,
CASE WHEN ta.Atencion_CitaEstado = 1 THEN 'REALIZADO' WHEN ta.Atencion_CitaEstado = 2 THEN 'AGENDADO' ELSE 'REPROGRAMADO ' END AS Atencion_CitaEstado,
ta.Atencion_tr_Observacion FROM tblAtencion ta LEFT JOIN tblMascota tm ON ta.Atencion_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON ta.Atencion_IdProducto = tp.Producto_Id
WHERE ta.Atencion_Estado = 1;
END;
ELSEIF Pint_Condicion = 2 THEN
BEGIN
SELECT ta.Atencion_Id,tm.Mascota_Id,ta.Atencion_Fecha,tp.Producto_Nombre,tm.Mascota_Nombre,ta.Atencion_tr_Precio,
CASE WHEN ta.Atencion_CitaEstado = 1 THEN 'REALIZADO' WHEN ta.Atencion_CitaEstado = 2 THEN 'AGENDADO' ELSE 'REPROGRAMADO ' END AS Atencion_CitaEstado,
ta.Atencion_tr_Observacion FROM tblAtencion ta LEFT JOIN tblMascota tm ON ta.Atencion_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON ta.Atencion_IdProducto = tp.Producto_Id
WHERE ta.Atencion_Estado = 1 AND tm.Mascota_Id = Pint_IdMascota;
END;
END IF;
END$$
DELIMITER ;
-- SP_Obtener_TblAtencion_All_x_Condicion


DROP PROCEDURE IF EXISTS SP_Actualizar_TblAtencion
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblAtencion(IN Pint_IdAtencion INT,                                           
                                                 IN Pdat_Fecha DATE,
                                            	 IN Pint_IdProducto INT,
                                                 IN Pint_IdMascota INT,
                                                 IN Pvchr_Sintomas VARCHAR(3000),                                                
                                                 IN Pvchr_Atencion_T VARCHAR(100),
                                                 IN Pvchr_Atencion_FC VARCHAR(100),
                                                 IN Pvchr_Atencion_FR VARCHAR(100),                                                  
                                                 IN Pvchr_Atencion_sc_Des VARCHAR(100),
                                                 IN Pvchr_Atencion_sc_Muc VARCHAR(100),
                                                 IN Pvchr_Atencion_sc_TLLC VARCHAR(100),
                                                 IN Pvchr_Atencion_sc_Vom VARCHAR(100),
                                                 IN Pvchr_Atencion_sc_Dia VARCHAR(100),
                                                 IN Pvchr_Atencion_sc_Gan VARCHAR(100),
                                                 IN Pvchr_Atencion_sc_Pes VARCHAR(50),                                                  
                                                 IN Pvchr_Atencion_dx_Pre VARCHAR(150),
                                                 IN Pvchr_Atencion_dx_Def VARCHAR(150),
                                                 IN Pvchr_Atencion_dx_Sol VARCHAR(150),
                                                 IN Pvchr_Atencion_tr_Des VARCHAR(150),
                                                 IN Pvchr_Atencion_tr_Obs VARCHAR(150),
                                                 IN Pflo_Atencion_tr_Pre FLOAT,
                                                 IN Pint_Documento INT,
                                                 IN Pint_Cita INT,
                                                 IN Pchr_CitaEstado CHAR(1),
                                                 IN Pint_Estado INT,                                                
                                                 IN Pvchr_Usuario VARCHAR(100))
BEGIN
IF EXISTS(SELECT Atencion_Id FROM tblAtencion WHERE Atencion_Id = Pint_IdAtencion AND Pchr_CitaEstado LIKE 'A') THEN
UPDATE tblAtencion SET 
 Atencion_Fecha=Pdat_Fecha
,Atencion_IdProducto=Pint_IdProducto
,Atencion_IdMascota=Pint_IdMascota
,Atencion_Sintomas=Pvchr_Sintomas
,Atencion_T=Pvchr_Atencion_T
,Atencion_FC=Pvchr_Atencion_FC
,Atencion_FR=Pvchr_Atencion_FR
,Atencion_sc_Deshidratacion=Pvchr_Atencion_sc_Des
,Atencion_sc_Mucosas=Pvchr_Atencion_sc_Muc
,Atencion_sc_TLLC=Pvchr_Atencion_sc_TLLC
,Atencion_sc_Vomitos=Pvchr_Atencion_sc_Vom
,Atencion_sc_Diarreas=Pvchr_Atencion_sc_Dia
,Atencion_sc_Ganglios=Pvchr_Atencion_sc_Gan
,Atencion_sc_Peso=Pvchr_Atencion_sc_Pes
,Atencion_dx_Presuntivo=Pvchr_Atencion_dx_Pre
,Atencion_dx_Definitivo=Pvchr_Atencion_dx_Def
,Atencion_dx_Solicitado=Pvchr_Atencion_dx_Sol
,Atencion_tr_Descripcion=Pvchr_Atencion_tr_Des
,Atencion_tr_Observacion=Pvchr_Atencion_tr_Obs
,Atencion_tr_Precio=Pflo_Atencion_tr_Pre
,Atencion_IdDocumento=Pint_Documento
,Atencion_Cita=Pint_Cita
,Atencion_CitaEstado=Pchr_CitaEstado
,Atencion_Estado=Pint_Estado
,Atencion_FechaGrab_Edicion=NOW()
,Atencion_UserGrab_Edicion=Pvchr_Usuario WHERE Atencion_Id = Pint_IdAtencion;
SELECT '1' AS CODIGO;
ELSE
SELECT '2' AS CODIGO;
END IF;
END$$
DELIMITER ;


DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblAtencion (IN Pint_IdAtencion INT)
BEGIN
UPDATE tblAtencion SET Atencion_Estado = 2 WHERE Atencion_Id;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_TblAtencion_All_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblAtencion_All_x_Id (IN Pint_IdAtencion INT)
BEGIN
SELECT ta.Atencion_Id, ta.Atencion_IdVenta, ta.Atencion_Fecha, ta.Atencion_IdProducto, ta.Atencion_IdMascota, tm.Mascota_Nombre, CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS Cliente_NombreCompleto, ta.Atencion_Sintomas, ta.Atencion_T, ta.Atencion_FC, ta.Atencion_FR, ta.Atencion_sc_Deshidratacion, ta.Atencion_sc_Mucosas, ta.Atencion_sc_TLLC, ta.Atencion_sc_Vomitos, ta.Atencion_sc_Diarreas, ta.Atencion_sc_Ganglios, ta.Atencion_sc_Peso, ta.Atencion_dx_Presuntivo, ta.Atencion_dx_Definitivo, ta.Atencion_dx_Solicitado, ta.Atencion_tr_Descripcion, ta.Atencion_tr_Observacion, ta.Atencion_tr_Precio, ta.Atencion_IdDocumento, ta.Atencion_Cita, ta.Atencion_CitaEstado, ta.Atencion_Estado, ta.Atencion_FechaGra, ta.Atencion_UserGrab, ta.Atencion_FechaGrab_Edicion, ta.Atencion_UserGrab_Edicion 
FROM tblAtencion ta 
LEFT JOIN tblMascota tm ON ta.Atencion_IdMascota = tm.Mascota_Id
LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id
WHERE Atencion_Estado = 1 AND Atencion_Id = Pint_IdAtencion;
END$$
DELIMITER ;

/* 09-03-2020 */

DROP PROCEDURE IF EXISTS SP_Obtener_Datos_Agenda_All;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_Datos_Agenda_All()
BEGIN
/*
SELECT CASE WHEN LENGTH( tv.Vacunas_Id) = 1 THEN CONCAT('V000',tv.Vacunas_Id) WHEN LENGTH( tv.Vacunas_Id) = 2 THEN CONCAT('V00',tv.Vacunas_Id) WHEN LENGTH( tv.Vacunas_Id) = 3 THEN CONCAT('V0',tv.Vacunas_Id) WHEN LENGTH( tv.Vacunas_Id) = 4 THEN CONCAT('V',tv.Vacunas_Id) ELSE 'ERROR' END Vacunas_Id,
tv.Vacunas_IdVenta,tv.Vacunas_Fecha,'VACUNA' AS SERVICIO,CASE WHEN tv.Vacunas_Cita = 2 THEN 'AGENDADO' WHEN tv.Vacunas_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,tp.Producto_Nombre,tv.Vacunas_IdMascota,
tv.Vacunas_Observacion,tv.Vacunas_Precio FROM tblVacunas tv LEFT JOIN tblProducto tp ON tv.Vacunas_IdProducto = tp.Producto_Id WHERE tv.Vacunas_Cita IN (2,3)
UNION
SELECT CASE WHEN LENGTH( tb.Banio_Id) = 1 THEN CONCAT('B000',tb.Banio_Id) WHEN LENGTH( tb.Banio_Id) = 2 THEN CONCAT('B00',tb.Banio_Id) WHEN LENGTH( tb.Banio_Id) = 3 THEN CONCAT('B0',tb.Banio_Id) WHEN LENGTH( tb.Banio_Id) = 4 THEN CONCAT('V',tb.Banio_Id) ELSE 'ERROR' END Banio_Id,
tb.Banio_IdVenta,tb.Banio_Fecha,'BAÑO' AS SERVICIO,CASE WHEN tb.Banio_Cita= 2 THEN 'AGENDADO' WHEN tb.Banio_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,tp.Producto_Nombre,tb.Banio_IdMascota,tb.Banio_Observacion,tb.Banio_Precio
FROM tblBanio tb LEFT JOIN tblProducto tp ON tb.Banio_IdProducto = tp.Producto_Id WHERE tb.Banio_Cita IN (2,3)
UNION
SELECT CASE WHEN LENGTH( td.Desparacitacion_Id) = 1 THEN CONCAT('D000',td.Desparacitacion_Id) WHEN LENGTH( td.Desparacitacion_Id) = 2 THEN CONCAT('D00',td.Desparacitacion_Id) WHEN LENGTH( td.Desparacitacion_Id) = 3 THEN CONCAT('D0',td.Desparacitacion_Id) WHEN LENGTH( td.Desparacitacion_Id) = 4 THEN CONCAT('V',td.Desparacitacion_Id) ELSE 'ERROR' END Desparacitacion_Id,
td.Desparacitacion_IdVenta,td.Desparacitacion_Fecha,'DESPARACITACIÓN' AS SERVICIO,CASE WHEN td.Desparacitacion_Cita = 2 THEN 'AGENDADO' WHEN td.Desparacitacion_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,tp.Producto_Nombre,td.Desparacitacion_IdMascota,td.Desparacitacion_Observacion,td.Desparacitacion_Precio FROM tblDesparacitacion td LEFT JOIN tblProducto tp ON td.Desparacitacion_IdProducto = tp.Producto_Id WHERE td.Desparacitacion_Cita IN (2,3) 
UNION
SELECT CASE WHEN LENGTH( ta.Atencion_Id) = 1 THEN CONCAT('A000',ta.Atencion_Id) WHEN LENGTH( ta.Atencion_Id) = 2 THEN CONCAT('A00',ta.Atencion_Id) WHEN LENGTH( ta.Atencion_Id) = 3 THEN CONCAT('A0',ta.Atencion_Id) WHEN LENGTH( ta.Atencion_Id) = 4 THEN CONCAT('V',ta.Atencion_Id) ELSE 'ERROR' END Atencion_Id,
ta.Atencion_IdVenta,ta.Atencion_Fecha,'ATENCIÓN' AS ATENCION,CASE WHEN ta.Atencion_Cita = 2 THEN 'AGENDADO' WHEN ta.Atencion_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,
Atencion_IdProducto,ta.Atencion_IdMascota,ta.Atencion_tr_Observacion,ta.Atencion_tr_Precio FROM tblAtencion ta LEFT JOIN tblProducto tp ON ta.Atencion_IdProducto = tp.Producto_Id WHERE Atencion_Cita IN (2,3);
*/
SELECT CASE WHEN LENGTH( tv.Vacunas_Id) = 1 THEN CONCAT('V000',tv.Vacunas_Id) WHEN LENGTH( tv.Vacunas_Id) = 2 THEN CONCAT('V00',tv.Vacunas_Id) WHEN LENGTH( tv.Vacunas_Id) = 3 THEN CONCAT('V0',tv.Vacunas_Id) WHEN LENGTH( tv.Vacunas_Id) = 4 THEN CONCAT('V',tv.Vacunas_Id) ELSE 'ERROR' END Codigo,
tv.Vacunas_IdVenta as Venta,tv.Vacunas_Fecha as Fecha,'VACUNA' AS Servicio,CASE WHEN tv.Vacunas_Cita = 2 THEN 'AGENDADO' WHEN tv.Vacunas_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,tp.Producto_Nombre,
CASE WHEN LENGTH( tv.Vacunas_IdMascota) = 1 THEN CONCAT('M000',tv.Vacunas_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( tv.Vacunas_IdMascota) = 2 THEN CONCAT('M00',tv.Vacunas_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( tv.Vacunas_IdMascota) = 3 THEN CONCAT('M0',tv.Vacunas_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( tv.Vacunas_IdMascota) = 4 THEN CONCAT('M',tv.Vacunas_IdMascota,' - ',tm.Mascota_Nombre) ELSE 'ERROR' END AS Mascota_Nombre,tv.Vacunas_Observacion as Observacion,tv.Vacunas_Precio as Precio
FROM tblVacunas tv LEFT JOIN tblProducto tp ON tv.Vacunas_IdProducto = tp.Producto_Id LEFT JOIN tblMascota tm ON tv.Vacunas_IdMascota = tm.Mascota_Id WHERE tv.Vacunas_Cita IN (2,3)
UNION
SELECT CASE WHEN LENGTH( tb.Banio_Id) = 1 THEN CONCAT('B000',tb.Banio_Id) WHEN LENGTH( tb.Banio_Id) = 2 THEN CONCAT('B00',tb.Banio_Id) WHEN LENGTH( tb.Banio_Id) = 3 THEN CONCAT('B0',tb.Banio_Id) WHEN LENGTH( tb.Banio_Id) = 4 THEN CONCAT('V',tb.Banio_Id) ELSE 'ERROR' END Banio_Id,
tb.Banio_IdVenta,tb.Banio_Fecha,'BAÑO' AS SERVICIO,CASE WHEN tb.Banio_Cita= 2 THEN 'AGENDADO' WHEN tb.Banio_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,tp.Producto_Nombre,
CASE WHEN LENGTH( tb.Banio_IdMascota) = 1 THEN CONCAT('M000',tb.Banio_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( tb.Banio_IdMascota) = 2 THEN CONCAT('M00',tb.Banio_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( tb.Banio_IdMascota) = 3 THEN CONCAT('M0',tb.Banio_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH(tb.Banio_IdMascota) = 4 THEN CONCAT('M',tb.Banio_IdMascota,' - ',tm.Mascota_Nombre) ELSE 'ERROR' END AS Mascota_Nombre,tb.Banio_Observacion,tb.Banio_Precio 
FROM tblBanio tb LEFT JOIN tblProducto tp ON tb.Banio_IdProducto = tp.Producto_Id LEFT JOIN tblMascota tm ON tb.Banio_IdMascota = tm.Mascota_Id WHERE tb.Banio_Cita IN (2,3)
UNION
SELECT CASE WHEN LENGTH( td.Desparacitacion_Id) = 1 THEN CONCAT('D000',td.Desparacitacion_Id) WHEN LENGTH( td.Desparacitacion_Id) = 2 THEN CONCAT('D00',td.Desparacitacion_Id) WHEN LENGTH( td.Desparacitacion_Id) = 3 THEN CONCAT('D0',td.Desparacitacion_Id) WHEN LENGTH( td.Desparacitacion_Id) = 4 THEN CONCAT('V',td.Desparacitacion_Id) ELSE 'ERROR' END Desparacitacion_Id,
td.Desparacitacion_IdVenta,td.Desparacitacion_Fecha,'DESPARACITACIÓN' AS SERVICIO,CASE WHEN td.Desparacitacion_Cita = 2 THEN 'AGENDADO' WHEN td.Desparacitacion_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,tp.Producto_Nombre,
CASE WHEN LENGTH( td.Desparacitacion_IdMascota) = 1 THEN CONCAT('M000',td.Desparacitacion_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH(td.Desparacitacion_IdMascota) = 2 THEN CONCAT('M00',td.Desparacitacion_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( td.Desparacitacion_IdMascota) = 3 THEN CONCAT('M0',td.Desparacitacion_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH(td.Desparacitacion_IdMascota) = 4 THEN CONCAT('M',td.Desparacitacion_IdMascota,' - ',tm.Mascota_Nombre) ELSE 'ERROR' END AS Mascota_Nombre,td.Desparacitacion_Observacion,td.Desparacitacion_Precio 
FROM tblDesparacitacion td LEFT JOIN tblProducto tp ON td.Desparacitacion_IdProducto = tp.Producto_Id LEFT JOIN tblMascota tm ON td.Desparacitacion_IdMascota = tm.Mascota_Id WHERE td.Desparacitacion_Cita IN (2,3) 
UNION
SELECT CASE WHEN LENGTH( ta.Atencion_Id) = 1 THEN CONCAT('A000',ta.Atencion_Id) WHEN LENGTH( ta.Atencion_Id) = 2 THEN CONCAT('A00',ta.Atencion_Id) WHEN LENGTH( ta.Atencion_Id) = 3 THEN CONCAT('A0',ta.Atencion_Id) WHEN LENGTH( ta.Atencion_Id) = 4 THEN CONCAT('V',ta.Atencion_Id) ELSE 'ERROR' END Atencion_Id,ta.Atencion_IdVenta,ta.Atencion_Fecha,'ATENCIÓN' AS ATENCION,CASE WHEN ta.Atencion_Cita = 2 THEN 'AGENDADO' WHEN ta.Atencion_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,Atencion_IdProducto,
CASE WHEN LENGTH( ta.Atencion_IdMascota) = 1 THEN CONCAT('M000',ta.Atencion_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH(ta.Atencion_IdMascota) = 2 THEN CONCAT('M00',ta.Atencion_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( ta.Atencion_IdMascota) = 3 THEN CONCAT('M0',ta.Atencion_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH(ta.Atencion_IdMascota) = 4 THEN CONCAT('M',ta.Atencion_IdMascota,' - ',tm.Mascota_Nombre) ELSE 'ERROR' END AS Mascota_Nombre,
ta.Atencion_tr_Observacion,ta.Atencion_tr_Precio 
FROM tblAtencion ta LEFT JOIN tblProducto tp ON ta.Atencion_IdProducto = tp.Producto_Id LEFT JOIN tblMascota tm ON ta.Atencion_IdMascota = tm.Mascota_Id WHERE Atencion_Cita IN (2,3);
END$$
DELIMITER ;


CREATE DEFINER=`gavet`@`localhost` PROCEDURE `SP_Obtener_Datos_Agenda_All`()
BEGIN
/*
SELECT CASE WHEN LENGTH( tv.Vacunas_Id) = 1 THEN CONCAT('V000',tv.Vacunas_Id) WHEN LENGTH( tv.Vacunas_Id) = 2 THEN CONCAT('V00',tv.Vacunas_Id) WHEN LENGTH( tv.Vacunas_Id) = 3 THEN CONCAT('V0',tv.Vacunas_Id) WHEN LENGTH( tv.Vacunas_Id) = 4 THEN CONCAT('V',tv.Vacunas_Id) ELSE 'ERROR' END Vacunas_Id,
tv.Vacunas_IdVenta,tv.Vacunas_Fecha,'VACUNA' AS SERVICIO,CASE WHEN tv.Vacunas_Cita = 2 THEN 'AGENDADO' WHEN tv.Vacunas_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,tp.Producto_Nombre,tv.Vacunas_IdMascota,
tv.Vacunas_Observacion,tv.Vacunas_Precio FROM tblVacunas tv LEFT JOIN tblProducto tp ON tv.Vacunas_IdProducto = tp.Producto_Id WHERE tv.Vacunas_Cita IN (2,3)
UNION
SELECT CASE WHEN LENGTH( tb.Banio_Id) = 1 THEN CONCAT('B000',tb.Banio_Id) WHEN LENGTH( tb.Banio_Id) = 2 THEN CONCAT('B00',tb.Banio_Id) WHEN LENGTH( tb.Banio_Id) = 3 THEN CONCAT('B0',tb.Banio_Id) WHEN LENGTH( tb.Banio_Id) = 4 THEN CONCAT('V',tb.Banio_Id) ELSE 'ERROR' END Banio_Id,
tb.Banio_IdVenta,tb.Banio_Fecha,'BAÑO' AS SERVICIO,CASE WHEN tb.Banio_Cita= 2 THEN 'AGENDADO' WHEN tb.Banio_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,tp.Producto_Nombre,tb.Banio_IdMascota,tb.Banio_Observacion,tb.Banio_Precio
FROM tblBanio tb LEFT JOIN tblProducto tp ON tb.Banio_IdProducto = tp.Producto_Id WHERE tb.Banio_Cita IN (2,3)
UNION
SELECT CASE WHEN LENGTH( td.Desparacitacion_Id) = 1 THEN CONCAT('D000',td.Desparacitacion_Id) WHEN LENGTH( td.Desparacitacion_Id) = 2 THEN CONCAT('D00',td.Desparacitacion_Id) WHEN LENGTH( td.Desparacitacion_Id) = 3 THEN CONCAT('D0',td.Desparacitacion_Id) WHEN LENGTH( td.Desparacitacion_Id) = 4 THEN CONCAT('V',td.Desparacitacion_Id) ELSE 'ERROR' END Desparacitacion_Id,
td.Desparacitacion_IdVenta,td.Desparacitacion_Fecha,'DESPARACITACIÓN' AS SERVICIO,CASE WHEN td.Desparacitacion_Cita = 2 THEN 'AGENDADO' WHEN td.Desparacitacion_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,tp.Producto_Nombre,td.Desparacitacion_IdMascota,td.Desparacitacion_Observacion,td.Desparacitacion_Precio FROM tblDesparacitacion td LEFT JOIN tblProducto tp ON td.Desparacitacion_IdProducto = tp.Producto_Id WHERE td.Desparacitacion_Cita IN (2,3)
UNION
SELECT CASE WHEN LENGTH( ta.Atencion_Id) = 1 THEN CONCAT('A000',ta.Atencion_Id) WHEN LENGTH( ta.Atencion_Id) = 2 THEN CONCAT('A00',ta.Atencion_Id) WHEN LENGTH( ta.Atencion_Id) = 3 THEN CONCAT('A0',ta.Atencion_Id) WHEN LENGTH( ta.Atencion_Id) = 4 THEN CONCAT('V',ta.Atencion_Id) ELSE 'ERROR' END Atencion_Id,
ta.Atencion_IdVenta,ta.Atencion_Fecha,'ATENCIÓN' AS ATENCION,CASE WHEN ta.Atencion_Cita = 2 THEN 'AGENDADO' WHEN ta.Atencion_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,
Atencion_IdProducto,ta.Atencion_IdMascota,ta.Atencion_tr_Observacion,ta.Atencion_tr_Precio FROM tblAtencion ta LEFT JOIN tblProducto tp ON ta.Atencion_IdProducto = tp.Producto_Id WHERE Atencion_Cita IN (2,3);
*/
SELECT CASE WHEN LENGTH( tv.Vacunas_Id) = 1 THEN CONCAT('V000',tv.Vacunas_Id) WHEN LENGTH( tv.Vacunas_Id) = 2 THEN CONCAT('V00',tv.Vacunas_Id) WHEN LENGTH( tv.Vacunas_Id) = 3 THEN CONCAT('V0',tv.Vacunas_Id) WHEN LENGTH( tv.Vacunas_Id) = 4 THEN CONCAT('V',tv.Vacunas_Id) ELSE 'ERROR' END Codigo,
tv.Vacunas_IdVenta as Venta,tv.Vacunas_Fecha as Fecha,'VACUNA' AS Servicio,CASE WHEN tv.Vacunas_Cita = 2 THEN 'AGENDADO' WHEN tv.Vacunas_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,tp.Producto_Nombre,
CASE WHEN LENGTH( tv.Vacunas_IdMascota) = 1 THEN CONCAT('M000',tv.Vacunas_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( tv.Vacunas_IdMascota) = 2 THEN CONCAT('M00',tv.Vacunas_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( tv.Vacunas_IdMascota) = 3 THEN CONCAT('M0',tv.Vacunas_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( tv.Vacunas_IdMascota) = 4 THEN CONCAT('M',tv.Vacunas_IdMascota,' - ',tm.Mascota_Nombre) ELSE 'ERROR' END AS Mascota_Nombre,tv.Vacunas_Observacion as Observacion,tv.Vacunas_Precio as Precio
FROM tblVacunas tv LEFT JOIN tblProducto tp ON tv.Vacunas_IdProducto = tp.Producto_Id LEFT JOIN tblMascota tm ON tv.Vacunas_IdMascota = tm.Mascota_Id WHERE tv.Vacunas_Cita IN (2,3)
UNION
SELECT CASE WHEN LENGTH( tb.Banio_Id) = 1 THEN CONCAT('B000',tb.Banio_Id) WHEN LENGTH( tb.Banio_Id) = 2 THEN CONCAT('B00',tb.Banio_Id) WHEN LENGTH( tb.Banio_Id) = 3 THEN CONCAT('B0',tb.Banio_Id) WHEN LENGTH( tb.Banio_Id) = 4 THEN CONCAT('V',tb.Banio_Id) ELSE 'ERROR' END Banio_Id,
tb.Banio_IdVenta,tb.Banio_Fecha,'BAÑO' AS SERVICIO,CASE WHEN tb.Banio_Cita= 2 THEN 'AGENDADO' WHEN tb.Banio_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,tp.Producto_Nombre,
CASE WHEN LENGTH( tb.Banio_IdMascota) = 1 THEN CONCAT('M000',tb.Banio_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( tb.Banio_IdMascota) = 2 THEN CONCAT('M00',tb.Banio_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( tb.Banio_IdMascota) = 3 THEN CONCAT('M0',tb.Banio_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH(tb.Banio_IdMascota) = 4 THEN CONCAT('M',tb.Banio_IdMascota,' - ',tm.Mascota_Nombre) ELSE 'ERROR' END AS Mascota_Nombre,tb.Banio_Observacion,tb.Banio_Precio
FROM tblBanio tb LEFT JOIN tblProducto tp ON tb.Banio_IdProducto = tp.Producto_Id LEFT JOIN tblMascota tm ON tb.Banio_IdMascota = tm.Mascota_Id WHERE tb.Banio_Cita IN (2,3)
UNION
SELECT CASE WHEN LENGTH( td.Desparacitacion_Id) = 1 THEN CONCAT('D000',td.Desparacitacion_Id) WHEN LENGTH( td.Desparacitacion_Id) = 2 THEN CONCAT('D00',td.Desparacitacion_Id) WHEN LENGTH( td.Desparacitacion_Id) = 3 THEN CONCAT('D0',td.Desparacitacion_Id) WHEN LENGTH( td.Desparacitacion_Id) = 4 THEN CONCAT('V',td.Desparacitacion_Id) ELSE 'ERROR' END Desparacitacion_Id,
td.Desparacitacion_IdVenta,td.Desparacitacion_Fecha,'DESPARACITACIÓN' AS SERVICIO,CASE WHEN td.Desparacitacion_Cita = 2 THEN 'AGENDADO' WHEN td.Desparacitacion_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,tp.Producto_Nombre,
CASE WHEN LENGTH( td.Desparacitacion_IdMascota) = 1 THEN CONCAT('M000',td.Desparacitacion_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH(td.Desparacitacion_IdMascota) = 2 THEN CONCAT('M00',td.Desparacitacion_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( td.Desparacitacion_IdMascota) = 3 THEN CONCAT('M0',td.Desparacitacion_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH(td.Desparacitacion_IdMascota) = 4 THEN CONCAT('M',td.Desparacitacion_IdMascota,' - ',tm.Mascota_Nombre) ELSE 'ERROR' END AS Mascota_Nombre,td.Desparacitacion_Observacion,td.Desparacitacion_Precio
FROM tblDesparacitacion td LEFT JOIN tblProducto tp ON td.Desparacitacion_IdProducto = tp.Producto_Id LEFT JOIN tblMascota tm ON td.Desparacitacion_IdMascota = tm.Mascota_Id WHERE td.Desparacitacion_Cita IN (2,3)
UNION
SELECT CASE WHEN LENGTH( ta.Atencion_Id) = 1 THEN CONCAT('A000',ta.Atencion_Id) WHEN LENGTH( ta.Atencion_Id) = 2 THEN CONCAT('A00',ta.Atencion_Id) WHEN LENGTH( ta.Atencion_Id) = 3 THEN CONCAT('A0',ta.Atencion_Id) WHEN LENGTH( ta.Atencion_Id) = 4 THEN CONCAT('V',ta.Atencion_Id) ELSE 'ERROR' END Atencion_Id,ta.Atencion_IdVenta,ta.Atencion_Fecha,'ATENCIÓN' AS ATENCION,CASE WHEN ta.Atencion_Cita = 2 THEN 'AGENDADO' WHEN ta.Atencion_Cita = 3 THEN 'REPROGRAMADO' END AS Atencion,Atencion_IdProducto,
CASE WHEN LENGTH( ta.Atencion_IdMascota) = 1 THEN CONCAT('M000',ta.Atencion_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH(ta.Atencion_IdMascota) = 2 THEN CONCAT('M00',ta.Atencion_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH( ta.Atencion_IdMascota) = 3 THEN CONCAT('M0',ta.Atencion_IdMascota,' - ',tm.Mascota_Nombre) WHEN LENGTH(ta.Atencion_IdMascota) = 4 THEN CONCAT('M',ta.Atencion_IdMascota,' - ',tm.Mascota_Nombre) ELSE 'ERROR' END AS Mascota_Nombre,
ta.Atencion_tr_Observacion,ta.Atencion_tr_Precio
FROM tblAtencion ta LEFT JOIN tblProducto tp ON ta.Atencion_IdProducto = tp.Producto_Id LEFT JOIN tblMascota tm ON ta.Atencion_IdMascota = tm.Mascota_Id WHERE Atencion_Cita IN (2,3);
END


/*************** TEMPORAL *************************/

http://186.64.116.55/~gavet/html/ltr/lib_externos/fullcalendar-4.4.0/examples/month-view-test-tool.html


SELECT CONCAT('VACU',tv.Vacunas_Id) AS ID,CONCAT('CITA ', tp.Producto_Nombre, ' - ','VACUNA ',CASE WHEN tv.Vacunas_Cita = 2 THEN 'AGENDADA' WHEN tv.Vacunas_Cita = 3 THEN 'REPROGRAMADA' END) AS TITLE,
tv.Vacunas_IdVenta as Venta,tv.Vacunas_Fecha as Fecha,'VACUNA' AS Servicio,

CASE WHEN LENGTH( tv.Vacunas_IdMascota) = 1 THEN CONCAT('M000',tv.Vacunas_IdMascota,':',tm.Mascota_Nombre)
     WHEN LENGTH( tv.Vacunas_IdMascota) = 2 THEN CONCAT('M00',tv.Vacunas_IdMascota,':',tm.Mascota_Nombre)
     WHEN LENGTH( tv.Vacunas_IdMascota) = 3 THEN CONCAT('M0',tv.Vacunas_IdMascota,':',tm.Mascota_Nombre)
     WHEN LENGTH( tv.Vacunas_IdMascota) = 4 THEN CONCAT('M',tv.Vacunas_IdMascota,':',tm.Mascota_Nombre)
     ELSE 'ERROR' END AS Mascota_Nombre,' - ',tv.Vacunas_Observacion

FROM tblVacunas tv LEFT JOIN tblProducto tp ON tv.Vacunas_IdProducto = tp.Producto_Id LEFT JOIN tblMascota tm ON tv.Vacunas_IdMascota = tm.Mascota_Id WHERE tv.Vacunas_Cita IN (2,3)   

/*************** TEMPORAL *************************/


SELECT SUBSTRING(servicio,1,2) FROM View_tbl_Atencion limit 500

-- SELECT CONCAT(SUBSTRING(servicio,1,2),ID),FECHA,CONCAT('CITA : ',servicio),'EL  CON CODIGO ' + SUBSTRING(Mascota_Nombre,1,5) FROM View_tbl_Atencion 

/*
SELECT CONCAT(SUBSTRING(servicio,1,2),ID),FECHA,CONCAT('CITA : ',servicio),CONCAT('EL  CON CODIGO ',SUBSTRING(Mascota_Nombre,1,5),' DE NOMBRE ',SUBSTRING(Mascota_Nombre,9,LENGTH(Mascota_Nombre)),' TIENE UN SERVICIO DE ',servicio COLLATE latin1_spanish_ci) FROM View_tbl_Atencion 
*/

SELECT CONCAT('VACU',tv.Vacunas_Id) AS ID,CONCAT('CITA ', tp.Producto_Nombre, ' - ','VACUNA ',CASE WHEN tv.Vacunas_Cita = 2 THEN 'AGENDADA' WHEN tv.Vacunas_Cita = 3 THEN 'REPROGRAMADA' END) AS TITLE,
tv.Vacunas_IdVenta as Venta,tv.Vacunas_Fecha as Fecha,'VACUNA' AS Servicio,

CASE WHEN LENGTH( tv.Vacunas_IdMascota) = 1 THEN CONCAT('M000',tv.Vacunas_IdMascota,':',tm.Mascota_Nombre)
     WHEN LENGTH( tv.Vacunas_IdMascota) = 2 THEN CONCAT('M00',tv.Vacunas_IdMascota,':',tm.Mascota_Nombre)
     WHEN LENGTH( tv.Vacunas_IdMascota) = 3 THEN CONCAT('M0',tv.Vacunas_IdMascota,':',tm.Mascota_Nombre)
     WHEN LENGTH( tv.Vacunas_IdMascota) = 4 THEN CONCAT('M',tv.Vacunas_IdMascota,':',tm.Mascota_Nombre)
     ELSE 'ERROR' END AS Mascota_Nombre,' - ',tv.Vacunas_Observacion

FROM tblVacunas tv LEFT JOIN tblProducto tp ON tv.Vacunas_IdProducto = tp.Producto_Id LEFT JOIN tblMascota tm ON tv.Vacunas_IdMascota = tm.Mascota_Id WHERE tv.Vacunas_Cita IN (2,3)   


DROP PROCEDURE IF EXISTS SP_Obtener_Datos_Agenda_Not_All;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_Datos_Agenda_Not_All()
BEGIN
SELECT Codigo as id,CONCAT(Servicio,' ',Atencion) as title,Fecha as `start`,
CONCAT('LA MASCOTA DE NOMBRE (',Mascota_Nombre,') TIENE UN SERVICIO DE ',Producto_Nombre,'<br>OBSERVACION ADICIONAL : ',Observacion)
as description FROM View_tbl_Atencion;
END $$
DELIMITER ;



/* ----- */
SELECT * FROM tblCliente tc 
LEFT JOIN tblMascota tm ON tc.Cliente_Id = tm.Mascota_IdCliente
LEFT JOIN tblEspecie te ON tm.Mascota_IdEspecie = te.Especie_Id
LEFT JOIN tblRaza tr ON tm.Mascota_IdRaza = tr.Raza_Id
LEFT JOIN tblVacunas tv ON tm.Mascota_Id = tv.Vacunas_IdMascota
LEFT JOIN View_tbl_Atencion va ON tm.Mascota_Id = va.Id_Mascota 
WHERE tc.Cliente_Dni LIKE '45454242'
/* ----- */


/* --------------- 25032020 ------------------------- */
DROP PROCEDURE IF EXISTS SP_Registrar_TblVenta;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblVenta (IN Pint_Kardex INT,
                                       IN Pdat_Fecha DATE,
                                       IN Pint_TipoVenta INT,
                                       IN Pint_TipoPago INT,
                                       IN Pint_IdMascota INT,
                                       IN Pint_IdAlmacen INT,
                                       IN Pflo_Precio FLOAT,
                                       IN Pflo_Descuento FLOAT,
                                       IN Pflo_Cantidad FLOAT,
                                       IN Pflo_PrecioTotal FLOAT,
                                       IN Pvchr_Observacion VARCHAR(1000),
                                       IN Pint_Estado INT,
                                       IN Pvchr_Usuario VARCHAR(100))
BEGIN
INSERT INTO tblVenta
(Venta_IdKardex, Venta_Fecha, Venta_Tipo, Venta_TipoPago, Venta_IdMascota, Venta_IdAlmacen, Venta_Precio, Venta_Descuento, Venta_Cantidad, Venta_PrecioTotal, Venta_Observacion, Venta_Estado, Venta_FechaGra, Venta_UserGrab)
VALUES 
(Pint_Kardex, Pdat_Fecha, Pint_TipoVenta, Pint_TipoPago, Pint_IdMascota, Pint_IdAlmacen, Pflo_Precio, Pflo_Descuento, Pflo_Cantidad, Pflo_PrecioTotal, Pvchr_Observacion, Pint_Estado,NOW(), Pvchr_Usuario);
END $$
DELIMITER ;
CALL SP_Registrar_TblVenta (1,'2020-03-25',1,1,1,1,50.05,0,1,50.5,'DESDE BD',1,'WEB')


DROP PROCEDURE IF EXISTS SP_Registrar_TblVentaDetalle;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblVentaDetalle (IN Pint_VentaId INT,
                                               IN Pint_IdProducto INT,
                                               IN Pflo_Precio FLOAT,
                                               IN Pflo_Descuento FLOAT,
                                               IN Pint_Cantidad INT,
                                               IN Pflo_PrecioTotal FLOAT,
                                               IN Pint_Estado INT,
                                               IN Pvchr_Usuario VARCHAR(100))
BEGIN
INSERT INTO tblVentaDetalle
(VentaDetalle_VentaId, VentaDetalle_IdProducto, VentaDetalle_Precio, VentaDetalle_Descuento, VentaDetalle_Cantidad, VentaDetalle_PrecioTotal, VentaDetalle_Estado, VentaDetalle_FechaGra, VentaDetalle_UserGrab)
VALUES
(Pint_VentaId, Pint_IdProducto, Pflo_Precio, Pflo_Descuento, Pint_Cantidad, Pflo_PrecioTotal, Pint_Estado, NOW(), Pvchr_Usuario);
END $$
DELIMITER ;
CALL SP_Registrar_TblVentaDetalle (1,4,50,1.5,1,48.5,1,'WEB')


DROP PROCEDURE IF EXISTS SP_Actualizar_TblAlmacen_Stock;
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblAlmacen_Stock (IN Pint_IdSede INT, IN Pint_IdProducto INT, IN Pflo_Cantidad FLOAT)
BEGIN
UPDATE tblAlmacen 
SET Almacen_Cantidad = (Almacen_Cantidad - Pflo_Cantidad) WHERE Almacen_IdSede = Pint_IdSede AND Almacen_IdProducto = Pint_IdProducto;
END $$
DELIMITER ;
CALL SP_Actualizar_TblAlmacen_Stock (1,4,9)


DROP PROCEDURE IF EXISTS SP_Registrar_TblBanio_AfterProcess;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblBanio_AfterProcess(IN Pint_IdVenta INT,
                                                  IN Pdat_Fecha DATE,
                                                  IN Pint_IdProducto INT,
                                                  IN Pflo_Precio FLOAT,
                                                  IN Pint_IdMascota INT,
                                                  IN Pvchr_Observacion VARCHAR(100),
                                                  IN Pint_Cita INT,
                                                  IN Pchr_CitaEstado CHAR(1),
                                                  IN Pint_Estado INT, 
                                                  IN Pvchr_Usuario VARCHAR(50))
BEGIN
INSERT INTO tblBanio (Banio_IdVenta, Banio_Fecha, Banio_IdProducto, Banio_Precio, Banio_IdMascota, Banio_Observacion, Banio_Cita, Banio_CitaEstado, Banio_Estado, Banio_FechaGra, Banio_UserGrab)
VALUES 
(Pint_IdVenta, Pdat_Fecha, Pint_IdProducto, Pflo_Precio, Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pchr_CitaEstado, Pint_Estado, now(), Pvchr_Usuario);
END $$
DELIMITER ;
CALL SP_Registrar_TblBanio_AfterProcess (1,'2020-03-25',4,15.25,1,'OBS',1,'A',1,'WEB2')


DROP PROCEDURE IF EXISTS SP_Registrar_TblVacunas_AfterProcess;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblVacunas_AfterProcess(IN Pint_IdVenta INT,
                                                  IN Pdat_Fecha DATE,
                                                  IN Pint_IdProducto INT,
                                                  IN Pflo_Precio FLOAT,
                                                  IN Pint_IdMascota INT,
                                                  IN Pvchr_Observacion VARCHAR(100),
                                                  IN Pint_Cita INT,
                                                  IN Pchr_CitaEstado CHAR(1),
                                                  IN Pint_Estado INT, 
                                                  IN Pvchr_Usuario VARCHAR(50))
BEGIN
INSERT INTO tblVacunas(Vacunas_IdVenta, Vacunas_Fecha, Vacunas_IdProducto, Vacunas_Precio, Vacunas_IdMascota, Vacunas_Observacion, Vacunas_Cita, Vacunas_CitaEstado, Vacunas_Estado, Vacunas_FechaGra, Vacunas_UserGrab)
VALUES 
(Pint_IdVenta, Pdat_Fecha, Pint_IdProducto, Pflo_Precio, Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pchr_CitaEstado, Pint_Estado, now(), Pvchr_Usuario);
END $$
DELIMITER ;

DROP PROCEDURE IF EXISTS SP_Registrar_TblDesparacitacion_AfterProcess;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblDesparacitacion_AfterProcess(IN Pint_IdVenta INT,
                                                  IN Pdat_Fecha DATE,
                                                  IN Pint_IdProducto INT,
                                                  IN Pflo_Precio FLOAT,
                                                  IN Pint_IdMascota INT,
                                                  IN Pvchr_Observacion VARCHAR(100),
                                                  IN Pint_Cita INT,
                                                  IN Pchr_CitaEstado CHAR(1),
                                                  IN Pint_Estado INT, 
                                                  IN Pvchr_Usuario VARCHAR(50))
BEGIN
INSERT INTO tblDesparacitacion(Desparacitacion_IdVenta, Desparacitacion_Fecha, Desparacitacion_IdProducto, Desparacitacion_Precio, Desparacitacion_IdMascota, Desparacitacion_Observacion, Desparacitacion_Cita, Desparacitacion_CitaEstado, Desparacitacion_Estado, Desparacitacion_FechaGra, Desparacitacion_UserGrab)
VALUES 
(Pint_IdVenta, Pdat_Fecha, Pint_IdProducto, Pflo_Precio, Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pchr_CitaEstado, Pint_Estado, now(), Pvchr_Usuario);
END $$
DELIMITER ;


CREATE VIEW View_tbl_Almacen_Stock
AS
SELECT Almacen_IdProducto,sum(Almacen_Cantidad) AS Cantidad FROM tblAlmacen group by Almacen_IdProducto

DROP PROCEDURE IF EXISTS SP_Obtener_TblAlmacen_x_Id;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblAlmacen_x_Id(IN Pint_IdProducto INT)
BEGIN
SET @numero=0;
SELECT @numero:=@numero+1 AS Orden,
ts.Sede_Nombre,
CASE WHEN LENGTH(ta.Almacen_IdProducto) = 1 THEN CONCAT('PR000',ta.Almacen_IdProducto)
WHEN LENGTH(ta.Almacen_IdProducto) = 2 THEN CONCAT('PR00',ta.Almacen_IdProducto) 
WHEN LENGTH(ta.Almacen_IdProducto) = 3 THEN CONCAT('PR0',ta.Almacen_IdProducto)
ELSE CONCAT('PR',ta.Almacen_IdProducto) END AS IdProducto,
tp.Producto_Nombre,ta.Almacen_Cantidad FROM tblAlmacen ta
LEFT JOIN tblSede ts ON ta.Almacen_IdSede = ts.Sede_Id
LEFT JOIN tblProducto tp ON ta.Almacen_IdProducto = tp.Producto_Id
WHERE ta.Almacen_IdProducto = Pint_IdProducto;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_TblCompra_UltimoId;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblCompra_UltimoId()
BEGIN
SELECT MAX(Compra_Id) AS CODIGO FROM tblCompra;
END$$
DELIMITER ;



DROP PROCEDURE IF EXISTS SP_Registrar_TblAtencion;
DELIMITER $$
CREATE PROCEDURE `SP_Registrar_TblAtencion`(IN Pint_IdTipoRegistro INT,
                                                IN Pint_IdAtencion INT,                                                  
                                                IN Pdat_Fecha DATE,
												IN Pint_IdProducto INT,
                                                IN Pint_IdMascota INT,
                                                IN Pvchr_Sintomas VARCHAR(3000),                                                
                                                IN Pvchr_Atencion_T VARCHAR(100),
                                                IN Pvchr_Atencion_FC VARCHAR(100),
                                                IN Pvchr_Atencion_FR VARCHAR(100),                                                  
                                                IN Pvchr_Atencion_sc_Des VARCHAR(100),
                                                IN Pvchr_Atencion_sc_Muc VARCHAR(100),
                                                IN Pvchr_Atencion_sc_TLLC VARCHAR(100),
                                                IN Pvchr_Atencion_sc_Vom VARCHAR(100),
                                                IN Pvchr_Atencion_sc_Dia VARCHAR(100),
                                                IN Pvchr_Atencion_sc_Gan VARCHAR(100),
                                                IN Pvchr_Atencion_sc_Pes VARCHAR(50),                                                  
                                                IN Pvchr_Atencion_dx_Pre VARCHAR(150),
                                                IN Pvchr_Atencion_dx_Def VARCHAR(150),
                                                IN Pvchr_Atencion_dx_Sol VARCHAR(150),
                                                IN Pvchr_Atencion_tr_Des VARCHAR(150),
                                                IN Pvchr_Atencion_tr_Obs VARCHAR(150),
                                                IN Pflo_Atencion_tr_Pre FLOAT,
                                                IN Pint_Documento INT,
                                                IN Pint_Cita INT,
                                                IN Pchr_CitaEstado CHAR(1),
                                                IN Pint_Estado INT,                                                
                                                IN Pvchr_Usuario VARCHAR(100),
                                                IN Pint_VentaTipo INT,
                                                IN Pint_IdAlmacen INT)
BEGIN
DECLARE IdVentaTemporal INT;
DECLARE IdAlmacen INT;
DECLARE Pflo_Cantidad FLOAT;
SET Pflo_Cantidad = 1;
IF Pint_IdTipoRegistro = 1 THEN
	IF Pint_Cita = 1 THEN /* Registrar */
		/*VALIDAR QUE EXISTE STOCK*/
		IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 THEN
			  INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
               VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
               VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
                VALUES
               (Pint_IdTipoRegistro, Pint_IdAtencion, Pdat_Fecha, Pint_IdProducto, Pflo_Atencion_tr_Pre,
                Pint_IdMascota, Pvchr_Atencion_tr_Obs, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
                Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());		
			  INSERT INTO tblAtencionTemporal
			  (Atencion_IdVenta, Atencion_Fecha, Atencion_IdProducto, Atencion_IdMascota, Atencion_Sintomas,
			   Atencion_T, Atencion_FC, Atencion_FR,
			   Atencion_sc_Deshidratacion, Atencion_sc_Mucosas, Atencion_sc_TLLC, Atencion_sc_Vomitos, Atencion_sc_Diarreas, Atencion_sc_Ganglios, Atencion_sc_Peso,
			   Atencion_dx_Presuntivo, Atencion_dx_Definitivo, Atencion_dx_Solicitado,
			   Atencion_tr_Descripcion, Atencion_tr_Observacion, Atencion_tr_Precio,
			   Atencion_IdDocumento, Atencion_Cita, Atencion_CitaEstado, Atencion_Estado, Atencion_FechaGra, Atencion_UserGrab)
			  VALUES
			  (Pint_IdAtencion, Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Sintomas,
			   Pvchr_Atencion_T, Pvchr_Atencion_FC, Pvchr_Atencion_FR,
			   Pvchr_Atencion_sc_Des, Pvchr_Atencion_sc_Muc, Pvchr_Atencion_sc_TLLC, Pvchr_Atencion_sc_Vom, Pvchr_Atencion_sc_Dia, Pvchr_Atencion_sc_Gan, Pvchr_Atencion_sc_Pes,
			   Pvchr_Atencion_dx_Pre, Pvchr_Atencion_dx_Def, Pvchr_Atencion_dx_Sol,
			   Pvchr_Atencion_tr_Des, Pvchr_Atencion_tr_Obs, Pflo_Atencion_tr_Pre,
			   Pint_Documento, Pint_Cita, Pchr_CitaEstado, Pint_Estado,NOW(), Pvchr_Usuario);
			 /* OBTIENE ID DE VENTATEMPORAL */
			 -- SET IdVentaTemporal =(SELECT MAX(Atencion_IdVenta) FROM tblAtencionTemporal);
			 SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);			 
			 SELECT '1' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
		ELSE
			 SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
		END IF;
	ELSEIF Pint_Cita = 2 THEN /* Agendar */
	/*INSERTA TBL ATENCION*/
		  INSERT INTO tblAtencion
		  (Atencion_IdVenta, Atencion_Fecha, Atencion_IdProducto, Atencion_IdMascota, Atencion_Sintomas,
		   Atencion_T, Atencion_FC, Atencion_FR,
		   Atencion_sc_Deshidratacion, Atencion_sc_Mucosas, Atencion_sc_TLLC, Atencion_sc_Vomitos, Atencion_sc_Diarreas, Atencion_sc_Ganglios, Atencion_sc_Peso,
		   Atencion_dx_Presuntivo, Atencion_dx_Definitivo, Atencion_dx_Solicitado,
		   Atencion_tr_Descripcion, Atencion_tr_Observacion, Atencion_tr_Precio,
		   Atencion_IdDocumento, Atencion_Cita, Atencion_CitaEstado, Atencion_Estado, Atencion_FechaGra, Atencion_UserGrab)
		  VALUES
		  (Pint_IdAtencion, Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Sintomas,
		   Pvchr_Atencion_T, Pvchr_Atencion_FC, Pvchr_Atencion_FR,
		   Pvchr_Atencion_sc_Des, Pvchr_Atencion_sc_Muc, Pvchr_Atencion_sc_TLLC, Pvchr_Atencion_sc_Vom, Pvchr_Atencion_sc_Dia, Pvchr_Atencion_sc_Gan, Pvchr_Atencion_sc_Pes,
		   Pvchr_Atencion_dx_Pre, Pvchr_Atencion_dx_Def, Pvchr_Atencion_dx_Sol,
		   Pvchr_Atencion_tr_Des, Pvchr_Atencion_tr_Obs, Pflo_Atencion_tr_Pre,
		   Pint_Documento, Pint_Cita, Pchr_CitaEstado, Pint_Estado,NOW(), Pvchr_Usuario);
	 SELECT '1' AS Codigo,'0' AS CodigoVentaTmp;
	END IF;
ELSEIF Pint_IdTipoRegistro = 2 THEN
 IF Pint_Cita = 1 THEN
 /*VALIDAR QUE EXISTE STOCK*/
 IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 THEN
			  INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
               VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
               VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
                VALUES
               (Pint_IdTipoRegistro, Pint_IdAtencion, Pdat_Fecha, Pint_IdProducto, Pflo_Atencion_tr_Pre,
                Pint_IdMascota, Pvchr_Atencion_tr_Obs, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
                Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
/*				
			  INSERT INTO tblAtencionTemporal
			  (Atencion_IdVenta, Atencion_Fecha, Atencion_IdProducto, Atencion_IdMascota, Atencion_Sintomas,
			   Atencion_T, Atencion_FC, Atencion_FR,
			   Atencion_sc_Deshidratacion, Atencion_sc_Mucosas, Atencion_sc_TLLC, Atencion_sc_Vomitos, Atencion_sc_Diarreas, Atencion_sc_Ganglios, Atencion_sc_Peso,
			   Atencion_dx_Presuntivo, Atencion_dx_Definitivo, Atencion_dx_Solicitado,
			   Atencion_tr_Descripcion, Atencion_tr_Observacion, Atencion_tr_Precio,
			   Atencion_IdDocumento, Atencion_Cita, Atencion_CitaEstado, Atencion_Estado, Atencion_FechaGra, Atencion_UserGrab)
			  VALUES
			  (Pint_IdAtencion, Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Sintomas,
			   Pvchr_Atencion_T, Pvchr_Atencion_FC, Pvchr_Atencion_FR,
			   Pvchr_Atencion_sc_Des, Pvchr_Atencion_sc_Muc, Pvchr_Atencion_sc_TLLC, Pvchr_Atencion_sc_Vom, Pvchr_Atencion_sc_Dia, Pvchr_Atencion_sc_Gan, Pvchr_Atencion_sc_Pes,
			   Pvchr_Atencion_dx_Pre, Pvchr_Atencion_dx_Def, Pvchr_Atencion_dx_Sol,
			   Pvchr_Atencion_tr_Des, Pvchr_Atencion_tr_Obs, Pflo_Atencion_tr_Pre,
			   Pint_Documento, Pint_Cita, Pchr_CitaEstado, Pint_Estado,NOW(), Pvchr_Usuario);*/
 /* OBTIENE ID DE VENTATEMPORAL */
 SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
 SELECT '2' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
 ELSE
 SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
 END IF;
 ELSEIF Pint_Cita = 2 THEN
 /* cod 2 */
 SELECT '3' AS Codigo,'1' AS CodigoVenta;
 ELSEIF Pint_Cita = 3 THEN
 /* ACTUALIZA TBL ATENCION */
UPDATE tblAtencion 
SET -- Atencion_Id=[value-1],
-- Atencion_IdVenta=[value-2],
Atencion_Fecha=Pdat_Fecha,
-- Atencion_IdProducto=[value-4],
-- Atencion_IdMascota=[value-5],
Atencion_Sintomas=Pvchr_Sintomas,
Atencion_T=Pvchr_Atencion_T,
Atencion_FC=Pvchr_Atencion_FC,
Atencion_FR=Pvchr_Atencion_FR,
Atencion_sc_Deshidratacion=Pvchr_Atencion_sc_Des,
Atencion_sc_Mucosas=Pvchr_Atencion_sc_Muc,
Atencion_sc_TLLC=Pvchr_Atencion_sc_TLLC,
Atencion_sc_Vomitos=Pvchr_Atencion_sc_Vom,
Atencion_sc_Diarreas=Pvchr_Atencion_sc_Dia,
Atencion_sc_Ganglios=Pvchr_Atencion_sc_Gan,
Atencion_sc_Peso=Pvchr_Atencion_sc_Pes,
Atencion_dx_Presuntivo=Pvchr_Atencion_dx_Pre,
Atencion_dx_Definitivo=Pvchr_Atencion_dx_Def,
Atencion_dx_Solicitado=Pvchr_Atencion_dx_Sol,
Atencion_tr_Descripcion=Pvchr_Atencion_tr_Des,
Atencion_tr_Observacion=Pvchr_Atencion_tr_Obs,
Atencion_tr_Precio=Pflo_Atencion_tr_Pre,
Atencion_IdDocumento=1,
Atencion_Cita=3,
Atencion_CitaEstado='C',
-- Atencion_Estado=[value-26],
-- Atencion_FechaGra=[value-27],
-- Atencion_UserGrab=[value-28],
Atencion_FechaGrab_Edicion=NOW(),
Atencion_UserGrab_Edicion=Pvchr_Usuario WHERE Atencion_Id = Pint_IdAtencion;
 SELECT '2' AS Codigo,'0' AS CodigoVenta;

 END IF;
END IF;
END$$
DELIMITER ;



-- SHOW CREATE PROCEDURE 	SP_Eliminar_TblVentaDetalle_tmp

DROP PROCEDURE IF EXISTS SP_Eliminar_TblVentaDetalle_tmp;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblVentaDetalle_tmp (IN Pint_IdVentaDetalleTmp INT)
BEGIN
DELETE FROM tblVentaDetalle_tmp WHERE VentaDetalle_tmp_Id = Pint_IdVentaDetalleTmp;
END $$
DELIMITER ;



DROP PROCEDURE IF EXISTS SP_Registrar_TblAtencion;
DELIMITER $$
CREATE PROCEDURE `SP_Registrar_TblAtencion`(IN Pint_IdTipoRegistro INT,
                                               IN Pint_IdAtencion INT,                                                  
                                               IN Pdat_Fecha DATE,
											   IN Pint_IdProducto INT,
                                               IN Pint_IdMascota INT,
                                               IN Pvchr_Sintomas VARCHAR(3000),                                                
                                               IN Pvchr_Atencion_T VARCHAR(100),
                                               IN Pvchr_Atencion_FC VARCHAR(100),
                                               IN Pvchr_Atencion_FR VARCHAR(100),                                                  
                                               IN Pvchr_Atencion_sc_Des VARCHAR(100),
                                               IN Pvchr_Atencion_sc_Muc VARCHAR(100),
                                               IN Pvchr_Atencion_sc_TLLC VARCHAR(100),
                                               IN Pvchr_Atencion_sc_Vom VARCHAR(100),
                                               IN Pvchr_Atencion_sc_Dia VARCHAR(100),
                                               IN Pvchr_Atencion_sc_Gan VARCHAR(100),
                                               IN Pvchr_Atencion_sc_Pes VARCHAR(50),                                                  
                                               IN Pvchr_Atencion_dx_Pre VARCHAR(150),
                                               IN Pvchr_Atencion_dx_Def VARCHAR(150),
                                               IN Pvchr_Atencion_dx_Sol VARCHAR(150),
                                               IN Pvchr_Atencion_tr_Des VARCHAR(150),
                                               IN Pvchr_Atencion_tr_Obs VARCHAR(150),
                                               IN Pflo_Atencion_tr_Pre FLOAT,
                                               IN Pint_Documento INT,
                                               IN Pint_Cita INT,
                                               IN Pchr_CitaEstado CHAR(1),
                                               IN Pint_Estado INT,                                                
                                               IN Pvchr_Usuario VARCHAR(100),
                                               IN Pint_VentaTipo INT,
                                               IN Pint_IdAlmacen INT,
                                               IN Pint_IdVBDA INT)
BEGIN
DECLARE IdVentaTemporal INT;
DECLARE Pflo_Cantidad FLOAT;
DECLARE IdAtencionTemporal INT;
SET Pflo_Cantidad = 1;

IF Pint_IdTipoRegistro = 1 THEN

	IF Pint_Cita = 1 THEN /* REGISTRAR NUEVO */
		IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 THEN
		  INSERT INTO tblAtencionTemporal
		  (Atencion_IdVenta, Atencion_Fecha, Atencion_IdProducto, Atencion_IdMascota, Atencion_Sintomas,Atencion_T, Atencion_FC, Atencion_FR,
		  Atencion_sc_Deshidratacion, Atencion_sc_Mucosas, Atencion_sc_TLLC, Atencion_sc_Vomitos, Atencion_sc_Diarreas, Atencion_sc_Ganglios, Atencion_sc_Peso,
		  Atencion_dx_Presuntivo, Atencion_dx_Definitivo, Atencion_dx_Solicitado,Atencion_tr_Descripcion, Atencion_tr_Observacion, Atencion_tr_Precio,
		  Atencion_IdDocumento, Atencion_Cita, Atencion_CitaEstado, Atencion_Estado, Atencion_FechaGra, Atencion_UserGrab)
		  VALUES
		 (Pint_IdAtencion, Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Sintomas,Pvchr_Atencion_T, Pvchr_Atencion_FC, Pvchr_Atencion_FR,
		  Pvchr_Atencion_sc_Des, Pvchr_Atencion_sc_Muc, Pvchr_Atencion_sc_TLLC, Pvchr_Atencion_sc_Vom, Pvchr_Atencion_sc_Dia, Pvchr_Atencion_sc_Gan, Pvchr_Atencion_sc_Pes,
		  Pvchr_Atencion_dx_Pre, Pvchr_Atencion_dx_Def, Pvchr_Atencion_dx_Sol,Pvchr_Atencion_tr_Des, Pvchr_Atencion_tr_Obs, Pflo_Atencion_tr_Pre,
		  Pint_Documento, Pint_Cita, Pchr_CitaEstado, Pint_Estado,NOW(), Pvchr_Usuario);
		  SET IdAtencionTemporal = (SELECT Atencion_Id FROM tblAtencionTemporal ORDER BY Atencion_Id DESC LIMIT 1 );
		  INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
					  VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
					  VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
					   VALUES
					  (Pint_IdTipoRegistro, IdAtencionTemporal, Pdat_Fecha, Pint_IdProducto, Pflo_Atencion_tr_Pre,
					   Pint_IdMascota, Pvchr_Atencion_tr_Obs, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
					   Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());

		  /* OBTIENE ID DE VENTATEMPORAL */
		  SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
		  SELECT '1' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
		ELSE
		  SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
		END IF;
	ELSEIF Pint_Cita = 2 THEN /* AGENDAR */
		INSERT INTO tblAtencionTemporal
		 (Atencion_IdVenta, Atencion_Fecha, Atencion_IdProducto, Atencion_IdMascota, Atencion_Sintomas,Atencion_T, Atencion_FC, Atencion_FR,
		  Atencion_sc_Deshidratacion, Atencion_sc_Mucosas, Atencion_sc_TLLC, Atencion_sc_Vomitos, Atencion_sc_Diarreas, Atencion_sc_Ganglios, Atencion_sc_Peso,
		  Atencion_dx_Presuntivo, Atencion_dx_Definitivo, Atencion_dx_Solicitado,Atencion_tr_Descripcion, Atencion_tr_Observacion, Atencion_tr_Precio,
		  Atencion_IdDocumento, Atencion_Cita, Atencion_CitaEstado, Atencion_Estado, Atencion_FechaGra, Atencion_UserGrab)
		VALUES
		 (Pint_IdAtencion, Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Sintomas,Pvchr_Atencion_T, Pvchr_Atencion_FC, Pvchr_Atencion_FR,
		  Pvchr_Atencion_sc_Des, Pvchr_Atencion_sc_Muc, Pvchr_Atencion_sc_TLLC, Pvchr_Atencion_sc_Vom, Pvchr_Atencion_sc_Dia, Pvchr_Atencion_sc_Gan, Pvchr_Atencion_sc_Pes,
		  Pvchr_Atencion_dx_Pre, Pvchr_Atencion_dx_Def, Pvchr_Atencion_dx_Sol,Pvchr_Atencion_tr_Des, Pvchr_Atencion_tr_Obs, Pflo_Atencion_tr_Pre,
		  Pint_Documento, Pint_Cita, Pchr_CitaEstado, Pint_Estado,NOW(), Pvchr_Usuario);
		SET IdAtencionTemporal = (SELECT Atencion_Id FROM tblAtencionTemporal ORDER BY Atencion_Id DESC LIMIT 1 );

		/*INSERTA TBL ATENCION*/
		INSERT INTO tblAtencion
		 (Atencion_IdVenta, Atencion_Fecha, Atencion_IdProducto, Atencion_IdMascota, Atencion_Sintomas,Atencion_T, Atencion_FC, Atencion_FR,
		  Atencion_sc_Deshidratacion, Atencion_sc_Mucosas, Atencion_sc_TLLC, Atencion_sc_Vomitos, Atencion_sc_Diarreas, Atencion_sc_Ganglios, Atencion_sc_Peso,
		  Atencion_dx_Presuntivo, Atencion_dx_Definitivo, Atencion_dx_Solicitado,Atencion_tr_Descripcion, Atencion_tr_Observacion, Atencion_tr_Precio,
		  Atencion_IdDocumento, Atencion_Cita, Atencion_CitaEstado, Atencion_Estado, Atencion_FechaGra, Atencion_UserGrab)
		VALUES
		 (IdAtencionTemporal, Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Sintomas, Pvchr_Atencion_T, Pvchr_Atencion_FC, Pvchr_Atencion_FR,
		  Pvchr_Atencion_sc_Des, Pvchr_Atencion_sc_Muc, Pvchr_Atencion_sc_TLLC, Pvchr_Atencion_sc_Vom, Pvchr_Atencion_sc_Dia, Pvchr_Atencion_sc_Gan, Pvchr_Atencion_sc_Pes,
		  Pvchr_Atencion_dx_Pre, Pvchr_Atencion_dx_Def, Pvchr_Atencion_dx_Sol, Pvchr_Atencion_tr_Des, Pvchr_Atencion_tr_Obs, Pflo_Atencion_tr_Pre,
		  Pint_Documento, Pint_Cita, Pchr_CitaEstado, Pint_Estado,NOW(), Pvchr_Usuario);
		 SELECT '1' AS Codigo,'0' AS CodigoVentaTmp;
	END IF;
	
ELSEIF Pint_IdTipoRegistro = 2 THEN

	IF Pint_Cita = 1 THEN /* REGISTRAR VENTA CON DATO AGENDADO */
		IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 THEN
			INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
					  VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
					  VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
					   VALUES
					  (Pint_IdTipoRegistro, Pint_IdVBDA, Pdat_Fecha, Pint_IdProducto, Pflo_Atencion_tr_Pre,
					   Pint_IdMascota, Pvchr_Atencion_tr_Obs, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
					   Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
			SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
			SELECT '2' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
		ELSE
			SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
		END IF;
	ELSEIF Pint_Cita = 2 THEN
		/* cod 2 */
		SELECT '3' AS Codigo,'1' AS CodigoVenta;
	ELSEIF Pint_Cita = 3 THEN /* AGENDAR REPROGRAMACION */
		UPDATE tblAtencion
		SET -- Atencion_Id=[value-1],
		-- Atencion_IdVenta=[value-2],
		Atencion_Fecha=Pdat_Fecha,
		-- Atencion_IdProducto=[value-4],
		-- Atencion_IdMascota=[value-5],
		Atencion_Sintomas=Pvchr_Sintomas,
		Atencion_T=Pvchr_Atencion_T,
		Atencion_FC=Pvchr_Atencion_FC,
		Atencion_FR=Pvchr_Atencion_FR,
		Atencion_sc_Deshidratacion=Pvchr_Atencion_sc_Des,
		Atencion_sc_Mucosas=Pvchr_Atencion_sc_Muc,
		Atencion_sc_TLLC=Pvchr_Atencion_sc_TLLC,
		Atencion_sc_Vomitos=Pvchr_Atencion_sc_Vom,
		Atencion_sc_Diarreas=Pvchr_Atencion_sc_Dia,
		Atencion_sc_Ganglios=Pvchr_Atencion_sc_Gan,
		Atencion_sc_Peso=Pvchr_Atencion_sc_Pes,
		Atencion_dx_Presuntivo=Pvchr_Atencion_dx_Pre,
		Atencion_dx_Definitivo=Pvchr_Atencion_dx_Def,
		Atencion_dx_Solicitado=Pvchr_Atencion_dx_Sol,
		Atencion_tr_Descripcion=Pvchr_Atencion_tr_Des,
		Atencion_tr_Observacion=Pvchr_Atencion_tr_Obs,
		Atencion_tr_Precio=Pflo_Atencion_tr_Pre,
		Atencion_IdDocumento=1,
		Atencion_Cita=3,
		Atencion_CitaEstado='C',
		-- Atencion_Estado=[value-26],
		-- Atencion_FechaGra=[value-27],
		-- Atencion_UserGrab=[value-28],
		Atencion_FechaGrab_Edicion=NOW(),
		Atencion_UserGrab_Edicion=Pvchr_Usuario WHERE Atencion_Id = Pint_IdAtencion;
		SELECT '2' AS Codigo,'0' AS CodigoVenta;
	END IF;
	
END IF;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Eliminar_TblVenta_Total;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblVenta_Total(IN Pint_IdVenta INT, IN Pint_IdVentatmp INT, IN Pvchr_Usuario VARCHAR(50),
IN Pint_IdVBDA INT, IN Pint_ProcesoVBDA INT, IN Pint_Atencion_Agen INT, IN Pint_TipoVenta INT)
BEGIN
   CALL SP_Eliminar_TblVenta(Pint_IdVenta);
   CALL SP_Actualizar_TblAlmacen_CancelamientoVenta(Pint_IdVentatmp,Pvchr_Usuario);
	DELETE FROM tblVenta_tmp WHERE Venta_tmp_Id  = Pint_IdVentatmp;
	DELETE FROM tblVentaDetalle_tmp WHERE VentaDetalle_tmp_VentaId = Pint_IdVentatmp;
	-- SERVICIOS
	IF Pint_ProcesoVBDA = 1 THEN
		IF Pint_Atencion_Agen = 0 THEN /* VENTA DIRECTA SIN AGENDAR */
			IF Pint_TipoVenta = 1 THEN
				UPDATE tblVacunas SET Vacunas_Estado = 2, Vacunas_Precio = 0, Vacunas_CitaEstado = 'X', Vacunas_Cita = 3,Vacunas_FechaGrab_Edicion = NOW(),Vacunas_UserGrab_Edicion = Pvchr_Usuario
				WHERE Vacunas_Id = Pint_IdVBDA;
				SELECT '1' AS CODIGO;
			ELSEIF Pint_TipoVenta = 2 THEN
				UPDATE tblBanio SET Banio_Estado = 2, Banio_Precio = 0, Banio_CitaEstado = 'X',Banio_Cita = 1, Banio_FechaGrab_Edicion = NOW(), Banio_UserGrab_Edicion = Pvchr_Usuario
				WHERE Banio_Id = Pint_IdVBDA;
				SELECT '1' AS CODIGO;
			ELSEIF Pint_TipoVenta = 3 THEN
				UPDATE tblDesparacitacion SET Desparacitacion_Estado = 2, Desparacitacion_Precio = 0, Desparacitacion_CitaEstado = 'X', Desparacitacion_Cita = 1, Desparacitacion_FechaGrab_Edicion = NOW(), Desparacitacion_UserGrab_Edicion = Pvchr_Usuario
				WHERE Desparacitacion_Id = Pint_IdVBDA;
				SELECT '1' AS CODIGO;
			ELSEIF Pint_TipoVenta = 4 THEN
				UPDATE tblAtencion SET Atencion_Estado = 2 ,Atencion_tr_Precio = 0, Atencion_CitaEstado = 'X', Atencion_Cita = 1, Atencion_FechaGrab_Edicion = NOW(), Atencion_UserGrab_Edicion = Pvchr_Usuario
				WHERE Atencion_Id = Pint_IdVBDA;
				SELECT '1' AS CODIGO;
			END IF;
		ELSE /* VENTA INDIRECTA AGENDADA */
			IF Pint_TipoVenta = 1 THEN
				UPDATE tblVacunas SET Vacunas_IdVenta = 0, Vacunas_Precio = 0, Vacunas_CitaEstado = 'A', Vacunas_Cita = 3,Vacunas_FechaGrab_Edicion = NOW(),Vacunas_UserGrab_Edicion = Pvchr_Usuario
				WHERE Vacunas_Id  = Pint_IdVBDA;
				SELECT '1' AS CODIGO;
			ELSEIF Pint_TipoVenta = 2 THEN
				UPDATE tblBanio SET Banio_IdVenta = 0, Banio_Precio = 0, Banio_CitaEstado = 'A',Banio_Cita = 1, Banio_FechaGrab_Edicion = NOW(), Banio_UserGrab_Edicion = Pvchr_Usuario
				WHERE Banio_Id  = Pint_IdVBDA;
				SELECT '1' AS CODIGO;
			ELSEIF Pint_TipoVenta = 3 THEN
				UPDATE tblDesparacitacion SET Desparacitacion_IdVenta = 0, Desparacitacion_Precio = 0, Desparacitacion_CitaEstado = 'A', Desparacitacion_Cita = 1, Desparacitacion_FechaGrab_Edicion = NOW(), Desparacitacion_UserGrab_Edicion = Pvchr_Usuario
				WHERE Banio_Id  = Pint_IdVBDA;
				SELECT '1' AS CODIGO;
			ELSEIF Pint_TipoVenta = 4 THEN
				UPDATE tblAtencion SET Atencion_IdVenta = 0, Atencion_tr_Precio = 0, Atencion_CitaEstado = 'A', Atencion_Cita = 1, Atencion_FechaGrab_Edicion = NOW(), Atencion_UserGrab_Edicion = Pvchr_Usuario
				WHERE Atencion_Id = Pint_IdVBDA;
				SELECT '1' AS CODIGO;
			END IF;
		END IF;
	END IF;
	
	-- FIN SERVICIOS
   SELECT '1' AS CODIGO;
END$$
DELIMITER ;


----------------

DROP PROCEDURE IF EXISTS SP_Eliminar_TblVenta;
DELIMITER $$
CREATE PROCEDURE SP_Eliminar_TblVenta(IN Pint_IdVenta INT)
BEGIN
UPDATE tblVenta SET Venta_Estado = 2 WHERE Venta_Id = Pint_IdVenta;
UPDATE tblVentaDetalle SET VentaDetalle_Estado = 2 WHERE VentaDetalle_VentaId = Pint_IdVenta;
END$$
DELIMITER ;


---------------
DROP PROCEDURE IF EXISTS SP_Actualizar_TblAlmacen_CancelamientoVenta;
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblAlmacen_CancelamientoVenta(IN Pint_IdVenta INT,IN Pvchr_Usuario VARCHAR(50))
BEGIN
 DECLARE Producto FLOAT DEFAULT 0;
 DECLARE Cantidad FLOAT DEFAULT 0;
 DECLARE Fin INT DEFAULT FALSE;
 DECLARE IdSede INT;

  DEClARE curC CURSOR FOR SELECT VentaDetalle_IdProducto,VentaDetalle_Cantidad FROM tblVentaDetalle WHERE VentaDetalle_VentaId = Pint_IdVenta;
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET Fin = 1;
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
 

  END LOOP GetCompraDet;
  CLOSE curC;
 
  SELECT '1' AS CODIGO;
     
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_TblVenta_All_x_Condicion;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblVenta_All_x_Condicion(IN Pint_Condicion INT, IN Pint_IdVenta INT)
BEGIN
IF Pint_Condicion = 1 THEN
SELECT tv.Venta_Id, tv.Venta_Fecha,
CASE WHEN LENGTH( tm.Mascota_Id) = 1 THEN CONCAT('M000',tm.Mascota_Id,':',tm.Mascota_Nombre)
     WHEN LENGTH( tm.Mascota_Id) = 2 THEN CONCAT('M00',tm.Mascota_Id,':',tm.Mascota_Nombre)
     WHEN LENGTH( tm.Mascota_Id) = 3 THEN CONCAT('M0',tm.Mascota_Id,':',tm.Mascota_Nombre)
     WHEN LENGTH( tm.Mascota_Id) = 4 THEN CONCAT('M',tm.Mascota_Id,':',tm.Mascota_Nombre)
     ELSE 'ERROR' END AS Mascota_Nombre,
tv.Venta_IdAlmacen, tv.Venta_TipoPago, tv.Venta_PrecioTotal, tv.Venta_FechaGra, tv.Venta_UserGrab 
FROM tblVenta tv LEFT JOIN tblMascota tm ON tv.Venta_IdMascota = tm.Mascota_Id
WHERE Venta_Estado = 1;
ELSEIF Pint_Condicion = 2 THEN
SELECT tv.Venta_Id, tv.Venta_Fecha,
CASE WHEN LENGTH( tm.Mascota_Id) = 1 THEN CONCAT('M000',tm.Mascota_Id,':',tm.Mascota_Nombre)
     WHEN LENGTH( tm.Mascota_Id) = 2 THEN CONCAT('M00',tm.Mascota_Id,':',tm.Mascota_Nombre)
     WHEN LENGTH( tm.Mascota_Id) = 3 THEN CONCAT('M0',tm.Mascota_Id,':',tm.Mascota_Nombre)
     WHEN LENGTH( tm.Mascota_Id) = 4 THEN CONCAT('M',tm.Mascota_Id,':',tm.Mascota_Nombre)
     ELSE 'ERROR' END AS Mascota_Nombre,
tv.Venta_IdAlmacen, tv.Venta_TipoPago, tv.Venta_PrecioTotal, tv.Venta_FechaGra, tv.Venta_UserGrab 
FROM tblVenta tv LEFT JOIN tblMascota tm ON tv.Venta_IdMascota = tm.Mascota_Id
WHERE Venta_Estado = 1 AND Venta_Id = Pint_IdVenta;
END IF;
END$$
DELIMITER ;


CREATE FUNCTION `FUN_Actualizar_TblAlmacen_Por_EliminacionCompra`(`Pint_IdCompra` INT) RETURNS INT NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER BEGIN
 DECLARE Producto FLOAT DEFAULT 0;
 DECLARE Cantidad FLOAT DEFAULT 0;
 DECLARE IdProceso FLOAT DEFAULT 0; 
 DECLARE Fin INT DEFAULT FALSE;
 DECLARE IdSede INT;

  DEClARE curC CURSOR FOR SELECT CompraDetalle_IdProducto,CompraDetalle_Cantidad FROM tblCompraDetalle WHERE CompraDetalle_CompraId = Pint_IdCompra;
  
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET Fin = 1;
  SET IdSede = (SELECT Compra_Sede FROM tblCompra WHERE Compra_Id = Pint_IdCompra);
  OPEN curC;
  GetCompraDet: LOOP  
      FETCH curC INTO Producto,Cantidad;
      IF Fin = 1 THEN
          LEAVE GetCompraDet;
      END IF;

 	IF EXISTS(SELECT Almacen_Cantidad 
              FROM tblAlmacen WHERE Almacen_IdProducto = Producto AND Almacen_IdSede = IdSede AND Almacen_Cantidad < Cantidad) THEN
    SET IdProceso = '1';
    END IF;

  END LOOP GetCompraDet;
  CLOSE curC;

  RETURN IdProceso;
  
 
  -- CALL SP_Eliminar_TblCompra(Pint_IdCompra);
  
     
END





DROP PROCEDURE IF EXISTS SP_Actualizar_TblVenta_Validando_Stock;
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblVenta_Validando_Stock(IN Pint_IdVenta INT, IN Pdat_Fecha DATE, IN Pint_IdAlmacenNuevo INT, IN Pint_TipoPago INT, Pvchr_Usuario VARCHAR(100))
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
   
END$$
DELIMITER ;


--------
---------------------

DROP PROCEDURE IF EXISTS SP_Actualizar_TblAlmacen_Por_EliminacionVenta;
DELIMITER $$
CREATE PROCEDURE SP_Actualizar_TblAlmacen_Por_EliminacionVenta(IN Pint_IdVenta INT, IN Pvchr_Usuario VARCHAR(100))
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
   
END$$
DELIMITER ;

DROP VIEW IF EXISTS View_tbl_Servicios_Solo_Realizados;
CREATE VIEW View_tbl_Servicios_Solo_Realizados
AS
select tv.Vacunas_Id AS Vacunas_Id,
case when length(tv.Vacunas_Id) = 1 then concat('V000',tv.Vacunas_Id) 
when length(tv.Vacunas_Id) = 2 then concat('V00',tv.Vacunas_Id) 
when length(tv.Vacunas_Id) = 3 then concat('V0',tv.Vacunas_Id) 
when length(tv.Vacunas_Id) = 4 then concat('V',tv.Vacunas_Id) else 'ERROR' end AS Codigo,
tv.Vacunas_IdVenta AS Venta,tv.Vacunas_Fecha AS Fecha,'VACUNA' AS SERVICIO,
case when tv.Vacunas_Cita = 1 then 'REALIZADO'  ELSE '' END AS Atencion,
tp.Producto_Nombre AS Producto_Nombre,tv.Vacunas_IdMascota AS Id_Mascota,
case when length(tv.Vacunas_IdMascota) = 1 then concat('M000',tv.Vacunas_IdMascota) 
when length(tv.Vacunas_IdMascota) = 2 then concat('M00',tv.Vacunas_IdMascota) 
when length(tv.Vacunas_IdMascota) = 3 then concat('M0',tv.Vacunas_IdMascota) 
when length(tv.Vacunas_IdMascota) = 4 then concat('M',tv.Vacunas_IdMascota) else 'ERROR' end AS Mascota_Id,
tm.Mascota_Nombre,tv.Vacunas_Observacion AS Observacion,
tv.Vacunas_Precio AS Precio 
from tblVacunas tv left join tblProducto tp ON tv.Vacunas_IdProducto = tp.Producto_Id 
				   left join tblMascota tm ON tv.Vacunas_IdMascota = tm.Mascota_Id
where tv.Vacunas_Cita in (1)
union 
select tb.Banio_Id AS Banio_Id,
case when length(tb.Banio_Id) = 1 then concat('B000',tb.Banio_Id) 
when length(tb.Banio_Id) = 2 then concat('B00',tb.Banio_Id) 
when length(tb.Banio_Id) = 3 then concat('B0',tb.Banio_Id) 
when length(tb.Banio_Id) = 4 then concat('V',tb.Banio_Id) else 'ERROR' end AS Codigo,
tb.Banio_IdVenta AS Banio_IdVenta,tb.Banio_Fecha AS Banio_Fecha,'BAÑO' AS SERVICIO,
case when tb.Banio_Cita = 1 then 'REALIZADO' end AS Atencion,
tp.Producto_Nombre AS Producto_Nombre,tb.Banio_IdMascota AS Id_Mascota,
case when length(tb.Banio_IdMascota) = 1 then concat('M000',tb.Banio_IdMascota) 
when length(tb.Banio_IdMascota) = 2 then concat('M00',tb.Banio_IdMascota) 
when length(tb.Banio_IdMascota) = 3 then concat('M0',tb.Banio_IdMascota) 
when length(tb.Banio_IdMascota) = 4 then concat('M',tb.Banio_IdMascota) else 'ERROR' end AS Mascota_Id,
tm.Mascota_Nombre,tb.Banio_Observacion AS Observacion,
tb.Banio_Precio AS Banio_Precio 
from tblBanio tb left join tblProducto tp ON tb.Banio_IdProducto = tp.Producto_Id
				 left join tblMascota tm ON tb.Banio_IdMascota = tm.Mascota_Id
where tb.Banio_Cita in (1) 
union 
select td.Desparacitacion_Id AS Desparacitacion_Id,
case when length(td.Desparacitacion_Id) = 1 then concat('D000',td.Desparacitacion_Id)
when length(td.Desparacitacion_Id) = 2 then concat('D00',td.Desparacitacion_Id) 
when length(td.Desparacitacion_Id) = 3 then concat('D0',td.Desparacitacion_Id) 
when length(td.Desparacitacion_Id) = 4 then concat('V',td.Desparacitacion_Id) else 'ERROR' end AS Codigo,
td.Desparacitacion_IdVenta AS Desparacitacion_IdVenta,td.Desparacitacion_Fecha AS Desparacitacion_Fecha,'DESPARACITACIÓN' AS SERVICIO,
case when td.Desparacitacion_Cita = 1 then 'REALIZADO'  end AS Atencion,
tp.Producto_Nombre AS Producto_Nombre,td.Desparacitacion_IdMascota AS Id_Mascota,
case when length(td.Desparacitacion_IdMascota) = 1 then concat('M000',td.Desparacitacion_IdMascota) 
when length(td.Desparacitacion_IdMascota) = 2 then concat('M00',td.Desparacitacion_IdMascota) 
when length(td.Desparacitacion_IdMascota) = 3 then concat('M0',td.Desparacitacion_IdMascota) 
when length(td.Desparacitacion_IdMascota) = 4 then concat('M',td.Desparacitacion_IdMascota) else 'ERROR' end AS Mascota_Id,
tm.Mascota_Nombre,td.Desparacitacion_Observacion AS Observacion,
td.Desparacitacion_Precio AS Desparacitacion_Precio 
from tblDesparacitacion td left join tblProducto tp ON td.Desparacitacion_IdProducto = tp.Producto_Id 
						   left join tblMascota tm on(td.Desparacitacion_IdMascota = tm.Mascota_Id)
where td.Desparacitacion_Cita in (1) 
union 
select ta.Atencion_Id AS Atencion_Id,
case when length(ta.Atencion_Id) = 1 then concat('A000',ta.Atencion_Id) 
when length(ta.Atencion_Id) = 2 then concat('A00',ta.Atencion_Id) 
when length(ta.Atencion_Id) = 3 then concat('A0',ta.Atencion_Id) 
when length(ta.Atencion_Id) = 4 then concat('V',ta.Atencion_Id) else 'ERROR' end AS Codigo,
ta.Atencion_IdVenta AS Atencion_IdVenta,ta.Atencion_Fecha AS Atencion_Fecha,'ATENCIÓN' AS SERVICIO,
case when ta.Atencion_Cita = 2 then 'REALIZADO' end AS Atencion,
tp.Producto_Nombre AS Producto_Nombre,ta.Atencion_IdMascota AS Id_Mascota,
case when length(ta.Atencion_IdMascota) = 1 then concat('M000',ta.Atencion_IdMascota) 
when length(ta.Atencion_IdMascota) = 2 then concat('M00',ta.Atencion_IdMascota) 
when length(ta.Atencion_IdMascota) = 3 then concat('M0',ta.Atencion_IdMascota) 
when length(ta.Atencion_IdMascota) = 4 then concat('M',ta.Atencion_IdMascota) else 'ERROR' end AS Mascota_Id,
tm.Mascota_Nombre,ta.Atencion_tr_Observacion AS Atencion_tr_Observacion,
ta.Atencion_tr_Precio AS Atencion_tr_Precio 
from tblAtencion ta left join tblProducto tp ON ta.Atencion_IdProducto = tp.Producto_Id left join tblMascota tm ON ta.Atencion_IdMascota = tm.Mascota_Id
where ta.Atencion_Cita in (1)


DROP PROCEDURE IF EXISTS SP_Obtener_Servicios_Realizados_x_Mascota;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_Servicios_Realizados_x_Mascota(IN Pint_IdMascota INT)
BEGIN
SELECT * FROM View_tbl_Servicios_Solo_Realizados WHERE Id_Mascota = Pint_IdMascota;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_Encabezado_Hc_x_IdMascota;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_Encabezado_Hc_x_IdMascota(IN Pint_IdMascota INT)
BEGIN
SELECT tm.Mascota_Id,tm.Mascota_Nombre,te.Especie_Nombre,tr.Raza_Nombre,CASE WHEN tm.Mascota_IdSexo = 1 THEN 'MACHO' WHEN tm.Mascota_IdSexo = 2 THEN 'HEMBRA' END AS Mascota_IdSexo,tm.Mascota_Color,
TIMESTAMPDIFF(YEAR,tm.Mascota_FechaNac,CURDATE()) AS Mascota_Edad,tc.Cliente_Id,tc.Cliente_Dni,tc.Cliente_Nombre,tc.Cliente_Apellido,CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS Cliente_NombreCompleto,
CONCAT(tc.Cliente_Distrito,'-',tc.Cliente_Direccion) AS Cliente_Direccion,tc.Cliente_TelefonoCel,tc.Cliente_Email
FROM tblMascota tm LEFT JOIN  tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id
LEFT JOIN tblEspecie te ON tm.Mascota_IdEspecie = te.Especie_Id
LEFT JOIN tblRaza tr ON tm.Mascota_IdRaza = tr.Raza_Id
WHERE tm.Mascota_Id = Pint_IdMascota;
END$$
DELIMITER ;


-- SHOW CREATE PROCEDURE SP_Obtener_TblBanio_x_IdMascota

CREATE DEFINER=`gavet`@`localhost` PROCEDURE `SP_Obtener_TblBanio_x_IdMascota`(IN `IdMascota` INT)
BEGIN
SELECT
case when length(tb.Banio_Id) = 1 then concat('B000',tb.Banio_Id)
when length(tb.Banio_Id) = 2 then concat('B00',tb.Banio_Id)
when length(tb.Banio_Id) = 3 then concat('B0',tb.Banio_Id)
when length(tb.Banio_Id) = 4 then concat('V',tb.Banio_Id) else 'ERROR' end AS Codigo,tb.Banio_Fecha,tp.Producto_Nombre,tb.Banio_Precio
FROM tblBanio tb LEFT JOIN tblMascota tm ON tb.Banio_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON tb.Banio_IdProducto = tp.Producto_Id
LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id
WHERE tb.Banio_Estado = 1 AND tb.Banio_IdMascota = IdMascota AND tb.Banio_Cita = 1;

/*
SELECT tb.Banio_Id,
case when length(tb.Banio_Id) = 1 then concat('B000',tb.Banio_Id)
when length(tb.Banio_Id) = 2 then concat('B00',tb.Banio_Id)
when length(tb.Banio_Id) = 3 then concat('B0',tb.Banio_Id)
when length(tb.Banio_Id) = 4 then concat('V',tb.Banio_Id) else 'ERROR' end AS Codigo,
tc.Cliente_Id,tc.Cliente_Dni,CONCAT(tc.Cliente_Nombre,' ',tc.Cliente_Apellido) AS Cliente_NombreCompleto,
tm.Mascota_Id,tm.Mascota_Nombre,tp.Producto_Id,tp.Producto_Nombre,tp.Producto_PrecioVenta,tb.Banio_Cita,tb.Banio_Fecha,tb.Banio_Observacion
FROM tblBanio tb LEFT JOIN tblMascota tm ON tb.Banio_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON tb.Banio_IdProducto = tp.Producto_Id
LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id
WHERE tb.Banio_Estado = 1 AND tb.Banio_IdMascota = IdMascota AND tb.Banio_Cita = 1;
*/
END
utf8mb4
utf8mb4_unicode_ci
latin1_spanish_ci


-- DROP PROCEDURE IF EXISTS SP_Obtener_TblDesparacitacion_x_IdMascota;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblDesparacitacion_x_IdMascota(IN Pint_IdMascota INT)
BEGIN
SELECT
case when length(td.Desparacitacion_Id) = 1 then concat('D000',td.Desparacitacion_Id)
when length(td.Desparacitacion_Id) = 2 then concat('D00',td.Desparacitacion_Id) 
when length(td.Desparacitacion_Id) = 3 then concat('D0',td.Desparacitacion_Id) 
when length(td.Desparacitacion_Id) = 4 then concat('V',td.Desparacitacion_Id) else 'ERROR' end AS Codigo,td.Desparacitacion_Fecha,tp.Producto_Nombre,tp.Producto_PrecioVenta
FROM tblDesparacitacion td LEFT JOIN tblMascota tm ON td.Desparacitacion_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON td.Desparacitacion_IdProducto = tp.Producto_Id
LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id
WHERE td.Desparacitacion_Estado = 1 AND td.Desparacitacion_IdMascota = Pint_IdMascota AND Desparacitacion_Cita = 1;
END$$
DELIMITER ;


DROP PROCEDURE IF EXISTS SP_Obtener_TblVacunas_x_IdMascota;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblVacunas_x_IdMascota(IN Pint_IdMascota INT)
BEGIN
select
case when length(tv.Vacunas_Id) = 1 then concat('V000',tv.Vacunas_Id) 
when length(tv.Vacunas_Id) = 2 then concat('V00',tv.Vacunas_Id) 
when length(tv.Vacunas_Id) = 3 then concat('V0',tv.Vacunas_Id) 
when length(tv.Vacunas_Id) = 4 then concat('V',tv.Vacunas_Id) else 'ERROR' end AS Codigo,tv.Vacunas_Fecha,tp.Producto_Nombre,tv.Vacunas_Precio
FROM tblVacunas tv LEFT JOIN tblMascota tm ON tv.Vacunas_IdMascota = tm.Mascota_Id
LEFT JOIN tblProducto tp ON tv.Vacunas_IdProducto = tp.Producto_Id
LEFT JOIN tblCliente tc ON tm.Mascota_IdCliente = tc.Cliente_Id
WHERE tv.Vacunas_Estado = 1 AND tv.Vacunas_IdMascota = Pint_IdMascota AND Vacunas_Cita = 1;
END$$
DELIMITER ;


CREATE TABLE tblIngresosEgresos(
	IngEgr_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    IngEgr_Fecha DATE NOT NULL,
    IngEgr_Tipo INT,
    IngEgr_Monto FLOAT,
    IngEgr_Documento VARCHAR(50),
    IngEgr_Observacion VARCHAR(500),
    IngEgr_FechaGra DATETIME,
    IngEgr_UserGrab VARCHAR(50)
)





-----------
-------------------------

DROP PROCEDURE IF EXISTS SP_Obtener_tblIngresosEgresos_All;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_tblIngresosEgresos_All()
BEGIN
SELECT @numero:=@numero+1 AS Orden,
1 AS CODIGO,CONCAT('V',Venta_Id) as ID,Venta_Fecha AS FECHA,'VENTA' AS TIPO_VENTA,
case when length(Venta_Id) = 1 then concat('VT000',Venta_Id) 
when length(Venta_Id) = 2 then concat('VT00',Venta_Id) 
when length(Venta_Id) = 3 then concat('VT0',Venta_Id) 
when length(Venta_Id) = 4 then concat('V',Venta_Id) else 'ERROR' end AS CODIGO_VENTA,
Venta_PrecioTotal AS PRECIO_VENTA,'-' AS TIPO_COMPRA,'-'  AS CODIGO_COMPRA,'-' AS PRECIO_COMPRA  FROM tblVenta where Venta_Fecha = '2020-04-08'
UNION
SET @numero=0;
SELECT @numero:=@numero+1 AS Orden,
2,CONCAT('C',Compra_Id) as ID,Compra_Fecha AS FECHA,'-','-','-','COMPRA' AS TIPO,
case when length(Compra_Id) = 1 then concat('CO000',Compra_Id) 
when length(Compra_Id) = 2 then concat('CO00',Compra_Id) 
when length(Compra_Id) = 3 then concat('CO0',Compra_Id) 
when length(Compra_Id) = 4 then concat('CO',Compra_Id) else 'ERROR' end AS Codigo,
Compra_PrecioTotal FROM tblCompra where Compra_Fecha = '2020-04-08';
END$$
DELIMITER ;

-
DROP PROCEDURE IF EXISTS SP_Obtener_tblIngresosEgresos_All;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_tblIngresosEgresos_All()
BEGIN
SET @numero=0;
SELECT @numero:=@numero+1 AS Orden,
NRO, ID, FECHA, TIPO_VENTA, CODIGO_VENTA, PRECIO_VENTA, TIPO_COMPRA, CODIGO_COMPRA, PRECIO_COMPRA, OBSERVACION FROM View_CuadroCaja;
END$$
DELIMITER ;

-



DROP PROCEDURE IF EXISTS SP_Registrar_TblIngresosEgresos_All;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblIngresosEgresos_All(IN Pdate_Fecha DATE, 
                                                     IN Pint_Tipo INT,
                                                     IN Pflo_Monto FLOAT,
                                                     IN Pvchr_Documento VARCHAR(30),
                                                     IN Pvchr_Observacion VARCHAR(100),
                                                     IN Pdat_FecGrabacion DATETIME,
                                                     IN Pdat_UserGrabacion VARCHAR(50))
BEGIN
INSERT INTO tblIngresosEgresos
(IngEgr_Fecha, IngEgr_Tipo, IngEgr_Monto, IngEgr_Documento, IngEgr_Observacion, IngEgr_FechaGra, IngEgr_UserGrab) 
VALUES
(Pdate_Fecha, Pint_Tipo, Pflo_Monto, Pvchr_Documento, Pvchr_Observacion, Pdat_FecGrabacion, Pdat_UserGrabacion);
END $$
DELIMITER ;



DROP VIEW IF EXISTS View_CuadroCaja;
CREATE VIEW View_CuadroCaja
AS
SELECT 1 ,CONCAT('V',Venta_Id) as ID,Venta_Fecha AS FECHA,'VENTA' AS TIPO_VENTA,
case when length(Venta_Id) = 1 then concat('VT000',Venta_Id) 
when length(Venta_Id) = 2 then concat('VT00',Venta_Id) 
when length(Venta_Id) = 3 then concat('VT0',Venta_Id) 
when length(Venta_Id) = 4 then concat('V',Venta_Id) else 'ERROR' end AS CODIGO_VENTA,
ROUND(Venta_PrecioTotal,2) AS PRECIO_VENTA,'--' AS TIPO_COMPRA,'--'  AS CODIGO_COMPRA,'--' AS PRECIO_COMPRA,
Venta_Observacion AS OBSERVACION
FROM tblVenta where Venta_Fecha = '2020-04-08'
UNION
SELECT 2,CONCAT('C',Compra_Id) as ID,Compra_Fecha AS FECHA,'--','--','--','COMPRA' AS TIPO,
case when length(Compra_Id) = 1 then concat('CO000',Compra_Id) 
when length(Compra_Id) = 2 then concat('CO00',Compra_Id) 
when length(Compra_Id) = 3 then concat('CO0',Compra_Id) 
when length(Compra_Id) = 4 then concat('CO',Compra_Id) else 'ERROR' end AS Codigo,
ROUND(Compra_PrecioTotal,2),
Compra_Observacion
FROM tblCompra where Compra_Fecha = '2020-04-08'
UNION
-- SALIDA 
SELECT 3,CONCAT('I',IngEgr_Id),IngEgr_Fecha,'RETIRO','--',
ROUND(IngEgr_Monto,2),'--','--','--',IngEgr_Observacion FROM tblIngresosEgresos WHERE IngEgr_Tipo = 2
UNION
-- INGRESO
SELECT 4,CONCAT('I',IngEgr_Id),IngEgr_Fecha,'--','--','--','INGRESO','--',
ROUND(IngEgr_Monto,2), IngEgr_Observacion FROM tblIngresosEgresos WHERE IngEgr_Tipo = 1;



DROP PROCEDURE IF EXISTS SP_Registrar_TblIngresosEgresos;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblIngresosEgresos(IN Pdate_Fecha DATE, 
                                                     IN Pint_Tipo INT,
                                                     IN Pflo_Monto FLOAT,
                                                     IN Pvchr_Documento VARCHAR(30),
                                                     IN Pvchr_Observacion VARCHAR(100),
                                                     IN Pvhcr_UserGrabacion VARCHAR(50))
BEGIN
DECLARE NUMERO INT;
INSERT INTO tblIngresosEgresos
  (IngEgr_Fecha
 , IngEgr_Tipo
 , IngEgr_Monto
 , IngEgr_Documento
 , IngEgr_Observacion
 , IngEgr_FechaGra
 , IngEgr_UserGrab) 
VALUES
  (Pdate_Fecha
 , Pint_Tipo
 , Pflo_Monto
 , Pvchr_Documento
 , Pvchr_Observacion
 , NOW(),
   Pvhcr_UserGrabacion);
 SELECT IngEgr_Id FROM tblIngresosEgresos ORDER BY IngEgr_Id DESC LIMIT 1;
END $$
DELIMITER ;


CREATE TABLE tblMovimiento(
	Movimiento_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Movimiento_fecha DATE,
    Movimiento_sedeAnterior INT,
    Movimiento_SedeNueva INT,
    Movimiento_Cantidad FLOAT,
    Movimiento_Observacion VARCHAR(100),
    Movimiento_Usuario VARCHAR(50),
    Movimiento_FechaGrabacion DATETIME)


DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblSede_Nombre_x_Id(IN Pint_IdSede INT)
BEGIN
SELECT Sede_Id,Sede_Nombre FROM tblSede WHERE Sede_Estado = 1 AND Sede_Id = Pint_IdSede;
END$$
DELIMITER ;    


DROP PROCEDURE IF EXISTS SP_Registrar_TblMovimiento;
DELIMITER $$
CREATE PROCEDURE SP_Registrar_TblMovimiento(IN Pdate_Fecha DATE, 
                                            IN Pint_Almacen INT,
                                            IN Pint_SedeNueva INT,
                                            IN Pflo_Cantidad FLOAT,
                                            IN Pvchr_Observacion VARCHAR(1000),
                                            IN Pvhcr_UserGrabacion VARCHAR(50),
                                            IN Pint_Producto INT,
                                            IN Pint_SedeAnterior INT)
BEGIN
	-- DISMINUIR ALMACEN
  UPDATE tblAlmacen 
  SET Almacen_Cantidad = Almacen_Cantidad - Pflo_Cantidad, Almacen_FechaGrab_Edicion = NOW(), Almacen_UserGrab_Edicion = Pvhcr_UserGrabacion
  WHERE Almacen_Id = Pint_Almacen AND Almacen_Estado = 1;
	-- AUMENTAR ALMACEN
  	IF EXISTS(SELECT * FROM tblAlmacen 
              WHERE Almacen_IdSede = Pint_SedeNueva AND Almacen_IdProducto = Pint_Producto AND Almacen_Estado = 1)THEN
  	UPDATE tblAlmacen 
  	SET Almacen_Cantidad = Almacen_Cantidad + Pflo_Cantidad, Almacen_FechaGrab_Edicion = NOW(), Almacen_UserGrab_Edicion = Pvhcr_UserGrabacion
  	WHERE Almacen_IdSede = Pint_SedeNueva AND Almacen_IdProducto = Pint_Producto AND Almacen_Estado = 1;
  ELSE
	INSERT INTO tblAlmacen(Almacen_IdKardex, Almacen_IdProducto, Almacen_Cantidad, Almacen_IdSede, Almacen_Observacion, Almacen_Estado, Almacen_FechaGra, Almacen_UserGrab)
    VALUES (0,Pint_Producto,Pflo_Cantidad,Pint_SedeNueva,Pvchr_Observacion,1,NOW(),Pvhcr_UserGrabacion);
  END IF;

INSERT INTO tblMovimiento(Movimiento_fecha
                          , Movimiento_sedeAnterior
                          , Movimiento_SedeNueva
                          , Movimiento_Cantidad
                          , Movimiento_Observacion
                          , Movimiento_Usuario
                          , Movimiento_FechaGrabacion) 
VALUES (Pdate_Fecha
        ,Pint_SedeAnterior
        ,Pint_SedeNueva
        ,Pflo_Cantidad
        ,Pvchr_Observacion
        ,Pvhcr_UserGrabacion,NOW());
SELECT '1' AS CODIGO;
END $$
DELIMITER ;

-------------------------- ULTMOS CAMBIOS
PROSER


DROP PROCEDURE IF EXISTS SP_Registrar_TblBanio;
DELIMITER $$
CREATE PROCEDURE `SP_Registrar_TblBanio`(IN `Pint_IdTipoRegistro` INT, IN `Pint_Idbanio` INT, IN `Pdat_Fecha` DATE, IN `Pint_IdProducto` INT, IN `Pflo_Precio` FLOAT, IN `Pint_IdMascota` INT, IN `Pvchr_Observacion` VARCHAR(100), IN `Pint_Cita` INT, IN `Pvchr_Usuario` VARCHAR(50), IN `Pint_VentaTipo` INT, IN `Pflo_Cantidad` FLOAT, IN `Pint_IdAlmacen` INT)
BEGIN
DECLARE IdVentaTemporal INT;
DECLARE IdAlmacen INT;
DECLARE IdValidaStock INT;
IF Pint_IdTipoRegistro = 1 THEN
   IF Pint_Cita = 1 THEN /* Registrar */
		SET IdValidaStock = (SELECT COUNT(*) AS ID_VALIDA FROM tblProducto WHERE Producto_IdTipoPro = 2 AND Producto_IdTipoCat = 2 AND Producto_Id =  Pint_IdProducto);
	   /*VALIDAR QUE EXISTE STOCK*/
	   IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 OR IdValidaStock > 0 THEN
		   INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
										 VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
										 VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
										 VALUES
										(Pint_IdTipoRegistro, Pint_Idbanio, Pdat_Fecha, Pint_IdProducto, Pflo_Precio,
										 Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
										 Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
		   /* OBTIENE ID DE VENTATEMPORAL */
		   SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
		   SELECT '1' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
	   ELSE
			SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
	   END IF;
   ELSEIF Pint_Cita = 2 THEN /* Agendar */
	   /*INSERTA TBL VACUNAS*/
	   INSERT INTO tblBanio
	   (Banio_Fecha, Banio_IdProducto, Banio_IdMascota, Banio_Observacion, Banio_Cita, Banio_CitaEstado, Banio_Estado, Banio_FechaGra, Banio_UserGrab)
		VALUES
	   (Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Observacion, Pint_Cita, 'A', 1, now(), Pvchr_Usuario);
	   SELECT '1' AS Codigo,'0' AS CodigoVentaTmp;
   END IF;
ELSEIF Pint_IdTipoRegistro = 2 THEN
   IF Pint_Cita = 1 THEN
   /*VALIDAR QUE EXISTE STOCK*/
   SET IdValidaStock = (SELECT COUNT(*) AS ID_VALIDA FROM tblProducto WHERE Producto_IdTipoPro = 2 AND Producto_IdTipoCat = 2 AND Producto_Id =  Pint_IdProducto);
   IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 OR IdValidaStock > 0 THEN
   INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
                                 VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
                                 VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
                                 VALUES
                                (Pint_IdTipoRegistro, Pint_Idbanio, Pdat_Fecha, Pint_IdProducto, Pflo_Precio,
                                 Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
                                 Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
   /* OBTIENE ID DE VENTATEMPORAL */
   SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
   SELECT '2' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
   ELSE
   SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
   END IF;
   ELSEIF Pint_Cita = 2 THEN
   /* cod 2 */
   SELECT '3' AS Codigo,'1' AS CodigoVenta;
   ELSEIF Pint_Cita = 3 THEN
   /* ACTUALIZA TBL VACUNA */
   UPDATE tblBanio SET
   Banio_Fecha = Pdat_Fecha,
   Banio_Observacion = Pvchr_Observacion,
   Banio_Cita = 3,
   Banio_FechaGrab_Edicion = NOW(),
   Banio_UserGrab_Edicion = Pvchr_Usuario    
   WHERE Banio_Id = Pint_Idbanio;
   SELECT '2' AS Codigo,'0' AS CodigoVenta;
   END IF;
END IF;
END $$
DELIMITER ;

------- ******

DROP FUNCTION IF EXISTS FUN_Valida_CodigoProducto;
DELIMITER $$
CREATE FUNCTION FUN_Valida_CodigoProducto(Pint_IdProducto INT) RETURNS INT NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER 
BEGIN
 /* DEVULEVE VALOR 1 : SE TIENE QUE VALIDAR STOCK -- 0: NO SE VALIDA EL STOCK */
 DECLARE Id INT DEFAULT 0;
 
	IF (SELECT COUNT(*) AS ID_VALIDA FROM tblProducto 
        WHERE Producto_IdTipoPro = 2 AND Producto_IdTipoCat = 2 AND Producto_Id =  Pint_IdProducto) > 0 THEN
	SET Id = 1;
	ELSEIF  (SELECT COUNT(*) AS ID_VALIDA FROM tblProducto
             WHERE Producto_IdTipoPro = 3 AND Producto_IdTipoCat = 3 AND Producto_Id =  Pint_IdProducto) > 0 THEN
	SET Id = 1;	
	ELSEIF (SELECT COUNT(*) AS ID_VALIDA FROM tblProducto 
            WHERE Producto_IdTipoPro = 4 AND Producto_IdTipoCat = 4 AND Producto_Id =  Pint_IdProducto) > 0 THEN
	SET Id = 1;
	ELSE
	SET Id = 0;
	END IF;

  RETURN Id;
       
END$$
DELIMITER ;

-------***

DROP PROCEDURE IF EXISTS SP_ProcesoVenta_Tmp;
DELIMITER $$
CREATE PROCEDURE `SP_ProcesoVenta_Tmp`(IN `Pint_IdVentaTmp` INT, IN `Pint_IdSede` INT, IN `Pint_IdProducto` INT, IN `Pflo_Cantidad` FLOAT, IN `Pflo_Precio` FLOAT, IN `Pflo_Descuento` FLOAT, IN `Pflo_PrecioTotal` FLOAT, IN `Pvchr_Usuario` VARCHAR(100))
BEGIN
DECLARE IdVentaTmp INT;
DECLARE IdValidaStock INT;
SET IdValidaStock  = (SELECT FUN_Valida_CodigoProducto(Pint_IdProducto));
-- VALIDA QUE EXISTA EL PRODUCTO EN EL ALMACEN
IF EXISTS(SELECT * FROM tblAlmacen WHERE Almacen_IdSede = Pint_IdSede AND Almacen_IdProducto = Pint_IdProducto AND Almacen_Estado = 1) THEN
	IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdSede = Pint_IdSede AND Almacen_IdProducto = Pint_IdProducto ) >= Pflo_Cantidad OR IdValidaStock = 0 THEN
		CALL SP_Actualizar_TblAlmacen_Stock (Pint_IdSede, Pint_IdProducto, Pflo_Cantidad);
		IF Pint_IdVentaTmp = 0 THEN
		  /* NUEVO REGISTRO - RETURN ESTADO(1) */
			INSERT INTO tblVenta_tmp(Venta_tmp_FechaGra, Venta_tmp_UserGrab) VALUES (NOW(),Pvchr_Usuario);
			 SET IdVentaTmp = (SELECT MAX(Venta_tmp_Id) FROM tblVenta_tmp);
			INSERT INTO tblVentaDetalle_tmp(VentaDetalle_tmp_VentaId, VentaDetalle_tmp_IdProducto, VentaDetalle_tmp_Precio, VentaDetalle_tmp_Descuento, VentaDetalle_tmp_Cantidad, VentaDetalle_tmp_PrecioTotal, VentaDetalle_tmp_FechaGra, VentaDetalle_tmp_UserGrab)
			 VALUES (IdVentaTmp,Pint_IdProducto,Pflo_Precio,Pflo_Descuento,Pflo_Cantidad,Pflo_PrecioTotal,NOW(),Pvchr_Usuario);  
			SELECT IdVentaTmp AS CODIGO,'1' AS ESTADO;
		ELSE
		   IF EXISTS(SELECT VentaDetalle_tmp_Id FROM tblVentaDetalle_tmp WHERE VentaDetalle_tmp_VentaId = Pint_IdVentaTmp AND VentaDetalle_tmp_IdProducto = Pint_IdProducto) THEN
		/* PRODUCTO EXISTENTE RET (0) */
			   SELECT Pint_IdVentaTmp AS CODIGO, '0' AS ESTADO;
		   ELSE
		/* EXISTENTE AGREGAR REGISTRO RET (2) */
			  INSERT INTO tblVentaDetalle_tmp(VentaDetalle_tmp_VentaId, VentaDetalle_tmp_IdProducto, VentaDetalle_tmp_Precio, VentaDetalle_tmp_Descuento, VentaDetalle_tmp_Cantidad, VentaDetalle_tmp_PrecioTotal, VentaDetalle_tmp_FechaGra, VentaDetalle_tmp_UserGrab)
			  VALUES (Pint_IdVentaTmp,Pint_IdProducto,Pflo_Precio,Pflo_Descuento,Pflo_Cantidad,Pflo_PrecioTotal,NOW(),Pvchr_Usuario);
			  SELECT Pint_IdVentaTmp AS CODIGO,'2' AS ESTADO;
			END IF;
		END IF;
	ELSE
	/* NO HAY STOCK (3) */
	SELECT '3' as CODIGO,'3' AS ESTADO;
	END IF;
ELSE
	/* NO HAY REGISTROS DEL PRODUCTO EN EL ALMACEN(4) */
	SELECT '4' as CODIGO,'4' AS ESTADO;
END IF;
END $$
DELIMITER ;

---------****

-- show create procedure SP_Obtener_TblClientes_SoloNombre_x_Dni
DROP PROCEDURE IF EXISTS SP_Obtener_TblClientes_SoloNombre_x_Dni;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblClientes_SoloNombre_x_Dni(IN Pvchr_Dni VARCHAR(10),IN Pint_Condicion INT)
BEGIN
IF Pint_Condicion = 1 THEN

	IF EXISTS(SELECT * FROM tblCliente WHERE Cliente_Dni = Pvchr_Dni AND Cliente_Estado = 1) THEN
   SELECT Cliente_Id,CONCAT(Cliente_Nombre,' ',Cliente_Apellido) AS Cliente_Nombre FROM tblCliente
   WHERE Cliente_Estado = 1 AND Cliente_Dni = Pvchr_Dni;
    ELSE
   SELECT '0' AS Cliente_Id,'EL CLIENTE NO EXISTE O HA SIDO ELIMINADO' AS Cliente_Nombre;
    END IF;
    
ELSEIF Pint_Condicion = 2 THEN

	IF EXISTS(SELECT * FROM tblCliente WHERE Cliente_TelefonoCel = Pvchr_Dni AND Cliente_Estado = 1) THEN
   SELECT Cliente_Id,CONCAT(Cliente_Nombre,' ',Cliente_Apellido) AS Cliente_Nombre FROM tblCliente
   WHERE Cliente_Estado = 1 AND Cliente_TelefonoCel = Pvchr_Dni;
    ELSE
   SELECT '0' AS Cliente_Id,'EL CLIENTE NO EXISTE O HA SIDO ELIMINADO' AS Cliente_Nombre;
    END IF;

END IF;
END $$
DELIMITER ;

----- ****

DROP PROCEDURE IF EXISTS SP_Obtener_TblProducto_Solo_Vacunas_ConStock;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblProducto_Solo_Vacunas_ConStock (IN Pint_IdSede INT)
BEGIN
SELECT tp.Producto_Id,tp.Producto_Nombre
FROM tblProducto tp LEFT JOIN tblAlmacen ta ON tp.Producto_Id = ta.Almacen_IdProducto  
WHERE tp.Producto_Estado = 1 AND tp.Producto_IdTipoPro = 1 AND tp.Producto_IdTipoCat = 1 
AND ta.Almacen_IdSede = Pint_IdSede AND ta.Almacen_Cantidad > 0;
END $$
DELIMITER ;

------******

DROP PROCEDURE IF EXISTS SP_Registrar_TblDesparacitacion;
DELIMITER $$
CREATE PROCEDURE `SP_Registrar_TblDesparacitacion`(IN `Pint_IdTipoRegistro` INT, IN `Pint_Iddesparacitacion` INT, IN `Pdat_Fecha` DATE, IN `Pint_IdProducto` INT, IN `Pflo_Precio` FLOAT, IN `Pint_IdMascota` INT, IN `Pvchr_Observacion` VARCHAR(100), IN `Pint_Cita` INT, IN `Pvchr_Usuario` VARCHAR(50), IN `Pint_VentaTipo` INT, IN `Pflo_Cantidad` FLOAT, IN `Pint_IdAlmacen` INT)
BEGIN
DECLARE IdVentaTemporal INT;
DECLARE IdAlmacen INT;
DECLARE IdValidaStock INT;
IF Pint_IdTipoRegistro = 1 THEN
   IF Pint_Cita = 1 THEN /* Registrar */
   SET IdValidaStock = (SELECT COUNT(*) AS ID_VALIDA FROM tblProducto WHERE Producto_IdTipoPro = 3 AND Producto_IdTipoCat = 3 AND Producto_Id =  Pint_IdProducto);
   /*VALIDAR QUE EXISTE STOCK*/
   IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 OR IdValidaStock > 0 THEN
   INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
                                 VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
                                 VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
                                 VALUES
                                (Pint_IdTipoRegistro, Pint_Iddesparacitacion, Pdat_Fecha, Pint_IdProducto, Pflo_Precio,
                                 Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
                                 Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
   /* OBTIENE ID DE VENTATEMPORAL */
   SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
   SELECT '1' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
   ELSE
   SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
   END IF;
   ELSEIF Pint_Cita = 2 THEN /* Agendar */
   /*INSERTA TBL VACUNAS*/
   INSERT INTO tblDesparacitacion
   (Desparacitacion_Fecha, Desparacitacion_IdProducto, Desparacitacion_IdMascota, Desparacitacion_Observacion, Desparacitacion_Cita, Desparacitacion_CitaEstado, Desparacitacion_Estado, Desparacitacion_FechaGra, Desparacitacion_UserGrab)
    VALUES
   (Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Observacion, Pint_Cita, 'A', 1, now(), Pvchr_Usuario);
   SELECT '1' AS Codigo,'0' AS CodigoVentaTmp;
   END IF;
ELSEIF Pint_IdTipoRegistro = 2 THEN
   IF Pint_Cita = 1 THEN
   /*VALIDAR QUE EXISTE STOCK*/
   SET IdValidaStock = (SELECT COUNT(*) AS ID_VALIDA FROM tblProducto WHERE Producto_IdTipoPro = 3 AND Producto_IdTipoCat = 3 AND Producto_Id =  Pint_IdProducto);
   IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 OR IdValidaStock > 0 THEN
   INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
                                 VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
                                 VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
                                 VALUES
                                (Pint_IdTipoRegistro, Pint_Iddesparacitacion, Pdat_Fecha, Pint_IdProducto, Pflo_Precio,
                                 Pint_IdMascota, Pvchr_Observacion, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
                                 Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
   /* OBTIENE ID DE VENTATEMPORAL */
   SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
   SELECT '2' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
   ELSE
   SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
   END IF;
   ELSEIF Pint_Cita = 2 THEN
   /* cod 2 */
   SELECT '3' AS Codigo,'1' AS CodigoVenta;
   ELSEIF Pint_Cita = 3 THEN
   /* ACTUALIZA TBL VACUNA */
   UPDATE tblDesparacitacion SET
   Desparacitacion_Fecha = Pdat_Fecha,
   Desparacitacion_Observacion = Pvchr_Observacion,
   Desparacitacion_Cita = 3,
   Desparacitacion_FechaGrab_Edicion = NOW(),
   Desparacitacion_UserGrab_Edicion = Pvchr_Usuario    
   WHERE Desparacitacion_Id = Pint_Iddesparacitacion;
   SELECT '2' AS Codigo,'0' AS CodigoVenta;
   END IF;
END IF;
END $$
DELIMITER ;

-------- *****

DROP PROCEDURE IF EXISTS SP_Obtener_TblProducto_Solo_Atencion_ConStock;
DELIMITER $$
CREATE PROCEDURE SP_Obtener_TblProducto_Solo_Atencion_ConStock (IN Pint_IdSede INT)
BEGIN
SELECT tp.Producto_Id,tp.Producto_Nombre
FROM tblProducto tp LEFT JOIN tblAlmacen ta ON tp.Producto_Id = ta.Almacen_IdProducto  
WHERE tp.Producto_Estado = 1 AND tp.Producto_IdTipoPro = 4 AND ta.Almacen_IdSede = Pint_IdSede AND ta.Almacen_Cantidad > 0
UNION
SELECT tp.Producto_Id,tp.Producto_Nombre
FROM tblProducto tp LEFT JOIN tblAlmacen ta ON tp.Producto_Id = ta.Almacen_IdProducto  
WHERE tp.Producto_Estado = 1 AND tp.Producto_IdTipoPro = 4 AND tp.Producto_IdTipoCat = 4 
AND ta.Almacen_IdSede = Pint_IdSede;
END $$
DELIMITER ;


-------- *****

DROP PROCEDURE IF EXISTS SP_Registrar_TblAtencion;
DELIMITER $$
CREATE PROCEDURE `SP_Registrar_TblAtencion`(IN Pint_IdTipoRegistro INT,
                                              IN Pint_IdAtencion INT,                                                  
                                              IN Pdat_Fecha DATE,
											  IN Pint_IdProducto INT,
                                              IN Pint_IdMascota INT,
                                              IN Pvchr_Sintomas VARCHAR(3000),                                                
                                              IN Pvchr_Atencion_T VARCHAR(100),
                                              IN Pvchr_Atencion_FC VARCHAR(100),
                                              IN Pvchr_Atencion_FR VARCHAR(100),                                                  
                                              IN Pvchr_Atencion_sc_Des VARCHAR(100),
                                              IN Pvchr_Atencion_sc_Muc VARCHAR(100),
                                              IN Pvchr_Atencion_sc_TLLC VARCHAR(100),
                                              IN Pvchr_Atencion_sc_Vom VARCHAR(100),
                                              IN Pvchr_Atencion_sc_Dia VARCHAR(100),
                                              IN Pvchr_Atencion_sc_Gan VARCHAR(100),
                                              IN Pvchr_Atencion_sc_Pes VARCHAR(50),                                                  
                                              IN Pvchr_Atencion_dx_Pre VARCHAR(150),
                                              IN Pvchr_Atencion_dx_Def VARCHAR(150),
                                              IN Pvchr_Atencion_dx_Sol VARCHAR(150),
                                              IN Pvchr_Atencion_tr_Des VARCHAR(150),
                                              IN Pvchr_Atencion_tr_Obs VARCHAR(150),
                                              IN Pflo_Atencion_tr_Pre FLOAT,
                                              IN Pint_Documento INT,
                                              IN Pint_Cita INT,
                                              IN Pchr_CitaEstado CHAR(1),
                                              IN Pint_Estado INT,                                                
                                              IN Pvchr_Usuario VARCHAR(100),
                                              IN Pint_VentaTipo INT,
                                              IN Pint_IdAlmacen INT,
                                              IN Pint_IdVBDA INT)
BEGIN
DECLARE IdVentaTemporal INT;
DECLARE Pflo_Cantidad FLOAT;
DECLARE IdAtencionTemporal INT;
DECLARE IdValidaStock INT;

SET Pflo_Cantidad = 1;

IF Pint_IdTipoRegistro = 1 THEN

	IF Pint_Cita = 1 THEN /* REGISTRAR NUEVO */
   SET IdValidaStock = (SELECT COUNT(*) AS ID_VALIDA FROM tblProducto WHERE Producto_IdTipoPro = 3 AND Producto_IdTipoCat = 3 AND Producto_Id =  Pint_IdProducto);	
	IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 OR IdValidaStock > 0 THEN
	 INSERT INTO tblAtencionTemporal
	 (Atencion_IdVenta, Atencion_Fecha, Atencion_IdProducto, Atencion_IdMascota, Atencion_Sintomas,Atencion_T, Atencion_FC, Atencion_FR,
	 Atencion_sc_Deshidratacion, Atencion_sc_Mucosas, Atencion_sc_TLLC, Atencion_sc_Vomitos, Atencion_sc_Diarreas, Atencion_sc_Ganglios, Atencion_sc_Peso,
	 Atencion_dx_Presuntivo, Atencion_dx_Definitivo, Atencion_dx_Solicitado,Atencion_tr_Descripcion, Atencion_tr_Observacion, Atencion_tr_Precio,
	 Atencion_IdDocumento, Atencion_Cita, Atencion_CitaEstado, Atencion_Estado, Atencion_FechaGra, Atencion_UserGrab)
	 VALUES
	(Pint_IdAtencion, Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Sintomas,Pvchr_Atencion_T, Pvchr_Atencion_FC, Pvchr_Atencion_FR,
	 Pvchr_Atencion_sc_Des, Pvchr_Atencion_sc_Muc, Pvchr_Atencion_sc_TLLC, Pvchr_Atencion_sc_Vom, Pvchr_Atencion_sc_Dia, Pvchr_Atencion_sc_Gan, Pvchr_Atencion_sc_Pes,
	 Pvchr_Atencion_dx_Pre, Pvchr_Atencion_dx_Def, Pvchr_Atencion_dx_Sol,Pvchr_Atencion_tr_Des, Pvchr_Atencion_tr_Obs, Pflo_Atencion_tr_Pre,
	 Pint_Documento, Pint_Cita, Pchr_CitaEstado, Pint_Estado,NOW(), Pvchr_Usuario);
	 SET IdAtencionTemporal = (SELECT Atencion_Id FROM tblAtencionTemporal ORDER BY Atencion_Id DESC LIMIT 1 );
	 INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
	 VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
	 VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
	  VALUES
	 (Pint_IdTipoRegistro, IdAtencionTemporal, Pdat_Fecha, Pint_IdProducto, Pflo_Atencion_tr_Pre,
	  Pint_IdMascota, Pvchr_Atencion_tr_Obs, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
	  Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());

	 /* OBTIENE ID DE VENTATEMPORAL */
	 SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
	 SELECT '1' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
	ELSE
	 SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
	END IF;
ELSEIF Pint_Cita = 2 THEN /* AGENDAR */
		INSERT INTO tblAtencionTemporal
		(Atencion_IdVenta, Atencion_Fecha, Atencion_IdProducto, Atencion_IdMascota, Atencion_Sintomas,Atencion_T, Atencion_FC, Atencion_FR,
		 Atencion_sc_Deshidratacion, Atencion_sc_Mucosas, Atencion_sc_TLLC, Atencion_sc_Vomitos, Atencion_sc_Diarreas, Atencion_sc_Ganglios, Atencion_sc_Peso,
		 Atencion_dx_Presuntivo, Atencion_dx_Definitivo, Atencion_dx_Solicitado,Atencion_tr_Descripcion, Atencion_tr_Observacion, Atencion_tr_Precio,
		 Atencion_IdDocumento, Atencion_Cita, Atencion_CitaEstado, Atencion_Estado, Atencion_FechaGra, Atencion_UserGrab)
		VALUES
		(Pint_IdAtencion, Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Sintomas,Pvchr_Atencion_T, Pvchr_Atencion_FC, Pvchr_Atencion_FR,
		 Pvchr_Atencion_sc_Des, Pvchr_Atencion_sc_Muc, Pvchr_Atencion_sc_TLLC, Pvchr_Atencion_sc_Vom, Pvchr_Atencion_sc_Dia, Pvchr_Atencion_sc_Gan, Pvchr_Atencion_sc_Pes,
		 Pvchr_Atencion_dx_Pre, Pvchr_Atencion_dx_Def, Pvchr_Atencion_dx_Sol,Pvchr_Atencion_tr_Des, Pvchr_Atencion_tr_Obs, Pflo_Atencion_tr_Pre,
		 Pint_Documento, Pint_Cita, Pchr_CitaEstado, Pint_Estado,NOW(), Pvchr_Usuario);
		SET IdAtencionTemporal = (SELECT Atencion_Id FROM tblAtencionTemporal ORDER BY Atencion_Id DESC LIMIT 1 );

		/*INSERTA TBL ATENCION*/
		INSERT INTO tblAtencion
		(Atencion_IdVenta, Atencion_Fecha, Atencion_IdProducto, Atencion_IdMascota, Atencion_Sintomas,Atencion_T, Atencion_FC, Atencion_FR,
		 Atencion_sc_Deshidratacion, Atencion_sc_Mucosas, Atencion_sc_TLLC, Atencion_sc_Vomitos, Atencion_sc_Diarreas, Atencion_sc_Ganglios, Atencion_sc_Peso,
		 Atencion_dx_Presuntivo, Atencion_dx_Definitivo, Atencion_dx_Solicitado,Atencion_tr_Descripcion, Atencion_tr_Observacion, Atencion_tr_Precio,
		 Atencion_IdDocumento, Atencion_Cita, Atencion_CitaEstado, Atencion_Estado, Atencion_FechaGra, Atencion_UserGrab)
		VALUES
		(IdAtencionTemporal, Pdat_Fecha, Pint_IdProducto, Pint_IdMascota, Pvchr_Sintomas, Pvchr_Atencion_T, Pvchr_Atencion_FC, Pvchr_Atencion_FR,
		 Pvchr_Atencion_sc_Des, Pvchr_Atencion_sc_Muc, Pvchr_Atencion_sc_TLLC, Pvchr_Atencion_sc_Vom, Pvchr_Atencion_sc_Dia, Pvchr_Atencion_sc_Gan, Pvchr_Atencion_sc_Pes,
		 Pvchr_Atencion_dx_Pre, Pvchr_Atencion_dx_Def, Pvchr_Atencion_dx_Sol, Pvchr_Atencion_tr_Des, Pvchr_Atencion_tr_Obs, Pflo_Atencion_tr_Pre,
		 Pint_Documento, Pint_Cita, Pchr_CitaEstado, Pint_Estado,NOW(), Pvchr_Usuario);
		SELECT '1' AS Codigo,'0' AS CodigoVentaTmp;
END IF;

ELSEIF Pint_IdTipoRegistro = 2 THEN

	IF Pint_Cita = 1 THEN /* REGISTRAR VENTA CON DATO AGENDADO */
		SET IdValidaStock = (SELECT COUNT(*) AS ID_VALIDA FROM tblProducto WHERE Producto_IdTipoPro = 3 AND Producto_IdTipoCat = 3 AND Producto_Id =  Pint_IdProducto);	
		
		IF (SELECT Almacen_Cantidad FROM tblAlmacen WHERE Almacen_IdProducto = Pint_IdProducto AND Almacen_IdSede = Pint_IdAlmacen) >= 1 OR IdValidaStock > 0 THEN 
		
		INSERT INTO tblVentaTemporal (VentaTemporal_IdTipoRegistro, VentaTemporal_Id_vbda, VentaTemporal_Fecha, VentaTemporal_IdProducto, VentaTemporal_Precio,
		 VentaTemporal_IdMascota, VentaTemporal_Observacion, VentaTemporal_Cita, VentaTemporal_Usuario, VentaTemporal_VentaTipo,
		 VentaTemporal_Cantidad, VentaTemporal_IdAlmacen, VentaTemporal_Estado,VentaTemporal_FechaGra)
		  VALUES
		 (Pint_IdTipoRegistro, Pint_IdVBDA, Pdat_Fecha, Pint_IdProducto, Pflo_Atencion_tr_Pre,
		  Pint_IdMascota, Pvchr_Atencion_tr_Obs, Pint_Cita, Pvchr_Usuario, Pint_VentaTipo,
		  Pflo_Cantidad, Pint_IdAlmacen, 1,NOW());
		
		
		/* Actualiza */
		UPDATE tblAtencion SET 
		Atencion_Fecha=Pdat_Fecha,
		Atencion_Sintomas=Pvchr_Sintomas,
		Atencion_T=Pvchr_Atencion_T,
		Atencion_FC=Pvchr_Atencion_FC,
		Atencion_FR=Pvchr_Atencion_FR,
		Atencion_sc_Deshidratacion=Pvchr_Atencion_sc_Des,
		Atencion_sc_Mucosas=Pvchr_Atencion_sc_Muc,
		Atencion_sc_TLLC=Pvchr_Atencion_sc_TLLC,
		Atencion_sc_Vomitos=Pvchr_Atencion_sc_Vom,
		Atencion_sc_Diarreas=Pvchr_Atencion_sc_Dia,
		Atencion_sc_Ganglios=Pvchr_Atencion_sc_Gan,
		Atencion_sc_Peso=Pvchr_Atencion_sc_Pes,
		Atencion_dx_Presuntivo=Pvchr_Atencion_dx_Pre,
		Atencion_dx_Definitivo=Pvchr_Atencion_dx_Def,
		Atencion_dx_Solicitado=Pvchr_Atencion_dx_Sol,
		Atencion_tr_Descripcion=Pvchr_Atencion_tr_Des,
		Atencion_tr_Observacion=Pvchr_Atencion_tr_Obs,
		Atencion_tr_Precio=Pflo_Atencion_tr_Pre,
		Atencion_IdDocumento=1,
		Atencion_Cita=1,
		Atencion_CitaEstado='C',
		Atencion_FechaGrab_Edicion=NOW(),
		Atencion_UserGrab_Edicion=Pvchr_Usuario WHERE Atencion_Id = Pint_IdAtencion;
		/* fin actualzia */
		
		SET IdVentaTemporal =(SELECT MAX(VentaTemporal_Id) FROM tblVentaTemporal);
		SELECT '2' AS Codigo,IdVentaTemporal AS CodigoVentaTmp;
		ELSE
		SELECT '3' AS Codigo,'0' AS CodigoVentaTmp;
		END IF;
		
	ELSEIF Pint_Cita = 2 THEN
		/* cod 2 */
		SELECT '3' AS Codigo,'1' AS CodigoVenta;
		ELSEIF Pint_Cita = 3 THEN /* AGENDAR REPROGRAMACION */
		UPDATE tblAtencion
		SET -- Atencion_Id=[value-1],
		-- Atencion_IdVenta=[value-2],
		Atencion_Fecha=Pdat_Fecha,
		-- Atencion_IdProducto=[value-4],
		-- Atencion_IdMascota=[value-5],
		Atencion_Sintomas=Pvchr_Sintomas,
		Atencion_T=Pvchr_Atencion_T,
		Atencion_FC=Pvchr_Atencion_FC,
		Atencion_FR=Pvchr_Atencion_FR,
		Atencion_sc_Deshidratacion=Pvchr_Atencion_sc_Des,
		Atencion_sc_Mucosas=Pvchr_Atencion_sc_Muc,
		Atencion_sc_TLLC=Pvchr_Atencion_sc_TLLC,
		Atencion_sc_Vomitos=Pvchr_Atencion_sc_Vom,
		Atencion_sc_Diarreas=Pvchr_Atencion_sc_Dia,
		Atencion_sc_Ganglios=Pvchr_Atencion_sc_Gan,
		Atencion_sc_Peso=Pvchr_Atencion_sc_Pes,
		Atencion_dx_Presuntivo=Pvchr_Atencion_dx_Pre,
		Atencion_dx_Definitivo=Pvchr_Atencion_dx_Def,
		Atencion_dx_Solicitado=Pvchr_Atencion_dx_Sol,
		Atencion_tr_Descripcion=Pvchr_Atencion_tr_Des,
		Atencion_tr_Observacion=Pvchr_Atencion_tr_Obs,
		Atencion_tr_Precio=Pflo_Atencion_tr_Pre,
		Atencion_IdDocumento=1,
		Atencion_Cita=3,
		Atencion_CitaEstado='C',
		-- Atencion_Estado=[value-26],
		-- Atencion_FechaGra=[value-27],
		-- Atencion_UserGrab=[value-28],
		Atencion_FechaGrab_Edicion=NOW(),
		Atencion_UserGrab_Edicion=Pvchr_Usuario WHERE Atencion_Id = Pint_IdAtencion;
		SELECT '2' AS Codigo,'0' AS CodigoVenta;
	END IF;

END IF;
END $$
DELIMITER ;


/* CAMBIO DE PROCEDIMIENTO EN EL GAVET TEST */

CREATE PROCEDURE `SP_Obtener_Totales_Dashboard`()
BEGIN
   DECLARE TotalClientes INT;
   DECLARE TotalMascotas INT;
   DECLARE TotalAtenciones INT;
   DECLARE VentasDia DECIMAL(7,2);
   DECLARE VentasSem DECIMAL(7,2);    
   DECLARE VentasMes DECIMAL(7,2);
   SET TotalClientes = (SELECT COUNT(*) FROM tblCliente WHERE Cliente_Estado = 1);
   SET TotalMascotas = (SELECT COUNT(*) FROM tblMascota WHERE Mascota_Estado = 1);
   SET TotalAtenciones = (SELECT COUNT(*) FROM tblAtencion WHERE Atencion_Estado = 1);
   SET VentasDia = (SELECT CASE WHEN SUM(Venta_PrecioTotal) IS NULL THEN '0' ELSE ROUND(SUM(Venta_PrecioTotal),2) END
					FROM tblVenta WHERE Venta_Estado = 1 AND Venta_Fecha = DATE(NOW()));      
   SET VentasSem = (SELECT CASE WHEN SUM(Venta_PrecioTotal) IS NULL THEN '0' ELSE ROUND(SUM(Venta_PrecioTotal),2) END
                    FROM tblVenta WHERE Venta_Estado = 1 AND WEEK(Venta_Fecha) = WEEK(NOW()));
   SET VentasMes = (SELECT CASE WHEN SUM(Venta_PrecioTotal) IS NULL THEN '0' ELSE ROUND(SUM(Venta_PrecioTotal),2) END
                    FROM tblVenta WHERE Venta_Estado = 1 AND MONTH(Venta_Fecha) = MONTH(NOW()));    
   SELECT TotalClientes,TotalMascotas,TotalAtenciones,VentasDia,VentasSem,VentasMes;
   END