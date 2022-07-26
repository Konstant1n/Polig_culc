-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 26 2022 г., 16:47
-- Версия сервера: 5.6.51
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog_php`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 NOT NULL,
  `paper` varchar(255) CHARACTER SET utf8 NOT NULL,
  `amount` varchar(255) CHARACTER SET utf8 NOT NULL,
  `users_id` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `type`, `size`, `paper`, `amount`, `users_id`) VALUES
(1, 'Прямокутні', '20x20', 'Плівка біла глянцева', '100', '1'),
(2, 'Зі скру-ми кутами', '15x15', 'Плівка біла матова', '2 500', '1'),
(3, 'Прямокутні', '20x20', 'Плівка прозора', '500', '1'),
(4, 'Круглі', '20x20', 'Плівка біла глянцева', '100', '2'),
(5, 'Круглі', '20x20', 'Плівка біла глянцева', '100', '3'),
(6, 'Прямокутні', '20x20', 'Плівка біла глянцева', '100', '3'),
(8, 'Круглі', '20x20', 'Плівка біла глянцева', '100', '3'),
(9, 'Круглі', '20x20', 'Папір самоклеючий', '100', '3'),
(10, 'Прямокутні', '30x30', 'Плівка біла матова', '500', '4');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@mail.ua', 'admin', 'admin'),
(2, 'adas', 'sania@mail.ua', 'admin', 'user'),
(3, 'Admin2', '123@gmail.com', '123', 'admin'),
(4, 'test2', '456@gmail.com', '123', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
