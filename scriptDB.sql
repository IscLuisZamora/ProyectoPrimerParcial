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

CREATE TABLE `tbl_ope_venta` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelicula_venta` int(11) DEFAULT NULL,
  `cantidad_venta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `id_pelicula_venta_idx` (`id_pelicula_venta`),
  CONSTRAINT `id_pelicula_venta` FOREIGN KEY (`id_pelicula_venta`) REFERENCES `tbl_ope_pelicula` (`id_pelicula`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
