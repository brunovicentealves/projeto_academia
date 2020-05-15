-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Maio-2020 às 19:10
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------
-- ------------
--  NOME BANCO
-- ------------
CREATE DATABASE academia;
--
-- Estrutura da tabela `alimento`
--

CREATE TABLE `alimento` (
  `id_alimento` int(11) NOT NULL,
  `alimento` varchar(45) DEFAULT NULL,
  `quantidade` varchar(45) DEFAULT NULL,
  `id_refeicao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `id_avaliacao` int(11) NOT NULL,
  `his_clinico` varchar(500) DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `altura` double DEFAULT NULL,
  `imc` double DEFAULT NULL,
  `torax` double DEFAULT NULL,
  `cintura` double DEFAULT NULL,
  `abdomen` double DEFAULT NULL,
  `quadril` double DEFAULT NULL,
  `antebraco_esquerdo` double DEFAULT NULL,
  `antebraco_direito` double DEFAULT NULL,
  `braco_esquerdo` double DEFAULT NULL,
  `braco_direito` double DEFAULT NULL,
  `coxa_esquerdo` double DEFAULT NULL,
  `coxa_direito` double DEFAULT NULL,
  `panturrilha_esquerda` double DEFAULT NULL,
  `panturrilha_direita` double DEFAULT NULL,
  `data_avaliacao` date DEFAULT NULL,
  `id_ficha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avaliacao`
--

INSERT INTO `avaliacao` (`id_avaliacao`, `his_clinico`, `peso`, `altura`, `imc`, `torax`, `cintura`, `abdomen`, `quadril`, `antebraco_esquerdo`, `antebraco_direito`, `braco_esquerdo`, `braco_direito`, `coxa_esquerdo`, `coxa_direito`, `panturrilha_esquerda`, `panturrilha_direita`, `data_avaliacao`, `id_ficha`) VALUES
(38, 'sdas', 90, 1.81, 27, 11.1, 11.1, 11.1, 11.11, 11.1, 11.1, 11.1, 11, 11, 11.1, 11.1, 11.1, '2020-05-04', 8),
(54, 'dfs', 23.42, 2.34, 4, 23.4, 23, 23.4, 23, 34, 23.4, 23.4, 34.2, 23.4, 23, 34, 34, '2020-05-06', 8),
(57, 'emerson viadinho', 53.53, 5.34, 1, 34.53, 35.43, 53.45, 35.43, 35.34, 35.34, 34.53, 35.34, 34.53, 34.53, 35.34, 34.53, '2020-05-08', 1),
(60, 'ete', 23.42, 5.34, 0, 34.53, 34.53, 34.53, 34.53, 34.5, 35.3, 35.34, 35, 34.53, 34.5, 34.5, 35.3, '2020-05-06', 1),
(72, 'teste', 11.11, 1.11, 9, 11.11, 11.11, 11.11, 11.11, 11.11, 11.11, 11.11, 11.11, 11.11, 11.11, 11.11, 11.11, '2020-05-08', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicio`
--

CREATE TABLE `exercicio` (
  `id_exercicio` int(11) NOT NULL,
  `nome_exercicio` varchar(100) DEFAULT NULL,
  `serie` varchar(45) DEFAULT NULL,
  `descricao_exercicio` varchar(100) DEFAULT NULL,
  `id_treino` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha`
--

CREATE TABLE `ficha` (
  `id_ficha` int(11) NOT NULL,
  `objetivo_ficha` varchar(100) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ficha`
--

INSERT INTO `ficha` (`id_ficha`, `objetivo_ficha`, `id_usuario`) VALUES
(1, NULL, 2),
(8, NULL, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id_professor` int(11) NOT NULL,
  `nome_professor` varchar(100) DEFAULT NULL,
  `sobrenome_professor` varchar(100) DEFAULT NULL,
  `cref_professor` varchar(45) DEFAULT NULL,
  `email_professor` varchar(45) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `senha_professor` varchar(45) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `nome_professor`, `sobrenome_professor`, `cref_professor`, `email_professor`, `telefone`, `senha_professor`, `endereco`, `cep`, `complemento`, `cidade`, `pais`, `estado`, `numero`) VALUES
(1, 'bruno', 'vicente', '3442423', 'brunovicentealves.ti@gmail.com', '(43) 5.3453-534', '81dc9bdb52d04dc20036dbd8313ed055', 'rua 16', '902.000.01', 'casa', 'Porto Alegre', 'Brasil', 'Brasil', 342);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor_usuario`
--

CREATE TABLE `professor_usuario` (
  `id_professor_usuario` int(11) NOT NULL,
  `id_professor` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor_usuario`
--

INSERT INTO `professor_usuario` (`id_professor_usuario`, `id_professor`, `id_usuario`) VALUES
(1, 1, 2),
(2, 1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `refeicao`
--

CREATE TABLE `refeicao` (
  `id_refeicao` int(11) NOT NULL,
  `nome_refeicao` varchar(200) DEFAULT NULL,
  `descricao_refeicao` varchar(300) DEFAULT NULL,
  `hora_refeicao` varchar(100) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `id_ficha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `treino`
--

CREATE TABLE `treino` (
  `id_treino` int(11) NOT NULL,
  `nome_treino` varchar(100) DEFAULT NULL,
  `descricao_treino` varchar(100) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `id_ficha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `sobrenome_usuario` varchar(100) DEFAULT NULL,
  `email_usuario` varchar(45) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `senha_usuario` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `sobrenome_usuario`, `email_usuario`, `telefone`, `senha_usuario`, `endereco`, `cep`, `complemento`, `cidade`, `pais`, `estado`, `numero`) VALUES
(2, 'Bruno Vicente', 'Alves', 'brunovicentealves.ti@gmail.com', '(51) 9.9153-453', '81dc9bdb52d04dc20036dbd8313ed055', 'rua 16', '902.000.01', 'casa', 'Porto Alegre', 'Brasil', 'RS', 279),
(4, 'Juliana', 'Alves', 'bruno@hotmail.com', '(51) 9.9999-999', '81dc9bdb52d04dc20036dbd8313ed055', 'rua 16', '342.234.23', 'casa', 'Porto Alegre', 'brasil', 'rs', 11111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alimento`
--
ALTER TABLE `alimento`
  ADD PRIMARY KEY (`id_alimento`),
  ADD KEY `id_refeicao` (`id_refeicao`);

--
-- Indexes for table `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id_avaliacao`),
  ADD KEY `id_ficha` (`id_ficha`);

--
-- Indexes for table `exercicio`
--
ALTER TABLE `exercicio`
  ADD PRIMARY KEY (`id_exercicio`),
  ADD KEY `id_treino` (`id_treino`);

--
-- Indexes for table `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`id_ficha`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`);

--
-- Indexes for table `professor_usuario`
--
ALTER TABLE `professor_usuario`
  ADD PRIMARY KEY (`id_professor_usuario`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_professor` (`id_professor`);

--
-- Indexes for table `refeicao`
--
ALTER TABLE `refeicao`
  ADD PRIMARY KEY (`id_refeicao`),
  ADD KEY `id_ficha` (`id_ficha`);

--
-- Indexes for table `treino`
--
ALTER TABLE `treino`
  ADD PRIMARY KEY (`id_treino`),
  ADD KEY `id_ficha` (`id_ficha`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alimento`
--
ALTER TABLE `alimento`
  MODIFY `id_alimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `exercicio`
--
ALTER TABLE `exercicio`
  MODIFY `id_exercicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha`
--
ALTER TABLE `ficha`
  MODIFY `id_ficha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professor_usuario`
--
ALTER TABLE `professor_usuario`
  MODIFY `id_professor_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `refeicao`
--
ALTER TABLE `refeicao`
  MODIFY `id_refeicao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treino`
--
ALTER TABLE `treino`
  MODIFY `id_treino` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alimento`
--
ALTER TABLE `alimento`
  ADD CONSTRAINT `alimento_ibfk_1` FOREIGN KEY (`id_refeicao`) REFERENCES `refeicao` (`id_refeicao`);

--
-- Limitadores para a tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `avaliacao_ibfk_1` FOREIGN KEY (`id_ficha`) REFERENCES `ficha` (`id_ficha`);

--
-- Limitadores para a tabela `exercicio`
--
ALTER TABLE `exercicio`
  ADD CONSTRAINT `exercicio_ibfk_1` FOREIGN KEY (`id_treino`) REFERENCES `treino` (`id_treino`);

--
-- Limitadores para a tabela `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `ficha_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `professor_usuario`
--
ALTER TABLE `professor_usuario`
  ADD CONSTRAINT `professor_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `professor_usuario_ibfk_2` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id_professor`);

--
-- Limitadores para a tabela `refeicao`
--
ALTER TABLE `refeicao`
  ADD CONSTRAINT `refeicao_ibfk_1` FOREIGN KEY (`id_ficha`) REFERENCES `ficha` (`id_ficha`);

--
-- Limitadores para a tabela `treino`
--
ALTER TABLE `treino`
  ADD CONSTRAINT `treino_ibfk_1` FOREIGN KEY (`id_ficha`) REFERENCES `ficha` (`id_ficha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
