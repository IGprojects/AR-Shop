-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2023 at 10:33 PM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2122dam2arshop`
--
CREATE DATABASE IF NOT EXISTS `2122dam2arshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `2122dam2arshop`;

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `ID_Usuari` int NOT NULL,
  `ID_Producte` int NOT NULL,
  `Talla` varchar(10) NOT NULL,
  `Quantitat` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrito`
--

INSERT INTO `carrito` (`ID_Usuari`, `ID_Producte`, `Talla`, `Quantitat`) VALUES
(1, 5, '42', 1),
(1, 5, '43', 1),
(1, 10, 'M', 1);

-- --------------------------------------------------------

--
-- Table structure for table `despegable_seguiment`
--

CREATE TABLE `despegable_seguiment` (
  `ID_Estat` int NOT NULL,
  `Descripcio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `despegable_seguiment`
--

INSERT INTO `despegable_seguiment` (`ID_Estat`, `Descripcio`) VALUES
(1, 'Origen'),
(2, 'Aduanas'),
(3, 'Destino'),
(4, 'Recibido');

-- --------------------------------------------------------

--
-- Table structure for table `desplegable_estructura`
--

CREATE TABLE `desplegable_estructura` (
  `ID_Estructura` int NOT NULL,
  `Descripcio` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `desplegable_estructura`
--

INSERT INTO `desplegable_estructura` (`ID_Estructura`, `Descripcio`) VALUES
(1, 'Simple'),
(2, '1x2'),
(3, '2X1'),
(4, '2X1');

-- --------------------------------------------------------

--
-- Table structure for table `desplegable_talla`
--

CREATE TABLE `desplegable_talla` (
  `ID` int NOT NULL,
  `Descripcio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desplegable_talla`
--

INSERT INTO `desplegable_talla` (`ID`, `Descripcio`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL'),
(6, 'XLL'),
(11, '40'),
(12, '41'),
(13, '42'),
(14, '43'),
(15, '44'),
(16, '45');

-- --------------------------------------------------------

--
-- Table structure for table `desplegable_tipus`
--

CREATE TABLE `desplegable_tipus` (
  `idTipus` int NOT NULL,
  `Descripcio` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `desplegable_tipus`
--

INSERT INTO `desplegable_tipus` (`idTipus`, `Descripcio`) VALUES
(1, 'Clothes'),
(2, 'Shoes'),
(3, 'Accesories'),
(4, 'Other'),
(5, 'Anells'),
(6, 'Ulleres');

-- --------------------------------------------------------

--
-- Table structure for table `liniapedido`
--

CREATE TABLE `liniapedido` (
  `ID_Liniapedido` int NOT NULL,
  `ID_Pedido` int NOT NULL,
  `ID_Producte` int NOT NULL,
  `Talla` varchar(10) NOT NULL,
  `Quantitat` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `liniapedido`
--

INSERT INTO `liniapedido` (`ID_Liniapedido`, `ID_Pedido`, `ID_Producte`, `Talla`, `Quantitat`) VALUES
(20, 4000, 7, '23', 23),
(21, 4000, 7, '45', 45),
(51, 4000, 3, '42', 42),
(52, 4000, 3, '43', 43),
(53, 4000, 3, '44', 44),
(54, 4000, 3, '45', 45),
(55, 4000, 5, '41', 41),
(56, 4000, 5, '42', 42),
(57, 4000, 5, '43', 43),
(58, 4000, 5, '44', 44),
(65, 4000, 4, '41', 1),
(66, 4000, 4, '41', 1),
(67, 4000, 4, '42', 1),
(68, 112, 3, '41', 1),
(69, 0, 3, '42', 1),
(70, 0, 3, '43', 1),
(71, 346088653, 4, '41', 1),
(72, 346088653, 4, '42', 1),
(73, 346088653, 4, '43', 1),
(74, 1, 1, '2', 1),
(75, 26747241, 3, '42', 1),
(76, 26747241, 3, '43', 1),
(77, 30572181, 1, 'M', 1),
(78, 30572181, 1, 'XL', 1),
(80, 770431638, 1, 'S', 1),
(81, 770431638, 1, 'M', 1),
(83, 328524765, 1, 'S', 1),
(84, 328524765, 1, 'M', 1),
(86, 374300037, 1, 'S', 1),
(87, 374300037, 1, 'M', 1),
(89, 570656682, 3, '41', 1),
(90, 570656682, 3, '42', 1),
(91, 570656682, 4, '43', 1),
(92, 570656682, 4, '42', 1),
(93, 570656682, 11, 'M', 1),
(94, 570656682, 11, 'XS', 1),
(95, 570656682, 11, 'S', 1),
(96, 812547212, 8, 'S', 1),
(97, 177036718, 3, '42', 1),
(98, 177036718, 10, 'XLL', 1),
(99, 177036718, 9, 'M', 1),
(100, 177036718, 8, 'L', 1),
(104, 481600854, 3, '42', 2),
(105, 481600854, 3, '43', 1),
(106, 481600854, 3, '44', 1),
(107, 481600854, 3, '45', 1),
(111, 416287517, 3, '41', 1),
(112, 416287517, 3, '42', 1),
(113, 416287517, 3, '43', 1),
(114, 435307231, 3, '41', 1),
(115, 435307231, 3, '42', 1),
(117, 618811356, 3, '40', 1),
(118, 618811356, 3, '41', 1),
(119, 618811356, 3, '42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `listadeseos`
--

CREATE TABLE `listadeseos` (
  `ID_Usuari` int NOT NULL,
  `ID_Producte` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `listadeseos`
--

INSERT INTO `listadeseos` (`ID_Usuari`, `ID_Producte`) VALUES
(1, 5),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE `noticia` (
  `ID_Noticia` int NOT NULL,
  `Titol` varchar(40) NOT NULL,
  `Descripcio` longtext NOT NULL,
  `Estructura` int NOT NULL,
  `Imatge` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`ID_Noticia`, `Titol`, `Descripcio`, `Estructura`, `Imatge`) VALUES
(1, 'New Nike Shoes', 'HAeqfewqfeHAeqfewqfewfewfffHAeqfewqfewfewfffHAeqfewqfewfewfffHAeqfewqfewfewfffHAeqfewqfewfewfffHAeqfewqfewfewfffHAeqfewqfewfewfffHAeqfewqfewfewfffwfewfff', 2, 'C:/xampp/htdocs/arshop/public/fotos/Noticias/adidas.png');

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE `pedido` (
  `ID_Pedido` int NOT NULL,
  `ID_Usuari` int NOT NULL,
  `DataSortida` date NOT NULL,
  `DataArribada` date DEFAULT NULL,
  `Estat` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pedido`
--

INSERT INTO `pedido` (`ID_Pedido`, `ID_Usuari`, `DataSortida`, `DataArribada`, `Estat`) VALUES
(1, 1, '0000-00-00', '0001-00-00', 3),
(2, 1, '0000-00-00', '0013-00-00', 4),
(3, 1, '0000-00-00', '0013-00-00', 4),
(4, 1, '0000-00-00', '0013-00-00', 1),
(5, 1, '0000-00-00', '0013-00-00', 1),
(6, 1, '0000-00-00', '0013-00-00', 1),
(7, 1, '0000-00-00', '0013-00-00', 1),
(8, 1, '2022-05-27', '2022-05-18', 4),
(9, 1, '2001-01-01', '0013-00-00', 1),
(10, 1, '2001-01-01', '0013-00-00', 1),
(112, 1, '2022-05-28', '2022-05-28', 1),
(4000, 1, '2022-05-30', NULL, 1),
(4001, 1, '2022-05-30', NULL, 1),
(26747241, 1, '2022-05-31', NULL, 1),
(30572181, 1, '2022-05-31', NULL, 1),
(177036718, 1, '2022-06-11', NULL, 1),
(328524765, 1, '2022-05-31', NULL, 1),
(346088653, 1, '2022-05-30', NULL, 1),
(374300037, 1, '2022-05-31', NULL, 1),
(416287517, 1, '2022-06-13', NULL, 1),
(435307231, 1, '2022-06-13', NULL, 1),
(481600854, 1, '2022-06-13', NULL, 1),
(570656682, 1, '2022-05-31', NULL, 1),
(618811356, 1, '2022-06-13', NULL, 1),
(770431638, 1, '2022-05-31', '2022-05-28', 2),
(812547212, 1, '2022-06-02', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `producte`
--

CREATE TABLE `producte` (
  `ID_Producte` int NOT NULL,
  `Nom_Producte` varchar(30) NOT NULL,
  `Preu` int NOT NULL,
  `URL` varchar(200) NOT NULL,
  `Tipus` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `producte`
--

INSERT INTO `producte` (`ID_Producte`, `Nom_Producte`, `Preu`, `URL`, `Tipus`) VALUES
(1, 'North Face Puffer', 666, '', 1),
(3, 'Adidas Superstar', 4, 'http://igprojects.sytes.net/arshop_Files/Fotos/adidasicon.png', 2),
(4, 'Nike dunk', 233, 'http://igprojects.sytes.net/arshop_Files/Fotos/nikedunk.png', 2),
(5, 'Adidas Performance', 344, 'http://igprojects.sytes.net/arshop_Files/Fotos/adidasicon.png', 2),
(6, 'Puma Thunder', 22, 'http://igprojects.sytes.net/arshop_Files/Fotos/nikedunk.png', 2),
(7, 'Adidas Panda', 231, 'http://igprojects.sytes.net/arshop_Files/Fotos/nikedunk.png', 2),
(8, 'Apple Watch 3', 300, 'http://igprojects.sytes.net/arshop_Files/Fotos/applewatchfoto.png', 3),
(9, 'Anillo', 2000, 'http://igprojects.sytes.net/arshop_Files/Fotos/anilloproducto.png', 5),
(10, 'MarshmelloMask', 60, 'http://igprojects.sytes.net/arshop_Files/Fotos/marshmellomask.png', 6),
(11, 'Sofa White Puil', 500, 'http://igprojects.sytes.net/arshop_Files/Fotos/sofas.png', 4),
(12, 'Planta Amazonica', 20, 'http://igprojects.sytes.net/arshop_Files/Fotos/plant.png', 4),
(13, 'Levis V2', 90, 'http://igprojects.sytes.net/arshop_Files/Fotos/levis.png', 6);

-- --------------------------------------------------------

--
-- Table structure for table `usuari`
--

CREATE TABLE `usuari` (
  `ID_Usuari` int NOT NULL,
  `Nom_Usuari` varchar(20) NOT NULL,
  `Nombre_Apellidos` varchar(40) NOT NULL,
  `Gmail` varchar(35) NOT NULL,
  `Contrasenya` varchar(255) NOT NULL,
  `Tel` int NOT NULL,
  `Adressa` varchar(40) NOT NULL,
  `Provincia` varchar(20) NOT NULL,
  `Pais` varchar(20) NOT NULL,
  `Ciutat` varchar(20) NOT NULL,
  `CP` int NOT NULL,
  `Moneda` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuari`
--

INSERT INTO `usuari` (`ID_Usuari`, `Nom_Usuari`, `Nombre_Apellidos`, `Gmail`, `Contrasenya`, `Tel`, `Adressa`, `Provincia`, `Pais`, `Ciutat`, `CP`, `Moneda`) VALUES
(1, 'Ignasi8310', 'Ignasi Ferres', 'iferres2002@gmail.com', '$2y$10$OcyJuF9GOvFcbOF1GzWYG.cp1h6hlDaqLy2wg7noVngxJGovGvdxS', 685349234, 'Consulta Pinell 2', 'Girona', 'Espanya', 'Palafrugell', 17200, 8997284),
(16, 'efe', 'wef', 'ewf', '$2y$10$Gv/HushsRNEG9L7/qSyaCuCUkoBVrpgEgDJPSzsUbj0Afg/DVinsG', 3, 'wevfew', 'ewf', 'ewf', 'ewf', 23, 21),
(17, 'plokilo', 'ed', 'ewf', '$2y$10$Q30X/QyrNMg1Ou5/T0coI.Li7.9.ty5OLCyLG8frb3sn9bC3EuRdm', 54, 'wfew', 'wef', 'wef', 'wef', 23, 21),
(19, 'ewfewf', 'wefew', 'ewfew', '$2y$10$Xlf/OaSw8ItDiZJDSMCYweNbMh5DwXQiAF91fFtNTBJMryOSbDGeK', 3343, 'ewfew', 'wef', 'ewf', 'wef', 33, 0),
(20, 'ewfewf', 'polkij', 'ewfedwdw', '$2y$10$U7CaELW0aSCJnf1RuXHYMe0Qc7aUYpxYePrI6TgD2txi1s2iKkVce', 3343, 'ewfew', 'wef', 'ewf', 'wef', 33, 0),
(21, 'asdsa', 'lopez', 'cvvc', '$2y$10$CGsC/IUIyxGkmhSK2b0pL.kRNBYa3gm45nCXQfhx6FXiCrGuSkrji', 3432, '234', '324', '324', '324', 324, 0),
(22, 'qwdwqd', 'qwdwq', 'qwdqwdw', '$2y$10$jp88.l/D3n2a.Zgx1PcTMuoQMjscs9bDZcAOgznbfVFWbYQqJX35O', 23213, '3123', '213', '23', '321', 21, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desplegable_talla`
--
ALTER TABLE `desplegable_talla`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `liniapedido`
--
ALTER TABLE `liniapedido`
  ADD PRIMARY KEY (`ID_Liniapedido`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`ID_Noticia`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`ID_Pedido`);

--
-- Indexes for table `producte`
--
ALTER TABLE `producte`
  ADD PRIMARY KEY (`ID_Producte`);

--
-- Indexes for table `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`ID_Usuari`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desplegable_talla`
--
ALTER TABLE `desplegable_talla`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `liniapedido`
--
ALTER TABLE `liniapedido`
  MODIFY `ID_Liniapedido` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `ID_Noticia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `ID_Pedido` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=812547213;

--
-- AUTO_INCREMENT for table `producte`
--
ALTER TABLE `producte`
  MODIFY `ID_Producte` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usuari`
--
ALTER TABLE `usuari`
  MODIFY `ID_Usuari` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
