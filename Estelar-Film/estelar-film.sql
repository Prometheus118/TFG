-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2022 a las 18:49:52
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estelar-film`
--
CREATE DATABASE IF NOT EXISTS `estelar-film` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `estelar-film`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `actualizarFecha_estreno`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarFecha_estreno` (IN `fecest` VARCHAR(255), IN `idp` INT(255))   UPDATE peliculas
SET fecha_estreno = fecest
WHERE id_pelicula = idp$$

DROP PROCEDURE IF EXISTS `actualizarTemporada`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarTemporada` (IN `temp` INT(100), IN `ids` INT(11))   UPDATE series
SET temporadas = temp
WHERE id_serie = ids$$

DROP PROCEDURE IF EXISTS `borrarPeliculas`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `borrarPeliculas` (IN `idp` INT(100))   DELETE
FROM peliculas
WHERE id_pelicula = idp$$

DROP PROCEDURE IF EXISTS `borrarSeries`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `borrarSeries` (IN `ids` INT(100))   DELETE
FROM series
WHERE id_serie = ids$$

DROP PROCEDURE IF EXISTS `InsertarEmail`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarEmail` (IN `username` VARCHAR(155), IN `email` VARCHAR(155), IN `asnto` VARCHAR(155), IN `incid` VARCHAR(500))   INSERT INTO correos(nombre_usuario,email,asunto,incidencia)
VALUES (username,email,asnto,incid)$$

DROP PROCEDURE IF EXISTS `InsertarUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarUsuario` (IN `nom` VARCHAR(100), IN `passwd` VARCHAR(255))   INSERT INTO usuarios (nombre_usuario, contrasena)
VALUES (nom, passwd)$$

DROP PROCEDURE IF EXISTS `mostrarFecha_estreno`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarFecha_estreno` (IN `fecest` INT)   SELECT *
FROM peliculas
WHERE id_pelicula = fecest$$

DROP PROCEDURE IF EXISTS `mostrarTemporada`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarTemporada` (IN `temp` INT)   SELECT *
FROM series
WHERE id_serie = temp$$

DROP PROCEDURE IF EXISTS `mostrarUsuarioporNombre`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarUsuarioporNombre` (IN `nom` VARCHAR(100))   SELECT nombre_usuario,contrasena 
FROM Usuarios 
WHERE nombre_usuario=nom$$

DROP PROCEDURE IF EXISTS `recogerFecha_estreno`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `recogerFecha_estreno` ()   SELECT fecha_estreno
FROM peliculas$$

DROP PROCEDURE IF EXISTS `recogerPeliculas`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `recogerPeliculas` ()   SELECT *
FROM peliculas$$

DROP PROCEDURE IF EXISTS `recogerSeries`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `recogerSeries` ()   SELECT *
FROM series$$

DROP PROCEDURE IF EXISTS `recogerTemporadas`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `recogerTemporadas` ()   SELECT temporadas
FROM series$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

DROP TABLE IF EXISTS `correos`;
CREATE TABLE `correos` (
  `email_id` int(155) NOT NULL,
  `nombre_usuario` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `asunto` varchar(155) NOT NULL,
  `incidencia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
CREATE TABLE `peliculas` (
  `id_pelicula` int(155) NOT NULL,
  `nombre_pelicula` varchar(155) NOT NULL,
  `director` varchar(155) NOT NULL,
  `reparto` varchar(5000) NOT NULL,
  `descripcion` varchar(5000) NOT NULL,
  `fecha_estreno` varchar(100) NOT NULL,
  `genero` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_pelicula`, `nombre_pelicula`, `director`, `reparto`, `descripcion`, `fecha_estreno`, `genero`) VALUES
(1, 'Avengers:Infinity War\r\n', 'Antonio Russo, Joe Russo\r\n', 'Robert Downey Jr., Chris Hemsworth, Benedict Cumberbatch, Chris Evans, Mark Ruffalo, Scarlett Johansson, Chris Pratt, Tom Holland, Josh Brolin, Elizabeth Olsen, Chadwick Boseman, Pom Klementieff, Terry Notary, Dave Bautista, Karen Gillan, Zoe Saldana, Gwyneth Paltrow, Tom Hiddleston, Cobie Smulders, Paul Bettany, Sebastian Stan, Peter Dinklage, Samuel L. Jackson, Benicio del Toro, Danai Gurira, Benedict Wong, Anthony Mackie, Don Cheadle, Idris Elba, Vin Diesel, Bradley Cooper, William Hurt, Stan Lee, Ross Marquand, Jacob Batalon, Zola Williams, Ariana Greenblatt, Winston Duke, Marija Juliette Abney, Janeshia Adams-Ginyard, Florence Kasumba', 'El todopoderoso Thanos ha despertado con la promesa de arrasar con todo a su paso, portando el Guantelete del Infinito, que le confiere un poder incalculable. Los únicos capaces de pararle los pies son los Vengadores y el resto de superhéroes de la galaxia, que deberán estar dispuestos a sacrificarlo todo por un bien mayor. Capitán América e Ironman deberán limar sus diferencias, Black Panther apoyará con sus tropas desde Wakanda, Thor y los Guardianes de la Galaxia e incluso Spider-Man se unirán antes de que los planes de devastación y ruina pongan fin al universo. ¿Serán capaces de frenar el avance del titán del caos?\r\n', '2019/04/22', 'Action / Adventure\r\n'),
(2, 'Rogue One:A Star Wars Story\r\n', 'Gareth Edwards\r\n', 'Felicity Jones, Diego Luna, Alan Tudyk, Donnie Yen\r\n', 'En un momento de conflicto, un grupo de héroes inverosímiles se unen en una misión para robar los planos de la Estrella de la Muerte, el arma de destrucción definitiva del Imperio.\r\n', '2016/12/16', 'Sci-Fi\r\n'),
(3, 'Dawn of the Planet of the Apes\r\n', 'Matt Reeves\r\n', 'Gary Oldman, Keri Russell, Andy Serkis, Kodi Smit-McPhee\r\n', 'Una nación en crecimiento de simios genéticamente evolucionados liderada por Caesar se ve amenazada por un grupo de sobrevivientes humanos del devastador virus desatado una década antes.\r\n', '2014/06/11', 'Sci-Fi / Action\r\n'),
(4, 'The Wolverine\r\n', 'James Mangold\r\n', 'Hugh Jackman, Will Yun Lee, Tao Okamoto, Rila Fukushima\r\n', 'Wolverine llega a Japón para encontrarse con un viejo amigo cuya vida salvó hace años, y se ve envuelto en una conspiración que involucra a yakuzas y mutantes.\r\n', '2013/06/26\r\n', 'Action\r\n'),
(5, 'Now You See Me\r\n', 'Louis Leterrier\r\n', 'Jesse Eisenberg, Common, Mark Ruffalo, Woody Harrelson\r\n', 'Un agente del FBI y una detective de la Interpol rastrean a un equipo de ilusionistas que realizan atracos bancarios durante sus actuaciones y recompensan a su público con el dinero.\r\n', '2013/05/31', 'Thriller\r\n'),
(6, 'The Dark Knight Rises\r\n', 'Christopher Nolan\r\n', 'Christian Bale, Tom Hardy, Anne Hathaway, Gary Oldman\r\n', 'Ocho años después del reinado anárquico del Joker, Batman, con la ayuda de la enigmática Catwoman, se ve obligado a salir de su exilio para salvar Gotham del brutal guerrillero terrorista Bane.\r\n', '2012/07/20', 'Action / Thriller\r\n'),
(7, 'X-Men:First Class\r\n', 'Matthew Vaughn\r\n', 'James McAvoy, Michael Fassbender, Jennifer Lawrence, Kevin Bacon\r\n', 'En la década de 1960, los humanos con superpoderes Charles Xavier y Erik Lensherr trabajan juntos para encontrar a otros como ellos, pero la búsqueda vengativa de Erik de un mutante ambicioso que arruinó su vida provoca un cisma que los divide.\r\n', '2011/06/03', 'Action / Adventure\r\n'),
(8, 'National Treasure:Book of Secrets\r\n', 'Jon Turteltaub\r\n', 'Nicolas Cage, Diane Kruger, Justin Bartha, Jon Voight\r\n', 'Benjamin Gates debe seguir una pista dejada en el diario de John Wilkes Booth para demostrar la inocencia de su antepasado en el asesinato de Abraham Lincoln.\r\n', '2007/12/21', 'Adventure\r\n'),
(9, 'Jurassic World\r\n', 'Colin Trevorrow\r\n', 'Chris Pratt, Bryce Dallas Howard, Ty Simpkins, Judy Greer\r\n', 'Un nuevo parque temático, construido en el sitio original de Jurassic Park, crea un dinosaurio híbrido modificado genéticamente, el Indominus Rex, que escapa de la contención y se lanza a matar.\r\n', '2015/06/12\r\n', 'Action / Adventure\r\n'),
(10, 'Pirates of the Caribbean:Dead Men Tell No Tales\r\n', 'Joachim Rønning, Espen Sandberg \r\n', 'Johnny Depp, Geoffrey Rush, Javier Bardem, Orlando Bloom\r\n', 'El capitán Jack Sparrow es perseguido por su viejo rival, el capitán Salazar, y una tripulación de fantasmas mortales que escaparon del Triángulo del Diablo. Están decididos a matar a todos los piratas en el mar... especialmente a Jack.\n', '2017/05/26\r\n', 'Adventure\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

DROP TABLE IF EXISTS `series`;
CREATE TABLE `series` (
  `id_serie` int(155) NOT NULL,
  `nombre_serie` varchar(155) NOT NULL,
  `creador` varchar(155) NOT NULL,
  `reparto` varchar(500) NOT NULL,
  `descripcion` varchar(5500) NOT NULL,
  `primera_emision` varchar(200) NOT NULL,
  `genero` varchar(150) NOT NULL,
  `temporadas` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `series`
--

INSERT INTO `series` (`id_serie`, `nombre_serie`, `creador`, `reparto`, `descripcion`, `primera_emision`, `genero`, `temporadas`) VALUES
(1, 'Arrow', 'Greg Berlanti; Marc Guggenheim; Andrew Kreisberg', 'Stephen Amell\r\nKatie Cassidy\r\nColin Donnell\r\nDavid Ramsey\r\nWilla Holland\r\nSusanna Thompson\r\nPaul Blackthorne\r\nEmily Bett Rickards\r\nColton Haynes\r\nManu Bennett\r\nJohn Barrowman\r\nEcho Kellum\r\nJosh Segarra\r\nRick Gonzalez\r\nJuliana Harkavy\r\nKirk Acevedo\r\nSea Shimooka\r\nKatherine McNamara\r\nBen Lewis\r\nJoseph David-Jones\r\nLaMonica Garrett', 'Después de un violento naufragio y tras haber desaparecido y creído muerto durante cinco años, el multimillonario playboy Oliver Queen es rescatado con vida en una isla del Pacífico. De vuelta en casa en Starling City, es recibido por su madre, su hermana y su mejor amigo, quienes rápidamente notan que la terrible experiencia sufrida lo ha cambiado. Por otra parte, trata de ocultar la verdad acerca de en quién se ha convertido mientras trata de enmendar los errores que cometió en el pasado y de reconciliarse con su ex novia, Laurel Lance. Mientras trata de volver a contactar a las personas de su pasado jugando el papel del mujeriego adinerado, despreocupado y descuidado que solía ser, ayudado por su fiel chofer y guardaespaldas John Diggle, crea en secreto el personaje de un justiciero encapuchado, un vigilante que lucha contra los males de la sociedad tratando de darle a su ciudad la gloria que antes tenía; complicando esta misión.', '10 de octubre de 2012', 'Accion', 8),
(2, 'Los 100', 'Jason Rothenberg', 'Eliza Taylor\r\nAlycia Debnam-Carey\r\nPaige Turco\r\nThomas McDonell\r\nEli Goree\r\nMarie Avgeropoulos\r\nBob Morley\r\nKelly Hu\r\nChristopher Larkin\r\nDevon Bostick\r\nIsaiah Washington\r\nHenry Ian Cusick\r\nLindsey Morgan\r\nRicky Whittle\r\nRichard Harmon\r\nZach McGowan\r\nTasya Teles\r\nShannon Kook\r\nJR Bourne\r\nChuku Modu\r\nShelby Flannery', 'Situada 97 años después de una guerra nuclear que ha destruido la civilización, los supervivientes de una nave espacial, que han sobrevivido durante 3 generaciones en el espacio, envían 100 delincuentes juveniles \"para testear\" las condiciones de la Tierra, con la esperanza de eventualmente volver a poblar el planeta. El grupo de jóvenes tratará de sobrevivir en un entorno desconocido y hostil a pesar de las brechas que se abren entre ellos, unos partidarios de seguir en conexión con la nave, otros a favor de empezar de cero sin depender de nadie. Mientras, en la nave, las luchas por el poder político se recrudecen, llevando a los dirigentes a situaciones extremas y difíciles decisiones.', '19 de marzo de 2014', 'Sci-Fi', 7),
(3, 'Juego de Tronos', 'David Benioff; D. B. Weiss', 'Lena Headey\r\nNikolaj Coster-Waldau\r\nEmilia Clarke, Iain Glen\r\nKit Harington\r\nSophie Turner\r\nMaisie Williams\r\nAlfie Allen\r\nPeter Dinklage', 'En una tierra donde los veranos duran décadas y los inviernos pueden durar toda una vida, los problemas acechan. Desde las maquinaciones del sur a las salvajes tierras del este, pasando por el helado norte y el milenario muro que protege el reino de las fuerzas tenebrosas, dos poderosas familias mantienen un enfrentamiento letal por gobernar los Siete Reinos de Poniente. Mientras la traición, la lujuria y las fuerzas sobrenaturales sacuden los pilares de los reinos, la sangrienta batalla por el trono de Hierro tendrá consecuencias imprevistas y trascendentales. El invierno se acerca. Que empiece \'Juego de tronos\'.', '17 de abril de 2011', 'Fantasia', 8),
(4, 'The Witcher', 'Lauren Schmidt Hissrich', '	\r\nHenry Cavill\r\nFreya Allan\r\nEamon Farren\r\nAnya Chalotra\r\nJoey Batey\r\nMyAnna Buring\r\nMahesh Jadu\r\nMimi Ndiweni\r\nAnna Shaffe', 'Geralt, un brujo que se dedica a cazar monstruos genéticamente modificados, busca su lugar en un mundo donde a menudo los humanos demuestran ser peores que las bestias.', '20 de diciembre de 2019', 'Fantasy ', 2),
(5, 'Vikings', 'Michael Hirst', '	\r\nTravis Fimmel\r\nKatheryn Winnick\r\nClive Standen\r\nJessalyn Gilsig\r\nGustaf Skarsgård\r\nGabriel Byrne\r\nGeorge Blagden\r\nDonal Logue\r\nAlyssa Sutherland\r\nLinus Roache\r\nAlexander Ludwig', 'Sigue las aventuras de Ragnar Lothbrok, el héroe más grande de su época. La serie narra las sagas de la banda de hermanos vikingos de Ragnar y su familia, cuando él se levanta para convertirse en el rey de las tribus vikingas. Además de ser un guerrero valiente, Ragnar encarna las tradiciones nórdicas de la devoción a los dioses, la leyenda dice que él era un descendiente directo de Odín, el dios de la guerra y los guerreros.', '3 de marzo de 2013', 'action / adventure', 6),
(6, 'Peaky Blinders', 'Otto Bathurst; Tom Harper; Colm McCarthy; Tim Mielants; David Caffrey; Anthony Byrn', 'Cillian Murphy\r\nSam Neill\r\nHelen McCrory\r\nPaul Anderson\r\nAnnabelle Wallis\r\nSophie Rundle\r\nJoe Cole\r\nNed Dennehy\r\nBenjamin Zephaniah\r\nNatasha O\'Keeffe\r\nFinn Cole\r\nCharlotte Riley\r\nTom Hardy\r\nAimee-Ffion Edwards', 'En Gran Bretaña, Reino Unido se recuperan de la desesperación de la Gran Guerra, las personas sobreviven a como pueden, y las bandas criminales proliferan en una nación sacudida económicamente.\r\n\r\nEs justamente aquí donde una familia de gánsteres irlandeses de origen nómada (a veces llamados gitanos o chatarreros) asentada en Birmingham (los Peaky Blinders) justo después de la Primera Guerra Mundial, dirigen un local de apuestas hípicas en la ciudad. Las acciones del ambicioso, respetado, temerario y peligroso jefe de la banda, Thomas Shelby, llaman la atención del Inspector jefe Chester Campbell, un detective de la Real Policía Irlandesa que es enviado por el mismo Winston Churchill desde Belfast donde había sido enviado a limpiar la ciudad del Ejército Republicano Irlandés (IRA), comunistas, pandillas y delincuentes comunes.', '12 de septiembre de 2013', 'Drama / Crime', 6),
(7, 'Altered Carbon', 'Laeta Kalogridis', 'Joel Kinnaman\r\nAnthony Mackie\r\nChris Conner\r\nRenée Elise Goldsberry\r\nJames Purefoy\r\nKristin Lehman\r\nMartha Higareda', '250 años después de su muerte, un prisionero vuelve a la vida en un nuevo cuerpo para resolver un asesinato y ganar así su libertad.', '2 de febrero de 2018', 'Sci-Fi', 2),
(8, 'Mr. Robot', 'Sam Esmail', 'Rami Malek\r\nCarly Chaikin\r\nPortia Doubleday\r\nMartin Wallström\r\nChristian Slater\r\nMichael Cristofer\r\nStephanie Corneliussen\r\nGrace Gummer\r\nBD Wong\r\nBobby Cannavale', 'Sigue a un misterioso anarquista que recluta a un joven programador de computadoras (Malek) que sufre de un trastorno antisocial y se conecta a la gente pirateándolos.', '24 de junio de 2015', 'Drama', 4),
(9, 'Prison Break', 'Paul Scheuring', 'Dominic Purcell\r\nWentworth Miller\r\nRobin Tunney\r\nPeter Stormare\r\nAmaury Nolasco\r\nMarshall Allman\r\nWade Williams\r\nPaul Adelstein\r\nSarah Wayne Callies\r\nRobert Knepper\r\nRockmond Dunbar\r\nWilliam Fichtner\r\nChris Vance\r\nRobert Wisdom\r\nDanay García\r\nJodi Lyn O\'Keefe\r\nMichael Rapaport\r\nMark Feuerstein\r\nInbar Lavi\r\nAugustus Prew', 'Michael Scofield (Wentworth Miller) es un hombre desesperado en un situación desesperada. Su hermano Lincoln Burrows (Dominic Purcell), condenado a la pena capital está a la espera de ser ejecutado. A pesar de todas las evidencias, Michael cree en su inocencia, por lo que decide robar un banco para dejarse atrapar y ser encarcelado en la misma prisión que su hermano. Su objetivo: escapar juntos.', '29 de agosto de 2005 ', 'Action', 5),
(10, 'La que se avecina', 'Alberto Caballero\r\nLaura Caballero\r\nDaniel Deorador', 'Silvia Abril\r\nMaría Adánez\r\nSilvia Alonso\r\nMalena Alterio\r\nManuel Andrés\r\nFabio Arcidiácono\r\nRicardo Arroyo\r\nMariví Bilbao\r\nPaola Bontempi\r\nCarlota Boza\r\nBeatriz Carvajal\r\nMaría Casal\r\nCristina Castaño\r\nPablo Chiapella\r\nAdrià Collado\r\nCook (perro)\r\nGemma Cuervo\r\nVerónica Forqué\r\nEduardo García Martínez\r\nJosé Luis Gil\r\nEduardo Gómez (actor)\r\nMacarena Gómez\r\nElio González\r\nNacho Guerreros\r\nNatalia Hernández\r\nMiren Ibarguren\r\nEva Isanta', 'Esta ficción en clave de humor afronta las aventuras y conflictos cotidianos de los vecinos de un edificio de nueva construcción en las periferias de una gran ciudad. Mirador de Montepinar es un inmueble que consta de un total de diez viviendas y de cuatro locales. Sus residentes y empleados conforman un singular y heterogéneo grupo.', '22 de abril de 2007', 'Comedy', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `nombre_usuario` varchar(500) NOT NULL,
  `contrasena` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre_usuario`, `contrasena`) VALUES
('ana', '$2y$10$fBBAfRDUx2Mt1CJiGZRBjep7gszjiGCXNo8QkruqV81GN57K2F6tS'),
('juan', '$2y$10$fE.rn9ou.waUVYcuk3WBA.Rxz9RJgoEbsZUysFSkb4A2vE9JGnlKq'),
('ChristianAdmin', '$2y$10$oJqBZ7NMV1cVlqwjdnjl8.pohfqIIBOkQJhkzgIxGyK5yEwdQe826'),
('paco', '$2y$10$vbANy6irdD3gVyK.YwNE8uzy5QkfvwbJPtsxecmA1tjtMXUR7dNqa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `correos`
--
ALTER TABLE `correos`
  ADD PRIMARY KEY (`email_id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_pelicula`),
  ADD UNIQUE KEY `nombre` (`nombre_pelicula`);

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id_serie`),
  ADD UNIQUE KEY `nombre_serie` (`nombre_serie`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombre_usuario`),
  ADD UNIQUE KEY `contrasena` (`contrasena`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `correos`
--
ALTER TABLE `correos`
  MODIFY `email_id` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_pelicula` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
