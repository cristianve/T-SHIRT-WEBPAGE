-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-01-2018 a las 18:34:05
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tdiw-b1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categorias`
--

CREATE TABLE `Categorias` (
  `idCategoria` int(2) NOT NULL,
  `NomCategoria` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Descripcion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Categorias de productos';

--
-- Volcado de datos para la tabla `Categorias`
--

INSERT INTO `Categorias` (`idCategoria`, `NomCategoria`, `Descripcion`) VALUES
(1, 'Hombre', 'Camisetas para hombre'),
(2, 'Mujer', 'Camisetas para mujer'),
(3, 'Niños', 'Camisetas para niños pequeños'),
(4, 'Padres', 'Camisetas para padres'),
(5, 'Contacta', 'Apartado de contacto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Facturas`
--

CREATE TABLE `Facturas` (
  `idFactura` int(5) NOT NULL,
  `idUsuario` int(5) NOT NULL,
  `Hora` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Tabla de Facturas';

--
-- Volcado de datos para la tabla `Facturas`
--

INSERT INTO `Facturas` (`idFactura`, `idUsuario`, `Hora`, `Fecha`, `Total`) VALUES
(24, 1, '06:29:00', '07/01/2018', 145.35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Productos`
--

CREATE TABLE `Productos` (
  `idProducto` int(3) NOT NULL,
  `Nombre_Producto` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Precio` float(5,2) NOT NULL,
  `Stock` int(2) NOT NULL,
  `Descripcion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Descripcion_Larga` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `Imagen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `idTalla` int(1) NOT NULL,
  `idCategoria` int(2) NOT NULL,
  `Actiu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Tabla de productos';

--
-- Volcado de datos para la tabla `Productos`
--

INSERT INTO `Productos` (`idProducto`, `Nombre_Producto`, `Precio`, `Stock`, `Descripcion`, `Descripcion_Larga`, `Imagen`, `idTalla`, `idCategoria`, `Actiu`) VALUES
(1, 'Breaking Gru', 18.90, 10, 'Camiseta Breaking Gru', 'Camiseta con mininos de la película Gru mi villano favorito, imitando la famosa serie de breaking bad. Color Blanco.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/hombre/breaking_gru.jpg', 3, 1, 1),
(2, 'Cazafantasmas', 17.90, 10, 'Camiseta logo cazafantasmas', 'Camiseta con el logo de la película de Los Cazafantasmas. Color Negro.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/hombre/cazafantasmas.jpg', 4, 1, 1),
(3, 'Lil Wayne', 19.95, 10, 'Camiseta Lil Wayne', 'Camiseta con la cara del famoso rapero Lil Wayne. Color Azul.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/hombre/lil_wayne.jpg', 5, 1, 1),
(4, 'LowCost', 14.95, 10, 'Camiserta LowCost', 'Camiseta con el logo de Lacost con la forma de globo hinchable. Color verde.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/hombre/lowcost.jpg', 3, 1, 1),
(5, 'Padre Gamer', 19.95, 10, 'Camiseta Padre Gamer', 'Camiseta con el texto Padre de dia, Gamer de noche y un mando de PlayStation colgando. Color gris.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/hombre/padre_gamer.jpg', 4, 1, 1),
(6, 'Palote', 12.95, 10, 'Camiseta Me pones palote', 'Camiseta para hombre con el texto me pones palote. Color Rojo.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/hombre/palote.jpg', 3, 1, 1),
(7, 'Sargento de Hierro', 17.95, 10, 'Camiseta Sargento de Hierro', 'Camiseta de la famosa película El sargento de Hierro de Clint Eastwood y su famosa frase. Color Negro.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/hombre/sargento_de_hierro.jpg', 4, 1, 1),
(8, 'Angelina Jolips', 12.95, 10, 'Camiseta Angelina Jolips', 'Camiseta con Angelina Jolie con los labios remarcados y pintados en rojo. Color Blanco.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/mujer/angelina_jolips.jpg', 2, 2, 1),
(9, 'Blancanieves', 14.95, 10, 'Camiseta Blancanieves', 'Camiseta de Blancanieves imitando el movimiento feminista We Can Do It!. Color Azul.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/mujer/blancanieves_we_can_do_it.jpg', 2, 2, 1),
(10, 'Escote', 9.95, 10, 'Camiseta con Escote', 'Camiseta con escote dibujado en medio para parecer un desnudo. Color Negro.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/mujer/escote.jpg', 1, 2, 1),
(11, 'Pollos Hermanos', 12.95, 10, 'Camiseta Pollos Hermanos', 'Camiseta con el logo de Los Pollos Hermanos, de la serie Breaking Bad. Color Blanco.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/mujer/los_pollos_hermanos.jpg', 2, 2, 1),
(12, 'Niña Bebe', 16.95, 10, 'Camiseta niña bebe', 'Camiseta de tirantes con imagen central de una niña bebe de dibujos con su conejito. Color blanco.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/mujer/nina_bebe.jpg', 1, 2, 1),
(13, 'Niña Globo', 15.95, 10, 'Camiseta niña globo', 'Camiseta con una imagen de una niña dejando ir un globo en forma de corazón. Color negro.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/mujer/nina_globo.jpg', 1, 2, 1),
(14, 'Pinza', 17.95, 10, 'Camiseta se va la pinza', 'Camiseta con la frase Se me va la pinza. Color Negro.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/mujer/se_me_va_la_pinza.jpg', 1, 2, 1),
(15, 'Darth Vader', 9.95, 10, 'Camiseta Darth vader', 'Camiseta con imagen de Darth Vader con tipografia de Stewe de padre de familia. Color azul oscuro.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/ninos/darth_vader.jpg', 2, 3, 1),
(16, 'Dragon Ball', 8.95, 10, 'Camiseta Dragon Ball', 'Camiseta con el logo de la famosa serie de Dragon Ball y la bola de dragón. Color Rojo.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/ninos/dragon_ball.jpg', 1, 3, 1),
(17, 'Fito Fitipaldis', 5.95, 10, 'Camiseta Fito', 'Camiseta del cantante Fito y Fitipaldis con el texto de su famosa canción. Color Rojo.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/ninos/fito.jpg', 1, 3, 1),
(18, 'Leia', 4.95, 10, 'Camiseta Princesa Leia', 'Camiseta de la princesa Leia de Star Wars con la frase \"La princesa de Papa\". Color Rosa. ', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/ninos/leia.jpg', 1, 3, 1),
(19, 'Mando Snes', 7.95, 10, 'Camiseta mando Snes', 'Camiseta con el logo del mando de la famosa consola Snes y el texto \"Player 2\". Color Blanco.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/ninos/mando_consola.jpg', 1, 3, 1),
(20, 'Minecraft', 9.95, 10, 'Camiseta Minecraft', 'Camiseta del famoso juego Minecraft para PC. Color verde.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/ninos/minecraft.jpg', 1, 3, 1),
(26, 'El Padrazo', 18.95, 10, 'Camiseta El Padrazo', 'Camiseta con el texto \"El Padrazo\" imitando las letras de la famosa pelÃ­cula \"El Padrino\". Color Negro', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/padres/el_padrazo.jpg', 3, 4, 1),
(27, 'Luke Madre', 14.95, 10, 'Camiseta Luke soy tu madre', 'Camiseta para mujer con frase \"Luke, soy tu madre\", de la famosa saga de Star Wars. Color Rosa.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/padres/luke.jpg', 2, 4, 1),
(28, 'Mama Superpoderes', 13.95, 10, 'Camiseta Mama Superpoderes', 'Camiseta con frase \"Las mamÃ¡s tenemos superpoderes\" y un dibujo de una niÃ±a imitando a superman. Color Blanco', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/padres/mama_superpoderes.jpg', 3, 4, 1),
(29, 'Mejor Mama', 16.95, 10, 'Camiseta Mejor Mama', 'Camiseta \"Para la mejor mamÃ¡ del mundo mundial\". Color blanco y azul.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/padres/mejor_mama.jpg', 1, 4, 1),
(30, 'Papa Loading', 19.95, 10, 'Camiseta Papa Loading', 'Camiseta con texto \"papa loading...\" y una barra de cargando un proceso. Color Amarillo.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/padres/papa_loading.jpg', 4, 4, 1),
(31, 'Gran Padre', 14.95, 10, 'Camiseta Gran Padre', 'Camiseta con el texto \"Este hombre es un gran Padre y tambiÃ©n un gran abuelo\". Color Azul oscuro.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/padres/gran_padre.jpg', 3, 4, 1),
(32, 'iDad', 25.95, 10, 'Camiseta iDad', 'Camiseta con la imitaciÃ³n de la marca Apple con el texto \"iDad, mÃ¡s que grande\". Color gris.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/padres/idad.jpg', 4, 4, 1),
(33, 'Madre Increíble', 12.95, 10, 'Camiseta Madre IncreÃ­ble', 'Camiseta con texto \"Soy una madre increÃ­ble y lo sabes\" con el dibujo de una mano y un dedo seÃ±alando. Color Azul claro.', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/padres/madre_increible.jpg', 2, 4, 1),
(34, 'Tits', 16.95, 10, 'Camiseta Tits', 'Camiseta con tags de HTML imitando la zona de las tetas. Color negro', 'http://deic-dc0.uab.cat/~tdiw-b1/resources/img/mujer/tits.jpg', 2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ProductosFacturas`
--

CREATE TABLE `ProductosFacturas` (
  `idFactura` int(5) NOT NULL,
  `idProducto` int(3) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Tabla N-M';

--
-- Volcado de datos para la tabla `ProductosFacturas`
--

INSERT INTO `ProductosFacturas` (`idFactura`, `idProducto`, `Cantidad`) VALUES
(24, 1, 5),
(24, 12, 2),
(24, 29, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tallas`
--

CREATE TABLE `Tallas` (
  `idTallas` int(1) NOT NULL,
  `Nombre_Talla` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `Medidas` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `Tallas`
--

INSERT INTO `Tallas` (`idTallas`, `Nombre_Talla`, `Medidas`) VALUES
(1, 'XS', '38/40'),
(2, 'S', '42/44'),
(3, 'M', '46/48'),
(4, 'L', '50/52'),
(5, 'XL', '54/56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `idUsuario` int(5) NOT NULL,
  `Nom` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Direccion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Poblacion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `CP` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `Tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Tabla de usuarios';

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`idUsuario`, `Nom`, `Password`, `Email`, `Direccion`, `Poblacion`, `CP`, `Tipo`) VALUES
(1, 'Marc', '$2y$10$f7JNeogjKXozYUMikG11u.DJg1HahlMGZ0XmRsfczxSO.W84HWbIe', 'markus_dc@hotmail.com', 'Calle Goya 16', 'Palleja', '08780', 1),
(2, 'Prueba', '$2y$10$KjBAuMQdBOIi/gvhro3Paer8i.s.gyY/YicuUm11gixczKBmk9DEG', 'prueba@prueba.com', 'Calle prueba', 'Prueba city', '08031', 0),
(21, 'Aleix', '$2y$10$o6uZsV/c/2w2HIsF6QhCPOySffV6MWinJr4GLynjHwLjuCt1whgmC', 'aleix@aleix.com', 'Calle Pelayo 123', 'Barcelona', '08034', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `Facturas`
--
ALTER TABLE `Facturas`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `usuario-factura` (`idUsuario`);

--
-- Indices de la tabla `Productos`
--
ALTER TABLE `Productos`
  ADD PRIMARY KEY (`idProducto`,`idTalla`,`idCategoria`) USING BTREE,
  ADD KEY `productos-tallas` (`idTalla`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `ProductosFacturas`
--
ALTER TABLE `ProductosFacturas`
  ADD PRIMARY KEY (`idFactura`,`idProducto`),
  ADD KEY `productos-facturas` (`idProducto`);

--
-- Indices de la tabla `Tallas`
--
ALTER TABLE `Tallas`
  ADD PRIMARY KEY (`idTallas`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  MODIFY `idCategoria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Facturas`
--
ALTER TABLE `Facturas`
  MODIFY `idFactura` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `Productos`
--
ALTER TABLE `Productos`
  MODIFY `idProducto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `Tallas`
--
ALTER TABLE `Tallas`
  MODIFY `idTallas` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `idUsuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Facturas`
--
ALTER TABLE `Facturas`
  ADD CONSTRAINT `usuario-factura` FOREIGN KEY (`idUsuario`) REFERENCES `Usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Productos`
--
ALTER TABLE `Productos`
  ADD CONSTRAINT `productos-categorias` FOREIGN KEY (`idCategoria`) REFERENCES `Categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos-tallas` FOREIGN KEY (`idTalla`) REFERENCES `Tallas` (`idTallas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ProductosFacturas`
--
ALTER TABLE `ProductosFacturas`
  ADD CONSTRAINT `facturas-productos` FOREIGN KEY (`idFactura`) REFERENCES `Facturas` (`idFactura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos-facturas` FOREIGN KEY (`idProducto`) REFERENCES `Productos` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
