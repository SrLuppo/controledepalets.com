-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Jan-2022 às 23:43
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `registro`
--

INSERT INTO `registro` (`id`, `origem`, `destino`, `pbr`, `simples`, `veiculo`, `notafiscal`, `data`) VALUES
(1, 'CWB', 'POR', '1', '5', 'ADC1245', '1165165', '2022-01-21 20:07:24'),
(2, 'CWB', 'POR', '1', '5', 'ADC1245', '1165165', '2022-01-21 20:10:04'),
(3, 'CWB', 'GRU', '15', '22', 'AKJ4023', '6556565', '2022-01-21 20:29:08'),
(4, 'CWB', 'GRU', '22', '10', 'ADC1245', '56456465', '2022-01-21 20:36:38'),
(5, 'CWB', 'GRU', '', '', 'ADC1245', '', '2022-01-21 20:42:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
