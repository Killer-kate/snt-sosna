-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 29 2024 г., 17:41
-- Версия сервера: 10.4.30-MariaDB-cll-lve-log
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u158965_data`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ad`
--

CREATE TABLE IF NOT EXISTS `ad` (
  `number` int(11) NOT NULL,
  `headind` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `ad`
--

INSERT INTO `ad` (`number`, `headind`, `description`, `image`, `date`) VALUES
(1, 'Мастер на все руки', '&nbsp&nbsp&nbsp&nbsp&nbspДёмин Игорь Алексеевич.<br>\r\n- Профессиональный электрик (допуск до 1000 вольт).<br>\r\n- Ремонт бытовой и садовой техники.<br>\r\n- Подключение/отключение газового оборудования.<br>\r\n- Установка и проведение водопровода на участке "под ключ" от колодца или скважины.<br>\r\n- Ремонтные и строительные работы.<br>\r\n&nbsp&nbsp&nbsp<a href="tel:+79175090970">тел.: +7 (917) 509-09-70</a>', 'image/ad/demin.avif', '2024-02-29'),
(2, 'Отдам котёнка в добрые руки', '&nbsp&nbsp&nbspКотёнок приучен к лотку.\r\n&nbsp&nbsp&nbspОчень любит играть и строить "рожицы" во время фотосессии))))<br>\r\n&nbsp&nbsp&nbsp<a href="tel:+799999999">тел.: +7 (999) 999-99-99</a>', 'image/ad/cat.avif', '2024-02-29'),
(3, '"Крафтовые" куриные яйца', '&nbsp&nbsp&nbspКуры питаются исключительно зерном и молодой зеленой травкой, богатой большим количеством витаминов. <br>\r\n&nbsp&nbsp&nbspСкорлупа у наших фермерских яиц не такая прочная, как у магазинных, а желток в основном оранжевого цвета. <br>\r\n&nbsp&nbsp&nbspВкусовые качества на превосходном уровне, а о пользе детями даже и не проходится говорить.<br>\r\n<a href="tel:+79167174905">тел.: +7 (916) 717-49-05</a>', 'image/ad/eggs.avif', '2024-02-29');

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `number` int(11) NOT NULL,
  `heading` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL,
  `filter` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`number`, `heading`, `description`, `image`, `date`, `filter`) VALUES
(1, 'Спортивная площадка', '&nbsp&nbsp&nbspНа территории нашего садоводческого товарищества появилось место для занятия спортом. Пока на нём организована площадка с натянутой сеткой для игры в волейбол. \r\n&nbsp&nbsp&nbspВсе желающие, в свободное от "огородных дел", могу прийти и свободно поиграть в волейбол. \r\n<br>\r\n<img style="width:100%;height:99%;border-radius:20px;" src="../image/vb_1.avif">\r\n<br>\r\n&nbsp&nbsp&nbspОгромная благодарность Ревуцкому А.В. за достойный подарок нашему товариществу!\r\n', 'image/vb.avif', '2022-06-23', 'events'),
(2, 'Мастер класс по управлению каяком', '&nbsp&nbsp&nbsp20 августа на пожарном водоёме прошёл мастер класс по обучению правилам управления каяком. Своими знаниями и навыками поделился Ревуцкий Андрей Владимирович. <br>\r\n&nbsp&nbsp&nbspПогода выдалась прекрасной. Многие садоводы осмелились попробовать свои силы в пробном заезде на байдарке по стоячей воде под чутким руководством тренера.<br>\r\n<video controls class="video" style="width:95%; height:95%; border-radius:20px;">\r\n  <source src="../image/gallery/video/boydarka.mp4" type="video/mp4">\r\n Извините, Ваш браузер не поддерживает воспроизведение видео\r\n</video>', 'image/boydarka.avif', '2022-08-20', 'events'),
(3, 'Ремонт дороги', '&nbsp&nbsp&nbsp23 августа на участке дороги от центральных ворот проводились дорожные работы по укладке асфальтной крошки.<br><br>\r\n<img style="width:100%;height:99%;border-radius:20px;" src="../image/road_1.avif">\r\n<br>\r\n&nbsp&nbsp&nbspПосле разравнивания дорога преобразилась.\r\n<img style="width:100%;height:99%;border-radius:20px;" src="../image/road_2.avif">', 'image/road.avif', '2022-08-23', 'events'),
(4, 'Вывоз веток', '&nbsp&nbsp&nbsp3 ноября вывезли из товарищества большое количество сухих веток. <br><br><br><br>\r\n<video controls class="video" style="width:95%; height:95%; border-radius:20px;">\r\n  <source src="../image/gallery/video/tree.mp4" type="video/mp4">\r\n Извините, Ваш браузер не поддерживает воспроизведение видео\r\n</video>', 'image/tree.avif', '2022-11-03', 'events'),
(5, 'День Победы', '&nbsp&nbsp&nbspВ мае мы отметили "День Победы", где дети рассказывали стихи, желающие исполнили песни военных лет под аккомпанемент баяниста и "минусовок", а в окончании праздника, все гости отведали гречневой каши с тушенкой.<br><video controls style="width:100%;height:99%;border-radius:20px;">\r\n  <source src="../image/gallery/video/003_min.mp4" type="video/mp4">\r\n  Извините, Ваш браузер не поддерживает воспроизведение видео\r\n</video>', 'image/foto1.avif', '2023-05-09', 'events'),
(6, 'Субботний уборочный день', '&nbsp&nbsp&nbspВолонтеры собрались вместе, чтобы убрать территорию от мусора и сделать ее более чистой и аккуратной. Многие жители присоединились и стали активными участниками в уборке:<br>\r\n\r\n&nbsp&nbsp&nbsp&#128293;	собирали мусор <br>\r\n&nbsp&nbsp&nbsp&#128293;	подметали дорожки <br>\r\n&nbsp&nbsp&nbsp&#128293;	ухаживали за зелеными насаждениями <br>\r\n\r\n&nbsp&nbsp&nbspБлагодаря совместным усилиям, территория СНТ стала еще более привлекательной и ухоженной.', 'image/gallery/gal6.avif', '2023-05-20', 'events'),
(7, 'Безоплатный интернет', '&nbsp&nbsp&nbsp&nbsp&nbsp&nbspУважаемые Садоводы!!!<br>\r\n&nbsp&nbspВ зоне дома правления открыта точка доступа к WiFi (WiFi_Free).\r\n<br>\r\n&nbsp&nbsp&nbspПодключиться к безоплатному интернету можно с телефона, планшета, ноутбука и других устройств.\r\n<br>\r\n&nbsp&nbsp&nbspВ настройках подключения необходимо выбрать беспроводную сеть с именем:\r\n<br>\r\n&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"SNT-Guest"\r\n<br>\r\n&nbsp&nbsp&nbspЗона действия сети 15-20 метров от дома правления.', 'image/wifi.avif', '2023-05-31', 'news'),
(8, 'Новая лестница', '&nbsp&nbsp&nbspОт наших мастеров (С.Панкин и И.Дёмин) наш пруд получил очень удобную и безопасную новую лесенку.', 'image/events1.avif', '2023-07-20', 'news'),
(9, 'Нашему СНТ 35 лет!', '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspУважаемые садоводы!\r\n<br><br>\r\n&nbsp&nbsp&nbspВ теплой и дружественной обстановке мы отпраздновали 35-летие нашего товарищества.\r\n<br><br>\r\n&nbsp&nbsp&nbspСпасибо всем за помощь в подготовке и проведении праздника, и за хорошее настроение! <br>\r\n<video controls class="video"style="width:95%;height:99%;border-radius:20px;">\r\n  <source src="../image/gallery/video/hb_snt.mp4" type="video/mp4">\r\n  Извините, Ваш браузер не поддерживает воспроизведение видео\r\n</video>\r\n', 'image/35y.avif', '2023-08-19', 'events'),
(10, 'Новая песочница', '&nbsp&nbsp&nbspДополнительный песок был завезен для детей, теперь каждый желающий может прийти на пруд и поиграть в песочнице.', 'image/foto6.avif', '2023-07-23', 'news'),
(11, 'С НОВЫМ 2024 ГОДОМ!!!', '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspДорогие садоводы!\r\n<br>\r\n&nbsp&nbsp&nbspОт лица Правления хочу поздравить вас с наступающим Новым Годом и Рождеством!\r\n<br>\r\n&nbsp&nbsp&nbspГод был не простым для всех, были успехи, но были и потери, и мы пережили этот год с достоинством и своими достижениями. \r\n<br>\r\n&nbsp&nbsp&nbspПусть мы в своем маленьком государстве реализовали еще не всё задуманное, но это дает повод с энтузиазмом шагать нам в будущее и продолжать начатое, исполнять наши с вами планы и достигать желаемое. А планов у нас много!\r\n<br>\r\n&nbsp&nbsp&nbspИ я уверен, что вместе с вами, нашим дружным, неравнодушным коллективом мы сделаем наше товарищество еще лучше. <br>\r\n&nbsp&nbsp&nbspОт себя хочу пожелать всем и каждому, прежде всего здоровья, семейного благополучия, домашнего уюта и мира в каждом  доме. Пусть год грядущий обойдется без потерь и подарит Вам больше позитивных эмоций. <br>\r\n&nbsp&nbsp&nbspВсего самого хорошего!\r\n<br><br>\r\n<video controls class="video" style="width:95%; height:95%; border-radius:20px;">\r\n  <source src="../image/gallery/video/ny_2024.mp4" type="video/mp4">\r\n Извините, Ваш браузер не поддерживает воспроизведение видео\r\n</video><br>\r\n&nbsp&nbsp&nbspС уважением, \r\nА.В.Ревуцкий', 'image/drakon.avif', '2023-12-30', 'news'),
(12, 'ОСТОРОЖНО!!! МОШЕННИКИ!!!', '&nbsp&nbsp&nbspМошенники под видом сотрудников Федеральной налоговой службы (ФНС) рассылают электронные письма о выявлении подозрительных транзакций и активности налогоплательщика, предупредили в пресс-службе ведомства.\r\n<br>\r\n&nbsp&nbsp&nbspНеизвестные от имени налоговиков предлагают налогоплательщикам пройти дополнительную проверку и предоставить кассовые документы, счета-фактуры, накладные, акты приема-передачи, авансовые отчеты или товаросопроводительные документы.<br>\r\n\r\n&nbsp&nbsp&nbspМошенники для прохождения данной процедуры предлагают обратиться к назначенному инспектору, в противном случае угрожают заморозкой счетов налогоплательщика "до выяснения обстоятельств". Сообщается, что pdf-скан указанного письма содержит печати и реквизиты, а контакты инспектора прикрепляются в теле электронной рассылки.<br>\r\n\r\n&nbsp&nbsp&nbsp@rgrunews', 'image/moshenniki.avif', '2024-02-08', 'news'),
(13, 'ВНИМАНИЕ!!! ФЭЙК!!!', '&nbsp&nbsp&nbsp«Друзья, мы внимательно следим за новостями и считаем, что информация, опубликованная в СМИ и социальных сетях, должна быть правдивой и достоверной. <br>\r\n\r\n&nbsp&nbsp&nbspК сожалению, так думают не все... Некоторое время назад в «Дзен» появился материал, рассказывающий о последних изменениях законодательства, касающихся жизни российских дачников. В нём написано, что новыми правилами будет регламентировано время пребывания на дачных участках, разделяя дачный период на два отдельных сезона. Источник предупреждает, что после наступления холодов – 1 ноября, использование таких участков на постоянной основе будет запрещено.<br>\r\n\r\n&nbsp&nbsp&nbspЭто фейк! Деятельность СНТ с 1 января 2019 года регулируется Федеральным законом № 217-ФЗ. Именно в нём прописаны правила использования садовых участков. Так, в законе указано, что садовый участок можно использовать для отдыха, на нём можно выращивать для собственных нужд сельскохозяйственные культуры, строить садовый или жилой дом, возводить постройки для бытовых нужд. При этом законом никогда не ограничивалось право граждан использовать такой участок в зависимости от времени года, изменения в закон, регламентирующие такие ограничения, не принимались и не планируются к принятию.»<br>\r\n\r\n&nbsp&nbsp&nbsp@rosreestr_news', 'image/fake.avif', '2024-02-09', 'news'),
(14, 'В России запретили выращивать Ипомею.', '&nbsp&nbsp&nbspКрасивое растение признали наркотикосодержащим и приравняли к опиумному маку и марихуане.\r\n<br>\r\n&nbsp&nbsp&nbspС 15 февраля правительство внесло изменения в федеральный "Перечень растений, содержащих наркотические и психотропные вещества и подлежащих контролю". Проще говоря, это список запрещенных растений, выращивание которых приравнивается к производству наркотиков.<br>\r\n\r\n&nbsp&nbsp&nbspВ список попала Ипомея трехцветная. Это декоративное вьющееся растение, в быту ее часто просто называют трехцветным вьюнком. Растение бывает однолетним или многолетним, поэтому, если вы сажали ипомею в прошлые годы, будьте особенно внимательны и осмотрите весь участок. Ипомея трехцветная очень красивая и неприхотливая, за что любима дачниками в любой климатической зоне.<br>\r\n\r\n&nbsp&nbsp&nbspОказывается, в семенах этого растения содержится эргометрин - психоактивное вещество, которое по действию напоминает ЛСД. Еще древние индейцы в центральной Америке использовали настой этих семян для того, чтобы впадать в транс и "видеть будущее". Семена ипомеи не только наркотикосодержащие, а еще и ядовитые. Остается только удивляться тому, что до последнего времени семена ипомеи были в свободной продаже, а само растение не было запрещено для выращивания.<br>\r\n\r\n&nbsp&nbsp&nbspТеперь, если у вас на участке найдут Ипомею трехцветную в малом количестве, от 10 до 100 растений - это статья КОАП о незаконном выращивании, штраф до 5000 рублей или арест на 15 суток. Если растений больше сотни - это уже статья УК, лишение свободы на срок до 2 лет. При малом количестве ипомеи, до 10 кустов, ее просто уничтожат.»', 'image/ipomeya.avif', '2024-02-19', 'news'),
(15, 'Президент подписал закон', '&nbsp&nbsp&nbspПрезидент России Владимир Путин подписал <a href="http://publication.pravo.gov.ru/document/0001202402140009" target="_blank">закон</a>, продлевающий до 1 марта 2031 упрощённый порядок оформления прав на объекты имущества общего пользования садоводческих и огороднических некоммерческих товариществ и синхронизирующий его с «дачной амнистией».\r\n<br>\r\n&nbsp&nbsp&nbspРечь идёт о зданиях и сооружениях, относящихся к имуществу общего пользования СНТ и ОНТ и созданных до 2004 года. К примеру, сторожки, водонапорные башни, административные здания, используемые для общих нужд и т.п. \r\n<br>\r\n&nbsp&nbsp&nbspДо 2031 года такие объекты можно будет зарегистрировать в упрощённом порядке. При этом представление разрешительной документации на их строительство или реконструкцию не требуется. Подготовка технического плана на такие объекты осуществляется на основании декларации.', 'image/zakon.avif', '2024-02-22', 'news');

-- --------------------------------------------------------

--
-- Структура таблицы `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `filter` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `filter`) VALUES
(1, 'Подскажите, когда вывозят мусор?', 'Вывоз мусора происходит каждый четверг в течение дня.', 'faq'),
(2, 'Подскажите расписание работы магазина в СНТ "Мечта"?', 'Магазин работает с Пн-Пт с 9:00-16:00 и с Сб-Вск с 9:00-17:00', 'faq'),
(3, 'Как добраться до СНТ от станции Шатура?', 'Смотрите <a href="http://snt-sosna.ru/pages/information.php"> расписание автобусов</a> на сайте.', 'faq'),
(4, 'Как позвонить председателю?', 'Связаться с председателем возможно:<br> - по телефону: +7(968)062-90-36 <br> - по электронной почте: info@snt-sosna.ru <br>\r\nРевуцкий Андрей Владимирович', 'faq'),
(5, 'Когда вводятся в эксплуатацию электронные ворота?', 'Электронные ворота отключаем с наступлением холодов и выпадом значительного количества снега: ноябрь-декабрь.<br>\r\nЗапуск в эксплуатацию происходит весной после таяния снега: март-апрель.', 'faq');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_variant` text NOT NULL,
  `status` text NOT NULL,
  `header` text NOT NULL,
  `text` text NOT NULL,
  `date_start` date NOT NULL,
  `date_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `number` int(11) NOT NULL,
  `Name` text NOT NULL,
  `telephone` text NOT NULL,
  `email` text NOT NULL,
  `image` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `person`
--

INSERT INTO `person` (`number`, `Name`, `telephone`, `email`, `image`, `status`) VALUES
(1, 'Ревуцкий Андрей Владимирович', '+7(968)062-90-36', 'info@snt-sosna.ru', '../image/gallery/person1.avif', 'Председатель'),
(2, 'Ромашковцев Николай Иванович', '+7 (926) 927-82-32', '', '../image/gallery/person2.avif', 'Член правления'),
(3, 'Панкина Людмила Михайловна', '+7 (916) 617-07-34', '', '../image/gallery/person3.avif', 'Член правления'),
(4, 'Симонова Елена Владимировна', '+7 (916) 558-02-41', '', '', 'Член правления'),
(5, 'Орлова Алла Анатольевна', '+7 (916) 190-87-96', '', '', 'Член правления'),
(6, 'Анфиногенов Николай Алексеевич', '+7 (926) 115-13-27', '', '', 'Член правления'),
(7, 'Дёмин Игорь Алексеевич', '+7 (917) 509-09-70', '', '../image/gallery/person4.avif', 'Сторож'),
(8, 'Николай Викторович', '+7 (903) 143-62-82', '', '../image/gallery/ohrana.avif', 'Охрана'),
(9, 'Пётр Валерьевич', '+7 (991) 402-33-90', '', '../image/gallery/electrik.avif', 'Электрик'),
(10, 'Сергей Владимирович', '+7 (916) 793-60-35', '', '../image/gallery/opil.avif', 'Опил'),
(11, 'Алексей', '+7 (963) 668-51-83', '', '../image/gallery/snow.avif', 'Снег');

-- --------------------------------------------------------

--
-- Структура таблицы `smp_ad`
--

CREATE TABLE IF NOT EXISTS `smp_ad` (
  `op` int(11) NOT NULL,
  `admin_id` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `smp_ad`
--

INSERT INTO `smp_ad` (`op`, `admin_id`, `admin_pass`) VALUES
(1, 'admin', '2dba1064472b9af75bca8ec7230ca283');

-- --------------------------------------------------------

--
-- Структура таблицы `smp_answer`
--

CREATE TABLE IF NOT EXISTS `smp_answer` (
  `op` int(11) NOT NULL,
  `answer` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `qid` int(11) DEFAULT NULL,
  `tm` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `smp_answer`
--

INSERT INTO `smp_answer` (`op`, `answer`, `point`, `qid`, `tm`) VALUES
(5, '2021', NULL, 1, '1695629883'),
(6, '2023', NULL, 2, '1695629883'),
(7, '2022', NULL, 3, '1695629883');

-- --------------------------------------------------------

--
-- Структура таблицы `smp_cust`
--

CREATE TABLE IF NOT EXISTS `smp_cust` (
  `op` int(11) NOT NULL,
  `pw` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `boc` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bbc` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hlc` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hls` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ttc` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bts` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `btc` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `buc` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `smp_cust`
--

INSERT INTO `smp_cust` (`op`, `pw`, `boc`, `bbc`, `hlc`, `hls`, `ttc`, `bts`, `btc`, `buc`) VALUES
(1, '300', '#009900', '#FFFFCC', '#339900', '10', '#FFFFFF', '10', '#000000', '#000000');

-- --------------------------------------------------------

--
-- Структура таблицы `smp_quiz`
--

CREATE TABLE IF NOT EXISTS `smp_quiz` (
  `op` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tm` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `smp_quiz`
--

INSERT INTO `smp_quiz` (`op`, `title`, `tm`) VALUES
(2, 'Какой сегодня ГОД?', '1695629883');

-- --------------------------------------------------------

--
-- Структура таблицы `smp_result`
--

CREATE TABLE IF NOT EXISTS `smp_result` (
  `op` int(11) NOT NULL,
  `point` int(11) DEFAULT NULL,
  `ip` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tm` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `smp_result`
--

INSERT INTO `smp_result` (`op`, `point`, `ip`, `tm`) VALUES
(2, 2, '::1', '1695629883'),
(3, 3, '192.168.0.103', '1695629883');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `number` int(11) NOT NULL,
  `Name` text NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `image` text NOT NULL,
  `telephone` text NOT NULL,
  `email` text NOT NULL,
  `номер участка` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`number`, `Name`, `login`, `password`, `image`, `telephone`, `email`, `номер участка`) VALUES
(1, 'Дичек Владимир Анатольевич', 'vladimir160', 'Dvladimir160', '../image/gallery/userfoto1.jpg', '89859830862', 'vladimir_dickek@mail.ru', '160');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`number`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`number`);

--
-- Индексы таблицы `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`number`);

--
-- Индексы таблицы `smp_ad`
--
ALTER TABLE `smp_ad`
  ADD PRIMARY KEY (`op`);

--
-- Индексы таблицы `smp_answer`
--
ALTER TABLE `smp_answer`
  ADD PRIMARY KEY (`op`);

--
-- Индексы таблицы `smp_cust`
--
ALTER TABLE `smp_cust`
  ADD PRIMARY KEY (`op`);

--
-- Индексы таблицы `smp_quiz`
--
ALTER TABLE `smp_quiz`
  ADD PRIMARY KEY (`op`);

--
-- Индексы таблицы `smp_result`
--
ALTER TABLE `smp_result`
  ADD PRIMARY KEY (`op`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ad`
--
ALTER TABLE `ad`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `person`
--
ALTER TABLE `person`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `smp_ad`
--
ALTER TABLE `smp_ad`
  MODIFY `op` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `smp_answer`
--
ALTER TABLE `smp_answer`
  MODIFY `op` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `smp_cust`
--
ALTER TABLE `smp_cust`
  MODIFY `op` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `smp_quiz`
--
ALTER TABLE `smp_quiz`
  MODIFY `op` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `smp_result`
--
ALTER TABLE `smp_result`
  MODIFY `op` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
