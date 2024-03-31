-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Янв 11 2024 г., 19:21
-- Версия сервера: 5.7.34
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dinacleaning`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '_5y34cIfgNXFfjKsngMpbxEXxfjIQ1DL', '$2y$13$5PWkf7dCmu.ZLxJUHgFS.OeT4rmdzIzLIi3rtluOHki2htCtQOuoe', NULL, 'quadrosh@gmail.com', 10, 1479801833, 1479801833),
(3, 'Johndoe', '', '$2a$10$Eq/wwW2iQVcIgYs5dz8Gm.2VDUdjt563/zZqK6Cbrrbjk4u5VF0jK', NULL, 'asdf@asdfasdf.com', 10, 1479801833, 1479801833);

-- --------------------------------------------------------

--
-- Структура таблицы `advantages`
--

CREATE TABLE `advantages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `long_text` text,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `advantages`
--

INSERT INTO `advantages` (`id`, `name`, `description`, `long_text`, `image`) VALUES
(1, 'Опыт', 'Богатый опыт уборки от квартир премиум класса и коттеджей дворцового уровня до выставок федерального значения с посещением президента, позволяет мне смело заявлять, что мы справимся. ', '', ''),
(2, 'Хорошая уборка', 'Качество работы - основа репутации в любой индустрии, и клининг не исключение. \r\nЯ дорожу своей репутацией и контролирую процесс, что бы каждая уборка заканчивалась довольным заказчиком. По этому цифры говорят сами за себя - каждый третий заказчик обращается вновь и становится нашим постоянным партнером.', '', ''),
(3, 'Бережная обработка дорогих предметов', 'У каждого человека есть особенно дорогие сердцу вещи, к очистке которых необходимо отнестись  с повышенной осторожностью. Богатый личный опыт работы с предметами премиум класса позволяет использовать эксклюзивные техники очистки неизвестные не только заказчикам, но и многим профессиональным клинерам. В сложных случаях я честно придерживаюсь принципа \"не навреди\" и берусь за очистку только если уверена в результате.', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `callme`
--

CREATE TABLE `callme` (
  `id` int(5) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `comment` text,
  `utm_source` varchar(510) DEFAULT NULL,
  `utm_medium` varchar(510) DEFAULT NULL,
  `utm_campaign` varchar(510) DEFAULT NULL,
  `utm_term` varchar(510) DEFAULT NULL,
  `utm_content` varchar(510) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `callme`
--

INSERT INTO `callme` (`id`, `phone`, `comment`, `utm_source`, `utm_medium`, `utm_campaign`, `utm_term`, `utm_content`, `date`) VALUES
(1, '123', '', NULL, NULL, NULL, NULL, NULL, '2017-06-17 16:08:33'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-17 16:52:31'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-17 16:55:38'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-17 17:47:30'),
(5, '234234', NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-17 17:51:25'),
(6, '234423', NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-17 18:17:01'),
(7, '777777', NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-19 17:40:02'),
(8, 'test', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-05 19:21:16'),
(9, 'test', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-05 19:47:23'),
(10, '1234', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-05 20:05:19'),
(11, '33333', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-05 20:05:56'),
(12, '2222', NULL, 'google', 'cpc', 'dinacleaning_ga_search', 'uborka_kvartir_v_moskve', 'text', '2017-09-05 20:18:15'),
(13, '5555', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-05 20:25:48'),
(14, '111', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-05 20:32:08'),
(15, '111', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-05 20:34:07'),
(16, '2222', NULL, 'google', 'cpc', 'dinacleaning_ga_search', 'uborka_kvartir_v_moskve', 'text', '2017-09-05 20:35:23'),
(17, '33', NULL, 'google', 'cpc', 'dinacleaning_ga_search', 'uborka_kvartir_v_moskve', 'text', '2017-09-05 20:35:51'),
(18, '44', NULL, 'google', 'cpc', 'dinacleaning_ga_search', 'uborka_kvartir_v_moskve', 'text', '2017-09-05 20:36:27'),
(19, '11111', NULL, 'google', 'cpc', 'dinacleaning_ga_search', 'uborka_kvartir_v_moskve', 'text', '2017-09-05 20:39:37'),
(20, '3333', NULL, 'google', 'cpc', 'dinacleaning_ga_search', 'uborka_kvartir_v_moskve', 'text', '2017-09-05 20:40:11'),
(21, '3334', NULL, 'google', 'cpc', 'dinacleaning_ga_search', 'uborka_kvartir_v_moskve', 'text', '2017-09-05 21:07:38');

-- --------------------------------------------------------

--
-- Структура таблицы `clean_type`
--

CREATE TABLE `clean_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clean_type`
--

INSERT INTO `clean_type` (`id`, `name`, `description`) VALUES
(1, 'Повседневная уборка', 'Повседневная или поддерживающая уборка - вид клининга, включающий в себя уборку пола и пыли на горизонтальных поверхностях, для поддержания чистоты и порядка в Вашем доме. При проведении поддерживающей уборки устраняются пыль и лёгкие загрязнения во всех помещениях.'),
(2, 'Генеральная уборка', NULL),
(3, 'Уборка после ремонта', NULL),
(4, 'Мойка окон', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `home_slides`
--

CREATE TABLE `home_slides` (
  `id` int(3) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `lead` varchar(255) NOT NULL,
  `lead2` varchar(255) DEFAULT NULL,
  `text` text,
  `image` varchar(255) DEFAULT NULL,
  `promolink` varchar(255) DEFAULT NULL,
  `promoname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `home_slides`
--

INSERT INTO `home_slides` (`id`, `title`, `lead`, `lead2`, `text`, `image`, `promolink`, `promoname`) VALUES
(1, 'Приветствие', 'Порядок в доме', 'порядок в жизни', '', 'slide_1.jpg', '', ''),
(2, 'Уважение', 'Впустим свет', 'в ваш дом ', '', 'slide_2.jpg', '', ''),
(3, 'Чистота ', 'Чистота дома', 'без хлопот', '', 'slide_3.jpg', '', ''),
(4, 'Время', 'Уют и свежесть', 'улучшают настроение', '', 'slide_4.jpg', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `masters`
--

CREATE TABLE `masters` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(15) DEFAULT NULL,
  `hrurl` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `keywords` text,
  `lead_text` text,
  `image` varchar(255) DEFAULT NULL,
  `page_description` text,
  `imagelink` varchar(255) DEFAULT NULL,
  `imagelink_alt` varchar(255) DEFAULT NULL,
  `sendtopage` varchar(255) DEFAULT NULL,
  `promolink` varchar(255) DEFAULT NULL,
  `promoname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(5) NOT NULL,
  `user_id` int(4) DEFAULT NULL,
  `work_date` varchar(255) DEFAULT NULL,
  `work_type` varchar(255) DEFAULT NULL,
  `workplace` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `address` varchar(510) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `comment` text,
  `contacts` varchar(255) DEFAULT NULL,
  `to_master_id` int(5) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `windows` int(11) DEFAULT NULL,
  `windows_qnt` int(11) DEFAULT NULL,
  `work_time` varchar(255) DEFAULT NULL,
  `utm_content` varchar(510) DEFAULT NULL,
  `utm_source` varchar(510) DEFAULT NULL,
  `utm_medium` varchar(510) DEFAULT NULL,
  `utm_campaign` varchar(510) NOT NULL,
  `utm_term` varchar(510) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `work_date`, `work_type`, `workplace`, `area`, `address`, `name`, `phone`, `comment`, `contacts`, `to_master_id`, `email`, `date`, `status`, `rooms`, `windows`, `windows_qnt`, `work_time`, `utm_content`, `utm_source`, `utm_medium`, `utm_campaign`, `utm_term`) VALUES
(1, NULL, 'sdafd12', 'генералка', 'квартира', '22', 'йцук', 'фыав', '234', 'фыав', 'фыва', NULL, '', '2017-04-14 19:03:02', '', 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(2, NULL, '13 april', 'поддерживающая', 'коттедж', '200', 'мытищи', 'Александр', '1233', 'йцу', 'ыва', NULL, '', '2017-04-15 10:00:17', '', 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(3, NULL, NULL, 'квартирко', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-15 13:48:29', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(4, NULL, NULL, 'квартирко', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-15 13:48:36', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(5, NULL, NULL, 'с промисом', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-15 13:52:28', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(6, NULL, '1.12', 'повседневная', 'квартира', '33', 'цукйцку', NULL, NULL, 'ога', NULL, NULL, NULL, '2017-04-15 14:03:17', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(7, NULL, '1.12', 'повседневная', 'квартира', '33', 'цукйцку', NULL, NULL, 'ога', NULL, NULL, NULL, '2017-04-15 14:06:17', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(8, NULL, '1423', 'йафыв', 'фыва', NULL, 'фывафыва', NULL, NULL, 'фыва', NULL, NULL, NULL, '2017-04-15 14:06:44', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(9, NULL, '333', '333', '333', '333', '333', NULL, NULL, '333', NULL, NULL, NULL, '2017-04-15 14:17:58', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(10, NULL, '333', '333', '333', '333', '333', NULL, NULL, '333', NULL, NULL, NULL, '2017-04-15 14:18:01', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(11, NULL, '333', '333', '333', '333', '333', NULL, NULL, '333', NULL, NULL, NULL, '2017-04-15 14:18:02', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(12, NULL, '333', '333', '333', '333', '333', NULL, NULL, '333', NULL, NULL, NULL, '2017-04-15 14:18:02', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(13, NULL, '44', '44', '44', '44', '44', NULL, NULL, '44', NULL, NULL, NULL, '2017-04-15 14:19:20', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(14, NULL, 'йцу', 'йц', 'йцу', '22', 'йцу', NULL, NULL, 'йцу', NULL, NULL, NULL, '2017-04-15 17:25:43', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(15, NULL, 'фа', 'ыва', 'flat', '123', 'ыва', NULL, NULL, 'ыва', NULL, NULL, NULL, '2017-04-15 17:28:12', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(16, NULL, 'цук', 'йцук', 'other', '213', '123', NULL, NULL, '123', NULL, NULL, NULL, '2017-04-15 17:32:09', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(17, NULL, 'фыва', 'фыва', 'flat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-15 18:08:06', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(18, NULL, 'фыва', 'фыва', 'flat', '123', 'ыфва', NULL, NULL, 'фыва', NULL, NULL, NULL, '2017-04-15 18:09:08', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(19, NULL, 'вчера', 'поддерживающая', 'квартира', '35', 'клремлю', NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-15 22:26:16', NULL, 0, 0, 0, '', NULL, NULL, NULL, '', ''),
(20, NULL, 'завтра', 'после ремонта', 'другое', '35', 'йцуецу', NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-16 08:39:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(21, NULL, NULL, 'поддерживающая', 'квартира', '35', 'ыфв', NULL, NULL, 'ыв', NULL, NULL, NULL, '2017-04-16 09:13:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(22, NULL, NULL, 'поддерживающая', 'квартира', '35', 'пы', NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-16 09:16:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(23, NULL, NULL, 'поддерживающая', 'квартира', '35', 'ра', NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-16 09:18:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(24, NULL, NULL, 'поддерживающая', 'квартира', '35', 'фыУАВЫВ', NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-16 09:34:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(25, NULL, NULL, 'поддерживающая', 'квартира', '35', 'фыУАВЫВ', NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-16 09:37:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(26, NULL, NULL, 'поддерживающая', 'квартира', '35', 'фыУАВЫВ', NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-16 09:37:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(27, NULL, '4/12/17 12:00 AM', 'поддерживающая', 'квартира', '35', 'фыва', NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-16 09:40:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(28, NULL, '4/12/17 14:00 AM', 'поддерживающая', 'квартира', '35', 'с фильтром', NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-16 10:56:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(29, NULL, NULL, 'поддерживающая', 'квартира', '35', 'москва', 'вася', '12341234vja', NULL, NULL, NULL, NULL, '2017-04-19 19:35:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(30, NULL, 'вторник 4 апреля 12:00', 'поддерживающая', 'другое', '35', 'москва', 'я', '888', 'дворец', NULL, NULL, NULL, '2017-04-24 17:00:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(31, NULL, 'вторник 4 апреля 12:00', 'поддерживающая', 'другое', '35', 'москва', 'я', '888', 'дворец', NULL, NULL, NULL, '2017-04-24 17:46:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(32, NULL, 'вторник 4 апреля 12:00', 'поддерживающая', 'другое', '35', 'москва', 'я', '888', 'дворец', NULL, NULL, NULL, '2017-04-24 17:51:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(33, NULL, 'вчера', 'поддерживающая', 'квартира', '35', 'питер', 'фывафыв', '22222', NULL, NULL, NULL, NULL, '2017-04-24 18:08:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(34, NULL, 'сегодня', 'поддерживающая', 'квартира', '35', 'иваново', 'дата провайдер', '3333', 'ыва', NULL, NULL, NULL, '2017-04-24 18:39:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(35, NULL, 'сегодня', 'поддерживающая', 'квартира', '35', 'иваново', 'дата провайдер', '3333', 'ыва', NULL, NULL, NULL, '2017-04-24 18:53:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(36, NULL, 'сегодня', 'поддерживающая', 'квартира', '35', 'иваново', 'дата провайдер', '3333', 'ыва', NULL, NULL, NULL, '2017-04-24 18:55:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(37, NULL, 'сегодня', 'поддерживающая', 'квартира', '35', 'иваново', 'дата провайдер', '3333', 'ыва', NULL, NULL, NULL, '2017-04-24 18:58:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(38, NULL, 'вторник 11 апреля 12:00', 'поддерживающая', 'квартира', '35', 'tut', 'ya', '111', NULL, NULL, NULL, NULL, '2017-04-25 15:50:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(39, NULL, 'вторник 11 апреля 12:00', 'поддерживающая', 'квартира', '35', 'tut', 'ya', '111', NULL, NULL, NULL, NULL, '2017-04-25 16:08:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(40, NULL, 'вторник 11 апреля 12:00', 'поддерживающая', 'квартира', '35', 'tut', 'ya', '111', NULL, NULL, NULL, NULL, '2017-04-25 16:10:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(41, NULL, 'вторник 11 апреля 12:00', 'поддерживающая', 'квартира', '35', 'tut', 'ya', '111', NULL, NULL, NULL, NULL, '2017-04-25 16:11:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(42, NULL, 'вторник 11 апреля 12:00', 'поддерживающая', 'квартира', '35', 'tut', 'ya', '111', NULL, NULL, NULL, NULL, '2017-04-25 16:30:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(43, NULL, 'вторник 4 апреля 12:00', 'поддерживающая', 'коттедж', '35', 'москва', 'ya', '2222', NULL, NULL, NULL, NULL, '2017-04-25 16:32:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(44, NULL, 'вторник 4 апреля 12:00', 'поддерживающая', 'коттедж', '35', 'москва', 'ya', '2222', 'туды же', NULL, NULL, NULL, '2017-04-25 16:45:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(45, NULL, 'вторник 4 апреля 12:00', 'поддерживающая', 'квартира', '60', 'москва', 'олег', '(985) 432-34-32', 'туды же', NULL, NULL, NULL, '2017-04-25 16:51:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(46, NULL, 'вторник 4 апреля 12:00', 'поддерживающая', 'квартира', '60', 'москва', 'олег', '(985) 432-34-32', 'туды же', NULL, NULL, NULL, '2017-04-25 17:06:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(47, NULL, 'qwe', 'поддерживающая', 'квартира', '35', 'qwe', 'qwe', 'qwe', NULL, NULL, NULL, NULL, '2017-04-25 19:51:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(48, NULL, 'asdf', 'поддерживающая', 'квартира', '35', 'asdf', 'asdf', 'sadf', NULL, NULL, NULL, NULL, '2017-04-25 19:54:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(49, NULL, 'asdf', 'поддерживающая', 'квартира', '35', 'asdf', 'asdf', 'sadf', NULL, NULL, NULL, NULL, '2017-04-25 19:56:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(50, NULL, 'йцук', 'поддерживающая', 'квартира', '35', 'йцук', 'йцук', '123', 'йцук', NULL, NULL, NULL, '2017-04-25 20:16:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(51, NULL, 'йцук', 'поддерживающая', 'квартира', '35', 'йцук', 'йцук', '123', 'йцук', NULL, NULL, NULL, '2017-04-25 20:37:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(52, NULL, 'вторник 11 апреля 12:00', 'поддерживающая', 'квартира', '35', 'тут недалеко', '123', '123', 'надо очень', NULL, NULL, NULL, '2017-04-26 15:01:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(53, NULL, 'понедельник 10 апреля 12:00', 'поддерживающая', 'квартира', '35', 'qwer', 'qwer', 'wqer', NULL, NULL, NULL, NULL, '2017-04-27 18:36:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(54, NULL, 'понедельник 10 апреля 12:00', 'поддерживающая', 'квартира', '35', 'qwer', 'qwer', 'wqer', NULL, NULL, NULL, NULL, '2017-04-27 18:38:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(55, NULL, 'asd', 'поддерживающая', 'квартира', '35', 'asD', 'ASD', 'aSD', NULL, NULL, NULL, NULL, '2017-04-27 20:03:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(56, NULL, 'asd', 'поддерживающая', 'квартира', '35', 'asD', 'тут', 'aSD', NULL, NULL, NULL, NULL, '2017-04-27 20:07:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(57, NULL, 'понедельник 3 апреля 12:00', 'поддерживающая', 'квартира', '?', 'qwer', 'wer', 'qqwer', NULL, NULL, NULL, NULL, '2017-04-28 17:12:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(58, NULL, 'понедельник 1 мая 12:00', 'поддерживающая', 'квартира', '?', 'rte', 'dj', '36543', NULL, NULL, NULL, NULL, '2017-05-13 13:28:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(59, NULL, 'понедельник 1 мая 12:00', 'поддерживающая', 'квартира', '?', 'rte', 'dj', '36543', NULL, NULL, NULL, NULL, '2017-05-13 13:32:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(60, NULL, 'asdf', 'поддерживающая', 'квартира', '?', 'sadf', 'adsf', '1234', NULL, NULL, NULL, NULL, '2017-05-13 13:33:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(61, NULL, 'asdf', 'поддерживающая', 'квартира', '?', 'sadf', 'adsf', '1234', NULL, NULL, NULL, NULL, '2017-05-13 13:36:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(62, NULL, '2341', 'поддерживающая', 'квартира', '?', '2134', '3241', '1234', NULL, NULL, NULL, NULL, '2017-05-13 13:43:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(63, NULL, 'воскресенье 28 мая', 'поддерживающая', 'квартира', '25', 'фыва', 'тест', 'тест', 'фывафыв', NULL, NULL, NULL, '2017-05-27 21:45:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(64, NULL, 'воскресенье 18 июня', 'поддерживающая', 'квартира', '?', 'qwe', NULL, '123', NULL, NULL, NULL, NULL, '2017-06-17 16:25:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(65, NULL, 'среда  6 сентября', 'поддерживающая', 'квартира', '?', '333', NULL, '333', '333', NULL, NULL, NULL, '2017-09-05 20:40:36', NULL, NULL, NULL, NULL, NULL, 'text', 'google', 'cpc', 'dinacleaning_ga_search', 'uborka_kvartir_v_moskve'),
(66, NULL, 'среда  6 сентября', 'поддерживающая', 'квартира', '?', '4352', NULL, '2345333', '333', NULL, NULL, NULL, '2017-09-05 20:42:04', NULL, NULL, NULL, NULL, NULL, 'text', 'google', 'cpc', 'dinacleaning_ga_search', 'uborka_kvartir_v_moskve'),
(67, NULL, 'воскресенье 10 сентября', 'после ремонта', 'квартира', '?', '12341234', NULL, '234', '123412341234', NULL, NULL, NULL, '2017-09-05 21:09:08', NULL, NULL, NULL, NULL, NULL, 'text', 'google', 'cpc', 'dinacleaning_ga_search', 'uborka_kvartir_v_moskve'),
(68, NULL, 'пятница, 19 августа', NULL, 'квартира', '?', '', '', 'asdfasdfasdfasdfasdf', '', NULL, NULL, NULL, '2021-08-18 21:06:41', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(69, NULL, 'воскресенье, 21 августа', NULL, 'коттедж', '?', '', '', 'aSDasdaSDasdaSD', '', NULL, NULL, NULL, '2021-08-21 18:45:17', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(70, NULL, 'воскресенье, 21 августа', NULL, 'квартира', '?', '', '', '§134212341234', '', NULL, NULL, NULL, '2021-08-21 18:51:48', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(71, NULL, 'воскресенье, 21 августа', 'Повседневная уборка', 'квартира', '?', '', '', 'dstgsdfgsfgdg3423452345', '', NULL, NULL, NULL, '2021-08-21 18:57:16', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(72, NULL, 'воскресенье, 21 августа', 'Повседневная уборка', 'квартира', '?', '', '', '12542345234523452345', '', NULL, NULL, NULL, '2021-08-21 19:13:48', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(73, NULL, 'воскресенье, 21 августа', 'Повседневная уборка', 'квартира', '?', '', '', 'adsfasdfasdfasdfasdf', '', NULL, NULL, NULL, '2021-08-21 19:18:06', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(74, NULL, 'воскресенье, 21 августа', 'Повседневная уборка', 'квартира', '?', '', '', 'asdfasdfasdfasdfasdfasdf', '', NULL, NULL, NULL, '2021-08-21 19:34:15', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(75, NULL, 'воскресенье, 21 августа', 'Повседневная уборка', 'квартира', '?', '', '', 'afdsasdfasdfasdfasdf', '', NULL, NULL, NULL, '2021-08-21 19:40:20', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(76, NULL, 'воскресенье, 21 августа', 'Повседневная уборка', 'квартира', '?', '', '', 'asdfasdfasdfasdfasdfasdf', '', NULL, NULL, NULL, '2021-08-21 19:42:05', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(77, NULL, 'воскресенье, 21 августа', 'Повседневная уборка', 'квартира', '?', '', '', '12341234123412341234', '', NULL, NULL, NULL, '2021-08-21 19:46:40', '', NULL, NULL, NULL, NULL, 'content_test', 'google', 'cpc', 'test', 'termtest'),
(78, NULL, 'воскресенье, 21 августа', 'Повседневная уборка', 'квартира', '?', '', '', 'asdfasdfasdfasdf', '', NULL, NULL, NULL, '2021-08-21 19:47:58', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(79, NULL, 'понедельник, 22 августа', 'Повседневная уборка', 'квартира', '30', 'asdfasdfasdf', '', 'asdfasdfasdfasdfasdf', 'asdfasdfasdf', NULL, NULL, NULL, '2021-08-22 20:54:15', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(80, NULL, 'вторник, 23 августа', 'Повседневная уборка', 'квартира', '30', 'лубянка 23', '', '1234123412342134', 'побыстрей', NULL, NULL, NULL, '2021-08-22 21:00:42', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(81, NULL, 'вторник, 23 августа', 'Повседневная уборка', 'коттедж', '35', 'фыуавыва', '', '123412341234', 'фыавфыва', NULL, NULL, NULL, '2021-08-22 21:04:13', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(82, NULL, 'вторник, 23 августа', 'Повседневная уборка', 'квартира', '?', '', '', 'йцвйццкйцку', '', NULL, NULL, NULL, '2021-08-22 21:05:12', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(83, NULL, '', '', '', '', '', '', '1', '', NULL, NULL, NULL, '2021-08-23 19:11:47', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(84, NULL, '', '', '', '', '', '', '1', '', NULL, NULL, NULL, '2021-08-23 19:15:07', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(85, NULL, '', '', '', '', '', '', '1', '', NULL, NULL, NULL, '2021-08-23 19:16:38', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(86, NULL, '', '', '', '', '', '', '1', '', NULL, NULL, NULL, '2021-08-23 19:17:21', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(87, NULL, '', '', '', '', '', '', '1', '', NULL, NULL, NULL, '2021-08-23 19:17:29', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(88, NULL, '', '', '', '', '', '', '31241234', '', NULL, NULL, NULL, '2021-08-23 19:26:03', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(89, NULL, '', '', '', '', '', '', '31241234', '', NULL, NULL, NULL, '2021-08-23 19:26:07', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(90, NULL, '', '', '', '', '', '', '3333333333333', '', NULL, NULL, NULL, '2021-08-23 19:28:27', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(91, NULL, '', '', '', '', '', '', '5555555555-55', '', NULL, NULL, NULL, '2021-08-23 19:31:17', '', NULL, NULL, NULL, NULL, 'content_test', 'google', 'cpc', 'test', 'termtest'),
(92, NULL, '', '', '', '', '', '', '6666666', '', NULL, NULL, NULL, '2021-08-23 19:33:51', '', NULL, NULL, NULL, NULL, 'content_test', 'google', 'cpc', 'test', 'termtest'),
(93, NULL, '', '', '', '', '', '', '6666666', '', NULL, NULL, NULL, '2021-08-23 19:39:09', '', NULL, NULL, NULL, NULL, 'content_test', 'google', 'cpc', 'test', 'termtest'),
(94, NULL, '', '', '', '', '', '', '6666666', '', NULL, NULL, NULL, '2021-08-23 19:41:22', '', NULL, NULL, NULL, NULL, 'content_test', 'google', 'cpc', 'test', 'termtest'),
(95, NULL, '', '', '', '', '', '', '6666666', '', NULL, NULL, NULL, '2021-08-23 19:41:24', '', NULL, NULL, NULL, NULL, 'content_test', 'google', 'cpc', 'test', 'termtest'),
(96, NULL, '', '', '', '', '', '', '6666666', '', NULL, NULL, NULL, '2021-08-23 19:42:33', '', NULL, NULL, NULL, NULL, 'content_test', 'google', 'cpc', 'test', 'termtest'),
(97, NULL, '', '', '', '', '', '', '6666666', '', NULL, NULL, NULL, '2021-08-23 19:47:38', '', NULL, NULL, NULL, NULL, 'content_test', 'google', 'cpc', 'test', 'termtest'),
(98, NULL, '', '', '', '', '', '', '6666666', '', NULL, NULL, NULL, '2021-08-23 19:48:18', '', NULL, NULL, NULL, NULL, 'content_test', 'google', 'cpc', 'test', 'termtest'),
(99, NULL, '', '', '', '', '', '', '6666666', '', NULL, NULL, NULL, '2021-08-23 19:49:34', '', NULL, NULL, NULL, NULL, 'content_test', 'google', 'cpc', 'test', 'termtest'),
(100, NULL, '', '', '', '', '', '', '444444444', '', NULL, NULL, NULL, '2021-08-23 19:49:43', '', NULL, NULL, NULL, NULL, 'content_test', 'google', 'cpc', 'test', 'termtest'),
(101, NULL, '', '', '', '', '', '', '444444444', '', NULL, NULL, NULL, '2021-08-23 19:52:42', '', NULL, NULL, NULL, NULL, 'content_test', 'google', 'cpc', 'test', 'termtest'),
(102, NULL, 'среда, 24 августа', 'Повседневная уборка', 'квартира', '?', '', '', 'sdfsdfsdfsdfsdf', '', NULL, NULL, NULL, '2021-08-24 19:24:32', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(103, NULL, '', '', '', '', '', '', 'sdfsdfsdfsdf', '', NULL, NULL, NULL, '2021-08-24 19:24:55', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(104, NULL, '', '', '', '', '', '', 'фыва', '', NULL, NULL, NULL, '2021-11-25 15:41:46', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(105, NULL, '', '', '', '', '', '', '13412341234', '', NULL, NULL, NULL, '2021-11-25 16:21:52', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(106, NULL, '', '', '', '', '', '', '13412341234', '', NULL, NULL, NULL, '2021-11-27 19:32:29', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(107, NULL, '', '', '', '', '', '', '13412341234', '', NULL, NULL, NULL, '2021-11-27 19:52:27', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(108, NULL, '', '', '', '', '', '', '13412341234', '', NULL, NULL, NULL, '2021-11-27 19:53:09', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(109, NULL, '', '', '', '', '', '', '13412341234', '', NULL, NULL, NULL, '2021-11-27 19:55:30', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(110, NULL, '', '', '', '', '', '', '123', '', NULL, NULL, NULL, '2021-11-27 19:59:19', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(111, NULL, '', '', '', '', '', '', '13412341234', '', NULL, NULL, NULL, '2021-11-27 20:06:51', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(112, NULL, '', '', '', '', '', '', '13412341234', '', NULL, NULL, NULL, '2021-11-27 20:12:00', '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(113, NULL, '', '', '', '', '', '', '13412341234', '', NULL, NULL, NULL, '2021-11-28 09:11:41', '', NULL, NULL, NULL, NULL, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(3) NOT NULL,
  `hrurl` varchar(255) DEFAULT NULL,
  `seo_insert` text,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `keywords` text,
  `pagehead` varchar(255) DEFAULT NULL,
  `pagedescription` text,
  `text` text,
  `imagelink` varchar(255) DEFAULT NULL,
  `imagelink_alt` varchar(255) DEFAULT NULL,
  `sendtopage` varchar(255) DEFAULT NULL,
  `promolink` varchar(255) DEFAULT NULL,
  `promoname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `hrurl`, `seo_insert`, `title`, `description`, `keywords`, `pagehead`, `pagedescription`, `text`, `imagelink`, `imagelink_alt`, `sendtopage`, `promolink`, `promoname`) VALUES
(1, 'home', 'title', 'Динаклининг | Уборка дома и мойка окон в Москве. ', 'Клининговая компания Динаклининг. Уборка после ремонта, генеральная и поддерживающая уборка.', 'уборка, клининг, уборка дома', 'Уборка с заботой', 'Люблю чистоту и работаю с удовольствием!', '', '', '', '', '', ''),
(2, 'uslugi-uborki-v-moskve', 'title', 'Динаклининг - услуги уборки помещений в Москве. Поддерживающая уборка, генеральная уборка, уборка после ремонта', 'Услуги уборки помещений в Москве. Что входит в уборку, цены', ' уборка', 'Виды работ', 'Услуги уборки', 'страницы текст страницы текст страницы текст страницы текст страницы текст страницы ', '', '', '', '', ''),
(3, 'clean', 'title', 'Диниаклининг - чистота, это наше призвание', 'Я люблю чистоту и работать мне легко. Порядок дома это правильно, по этому я с удовольствием делаю свое дело. Мое глубокое убеждение, что порядка заслуживает каждый дом - вне зависимости от размера и стоимости.', 'чистота, уборка, уборка в Москве, уборка после ремонта', 'Чистота - мое призвание', 'Я люблю чистоту и работать мне легко. Порядок дома это правильно, по этому я с удовольствием делаю свое дело. Мое глубокое убеждение, что порядка заслуживает каждый дом - вне зависимости от размера и стоимости.', 'текст страницы', '', '', '', '', ''),
(4, 'povsednevnaya-uborka-v-moskve', 'title', 'Повседневная уборка', 'Качественная повседневная уборка дома в Москве и Московской области.', '', 'Повседневная уборка', 'Повседневная уборка - поддерживающий вид уборки, включающий в себя уборку пола и пыли на горизонтальных поверхностях для поддержания чистоты и порядка в Вашем доме. При проведении поддерживающей уборки устраняются пыль и лёгкие загрязнения во всех помещениях. ', 'текст ', '', '', '', '', ''),
(5, 'uborka-posle-remonta-v-moskve', 'title', 'Уборка после ремонта квартиры, дома, офиса, коттеджа в Москве, цены на послестроительную уборку', 'Мы специализируемся на уборке квартир, домов и коттеджей после ремонта и строительства в Москве и Московской области. На сайте Вы найдете цены на услуги послестроительной уборки.', 'уборка, помещение, ремонт, квартира, цена, коттедж, строительство, дом, служба, послестроительный, профессиональный, москва', 'Уборка после ремонта и строительства', 'Я осуществляю услуги по качественной и бережной послестроительной уборке помещений в Москве! Мы с моей командой производим уборку после ремонта и строительства в необходимые для клиента сроки. Уборка помещений после ремонта включает различные виды работ – от простого удаления мелкой строительной пыли, удаления следов краски скотча и цемента до натирания паркета, полировки и защиты поверхностей в квартире, коттедже или офисе.', '', '', '', '', '', ''),
(6, 'generalnaya-uborka-v-moskve', 'title', 'Генеральная уборка квартиры и помещений в Москве. Цены на генеральную уборку', 'Работники нашей компании возьмут на  себя проведение генеральной уборки квартиры, дома, помещения в Москве.  Цены на услуги Вы можете найти на сайте.', 'генеральный, уборка, квартира, москва, проведение, дом, помещение, цена, клининговый, компания,', 'Генеральная уборка', 'Генеральная уборка проводится, когда Вам необходимо навести порядок в помещении, в котором не убирались и не поддерживали чистоту или никто не жил длительное время. Генеральная уборка квартиры - процесс долгий и трудоёмкий. Но будьте уверены, я позабочусь о том, чтобы Вы были довольны результатом! Наши цены на генеральную уборку квартир в Москве доступны. Мы привозим всё необходимое и Вам не нужно беспокоиться ни о чём.', 'текст страницы', '', '', '', '', ''),
(7, 'preimushestva', 'Уборка квартиры в Москве - как не попасть в просак.', 'Динаклининг, уборка квартиры - почему мы лучше.', 'Преимущества заказа уборки в нашей компании.', 'Уборка, надежность', 'Почему мы', 'наши преимущества', '', '', '', '', '', ''),
(8, 'partners', 'title', 'Динаклининг - наши партнеры', 'Мои заказчики', 'заказчики', 'Заказчики', 'Мои заказчики живут в самых разных уголках Москвы:', '', '', '', '', '', ''),
(9, 'review', 'title', 'Динаклининг - отзывы о работе компании', 'Уборка в Москве - отзывы', 'отзыв', 'Отзывы', 'что говорят люди о моей работе', '', '', '', '', '', ''),
(10, 'order', 'title', 'заказать уборку в Москве', 'Уборка в Москве - заказать, рассчитать, узнать цену', 'заказать уборку,', 'Заказать', 'Для заказа или расчета стоимости уборки, заполните пожалуйста форму', '', '', '', '', '', ''),
(11, 'moyka-okon-v-moskve', 'title', 'Мойка окон в Москве - Что входит в услугу - Цены и расчет стоимости - Заказать', 'Мы специализируемся на мойке окон в квартире, доме и коттедже в Москве и области. На сайте Вы найдете цены на услуги мытья окон и информацию о том, что входит процесс.', 'мойка окон, мытье окон, помывка окон, вымыть окна', 'Мойка окон', 'Окна - не только основа освещения, это еще источник радости и хорошего настроения. \r\n\r\nДействительно чисто вымыть окно и впустить солнце в квартиру - задача непростая. Но правильный инструмент с моющим средством и грамотный специалист по мытью окон может удивить и Вас и окно и даже само солнце, которое по-новому заиграет на предметах интерьера и раскрасит вид из окна в новые краски. С качественно вымытым окном, комната становится более светлой и уютной, жить в ней становится легче и радостней. \r\n\r\nЗакажите услугу мойки окон и я с удовольствием принесу чистоту и свет в Ваш дом.', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `long_text` text,
  `image` text,
  `logo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `name`, `description`, `long_text`, `image`, `logo`) VALUES
(1, 'Коттеджный поселок премиум класса \"Гринфилд\"', '', '', 'partners_greenfield.jpg', ''),
(2, 'Элитный поселок Миллениум парк', '', '', 'partners_milleniumpark.jpg', ''),
(3, 'Рублевское шоссе', '', '', 'partners_rublevka.jpg', ''),
(4, 'а так же в других районах Москвы ', '(информация конфиденциальна)', '', 'partners_moscow.jpg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `list_order` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_descr` text,
  `price` int(11) DEFAULT NULL,
  `price_descr` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `list_order`, `type_id`, `name`, `name_descr`, `price`, `price_descr`) VALUES
(1, 1, 1, 'менее 40 м<sup>2</sup>', '', 1600, 'р'),
(2, 2, 1, '40 - 60 м<sup>2</sup>', '', 2000, 'р'),
(3, 3, 1, '60 - 80 м<sup>2</sup>', '', 2400, 'р'),
(4, 4, 1, '80 - 100 м<sup>2</sup>', '', 2900, 'р'),
(5, 5, 1, '100 - 130 м<sup>2</sup>', '', 3300, 'р'),
(6, 6, 1, '130 - 160 м<sup>2</sup>', '', 3800, 'р'),
(7, 7, 1, 'более 160 м<sup>2</sup>', '', NULL, 'договоримся ;-)'),
(8, 1, 2, 'менее 40 м<sup>2</sup>', '', 3600, 'р'),
(9, 2, 2, '40 - 60 м<sup>2</sup>', '', 4000, 'р'),
(10, 3, 2, '60 - 80 м<sup>2</sup>', '', 4500, 'р'),
(11, 4, 2, '80 - 100 м<sup>2</sup>', '', 5000, 'р'),
(12, 5, 2, '100 - 130 м<sup>2</sup>', '', 5500, 'р'),
(13, 6, 2, '130 - 160 м<sup>2</sup>', '', 6000, 'р'),
(14, 7, 2, 'более 160 м<sup>2</sup>', '', NULL, 'договоримся ;-)'),
(15, 1, 3, 'менее 40 м<sup>2</sup>', '', 4000, 'р'),
(16, 2, 3, '40 - 60 м<sup>2</sup>', '', 4500, 'р'),
(17, 3, 3, '60 - 80 м<sup>2</sup>', '', 5000, 'р'),
(18, 4, 3, '80 - 100 м<sup>2</sup>', '', 5500, 'р'),
(19, 5, 3, '100 - 130 м<sup>2</sup>', '', 6200, 'р'),
(20, 6, 3, '130 - 160 м<sup>2</sup>', '', 6800, 'р'),
(21, 7, 3, 'более 160 м<sup>2</sup>', '', NULL, 'договоримся ;-)'),
(22, 1, 4, 'окно с одной створкой', '', 200, 'р'),
(23, 2, 4, 'окно 2 створки', '', 300, 'р'),
(24, 3, 4, 'окно 3 створки', '', 400, 'р'),
(25, 4, 4, 'балкон', '', 1000, 'р'),
(26, 5, 4, 'нестандартное остекление', '', 150, 'р/м<sup>2</sup>');

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `text` text,
  `image` text,
  `icon` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id`, `name`, `type`, `text`, `image`, `icon`) VALUES
(1, 'Владимир', '1', 'Дина молодец, \r\nвсегда чисто, без косяков - уважаю.', '', 'Бизнесмен'),
(2, 'Галина', '1', 'Замечательный работник - всегда вовремя.', '', 'учитель'),
(3, 'Константин', '1', 'Отлично сработали, так держать. Очень понравился подход к очистке кухни - отчистили жир, который был не по плечу остальным.', '', 'Депутат'),
(4, 'Роман', '2', 'Замечательный работник - совсем всегда вовремя.', '', 'предприниматель'),
(5, 'Константина', '3', 'Зачипато сработали, так держать. Очень понравился подход к очистке кухни - отчистили жир, который был не по плечу остальным.', '', 'депутита'),
(6, 'Маргарита', '1', 'Просто супер. Я такого в своей жизни не видела. Если честно я такого не ожидала, что человек придет и за один день сделает все то, что меня беспокоило. При том ,что в квартире живет пожилой отец и кухня была в таком неком запущенном состоянии. Она вымыла даже розетки внутри, вымыла штепселя около плиты куда жир попадает. Она вымыла плиту, и что немало важно у нее были свои средства с собой, сделанные ей самой, экологичные, из соды, лимонной кислоты, а не химия, купленная в магазине. Даже швабра была своя, из моих средств ничего не взяла. Я просто в потрясении от этой женщины. Маленькая шустрая. Пришла в 11 и ушла в 19:30, работала без остановки, квартира стала как пасхальное яичко. Реально классная.', '', 'Ита');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` int(11) DEFAULT NULL,
  `price_description` text,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `parent_id`, `name`, `description`, `price`, `price_description`, `image`) VALUES
(0, NULL, 'root', NULL, NULL, NULL, NULL),
(1, NULL, 'Повседневная уборка', '', NULL, '', ''),
(2, NULL, 'Генеральная уборка', '', NULL, '', ''),
(3, NULL, 'Уборка после ремонта', '', NULL, '', ''),
(4, NULL, 'Мойка окон', NULL, NULL, NULL, NULL),
(5, 1, 'мойка грязной посуды', '', NULL, '', ''),
(6, 1, 'удаление пыли с поверхностей кухонных шкафчиков и бытовой техники снаружи', '', NULL, '', ''),
(7, 1, 'удаление пыли со столов и подоконников', '', NULL, '', ''),
(8, 1, 'удаление пыли со  шкафов, зеркал, картин, напольных и настенных светильников', '', NULL, '', ''),
(9, 1, 'влажная уборка пола', '', NULL, '', ''),
(10, 1, 'очистка  раковины и ванной, обеззараживание и очистка унитаза', '', NULL, '', ''),
(11, 1, 'вынос мусора', '', NULL, '', ''),
(12, 2, 'мойка грязной посуды', '', NULL, '', ''),
(13, 2, 'мойка бытовой техники внутри и снаружи', '', NULL, '', ''),
(14, 2, 'мойка поверхностей кухонных шкафчиков внутри и снаружи', '', NULL, '', ''),
(15, 2, 'мойка столов и подоконников', '', NULL, '', ''),
(16, 2, 'влажная уборка пола с дополнительной очисткой', '', NULL, '', ''),
(17, 2, 'мойка раковины и ванной, обеззараживание и тщательная очистка унитаза', '', NULL, '', ''),
(18, 2, 'мойка стен в ванной', '', NULL, '', ''),
(19, 2, 'вынос мусора', '', NULL, '', ''),
(20, 3, 'очистка помещения от строительной пыли и следов цемента', '', NULL, '', ''),
(21, 3, 'удаление пыли со стен и потолков, удаление локальных загрязнений, (если позволяют отделочные материалы)', '', NULL, '', ''),
(22, 3, 'обеспыливание всех поверхностей в доме (влажная чистка)', '', NULL, '', ''),
(23, 3, 'очистка предметов интерьера и аксессуаров от пыли и других загрязнений', '', NULL, '', ''),
(24, 3, 'мытьё всех светильников, (кроме хрусталя)', '', NULL, '', ''),
(25, 3, 'уборка мягкой мебели пылесосом, по договоренности уделяется отдельное внимание определенным элементам', '', NULL, '', ''),
(26, 3, 'обработка кожаной мебели профессиональными чистящими средствами', '', NULL, '', ''),
(27, 3, 'влажное обеспыливание корпусной мебели снаружи и внутри (при отсутствии внутри вещей)', '', NULL, '', ''),
(28, 3, 'удаление остатков клея и строительного скотча со стекол, зеркал и мебели', '', NULL, '', ''),
(29, 3, 'обработка зеркал, стеклянных покрытий и элементов декора с помощью специализированных средств', '', NULL, '', ''),
(30, 3, 'удаление пятен краски, уборка после ремонта напольных покрытий, паркета, подоконников', '', NULL, '', ''),
(31, 3, 'очистка от строительной пыли бытовой техники ', '', NULL, '', ''),
(32, 3, 'очистка кухонной плиты внутри и снаружи', '', NULL, '', ''),
(33, 3, 'комплексная чистка холодильника', '', NULL, '', ''),
(34, 3, 'удаление загрязнений микроволновой печи внутри и снаружи', '', NULL, '', ''),
(35, 3, 'влажная уборка фасадов кухонной мебели с удалением следов жира', '', NULL, '', ''),
(36, 3, 'мытьё внутренней части кухонных шкафов и ящиков (при условии отсутствия внутри вещей)', '', NULL, '', ''),
(37, 3, 'удаление загрязнений «фартука» кухни', '', NULL, '', ''),
(38, 3, 'влажная уборка вытяжки (внутренней и внешней поверхности) ', '', NULL, '', ''),
(39, 3, 'чистка и дезинфекция сантехники', '', NULL, '', ''),
(40, 3, 'устранение загрязнений стен и пола санузла, включая известковый налет и ржавчину', '', NULL, '', ''),
(41, 3, 'чистка ванны, джакузи и душевой кабины внутри и снаружи, очистка от ржавчины, извести и водного камня', '', NULL, '', ''),
(42, 3, 'очистка раковин, унитазов, биде и смесителей с дезинфекцией', '', NULL, '', ''),
(43, 3, 'очистка межплиточных швов от затирки (кроме двух-компонентной затирки)', '', NULL, '', ''),
(44, 3, 'сухая и влажна уборка дверных блоков, дверей и фурнитуры', '', NULL, '', ''),
(45, 3, 'очистка подоконников от строительной пыли, остатков клея и строительных смесей', '', NULL, '', ''),
(46, 3, 'мойка плинтусов и коммуникаций', '', NULL, '', ''),
(47, 3, 'сухая и влажная напольных покрытий, очистка пола от всех загрязнений', '', NULL, '', ''),
(48, 3, 'дезинфекция места хранения отходов', '', NULL, '', ''),
(49, 3, 'сбор и вынос мелкого строительного мусора', '', NULL, '', ''),
(50, 3, 'уборка мусора, замена мусорных пакетов, мытье корзины изнутри и снаружи', '', NULL, '', ''),
(52, 4, 'мойка окна с 2-х сторон', '', NULL, '', ''),
(53, 4, 'очистка рамы внутри и снаружи', '', NULL, '', ''),
(54, 4, 'очистка отлива', '', NULL, '', ''),
(55, 4, 'очистка подоконника', '', NULL, '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Индексы таблицы `advantages`
--
ALTER TABLE `advantages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `callme`
--
ALTER TABLE `callme`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clean_type`
--
ALTER TABLE `clean_type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `home_slides`
--
ALTER TABLE `home_slides`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `advantages`
--
ALTER TABLE `advantages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `callme`
--
ALTER TABLE `callme`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `clean_type`
--
ALTER TABLE `clean_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `home_slides`
--
ALTER TABLE `home_slides`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
