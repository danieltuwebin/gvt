
/* MYSQL TBL */
/*TABLAS PARA EL PROYECTO VETERINARIA */
DROP TABLE IF EXISTS tblUsuario;
CREATE TABLE tblUsuario (
	 Usuario_IdUsuario int(11) NOT NULL AUTO_INCREMENT,
	 Usuario_NombreCompleto VARCHAR(200) DEFAULT '',
	 Usuario_IdPerfilUsuario int(11) DEFAULT NULL,
	 Usuario_NombreUsuario varchar(100) COLLATE latin1_spanish_ci NOT NULL,
	 Usuario_PassUsuario varchar(100) COLLATE latin1_spanish_ci NOT NULL,
	 Usuario_EstadoUsuario int(11) NOT NULL COMMENT '1(activ).2(desact)',
	 Usuario_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	 Usuario_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,	 
	 PRIMARY KEY (Usuario_IdUsuario),
	 KEY NombreUsuario (Usuario_NombreUsuario)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

DROP TABLE IF EXISTS tblNombre;
CREATE TABLE tblNombre(
    Nombre_IdNombre INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre_Nombre VARCHAR(200) COLLATE latin1_spanish_ci NOT NULL,
    Nombre_Apellido VARCHAR(200) COLLATE latin1_spanish_ci NOT NULL,
    /*
    Nombre_Usuario VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Nombre_Clave VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	*/
    Nombre_Email VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
    Nombre_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Nombre_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Nombre_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL		
)ENGINE = INNODB DEFAULT CHARSET= latin1 COLLATE = latin1_spanish_ci;

DROP TABLE IF EXISTS tblPerfil;
CREATE TABLE tblPerfil(
	Perfil_IdPerfil INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Perfil_Nombre VARCHAR(50) COLLATE latin1_spanish_ci NOT NULL,
    Perfil_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Perfil_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Perfil_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL		
);

DROP TABLE IF EXISTS tblCliente;
CREATE TABLE tblCliente(
	Cliente_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Cliente_Nombre VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Cliente_Apellido VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Cliente_TelefonoFijo VARCHAR(10) COLLATE latin1_spanish_ci NOT NULL,
	Cliente_TelefonoCel VARCHAR(10) COLLATE latin1_spanish_ci NOT NULL,
	Cliente_Email VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Cliente_Foto VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,
	Cliente_Provincia VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Cliente_Distrito VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Cliente_Direccion VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,
	Cliente_Observacion VARCHAR(3000) COLLATE latin1_spanish_ci NOT NULL,
	Cliente_Estado INT NOT NULL COMMENT '1(activ).2(eliminado)',
	Cliente_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Cliente_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Cliente_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Cliente_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL  DEFAULT ''
);
ALTER TABLE `tblCliente` ADD `Cliente_Dni` VARCHAR(10) NOT NULL DEFAULT '' AFTER `Cliente_Apellido`;

/*REV*/
DROP TABLE IF EXISTS tblMascota;
CREATE TABLE tblMascota(
	Mascota_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Mascota_IdCliente INT NOT NULL,
	NombreMascota VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,	
	Mascota_IdEspecie INT NOT NULL,
	Mascota_IdRaza INT NOT NULL,
	Mascota_IdSexo CHAR(1) COLLATE latin1_spanish_ci NOT NULL COMMENT '1(M-macho).2(H-hembra)',	
	Mascota_Color VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,	
	Mascota_FechaNac DATE COLLATE latin1_spanish_ci NOT NULL,
	Mascota_Foto VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,
	Mascota_Observacion VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,
	Mascota_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Mascota_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Mascota_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Mascota_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Mascota_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL	
);

ALTER TABLE `tblMascota` CHANGE `NombreMascota` `Mascota_Nombre` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL;

/*REV*/
DROP TABLE IF EXISTS tblProducto;
CREATE TABLE tblProducto(
	Producto_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Producto_Nombre VARCHAR(200) COLLATE latin1_spanish_ci NOT NULL,
	Producto_IdTipoPro INT NOT NULL,
	Producto_IdTipoCat INT NOT NULL,
	Producto_IdTipoUM INT NOT NULL,
	/*Producto_Cantidad FLOAT NOT NULL,*/
	Producto_PrecioCompra FLOAT NOT NULL,
	Producto_PrecioVenta FLOAT NOT NULL,
	Producto_Observacion VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,	
	Producto_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Producto_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Producto_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Producto_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Producto_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL	
);

ALTER TABLE `tblProducto` ADD `Producto_Stock` INT NOT NULL DEFAULT '0' AFTER `Producto_IdTipoUM`;





DROP TABLE IF EXISTS tblKardex;
CREATE TABLE tblProducto(
	Kardex_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Kardex_IdProducto INT NOT NULL,
	Kardex_TipoMovimiento INT NOT NULL COMMENT '1(ingreso).2(salida)',
	Kardex_Cantidad INT NOT NULL,
	Kardex_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Kardex_Observacion VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,		
	Kardex_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Kardex_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Kardex_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Kardex_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL	
);


DROP TABLE IF EXISTS tblVacunas;
CREATE TABLE tblVacunas(
	Vacunas_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Vacunas_Fecha DATE NOT NULL,	
	Vacunas_IdProducto INT NOT NULL,
	Vacunas_Precio FLOAT NOT NULL,	
	Vacunas_IdMascota INT NOT NULL,
	Vacunas_Observacion VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,
	Vacunas_Cita INT NOT NULL COMMENT '1(actual).2(agenda)',
	/*Vacunas_CitaFecha DATE NOT NULL,*/
	Vacunas_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Vacunas_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Vacunas_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Vacunas_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Vacunas_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL
);

ALTER TABLE `tblVacunas` ADD `Vacunas_CitaEstado` VARCHAR(1) NOT NULL DEFAULT '' COMMENT '(A - abierto : C - cerrado)' AFTER `Vacunas_Cita`;

DROP TABLE IF EXISTS tblBanio;
CREATE TABLE tblBanio(
	Banio_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Banio_Fecha DATE NOT NULL,	
	Banio_IdProducto INT NOT NULL,
	Banio_Precio FLOAT NOT NULL,	
	Banio_IdMascota INT NOT NULL,
	Banio_Observacion VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,
	Banio_Cita INT NOT NULL COMMENT '1(actual).2(agenda)',
	/*Banio_CitaFecha DATE NOT NULL,		*/
	Banio_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Banio_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Banio_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Banio_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Banio_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL
);

DROP TABLE IF EXISTS tblDesparacitacion;
CREATE TABLE tblDesparacitacion(
	Desparacitacion_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Desparacitacion_Fecha DATE NOT NULL,	
	Desparacitacion_IdProducto INT NOT NULL,
	Desparacitacion_Precio FLOAT NOT NULL,	
	Desparacitacion_IdMascota INT NOT NULL,
	Desparacitacion_Observacion VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,
	Desparacitacion_Cita INT NOT NULL COMMENT '1(actual).2(agenda)',
	/*Desparacitacion_CitaFecha DATE NOT NULL,*/
	Desparacitacion_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Desparacitacion_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Desparacitacion_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Desparacitacion_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Desparacitacion_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL
);

DROP TABLE IF EXISTS tblVenta;
CREATE TABLE tblVenta(
	Venta_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Venta_IdKardex INT NOT NULL
	Venta_Fecha DATE NOT NULL,	
	Venta_IdMascota INT NOT NULL,
	Venta_PrecioTotal FLOAT NOT NULL,	
	Venta_Cantidad FLOAT NOT NULL,	
	Venta_Observacion VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,		
	Venta_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Venta_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Venta_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Venta_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Venta_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL
);

DROP TABLE IF EXISTS tblVentaDetalle;
CREATE TABLE tblVentaDetalle(
	VentaDetalle_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	VentaDetalle_VentaId INT NOT NULL,	
	VentaDetalle_IdProducto INT NOT NULL,		
	VentaDetalle_Precio FLOAT NOT NULL,	
	VentaDetalle_Cantidad FLOAT NOT NULL,	
	VentaDetalle_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	VentaDetalle_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	VentaDetalle_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	VentaDetalle_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	VentaDetalle_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL
);


DROP PROCEDURE tblCompra
CREATE TABLE `tblCompra` (
 `Compra_Id` int(11) NOT NULL AUTO_INCREMENT,
 `Compra_IdKardex` int(11) NOT NULL,
 `Compra_Fecha` date NOT NULL,
 `Compra_Guia` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
 `Compra_PrecioTotal` float NOT NULL,
 `Compra_Cantidad` float NOT NULL,
 `Compra_Observacion` varchar(1000) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
 `Compra_Estado` int(11) NOT NULL COMMENT '1(activ).2(desact)',
 `Compra_FechaGra` datetime NOT NULL,
 `Compra_UserGrab` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
 `Compra_FechaGrab_Edicion` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
 `Compra_UserGrab_Edicion` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
 PRIMARY KEY (`Compra_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

DROP TABLE IF EXISTS tblCompraDetalle;
CREATE TABLE `tblCompraDetalle` (
 `CompraDetalle_Id` int(11) NOT NULL AUTO_INCREMENT,
 `CompraDetalle_CompraId` int(11) NOT NULL,
 `CompraDetalle_IdProducto` int(11) NOT NULL,
 `CompraDetalle_Precio` float NOT NULL,
 `CompraDetalle_Cantidad` float NOT NULL,
 `CompraDetalle_Estado` int(11) NOT NULL COMMENT '1(activ).2(desact)',
 `CompraDetalle_FechaGra` datetime NOT NULL,
 `CompraDetalle_UserGrab` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
 `CompraDetalle_FechaGrab_Edicion` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
 `CompraDetalle_UserGrab_Edicion` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
 PRIMARY KEY (`CompraDetalle_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

DROP TABLE IF EXISTS tblAtencion;
CREATE TABLE tblAtencion(
	Atencion_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Atencion_Fecha DATE NOT NULL,
	Atencion_Cita INT NOT NULL COMMENT '1(actual).2(agenda)',
	/*Atencion_CitaFecha DATE NOT NULL,	*/
	Atencion_IdMascota INT NOT NULL,
	Atencion_Sintomas VARCHAR(3000) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_T VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_FC VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,		
	Atencion_FR VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_sc_Deshidratacion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_sc_Mucosas VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_sc_TLLC VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_sc_Vomitos VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_sc_Diarreas VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_sc_Ganglios VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_sc_Peso VARCHAR(50) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_dx_Presuntivo VARCHAR(150) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_dx_Definitivo VARCHAR(50) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_dx_Solicitado VARCHAR(150) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_tr_Descripcion VARCHAR(150) COLLATE latin1_spanish_ci NOT NULL,	
	Atencion_tr_Observacion VARCHAR(150) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_tr_Precio FLOAT NOT NULL,
	Atencion_IdDocumento INT NOT NULL,
	Atencion_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Atencion_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Atencion_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Atencion_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Atencion_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL
);

DROP TABLE IF EXISTS tblDocumento;
CREATE TABLE tblDocumento(
	Documento_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Documento_Ubicacion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Documento_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Documento_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Documento_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Documento_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Documento_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL	
);

DROP TABLE IF EXISTS tblEspecie;
CREATE TABLE tblEspecie(
	Especie_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Especie_Nombre VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Especie_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Especie_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Especie_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Especie_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Especie_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL	
);

DROP TABLE IF EXISTS tblRaza;
CREATE TABLE tblRaza(
	Raza_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Raza_Nombre VARCHAR(100),
	Raza_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Raza_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Raza_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Raza_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Raza_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL	
);
ALTER TABLE `tblRaza` ADD `Raza_IdEspecie` INT NOT NULL AFTER `Raza_Id`;

DROP TABLE IF EXISTS tblTipoProducto;
CREATE TABLE tblTipoProducto(
	TipoProducto_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	TipoProducto_Nombre VARCHAR(100),
	TipoProducto_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	TipoProducto_Observacion VARCHAR(100),
	TipoProducto_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	TipoProducto_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	TipoProducto_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	TipoProducto_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL	
);
ALTER TABLE `tblCategoria` CHANGE `Categoria_TipoPro` `Categoria_IdTipoPro` INT(11) NOT NULL;


DROP TABLE IF EXISTS tblCategoria;
CREATE TABLE tblCategoria(
	Categoria_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Categoria_TipoPro INT NOT NULL,	
	Categoria_Nombre VARCHAR(100),
	Categoria_Observacion VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,	
	Categoria_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Categoria_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Categoria_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Categoria_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Categoria_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL	
);

DROP TABLE IF EXISTS tblUM;
CREATE TABLE tblUM(
	UM_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	UM_NombreCorto VARCHAR(10),
	UM_NombreLargo VARCHAR(100),	
	UM_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	UM_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	UM_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	UM_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	UM_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL	
);

DROP TABLE IF EXISTS tblProvincia;
CREATE TABLE tblProvincia(
	Provincia_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Provincia_Nombre VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Provincia_Estado INT NOT NULL COMMENT '1(activ).2(eliminado)')


DROP TABLE IF EXISTS tblDistrito;
CREATE TABLE tblDistrito(
	Distrito_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Distrito_IdProvincia INT NOT NULL,
   	Distrito_Nombre VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Distrito_Estado INT NOT NULL COMMENT '1(activ).2(eliminado)');

/*
DROP TABLE IF EXISTS tblServicio;
CREATE TABLE tblServicio(
	IdServicio INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Nombre VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Precio FLOAT,
	Estado INT NOT NULL COMMENT '1(activ).2(desact)'

);
DROP TABLE IF EXISTS tblTipoAtencion;
CREATE TABLE tblTipoAtencion(
	IdTipoAtencion INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Nombre VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Estado INT NOT NULL COMMENT '1(activ).2(desact)'
);
DROP TABLE IF EXISTS tblCompras;
CREATE TABLE tblCompra(
	IdCompra INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	IdMascota INT NOT NULL,
	FechaCompra DATE,	
	PrecioVentaTotal FLOAT,
	Estado INT NOT NULL COMMENT '1(activ).2(desact)'
);
DROP TABLE IF EXISTS tblCompras;
CREATE TABLE tblCompraDetalle(
	IdCompraDetalle INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	IdCompra INT NOT NULL,
	IdProducto INT,
	PrecioVenta FLOAT,
	Estado INT NOT NULL COMMENT '1(activ).2(desact)'
);
DROP TABLE IF EXISTS tblProveedor;
CREATE TABLE tblProveedor(
	IdProveedor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Ruc INT NOT NULL,	
	Direccion VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,
	Telefono INT NOT NULL,
	Estado INT NOT NULL COMMENT '1(activ).2(desact)'
);
DROP TABLE IF EXISTS tblPersonal;
CREATE TABLE tblPersonal(
	IdPersonal INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Nombre VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Apellido VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	TelefonoFijo VARCHAR(10) COLLATE latin1_spanish_ci NOT NULL,
	TelefonoCel VARCHAR(10) COLLATE latin1_spanish_ci NOT NULL,
	Email VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Foto VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,
	Provincia VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Distrito VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Direccion VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,
	Observacion VARCHAR(3000) COLLATE latin1_spanish_ci NOT NULL,
	Estado INT NOT NULL COMMENT '1(activ).2(eliminado)'
);
*/


DROP TABLE IF EXISTS tblAlmacen;
CREATE TABLE tblAlmacen(
	Almacen_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Almacen_IdKardex INT NOT NULL,
	Almacen_IdProducto INT NOT NULL,
	Almacen_Cantidad INT NOT NULL,	
	Almacen_IdSede INT NOT NULL,	
	Almacen_Observacion VARCHAR(1000) COLLATE latin1_spanish_ci NOT NULL,		
	Almacen_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Almacen_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Almacen_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Almacen_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Almacen_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL
);


DROP TABLE IF EXISTS tblVentaTemporal;
CREATE TABLE tblVentaTemporal(
	VentaTemporal_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	VentaTemporal_IdTipoRegistro INT NOT NULL,
	VentaTemporal_Idvacuna INT NOT NULL,
	VentaTemporal_Idventa INT NOT NULL,	
    VentaTemporal_Fecha DATE NOT NULL,	
    VentaTemporal_IdProducto INT NOT NULL,
    VentaTemporal_Precio FLOAT NOT NULL,
    VentaTemporal_IdMascota INT NOT NULL,
    VentaTemporal_Observacion VARCHAR(100) NOT NULL,    
    VentaTemporal_Cita INT NOT NULL,
    VentaTemporal_Usuario VARCHAR(50),
    VentaTemporal_VentaTipo INT NOT NULL,
    VentaTemporal_TipoPago INT NULL,
    VentaTemporal_Descuento FLOAT NOT NULL,
    VentaTemporal_Cantidad FLOAT NOT NULL,
    VentaTemporal_PrecioTotal FLOAT NOT NULL,
    VentaTemporal_ObservacionVenta VARCHAR(100) NOT NULL,
    VentaTemporal_IdAlmacen FLOAT NOT NULL,    
	VentaTemporal_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	VentaTemporal_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	VentaTemporal_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL
);


DROP TABLE IF EXISTS tblSede;
CREATE TABLE tblSede(
	Sede_Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Sede_Ubicacion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Sede_Nombre VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,    
	Sede_Estado INT NOT NULL COMMENT '1(activ).2(desact)',
	Sede_FechaGra DATETIME COLLATE latin1_spanish_ci NOT NULL,
	Sede_UserGrab VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL,
	Sede_FechaGrab_Edicion DATETIME COLLATE latin1_spanish_ci NOT NULL DEFAULT '1900-01-01',
	Sede_UserGrab_Edicion VARCHAR(100) COLLATE latin1_spanish_ci NOT NULL	
);


DROP TABLE IF EXISTS tblCompraDetalle_tmp;
CREATE TABLE `tblCompraDetalle_tmp` (
 `CompraDetalle_tmp_CompraId` int(11) NOT NULL,
 `CompraDetalle_tmp_IdProducto` int(11) NOT NULL,
 `CompraDetalle_tmp_Precio` float NOT NULL,
 `CompraDetalle_tmp_Cantidad` float NOT NULL,
 `CompraDetalle_tmp_FechaGra` datetime NOT NULL,
 `CompraDetalle_tmp_UserGrab` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1



DROP TABLE IF EXISTS tblCompra_tmp;
CREATE TABLE `tblCompra_tmp` (
 `Compra_tmp_Id` int(11) NOT NULL AUTO_INCREMENT,
 `Compra_tmp_FechaGra` datetime NOT NULL,
 `Compra_tmp_UserGrab` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
 PRIMARY KEY (`Compra_tmp_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1