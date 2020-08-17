-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Ago-2020 às 03:10
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32



--
-- Banco de dados: `teste`
--
Create database teste;
-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `email`, `senha`) VALUES
(1, 'silvio@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `turma` int(11) NOT NULL,
  `dta_matricula` date NOT NULL DEFAULT current_timestamp(),
  `situacao` varchar(35) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `logradouro` varchar(80) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `estado` varchar(80) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(80) DEFAULT NULL,
  `curso_c` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`codigo`, `nome`) VALUES
(200, 'Psicologia');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `curso_c` (`curso_c`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `Cursp` FOREIGN KEY (`curso_c`) REFERENCES `curso` (`codigo`);
COMMIT;


