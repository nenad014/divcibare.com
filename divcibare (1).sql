-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 10:17 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divcibare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pwd`) VALUES
(1, 'admindivcibare', 'kreativnost789');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `article` longtext NOT NULL,
  `date_post` date NOT NULL,
  `image` varchar(250) NOT NULL,
  `source` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `article`, `date_post`, `image`, `source`) VALUES
(1, 'Divčibare dobija etno tržnicu, sportsku zonu', 'VALJEVO – Divčibare će ove godine dobiti Etno tržnicu, koja će doprineti da ovo turisticko mesto bude lepše i modernije, narocito centar gde se nalazi postojeća pijaca. Radovi bi trebalo da pocnu u martu, a predviden rok za završetak je 30. jun 2020, prenosi eKapija.\r\n<br>\r\nPredracunska vrednost objekata i parternog uredenja tržnice iznosi 27.687.369,90 dinara. Sredstva za izgradnju navedenih objekata obezbedili su Ministarstvo trgovine, turizma i telekomunikacija 9.000.000 dinara, Turisticka organizacija Valjevo 10.747.000 dinara, a preostali nedostajuci iznos od 7.940.369 dinara planiran je iz budžeta grada Valjeva za 2020. godinu.\r\n<br>\r\nPostojeca pijaca na Divcibarama je, kako se navodi na sajtu Grada Valjeva devastirana, bez adekvatne opreme i instalacije.\r\n<br>\r\nDirektorka Turisticke organizacije Valjeva (TOV) Ana Markovic kaže da je uraden glavni projekat uredenja Etno tržnice u turistickom mestu Divcibare, kako bi ovaj centralni i komercijalni prostor postao deo turisticke ponude reprezentativnog karaktera.\r\n<br>\r\n„Projekat podrazumeva izgradnju tržnice na otvorenom, cime bi ona zadržala svoj tradicionalni karakter, sa ponudom etno proizvoda, suvenira i domacih prehrambenih proizvoda. Objekti Etno tržnice su nadzemno montažni. Projekat podrazumeva inovativni sistem, moderan dizajn kao i parterno uredenje prostora“, kaže Marković.\r\n<br>\r\nOna najvljuje i izgradnja objekta površine 35 m2 za potrebe Turisticke organizacije, 27 objekata za prodaju domacih proizvoda i suvenira, kao i javni toalet.\r\n<br>\r\nUrađeni su projekti za vidikovce Golubac, Crni Vrh, Paljba, Krivina na Divcibarama i projekti uredenja Titovog gaja, gde bi trebalo da bude smeštena sportsko-rekreativna zona, kaže Marković.', '2020-01-26', 'uploads/images.jpg', 'Tanjug'),
(2, 'Proslavljeni košarkaš Miloš Teodosić otvorio hotel', 'Divčibare - Na Divčibarama, zimskom centru najbližem velikim gradovima u Srbiji - Beogradu i Novom Sadu, otvoren je najmlađi i najveći hotel \"Crni vrh\".\r\n<br>\r\nOtvaranju su prisustvovali predsednik Srbije Aleksandar Vučić i ministar za trgovinu, turizam i telekomunikacije Rasim Ljajić.\r\n\r\n\"Moram da se zahvalim porodici Teodosić, najviše Milošu i njegovom bratu Jovanu, koji su uložili veliki novac u ovaj projekat. Taj novac mogli su da ulože bilo gde drugde u svetu, a ovde su sigurno imali mnogo muka\", kazao je tom prilikom Aleksandar Vučić.\r\nPredsednik Srbije je istakao da Divčibare imaju idealan vazduh na nadmorskoj visini od 980 metara, te da će sportski klubovi ovde imati idealne uslove za pripreme, bolje nego, na primer, u Sloveniji.\r\n\r\n\"Radićemo na daljem razvoju infrastrukture u ovom kraju, da Valjevo konačno bude na trasi autoputa\", rekao je Vučić.\r\n\r\nDržava će još više pomagati domaćim investitorima koji su zaradili novac u svetu i hoće da ga ulože u Srbiju, poručio je Vučić.\r\n\r\n\"Ovo je deseti veliki projekat za hotele koji pomažemo, svi su sa više od 800.000 evra. Pomažemo jer hoćemo da razvijemo infrastrukturu. Što bi naši fudbaleri išli u druga mesta, kada imamo divne Divčibare, Vrdnik, odličan Zlatibor. Vazduh je ovde bolji nego tamo\", rekao je Vučić.\r\n\r\nDodao je da je prvi Miloš Obrenović uvideo značaj Maljena i da ta planina ima poseban značaj za Srbiju. Kako kaže, kapaciteti su divni, a država će preuzeti na sebe put od Krčmara do Divčibara, kao i telekomunikacione mreže i vodovodnu mrežu.\r\n\r\nVučić je naglasio da je zato važno da se donese Plan razvoja Srbije do 2025. godine i da se ubrza njegova realizacija.\r\n\r\nKazao je da će država pomoći i da se naprevi veliki travnati teren za fudbal, kao i da će biti urađen još jedan sa veštačkom travom, a da je Fudbalski savez obećao da će se uraditi reflektori. Kako je rekao, Dejan Stanković je obećao da će tu dovesti fudbalere Crvene Zvezde, umesto da idu na pripreme u Sloveniju.\r\n\r\nVučić je najavio da će biti urađen od Krčmara do Divčibara i da će se stizati za samo sat vremena do tog centra, kao i da će se uraditi potrebna infrastruktura, vodovod i kanalizacija preko Kancelarije za javna ulaganja. Predsednik je najavio i da će vrlo brzo početi gradnja brze saobraćajnice od Iverka do Lajkovca i da će moći od Beograda od Valjeva da se stigne za samo 40 minuta.\r\n\r\nVučić i Ljajić su sa vlasnikom, bratom proslavljenog košarkaša Miloša Teodosića, Jovanom Teodosićem, obišli hotel kategorizovan sa četiri zvezdice, koji se prostire na tri nivoa i raspolaže sa 111 opremljenih smeštajnih jedinica - soba i apartmana, različitih tipova i veličina.\r\n\r\nOtvaranju hotela, koji je smešten u mirnom okruženju borove šume, a čiji se celokupan kompleks prostire na 2,2 hektara zemljišta, prisustvovao je i veliki broj srpskih sportista i sportskih radnika, među kojima su i legendarni košarkaški trener Dušan Duda Ivković, predsednik Košarkaškog saveza Srbije Predarg Danilović, proslavljeni fudbaler, novi trener FK \"Crvena zvezda\" Dejan Stanković i bivši fudbaler tog kluba Marko Pantelić.\r\nHotel, u kojem je zaposleno 80 radnika, sadrži velnes i spa centar opremljen zatvorenim bazenom, biosaunom, parnim kupatilom, teretanom, đakuzijem, a poseduje restoran, bar i loundž - bar, kao i igraonicu za decu.\r\n\r\nU okviru hotela nalazi se i Kongresna sala sa kapacitetom od 350 sedećih mesta, a za razvoj sporta i sportiste različitih vrsta, od posebnog značaja je što se uz sam hotel gradi moderna sportska dvorana, po standardima FIBA, povezana toplom vezom sa glavnim objektom, a pogodna za organizaciju takmičenja, domaćih i međunarodnih.\r\n\r\nSportska dvorana, koja će imati pet sportskih terena - za košarku, fudbal i druge sportove, biće završena, prema najavama, 2020. godine.\r\n\r\nIzgradnja hotelskog kompleksa, koji će doprineti i razvoju turizma u delu zapadne Srbije, trajala je manje od dve godine, a prilikom gradnje vodilo se računa o ekologiji, energetskoj efikasnosti i izvorima obnovljive energije. Izbor prirodnog materijala - bilećkog i pirotskog kamena, drveta i drugih materijala, hotelu pomaže da se što bolje uklopi u planinski ambijent koji ga okružuje.', '2019-12-22', '../uploads/5897723655dff57148161d621825853_w640.jpg', 'B92'),
(3, 'Zimske radosti po staroj ceni: Otvorena sezona ski', 'Sezona skijanja na Divčibarama počela je poslednjeg dana 2019. godine na ski-stazi “Crni vrh”. Iz “Divčibare Ski Resorta” saopštili su da na ovoj poznatoj vazdušnoj banji, zimskom centru najbližem Beogradu, ima više od pola metra snega.\r\n<br>\r\nSki staza duga je 850, sa visinskom razlikom od 180 metara, ima dvosednu žičaru kapaciteta 1.200 skijaša na sat. Na stazi je u funkciji i sistem za veštačko osnežavanje sa šest topova i dve žirafe. Po međunarodnoj kategorizaciji, staza ima crvenu oznaku i namenjena je veštijim skijašima.\r\n<br>\r\nZbog blizine velikim gradovima, Divčibare su veoma atraktivne i za jednodnevnu posetu. Osim iz okolnih mesta i gradova, najviše skijaša i bordera očekuje se iz Valjeva, Beograda, Novog Sada, Šapca, Obrenovca, Čačka i Loznice. Prethodne sezone na ski-stazi “Crni vrh” u 70 skijaških dana uživalo je više od 10.000 ljubitelja skijanja i snouborda.\r\n<br>\r\nOve sezone cene ski karata biće različite za radne dane i tokom vikenda, kada će biti od 10 do 20 posto viša, zavisno od vrste ski pasa. Za decu do pet godina starosti vožnja je besplatna. Tokom radnih dana, cena je nepromenjena u odnosu na prošlu godinu.', '2019-12-31', '../uploads/DivcibareFoto-Divcibare-Ski-Resort-(1).jpg', 'Novosti');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `address` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `mobile`, `address`, `profile_picture`) VALUES
(3, 'Petar Petrovic', 'perazdera', 'perica@gmail.com', '12345', '0641112223', 'Neznanog junaka bb, Valjevo', 'uploads/img_avatar.png'),
(4, 'Nenad Nikolić', 'nenad014', 'nendn.dizajn@gmail.com', 'predefinisanost', '0642781563', 'Vlade Danilovica 1/1, Valjevo', 'uploads/69084113_786762758414357_3959776138275848192_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
