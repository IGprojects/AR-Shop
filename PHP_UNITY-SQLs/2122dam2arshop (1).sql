-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2022 a las 22:45:29
-- Versión del servidor: 10.2.38-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `2122dam2arshop`
--
CREATE DATABASE IF NOT EXISTS `2122dam2arshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `2122dam2arshop`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `ID_Usuari` int(10) NOT NULL,
  `ID_Producte` int(10) NOT NULL,
  `Talla` varchar(10) NOT NULL,
  `Quantitat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despegable_seguiment`
--

CREATE TABLE `despegable_seguiment` (
  `ID_Estat` int(1) NOT NULL,
  `Descripcio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `despegable_seguiment`
--

INSERT INTO `despegable_seguiment` (`ID_Estat`, `Descripcio`) VALUES
(1, 'Origen'),
(2, 'Aduanas'),
(3, 'Destino'),
(4, 'Recibido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desplegable_estructura`
--

CREATE TABLE `desplegable_estructura` (
  `ID_Estructura` int(11) NOT NULL,
  `Descripcio` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `desplegable_estructura`
--

INSERT INTO `desplegable_estructura` (`ID_Estructura`, `Descripcio`) VALUES
(1, 'Simple'),
(2, '1x2'),
(3, '2X1'),
(4, '2X1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desplegable_talla`
--

CREATE TABLE `desplegable_talla` (
  `ID` int(11) NOT NULL,
  `Descripcio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `desplegable_talla`
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
-- Estructura de tabla para la tabla `desplegable_tipus`
--

CREATE TABLE `desplegable_tipus` (
  `idTipus` int(1) NOT NULL,
  `Descripcio` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `desplegable_tipus`
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
-- Estructura de tabla para la tabla `liniapedido`
--

CREATE TABLE `liniapedido` (
  `ID_Liniapedido` int(10) NOT NULL,
  `ID_Pedido` int(10) NOT NULL,
  `ID_Producte` int(10) NOT NULL,
  `Talla` varchar(10) NOT NULL,
  `Quantitat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `liniapedido`
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
(95, 570656682, 11, 'S', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listadeseos`
--

CREATE TABLE `listadeseos` (
  `ID_Usuari` int(10) NOT NULL,
  `ID_Producte` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `listadeseos`
--

INSERT INTO `listadeseos` (`ID_Usuari`, `ID_Producte`) VALUES
(1, 5),
(1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `ID_Noticia` int(11) NOT NULL,
  `Titol` varchar(40) NOT NULL,
  `Descripcio` longtext NOT NULL,
  `Estructura` int(1) NOT NULL,
  `Imatge` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`ID_Noticia`, `Titol`, `Descripcio`, `Estructura`, `Imatge`) VALUES
(1, 'New Nike Shoes', 'HAeqfewqfeHAeqfewqfewfewfffHAeqfewqfewfewfffHAeqfewqfewfewfffHAeqfewqfewfewfffHAeqfewqfewfewfffHAeqfewqfewfewfffHAeqfewqfewfewfffHAeqfewqfewfewfffwfewfff', 2, 'C:/xampp/htdocs/arshop/public/fotos/Noticias/adidas.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `ID_Pedido` int(10) NOT NULL,
  `ID_Usuari` int(10) NOT NULL,
  `DataSortida` date NOT NULL,
  `DataArribada` date DEFAULT NULL,
  `Estat` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
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
(328524765, 1, '2022-05-31', NULL, 1),
(346088653, 1, '2022-05-30', NULL, 1),
(374300037, 1, '2022-05-31', NULL, 1),
(570656682, 1, '2022-05-31', NULL, 1),
(770431638, 1, '2022-05-31', '2022-05-28', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producte`
--

CREATE TABLE `producte` (
  `ID_Producte` int(10) NOT NULL,
  `Nom_Producte` varchar(30) NOT NULL,
  `Preu` int(10) NOT NULL,
  `URL` varchar(200) NOT NULL,
  `Tipus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producte`
--

INSERT INTO `producte` (`ID_Producte`, `Nom_Producte`, `Preu`, `URL`, `Tipus`) VALUES
(1, 'North Face Puffer', 666, '', 1),
(3, 'Adidas Superstar', 4, 'http://ellaboratori.cat/~arshop/Fotos/adidasicon.png', 2),
(4, 'Nike dunk', 233, 'http://ellaboratori.cat/~arshop/Fotos/nikedunk.png', 2),
(5, 'Adidas Performance', 344, 'http://ellaboratori.cat/~arshop/Fotos/adidasicon.png', 2),
(6, 'Puma Thunder', 22, 'http://ellaboratori.cat/~arshop/Fotos/nikedunk.png', 2),
(7, 'Adidas Panda', 231, 'http://ellaboratori.cat/~arshop/Fotos/nikedunk.png', 2),
(8, 'Apple Watch 3', 300, 'http://ellaboratori.cat/~arshop/Fotos/applewatchfoto.png', 3),
(9, 'Anillo', 2000, 'https://ellaboratori.cat/~arshop/Fotos/anilloproducto.png', 5),
(10, 'MarshmelloMask', 60, 'https://ellaboratori.cat/~arshop/Fotos/marshmellomask.png', 6),
(11, 'Sofa White Puil', 500, 'http://ellaboratori.cat/~arshop/Fotos/sofas.png', 4),
(12, 'Planta Amazonica', 20, 'http://ellaboratori.cat/~arshop/Fotos/plant.png', 4),
(13, 'Levis V2', 90, 'http://ellaboratori.cat/~arshop/Fotos/levis.png', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuari`
--

CREATE TABLE `usuari` (
  `ID_Usuari` int(10) NOT NULL,
  `Nom_Usuari` varchar(20) NOT NULL,
  `Nombre_Apellidos` varchar(40) NOT NULL,
  `Gmail` varchar(35) NOT NULL,
  `Contrasenya` varchar(255) NOT NULL,
  `Tel` int(9) NOT NULL,
  `Adressa` varchar(40) NOT NULL,
  `Provincia` varchar(20) NOT NULL,
  `Pais` varchar(20) NOT NULL,
  `Ciutat` varchar(20) NOT NULL,
  `CP` int(5) NOT NULL,
  `Moneda` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuari`
--

INSERT INTO `usuari` (`ID_Usuari`, `Nom_Usuari`, `Nombre_Apellidos`, `Gmail`, `Contrasenya`, `Tel`, `Adressa`, `Provincia`, `Pais`, `Ciutat`, `CP`, `Moneda`) VALUES
(1, 'Ignasi8310', 'Ignasi Ferres', 'iferres2002@gmail.com', '$2y$10$rRxk4Z4F71.ign8atjL2j.4HJVehU9KatGuipgSfLUcr74Jl6bt1q', 685349234, 'Consulta Pinell 2', 'Girona', 'Espanya', 'Palafrugell', 17200, 9000000),
(16, 'efe', 'wef', 'ewf', '$2y$10$Gv/HushsRNEG9L7/qSyaCuCUkoBVrpgEgDJPSzsUbj0Afg/DVinsG', 3, 'wevfew', 'ewf', 'ewf', 'ewf', 23, 21),
(17, 'plokilo', 'ed', 'ewf', '$2y$10$Q30X/QyrNMg1Ou5/T0coI.Li7.9.ty5OLCyLG8frb3sn9bC3EuRdm', 54, 'wfew', 'wef', 'wef', 'wef', 23, 21),
(19, 'ewfewf', 'wefew', 'ewfew', '$2y$10$Xlf/OaSw8ItDiZJDSMCYweNbMh5DwXQiAF91fFtNTBJMryOSbDGeK', 3343, 'ewfew', 'wef', 'ewf', 'wef', 33, 0),
(20, 'ewfewf', 'polkij', 'ewfedwdw', '$2y$10$U7CaELW0aSCJnf1RuXHYMe0Qc7aUYpxYePrI6TgD2txi1s2iKkVce', 3343, 'ewfew', 'wef', 'ewf', 'wef', 33, 0),
(21, 'asdsa', 'lopez', 'cvvc', '$2y$10$CGsC/IUIyxGkmhSK2b0pL.kRNBYa3gm45nCXQfhx6FXiCrGuSkrji', 3432, '234', '324', '324', '324', 324, 0),
(22, 'qwdwqd', 'qwdwq', 'qwdqwdw', '$2y$10$jp88.l/D3n2a.Zgx1PcTMuoQMjscs9bDZcAOgznbfVFWbYQqJX35O', 23213, '3123', '213', '23', '321', 21, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `desplegable_talla`
--
ALTER TABLE `desplegable_talla`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `liniapedido`
--
ALTER TABLE `liniapedido`
  ADD PRIMARY KEY (`ID_Liniapedido`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`ID_Noticia`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`ID_Pedido`);

--
-- Indices de la tabla `producte`
--
ALTER TABLE `producte`
  ADD PRIMARY KEY (`ID_Producte`);

--
-- Indices de la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`ID_Usuari`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `desplegable_talla`
--
ALTER TABLE `desplegable_talla`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `liniapedido`
--
ALTER TABLE `liniapedido`
  MODIFY `ID_Liniapedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `ID_Noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `ID_Pedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=770431639;

--
-- AUTO_INCREMENT de la tabla `producte`
--
ALTER TABLE `producte`
  MODIFY `ID_Producte` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuari`
--
ALTER TABLE `usuari`
  MODIFY `ID_Usuari` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
