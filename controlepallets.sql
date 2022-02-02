-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Fev-2022 às 00:14
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controlepallets`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `debitos`
--

DROP TABLE IF EXISTS `debitos`;
CREATE TABLE IF NOT EXISTS `debitos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filial` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `enviado` int(11) NOT NULL,
  `devolveu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

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
(19, 'CWB', 'TRE', '12', '132', 'ADC1245', '43654', '2022-01-28 21:45:45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
