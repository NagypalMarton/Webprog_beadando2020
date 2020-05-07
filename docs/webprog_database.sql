-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gép: mysql.omega:3306
-- Létrehozás ideje: 2020. Máj 08. 01:26
-- Kiszolgáló verziója: 5.6.47-log
-- PHP verzió: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webprog_database`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `galeria`
--

CREATE TABLE `galeria` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(20) NOT NULL,
  `img_upload_time` time NOT NULL,
  `user_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orokbefogad`
--

CREATE TABLE `orokbefogad` (
  `orokbefogado_neve` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `orokbefogado_cime` varchar(45) COLLATE utf8_hungarian_ci NOT NULL,
  `orokbefogado_telefonszama` int(11) NOT NULL,
  `orokbefogadott_neve` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `orokbefogadas_ideje` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `vezeteknev` varchar(30) NOT NULL,
  `keresztnev` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_passworld` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`img_name`),
  ADD KEY `img_id` (`img_id`),
  ADD KEY `user_name` (`user_name`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`),
  ADD KEY `user_id` (`user_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
