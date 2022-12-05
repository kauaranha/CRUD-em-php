-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Maio-2022 às 23:33
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabelaimg`
--

DROP TABLE IF EXISTS `tabelaimg`;
CREATE TABLE IF NOT EXISTS `tabelaimg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(14) NOT NULL,
  `produto` varchar(80) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `data` date NOT NULL,
  `imagem` varchar(80) NOT NULL,
  `valor` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `tabelaimg`
--

INSERT INTO `tabelaimg` (`id`, `codigo`, `produto`, `descricao`, `data`, `imagem`, `valor`) VALUES
(3, '001', 'Agua', 'Agua Cristal 500ml', '2022-04-25', 'agua.jpg', '2.00'),
(4, '002', 'Suco', 'Suco Del Valle 1,5L', '2022-04-25', 'suco.jpg', '7.00'),
(5, '003', 'Coca-Cola Lata', 'Lata Coca-Cola 350ml', '2022-04-25', 'coca.jpg', '4.00'),
(6, '004', 'Guarana', 'Lata Guarana Antartica 350ml', '2022-04-25', 'guarana.jpg', '4.00'),
(7, '005', 'Cerveja Corona', 'Cerveja Corona LongNeck', '2022-04-25', 'corona.jpg', '7.00'),
(8, '006', 'Cerveja Becks', 'Cerveja Becks longneck 330ml', '2022-05-02', 'becks.jpg', '6.50'),
(11, '007', 'Energético Monstrer', 'Lata 500ml', '2022-05-03', 'monster.jpg', '8.50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
