-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for merakidatabase
CREATE DATABASE IF NOT EXISTS `merakidatabase` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `merakidatabase`;

-- Dumping structure for table merakidatabase.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table merakidatabase.categorias: ~2 rows (approximately)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nombre`) VALUES
	(1, 'Lugares Turisticos'),
	(2, 'Emprendurismo'),
	(3, 'Entrevistas'),
	(4, 'Tecnología'),
	(5, 'Innovación'),
	(6, 'Restaurantes');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Dumping structure for table merakidatabase.entradas
CREATE TABLE IF NOT EXISTS `entradas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `texto` longtext,
  `img` varchar(50) DEFAULT NULL,
  `categoria` int(11) NOT NULL DEFAULT '0',
  `fecha-creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_entradas_categorias` (`categoria`),
  CONSTRAINT `FK_entradas_categorias` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table merakidatabase.entradas: ~0 rows (approximately)
/*!40000 ALTER TABLE `entradas` DISABLE KEYS */;
/*!40000 ALTER TABLE `entradas` ENABLE KEYS */;

-- Dumping structure for table merakidatabase.galeria
CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `categoria` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table merakidatabase.galeria: ~6 rows (approximately)
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
INSERT INTO `galeria` (`id`, `titulo`, `descripcion`, `imagen`, `categoria`) VALUES
	(1, 'Prueba1', 'Imagen de Prueba', 'turismoA.jpg', 'lugares_turisticos'),
	(3, 'ruinas', 'ruinas de el salvador', 'turismo3.jpg', 'lugares_turisticos'),
	(4, 'turi', 'turismo', 'turimo4.jpg', 'lugares_turisticos'),
	(5, 'Conchagua - La UniÃ³n', 'FÃ¡tima ChegÃ¼en - visita a Conchagua', 'IMG-20170918-WA0007.jpg', 'lugares_turisticos'),
	(6, 'Conchagua - La UniÃ³n', 'De izquierda a derecha: FÃ¡tima ChegÃ¼en, UsÃºe Gamero, Gabriela Gamero.', 'IMG-20170918-WA0005.jpg', 'lugares_turisticos'),
	(7, 'Conchagua - La UniÃ³n', 'FÃ¡tima ChegÃ¼en', 'IMG-20170918-WA0008.jpg', 'lugares_turisticos');
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;

-- Dumping structure for table merakidatabase.tipo_user
CREATE TABLE IF NOT EXISTS `tipo_user` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table merakidatabase.tipo_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `tipo_user` DISABLE KEYS */;
INSERT INTO `tipo_user` (`id_tipo`, `nombre`) VALUES
	(1, 'admin'),
	(2, 'suscriptor');
/*!40000 ALTER TABLE `tipo_user` ENABLE KEYS */;

-- Dumping structure for table merakidatabase.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `forgotpasswordid` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`),
  KEY `FK_users_tipo_user` (`id_tipo`),
  CONSTRAINT `FK_users_tipo_user` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_user` (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

-- Dumping data for table merakidatabase.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `id_tipo`, `nombre`, `email`, `pass`, `created`, `updated`, `forgotpasswordid`) VALUES
	(1, 1, 'MyAdmin', 'merakiadmin', 'a2cff89b94ba635d10bd1d3c4cd84b19', '2017-10-01 19:59:08', '2017-10-01 19:59:08', NULL),
	(8, 2, 'Gerard Orellana', 'gerard_gt2009@hotmail.com', NULL, '2017-09-16 02:33:54', '2017-09-16 02:33:54', NULL),
	(10, 2, 'Gerardo orellana', 'gerard.gt2009@gmail.com', NULL, '2017-09-17 00:20:28', '2017-09-17 00:20:28', NULL),
	(12, 2, '', '', NULL, '2017-09-17 01:35:19', '2017-09-17 01:35:19', NULL),
	(14, 2, 'GA MB', 'gamb_tav@hotmail.com', NULL, '2017-09-17 06:06:50', '2017-09-17 06:06:50', NULL),
	(16, 2, 'GamB', 'gambtav83@gmail.com', NULL, '2017-09-17 06:07:22', '2017-09-17 06:07:22', NULL),
	(18, 2, 'Gilberto Argueta', 'gilberto-argueta@hotmail.com', NULL, '2017-09-17 18:21:57', '2017-09-17 18:21:57', NULL),
	(20, 2, 'AngÃ©lica', 'angelica.g.garcia.a@gmail.com', '8cb333b7e7ed500009a4444e03e007f1', '2017-09-17 18:27:46', '2017-09-17 18:27:46', NULL),
	(21, 2, 'alemendez', 'alemendez_1992@hotmail.com', 'fc3df6d02b138ef5859dd6e92c1cd50a', '2017-09-17 18:33:05', '2017-09-17 18:33:05', NULL),
	(22, 2, 'Johana Osorto', 'josorto489@gmail.com', NULL, '2017-09-17 18:33:13', '2017-09-17 18:33:13', NULL),
	(24, 2, 'Moises Alvarenga Carbajal', 'mi.merk2013@gmail.com', NULL, '2017-09-17 19:56:52', '2017-09-17 19:56:52', NULL),
	(26, 2, 'Jesus PeÃ±a', 'jesus.pena.molina@deses.net', '82e7bcbca32e8fc828457c083a6ac5bb', '2017-09-17 20:05:28', '2017-09-17 20:05:28', NULL),
	(27, 2, 'Adru Jimenez', 'adru795@gmail.com', NULL, '2017-09-18 11:10:34', '2017-09-18 11:10:34', NULL),
	(29, 2, 'all_lz', 'al_lazo@hotmail.com', '8af6d182dc942af6247ac6afe870e271', '2017-09-18 17:47:00', '2017-09-18 17:47:00', NULL),
	(30, 2, 'BeckyF', 'rebecafiallos@hotmail.com', '10a0f131100f7e5389941ef05db0ae13', '2017-09-18 19:14:13', '2017-09-18 19:14:13', NULL),
	(31, 2, 'Melvin Eneas', 'memb1@hotmail.es', NULL, '2017-09-18 19:43:53', '2017-09-18 19:43:53', NULL),
	(33, 2, 'Katherine Salguero', 'tirine05@yahoo.es', NULL, '2017-09-18 19:53:19', '2017-09-18 19:53:19', NULL),
	(35, 2, 'Karla Mena', 'karla_mena.g@hotmail.com', NULL, '2017-09-18 19:59:26', '2017-09-18 19:59:26', NULL),
	(37, 2, 'Nelson Menjivar', 'nelsonmp3@yahoo.com', NULL, '2017-09-18 20:13:00', '2017-09-18 20:13:00', NULL),
	(39, 2, 'Nelson', 'israelp1701@gmail.com', 'ec7b434589de3799b71e60feae7bcf49', '2017-09-18 20:16:04', '2017-09-18 20:16:04', NULL),
	(40, 2, 'Alisson Aguilera', 'aly.aguilera2@outlook.es', '328dca6369f53a735f47323acc5b34f0', '2017-09-18 20:21:45', '2017-09-18 20:21:45', NULL),
	(41, 2, 'merakimagazine', 'merakimagazine@gmail.com', 'e1e254ba3f700f1c1f145484b4afc85e', '2017-09-18 20:37:11', '2017-09-18 20:37:11', NULL),
	(42, 2, 'Carlos Alvarado', 'mana_vergil0497@hotmail.com', NULL, '2017-09-18 22:03:42', '2017-09-18 22:03:42', NULL),
	(44, 2, 'Laura Pati', 'ark_ngel@hotmail.es', NULL, '2017-09-19 09:18:24', '2017-09-19 09:18:24', NULL),
	(46, 2, 'Desarrollo EconÃ³mico Social DESES', 'director@deses.net', NULL, '2017-09-21 14:32:06', '2017-09-21 14:32:06', NULL),
	(48, 2, 'Chelita27', 'lucy..garay@hotmail.com', '99c4cdf35975c7d74eaef1f1033207f6', '2017-09-21 19:10:04', '2017-09-21 19:10:04', NULL),
	(49, 2, 'Gabriela Ramos', 'rgabrielaabigail19@gmail.com', NULL, '2017-09-22 21:37:58', '2017-09-22 21:37:58', NULL),
	(50, 2, 'JesÃºs PeÃ±a', 'jesus.pena.molina@gmail.com', '3140126581e31f67437db24523ade804', '2017-09-29 14:22:48', '2017-09-29 14:22:48', NULL),
	(51, 2, 'Chelita2701', 'lucy.garay@hotmail.com', '99c4cdf35975c7d74eaef1f1033207f6', '2017-09-30 21:10:01', '2017-09-30 21:10:01', NULL),
	(52, 2, 'Gerard Orellana', 'gerard.gt2015@gmail.com', NULL, '2017-10-01 21:44:01', '2017-10-01 21:44:01', NULL),
	(53, 2, 'ArquÃ­medes Ruiz', 'jruiz632@yahoo.com', NULL, '2017-10-01 22:11:53', '2017-10-01 22:11:53', NULL),
	(54, 2, 'Andrea Alvarado', 'fafiry_20@hotmail.com', NULL, '2017-10-01 22:21:31', '2017-10-01 22:21:31', NULL),
	(55, 2, 'blanca hernandez', 'blancahdez2210@gmail.com', 'ebe1f74c97fe64864a110111f657ec68', '2017-10-02 10:46:43', '2017-10-02 10:46:43', NULL),
	(56, 2, 'ACAF', 'acafderl@gmail.com', '10285a94e613d72844b74008ed69c98d', '2017-10-02 11:15:13', '2017-10-02 11:15:13', NULL),
	(57, 2, 'Karla Molina', 'stefgorda@hotmail.com', NULL, '2017-10-02 12:22:37', '2017-10-02 12:22:37', NULL),
	(58, 2, 'Lucy Garay', 'lucygaray2701@gmail.com', NULL, '2017-10-02 13:31:44', '2017-10-02 13:31:44', NULL),
	(59, 2, 'Antonio Martinez', 'guapoelantonio@hotmail.com', NULL, '2017-10-02 18:32:59', '2017-10-02 18:32:59', NULL),
	(60, 2, 'Antonio Martinez', 'jantoniomr11046@outlook.com', '0f1284cebda3ef240e9bd9d03c2494a3', '2017-10-02 18:36:21', '2017-10-02 18:36:21', NULL),
	(61, 2, 'Stefany Ziur', 'stef26_30@hotmail.com', NULL, '2017-10-02 20:25:11', '2017-10-02 20:25:11', NULL),
	(62, 2, 'Fannii Aragon', 'sally_martirfan@hotmail.com', NULL, '2017-10-02 20:36:44', '2017-10-02 20:36:44', NULL),
	(63, 2, 'Juan Zelayandia', 'inteligencia.comercial.ba@gmail.com', NULL, '2017-10-02 21:39:39', '2017-10-02 21:39:39', NULL),
	(64, 2, 'Jose Hernandez', 'dj-lil-joe@live.com', NULL, '2017-10-03 04:21:54', '2017-10-03 04:21:54', NULL),
	(65, 2, 'Daniel Ruiz M', 'darmgim1301@gmail.com', NULL, '2017-10-03 04:58:02', '2017-10-03 04:58:02', NULL),
	(66, 2, 'Jonathan Olmedo', 'ing.jonathanolmedo@gmail.com', NULL, '2017-10-03 09:34:48', '2017-10-03 09:34:48', NULL),
	(67, 2, 'Gricht Moreno', 'grismoreno17@yahoo.com', NULL, '2017-10-03 10:02:41', '2017-10-03 10:02:41', NULL),
	(68, 2, 'Moises Alvarenga', 'mi.contab@yahoo.com', NULL, '2017-10-03 13:19:46', '2017-10-03 13:19:46', NULL),
	(69, 2, 'Lizzy Saenz', 'lizsnz11@gmail.com', NULL, '2017-10-03 13:55:42', '2017-10-03 13:55:42', NULL),
	(70, 2, 'Gabriela Silhy', 'gabrielaibarra704@gmail.com', 'c3c33ce61b7ec37a076d3f4a829a2fc4', '2017-10-03 14:18:41', '2017-10-03 14:18:41', NULL),
	(71, 2, 'Brenda Ayala', 'ac13007@ues.edu.sv', NULL, '2017-10-03 14:26:11', '2017-10-03 14:26:11', NULL),
	(72, 2, 'Lourdes Sanchez', 'lourdessanchez434@gmail.com', NULL, '2017-10-03 16:23:02', '2017-10-03 16:23:02', NULL),
	(73, 2, 'May Artiga', 'mayra.artiga@gmail.com', NULL, '2017-10-03 17:04:29', '2017-10-03 17:04:29', NULL),
	(74, 2, 'Daniel Ostorga', 'ostorga_10@yahoo.com', NULL, '2017-10-03 17:13:01', '2017-10-03 17:13:01', NULL),
	(75, 2, 'arguetaruiz', 'gilbertoarguetarz@gmail.com', 'e1a07af521e804241d9fc8d21d44232a', '2017-10-03 18:12:53', '2017-10-03 18:12:53', NULL),
	(76, 2, 'Jenniferolivo', 'jennifer.carolina1207@hotmail.com', 'beaa7922cd7e16bbfd7f076a25361cf5', '2017-10-03 18:45:54', '2017-10-03 18:45:54', NULL),
	(77, 2, 'Ernesto Jose Marroquin Sanchez', 'chatoes-@hotmail.com', NULL, '2017-10-03 20:11:51', '2017-10-03 20:11:51', NULL),
	(78, 2, 'alozano', 'mlozanourquilla@gmail.com', 'f934017d76cfb73dd8549643a3865995', '2017-10-04 05:39:49', '2017-10-04 05:39:49', NULL),
	(79, 2, 'Vladimir Hernandez', 'sc2vladi@gmail.com', NULL, '2017-10-04 07:15:06', '2017-10-04 07:15:06', NULL),
	(80, 2, 'Lic Miguel Pineda', 'miguelpineda88@gmail.com', NULL, '2017-10-04 07:31:30', '2017-10-04 07:31:30', NULL),
	(81, 2, 'Monii Guevara', 'mrebk@yahoo.es', NULL, '2017-10-04 08:17:49', '2017-10-04 08:17:49', NULL),
	(82, 2, 'Dernesto', 'ernestoo.beltrann@gmail.com', '6ed61d4b80bb0f81937b32418e98adca', '2017-10-04 08:39:00', '2017-10-04 08:39:00', NULL),
	(83, 2, 'Yami PÃ©rez', 'clauperez_pink@hotmail.com', NULL, '2017-10-04 12:52:28', '2017-10-04 12:52:28', NULL),
	(84, 2, 'Antonio', 'tony9112009@hotmail.com', 'c71745417001b18224bfdca339020c50', '2017-10-05 14:02:55', '2017-10-05 14:02:55', NULL),
	(85, 2, 'Steffany Miranda', 'steffanymiranda.5@gmail.com', NULL, '2017-10-06 10:38:21', '2017-10-06 10:38:21', NULL),
	(86, 2, 'Gladis MejÃ­a', 'gladisita2008@hotmail.com', NULL, '2017-10-08 15:59:36', '2017-10-08 15:59:36', NULL),
	(87, 2, 'miguel01', 'miguelsmena@outlook.es', '1427b036b18304d744cea1d7e39aa21f', '2017-10-13 14:17:58', '2017-10-13 14:17:58', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table merakidatabase.users_social
CREATE TABLE IF NOT EXISTS `users_social` (
  `id_user_social` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `social_id` varchar(100) NOT NULL,
  `service` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user_social`),
  KEY `FK1_id_user` (`id_user`),
  CONSTRAINT `FK1_id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

-- Dumping data for table merakidatabase.users_social: ~0 rows (approximately)
/*!40000 ALTER TABLE `users_social` DISABLE KEYS */;
INSERT INTO `users_social` (`id_user_social`, `id_user`, `social_id`, `service`) VALUES
	(3, 8, '10203793667718013', 'facebook'),
	(4, 10, '9223372036854775807', 'google'),
	(5, 10, '9223372036854775807', 'google'),
	(6, 10, '9223372036854775807', 'google'),
	(7, 10, '9223372036854775807', 'google'),
	(8, 10, '9223372036854775807', 'google'),
	(9, 10, '9223372036854775807', 'google'),
	(10, 10, '9223372036854775807', 'google'),
	(11, 10, '9223372036854775807', 'google'),
	(12, 10, '9223372036854775807', 'google'),
	(13, 12, '0', 'facebook'),
	(14, 10, '9223372036854775807', 'google'),
	(15, 14, '10213699200184952', 'facebook'),
	(16, 16, '9223372036854775807', 'google'),
	(17, 10, '9223372036854775807', 'google'),
	(18, 18, '1648987485119679', 'facebook'),
	(19, 22, '9223372036854775807', 'google'),
	(20, 24, '9223372036854775807', 'google'),
	(21, 10, '9223372036854775807', 'google'),
	(22, 27, '9223372036854775807', 'google'),
	(23, 31, '1620981377972368', 'facebook'),
	(24, 33, '854619894701952', 'facebook'),
	(25, 35, '10214062249168564', 'facebook'),
	(26, 12, '10208139351636057', 'facebook'),
	(27, 37, '804823659721472', 'facebook'),
	(28, 12, '10210635234533253', 'facebook'),
	(29, 10, '9223372036854775807', 'google'),
	(30, 42, '1989166791359489', 'facebook'),
	(31, 44, '10208384757776748', 'facebook'),
	(32, 10, '9223372036854775807', 'google'),
	(33, 10, '9223372036854775807', 'google'),
	(34, 46, '9223372036854775807', 'google'),
	(35, 46, '9223372036854775807', 'google'),
	(36, 46, '9223372036854775807', 'google'),
	(37, 49, '1642629585768770', 'facebook'),
	(38, 52, '599619043762258', 'facebook'),
	(39, 52, '9223372036854775807', 'google'),
	(40, 52, '9223372036854775807', 'google'),
	(41, 53, '998699383614195', 'facebook'),
	(42, 54, '664890423706000', 'facebook'),
	(43, 10, '9223372036854775807', 'google'),
	(44, 57, '865874516908417', 'facebook'),
	(45, 16, '9223372036854775807', 'google'),
	(46, 58, '9223372036854775807', 'google'),
	(47, 59, '1533392280015299', 'facebook'),
	(48, 61, '1610832918937586', 'facebook'),
	(49, 62, '1309373879184690', 'facebook'),
	(50, 63, '9223372036854775807', 'google'),
	(51, 12, '1650262111691785', 'facebook'),
	(52, 64, '10208835701004748', 'facebook'),
	(53, 65, '1653481801363274', 'facebook'),
	(54, 66, '9223372036854775807', 'google'),
	(55, 67, '1537184856324800', 'facebook'),
	(56, 12, '522589941422685', 'facebook'),
	(57, 68, '1469538623125315', 'facebook'),
	(58, 69, '1935733266748631', 'facebook'),
	(59, 71, '1590628327664235', 'facebook'),
	(60, 12, '1491109890978262', 'facebook'),
	(61, 72, '9223372036854775807', 'google'),
	(62, 73, '1700008460012237', 'facebook'),
	(63, 74, '1434570693257172', 'facebook'),
	(64, 58, '9223372036854775807', 'google'),
	(65, 77, '10212730546353689', 'facebook'),
	(66, 12, '10159349080400557', 'facebook'),
	(67, 79, '10212382514669323', 'facebook'),
	(68, 80, '1845861359059458', 'facebook'),
	(69, 81, '1411009418946796', 'facebook'),
	(70, 83, '1517578941641985', 'facebook'),
	(71, 85, '115036291154073952322', 'google'),
	(72, 86, '1461121583925284', 'facebook');
/*!40000 ALTER TABLE `users_social` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
