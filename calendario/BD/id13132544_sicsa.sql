-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-05-2020 a las 00:50:56
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id13132544_sicsa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asistencia`
--

CREATE TABLE `Asistencia` (
  `Id_Asistencia` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Asistencia` bit(1) NOT NULL DEFAULT b'0',
  `Inasistencia` bit(1) NOT NULL DEFAULT b'1',
  `Observaciones` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Id_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Asistencia`
--

INSERT INTO `Asistencia` (`Id_Asistencia`, `Fecha`, `Asistencia`, `Inasistencia`, `Observaciones`, `Id_Usuario`) VALUES
(1, '2020-05-07 02:01:00', b'0', b'1', 'falta', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Calendario`
--

CREATE TABLE `Calendario` (
  `Id_Calendario` int(11) NOT NULL,
  `pediodo` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Inicio_Curso` date NOT NULL,
  `Primer_Reporte` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT current_timestamp(),
  `Segundo_Reporte` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT current_timestamp(),
  `Tercer_Reporte` varchar(30) COLLATE utf8_unicode_ci DEFAULT current_timestamp(),
  `Ultimo_Dia_Clases` date NOT NULL,
  `Segunda_Oportunidad` varchar(300) COLLATE utf8_unicode_ci NOT NULL DEFAULT current_timestamp(),
  `Dias_Inhabiles` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Reporte_Final` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Calendario_Doc` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Calendario`
--

INSERT INTO `Calendario` (`Id_Calendario`, `pediodo`, `Inicio_Curso`, `Primer_Reporte`, `Segundo_Reporte`, `Tercer_Reporte`, `Ultimo_Dia_Clases`, `Segunda_Oportunidad`, `Dias_Inhabiles`, `Reporte_Final`, `Calendario_Doc`) VALUES
(1, 'Enero - Junio 2020', '2020-02-10', '9 - 13 de Marzo', '20 - 24 de Abril', '25 - 29 de Mayo', '2020-06-12', '15 -19 Junio', '16 Marzo, 6 - 17 Abril, 1 Mayo, 5 Mayo, 15 Mayo', '22 - 26 Junio', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Chat`
--

CREATE TABLE `Chat` (
  `Id_Chat` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Chat`
--

INSERT INTO `Chat` (`Id_Chat`, `Id_Usuario`, `mensaje`, `fecha`) VALUES
(2, 1, 'hola', '1000-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Curso`
--

CREATE TABLE `Curso` (
  `Id_Curso` int(11) NOT NULL,
  `Periodo` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Reporte_Final` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Curso`
--

INSERT INTO `Curso` (`Id_Curso`, `Periodo`, `Reporte_Final`) VALUES
(1, 'Enero - Junio 2020', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `Id_Horario` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Aula` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Horario` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Dias` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Grupo` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`Id_Horario`, `Id_Usuario`, `Aula`, `Horario`, `Dias`, `Grupo`) VALUES
(1, 1, 'MF2', '10:00 - 11:00', 'Lunes, Martes, Miércoles, Jueves ', '4SA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Instrumentacion`
--

CREATE TABLE `Instrumentacion` (
  `Id_Instrumentacion` int(11) NOT NULL,
  `Id_Planeacion` int(11) NOT NULL,
  `Id_Calendario` int(11) NOT NULL,
  `Plan_Estudios` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Clave_Asignatura` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Estado` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Instrumentacion_Doc` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Materia`
--

CREATE TABLE `Materia` (
  `Clave_Asignatura` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre_Materia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Horas_Practicas` int(10) DEFAULT NULL,
  `Horas_Teoricas` int(10) DEFAULT NULL,
  `Creditos` int(10) DEFAULT NULL,
  `No_Temas` int(10) NOT NULL,
  `Carrera` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Temario_Doc` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Icono` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Materia`
--

INSERT INTO `Materia` (`Clave_Asignatura`, `Nombre_Materia`, `Horas_Practicas`, `Horas_Teoricas`, `Creditos`, `No_Temas`, `Carrera`, `Temario_Doc`, `Icono`) VALUES
('AEF-1052 ', 'Probabilidad y Estadística ', 3, 2, 5, 5, 'Ingeniería en Sistemas Computacionales', '', ''),
('ICC-1027', 'Métodos Numéricos ', 2, 2, 4, 6, 'Ingeniería en Sistemas Computacionales', '', 'MN.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Notificaciones`
--

CREATE TABLE `Notificaciones` (
  `Id_Notificacion` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `texto` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `visto` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Observaciones`
--

CREATE TABLE `Observaciones` (
  `Id_Observacion` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Planeacion`
--

CREATE TABLE `Planeacion` (
  `Id_Planeacion` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Id_Calendario` int(11) NOT NULL,
  `Clave_Asignatura` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Id_Horario` int(11) NOT NULL,
  `Fecha_Entrega` date NOT NULL,
  `Estado` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `planeacion_Doc` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Planeacion_Contenido`
--

CREATE TABLE `Planeacion_Contenido` (
  `Id_Planeacion` int(11) DEFAULT NULL,
  `Id_Contenido` int(11) NOT NULL,
  `Periodo_Programado` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Periodo_Real` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Evaluacion_Programada` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Evaluacion_Real` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Porcentaje_Aprobacion` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Observaciones` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Temario`
--

CREATE TABLE `Temario` (
  `Clave_Asignatura` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Caracterizacion` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Intencion_Didactica` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Fuentes` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Competencia_desarrollar` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Temario`
--

INSERT INTO `Temario` (`Clave_Asignatura`, `Caracterizacion`, `Intencion_Didactica`, `Fuentes`, `Competencia_desarrollar`) VALUES
('ICC-1027', 'Esta asignatura aporta al perfil del ingeniero civil estrategias para resolver problemas de aplicación\r\nmatemática.\r\nPara integrarla se ha hecho un análisis referente a las matemáticas aplicadas, identificando los temas\r\nmás importantes de mayor aplicación en el quehacer profesional del ingeniero civil.\r\nPuesto que esta asignatura dará soporte a otras, más directamente vinculadas con desempeños\r\nprofesionales; se inserta al inicio escolar; antes de cursar aquéllas a las que da soporte. De manera\r\nparticular, en esta asignatura se estudian modelos matemáticos que resuelven problemas descritos\r\nmediante funciones con variables continuas o variables discretas.\r\nEl ingeniero civil aplica los conocimientos de las ciencias básicas y ciencias de la Ingeniería, para\r\nplanear, proyectar, diseñar, construir y conservar obras hidráulicas y sanitarias, sistemas estructurales,\r\nvías terrestres, edificación y obras de infraestructura urbana e industrial. Los métodos numéricos le\r\nproporcionan técnicas para resolver modelos matemáticos de forma sistematizada, aplicando o\r\ndiseñando el software necesario. ', 'El estudiante comprenderá y aplicará los algoritmos numéricos en la solución de problemas de\r\nIngeniería civil, mediante el uso de computadoras y el software apropiado.\r\nSe organiza el temario con 6 temas, en el tema 1 se identifica la naturaleza de los métodos numéricos.\r\nLa idea es abordar reiteradamente los conceptos fundamentales hasta conseguir su comprensión. Se\r\nresolverán problemas que se describen con modelos matemáticos de variable continua y discreta,\r\nprincipalmente de aquellos que se presentan durante el desempeño profesional.\r\nEl enfoque sugerido para la asignatura requiere que las actividades prácticas promuevan el desarrollo\r\nde habilidades y estrategias para su entorno laboral, tales como: diseño e identificación del software en\r\nla resolución de los problemas. En las actividades prácticas sugeridas, es conveniente que el docente\r\nguie a sus estudiantes para que ellos realicen las actividades y aprendan a identificar cada uno de los\r\nelementos.\r\nLa lista de actividades de aprendizaje no es exhaustiva, se sugieren sobre todo las necesarias para hacer\r\nmás significativo y efectivo el aprendizaje. Algunas de las actividades sugeridas pueden hacerse como\r\nactividad extra clase y comenzar el tratamiento en clase a partir de la discusión de los resultados de las\r\nobservaciones. Se busca partir de experiencias concretas, cotidianas, para que el estudiante se\r\nacostumbre al ámbito ingenieril. Es importante ofrecer escenarios distintos, ya sean construidos,\r\nartificiales, virtuales o naturales.\r\nEn las actividades de aprendizaje sugeridas, generalmente se propone la formalización de los conceptos a partir de experiencias concretas; se busca que el estudiante tenga el primer contacto con\r\nel concepto en forma concreta. Pero se sugiere que se diseñen nuevas estrategias para que el\r\nestudiante pueda tomar decisiones en el momento de resolver un problema real.\r\nEn el transcurso de las actividades programadas es muy importante que el estudiante aprenda a valorar\r\nlas actividades que lleva a cabo y entienda que está construyendo su futuro y en consecuencia actúe\r\nde una manera profesional; de igual manera, valore la importancia del conocimiento y los hábitos de\r\ntrabajo; desarrolle la precisión, la puntualidad, el entusiasmo, el interés, la tenacidad, la flexibilidad y\r\nel trabajo colectivo. Es necesario que el profesor preste atención y cuidado en el desarrollo de las\r\nactividades de aprendizaje de esta asignatura. ', ' Atkinson, Kendall. Elementary Numerical Analysis. John Wiley.\r\n Chapra, Steven C. Método Numéricos para Ingenieros. McGraw – Hill, 2006.\r\n Luthe, Olivera, Schutz. Métodos Numéricos. Limusa, 1986.\r\n Mathews, John H. & Fink, Kurtis D. Métodos Numéricos con Matlab.Prentice – Hall.\r\n Keller, Howard. Mastering Mathcad. McGraw – Hill.\r\n Nakamura, Shoichiro. Métodos Numéricos Aplicados con Software. Prentice – Hall, 1992.\r\n The Student Edition of Matlab 5. Prentice – Hall. ', 'Diseña y utiliza algoritmos que a través de aproximaciones numéricas simula un proceso matemático\r\nque le permite encontrar la solución de un problema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Temas`
--

CREATE TABLE `Temas` (
  `Clave_Asignatura` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `No_Tema` int(10) NOT NULL,
  `Tema` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sub_Temas` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Competencia_Espesifica` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Competencia_Generica` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Actividad_Aprendizaje` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sugerencia_Didactica` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sugerencia_Evaluacion` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Actividad_Enseñanza` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Temas`
--

INSERT INTO `Temas` (`Clave_Asignatura`, `No_Tema`, `Tema`, `Sub_Temas`, `Competencia_Espesifica`, `Competencia_Generica`, `Actividad_Aprendizaje`, `Sugerencia_Didactica`, `Sugerencia_Evaluacion`, `Actividad_Enseñanza`) VALUES
('ICC-1027', 1, 'Introducción a los métodos numéricos. ', '1.1. Historia de los métodos numéricos.\r\n1.2. Razones de su aplicación.\r\n1.3. Conceptos de exactitud, precisión y error.\r\n1.4. Errores inherentes, de redondeo y por\r\ntruncamiento.\r\n1.5. Errores absoluto y relativo.\r\n1.6. Uso de herramientas computacionales. ', ' Reconoce los conceptos básicos de los\r\nmétodos numéricos para su implementación\r\nen programas de computadora. ', ' Capacidad de análisis y resolución de\r\nproblemas.\r\n Habilidades básicas de manejo de la\r\nComputadora ', ' Realizar investigación documental del uso\r\nde métodos numéricos en ingeniería civil\r\npresentando un informe documental de casos\r\nprácticos.\r\n Resolver ejemplos para calcular errores de\r\naproximación, realizando talleres en clase.\r\n Elaborar un informe escrito del desarrollo de\r\nsolución de problemas resueltos en extraclase.\r\n Diseñar un programa de computadora para\r\nresolver funciones a través de series. ', NULL, NULL, NULL),
('ICC-1027', 2, 'Solución de ecuaciones no lineales de una\r\nvariable.', '2.1. Búsqueda de valores iniciales. Tabulación y\r\ngraficación.\r\n2.2. Métodos cerrados y sus interpretaciones\r\ngeométricas (bisección y regla falsa).\r\n2.3. Métodos abiertos y sus interpretaciones\r\ngeométricas así como sus criterios de\r\nconvergencia (Newton-Raphson, secante).\r\n2.4. Aplicaciones de la solución de ecuaciones no\r\nlineales.\r\n2.5. Uso de herramientas computacionales. ', 'Aplica métodos de solución para resolver\r\nnuméricamente ecuaciones trascendentales,\r\npara formulaciones que no tienen solución\r\nanalítica. ', ' Capacidad de análisis y resolución de\r\nproblemas.\r\n Habilidades básicas de manejo de la\r\ncomputadora.\r\n Capacidad de aprender', '', '', '', ''),
('ICC-1027', 3, 'Interpolación. ', '3.1. Interpolación lineal.\r\n3.2. Polinomio de interpolación de Newton.\r\n3.3. Polinomio de Interpolación de Lagrange.\r\n3.4. Aplicaciones de interpolación.\r\n3.5. Uso de herramientas computacionales. ', ' Aplica el polinomio de interpolación de\r\nNewton y de Lagrange para resolver\r\nproblemas de variable discreta. ', '  Capacidad de análisis y resolución de\r\nproblemas.\r\n Habilidades básicas de manejo de la\r\n computadora\r\n Capacidad de aprender ', '', '', '', ''),
('ICC-1027', 4, 'Diferenciación e integración numérica. ', '4.1. Ecuaciones de diferencias divididas finitas\r\npara datos uniformemente distribuidos.\r\n4.2. Ecuaciones para derivar datos irregularmente\r\nespaciados.\r\n4.3. Ecuación de integración de Newton-Cotes.\r\n4.4. Aplicaciones de la diferenciación e\r\nintegración numérica.\r\n4.5. Uso de herramientas computacionales. ', ' Aplica los métodos numéricos para la solución\r\nde problemas de diferenciación e integración\r\nnumérica, de funciones continuas y discretas. ', '  Capacidad de análisis y resolución de\r\nproblemas.\r\n Habilidades básicas de manejo de la\r\ncomputadora\r\n Capacidad de aprender', '', '', '', ''),
('ICC-1027', 5, 'Solución de sistemas de ecuaciones . ', '5.1. Método de Gauss-Seidel para sistemas de\r\necuaciones lineales.\r\n5.2. Método de Newton-Raphson para sistemas de\r\necuaciones no lineales.\r\n5.3. Aplicaciones de sistemas de ecuaciones\r\nlineales y no lineales.\r\n5.4. Uso de herramientas computacionales. ', '  Aplica los métodos numéricos para la solución\r\nde sistemas de ecuaciones lineales y no\r\nlineales', '  Capacidad de análisis y resolución de\r\nproblemas.\r\n Habilidades básicas de manejo de la\r\n computadora\r\n Capacidad de aprender ', '', '', '', ''),
('ICC-1027', 6, 'Solución de ecuaciones diferenciales.  . ', '6.1. Método de Euler.\r\n6.2. Métodos de Runge-Kutta.\r\n6.3. Aplicaciones de ecuaciones diferenciales\r\nordinarias.\r\n6.4. Uso de herramientas computacionales. ', '  Aplica los métodos numéricos para la solución\r\nde problemas de ecuaciones diferenciales. ', '  Capacidad de análisis y resolución de\r\nproblemas.\r\n Habilidades básicas de manejo de la\r\n computadora\r\n Capacidad de aprender ', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `Id_Usuario` int(11) NOT NULL,
  `Usuarios` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Usuario',
  `Contraseña` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1u2s3u4ar5i6o',
  `Rol` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nombres` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Apellido_Paterno` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Apellido_Materno` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Demartamento` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Firma` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '"../../IMG/Firma.jpg"',
  `Foto` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '"../../IMG/Avatar.jpg"'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`Id_Usuario`, `Usuarios`, `Contraseña`, `Rol`, `Nombres`, `Apellido_Paterno`, `Apellido_Materno`, `Demartamento`, `Firma`, `Foto`) VALUES
(1, 'Usuario', '1u2s3u4ar5i6o', 'Docente', 'Jesus', 'Garza', 'Ortega', 'Centro de Computo', '\"../../IMG/Firma.jpg\"', '\"../../IMG/Avatar.jpg\"');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Asistencia`
--
ALTER TABLE `Asistencia`
  ADD PRIMARY KEY (`Id_Asistencia`),
  ADD UNIQUE KEY `unique_CampoUnico` (`Id_Asistencia`),
  ADD KEY `fk_Usuario_Asistencia_idx` (`Id_Usuario`);

--
-- Indices de la tabla `Calendario`
--
ALTER TABLE `Calendario`
  ADD PRIMARY KEY (`Id_Calendario`),
  ADD UNIQUE KEY `unique_CampoUnico` (`Id_Calendario`);

--
-- Indices de la tabla `Chat`
--
ALTER TABLE `Chat`
  ADD PRIMARY KEY (`Id_Chat`),
  ADD UNIQUE KEY `unique_CampoUnico` (`Id_Chat`),
  ADD KEY `fk_Chat_Usuario_idx` (`Id_Usuario`);

--
-- Indices de la tabla `Curso`
--
ALTER TABLE `Curso`
  ADD PRIMARY KEY (`Id_Curso`),
  ADD UNIQUE KEY `unique_CampoUnico` (`Id_Curso`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`Id_Horario`),
  ADD UNIQUE KEY `unique_CampoUnico` (`Id_Horario`);

--
-- Indices de la tabla `Instrumentacion`
--
ALTER TABLE `Instrumentacion`
  ADD PRIMARY KEY (`Id_Instrumentacion`),
  ADD UNIQUE KEY `unique_CampoUnico` (`Id_Instrumentacion`),
  ADD KEY `fk_Instrumentacion_Planeacion_idx` (`Id_Planeacion`),
  ADD KEY `fk_Instrumentacion_Calendario_idx` (`Id_Calendario`),
  ADD KEY `fk_Instrumentacion_Materia_idx` (`Clave_Asignatura`);

--
-- Indices de la tabla `Materia`
--
ALTER TABLE `Materia`
  ADD PRIMARY KEY (`Clave_Asignatura`),
  ADD UNIQUE KEY `unique_CampoUnico` (`Clave_Asignatura`);

--
-- Indices de la tabla `Notificaciones`
--
ALTER TABLE `Notificaciones`
  ADD PRIMARY KEY (`Id_Notificacion`),
  ADD UNIQUE KEY `unique_CampoUnico` (`Id_Notificacion`),
  ADD KEY `fk_Notificaciones_Usuario_idx` (`Id_Usuario`);

--
-- Indices de la tabla `Observaciones`
--
ALTER TABLE `Observaciones`
  ADD PRIMARY KEY (`Id_Observacion`),
  ADD UNIQUE KEY `unique_CampoUnico` (`Id_Observacion`),
  ADD KEY `fk_Observacion_Usuario_idx` (`Id_Usuario`);

--
-- Indices de la tabla `Planeacion`
--
ALTER TABLE `Planeacion`
  ADD PRIMARY KEY (`Id_Planeacion`),
  ADD UNIQUE KEY `unique_CampoUnico` (`Id_Planeacion`),
  ADD KEY `fk_Planeacion_Usuario_idx` (`Id_Usuario`),
  ADD KEY `fk_Planeacion_Calendario_idx` (`Id_Calendario`),
  ADD KEY `fk_Planeacion_Materia_idx` (`Clave_Asignatura`),
  ADD KEY `fk_Planeacion_Horario_idx` (`Id_Horario`);

--
-- Indices de la tabla `Planeacion_Contenido`
--
ALTER TABLE `Planeacion_Contenido`
  ADD PRIMARY KEY (`Id_Contenido`),
  ADD KEY `fk_Planeacion_Contenido_Planeacion_idx` (`Id_Planeacion`);

--
-- Indices de la tabla `Temario`
--
ALTER TABLE `Temario`
  ADD PRIMARY KEY (`Clave_Asignatura`),
  ADD UNIQUE KEY `unique_CampoUnico` (`Clave_Asignatura`),
  ADD KEY `fk_Temario_Materia_idx` (`Clave_Asignatura`);

--
-- Indices de la tabla `Temas`
--
ALTER TABLE `Temas`
  ADD KEY `fk_Temas_Temario_idx` (`Clave_Asignatura`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`Id_Usuario`),
  ADD UNIQUE KEY `unique_CampoUnico` (`Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Asistencia`
--
ALTER TABLE `Asistencia`
  MODIFY `Id_Asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Calendario`
--
ALTER TABLE `Calendario`
  MODIFY `Id_Calendario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `Chat`
--
ALTER TABLE `Chat`
  MODIFY `Id_Chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Curso`
--
ALTER TABLE `Curso`
  MODIFY `Id_Curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `Id_Horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `Instrumentacion`
--
ALTER TABLE `Instrumentacion`
  MODIFY `Id_Instrumentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `Notificaciones`
--
ALTER TABLE `Notificaciones`
  MODIFY `Id_Notificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `Observaciones`
--
ALTER TABLE `Observaciones`
  MODIFY `Id_Observacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `Planeacion`
--
ALTER TABLE `Planeacion`
  MODIFY `Id_Planeacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
