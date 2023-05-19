-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2022 a las 18:42:40
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yfitness`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE `ejercicios` (
  `ID_Ejercicio` int(11) NOT NULL,
  `Nombre_ejercicio` varchar(100) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Grupo` varchar(100) DEFAULT NULL,
  `Logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ejercicios`
--

INSERT INTO `ejercicios` (`ID_Ejercicio`, `Nombre_ejercicio`, `Descripcion`, `Grupo`, `Logo`) VALUES
(1, 'PECHO-PRESS BANCA', 'Con press de banca solicitamos principalmente el pectoral mayor.Para iniciar la realización del ejercicio es necesario acostarse en un banco plano con los glúteos, caderas y hombros sobre el banco.', 'MUSCULACION', 'PECHO'),
(2, 'PECHO-APERTURAS', 'Las aperturas con mancuernas son específicas para el trabajo del pectoral. Para comenzar el ejercicio debemos tumbarnos de espalda sobre un banco plano y estrecho para que durante el movimiento no nos moleste en los hombros.', 'MUSCULACION', 'PECHO'),
(3, 'ESPALDA-JALON AL PECHO', 'El ejercicio de polea al pecho permite trabajar los músculos de la espalda para incrementar su grosorSi realizamos el ejercicio con un agarre estrecho trabajamos sobre todo los dorsales inferiores.', 'MUSCULACION', 'ESPALDA'),
(4, 'ESPALDA-REMO', 'El remo en polea baja, con agarre estrecho, es un ejercicio ideal para el desarrollo de la espalda. Debemos situarnos en una máquina de poleas, seleccionar el peso a cargar con el ejercicio.', 'MUSCULACION', 'ESPALDA'),
(5, 'BICEPS-CURL BÍCEPS', 'Los codos deben estar bien fijados cercanos al tronco y es importante no hacer balanceos que ayuden a la subida.El bíceps se encarga de flexionar el codo o en su defecto de mantener su posición.', 'MUSCULACION', 'BICEPS'),
(6, 'BICEPS-CURL MARTILLO', 'El curl de bíceps tipo martillo se puede realizar alterno como hemos descrito o bien, simultáneamente de ambos lados del cuerpo. Es el mejor movimiento para trabajar el supinador largo.', 'MUSCULACION', 'BICEPS'),
(7, 'TRICEPS-CURL FRANCÉS', 'Tumbados en un banco plano, formando un moderado arco lumbar con las escápulas y glúteos pegados al banco.Elevamos las mancuernas, flexionamos los brazos y volvemos a extender los brazos.', 'MUSCULACION', 'TRICEPS'),
(8, 'TRICEPS-EXTENSIONES DE TRICEPS', 'La extensión de tríceps son trabajadas su porción larga. Realizamos una extensión de los codos, llevando el mango de la polea hacia abajo, sin despegar los codos de los lados del cuerpo.', 'MUSCULACION', 'TRICEPS'),
(9, 'ABDOMEN-HIPOPRESIVOS', 'Los abdominales hipopresivos refuerzan el suelo pélvico, estrechan la cintura e incluso en los hombres ayuda a combatir la eyaculación precoz.', 'MUSCULACION', 'ABDOMEN'),
(10, 'ABDOMEN-PLANCHA', 'Una plancha abdominal es un ejercicio isométrico que utiliza el propio peso del cuerpo para tensar los músculos.', 'MUSCULACION', 'ABDOMEN'),
(11, 'CUADRICEPS-SENTADILLA', 'La sentadilla o squat es un movimiento que se inicia de pie, mirando al frente y con la espalda recta, mientras los pies se separan del ancho de los hombros.', 'MUSCULACION', 'CUADRICEPS'),
(12, 'CUADRICEPS-SENTADILLA BULGARA', 'La sentadilla búlgara se caracteriza por ser un movimiento similar al de la zancada o lunge pero donde la pierna retrasada permanece apoyada en una superficie elevada respecto a la pierna que se apoya en el suelo.', 'MUSCULACION', 'CUADRICEPS'),
(13, 'ISQUIOS-PESO MUERTO', 'Cuando realizamos peso muerto solicitamos sobre todo los músculos situados en la parte posterior de las piernas y isquiotibiales', 'MUSCULACION', 'ISQUIOS'),
(14, 'ISQUIOS-CURL NORDICO', 'Emplear un elemento que fije los tobillos, para poder realizar el ejercicio de forma correcta. Utilizar un banco del gimnasio, o un elemento fijo en el que puedas colocarte para que los tobillos estén sujetos.', 'MUSCULACION', 'ISQUIOS'),
(15, 'GEMELO-ELEVACION TALONES', 'Este ejercicio se centra principalmente en trabajar los gemelos. Gracias a las elevaciones de talones, los gemelos se verán fortalecidos, lo cual generará un mayor equilibrio en las piernas.', 'MUSCULACION', 'GEMELO'),
(16, 'GEMELO-PRENSA', 'Los musculos trabajados son las pantorrillas y los tobillos. Seleccione el peso apropiado en la máquina para no crear una sobrecarga en los gemelos.', 'MUSCULACION', 'GEMELO'),
(17, 'CARDIO-RUNNING', 'Permite perder y controlar el peso. Ayuda a fortalecer los huesos. Regenera la masa muscular.Favorece el descanso.Ayuda a combatir el estrés y la ansiedad.', 'CARDIO', 'CARDIO'),
(18, 'CARDIO-HIT', 'El entrenamiento HIIT, que se enfoca en ráfagas cortas de ejercicio intenso, es perfecto si tienes poco tiempo, y puede ayudarte a mejorar tu condición física de varias maneras.(Carreras rápidas, saltar a la cuerda...etc)', 'CARDIO', 'CARDIO'),
(19, 'ESTIRAMIENTOS-CUELLO', 'Desde la posición de pie, coloca las manos detrás de la cabeza y flexiona el cuello lentamente, bajando la barbilla hacia el pecho lo más que puedas sin causar ningún dolor. Sostén la posición por 20 segundos.', 'ESTIRAMIENTOS', 'STRETCH'),
(20, 'ESTIRAMIENTOS-EXTENSION DE PIERNA', 'Echarse de costado al borde de la cama, la pierna en apoyo de la cama se doble y la pierna de encima se estira. Llevar la pierna en extensión (estirada) fuera de la cama y déjelo suspender con la punta del pie hacia adelante.', 'ESTIRAMIENTOS', 'STRETCH'),
(21, 'OTROS-BALONCESTO', 'El baloncesto es un deporte en el cual compiten dos equipos de cinco jugadores cada uno. El objetivo es introducir la pelota en el aro del equipo contrario, que se encuentra ubicado a 3,05 metros de altura.', 'OTROS', 'OTROS'),
(22, 'OTROS-TAI JITSU', 'Es un arte marcial de origen y filosofía japonesa pero de concepción occidental. Centrado en los agarres, golpes, luxaciones, estrangulaciones y manejo de armas tradicionales.', 'OTROS', 'OTROS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID_Usuario` int(100) NOT NULL,
  `Rol` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID_Usuario`, `Rol`) VALUES
(1, ''),
(3, 'User'),
(2, 'Admin'),
(4, 'User'),
(5, 'User'),
(1, 'Admin'),
(1, ''),
(1, ''),
(22, 'Admin'),
(23, 'User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--

CREATE TABLE `rutina` (
  `ID_Usuario` int(200) NOT NULL,
  `ID_Ejercicio` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_Usuario` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Primer_Apellido` varchar(50) DEFAULT NULL,
  `Segundo_Apellido` varchar(50) DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Numero_Telefono` int(20) DEFAULT NULL,
  `Genero` varchar(15) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Codigo_Postal` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_Usuario`, `Username`, `Email`, `Password`, `Nombre`, `Primer_Apellido`, `Segundo_Apellido`, `Fecha_Nacimiento`, `Numero_Telefono`, `Genero`, `Direccion`, `Codigo_Postal`) VALUES
(1, 'yakinz', 'yago@gmail.com', '$2y$10$luY/O80HgFEAukCVrOeo9ea5duVBn1ZnulR8WcXDmATD90gYXZAYa', 'Yagoalmeida', 'Almeida', 'Gonzalez', '2022-02-09', 662501804, 'Masculino', 'Avenida de la Gavia 11', 34507),
(2, 'beux', 'bea@gmail.com', '$2y$10$4Gl3.DLsKZEOpAes21zc4edFXMwzBtYnjstyyxZAlhcd63GfAx/TG', 'Bea', 'Pereiras', 'Gonzalez', '2022-10-15', 662501804, 'Femenino', '.Avenida de la Gavia 11.', 25000),
(3, 'miguel', 'miguel@gmail.com', '$2y$10$qHWTsat6jsUV40K1N1KHMeydLIleGWAVZ/0JtKkHAY99xF2.clOLO', '.Yago.', '.Almeida.', '.Gonzalez.', '0000-00-00', 662501804, '.Masculino.', '.Avenida de la Gavia 11.', 0),
(4, 'alonso', 'alonso@gmail.com', '$2y$10$UdcrCZVpLIU3r.MeBCFxVeyirZCkdh250J/U7RWjANTo.p6eXvkb6', 'Alonso', 'Martinez', 'Perez', '0000-00-00', 662501804, 'Masculino', 'Avenida Carrusel', 0),
(5, 'mario', 'mario@bimba.com', '$2y$10$keQfLIbK2oiE8eyd79Zk2epOlPE.KkyEkG1TxqCbqyXcuu/rmiW/W', 'Mario', 'Fernandez', 'Prueba', '0000-00-00', 662501804, 'Femenino', 'Vamonosaa', 0),
(22, 'montecastelo', 'ciclosmontecastelo@gmail.com', '$2y$10$N7hUzEsLzgOUdFYyt9yeEOSdyiNmqf3jPV04AzaPlHTYPYiWhQXeW', 'Colegio', 'Montecastelo', '', '2020-02-20', 662501804, 'Masculino', '', 0),
(23, 'pepe66', 'pepe@gmail.com', '$2y$10$jf6AkHcdoQ5ru5WEFDIyvOBmckA8RSToQF85E9zQ.pnXLMTZoBKkO', 'Pepe', 'Sanchez', 'Gonzalez', '2022-03-10', 662501804, NULL, 'Avenida ensanche vallecas', 32400);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`ID_Ejercicio`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD KEY `ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD KEY `ID_Usuario` (`ID_Usuario`,`ID_Ejercicio`),
  ADD KEY `rutina_ibfk_2` (`ID_Ejercicio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `ID_Ejercicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `ID_Usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_Usuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD CONSTRAINT `rutina_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_Usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `rutina_ibfk_2` FOREIGN KEY (`ID_Ejercicio`) REFERENCES `ejercicios` (`ID_Ejercicio`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
