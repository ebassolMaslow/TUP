-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 30 2024 г., 22:47
-- Версия сервера: 5.7.39-log
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tup`
--

-- --------------------------------------------------------

--
-- Структура таблицы `documents`
--

CREATE TABLE `documents` (
  `id_documents` int(11) NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uname` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `ugroup` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `documents`
--

INSERT INTO `documents` (`id_documents`, `email`, `surname`, `uname`, `middlename`, `birthday`, `ugroup`, `document_type`, `id_user`) VALUES
(1, 'dsadsada@asdasd', 'asdsadasda', 'dsasdasda', 'dadasads', '1111-11-11', 'sadadasd', 'reference_to_the_military_commissariat', 4),
(2, 'qwssda@dasdsad', 'dasdsad', 'dasdsad', 'dasdsad', '2111-11-11', 'dasdsad', 'copy_license', 4),
(3, 'wdads@adsadad', 'sadasdasdasdas', 'sadasdasdasdas', 'sadasdasdasdas', '9999-12-12', 'asdsadasd', 'Копия аккредитации, заверенная руководителем', 4),
(5, 'wdasdadsasd@asdasd', 'asdasdasd', 'adsadasdasd', 'asdasdasd', '1243-12-12', 'asdasdasasdasd', 'copy_license', 4),
(6, 'sadasdasad@sdasd', 'adsasd', 'sadasd', 'dsadasd', '1111-11-11', 'asdsa', 'Копия аккредитации, заверенная руководителем', 4),
(7, 'testtest@gmail.commmmm', 'Масликов', 'Александр', 'Юрьевич', '5435-12-12', 'вд50-60-20', 'Копия аккредитации, заверенная руководителем', 4),
(8, 'asdasd@asdasd', 'asdasd', 'asdasd', 'asdasd', '1111-11-11', 'asdasd', 'Копия аккредитации, заверенная руководителем', 4),
(9, 'dwasd@dwasd', 'dwasd', 'dwasd', 'dwasd', '2321-11-11', '32323', 'Копия аккредитации, заверенная руководителем', 4),
(10, 'asdsads!@asdsads', 'asdsads', 'asdsads', 'asdsads', '1111-11-11', 'asdsads', 'Справка в военный комиссариат (приложение 4)', 4),
(11, 'wfsdfd@wfsdfd', 'wfsdfd', 'wfsdfd', 'wfsdfd', '1111-11-11', 'wfsdfd', 'Копия аккредитации, заверенная руководителем', 4),
(12, 'asdsdssd@asdsd', 'ыфвфвы', 's', 's', '9999-11-11', 'jjjjjjjjjj', 'Копия лицензии, заверенная руководителем', 4),
(13, 'dsfdsf@asads', 'asads', 'asads', 'asads', '9999-11-11', '1313', 'Справка в военный комиссариат (приложение 4)', 4),
(14, 'testtest@gmail.commmmm', 'Масликов', 'Александр', 'Юрьевич', '1111-11-11', 'вд50-60-20', 'Копия аккредитации, заверенная руководителем', 4),
(23, 'sadasdadss@sad', 'dadasdsa', 'asdasdas', 'asdadssad', '1111-11-11', 'sadsadasd', 'Копия лицензии, заверенная руководителем', 15),
(24, 'awda@sadad', 'asdsad', 'asdsad', 'adsad', '9999-12-12', '2323', 'Копия аккредитации, заверенная руководителем', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `question`
--

CREATE TABLE `question` (
  `id_question` int(11) NOT NULL,
  `question_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtime` datetime NOT NULL,
  `question_status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `question`
--

INSERT INTO `question` (`id_question`, `question_text`, `answer`, `email`, `qtime`, `question_status`, `id_user`) VALUES
(16, 'Помогите', 'фывфывфыв', '', '2024-02-10 19:52:13', 'Посмотреть ответ', 17),
(17, 'f', 'фывфыв', 'sda@add', '2024-02-19 02:53:27', 'Посмотреть ответ', 17),
(18, 'sdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsds', 'ыфвыв', '', '2024-02-19 02:53:40', 'Посмотреть ответ', 17),
(19, 'sdf', NULL, '', '2024-02-28 11:10:43', 'Ожидается ответ', 17),
(20, 'asdsadasd', NULL, '', '2024-02-28 11:11:02', 'Ожидается ответ', 17),
(21, 'ddfdf', NULL, '', '2024-03-04 19:57:40', 'Ожидается ответ', 17),
(22, 'осу', NULL, '', '2024-03-15 12:39:00', 'Ожидается ответ', 17),
(23, 'f', NULL, '', '2024-03-24 16:45:00', 'Ожидается ответ', 17),
(24, 'dsffsd', NULL, 'isip_a.yu.maslikov@mpt.ru', '2024-03-26 21:29:56', 'Ожидается ответ', 17),
(25, 'asdsadsdsd', NULL, '0', '2024-03-27 11:12:35', 'Ожидается ответ', 17),
(26, 'sdasdsadsad', NULL, '0', '2024-03-27 11:14:37', 'Ожидается ответ', 17),
(27, 'sadsafdsads', NULL, 'adsfgjhgfd@sabdsadf', '2024-03-27 11:16:57', 'Ожидается ответ', 17),
(28, 'sasdsasd', NULL, 'sasd@sasd', '2024-03-27 12:21:30', 'Ожидается ответ', 17),
(29, 'gddfdfd\r\n\r\n', NULL, 'dsgdhgheafgddf@2', '2024-03-27 12:21:55', 'Ожидается ответ', 17),
(30, 'adsfdsfdsferWsXGBV G3', NULL, 'awdasdsad@sfdds', '2024-03-27 12:22:48', 'Ожидается ответ', 17),
(31, 'ASDSADS', NULL, 'DSFDSFDSF@DASDSAD', '2024-03-27 12:22:58', 'Ожидается ответ', 17),
(32, 'DSFHVFDSAW', NULL, 'FGDDDGFD@VBFS', '2024-03-27 12:23:36', 'Ожидается ответ', 17),
(33, 'KJHGFWEDTFUGIJSdFN', NULL, 'SDFDSF@SFDBNBVGFD', '2024-03-27 12:25:40', 'Ожидается ответ', 17),
(34, 'wef', 'Хорош', 'fdsf@fad', '2024-03-29 14:25:09', 'Посмотреть ответ', 4),
(35, 'test', NULL, 'test@test', '2024-03-29 14:54:44', 'Ожидается ответ', 4),
(36, 'ewqeqwedsd', NULL, 'qweaewqeqw@dsd', '2024-03-30 12:22:16', 'Ожидается ответ', 4),
(37, 'd', NULL, 'adasdsa@asdas', '2024-04-03 08:48:40', 'Ожидается ответ', 4),
(38, 'В тихой глубине моря, где свет проникает лишь слабыми лучами сквозь густые заросли водорослей, разверзается целый мир невиданных чудес. Там, среди прибрежных скал и морских пещер, витает загадочная атмосфера, наполненная таинственными обитателями - рыбами. Их многообразие поражает воображение: от маленьких игривых рыбок-клоунов, весело пляшущих вокруг коралловых рифов, до огромных глубоководных чудовищ, скрывающихся в самых глубоких уголках океана.', 'В тихой глубине моря, где свет проникает лишь слабыми лучами сквозь густые заросли водорослей, разверзается целый мир невиданных чудес. Там, среди прибрежных скал и морских пещер, витает загадочная атмосфера, наполненная таинственными обитателями - рыбами. Их многообразие поражает воображение: от маленьких игривых рыбок-клоунов, весело пляшущих вокруг коралловых рифов, до огромных глубоководных чудовищ, скрывающихся в самых глубоких уголках океана.', 'sashamasli@sashamasli', '2024-04-11 21:34:57', 'Посмотреть ответ', 24),
(39, 'adsdsad', NULL, 'adsdsad@adsdsad', '2024-04-11 21:45:08', 'Ожидается ответ', 24);

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
(1, 'Администратор'),
(2, 'Пользователь'),
(5, 'Кекичич'),
(12, 'ddsdas'),
(13, 'sadsad'),
(14, 'dassadsad'),
(15, '3333333333'),
(16, 'dima1'),
(17, 'dima2'),
(18, 'dima3'),
(19, 'dima3'),
(20, 'dima555'),
(21, 'dima63'),
(26, 'adadsa');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uname` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middlename` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ugroup` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialization` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `reset_token` varchar(85) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_requested_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `login`, `profile_photo`, `email`, `password`, `surname`, `uname`, `middlename`, `ugroup`, `specialization`, `qualification`, `course`, `telephone`, `job_title`, `id_role`, `reset_token`, `reset_requested_at`) VALUES
(4, 'test', '662ffb981ae37_wallpaperflare.com_wallpaper (4).jpg', 'wwssda@sdsad', '$2y$10$wHW5KFuIKnrLH/qngZ.HNO.pmXekIi7yRfgheXFXC2l/M.y/.3EbC', 'Масликов', 'Александр', 'Юрьевич', 'вд50-60-20', '09.09.09', 'Суетолог1111111', '1', '8 (903) 537-12-81', 'Студент', 1, '', NULL),
(5, '134ds', '', 'test@test', '$2y$10$1FFguyAhSF3Tpfgmm407XuNXk6LzhJslQpkH3K2QQPkLuKQrSPOci', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, '', NULL),
(6, 'testtest', '', 'test@test', '$2y$10$M0gslp7TDahRceYbvAMa7ON9CS01PPp7zTUl11YutXTZnQGGGn.Oq', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, '', NULL),
(7, 'testt', '', 'test@test', '$2y$10$vPrXE3nNgn2f0fnPiT90neSAz.erNdA8q/Z2D/IJVHQaXF9/oTHSW', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, '', NULL),
(8, 'teddws', '', 'test@test', '$2y$10$GEOi5c0.Fj9uQKxQJFeVce3izMoyTo1foei5sF5xdTNglMt4bgQ22', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, '', NULL),
(9, 'sadadssadadssadadssa', '', 'sadadssadadssadadssadadssadadssadadssadadssadadssa', '$2y$10$xDZbLtgE7q8JIKIUWd5bsuKRRZejVgqwGuSKD2ZFWB0J8yiQ.IR4G', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, '', NULL),
(10, 'adsdfsdfdfadsdfsdfdf', '', 'adsdfsdfdfadsdfsdfdfadsd@sdfdfadsdfsdfdfadsdfsdfdf', '$2y$10$ChyqvpzfBlL9//mkg2zm6ujPUHnK.xEwfbNDCjRpa6UfyywhYiKWm', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, '', NULL),
(11, 'sadsadsadsadsadsadsa', '', 'sadsadsadsadsad@adsadsadsadsadsadsadsadsadsadsadsa', '$2y$10$mjjCLZfDOBqh4VwA8ek8kuvaFeufbN.KWBGdktB05Kk3ONq550SuK', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, '', NULL),
(12, 'testtesttesttesttest', '', 'testtesttesttesttest@test', '$2y$10$o2LAsTSpCF377Uv.RyLRjO.E9Zi5lBcqNmGwlZ32Fz8KuNC5GJGDq', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, '', NULL),
(13, 'sasha', '', 'wted@rers', '$2y$10$xrfmFP7P4otli1SkZ8lqB.nRXTc/P/I5T/ThGTNEtvwmdjD0fMpaC', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, '', NULL),
(14, 'fdgghhhgj@fdgghhhgj', '', 'fdgghhhgjfdgghhhgjfdgghhhgj@fdgghhhgj', '$2y$10$WlJ5mj8Pxq8haYee1gHJHec83ln8MAWFDPlF/wSjEbzn21xCsKtpq', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, NULL, NULL),
(15, 'dimadima', '', 'aleksandrmass7@gmail.cd', '$2y$10$p2OhtS2es0YDqd.KHNy8R.aEZj8jAVHUEKKBZFO/uUuSOl/S9wvK2', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, '', NULL),
(16, 'anyasanya', '', 'alefds@gmdsdf', '$2y$10$XI0EtpZYFjqaCXUDHp7jFuXS.0dStNfRgYQ6OCbAApiDoD3LQOG8O', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, NULL, NULL),
(17, 'asyatopchik228', '', 'isip_a.yu.maslikov@dsadsad', '$2y$10$AXlgmjlHdOEcRI1BxzwbBuStdkOhCbZ.TZfeZp2TpicqWHumH4waW', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, NULL, '2024-03-26 20:03:59'),
(18, 'test2', '', 'test2@test2', '$2y$10$as7u0NnxbJoegxqJ0D/qP.Te11HT.SpzVg1/NKPSfYgyZMOSAMfL.', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, NULL, NULL),
(20, 'sashatoptop', '', 'isip_a.yu.maslikov@mss', '$2y$10$sJg1imNCI0eaaxX0rEkDieqy3ZMKT.dCDkbW1dbr..SWbQkqln/4a', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, NULL, '2024-03-29 14:51:13'),
(21, 'dassdaadad', '6614292c0e934_SwVGCzvdMks.jpg', 'dassdaadad@dassdaadad', '$2y$10$zNMcP.dZCdd14XiIipn8I.wYOjFkdBX7Z.2Ljd41cadYOY91P1g7u', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', 2, NULL, NULL),
(22, 'wacsssadds', '6614291002a3b_SwVGCzvdMks.jpg', 'wacsssadds@wacsssadds', '$2y$10$s2Ux8IcMSnT0tyve/4a0WuUL6UEI5jjcl2yK7sO/L9UV1hIRjGm82', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'Студент', 2, NULL, NULL),
(23, 'asasasasasas', '661428e4a99a0_g6KkVlk5rl8.jpg', 'asasasasasas@asasasasasas', '$2y$10$VlsI/EnrLAtH1r85ZGg4aeycOODRRWFUUC6tv/XSvHQFb7XGkjnoq', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'Студент', 2, NULL, NULL),
(24, 'sashamasli', '66182d408aea9_SwVGCzvdMks.jpg', 'isip_a.yu.maslikov@mpt.ru', '$2y$10$wO35zXt/NqD.ju0ezCxD/.4wlyp49qZkHcQfErx4mqtQOjZQSgENq', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'Студент', 5, '19798539d79f1dae767b40b0a3af7bd3780ec3d0dc450225596d74f7122a8aff', '2024-04-29 23:08:02'),
(35, 'asdsadsadsad', NULL, 'asdsadsadsad@asdsadsadsad', '$2y$10$O2Uc9YvH6LnHVK9qR4Nx.urgQHmha/B3dfGU9vOWxftRJ2ujrJYr2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'aaaaqdsd', NULL, 'aaaaqdsd@aaaaqdsd', '$2y$10$FsTroFDwLxBkjsdUsohpy.K5sEyb88QfpHgjxyM.4MxIEkyUvGhe.', 'aaaaqdsd', 'САШААААААААААААААААААААААААААААААААААААААААААААААА', 'aaaaqdsd', 'aaaaqdsd', 'aaaaqdsd', 'aaaaqdsd', 'a', 'aaaaqdsd', 'aaaaqdsd', 2, NULL, NULL),
(37, 'asasadaaa', 'default.jpg', 'asasadaaa@asasadaaa', '$2y$10$zQfG5x4MMjaLIfZ5NmyEKedBuCp/D0YhCBDptQPoXSv9VHcDhUW8K', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'Студент', 2, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id_documents`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `user_ibfk_1` (`id_role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `documents`
--
ALTER TABLE `documents`
  MODIFY `id_documents` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
