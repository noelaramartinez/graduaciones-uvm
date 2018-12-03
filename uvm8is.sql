-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-12-2018 a las 15:17:31
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id7244070_uvmis2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paterno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_cuenta` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_mail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_movil` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_fijo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombres`, `paterno`, `materno`, `pass`, `no_cuenta`, `e_mail`, `tel_movil`, `tel_fijo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Noe Carlos', 'Lara', 'Martinez', '123456', '010033825', 'noelaramartinez@gmail.com', '5512462219', '5512462219', 1, NULL, NULL),
(2, 'Luis Fernando', 'Aguirre', 'Aguirre', '123456', '010033816', 'fcrm2000@gmail.com', '5523168739', '5523168739', 1, NULL, NULL),
(3, 'Niki', 'Minaj', '', '123456', '010022834', 'niki@uvm.my.edu.mx', '55133345497', '', 1, NULL, NULL),
(4, 'Sasha', 'Gray', '', '123456', '010033111', 'sashaaction@gray.com', '5513343325', '', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asiento`
--

CREATE TABLE `asiento` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_mesa` int(10) UNSIGNED NOT NULL,
  `id_silla` int(10) UNSIGNED NOT NULL,
  `id_reservacion` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asiento`
--

INSERT INTO `asiento` (`id`, `id_mesa`, `id_silla`, `id_reservacion`, `created_at`, `updated_at`) VALUES
(1, 10, 4, 3, NULL, NULL),
(2, 5, 3, 3, NULL, NULL),
(3, 7, 8, 3, NULL, NULL),
(4, 8, 1, 3, NULL, NULL),
(5, 7, 9, 3, NULL, NULL),
(11, 11, 6, 1, NULL, NULL),
(12, 11, 7, 1, NULL, NULL),
(105, 7, 11, 3, '2018-11-29 17:15:04', '2018-11-29 17:15:04'),
(104, 7, 0, 3, '2018-11-29 17:15:04', '2018-11-29 17:15:04'),
(106, 1, 4, 1, '2018-11-30 07:38:12', '2018-11-30 07:38:12'),
(107, 2, 2, 1, '2018-11-30 07:38:12', '2018-11-30 07:38:12'),
(108, 1, 5, 3, '2018-11-30 12:49:32', '2018-11-30 12:49:32'),
(109, 2, 1, 3, '2018-11-30 12:49:32', '2018-11-30 12:49:32'),
(110, 3, 3, 3, '2018-11-30 12:49:32', '2018-11-30 12:49:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` bigint(20) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alumno_uvm` varchar(2) DEFAULT NULL,
  `nivel_acad` varchar(20) DEFAULT NULL,
  `movil` varchar(10) NOT NULL,
  `campus` varchar(50) DEFAULT NULL,
  `comentarios` text,
  `fecha_cita` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombres`, `email`, `alumno_uvm`, `nivel_acad`, `movil`, `campus`, `comentarios`, `fecha_cita`) VALUES
(13, 'noelara', 'noecarlos.larama@my.uvm.edu.mx', 'si', 'LICENCIATURA', '42342342', 'Chapultepec', '', '0000-00-00'),
(14, 'noelaramartinez', 'noecarlos.larama@my.uvm.edu.mx', 'si', 'LICENCIATURA', '2342341231', 'Chapultepec', 'este es un comentario de prueba', '2018-12-31'),
(15, 'Eduardo', 'lalo.alvaradoco@gmail.com', 'no', '', '5546199457', '', 'kkkkk', '2018-11-15'),
(16, 'ivette perez', 'ivette@my.uvm.edu.mx', 'si', 'POSGRADO', '9878', 'San Angel', 'este es comentario de prueba .................', '2018-12-04'),
(17, 'lizet garcia garcia', 'noecarlos.larama@my.uvm.edu.mx', 'si', 'POSGRADO', '5523536709', 'Aguascalientes', 'comentario para probar el funcionamiento del sistema', '2018-12-07'),
(18, 'pedro navajas el chido', 'pedronavajas@gmail.com', 'si', 'POSGRADO', '5512462219', 'Santa Fe', 'comentario test', '2018-12-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `numero_mesa` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`id`, `created_at`, `updated_at`, `numero_mesa`) VALUES
(1, NULL, NULL, 1),
(2, NULL, NULL, 2),
(3, NULL, NULL, 3),
(4, NULL, NULL, 4),
(5, NULL, NULL, 5),
(6, NULL, NULL, 6),
(7, NULL, NULL, 7),
(8, NULL, NULL, 8),
(9, NULL, NULL, 9),
(10, NULL, NULL, 10),
(11, NULL, NULL, 11),
(12, NULL, NULL, 12),
(13, NULL, NULL, 13),
(14, NULL, NULL, 14),
(15, NULL, NULL, 15),
(16, NULL, NULL, 16),
(17, NULL, NULL, 17),
(18, NULL, NULL, 18),
(19, NULL, NULL, 19),
(20, NULL, NULL, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_08_165643_create_alumno_table', 1),
(4, '2018_09_08_211013_create_reservacion_table', 1),
(5, '2018_09_08_211134_create_mesa_table', 1),
(6, '2018_09_08_211203_create_silla_table', 1),
(7, '2018_09_08_211234_create_asiento_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_alumno` int(10) UNSIGNED NOT NULL,
  `fecha_reservacion` datetime NOT NULL,
  `fecha_limite` datetime NOT NULL,
  `fecha_evento` datetime NOT NULL,
  `monto_total` double(8,2) NOT NULL,
  `adeudo` double(8,2) NOT NULL,
  `precio_unitario` double(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `cantidad_asientos` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservacion`
--

INSERT INTO `reservacion` (`id`, `id_alumno`, `fecha_reservacion`, `fecha_limite`, `fecha_evento`, `monto_total`, `adeudo`, `precio_unitario`, `status`, `cantidad_asientos`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-09-09 00:00:00', '2018-11-30 00:00:00', '2018-12-07 19:00:00', 3040.00, 340.00, 760.00, 0, 4, NULL, NULL),
(2, 2, '2018-09-06 00:00:00', '2018-11-30 00:00:00', '2018-12-07 19:00:00', 3800.00, 1900.00, 760.00, 0, 5, NULL, NULL),
(3, 4, '2018-10-16 00:00:00', '2018-11-30 00:00:00', '2018-12-07 19:00:00', 7600.00, 0.00, 760.00, 1, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `silla`
--

CREATE TABLE `silla` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero_silla` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `silla`
--

INSERT INTO `silla` (`id`, `numero_silla`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL),
(4, 4, NULL, NULL),
(5, 5, NULL, NULL),
(6, 6, NULL, NULL),
(7, 7, NULL, NULL),
(8, 8, NULL, NULL),
(9, 9, NULL, NULL),
(10, 10, NULL, NULL),
(11, 11, NULL, NULL),
(12, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '010033825', 'noelaramartinez@gmail.com', '123456', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alumno_no_cuenta_unique` (`no_cuenta`),
  ADD UNIQUE KEY `alumno_e_mail_unique` (`e_mail`),
  ADD UNIQUE KEY `alumno_tel_movil_unique` (`tel_movil`);

--
-- Indices de la tabla `asiento`
--
ALTER TABLE `asiento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asiento_id_mesa_foreign` (`id_mesa`),
  ADD KEY `asiento_id_silla_foreign` (`id_silla`),
  ADD KEY `asiento_id_reservacion_foreign` (`id_reservacion`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservacion_id_alumno_foreign` (`id_alumno`);

--
-- Indices de la tabla `silla`
--
ALTER TABLE `silla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `asiento`
--
ALTER TABLE `asiento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `silla`
--
ALTER TABLE `silla`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
