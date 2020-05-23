-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 23 2020 г., 11:17
-- Версия сервера: 8.0.20
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lab5_general`
--

-- --------------------------------------------------------

--
-- Структура таблицы `table_studios`
--

CREATE TABLE `table_studios` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_registration` date NOT NULL,
  `anime_number` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `table_studios`
--

INSERT INTO `table_studios` (`id`, `name`, `date_registration`, `anime_number`) VALUES
(1, 'White Fox', '2007-04-01', 20),
(2, 'Wit Studio', '2012-06-01', 11),
(3, 'Kyoto Animation', '1981-03-09', 48),
(4, 'Bones', '1998-07-20', 66);

-- --------------------------------------------------------

--
-- Структура таблицы `table_titles`
--

CREATE TABLE `table_titles` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_release` date NOT NULL,
  `studio_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `table_titles`
--

INSERT INTO `table_titles` (`id`, `name`, `date_release`, `studio_id`) VALUES
(1, 'Clannad', '2007-10-04', 3),
(2, 'Re:Zero. Жизнь с нуля в альтернативном мире', '2016-04-04', 1),
(3, 'Вторжение гигантов', '2013-04-07', 2),
(4, 'Моя геройская академия', '2016-04-03', 4),
(5, 'K-on', '2009-04-03', 3),
(6, 'Вайолет Эвергарден', '2018-01-10', 3),
(8, 'Бездомный бог', '2014-01-05', 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `table_studios`
--
ALTER TABLE `table_studios`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `table_titles`
--
ALTER TABLE `table_titles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `studio_id` (`studio_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `table_studios`
--
ALTER TABLE `table_studios`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `table_titles`
--
ALTER TABLE `table_titles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `table_titles`
--
ALTER TABLE `table_titles`
  ADD CONSTRAINT `table_titles_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `table_studios` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
