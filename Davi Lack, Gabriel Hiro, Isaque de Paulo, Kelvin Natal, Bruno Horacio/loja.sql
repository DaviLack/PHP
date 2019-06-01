-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Ago-2018 às 15:54
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_depto`
--

CREATE TABLE `tbl_depto` (
  `id_depto` int(11) NOT NULL,
  `nome_depto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_depto`
--

INSERT INTO `tbl_depto` (`id_depto`, `nome_depto`) VALUES
(1, 'Gabinetes'),
(2, 'Placa de Video'),
(4, 'Processadores'),
(5, 'Placa MÃ£e'),
(6, 'MemÃ³ria Ram'),
(7, 'Fonte'),
(8, 'MacacÃ£o'),
(9, 'PerifÃ©ricos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_produto`
--

CREATE TABLE `tbl_produto` (
  `id_produto` int(10) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `desc_produto` varchar(200) NOT NULL,
  `preco_produto` float(7,2) NOT NULL,
  `img_produto` varchar(66) NOT NULL,
  `id_depto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_produto`
--

INSERT INTO `tbl_produto` (`id_produto`, `nome_produto`, `desc_produto`, `preco_produto`, `img_produto`, `id_depto`) VALUES
(1, 'AMD GTX 3080 TI', 'placa de video foda', 99999.00, 't8PviRhF7UobZDnMw9GiPs7.jpg', 2),
(2, 'Gabinete pica', 'gabinete que combina com a placa roxa', 99998.00, 'GhmCYTIzZJIJDzLapCvLlLkSZBC9Bd8h4UB48i1itFaJPi9S.png', 1),
(7, 'NVIDIA GTX 2100', 'Placa de vÃ­deo de Ã³tima qualidade', 1700.00, 'PThH698WGdwemPpFofFvx2WskCGN3X7EPj1zeo.jpg', 2),
(8, 'NVIDIA GTX 5555', 'Placa de vÃ­deo de Ã³tima qualidade', 3000.00, 'zgCmZLSHtmPtUzPdUMZgrApXizC5mKGzFbSLUFY1f.jpg', 2),
(9, 'Gabinete Vermelho', 'gabinete vermelho ', 500.00, 'BU5yT9hsvDWaGGAozS0LtAZ981UNsgXckz1.jpg', 1),
(10, 'Gabinete Humilde', 'gabinete para pessoas humildes', 200.00, '3LZJYTzPFcjyNmsLXEDZcuu8KezGxdQoA7hCmr.jpg', 1),
(11, 'MemÃ³ria Ram HyperX 4gb', 'MemÃ³ria HyperX 4gb', 200.00, 'SMHSCryqlwLVXmuPHlpfZ1X9O0saAvLClQWqP.jpg', 6),
(12, 'MemÃ³ria Ram 16gb', 'MemÃ³ria Ram fluorescente', 800.00, 'v0p4meEGnmS4J0i56TZ2KNH8yLt9OqHiUtL89bh5XFY064s7p.jpg', 6),
(13, 'Placa MÃ£e ', 'Placa MÃ£e Wi-fi', 550.00, 'PfOOMKwNkMPyto8v6RfIVyiN6uVDZepYlY7zzWvK9RE.jpg', 5),
(14, 'Placa MÃ£e ', 'Placa MÃ£e Gamer 32gb LED Wi-Fi', 600.00, 'aIt6f61toQrSGaCf.png', 5),
(15, 'Placa MÃ£e desumilde', 'Placa MÃ£e para pessoas nÃ£o tÃ£o humildes', 450.00, 'C5bL97xFgGOSSUuomRq94A.jpg', 5),
(16, 'Placa MÃ£e Gamer de Burgues ', 'Placa MÃ£e para pessoas Burguesas', 1000.00, 'J7sdRvrppaHbPlSpxljPPboMJeQaxCG7D.jpg', 5),
(17, 'Processador Intel Core i5', 'Processador Intel Core i5', 450.00, 'dkFNHzwqhs31Y2cYJN382m8Gd6UTLFJq.jpg', 4),
(18, 'Processador Pentium G4560', 'Processador de alta qualidade', 350.00, 'B3OTelsKQIKoBpIz4ej6KKjHlLKYM5Zm2t4Zz1M5p.jpg', 4),
(19, 'Macaco', 'Macaco Grande', 99999.99, 'vB3iIDos48FSZ7hL0SyuQrvXyfzWSIfQfs3PaZKfBRYUUhh.jpg', 8),
(20, 'Mouse Gaymer Top de LInha', 'Mouse necessÃ¡rio para todo gaymer', 49.99, 'QpTK0TESSTrANENV6jil.jpg', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_depto`
--
ALTER TABLE `tbl_depto`
  ADD PRIMARY KEY (`id_depto`);

--
-- Indexes for table `tbl_produto`
--
ALTER TABLE `tbl_produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_depto` (`id_depto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_depto`
--
ALTER TABLE `tbl_depto`
  MODIFY `id_depto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_produto`
--
ALTER TABLE `tbl_produto`
  MODIFY `id_produto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbl_produto`
--
ALTER TABLE `tbl_produto`
  ADD CONSTRAINT `id_depto` FOREIGN KEY (`id_depto`) REFERENCES `tbl_depto` (`id_depto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
