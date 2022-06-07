-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Jun-2022 às 17:32
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.online`
--

DROP TABLE IF EXISTS `tb_admin.online`;
CREATE TABLE IF NOT EXISTS `tb_admin.online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) NOT NULL,
  `ultima_acao` datetime NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_admin.online`
--

INSERT INTO `tb_admin.online` (`id`, `ip`, `ultima_acao`, `token`) VALUES
(38, '::1', '2022-06-03 14:28:57', '629a2ec79f1ea');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.usuarios`
--

DROP TABLE IF EXISTS `tb_admin.usuarios`;
CREATE TABLE IF NOT EXISTS `tb_admin.usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_admin.usuarios`
--

INSERT INTO `tb_admin.usuarios` (`id`, `user`, `password`, `img`, `nome`, `cargo`) VALUES
(1, 'admin', 'admin', '629157efdd439.jpg', 'Marcelo Felix Benites', 2),
(2, 'Marcelo13', '102030', 'photo_2022-05-11_01-54-46.jpg', 'Marcelo13', 0),
(3, 'admin1', 'admin1', '6292a334bc3cf.jpg', 'admin1', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.visitas`
--

DROP TABLE IF EXISTS `tb_admin.visitas`;
CREATE TABLE IF NOT EXISTS `tb_admin.visitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) NOT NULL,
  `dia` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_admin.visitas`
--

INSERT INTO `tb_admin.visitas` (`id`, `ip`, `dia`) VALUES
(1, '::1', '2022-05-18'),
(2, '::1', '2022-05-18'),
(3, '::1', '2022-05-19'),
(4, '199.199.199.199', '2022-05-18'),
(5, '::1', '2022-05-19'),
(6, '::1', '2022-05-20'),
(7, '::1', '2022-05-20'),
(8, '::1', '2022-05-21'),
(9, '::1', '2022-05-21'),
(10, '::1', '2022-05-21'),
(11, '::1', '2022-05-22'),
(12, '::1', '2022-05-24'),
(13, '::1', '2022-05-24'),
(14, '::1', '2022-05-24'),
(15, '::1', '2022-05-24'),
(16, '::1', '2022-05-25'),
(17, '::1', '2022-05-25'),
(18, '::1', '2022-05-25'),
(19, '::1', '2022-05-25'),
(20, '::1', '2022-05-25'),
(21, '::1', '2022-05-25'),
(22, '::1', '2022-05-26'),
(23, '::1', '2022-05-26'),
(24, '::1', '2022-05-26'),
(25, '::1', '2022-05-26'),
(26, '::1', '2022-05-26'),
(27, '::1', '2022-05-26'),
(28, '::1', '2022-05-26'),
(29, '::1', '2022-05-26'),
(30, '::1', '2022-05-26'),
(31, '::1', '2022-05-26'),
(32, '::1', '2022-05-26'),
(33, '::1', '2022-05-26'),
(34, '::1', '2022-05-26'),
(35, '::1', '2022-05-26'),
(36, '::1', '2022-05-26'),
(37, '::1', '2022-05-26'),
(38, '::1', '2022-05-26'),
(39, '::1', '2022-05-26'),
(40, '::1', '2022-05-26'),
(41, '::1', '2022-05-26'),
(42, '::1', '2022-05-26'),
(43, '::1', '2022-05-26'),
(44, '::1', '2022-05-26'),
(45, '::1', '2022-05-26'),
(46, '::1', '2022-05-26'),
(47, '::1', '2022-05-28'),
(48, '::1', '2022-05-28'),
(49, '::1', '2022-06-03'),
(50, '::1', '2022-06-03'),
(51, '::1', '2022-06-03'),
(52, '::1', '2022-06-03'),
(53, '::1', '2022-06-03'),
(54, '::1', '2022-06-03'),
(55, '::1', '2022-06-03'),
(56, '::1', '2022-06-03'),
(57, '::1', '2022-06-03'),
(58, '::1', '2022-06-03'),
(59, '::1', '2022-06-03'),
(60, '::1', '2022-06-03'),
(61, '127.0.0.1', '2022-06-03'),
(62, '::1', '2022-06-03'),
(63, '::1', '2022-06-03'),
(64, '::1', '2022-06-03'),
(65, '::1', '2022-06-03'),
(66, '::1', '2022-06-03'),
(67, '::1', '2022-06-03'),
(68, '::1', '2022-06-03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.banner`
--

DROP TABLE IF EXISTS `tb_site.banner`;
CREATE TABLE IF NOT EXISTS `tb_site.banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.banner`
--

INSERT INTO `tb_site.banner` (`id`, `nome`, `banner`, `order_id`) VALUES
(1, 'banner1', '6297edc78c84a.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.categorias`
--

DROP TABLE IF EXISTS `tb_site.categorias`;
CREATE TABLE IF NOT EXISTS `tb_site.categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.categorias`
--

INSERT INTO `tb_site.categorias` (`id`, `nome`, `slug`, `order_id`) VALUES
(1, 'outro nome editado', 'outro-nome-editado', 1),
(2, 'Minha Categoria de Teste', 'minha-categoria-de-teste', 2),
(8, 'Outra categoria Super Legal mesmo', 'outra-categoria-super-legal-mesmo', 8),
(9, 'tecnologia', 'tecnologia', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.config`
--

DROP TABLE IF EXISTS `tb_site.config`;
CREATE TABLE IF NOT EXISTS `tb_site.config` (
  `titulo` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `titulo_email` varchar(255) NOT NULL,
  `descricao_email` text NOT NULL,
  `nome_autor` varchar(255) NOT NULL,
  `img_autor` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `icone1` varchar(255) NOT NULL,
  `titulo1` varchar(255) NOT NULL,
  `descricao1` text NOT NULL,
  `icone2` varchar(255) NOT NULL,
  `titulo2` varchar(255) NOT NULL,
  `descricao2` text NOT NULL,
  `icone3` varchar(255) NOT NULL,
  `titulo3` varchar(255) NOT NULL,
  `descricao3` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.config`
--

INSERT INTO `tb_site.config` (`titulo`, `logo`, `titulo_email`, `descricao_email`, `nome_autor`, `img_autor`, `descricao`, `icone1`, `titulo1`, `descricao1`, `icone2`, `titulo2`, `descricao2`, `icone3`, `titulo3`, `descricao3`) VALUES
('Programação', 'MB Marcelo Benites', 'Qual o Seu Melhor E-mail?', 'Aproveite agora a super promoção para você sair bem em todos os campos do Marketing Digital', 'Marcelo Benites', '0', 'Meu nome é Marcelo ganho 100.00,00 por mês na internet.\r\nTrabalho com o google ads e como o facebook ads \r\n\r\n', ' fa-brands fa-css3-alt                                                       ', 'CSS3', '  descrição css3\r\n\r\n', ' fa-brands fa-html5', 'HTML5', 'descriçao html5 \r\n', 'fa-brands fa-js', 'JavaScript', 'descriçao javascript\r\n\r\n'),
('Programação', 'MB Marcelo Benites', 'Qual o Seu Melhor E-mail?', 'Aproveite agora a super promoção para você sair bem em todos os campos do Marketing Digital', 'Marcelo Benites', '0', 'Meu nome é Marcelo ganho 100.00,00 por mês na internet.\r\nTrabalho com o google ads e como o facebook ads \r\n\r\n', ' fa-brands fa-css3-alt                                                       ', 'CSS3', '  descrição css3\r\n\r\n', ' fa-brands fa-html5', 'HTML5', 'descriçao html5 \r\n', 'fa-brands fa-js', 'JavaScript', 'descriçao javascript\r\n\r\n'),
('Programação', 'MB Marcelo Benites', 'Qual o Seu Melhor E-mail?', 'Aproveite agora a super promoção para você sair bem em todos os campos do Marketing Digital', 'Marcelo Benites', 'photo_2022-05-11_01-54-46', 'Meu nome é Marcelo ganho 100.00,00 por mês na internet.\r\nTrabalho com o google ads e como o facebook ads \r\n\r\n', ' fa-brands fa-css3-alt                                                       ', 'CSS3', '  descrição css3\r\n\r\n', ' fa-brands fa-html5', 'HTML5', 'descriçao html5 \r\n', 'fa-brands fa-js', 'JavaScript', 'descriçao javascript\r\n\r\n'),
('Programação', 'MB Marcelo Benites', 'Qual o Seu Melhor E-mail?', 'Aproveite agora a super promoção para você sair bem em todos os campos do Marketing Digital', 'Marcelo Benites', 'photo_2022-05-11_01-54-46.jpg', 'Meu nome é Marcelo ganho 100.00,00 por mês na internet.\r\nTrabalho com o google ads e como o facebook ads \r\n\r\n', ' fa-brands fa-css3-alt                                                       ', 'CSS3', '  descrição css3\r\n\r\n', ' fa-brands fa-html5', 'HTML5', 'descriçao html5 \r\n', 'fa-brands fa-js', 'JavaScript', 'descriçao javascript\r\n\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.config2`
--

DROP TABLE IF EXISTS `tb_site.config2`;
CREATE TABLE IF NOT EXISTS `tb_site.config2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `img_banner` varchar(255) NOT NULL,
  `img_descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.depoimentos`
--

DROP TABLE IF EXISTS `tb_site.depoimentos`;
CREATE TABLE IF NOT EXISTS `tb_site.depoimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `depoimento` text NOT NULL,
  `data` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.depoimentos`
--

INSERT INTO `tb_site.depoimentos` (`id`, `nome`, `depoimento`, `data`, `order_id`) VALUES
(9, ' Marcelo Benites', 'Muito Boa essa loja mesmo', '24/05/2022', 1),
(6, 'Celo Benites', 'Nossa muito bom isso da DC', '24/05/2022', 2),
(7, 'Juliana', 'Eu nem acredito que isso saiu', '24/05/2022', 4),
(8, 'Leno Rodrigues', 'Nossa eu não sabia disso muito bom mesmo', '24/05/2022', 3),
(10, 'Livia', 'Oi eu sou afilhada do Marcelo', '25/05/2022', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.img_autor`
--

DROP TABLE IF EXISTS `tb_site.img_autor`;
CREATE TABLE IF NOT EXISTS `tb_site.img_autor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `img_autor` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.img_autor`
--

INSERT INTO `tb_site.img_autor` (`id`, `nome`, `img_autor`, `order_id`) VALUES
(1, 'eu', '6298dcdb7e21f.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.logo`
--

DROP TABLE IF EXISTS `tb_site.logo`;
CREATE TABLE IF NOT EXISTS `tb_site.logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.logo`
--

INSERT INTO `tb_site.logo` (`id`, `nome`, `logo`, `order_id`) VALUES
(5, 'logo9', '6297e7cbc260e.jpg', 5),
(4, 'logo10', '6297da76b4093.jpg', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.noticias`
--

DROP TABLE IF EXISTS `tb_site.noticias`;
CREATE TABLE IF NOT EXISTS `tb_site.noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `conteudo` text NOT NULL,
  `capa` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.noticias`
--

INSERT INTO `tb_site.noticias` (`id`, `categoria_id`, `data`, `titulo`, `conteudo`, `capa`, `slug`, `order_id`) VALUES
(13, 9, '2022-06-01', ' Como fazer um site web 3.0', '<p>exemplo de conte&uacute;do</p>', '6297a68391b4a.jpg', '-como-fazer-um-site-web-3.0', 13),
(14, 1, '2022-06-01', ' como ganhar dinheiro com o web 3.0', '<p>um exemplo de texto editado</p>', '6297a7ffb715f.jpg', '-como-ganhar-dinheiro-com-o-web-3.0', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.servicos`
--

DROP TABLE IF EXISTS `tb_site.servicos`;
CREATE TABLE IF NOT EXISTS `tb_site.servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servico` text NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.servicos`
--

INSERT INTO `tb_site.servicos` (`id`, `servico`, `order_id`) VALUES
(1, 'Aprenda a desenha Faça algo incrível editado', 1),
(2, 'Aprenda Marketing digital isso mesmo.', 2),
(3, 'Faça compras na nossa loja virtual acesse aqui', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.slides`
--

DROP TABLE IF EXISTS `tb_site.slides`;
CREATE TABLE IF NOT EXISTS `tb_site.slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `slide` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.slides`
--

INSERT INTO `tb_site.slides` (`id`, `nome`, `slide`, `order_id`) VALUES
(1, 'Meu teste 2', '628e809d447e3.jpg', 4),
(2, 'slide 2', '628e78f881c64.jpg', 2),
(4, 'slide 3', '628e815c18e78.png', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
