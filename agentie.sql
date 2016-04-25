-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Ian 2016 la 22:06
-- Versiune server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agentie`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `colaborator`
--

CREATE TABLE `colaborator` (
  `id_colaborator` int(11) NOT NULL,
  `machiaj` varchar(50) NOT NULL,
  `cuafura` varchar(50) NOT NULL,
  `manichiura` varchar(50) NOT NULL,
  `pedichiura` varchar(50) NOT NULL,
  `id_eveniment` int(11) NOT NULL,
  `nume_colaborator` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `colaborator`
--

INSERT INTO `colaborator` (`id_colaborator`, `machiaj`, `cuafura`, `manichiura`, `pedichiura`, `id_eveniment`, `nume_colaborator`) VALUES
(1, 'da', 'da', 'da', 'nu', 2, 'Pure Beauty'),
(2, 'da', 'da', 'nu', 'nu', 3, 'Makeup Forever'),
(3, 'da', 'da', 'da', 'da', 4, 'Terra Firma Cosmetics'),
(4, 'da', 'da', 'da', 'nu', 5, 'Makeup Forever'),
(5, 'da', 'da', 'da', 'da', 6, 'Best Models'),
(6, 'da', 'da', 'nu', 'nu', 7, 'Academy Makeup'),
(7, 'da', 'da', 'nu', 'nu', 8, 'Rovere Mobili');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `eveniment`
--

CREATE TABLE `eveniment` (
  `id_eveniment` int(11) NOT NULL,
  `id_supervizor` int(11) UNSIGNED NOT NULL,
  `tip_eveniment` varchar(50) NOT NULL,
  `data_inceput` datetime NOT NULL,
  `data_sfarsit` datetime NOT NULL,
  `locatie` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `eveniment`
--

INSERT INTO `eveniment` (`id_eveniment`, `id_supervizor`, `tip_eveniment`, `data_inceput`, `data_sfarsit`, `locatie`) VALUES
(2, 1, 'Bucuresti Fashion Week 2012', '2012-12-01 00:00:00', '2012-12-06 00:00:00', 'Bucuresti'),
(3, 2, 'Rowenta Elite Model Look la Afi Palace 2012', '2012-06-28 00:00:00', '2012-06-30 00:00:00', 'Bucuresti'),
(4, 3, 'Miss Royal Models Romania 2013', '2013-05-17 00:00:00', '2013-05-23 00:00:00', 'Brasov'),
(5, 4, 'Next Top Model by Catalin Botezatu 2013', '2013-11-07 00:00:00', '2013-11-10 00:00:00', 'Brasov'),
(6, 5, 'Best Models 2014', '2014-04-08 00:00:00', '2014-04-11 00:00:00', 'Bucuresti'),
(7, 6, 'Elite Model Look 2015', '2015-06-16 00:00:00', '2015-06-20 00:00:00', 'Galati'),
(8, 7, 'Rovere Mobili TVC 2015', '2015-03-17 00:00:00', '2015-03-20 00:00:00', 'Iasi');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `model`
--

CREATE TABLE `model` (
  `id_model` int(10) UNSIGNED NOT NULL,
  `nume` varchar(50) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `varsta` tinyint(3) UNSIGNED NOT NULL,
  `sex` char(1) NOT NULL DEFAULT 'F',
  `telefon` varchar(50) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `inaltime` float UNSIGNED NOT NULL,
  `culoare_piele` varchar(50) NOT NULL,
  `culoare_par` varchar(50) NOT NULL,
  `bust` varchar(3) DEFAULT NULL,
  `talie` varchar(3) DEFAULT NULL,
  `sold` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `model`
--

INSERT INTO `model` (`id_model`, `nume`, `prenume`, `varsta`, `sex`, `telefon`, `e-mail`, `inaltime`, `culoare_piele`, `culoare_par`, `bust`, `talie`, `sold`) VALUES
(1, 'Chivulescu', 'Denisa', 26, 'F', '071234567', 'denisa.chivulescu@gmail.com', 1.78, 'alba', 'blond cenusiu', '86', '60', '89'),
(2, 'Belea', 'Alina', 28, 'F', '0712345679', 'alina.belea@yahoo.com', 1.77, 'alba', 'castaniu inchis', '85', '61', '91'),
(3, 'Andrei', 'Catalina', 24, 'F', '0236351977', 'catalina.a@yahoo.com', 1.77, 'alba', 'castaniu deschis', '89', '62', '91'),
(4, 'Nita', 'Sorina', 25, 'F', '0723456789', 'sorina.n@yahoo.com', 1.77, 'alba', 'castaniu', '84', '62', '90'),
(5, 'Popescu', 'Ana-Maria', 24, 'F', '0756646658', 'ana.maria@yahoo.com', 1.79, 'alba', 'castaniu deschis', '88', '64', '89'),
(6, 'Vladau', 'Cristina', 22, 'F', '0564646949', '', 1.75, 'alba', 'blond cenusiu', '83', '60', '90'),
(7, 'Stefanescu', 'Ionut', 26, 'M', '', 'ionut.stef@gmail.com', 1.9, 'alba', 'negru', '', '', ''),
(8, 'Lepadatu', 'Cristina', 23, 'F', '', '', 1.74, 'alba', 'castaniu', '89', '60', '90'),
(9, 'Tanase', 'Cristina', 27, 'F', '', '', 1.74, 'alba', 'castaniu', '82', '60', '89'),
(10, 'Dinu', 'Simona', 25, 'F', '0724569919', '', 1.77, 'alba', 'castaniu', '84', '60', '85'),
(11, 'Lupu', 'Maria', 28, 'F', '0725656949', 'maria.lupu@gmail.com', 1.77, 'alba', 'blond', '90', '62', '91'),
(12, 'Georgescu', 'Alin', 26, 'M', '', 'alin.g@gmail.com', 1.89, 'alba', 'blond cenusiu', '', '', ''),
(13, 'Dinu', 'Diana', 22, 'F', '', 'dinu.diana@yahoo.com', 1.73, 'alba', 'castaniu deschis', '86', '60', '90'),
(14, 'Fira', 'Lavinia', 25, 'F', '', '', 1.78, 'alba', 'blond', '88', '63', '93'),
(15, 'Manole', 'Lidiana', 26, 'F', '', '', 1.75, 'alba', 'saten', '86', '60', '90'),
(16, 'Marcu', 'Marina', 22, 'F', '', '', 1.72, 'alba', 'negru', '82', '61', '91'),
(17, 'Vasilescu', 'Madalina', 29, 'F', '', '', 1.74, 'alba', 'saten', '87', '59', '88'),
(18, 'Velea', 'Oana', 29, 'F', '', '', 1.79, 'alba', 'castaniu', '86', '60', '90'),
(19, 'Pavelescu', 'Petra', 26, 'F', '', '', 1.77, 'alba', 'castaniu', '86', '61', '90'),
(21, 'Adrian', 'Nedelcu', 25, 'M', '', 'adrian.nedelcu@gmail.com', 1.89, 'alba', 'castaniu', '', '', ''),
(22, 'Moraru', 'Cristina', 25, 'F', '', 'cristina.moraru@gmail.com', 1.75, 'alba', 'castaniu', '86', '60', '90'),
(23, 'Pascu', 'Veronica', 28, 'F', '0725265656', 'veronica.p@gmail.com', 1.74, 'normala', 'saten', '89', '62', '91'),
(24, 'Chivu', 'Bogdan', 26, 'M', '0735191955', 'bogdan.chivu@gmail.com', 1.88, 'alba', 'negru inchis', '', '', ''),
(25, 'Brown', 'Andre', 25, 'M', '0765494988', 'andre.b@gmail.com', 1.81, 'alba', 'blond cenusiu', '', '', ''),
(26, 'Ionescu', 'Zamfira', 89, 'F', '0728257264', 'zamfira.i@gmail.com', 1.8, 'alba', 'castaniu deschis', '85', '61', '91'),
(27, 'Brasoveanu', 'Bogdan', 26, 'M', '0326646598', 'b.bogdan@gmail.com', 1.83, 'alba', 'castaniu', '', '', ''),
(28, 'Raicu', 'Ioana', 21, 'F', '0748559959', '', 1.78, 'masliniu', 'castaniu deschis', '85', '60', '90'),
(33, 'Doru', 'Radu', 27, 'M', '0755626262', '', 1.76, 'alba', 'castaniu', '', '', '');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `model_eveniment`
--

CREATE TABLE `model_eveniment` (
  `id_eveniment` int(11) NOT NULL,
  `id_model` int(11) UNSIGNED NOT NULL,
  `id_colaborator` int(11) NOT NULL,
  `numar_ore` int(11) NOT NULL,
  `id_salariu` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `model_eveniment`
--

INSERT INTO `model_eveniment` (`id_eveniment`, `id_model`, `id_colaborator`, `numar_ore`, `id_salariu`) VALUES
(2, 4, 1, 5, 2),
(2, 8, 1, 3, 1),
(2, 9, 1, 5, 2),
(2, 13, 1, 5, 2),
(2, 16, 1, 5, 3),
(2, 18, 1, 5, 2),
(2, 22, 1, 5, 3),
(2, 23, 1, 5, 1),
(3, 1, 2, 4, 3),
(3, 2, 2, 4, 1),
(3, 5, 2, 5, 1),
(3, 7, 2, 4, 4),
(3, 10, 2, 3, 3),
(3, 11, 2, 4, 3),
(3, 13, 2, 4, 2),
(4, 2, 3, 4, 1),
(4, 3, 3, 4, 1),
(4, 9, 3, 6, 1),
(4, 16, 3, 3, 2),
(4, 17, 3, 6, 1),
(4, 21, 3, 6, 1),
(4, 27, 3, 5, 1),
(5, 1, 4, 5, 3),
(5, 5, 4, 6, 1),
(5, 6, 4, 6, 1),
(5, 7, 4, 6, 3),
(5, 11, 4, 5, 2),
(5, 12, 4, 4, 1),
(5, 26, 4, 5, 2),
(6, 1, 1, 6, 3),
(6, 3, 1, 5, 3),
(6, 7, 2, 5, 4),
(6, 10, 1, 4, 3),
(6, 16, 1, 4, 3),
(6, 18, 1, 5, 1),
(6, 21, 1, 5, 2),
(6, 22, 1, 4, 2),
(7, 3, 6, 4, 3),
(7, 4, 6, 5, 2),
(7, 7, 3, 4, 4),
(7, 11, 3, 5, 3),
(7, 12, 3, 4, 2),
(7, 14, 6, 6, 1),
(7, 15, 3, 4, 1),
(7, 17, 3, 5, 3),
(7, 19, 6, 4, 2),
(7, 24, 6, 6, 3),
(7, 25, 6, 4, 4),
(7, 28, 6, 10, 6),
(8, 18, 6, 5, 2),
(8, 23, 3, 4, 3),
(8, 27, 7, 12, 7);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `poze`
--

CREATE TABLE `poze` (
  `id_poza` int(11) NOT NULL,
  `id_model` int(11) UNSIGNED NOT NULL,
  `cale_poza` varchar(120) NOT NULL,
  `cale_poza1` varchar(120) NOT NULL,
  `cale_poza2` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `poze`
--

INSERT INTO `poze` (`id_poza`, `id_model`, `cale_poza`, `cale_poza1`, `cale_poza2`) VALUES
(1, 1, 'Imagini\\denisa_c1.jpg', 'Imagini\\denisa_c2.jpg', 'Imagini\\denisa_c3.jpg'),
(2, 2, 'Imagini\\alina_b1.jpg', 'Imagini\\alina_b2.jpg', 'Imagini\\alina_b3.jpg'),
(3, 3, 'Imagini\\catalina_a1.jpg', 'Imagini\\catalina_a2.jpg', 'Imagini\\catalina_a3.jpg'),
(4, 4, 'Imagini\\sorina_n1.jpg', 'Imagini\\sorina_n2.jpg', 'Imagini\\sorina_n3.jpg'),
(5, 5, 'Imagini\\ana_p1.jpg', 'Imagini\\ana_p2.jpg', 'Imagini\\ana_p3.jpg'),
(6, 6, 'Imagini\\cristina_v1.jpg', 'Imagini\\cristina_v2.jpg', 'Imagini\\cristina_v3.jpg'),
(7, 7, 'Imagini\\ionut_s1.jpg', 'Imagini\\ionut_s2.jpg', 'Imagini\\ionut_s3.jpg'),
(8, 8, 'Imagini\\cristina_l.jpg', 'Imagini\\cristina_l1.jpg', 'Imagini\\cristina_l2.jpg'),
(9, 9, 'Imagini\\cristina_t.jpg', 'Imagini\\cristina_t1.jpg', 'Imagini\\cristina_t2.jpg'),
(10, 10, 'Imagini\\simona_d1.jpg', 'Imagini\\simona_d2.jpg', 'Imagini\\simona_d3.jpg'),
(11, 11, 'Imagini\\maria_l1.jpg', 'Imagini\\maria_l2.jpg', 'Imagini\\maria_l3.jpg'),
(12, 12, 'Imagini\\alin_g1.jpg', 'Imagini\\alin_g2.jpg', 'Imagini\\alin_g3.jpg'),
(13, 13, 'Imagini\\diana_d1.jpg', 'Imagini\\diana_d2.jpg', 'Imagini\\diana_d3.jpg'),
(14, 14, 'Imagini\\lavinia_f.jpg', 'Imagini\\lavinia_f1.jpg', 'Imagini\\lavinia_f2.jpg'),
(15, 15, 'Imagini\\lidiana_m.jpg', 'Imagini\\lidiana_m1.jpg', 'Imagini\\lidiana_m2.jpg'),
(16, 16, 'Imagini\\marina_m.jpg', 'Imagini\\marina_m1.jpg', 'Imagini\\marina_m2.jpg'),
(17, 17, 'Imagini\\madalina_v.jpg', 'Imagini\\madalina_v1.jpg', 'Imagini\\madalina_v2.jpg'),
(18, 18, 'Imagini\\oana_v.jpg', 'Imagini\\oana_v1.jpg', 'Imagini\\oana_v2.jpg'),
(19, 19, 'Imagini\\petra_p.jpg', 'Imagini\\petra_p1.jpg', 'Imagini\\petra_p2.jpg'),
(21, 21, 'Imagini\\adrian_n1.jpg', 'Imagini\\adrian_n2.jpg', 'Imagini\\adrian_n3.jpg'),
(22, 22, 'Imagini\\cristina_m1.jpg', 'Imagini\\cristina_m2.jpg', 'Imagini\\cristina_m3.jpg'),
(23, 23, 'Imagini\\veronica_p1.jpg', 'Imagini\\veronica_p2.jpg', 'Imagini\\veronica_p3.jpg'),
(24, 24, 'Imagini/bogdan_c1.jpg', 'Imagini/bogdan_c2.jpg', 'Imagini/bogdan_c3.jpg'),
(25, 25, 'Imagini/andre_b1.jpg', 'Imagini/andre_b2.jpg', 'Imagini/andre_b3.jpg'),
(26, 26, 'Imagini/zamfira_i1.jpg', 'Imagini/zamfira_i2.jpg', 'Imagini/zamfira_i3.jpg'),
(27, 27, 'Imagini/bogdan_b1.jpg', 'Imagini/bogdan_b2.jpg', 'Imagini/bogdan_b3.jpg'),
(28, 28, 'Imagini/ioana_r1.jpg', 'Imagini/ioana_r2.jpg', 'Imagini/ioana_r3.jpg'),
(31, 33, 'Imagini\\doru_r1.jpg', 'Imagini\\doru_r2.jpg', 'Imagini\\doru_r3.jpg');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `salariu`
--

CREATE TABLE `salariu` (
  `id_salariu` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `salariu`
--

INSERT INTO `salariu` (`id_salariu`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `supervizor`
--

CREATE TABLE `supervizor` (
  `id_supervizor` int(10) UNSIGNED NOT NULL,
  `nume` varchar(50) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `adresa` varchar(70) NOT NULL,
  `telefon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `supervizor`
--

INSERT INTO `supervizor` (`id_supervizor`, `nume`, `prenume`, `adresa`, `telefon`) VALUES
(1, 'Botezatu', 'Catalin', 'Unirii 21, Bucuresti', '0721212121'),
(2, 'Lima', 'Adriana', 'Universitatii 15, Cluj', '0724242424'),
(3, 'Giorgio', 'Armani', 'Florenta', '0432323232'),
(4, 'Botezatu', 'Marian', 'Dreptatii 25, Brasov', '0754545454'),
(5, 'Klein', 'Calvin', 'Berlin', '0855555555'),
(6, 'Banderas', 'Antonio', 'Madrid', '0676767676'),
(7, 'Lagerfeld', 'Karl', 'Munich', '0844545454');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `user`
--

CREATE TABLE `user` (
  `register_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `user`
--

INSERT INTO `user` (`register_id`, `user`, `password`) VALUES
(1, 'adriana', 'olteanu'),
(2, 'andrei', 'ulinici'),
(3, 'x', 'x');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colaborator`
--
ALTER TABLE `colaborator`
  ADD PRIMARY KEY (`id_colaborator`,`id_eveniment`),
  ADD UNIQUE KEY `id_firma` (`id_colaborator`),
  ADD UNIQUE KEY `id_eveniment` (`id_eveniment`);

--
-- Indexes for table `eveniment`
--
ALTER TABLE `eveniment`
  ADD PRIMARY KEY (`id_eveniment`),
  ADD UNIQUE KEY `id_supervizor` (`id_supervizor`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id_model`);

--
-- Indexes for table `model_eveniment`
--
ALTER TABLE `model_eveniment`
  ADD UNIQUE KEY `id_eveniment` (`id_eveniment`,`id_model`,`id_colaborator`,`id_salariu`),
  ADD KEY `id_model` (`id_model`),
  ADD KEY `id_firma` (`id_colaborator`),
  ADD KEY `id_salariu` (`id_salariu`);

--
-- Indexes for table `poze`
--
ALTER TABLE `poze`
  ADD PRIMARY KEY (`id_poza`),
  ADD UNIQUE KEY `id_model` (`id_model`);

--
-- Indexes for table `salariu`
--
ALTER TABLE `salariu`
  ADD PRIMARY KEY (`id_salariu`);

--
-- Indexes for table `supervizor`
--
ALTER TABLE `supervizor`
  ADD PRIMARY KEY (`id_supervizor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user`),
  ADD UNIQUE KEY `register_id` (`register_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colaborator`
--
ALTER TABLE `colaborator`
  MODIFY `id_colaborator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `eveniment`
--
ALTER TABLE `eveniment`
  MODIFY `id_eveniment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id_model` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `poze`
--
ALTER TABLE `poze`
  MODIFY `id_poza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `salariu`
--
ALTER TABLE `salariu`
  MODIFY `id_salariu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `supervizor`
--
ALTER TABLE `supervizor`
  MODIFY `id_supervizor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `colaborator`
--
ALTER TABLE `colaborator`
  ADD CONSTRAINT `colaborator_ibfk_1` FOREIGN KEY (`id_eveniment`) REFERENCES `eveniment` (`id_eveniment`);

--
-- Restrictii pentru tabele `eveniment`
--
ALTER TABLE `eveniment`
  ADD CONSTRAINT `eveniment_ibfk_1` FOREIGN KEY (`id_supervizor`) REFERENCES `supervizor` (`id_supervizor`);

--
-- Restrictii pentru tabele `model_eveniment`
--
ALTER TABLE `model_eveniment`
  ADD CONSTRAINT `model_eveniment_ibfk_1` FOREIGN KEY (`id_model`) REFERENCES `model` (`id_model`),
  ADD CONSTRAINT `model_eveniment_ibfk_2` FOREIGN KEY (`id_eveniment`) REFERENCES `eveniment` (`id_eveniment`),
  ADD CONSTRAINT `model_eveniment_ibfk_3` FOREIGN KEY (`id_colaborator`) REFERENCES `colaborator` (`id_colaborator`),
  ADD CONSTRAINT `model_eveniment_ibfk_4` FOREIGN KEY (`id_salariu`) REFERENCES `salariu` (`id_salariu`);

--
-- Restrictii pentru tabele `poze`
--
ALTER TABLE `poze`
  ADD CONSTRAINT `poze_ibfk_1` FOREIGN KEY (`id_model`) REFERENCES `model` (`id_model`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
