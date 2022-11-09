-- --------------------------------------------------------
-- Host:                         10.50.103.53
-- Versión del servidor:         10.9.3-MariaDB-1:10.9.3+maria~ubu2204 - mariadb.org binary distribution
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para portaventura_db
CREATE DATABASE IF NOT EXISTS `portaventura_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `portaventura_db`;

-- Volcando estructura para tabla portaventura_db.bookings
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL COMMENT 'Id de reserva',
  `clientId` int(10) NOT NULL DEFAULT 0 COMMENT 'Id del cliente',
  `hotelId` int(11) DEFAULT NULL,
  `roomId` int(5) NOT NULL COMMENT 'Id habitacion',
  `entryDate` date NOT NULL COMMENT 'Fecha de entrada',
  `departureDate` date NOT NULL COMMENT 'Fecha de salida',
  `pension` int(5) NOT NULL COMMENT 'Tipo de pension',
  `totalPrice` int(4) NOT NULL COMMENT 'Precio total',
  PRIMARY KEY (`id`),
  KEY `Client ID` (`clientId`),
  KEY `FK_bookings_hotelsInfo` (`hotelId`),
  KEY `Room ID` (`roomId`),
  CONSTRAINT `Client ID` FOREIGN KEY (`clientId`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_bookings_hotelsInfo` FOREIGN KEY (`hotelId`) REFERENCES `hotelsInfo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Room ID` FOREIGN KEY (`roomId`) REFERENCES `hotels` (`hotelId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla portaventura_db.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de cliente',
  `name` varchar(50) NOT NULL COMMENT 'Nombre ',
  `1lastname` varchar(50) NOT NULL COMMENT 'Primer apellido',
  `2lastname` varchar(50) DEFAULT NULL COMMENT 'Segundo apellido',
  `documentType` varchar(50) NOT NULL COMMENT 'Tipo de documento',
  `documentID` varchar(50) NOT NULL COMMENT 'Numeor de documento',
  `phone` int(11) NOT NULL COMMENT 'Telefono movil',
  `email` varchar(50) NOT NULL COMMENT 'Email',
  `country` varchar(50) NOT NULL COMMENT 'Pais',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla portaventura_db.hotels
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numero de registo',
  `hotelId` int(11) NOT NULL COMMENT 'Numeor de hotel',
  `roomId` int(11) NOT NULL COMMENT 'Numeor de habitacion',
  `type` varchar(50) NOT NULL COMMENT 'Tipo de habitacion',
  `beed` int(11) NOT NULL COMMENT 'Numero de camas',
  `persons` int(11) NOT NULL COMMENT 'Numero de personas',
  `price` int(11) NOT NULL COMMENT 'Precio por nohe',
  PRIMARY KEY (`id`),
  KEY `Hotel ID` (`hotelId`),
  CONSTRAINT `Hotel ID` FOREIGN KEY (`hotelId`) REFERENCES `hotelsInfo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1004 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla portaventura_db.hotelsInfo
CREATE TABLE IF NOT EXISTS `hotelsInfo` (
  `id` int(11) NOT NULL COMMENT 'Id del hotel',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT 'Nombre del hotel',
  `parkAccess` int(11) NOT NULL COMMENT 'Acceso al parque',
  `spa` int(11) NOT NULL COMMENT 'Spa',
  `buffet` int(11) NOT NULL COMMENT 'Buffet libre',
  `restaurans` int(11) NOT NULL COMMENT 'Restaurantes',
  `shoppingRoom` int(11) NOT NULL COMMENT 'Compras a la habitacion',
  `miniGolf` int(11) NOT NULL COMMENT 'Mini golf',
  `Golf` int(11) NOT NULL COMMENT 'Golf',
  `stars` int(11) NOT NULL COMMENT 'Estrellas',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla portaventura_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL DEFAULT '0',
  `password` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
