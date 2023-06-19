-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 02/01/2023 às 12:25
-- Versão do servidor: 5.7.34
-- Versão do PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pdo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `autor`
--

CREATE TABLE `autor` (
  `NomeAutor` varchar(100) NOT NULL,
  `CodAutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `nomeCategoria` varchar(25) NOT NULL,
  `codCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`nomeCategoria`, `codCategoria`) VALUES
('Biografia', 22),
('Drama', 16),
('Educativo', 25),
('Fantasia', 24),
('Ficção', 29),
('Haikai', 28),
('Infantil', 30),
('Lenda Urbana', 26),
('Poesia', 31),
('Política', 27),
('Romance', 23),
('Suspense', 19),
('Terror', 18);

-- --------------------------------------------------------

--
-- Estrutura para tabela `escrita`
--

CREATE TABLE `escrita` (
  `codAutor` int(11) NOT NULL,
  `codLivro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `titulo` varchar(100) DEFAULT NULL,
  `codLivro` int(11) NOT NULL,
  `codCategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`titulo`, `codLivro`, `codCategoria`) VALUES
('A culpa é das estrelas', 15, 23),
('Salem', 17, 19),
('9 de novembro', 31, 16),
('O anjo inacabado ', 33, 30),
('Belo mundo, onde você está', 34, 29),
('Verity', 35, 19),
('Um cartão', 36, 31),
('Todas as suas imperfeições', 37, 23),
('É assim que acaba', 38, 16);

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfil`
--

CREATE TABLE `perfil` (
  `nomePerfil` varchar(100) DEFAULT NULL,
  `codPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `perfil`
--

INSERT INTO `perfil` (`nomePerfil`, `codPerfil`) VALUES
('usuario comum', 1),
('administrador', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(100) NOT NULL,
  `codUsuario` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `codPerfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `codUsuario`, `email`, `senha`, `codPerfil`) VALUES
('Iasmin Lessa Ghirlinzone', 1, '{ mimimghirlinzone@gmail.com}', '12345678', 1),
('Julieta Garcia', 4, '{ jugarc@gmail.com}', '987654321', 1),
('Fernanda', 5, '{ fernanda@gmail.com}', '5678', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`CodAutor`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codCategoria`),
  ADD UNIQUE KEY `conUnique` (`nomeCategoria`);

--
-- Índices de tabela `escrita`
--
ALTER TABLE `escrita`
  ADD KEY `livro_fk` (`codLivro`),
  ADD KEY `autor_fk` (`codAutor`);

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`codLivro`),
  ADD KEY `cat_fk` (`codCategoria`);

--
-- Índices de tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`codPerfil`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUsuario`),
  ADD UNIQUE KEY `uq` (`nome`,`email`,`senha`),
  ADD KEY `fk_usu` (`codPerfil`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `CodAutor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `codLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `codPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `escrita`
--
ALTER TABLE `escrita`
  ADD CONSTRAINT `autor_fk` FOREIGN KEY (`codAutor`) REFERENCES `autor` (`CodAutor`),
  ADD CONSTRAINT `livro_fk` FOREIGN KEY (`codLivro`) REFERENCES `livro` (`codLivro`);

--
-- Restrições para tabelas `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `cat_fk` FOREIGN KEY (`codCategoria`) REFERENCES `categoria` (`codCategoria`);

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usu` FOREIGN KEY (`codPerfil`) REFERENCES `perfil` (`codPerfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
