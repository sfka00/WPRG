-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2025 at 12:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektau`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ID`, `Title`, `Content`, `Category`, `Picture`, `Date`) VALUES
(1, 'Nawrocki ma dostÄ™p do broni!', 'Nawrocki ujawnia u Mentzena, Å¼e ma dostÄ™p do broni i mÃ³wi o tym jak ciÄ™Å¼ko w Polsce o taki dostÄ™p: \"Rocznie tylko okoÅ‚o 4-5 osÃ³b w Polsce dostaje pozwolenie na broÅ„.\" Wiecej na kanale YouTube u Slawomira Mentzena.', 'Polityka', '/images/polityka1.jpg', '2025-05-25 00:00:00'),
(2, 'Mentzen wydaÅ‚ oÅ›wiadczenie po piwie z Trzaskowskim.', 'Spotkanie SÅ‚awomira Mentzena z RafaÅ‚em Trzaskowskim i RadosÅ‚awem Sikorskim na piwie wywoÅ‚aÅ‚o burzÄ™. Jako jeden z liderÃ³w Konfederacji mowi: \"PoszedÅ‚bym na piwo, wino czy kawÄ™ z KaczyÅ„skim, Tuskiem, Zandbergiem czy Czarzastym. JeÅ›li komuÅ› to przeszkadza, to nic na to nie poradzÄ™. Ja wam nie mÃ³wiÄ™, z kim moÅ¼ecie siÄ™ spotkaÄ‡ a z kim nie.\"', 'Polityka', '/images/polityka2.jpg', '2025-05-26 00:00:00'),
(3, 'Nowe Tajemnice Karola Nawrockiego!', 'WedÅ‚ug doniesieÅ„ dziesiÄ…tek ludzi, ktÃ³rzy znali Nawrockiego i pracowali z nim w Grand Hotelu, gdy ten pracowaÅ‚ tam jako ochroniarz: \"SprowadzaÅ‚ dla goÅ›ci hotelu prostytutki!\"', 'Polityka', '/images/polityka3.jpg', '2025-05-26 00:00:00'),
(4, 'Donald Tusk oburzony!', 'Premier Polski komentuje na X\'ie informacje o Nawrockim: \"O wszystkim wiedziaÅ‚eÅ›, JarosÅ‚awie. O zwiÄ…zkach z gangusami, o â€œzaÅ‚atwianiu dziewczynâ€, o apartamencie miÅ‚oÅ›ci w Muzeum II Wojny Åšwiatowej, o wyÅ‚udzeniu mieszkania i innych sprawach pozostajÄ…cych wciÄ…Å¼ w ukryciu. CaÅ‚a odpowiedzialnoÅ›Ä‡ za tÄ™ katastrofÄ™ spada na ciebie!\"', 'Polityka', '/images/polityka4.jpg', '2025-05-26 00:00:00'),
(5, 'Donald Trump ostro na temat Putina', 'Donald Trump wypowiedziaÅ‚ siÄ™ krytycznie na temat WÅ‚adimira Putina za jego ostatnie dziaÅ‚ania na Ukrainie. WspomniaÅ‚ rÃ³wnieÅ¼, Å¼e zna Putina bardzo dÅ‚ugo i nie poznaje go obecnie. MÃ³wi, Å¼e \"caÅ‚kiem oszalaÅ‚\". Prezydent USA mocno krytykuje Rosje i nie podoba mu siÄ™ wysyÅ‚anie rakiet i zabijanie ludzi.', 'Åšwiat', '/images/swiat1.jpg', '2025-05-27 01:04:00'),
(6, 'Kim Dzong Un jest wciekÅ‚y', 'W Korei PÃ³Å‚nocnej aresztowano cztery osoby po wypadku okrÄ™tu podczas ceremonii wodowania w stoczni Chongjin. OkrÄ™t jest niezdolny do uÅ¼ytku a sam Kim Dzong Un okreÅ›liÅ‚ incydent jako \"niewybaczalne przestÄ™pstwo\". ', 'Åšwiat', '/images/swiat2.jpg', '2025-05-27 01:11:38'),
(7, 'Ukraina dostaÅ‚a zgodÄ™ na wykorzystanie broni przeciwko Rosji', 'Stany Zjednoczone, Niemcy, Wielka Brytania i Francja zniosÅ‚y ograniczenia dotyczÄ…ce uÅ¼ycia broni dostarczonej Ukrainie. DziÄ™ki temu Ukraina moÅ¼e bezkarnie zaatakowaÄ‡ RosjÄ™. O tym wszystkim poinformowaÅ‚ Kanclerz Niemiec Friedrich Merz 26 maja w Berlinie.', 'Åšwiat', '/images/swiat3.jpg', '2025-05-27 01:16:32'),
(8, 'Lewandowski przekazaÅ‚ fatalne wieÅ›ci', 'Robert Lewanowski nie weÅºmie udziaÅ‚u w czerwcowym zgrupowaniu reprezentacji Polski. Jego miejsce jako kapitan zajmie Piotr ZieliÅ„ski. Jak sam mÃ³wi po sezonie w FC Barcelonie, jego ciaÅ‚o wymaga odpoczynku. BiorÄ…c pod uwagÄ™ jego ostatni stan i kontuzje z jakimi siÄ™ domaga, moÅ¼emy tylko mieÄ‡ nadziejÄ™, Å¼e wrÃ³ci jak najszybciej.', 'Sport', '/images/sport1.jpg', '2025-05-27 01:22:49'),
(9, 'Patostreamerzy znÄ™cali siÄ™ nad kobietami', 'W Bytomiu ruszyÅ‚ proces dwÃ³ch \"patostreamerÃ³w\" oskarÅ¼onych o znÄ™canie siÄ™ nad mÅ‚odymi kobietami podczas transmisji internetowych. BartÅ‚omiej \"Tucznik\" K., nie przyszedÅ‚ na rozprawÄ™ a Marcin \"Kawiaq\" F. nie przyznaje siÄ™ do zarzutÃ³w i nie chce skÅ‚adaÄ‡ wyjaÅ›nieÅ„. OskarÅ¼onym grozi do oÅ›miu lat wiÄ™zienia.', 'Ludzie', '/images/ludzie1.jpg', '2025-05-27 02:17:14'),
(10, 'Lekarka zmarÅ‚a po dyÅ¼urze', 'Dr Anna Zaremba zmarÅ‚a niespodziewanie po jednym z dyÅ¼urÃ³w w wieku niespeÅ‚na 40 lat. Trwa wyjaÅ›nianie przyczyn Å›mierci.', 'Ludzie', '/images/ludzie2.jpg', '2025-05-27 02:20:45'),
(11, 'Jajko idealne', 'Podczas gotowania jajka sÄ… umieszczane w koszyku i przenoszone miÄ™dzy wrzÄ…cÄ… wodÄ… a letniÄ… o temperaturze 30 stopni Celsjusza. CaÅ‚y proces trwa 32 minuty i obejmuje 8 cykli. Po zakoÅ„czeniu gotowania jajka sÄ… schÅ‚adzane pod bieÅ¼Ä…cÄ… wodÄ…. DziÄ™ki tej metodzie biaÅ‚ko jajka osiÄ…ga idealnÄ… konsystencjÄ™, a Å¼Ã³Å‚tko pozostaje kremowe. BOMBA', 'Kuchnia', '/images/kuchnia1.jpg', '2025-05-27 02:22:11'),
(12, 'Miniburgery na raz!', 'SkÅ‚adniki\r\nMinibuÅ‚ki maÅ›lane:\r\n\r\n2 jajka,\r\n95 g ciepÅ‚ego mleka,\r\n4 g suchych droÅ¼dÅ¼y,\r\n15 g masÅ‚a,\r\n35 g pÅ‚ynnego miodu,\r\n280 g mÄ…ki pszennej.\r\nBurgery:\r\n\r\ngarÅ›Ä‡ posiekanej kolendry,\r\n350-400 g miÄ™sa mielonego (u mnie wieprzowe),\r\n1/2 Å‚yÅ¼eczki soli,\r\n1/2 Å‚yÅ¼eczki pieprzu,\r\n2 Å‚yÅ¼eczki sosu barbecue,\r\n3/4 Å‚yÅ¼eczki musztardy,\r\nDodatkowo 12 plasterkÃ³w Å¼Ã³Å‚tego sera.\r\nPrzepis\r\nJedno jajko rozbiÄ‡ i oddzieliÄ‡ biaÅ‚ko od Å¼Ã³Å‚tka (biaÅ‚ko zachowaÄ‡ do posmarowania buÅ‚ek). Wszystkie skÅ‚adniki plus wczeÅ›niej oddzielone Å¼Ã³Å‚tko umieÅ›ciÄ‡ w misce i zagnieÅ›Ä‡ ciasto.\r\nOdstawiÄ‡ na okoÅ‚o godzinÄ™ do wyroÅ›niÄ™cia. Piekarnik rozgrzaÄ‡ do 190 stopni.\r\nPo wyroÅ›niÄ™ciu ciasto podzieliÄ‡ na 12 czÄ™Å›ci i uformowaÄ‡ maÅ‚e buÅ‚eczki, posmarowaÄ‡ biaÅ‚kiem i posypaÄ‡ sezamem. Piec okoÅ‚o 15 min. w 190 st. C.\r\nWszystkie skÅ‚adniki burgerÃ³w dokÅ‚adnie wymieszaÄ‡ i uformowaÄ‡ 12 mini burgerÃ³w.\r\nSmaÅ¼yÄ‡ na patelni z obu stron pod koniec smaÅ¼enia na kaÅ¼dym burgerze poÅ‚oÅ¼yÄ‡ plasterek sera i poczekaÄ‡ do roztopienia.\r\nNastÄ™pnie uÅ‚oÅ¼yÄ‡ na buÅ‚eczce posmarowanej majonezem w towarzystwie saÅ‚aty, pomidora, czerwonej cebuli, plastra kiszonego ogÃ³rka. PrzekÅ‚uÄ‡ wykaÅ‚aczkÄ…, aby siÄ™ trzymaÅ‚o.', 'Kuchnia', '/images/kuchnia2.jpg', '2025-05-27 03:26:24'),
(13, 'MichaÅ‚ Probierz robi zmiany', 'MichaÅ‚ Probierz ogÅ‚osiÅ‚ kadrÄ™ reprezentacji Polski na czerwcowe zgrupowanie. Zabraknie nie tylko Lewandowskiego ale teÅ¼ Kamila PiÄ…tkowskiego z powodu kontuzji stopy. W ich miejsce selekcjoner powoÅ‚aÅ‚ Oskara Repka i Maxi Oyedele.', 'Sport', '/images/sport2.jpg', '2025-05-28 01:54:52'),
(14, 'Jak gotowaÄ‡ kalafior romanesco?', 'Przed gotowaniem kalafiora romanesco naleÅ¼y go dokÅ‚adnie umyÄ‡ i podzieliÄ‡ na rÃ³Å¼yczki. MoÅ¼na to zrobiÄ‡ rÄ™cznie lub przy uÅ¼yciu noÅ¼a. WaÅ¼ne jest, aby nie uszkodziÄ‡ delikatnych struktur warzywa.\r\n\r\n\r\nKalafior romanesco moÅ¼na przygotowaÄ‡ na wiele sposobÃ³w, a kaÅ¼dy z nich podkreÅ›la jego unikalny smak. Gotowanie na parze to jedna z najzdrowszych metod, ktÃ³ra pozwala zachowaÄ‡ wiÄ™kszoÅ›Ä‡ skÅ‚adnikÃ³w odÅ¼ywczych. Wystarczy okoÅ‚o 15 minut gotowania, aby rÃ³Å¼yczki staÅ‚y siÄ™ miÄ™kkie, ale nadal chrupiÄ…ce.\r\n\r\nInnÄ… popularnÄ… metodÄ… jest pieczenie. Kalafior romanesco moÅ¼na pokroiÄ‡ na mniejsze kawaÅ‚ki, skropiÄ‡ oliwÄ… z oliwek, posypaÄ‡ ulubionymi przyprawami i piec w piekarniku przez okoÅ‚o 20 minut w temperaturze 200 stopni Celsjusza. Pieczony kalafior zyskuje intensywniejszy smak i zÅ‚ocistÄ… barwÄ™.', 'Kuchnia', '/images/kuchnia3.jpg', '2025-05-28 01:58:54'),
(15, 'Ostatni moment na zmianÄ™', 'Ministerstwo Cyfryzacji przypomina, Å¼e do 29 maja moÅ¼na zmieniÄ‡ miejsce gÅ‚osowania lub uzyskaÄ‡ zaÅ›wiadczenie umoÅ¼liwiajÄ…ce gÅ‚osowanie w dowolnym lokalu w II turze wyborÃ³w prezydenckich. To kluczowe terminy dla wyborcÃ³w planujÄ…cych gÅ‚osowaÄ‡ poza swoim miejscem zamieszkania.', 'Polityka', '/images/polityka5.jpg', '2025-05-28 02:01:42'),
(16, 'Covid powraca', 'W Hong Kongu nowa fala zaraÅ¼eÅ„ Coronavirusem, wskaÅºnik zaraÅ¼en w tym mieÅ›cie wzrÃ³sÅ‚ z 1.7% (marzec) do 11.4% (maj). Liczba zgonÃ³w obecnie wynosi 31.\r\nCOVID rozprzestrzenia siÄ™ teÅ¼ w Tajlandii, Singaporze i Indiach. ', 'Åšwiat', '/images/swiat4.jpg', '2025-05-28 14:54:53'),
(17, 'PapieÅ¼ apeluje o pokÃ³j na Ukrainie', 'Podczas Å›rodowej audiencji generalnej w Watykanie papieÅ¼ Leon XIV zaapelowaÅ‚ o zakoÅ„czenie wojny w Ukrainie oraz przerwanie ognia w Strefie Gazy. ZwrÃ³ciÅ‚ uwagÄ™ na cierpienie ofiar wojen, zwÅ‚aszcza dzieci, ktÃ³re zmagajÄ… siÄ™ z dramatycznymi konsekwencjami konfliktÃ³w. W swoim przesÅ‚aniu zaapelowaÅ‚ o dialog i dziaÅ‚ania na rzecz pokoju, podkreÅ›lajÄ…c rolÄ™ wspÃ³Å‚czucia i solidarnoÅ›ci.', 'Åšwiat', '/images/swiat5.jpg', '2025-05-28 14:57:41'),
(18, 'Agnieszka Kaczorowska w zwiÄ…zku z Marcinem Rogacewiczem', 'W paÅºdzierniku informowaliÅ›my, Å¼e Agnieszka Kaczorowska i Maciej Pela zdecydowali siÄ™ na rozstanie.\r\nObecnie Kaczorowska i Rogacewicz, ktÃ³ry rÃ³wnieÅ¼ szykuje siÄ™ do rozwodu, zostali sfotografowani w trakcie zaÅ‚atwiania spraw na mieÅ›cie.Nie zabrakÅ‚o kawy, ale teÅ¼ czuÅ‚oÅ›ci. W pewnym momencie Agnieszka i Marcin obdarzyli siÄ™ nawet soczystym buziakiem.\r\n', 'Ludzie', '/images/ludzie3.jpg', '2025-05-28 15:04:52'),
(19, 'ZabÃ³jstwo Mai z MÅ‚awy', 'MinÄ…Å‚ miesiÄ…c od znalezienia ciaÅ‚a 16-letniej Mai z MÅ‚awy. Podejrzany o jej zabÃ³jstwo wciÄ…Å¼ przebywa w Grecji. Tymczasem rodzina dziewczyny ma Å¼al do prokuratury. - Pierwszy raz spotykam siÄ™ z tym, by peÅ‚nomocnik poszkodowanej rodziny nie miaÅ‚ dostÄ™pu do akt - mÃ³wi adwokat Wojciech Marek Kasprzyk.', 'Ludzie', '/images/ludzie4.jpg', '2025-05-28 15:08:01'),
(20, 'Lionel Messi doÅ‚Ä…czyÅ‚ do Luisa Suareza w klubie w Urugwaju', 'ArgentyÅ„czyk i jego kompan Luis Suarez rozegrali wspÃ³lnie wiele sezonÃ³w w karierze klubowej. ZaangaÅ¼owali siÄ™ razem rÃ³wnieÅ¼ w klub, ktÃ³ry zajmuje siÄ™ szkoleniem dzieci i mÅ‚odzieÅ¼y Deportivo LS, ktÃ³ry zostaÅ‚ zaÅ‚oÅ¼ony w 2018 roku w Ciudad de la Costa na przedmieÅ›ciach Montevideo.', 'Sport', '/images/sport3.jpg', '2025-05-28 15:10:41'),
(21, 'Nie Å¼yje Mateusz Kuba', 'Nie Å¼yje Mateusz Kuba, defensor Å‚Ã³dzkiej druÅ¼yny futbolu amerykaÅ„skiego Wilki ÅÃ³dzkie. Przedstawiciele druÅ¼yny opublikowali poruszajÄ…cy wpis w mediach spoÅ‚ecznoÅ›ciowych. Sportowiec miaÅ‚ zaledwie 27 lat. Przedstawiciele klubu wydali oficjalne oÅ›wiadczenie ws. jego Å›mierci za poÅ›rednictwem Facebooka. Nie podano przyczyny Å›mierci.', 'Ludzie', '/images/ludzie5.jpg', '2025-05-28 15:12:54'),
(22, 'Emma Raducanu ma zagraÄ‡ z IgÄ… ÅšwiÄ…tek', 'Emma Raducanu, Brytyjka, ktÃ³ra dziÅ› zmierzy siÄ™ z IgÄ… ÅšwiÄ…tek, wyraziÅ‚a swoje niezadowolenie z organizacji turnieju Roland Garros. 22-latka tenisistka uwaÅ¼a, Å¼e niektÃ³rzy zawodnicy sÄ… faworyzowani ws. kortÃ³w.\r\nMÃ³wi teÅ¼ miÄ™dzy innymi o braku moÅ¼liwosci treningu na wiÄ™kszych kortach.', 'Sport', '/images/sport4.jpg', '2025-05-28 15:15:11'),
(23, 'Domowy sposÃ³b na masÅ‚o', 'Chcesz przygotowaÄ‡ domowe masÅ‚o? To naprawdÄ™ Å‚atwe, a do tego zdrowsze od tych, ktÃ³re znajdziesz w sklepie. Domowe masÅ‚o to nie tylko smaczniejsza, ale i taÅ„sza alternatywa, zwÅ‚aszcza gdy ceny siÄ™gajÄ… bardzo wysokich poziomÃ³w.\r\nPrzepis na domowe masÅ‚o. Oto skÅ‚adniki\r\n600 g Å›mietany 30% lub 36%;\r\nszczypta soli na doprawienie.\r\nPrzepis na domowe masÅ‚o. Jak je przygotowaÄ‡?\r\nprzelej Å›mietankÄ™ do blendera, innego naczynia miksujÄ…cego, sÅ‚oika lub butelki;\r\nmiksuj na najwyÅ¼szych obrotach przez okoÅ‚o 6 minut;\r\nÅ›mietana zmieni konsystencjÄ™ podczas miksowania;\r\nmasÅ‚o juÅ¼ powstaje - to bardzo wyraÅºne, Å¼Ã³Å‚te grudki;\r\npozostaÅ‚oÅ›Ä‡ maÅ›lanki usuÅ„ przez sitko, a masÅ‚o uformuj i odciÅ›nij dÅ‚oniÄ… lub duÅ¼Ä… Å‚yÅ¼kÄ…;\r\nformuj kulÄ™ lub inny ksztaÅ‚t i schowaj do lodÃ³wki;\r\ngotowe!', 'Kuchnia', '/images/kuchnia4.jpg', '2025-05-28 15:17:11'),
(24, 'Ta ryba truje!', 'Ryba maÅ›lana zdobyÅ‚a popularnoÅ›Ä‡ w restauracjach na caÅ‚ym Å›wiecie. Wiele osÃ³b ceni jÄ… za bogaty smak i delikatnÄ… teksturÄ™. Trzeba mieÄ‡ jednak Å›wiadomoÅ›Ä‡, Å¼e jej spoÅ¼ycie moÅ¼e prowadziÄ‡ do powaÅ¼nych problemÃ³w zdrowotnych. W niektÃ³rych krajach zakazano jej sprzedaÅ¼y, jednak w Polsce nadal czÄ™sto trafia na nasze stoÅ‚y.\r\nRyby maÅ›lane zawierajÄ… specyficzne estry woskowe, ktÃ³re sÄ… trudne do strawienia przez ludzki organizm. StanowiÄ… one nawet do 20 proc. masy ryby i jeÅ›li sÄ… spoÅ¼ywane w nadmiarze mogÄ… powodowaÄ‡ rÃ³Å¼ne problemy zdrowotne.', 'Kuchnia', '/images/kuchnia5.jpg', '2025-05-28 15:20:20'),
(25, 'Cristiano Ronaldo: \"Ten rozdziaÅ‚ siÄ™ zakoÅ„czyÅ‚\"', 'Cristiano Ronaldo opublikowaÅ‚ w mediach spoÅ‚ecznoÅ›ciowych tajemniczy wpis, ktÃ³ry moÅ¼e wskazywaÄ‡ na zakoÅ„czenie jego przygody z ArabiÄ… SaudyjskÄ…. Od koÅ„ca 2022 roku Portugalczyk reprezentuje barwy tamtejszego Al-Nassr. Jego kontrakt wygasa z koÅ„cem czerwca.\r\nW nocy z 26 na 27 maja 2025 roku Cristiano Ronaldo zamieÅ›ciÅ‚ w mediach spoÅ‚ecznoÅ›ciowych tajemniczy wpis, w ktÃ³rym przekazaÅ‚, Å¼e \"zakoÅ„czyÅ‚ siÄ™ pewien etap\".', 'Sport', '/images/sport5.jpg', '2025-05-28 15:23:19'),
(26, 'Polacy Åºle gotujÄ… parÃ³wki', 'Przygotowanie parÃ³wek wydaje siÄ™ byÄ‡ dziecinnie proste, lecz wiele osÃ³b popeÅ‚nia bÅ‚Ä™dy. Na ten temat wypowiedziaÅ‚ siÄ™ Piotr OgiÅ„ski, tworzÄ…cy treÅ›ci na kanale \"Kocham GotowaÄ‡\". Na swoim kanale na YouTube opublikowaÅ‚ film, w ktÃ³rym zdradza poprawny sposÃ³b gotowania parÃ³wek.\r\nOgiÅ„ski wprowadza widzÃ³w do tematu, mÃ³wiÄ…c: \"WiÄ™kszoÅ›Ä‡ PolakÃ³w przez caÅ‚e Å¼ycie Åºle gotuje parÃ³wki\". Ostrzega, Å¼e smaÅ¼enie czy pieczenie parÃ³wek to zÅ‚y pomysÅ‚, poniewaÅ¼ mogÄ… one zawieraÄ‡ substancje takie jak azotany i azotyny. Gdy osiÄ…gnÄ… temperaturÄ™ powyÅ¼ej 130 stopni Celsjusza, przeksztaÅ‚cajÄ… siÄ™ w nitrozoaminy, ktÃ³re sÄ… potencjalnie rakotwÃ³rcze. Najlepszym sposobem jest wiÄ™c tradycyjne przygotowywanie parÃ³wek w wodzie.', 'Kuchnia', '/images/kuchnia6.jpg', '2025-05-28 15:25:23'),
(27, 'KsiÄ…Å¼ulo i byÅ‚a kelnerka o lokalu', 'Youtuber KsiÄ…Å¼ulo odwiedziÅ‚ ostatnio osÅ‚awiony lokal w sercu Krakowa. â€” Nie wrÃ³ciÅ‚bym tu za nic â€” stwierdziÅ‚ po wizycie. Po niepochlebnej recenzji znanego youtubera gÅ‚os zabraÅ‚a byÅ‚a pracowniczka tego miejsca.\r\nPo gÅ‚oÅ›nej recenzji KsiÄ…Å¼ula, do redakcji KR24.pl zgÅ‚osiÅ‚a siÄ™ byÅ‚a pracowniczka lokalu. Jej relacja szokuje i wskazuje na liczne nieprawidÅ‚owoÅ›ci. Kobieta stwierdziÅ‚a, Å¼e byÅ‚o to najgorsze miejsce, w ktÃ³rym pracowaÅ‚a.', 'Ludzie', '/images/ludzie6.jpg', '2025-05-28 15:27:38'),
(28, 'Rekordowa liczba PolakÃ³w chce gÅ‚osowaÄ‡ za granicÄ…', 'Obecnie w spisie wyborcÃ³w poza granicami Polski jest niemal 700 tys. osÃ³b â€” przekazaÅ‚a Justyna Chrzanowska, peÅ‚nomocniczka ministra spraw zagranicznych ds. organizacji wyborÃ³w. â€” To rekordowa liczba polskich obywateli, ktÃ³ra zarejestrowaÅ‚a siÄ™ do gÅ‚osowania â€” powiedziaÅ‚a. Liczba osÃ³b gÅ‚osujÄ…cych za granicÄ… moÅ¼e jeszcze wzrosnÄ…Ä‡, bo do komisji mogÄ… stawiÄ‡ siÄ™ osoby z zaÅ›wiadczeniem o prawie do gÅ‚osowania.', 'Polityka', '/images/polityka6.jpg', '2025-05-28 15:28:57'),
(29, ' Lamine Yamal zmieniÅ‚ plan z powodu babci', 'Gwiazda FC Barcelony zdecydowaÅ‚a siÄ™ na przedÅ‚uÅ¼enie kontraktu z klubem, ktÃ³rego jest wychowankiem. Lamine Yamal nie uczciÅ‚ tego wydarzenia specjalnÄ… sesjÄ… zdjÄ™ciowÄ…, poniewaÅ¼ zabrakÅ‚oby na niej ukochanej babci piÅ‚karza.', 'Sport', '/images/sport6.jpg', '2025-05-28 15:31:12'),
(30, ' Horror w Liverpoolu. MÃ³gÅ‚ straciÄ‡ Å¼onÄ™ i dziecko', 'MyÅ›laÅ‚em, Å¼e straciÅ‚em wszystko - mÃ³wi mÄ™Å¼czyzna z Wielkiej Brytanii, ktÃ³ry widziaÅ‚, jak samochÃ³d w Liverpoolu uderzyÅ‚ jego syna w wÃ³zku i potrÄ…ciÅ‚ jego partnerkÄ™.\r\nPodczas Å›wiÄ™towania zwyciÄ™stwa klubu piÅ‚karskiego Liverpool FC w Premier League doszÅ‚o do tragicznego incydentu. SamochÃ³d wjechaÅ‚ w tÅ‚um kibicÃ³w zgromadzonych na ulicach miasta. W wyniku tego zdarzenia 27 osÃ³b zostaÅ‚o przewiezionych do szpitala, a wÅ›rÃ³d nich czworo dzieci. Dwie osoby, w tym dziecko, doznaÅ‚y powaÅ¼nych obraÅ¼eÅ„.\r\nPolicja szybko zareagowaÅ‚a na miejsce zdarzenia, zatrzymujÄ…c 53-letniego mÄ™Å¼czyznÄ™ podejrzewanego o kierowanie pojazdem. Wykluczono jednak, aby incydent miaÅ‚ podÅ‚oÅ¼e terrorystyczne. Na miejscu pracowaÅ‚y sÅ‚uÅ¼by ratunkowe, ktÃ³re uwolniÅ‚y cztery osoby uwiÄ™zione pod pojazdem, w tym dziecko.', 'Åšwiat', '/images/swiat6.jpg', '2025-05-28 15:36:13'),
(33, 'testdousuniecia123', '123dousuniecia', 'Åšwiat', 'polityka1.jpg', '2025-05-28 21:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `Article_ID` int(11) NOT NULL,
  `Login_ID` int(11) NOT NULL,
  `Content` text NOT NULL,
  `Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `Article_ID`, `Login_ID`, `Content`, `Date`) VALUES
(1, 30, 1, 'wtf', '2025-05-28 18:28:55'),
(2, 30, 1, 'co sie stalo', '2025-05-28 18:29:06'),
(4, 30, 1, '123', '2025-05-28 18:37:29'),
(5, 30, 1, '123', '2025-05-28 18:37:30'),
(7, 30, 1, '123', '2025-05-28 18:40:04'),
(8, 30, 2, 'hej', '2025-05-28 18:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Login`, `Password`, `Email`, `Role`) VALUES
(1, 'abc', '$2y$10$/keaW52UCJeeFgOmEbe7n.FskujqwCglAK8ELp.hF..As6TBNlrsK', 'abc@gmail.com', 'admin'),
(2, 'abc3', '$2y$10$izZYYn2pxlWPXmRKSqPN8u6EM5M1fws8/vtH1IbEHAYwFX8OOSqNq', 'abc3@gmail.com', 'user'),
(3, 'Maciej', '$2y$10$JgwS7rEP.6gBg57xE3a/U.qsNAieSseXQMIYMa.pDTUyL1yVFtJyW', 'MaciejMaciak123@wp.pl', 'user'),
(4, 'boss', '$2y$10$3RyLu0MQl4d2z/5Cn3xd9udRq52wN2SH/.Mz2sUXYKzA6eLX5ATpG', 'boss123@wp.pl', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
