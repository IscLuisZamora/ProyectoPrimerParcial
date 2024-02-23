USE computacionnube_db1;
SHOW TABLES;

-- SCRIPT DATABASE
CREATE DATABASE `computacionnube_db1` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

CREATE TABLE `tbl_ope_pelicula` (
  `id_pelicula` int(11) NOT NULL AUTO_INCREMENT,
  `pelicula_pelicula` varchar(50) DEFAULT NULL,
  `entradas_pelicula` int(11) DEFAULT NULL,
  `costo_pelicula` int(11) DEFAULT NULL,
  `activo_pelicula` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pelicula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `computacionnube_db1`.`tbl_ope_pelicula` 
DROP COLUMN `costo_pelicula`,
DROP COLUMN `entradas_pelicula`,
CHANGE COLUMN `imagenRuta_pelicula` `imagenRuta_pelicula` VARCHAR(200) NULL DEFAULT NULL AFTER `pelicula_pelicula`;


CREATE TABLE `tbl_ope_venta` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelicula_venta` int(11) DEFAULT NULL,
  `cantidad_venta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `id_pelicula_venta_idx` (`id_pelicula_venta`),
  CONSTRAINT `id_pelicula_venta` FOREIGN KEY (`id_pelicula_venta`) REFERENCES `tbl_ope_pelicula` (`id_pelicula`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- PROCEDURES
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_film`(__nombre varchar(50), __imagen varchar(200))
BEGIN
	INSERT INTO tbl_ope_pelicula VALUES(NULL, __nombre, __imagen, 1);
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_Sales`(__idPelicula int, __cantidad int, __costo int)
BEGIN
	INSERT INTO tbl_ope_venta VALUES(NULL, __idPelicula, __cantidad, __costo);
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_TPelicula`(__film varchar(100), __ruta varchar(200))
BEGIN
INSERT INTO tbl_pelicula VALUES(NULL,UPPER(__film),__ruta,1);
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `show_FilmTPeliculaId`(_id int)
BEGIN
SELECT * FROM tbl_pelicula WHERE id_pelicula=_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `showFilms`()
BEGIN
SELECT * FROM tbl_pelicula;
END$$
DELIMITER ;
