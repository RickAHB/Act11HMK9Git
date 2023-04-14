-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2023 a las 06:14:26
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `users`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `real_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `universe_id` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `real_name`, `gender`, `universe_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SpiderMan', 'SpiderMan@gmail.com', NULL, '$2y$10$Jghp2I8rBAkO4g2MrI/XU.nVQrPnN62aArgHC0rVZPpKLHQROdSWm', 'Peter', 'Male', 4, NULL, '2023-04-14 10:09:26', '2023-04-14 10:09:26'),
(2, 'hulk', 'hulk@gmail.com', NULL, '$2y$10$CtSjb5w.9a7FivwrfJnwY.Nz1da98/8uTsS2dm5BCtAmz085WM47i', 'Robert Bruce Banner', 'Male', 4, NULL, '2023-04-14 10:09:26', '2023-04-14 10:09:26'),
(3, 'Captain', 'Captain@gmail.com', NULL, '$2y$10$73YqN4IO7bPsTy383oSJIOGx02/xcEQcBAyVzrXQ.t30t89pgln.i', 'Steven Rogers', 'Male', 4, NULL, '2023-04-14 10:09:26', '2023-04-14 10:09:26'),
(4, 'Superman', 'Superman@gmail.com', NULL, '$2y$10$.StEoRvpq.41JnectRrmQOWjb42Y5RN9ji1A1C2YG2L.xqXg.TJsy', 'Clark Kent', 'Male', 2, NULL, '2023-04-14 10:09:26', '2023-04-14 10:09:26'),
(5, 'Batman', 'Batman@gmail.com', NULL, '$2y$10$IZu7au5XtyXZtpnytA5zS.et0GeAYSoOt.U5W/KfrHAWd5uInhRNG', 'Bruce Wayne', 'Male', 1, NULL, '2023-04-14 10:09:26', '2023-04-14 10:09:26'),
(6, 'Scarlert_Spiderman', 'Scarlert_Spiderman@gmail.com', NULL, '$2y$10$RFn4LmHA8YpkGrf1ottDTuncnjslGoHFzfFEQCw7uLleuZrlIg4V.', 'Ben Reilly', 'Male', 5, NULL, '2023-04-14 10:09:26', '2023-04-14 10:09:26'),
(7, 'Wonder_Woman', 'Wonder_Woman@gmail.com', NULL, '$2y$10$0/B2Qa.PpLzbJxNyH90Ipebvt2BgLmTbMoIskcpMsXiNM2y5Xi5HS', 'Ben Reilly', 'Female', 1, NULL, '2023-04-14 10:09:26', '2023-04-14 10:09:26'),
(8, 'Doomsday', 'Doomsday@gmail.com', NULL, '$2y$10$BwqiOs.dS0hHl3PBUncMYOjIJZG3J9fzoq8sOfCFYpD7ZpkRapmTO', 'Ben Reilly', 'male', 3, NULL, '2023-04-14 10:09:26', '2023-04-14 10:09:26'),
(9, 'Scarlet_Witch', 'Scarlet_Witch@gmail.com', NULL, '$2y$10$xM8.Woy4l68cuFlkR4Ys7.O9hDGuwSWtErYnBBLRHo0ID38.Msqiq', 'Ben Reilly', 'Female', 5, NULL, '2023-04-14 10:09:26', '2023-04-14 10:09:26'),
(10, 'Night_Wing', 'Night_Wing@gmail.com', NULL, '$2y$10$8fS7NQPrtNvOdZDhg8XVMukFdxi.LPhQEnxchVB9iG.S.4WCExQBW', 'Ben Reilly', 'male', 3, NULL, '2023-04-14 10:09:26', '2023-04-14 10:09:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
