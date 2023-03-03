-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2023 a las 16:48:40
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `num_contrato` int(100) NOT NULL,
  `cedula` int(20) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `Contrato` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`num_contrato`, `cedula`, `fecha_inicio`, `fecha_final`, `Nombre`, `apellido`, `Contrato`) VALUES
(23232, 23213123, '2023-01-31', '2023-02-10', 'sergei', 'tr44', 'n12.jpg'),
(243243, 32423432, '2023-02-17', '2023-03-04', 'jutd', 'jjj', 'n6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dimensiones`
--

CREATE TABLE `dimensiones` (
  `id_dimension` int(60) NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `acronimo_dimension` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dimensiones`
--

INSERT INTO `dimensiones` (`id_dimension`, `dimension`, `acronimo_dimension`) VALUES
(1, 'SALUD AMBIENTAL', 'SA'),
(2, 'VIDA SALUDABLE Y CONDICIONES NO TRASMISIBLES', 'VSCNT'),
(3, 'CONVIVENCIA SOCIAL Y SALUD MENTAL', 'CSSM'),
(4, 'SEGURIDAD ALIMENTARIA Y NUTRICIONAL', 'SAN'),
(5, 'SEXUALIDAD DERECHOS SEXUALES REPRODUCTIVOS', 'SDSR'),
(6, 'VIDA SEXUAL Y ENFERMEDADES TRANSMISIBLES', 'VSET'),
(7, 'ENFERMEDADES ENDEMOEPUDEMICAS', 'EE'),
(8, 'INMUNOPREVENIBLES', 'I'),
(9, 'ENFERMEDADES - EMERGENTES, REMERGENTES Y  DESANTEDIDAS\r\n', 'EERD'),
(10, 'SALUD PÚBLICA Y EMERGENCIA DE DESASTRES', 'SPED'),
(11, 'GESTION DE PRESTACION DE SERVICIOS INDIVIDUALES', 'GPSI'),
(12, 'GESTION DE LAS INTERVENICONES COLECTIVAS', 'GA'),
(13, 'VIGILANCIA EN SALUD PUBLICA', 'VSP'),
(14, 'GESTION ADMINISTRATIVA Y FINANCIERA', 'GAF'),
(15, 'VEJEZ', 'EV'),
(16, 'NINOS NIÑAS Y ADOLECENTES', 'NNA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_doc` int(20) NOT NULL,
  `Archivo` varchar(300) NOT NULL,
  `fecha_doc` datetime DEFAULT current_timestamp(),
  `acronimo_dimension` varchar(30) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `Nombre` varchar(203) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id_doc`, `Archivo`, `fecha_doc`, `acronimo_dimension`, `tipo`, `Nombre`) VALUES
(9095, 'AP05nOAnLabDisArquiHardnn2n___55621558a6936b8___.pdf', '2023-02-16 00:00:00', 'VSCNT', 'pdf', 'ggg'),
(12345678, 'Constancia_de_participacin.pdf', '2023-02-16 00:00:00', 'SA', 'pdf', 'naya');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoja_vida`
--

CREATE TABLE `hoja_vida` (
  `cedula` int(30) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `hoja_vida` varchar(200) NOT NULL,
  `id_hojav` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hoja_vida`
--

INSERT INTO `hoja_vida` (`cedula`, `nombre`, `apellido`, `hoja_vida`, `id_hojav`) VALUES
(2147483647, 'sergei', 'noendelito', 'WhatsApp Image 2022-03-29 at 7.46.51 AM.jpeg', 5),
(2435345, 'rgtrf', 'rgr', 'n11.jpg', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `nom_usu` varchar(20) NOT NULL,
  `tipo_usu` varchar(20) NOT NULL,
  `usua_contra` varchar(40) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido`, `Correo`, `nom_usu`, `tipo_usu`, `usua_contra`, `foto`) VALUES
(1, 'sergio', 'tapia', 'satapia11@misena.edu.co', 'sergio', 'admin', '12345', ''),
(2, 'yei', 'ner', 'yeiner.villanueva@misena.edu.co', 'yeiner', 'admin', '12345', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dimensiones`
--
ALTER TABLE `dimensiones`
  ADD PRIMARY KEY (`id_dimension`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_doc`),
  ADD KEY `acronimo_dimension` (`acronimo_dimension`);

--
-- Indices de la tabla `hoja_vida`
--
ALTER TABLE `hoja_vida`
  ADD PRIMARY KEY (`id_hojav`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dimensiones`
--
ALTER TABLE `dimensiones`
  MODIFY `id_dimension` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `hoja_vida`
--
ALTER TABLE `hoja_vida`
  MODIFY `id_hojav` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
