-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Abr-2022 às 22:27
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `transportadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carga`
--

CREATE TABLE `carga` (
  `id` int(11) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `id_motorista` int(11) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `saida` int(11) NOT NULL,
  `status_` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carga`
--

INSERT INTO `carga` (`id`, `produto`, `id_motorista`, `destino`, `saida`, `status_`) VALUES
(1, 'Computador', 1, 'Içara', 0, 'A'),
(2, 'Documentos corporativos', 2, 'Palhoça', 0, 'A'),
(3, 'Peça industrial', 3, 'Torres', 0, 'A'),
(4, 'Peça industrial', 4, 'Rio do Sul', 0, 'A'),
(5, 'Peça industrial', 5, 'Florianópolis', 0, 'A'),
(6, 'Peça industrial', 1, 'Criciúma', 0, 'C'),
(7, 'Peça industrial', 2, 'Curitiba', 0, 'C');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro`
--

CREATE TABLE `carro` (
  `id` int(11) NOT NULL,
  `placa` varchar(8) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `id_filial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carro`
--

INSERT INTO `carro` (`id`, `placa`, `modelo`, `id_filial`) VALUES
(1, '856-GBA', 'Sandero', 1),
(2, '584-GJO', 'Minivan', 1),
(3, '451-LPO', 'Palio', 1),
(4, '879-POR', 'Clio', 2),
(5, '908-EQU', 'Prius', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `filial`
--

CREATE TABLE `filial` (
  `id` int(11) NOT NULL,
  `localidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filial`
--

INSERT INTO `filial` (`id`, `localidade`) VALUES
(1, 'Criciúma'),
(2, 'Lages');

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE `motorista` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `id_carro` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `id_filial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `motorista`
--

INSERT INTO `motorista` (`id`, `nome`, `id_carro`, `cpf`, `id_filial`) VALUES
(1, 'Alexandre', 1, '43084962090', 1),
(2, 'Marina', 2, '89410480019', 1),
(3, 'João', 3, '61492650056', 1),
(4, 'Marcelo', 4, '57791931001', 2),
(5, 'Vinicius', 5, '93555039032', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `apelido`, `senha`) VALUES
(1, 'ADMIN', '0000'),
(2, 'Marcelo', 'PlanetHemp'),
(3, 'Alexandre', 'CBJR');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carga`
--
ALTER TABLE `carga`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `filial`
--
ALTER TABLE `filial`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carga`
--
ALTER TABLE `carga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `carro`
--
ALTER TABLE `carro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `filial`
--
ALTER TABLE `filial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `motorista`
--
ALTER TABLE `motorista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
