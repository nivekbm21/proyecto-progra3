-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2015 a las 07:41:08
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto-progra3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acerca_nosotros`
--

CREATE TABLE IF NOT EXISTS `acerca_nosotros` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) NOT NULL,
  `contenido` text NOT NULL,
  `tipo` char(1) NOT NULL,
  `simbolo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `acerca_nosotros`
--

INSERT INTO `acerca_nosotros` (`id`, `titulo`, `contenido`, `tipo`, `simbolo`) VALUES
(1, 'Objetivo', 'Vemos los recursos tecnologicos de las empresas como herramientas que deben dar valor real a sus productos y servicios. Integramos sobre plataformas de hardware, software e infraestructura de web, servicios de tecnologia para que las organizaciones mejoren continuamente sus procesos de mision critica y logren la satisfaccion de sus clientes. Nos hacemos responsables de la operacion, gestion y administracion de soluciones tecnologicas hechas a la medida de nuestros clientes.', 'l', 1),
(2, 'Valores', 'Excelencia\r\nCapaz\r\nEficiente\r\nSuperacion\r\nCalidad\r\nComprometido', 'c', 3),
(3, 'Mision', 'Disenar, implementar, operar y optimizar, servicios de tecnologias de informacion y las comunicaciones, con recurso humano calificado, compromiso y calidad que permita a nuestros clientes consolidar su estrategia empresarial, mejorando su competitividad y alcanzando sus objetivos.', 'c', 2),
(4, 'Vision', 'Para el ano 2016, ser reconocidos dentro de la region centroamericana, como lider en el acompanamiento de las empresas, en el mejoramiento de su competitividad, mediante el uso efectivo y eficiente de las tecnologias de la informacion y de las comunicaciones.', 'c', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `consulta` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_frecuentes`
--

CREATE TABLE IF NOT EXISTS `preguntas_frecuentes` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `pregunta` text NOT NULL,
  `respuesta` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `preguntas_frecuentes`
--

INSERT INTO `preguntas_frecuentes` (`id`, `pregunta`, `respuesta`) VALUES
(1, '&#191;Cuales ventajas me proporciona el uso de hospedaje en la nube&#63;', '1. Presencia de los archivos almacenados en cualquier lugar o computador, sin necesidad de instalar programas diferentes o especializados para acceder a ella.\n2. Actualizaciones automaticas, que permiten al usuario de hospedaje web tener sistemas con tecnologia de punta sin tener que instalarlas o estar pendiente de su aplicacion.\n3.Integracion mundial, desde cualquier lugar del mundo, los archivos estaran presentes e integrados en el mismo espacio virtual de almacenamiento.'),
(2, '&#191;Cuales son las ventajas de implementar una pagina web en mi empresa&#63;', 'Al implementar una pagina web sobre su empresa, le garantizara entrar en un nuevo mercado, en el cual podra estar visible para cualqueir persona con conectividad a internet, lo que generara mayores ventas para su organizacion.'),
(3, '&#191;Que es el SEO&#63;', 'El posicionamiento en buscadores u Optimizacion de motores de busqueda es el proceso de mejorar la visibilidad de un sitio web en los resultados organicos de los diferentes buscadores, son aquellos  factores en los que un motor de busqueda se basa para posicionar una pagina.'),
(4, '&#191;Por que es el SEO importante&#63;', 'La razon mas importante por la que es necesario el SEO es porque hace mas util tu pagina web tanto para los usuarios como para los motores de busqueda ya que, aunque estos ultimos cada dia son mas sofisticados aun no pueden ver una pagina web como lo hace un humano.'),
(5, '&#191;Que es el marketing Digital&#63;', 'El Marketing Digital es la integracion de estrategias simultaneas en la web, a traves de un proceso y metodologia especifica,  en busca de objetivos claros usando diversas herramientas, plataformas y medios sociales.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `titulo`, `contenido`, `imagen`) VALUES
(1, 'Optimizacion Web', 'SEO es el proceso de mejorar la visibilidad de un sitio web o de una pagina del sitio web en los motores de busqueda.\n\nEn otras palabras, SEO es la tecnica que hace que el contenido de tu sitio web sea mas legible y atractivo para los motores de busqueda y asi asegurar que tu sitio llegue a los lugares mas altos de la lista en las busquedas, utilizando palabras clave relevantes en los buscadores como Google, Bing y Yahoo.', 'img/servicios/Busqueda.jpg'),
(2, 'Hospedaje', 'El hospedaje Web es el servicio que se provee a los usuarios de Internet para poder almacenar informacion, imagenes, video, o cualquier contenido accesible via Web. Los Web host son companias que proporcionan espacio de un servidor a sus clientes.', 'img/servicios/Hospedaje.jpg'),
(3, 'Mercadeo', 'El mercadeo en internet debe ser entendido como el aprovechamiento de las diferentes opciones que provee la web para publicitar o promover productos y/o servicios, este incluye gran cantidad de tecnicas que gracias a su efectividad, menor costo, amplitud en el retorno de la inversion, entre otras caracteristicas, se hacen cada vez mas populares y necesarias para la promocion de una empresa o marca.', 'img/servicios/Marketing.png'),
(4, 'Servicios Web', 'Estos servicios proporcionan mecanismos de comunicacion estandares entre diferentes aplicaciones, que interactuan entre si para presentar informacion dinamica al usuario. Para proporcionar interoperabilidad y extensibilidad entre estas aplicaciones, y que al mismo tiempo sea posible su combinacion para realizar operaciones complejas, es necesaria una arquitectura de referencia estandar.', 'img/servicios/Servicios_Web.jpg'),
(5, 'Servicios en la Nube', 'Con estas herramientas usted tendra la informacion de su empresa disponible desde cualquier lugar y en cualquier momento, con solo una conexion a internet, usted podre: Gestionar sus activos documentales, Liderar proyectos, Gestionar sus tareas, Promocionar su negocio, Estar siempre informado en temas de interes, entre muchos otros beneficios.', 'img/servicios/Web.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `ruta` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `nombre`, `ruta`) VALUES
(1, 'Dise&#241;o', 'img/Diseno_Web.jpg'),
(2, 'Estadistica', 'img/Estadisticas.jpg'),
(3, 'Mercadeo', 'img/Marketing.jpg'),
(4, 'Hospedaje', 'img/Hospedaje.jpg'),
(5, 'Rapidez', 'img/Optimizacion_de_Sitios_Web.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `usuario`, `contrasena`, `cargo`, `estado`) VALUES
(5, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrador', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
