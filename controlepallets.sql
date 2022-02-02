-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02-Fev-2022 às 01:23
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controlepallets`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `debitos`
--

DROP TABLE IF EXISTS `debitos`;
CREATE TABLE IF NOT EXISTS `debitos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filial` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `enviado_pbr` int(11) DEFAULT NULL,
  `enviado_simples` int(11) DEFAULT NULL,
  `devolveu_pbr` int(11) DEFAULT NULL,
  `devolveu_simples` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `debitos`
--

INSERT INTO `debitos` (`id`, `filial`, `enviado_pbr`, `enviado_simples`, `devolveu_pbr`, `devolveu_simples`) VALUES
(1, 'GRU', 20, 13, 0, 1),
(5, 'CAS', 27, 11, 0, 2),
(6, 'PTB', 10, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `origem` varchar(240) NOT NULL,
  `destino` varchar(240) NOT NULL,
  `pbr` varchar(10) DEFAULT NULL,
  `simples` varchar(10) DEFAULT NULL,
  `veiculo` varchar(240) DEFAULT NULL,
  `notafiscal` varchar(240) DEFAULT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `registro`
--

INSERT INTO `registro` (`id`, `origem`, `destino`, `pbr`, `simples`, `veiculo`, `notafiscal`, `data`) VALUES
(1, 'CWB', 'POR', '1', '5', 'ADC1245', '1165165', '2022-01-21 20:07:24'),
(2, 'CWB', 'POR', '1', '5', 'ADC1245', '1165165', '2022-01-21 20:10:04'),
(3, 'CWB', 'GRU', '15', '22', 'AKJ4023', '6556565', '2022-01-21 20:29:08'),
(4, 'CWB', 'GRU', '22', '10', 'ADC1245', '56456465', '2022-01-21 20:36:38'),
(5, 'CWB', 'GRU', '', '', 'ADC1245', '', '2022-01-21 20:42:33'),
(6, 'CWB', 'GRU', '10', '11', 'ADC1245', '16519654', '2022-01-24 20:24:38'),
(7, 'CWB', 'GRU', '44', '23', 'AGP4016', '5466521', '2022-01-24 21:14:56'),
(8, 'CWB', 'GRU', '44', '23', 'AGP4016', '5466521', '2022-01-24 21:16:31'),
(9, 'CWB', 'SAO', '55', '30', 'AGP4017', '546652155', '2022-01-24 21:54:30'),
(10, 'CWB', 'GRA', '44', '77', 'AGP4016', '445', '2022-01-24 21:57:50'),
(11, 'CWB', 'POT', '48', '60', 'A', '', '2022-01-24 22:01:56'),
(12, 'CWB', 'GRA', '80', '', 'AGP4017', '564654', '2022-01-24 22:03:58'),
(13, 'CWB', 'GRU', '15', '', 'AGP4016', '465', '2022-01-24 22:04:54'),
(14, 'CWB', 'GRU', '15', '', 'AGP4016', '49879', '2022-01-24 22:06:20'),
(15, 'CWB', 'GRU', '18', '20', 'AGP4016', '79878', '2022-01-24 22:12:21'),
(16, 'CWB', 'SAO', '50', '80', 'ATY4050', '87987', '2022-01-25 22:27:59'),
(17, 'CWB', 'GRU', '55', '32', 'ADC1245', '494465', '2022-01-28 21:02:36'),
(18, 'CWB', 'TDA', '88', '99', 'APT3940', '465646', '2022-01-28 21:34:19'),
(19, 'CWB', 'TRE', '12', '132', 'ADC1245', '43654', '2022-01-28 21:45:45'),
(20, 'CWB', 'CAS', '12', '30', 'ASD7987', '6544', '2022-02-01 22:38:06'),
(21, 'CWB', 'CAS', '12', '30', 'ASD7987', '6544', '2022-02-01 22:41:02'),
(22, 'CWB', 'CAS', '12', '30', 'ASD7987', '6544', '2022-02-01 22:41:08'),
(23, 'CWB', 'CAS', '12', '30', 'ASD7987', '6544', '2022-02-01 22:41:42'),
(24, 'CWB', 'CAS', '12', '30', 'ASD7987', '6544', '2022-02-01 22:42:21'),
(25, 'CWB', 'CAS', '12', '30', 'ASD7987', '6544', '2022-02-01 22:42:35'),
(26, 'CWB', 'CAS', '12', '30', 'ASD7987', '6544', '2022-02-01 22:43:09'),
(27, 'CWB', 'CAS', '12', '30', 'ASD7987', '6544', '2022-02-01 22:43:11'),
(28, 'CWB', 'CAS', '12', '30', 'ASD7987', '6544', '2022-02-01 22:43:44'),
(29, 'CWB', 'CAS', '12', '30', 'ASD7987', '6544', '2022-02-01 22:44:47'),
(30, 'CWB', 'CAS', '12', '30', 'ASD7987', '6544', '2022-02-01 22:48:49'),
(31, 'CWB', 'CAS', '12', '30', 'ASD7987', '6544', '2022-02-01 22:49:08'),
(32, 'CWB', 'CAS', '60', '10', 'ASD6546', '65465', '2022-02-01 22:50:48'),
(33, 'CWB', 'SAO', '123', '6545', 'SAD7987', '654654', '2022-02-01 22:51:15'),
(34, 'CWB', 'CAS', '12', '12', 'SDF7897', '777', '2022-02-01 23:01:25'),
(35, 'CWB', 'CAS', '5', '8', 'ASD987', '6565', '2022-02-01 23:05:35'),
(36, 'CWB', 'CAS', '5', '8', 'ASD987', '6565', '2022-02-01 23:09:13'),
(37, 'CWB', 'GRU', '10', '13', 'ASD7879', '98798', '2022-02-01 23:10:04'),
(38, 'CWB', 'CAS', '3', '2', 'ASD9879', '5555', '2022-02-01 23:14:42'),
(39, 'CWB', 'PTB', '5', '2', 'RTY9879', '8787', '2022-02-01 23:15:26'),
(40, 'CWB', 'PTB', '5', '10', '1239879', '', '2022-02-01 23:18:16'),
(41, 'CWB', 'CAS', '9', '1', 'TRT6546', '99977', '2022-02-01 23:20:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
