-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jan-2018 às 22:43
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adbacabal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL,
  `congregacao` varchar(100) CHARACTER SET utf8 NOT NULL,
  `area` varchar(100) CHARACTER SET utf8 NOT NULL,
  `supervisorSetor` varchar(100) CHARACTER SET utf8 NOT NULL,
  `supervisorSubSetor` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lider` varchar(100) NOT NULL,
  `tipoGrupo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nomeGrupo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupo`
--

INSERT INTO `grupo` (`id`, `congregacao`, `area`, `supervisorSetor`, `supervisorSubSetor`, `lider`, `tipoGrupo`, `nomeGrupo`, `id_usuario`) VALUES
(13, 'mmfd', 'ldfl', 'ldgl', 'lgl', 'lgfl', 'adulto', 'salva', 2),
(12, 'kjvsk', 'klmfsdk', 'fkmmkl', 'mlgl', 'lmflm', 'adulto', 'kmsddf', 1),
(14, 'Assembléia de Deus', 'Bairro da Areia', 'José', 'Jefferson', 'André', 'jovens', 'salvadores', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `usuario` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`usuario`, `id`, `senha`) VALUES
('andre', 1, 'andre'),
('a', 2, 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
