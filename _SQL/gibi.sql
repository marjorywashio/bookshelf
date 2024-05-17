-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Abr-2024 às 20:23
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `gibi`
--

DROP TABLE IF EXISTS `gibi`;
CREATE TABLE `gibi` (
  `id_gibi` int(11) NOT NULL,
  `titulo_gibi` varchar(100) NOT NULL,
  `autor_gibi` varchar(100) NOT NULL,
  `editora_gibi` varchar(100) NOT NULL,
  `volume_gibi` int(11) NOT NULL,
  `serie_gibi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `gibi`
--

INSERT INTO `gibi` (`id_gibi`, `titulo_gibi`, `autor_gibi`, `editora_gibi`, `volume_gibi`, `serie_gibi`) VALUES
(1, 'Chico Bento moço', 'Mauricio de Sousa', 'Panini', 52, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gibi`
--
ALTER TABLE `gibi`
  ADD PRIMARY KEY (`id_gibi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gibi`
--
ALTER TABLE `gibi`
  MODIFY `id_gibi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
