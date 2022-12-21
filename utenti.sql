-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Dic 21, 2022 alle 16:46
-- Versione del server: 10.4.17-MariaDB
-- Versione PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `nome` varchar(128) DEFAULT NULL,
  `cognome` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `passwd` text DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `nome`, `cognome`, `email`, `passwd`, `username`, `hash`) VALUES
(1, 'John', 'Deer', 'Deer@mail.com', 'Deer@12345', 'JDeer', ''),
(2, 'Jack', 'Birra', 'Birra@foogle.com', 'Qwerty@12345', 'Jacky', '$2y$10$LwRkQ.lD2fe7beph2vPhL.SqvA4onHX18qmMltdVo/gDEYfZg4uMC'),
(3, 'Jimm', 'Carry', 'Carry@google.com', 'Qwerty@12345', 'Jimmy', '$2y$10$u8uGngq/eiXO8d2O9XWy8eMlVh4ZTjbhJSCmgJKfeorIkLe5NDVBe'),
(4, 'Milla', 'Tomassi', 'Tomassi@gmail.com', 'Qwerty@12345', 'Milli', '$2y$10$YzuEslhCuGg1UfqMG7g.lOM0byGf6Rzw0r9J2hXv3T6zaNJw4CPja');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
