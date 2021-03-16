-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Mar-2021 às 15:39
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `registo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `n_processo` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `servico` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `departamento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sala` int(11) NOT NULL,
  `material` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quantidade` int(11) NOT NULL,
  `marcacao` date DEFAULT NULL,
  `info_adicional` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id`, `n_processo`, `servico`, `departamento`, `sala`, `material`, `quantidade`, `marcacao`, `info_adicional`, `estado`) VALUES
(11, '', 'lar', 'cd', 0, 'lençol', 10, '2021-01-20', '', ''),
(12, '', 'infantario', 'salas', 14, 'fraldas', 14, '2021-01-12', '', ''),
(25, '', 'infantario', 'atl', 0, 'lençol', 2, '2021-01-20', '', 'Arquivado'),
(27, '', 'infantario', 'salas', 12, 'Caixa de arrumação', 4, '2021-01-21', '', 'Arquivado'),
(28, '', 'infantario', 'servicos_gerais', 0, 'Caixa de arrumação', 1, '2021-01-27', '', 'confirmado'),
(29, '', 'lar', 'cd', 0, 'Caixa de arrumação', 1, '2021-01-21', 'teste', 'confirmado'),
(30, '', 'infantario', 'salas', 3, 'lençol', 14, '2021-01-28', '', 'confirmado'),
(31, '', 'lar', 'centro de dia', 0, 'Caixa de arrumação', 2, '2021-01-21', '', 'confirmado'),
(32, '', 'lar', 'cozinha', 0, 'teste', 2, '2021-01-29', '', 'confirmado'),
(33, '', 'infantario', 'sala', 0, 'lençol', 50, '2021-01-28', '', 'confirmado'),
(34, '', 'infantario', 'sala', 0, 'Caixa de arrumação', 1, '2021-03-03', '', 'pendente'),
(35, '', 'infantario', 'sala', 0, 'Caixa de arrumação', 1, '2021-03-04', '', 'pendente'),
(36, '', 'infantario', 'sala', 5, 'Caixa de arrumação', 1, '2021-02-25', '', 'pendente'),
(37, '', 'infantario', 'Sala', 10, 'Caixa de arrumação', 1, '2021-02-18', '', 'pendente'),
(38, '', 'lar', 'centro de dia', 0, 'Caixa de arrumação', 1, '2021-02-18', '', 'pendente'),
(39, '', 'lar', 'centro de dia', 0, 'Caixa de arrumação', 69, '2021-03-03', '', 'pendente'),
(40, '', 'lar', 'centro de dia', 0, 'Caixa de arrumação', 12, '2021-02-25', '', 'pendente'),
(41, '', 'lar', 'sad', 0, 'teste', 8, '2021-03-11', '', 'pendente'),
(42, '132', 'lar', 'centro de dia', 0, 'Caixa de arrumação', 4, '2021-03-11', '', 'pendente'),
(43, '132', 'lar', 'sad', 0, 'teste', 2, '0000-00-00', '', 'pendente'),
(44, '132', 'lar', 'sad', 0, 'teste', 2, '0000-00-00', '', 'pendente'),
(45, '1322', 'lar', 'lar', 0, '3', 3, '0000-00-00', '', 'pendente'),
(46, '2', 'infantario', 'servicos gerais', 0, '3', 3, '0000-00-00', '', 'pendente'),
(47, '3', 'lar', 'centro de dia', 0, '3', 3, '0000-00-00', '', 'pendente'),
(48, '1222', 'lar', 'sad', 0, '222', 22222222, '2021-03-24', '', 'pendente'),
(49, '3', 'lar', 'sad', 0, '3', 222, '2021-04-01', '', 'pendente'),
(50, '132', 'lar', 'sad', 0, '2', 2, '2021-03-19', '', 'pendente'),
(51, '3', 'lar', 'Sala', 12, 'lençol', 5, '2021-03-24', '', 'pendente'),
(52, '13200', 'lar', 'centro de dia', 0, 'Caixa de arrumação', 9, '2021-03-30', '', 'pendente'),
(53, '13200', 'lar', 'lar', 0, 'Caixa de arrumação', 1, '2021-03-22', '', 'pendente'),
(54, '132001', 'lar', 'sad', 0, 'Caixa de arrumação', 9, '2021-04-05', '', 'pendente');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
