-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jan-2016 às 01:51
-- Versão do servidor: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fatec-aracatuba`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE IF NOT EXISTS `acessos` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `data_inscricao` date NOT NULL,
  `alterado_em` date NOT NULL,
  `tg_pdf` varchar(300) COLLATE utf8_bin NOT NULL,
  `id_turma` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `data_inscricao`, `alterado_em`, `tg_pdf`, `id_turma`) VALUES
(12, 'Lissandro Silva Santos', '2015-11-14', '0000-00-00', 'TGs/f8743a1f88def843416259a2726aa8c989fc5e94.png', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE IF NOT EXISTS `avisos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `conteudo` text COLLATE utf8_bin NOT NULL,
  `data_envio` datetime NOT NULL,
  `data_alteracao` datetime NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `avisos`
--

INSERT INTO `avisos` (`id`, `titulo`, `conteudo`, `data_envio`, `data_alteracao`, `ativo`, `id_usuario`) VALUES
(1, 'Teste de alteração de horário 2', 'Outro teste de alteração de horário', '0000-00-00 00:00:00', '2016-01-05 19:10:39', 1, 1),
(2, 'Teste alteração de horário', 'Teste alteração de horário', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 2),
(3, 'Teste 3', 'Formatação de horário já!', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL,
  `data_envio` datetime NOT NULL,
  `alterado_em` datetime NOT NULL,
  `banner_img` varchar(300) COLLATE utf8_bin NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `data_envio`, `alterado_em`, `banner_img`, `ativo`) VALUES
(16, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Banners/background-picture.jpg', 0),
(17, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Banners/kawaii_toast_and_toaster_love_by_nickbachman (1).png', 0),
(18, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Banners/colorful-triangles-background.jpg', 0),
(20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Banners/30db253d1ab15172d0686ddc342c878f57227562.png', 0),
(21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Banners/619cbd5b69ae9f8ae8ef6fa12cab7e2ebe39152f.png', 1),
(22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Banners/946e044b5261138f4e612f1c938dc550c46f567d.png', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `criado_em` datetime NOT NULL,
  `alterado_em` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `criado_em`, `alterado_em`) VALUES
(1, 'Biocombustíveis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Análise e Desen. de Sistemas', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `id` int(11) NOT NULL,
  `data_envio` datetime NOT NULL,
  `alterado_em` datetime NOT NULL,
  `horario_pdf` varchar(255) COLLATE utf8_bin NOT NULL,
  `semestre` int(11) NOT NULL,
  `ano` year(4) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`id`, `data_envio`, `alterado_em`, `horario_pdf`, `semestre`, `ano`, `id_curso`, `ativo`) VALUES
(14, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Horarios/b003abf777033d4070cf79d657a94e0c457648d5.png', 1, 2013, 2, 0),
(15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Horarios/def6613e3b7b06f660dbc18bbdbc0a88ca3a44dd.png', 2, 2015, 1, 1),
(16, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Horarios/a37a6a1d61100b414cb50754a76e4b44feb9a3d5.png', 2, 2014, 1, 0),
(17, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Horarios/cc89027a3d74646ce7f7ff4ef1cd1adfc6587bb7.jpg', 2, 2015, 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `mail` varchar(100) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `message` mediumtext COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `mail`
--

INSERT INTO `mail` (`id`, `name`, `mail`, `phone`, `message`, `created_at`) VALUES
(1, 'Luana Inada', 'luana_inada@hotmail.com', '(18)3631-2732', 'Olá. Tudo bem?\r\nEstou enviando essa mensagem para testar a funcionalidade de email.\r\nObrigada por lê-la e até mais.', '2015-12-18 09:51:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE IF NOT EXISTS `turmas` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) CHARACTER SET latin1 NOT NULL,
  `semestre` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_termino` date NOT NULL,
  `curso` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `descricao`, `semestre`, `data_inicio`, `data_termino`, `curso`) VALUES
(5, 'Turma do 2º Semestre do curso de Análise e Desen. de Sistemas de 2013', 2, '2013-08-04', '2016-08-01', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `username` varchar(30) COLLATE utf8_bin NOT NULL,
  `senha` varchar(30) COLLATE utf8_bin NOT NULL,
  `foto` varchar(300) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(30) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(20) COLLATE utf8_bin NOT NULL,
  `data_inscricao` datetime NOT NULL,
  `alterado_em` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `username`, `senha`, `foto`, `tipo`, `telefone`, `data_inscricao`, `alterado_em`) VALUES
(1, 'Administradora Santos', 'luana.i.s.santos.93@gmail.com', 'administrador', 'adm', 'photos_users/dc2bb3c0eff533c3c46aff20e0dfc63055257e67.jpg', 'administrador', '(18)3631-2732', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Teste da Silva', 'teste@teste.com', 'teste', 'teste', '', 'usuario', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`), ADD KEY `id_turma` (`id_turma`);

--
-- Indexes for table `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`), ADD KEY `id_curso` (`id_curso`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
ADD CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`id_turma`) REFERENCES `turmas` (`id`);

--
-- Limitadores para a tabela `horarios`
--
ALTER TABLE `horarios`
ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
