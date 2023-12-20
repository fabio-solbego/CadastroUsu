-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/12/2023 às 14:03
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `basefinal`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtarefa`
--

CREATE TABLE `tbtarefa` (
  `idTare` int(50) NOT NULL,
  `titulo` varchar(20) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `dateT` date DEFAULT NULL,
  `concluida` tinyint(1) DEFAULT 0,
  `fkIdUsu` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbtarefa`
--

INSERT INTO `tbtarefa` (`idTare`, `titulo`, `descricao`, `dateT`, `concluida`, `fkIdUsu`) VALUES
(1, 'casa', 'casinha', '2023-12-21', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsu` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nome` varchar(70) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `adm` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsu`, `email`, `nome`, `senha`, `adm`) VALUES
(1, NULL, 'dad', '$2y$10$q2xvm1JTZ28f8U/ysfJ5tum2p1aMEygYUq09w5d5zCVBIS2nFPmpe', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbtarefa`
--
ALTER TABLE `tbtarefa`
  ADD PRIMARY KEY (`idTare`),
  ADD KEY `fkIdUsu` (`fkIdUsu`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsu`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbtarefa`
--
ALTER TABLE `tbtarefa`
  MODIFY `idTare` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbtarefa`
--
ALTER TABLE `tbtarefa`
  ADD CONSTRAINT `tbtarefa_ibfk_1` FOREIGN KEY (`fkIdUsu`) REFERENCES `tbusuario` (`idUsu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
