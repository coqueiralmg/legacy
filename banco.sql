/*
SQLyog Ultimate v10.42 
MySQL - 5.6.17 : Database - coqueiral
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`coqueiral` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `coqueiral`;

/*Table structure for table `banner` */

DROP TABLE IF EXISTS `banner`;

CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(60) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `ativo` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `banner` */

insert  into `banner`(`id`,`titulo`,`descricao`,`banner`,`ativo`) values (1,'Porsche','hahaha','public/storage/banner/large/55634a8312897.jpg',1),(2,'outro','sadasdsa','public/storage/banner/large/556097524c6b3.jpg',0),(3,'outro','sadasdsa','public/storage/banner/large/556474184fd71.jpg',1);

/*Table structure for table `destaque` */

DROP TABLE IF EXISTS `destaque`;

CREATE TABLE `destaque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `destaque` */

insert  into `destaque`(`id`,`titulo`,`foto`,`link`,`ativo`) values (3,'Destaque de testes','public/storage/destaque-foto/558160921bb87.jpg','http://clickdisk.com.br/busca',1);

/*Table structure for table `legislacao` */

DROP TABLE IF EXISTS `legislacao`;

CREATE TABLE `legislacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `data` datetime NOT NULL,
  `arquivo` varchar(100) NOT NULL,
  `numero` varchar(60) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `legislacao` */

insert  into `legislacao`(`id`,`titulo`,`descricao`,`data`,`arquivo`,`numero`,`ativo`) values (1,'LegislaÃ§Ã£o de teste','<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>hdgd4145df5gdf</p>\r\n<p>dfg754df4gdf</p>\r\n</body>\r\n</html>','2015-05-31 02:49:00','public/storage/legislacao-arquivo/556aa47325af3.pdf','455554165487',1),(2,'Scan0002.pdf','<p>Scan0002.pdf</p>','2015-06-09 00:00:00','public/storage/legislacao-arquivo/55772c2a77f00.pdf','55772c2a77f00',1),(3,'Scan0001.pdf','<p>Scan0001.pdf</p>','2015-06-09 00:00:00','public/storage/legislacao-arquivo/55772c2dd9272.pdf','55772c2dd9272',1),(4,'SINTEGRA','<p>SINTEGRA</p>','2015-06-09 15:15:29','public/storage/legislacao-arquivo/55772d413063d.pdf','55772d413063d',1),(5,'Google Maps','<p>Google Maps</p>','2015-06-09 15:15:29','public/storage/legislacao-arquivo/55772d413f0a0.pdf','55772d413f0a0',1);

/*Table structure for table `licitacao` */

DROP TABLE IF EXISTS `licitacao`;

CREATE TABLE `licitacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `dataInicio` datetime NOT NULL,
  `dataTermino` datetime NOT NULL,
  `edital` varchar(100) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `licitacao` */

insert  into `licitacao`(`id`,`titulo`,`descricao`,`dataInicio`,`dataTermino`,`edital`,`ativo`) values (1,'LicitaÃ§Ã£o de testes','<p>teste de descri&ccedil;&atilde;o de licita&ccedil;&atilde;o</p>','2015-05-31 13:19:00','2015-06-25 13:19:00','public/storage/licitacao-edital/556351025c0e6.pdf',1);

/*Table structure for table `log` */

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_log_usuario_idx` (`usuario`),
  CONSTRAINT `fk_log_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

/*Data for the table `log` */

insert  into `log`(`id`,`usuario`,`data`) values (1,1,'2015-05-21 23:42:35'),(2,1,'2015-05-23 10:01:21'),(3,1,'2015-05-24 12:59:53'),(4,1,'2015-05-24 14:25:38'),(5,1,'2015-05-25 00:37:12'),(6,1,'2015-05-25 12:20:06'),(7,1,'2015-05-25 12:24:49'),(8,3,'2015-05-25 12:24:58'),(9,3,'2015-05-25 12:43:30'),(10,1,'2015-05-25 12:43:48'),(11,3,'2015-05-25 12:53:18'),(12,1,'2015-05-25 13:03:11'),(13,1,'2015-05-25 15:35:01'),(14,1,'2015-05-26 10:22:41'),(15,1,'2015-05-26 12:47:11'),(16,1,'2015-05-27 12:44:35'),(17,1,'2015-05-27 14:40:12'),(18,1,'2015-05-28 12:48:04'),(19,1,'2015-05-28 13:34:39'),(20,1,'2015-05-31 02:04:17'),(21,1,'2015-06-09 10:40:00'),(22,1,'2015-06-09 10:42:02'),(23,1,'2015-06-09 10:42:38'),(24,1,'2015-06-09 10:49:17'),(25,1,'2015-06-09 15:45:47'),(26,1,'2015-06-09 20:26:30'),(27,1,'2015-06-16 20:47:59'),(28,1,'2015-06-17 08:56:29');

/*Table structure for table `noticia` */

DROP TABLE IF EXISTS `noticia`;

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `post` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_noticia_post_idx` (`post`),
  CONSTRAINT `fk_noticia_post` FOREIGN KEY (`post`) REFERENCES `post` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `noticia` */

insert  into `noticia`(`id`,`texto`,`foto`,`post`) values (1,'&lt;p&gt;dsfdsfsdfsd&lt;/p&gt;','public/storage/noticia-foto/large/5560867e9cb89.jpg',5),(2,'<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>sdfklgdsufdsauifdsfdsfd ddfgfdgfdgf fdgdfdlg</p>\r\n</body>\r\n</html>','public/storage/noticia-foto/large/5560875a87eeb.jpg',6),(3,'<p><strong>dfsdfsdfs dsfdsfsd &nbsp; dsfsdffdsfsd</strong></p>','public/storage/noticia-foto/large/55635c85db273.png',7),(4,'<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>asdsadsadsda</p>\r\n</body>\r\n</html>','public/storage/noticia-foto/large/55608f4b4a70f.jpg',8),(5,'<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Diante de grande expectativa na Su&iacute;&ccedil;a, Joseph Blatter discursou na abertura do 65&ordm; congresso da Fifa, iniciado oficialmente nesta quinta-feira, em Zurique. O dirigente reconheceu o momento dif&iacute;cil da entidade e afirmou que os corruptos s&atilde;o minoria no futebol e devem ser combatidos.</p>\r\n<p>- Devo salientar que aqueles que s&atilde;o corruptos no futebol s&atilde;o uma minoria, como na sociedade. Mas, como na sociedade, devem ser pegos - afirmou ele, um dia ap&oacute;s sete pessoas ligadas &agrave; Fifa serem presas acusadas de corrup&ccedil;&atilde;o e outros crimes em a&ccedil;&atilde;o do Departamento de Justi&ccedil;a dos EUA em conjunto com a Su&iacute;&ccedil;a.</p>\r\n<p>Ele ressaltou que as a&ccedil;&otilde;es enfrentadas na quarta-feira s&atilde;o uma sombra sobre a modalidade e que atitudes devem ser tomadas para evitar que o nome da Fifa seja \"arrastado para a lama\".<br /><br />- Estes s&atilde;o tempos sem precedentes e dif&iacute;ceis para a Fifa. Os acontecimentos de ontem lan&ccedil;aram uma longa sombra sobre futebol e sobre o congresso desta semana. A&ccedil;&otilde;es de indiv&iacute;duos, se comprovadas, trazem vergonha e humilha&ccedil;&atilde;o no futebol e demanda a&ccedil;&otilde;es e mudan&ccedil;as de todos n&oacute;s. N&atilde;o podemos permitir que a reputa&ccedil;&atilde;o da Fifa para ser arrastado pela lama por mais tempo - disse.&nbsp;</p>\r\n<p>Blatter comentou que os pr&oacute;ximos meses ser&atilde;o dif&iacute;ceis para a entidade e que ele n&atilde;o descarta mais den&uacute;ncias em rela&ccedil;&atilde;o &agrave; Fifa nos pr&oacute;ximos meses.<br /><br />- Os pr&oacute;ximos meses n&atilde;o ser&atilde;o f&aacute;ceis para a Fifa. Estou certo que mais not&iacute;cias ruins podem aparecer. Mas &eacute; necess&aacute;rio come&ccedil;ar a restaurar a confian&ccedil;a na nossa organiza&ccedil;&atilde;o. Deixemos esse ser o ponto da virada.<br /><br />O presidente do &oacute;rg&atilde;o que comanda o futebol finalizou: - Amanh&atilde;, no congresso, n&oacute;s teremos a oportunidade de come&ccedil;ar na longa e dif&iacute;cil estrada para reconstruir a confian&ccedil;a. N&oacute;s precisamos ganhar de volta atrav&eacute;s de decis&otilde;es que tomaremos e as decis&otilde;es que tomaremos individualmente.</p>\r\n</body>\r\n</html>','public/storage/noticia-foto/large/55676f828ef0c.jpg',9),(6,'<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>As despesas de brasileiros no exterior continuaram em queda no m&ecirc;s de abril, quando somaram US$ 1,64 bilh&atilde;o, informou o Banco Central nesta ter&ccedil;a-feira (26). Trata-se do menor valor para meses de abril desde 2010, quando totalizaram US$ 1,22 bilh&atilde;o.</p>\r\n<p>A queda de despesas no exterior acontece em um ano no qual o d&oacute;lar tem registrado alta, apesar da queda em abril. No m&ecirc;s passado, a moeda norte-americana recuou 5,57%, para R$ 3,01. Na parcial dos quatro primeiros meses de 2015, por&eacute;m, o d&oacute;lar teve alta de 13,33%.</p>\r\n<p>O d&oacute;lar mais alto encarece as passagens e os hot&eacute;is cotados em moeda estrangeira, al&eacute;m dos produtos comprados l&aacute; fora. A valoriza&ccedil;&atilde;o da moeda norte-americana tamb&eacute;m encarece os gastos com cart&otilde;es de cr&eacute;dito e d&eacute;bito no exterior &ndash; que sofrem a incid&ecirc;ncia, ainda, do Imposto Sobre Opera&ccedil;&otilde;es Financeiras (IOF) de 6,38%.</p>\r\n<p><strong>Acumulado do ano</strong><br /> Nos quatro primeiros meses deste ano, ainda segundo informa&ccedil;&otilde;es da autoridade monet&aacute;ria, as despesas de brasileiros no exterior somaram US$ 6,87 bilh&otilde;es. Com isso, registraram queda de 16% frente ao mesmo per&iacute;odo do ano passado (US$ 8,18 bilh&otilde;es). De acordo com o Banco Central, os gastos de brasileiros no exterior s&atilde;o os menores, para o primeiro quadrimestre de um ano, desde 2011 - quando somaram US$ 6,7 bilh&otilde;es.</p>\r\n</body>\r\n</html>','public/storage/noticia-foto/large/556767d791508.jpg',10),(7,'<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div class=\"glb-bloco\">\r\n<div class=\"glb-grid-8\">\r\n<div id=\"glb-materia\" class=\"hfeed hentry\">\r\n<div class=\"share-bar share-bar-container share-theme-natural\" data-title=\"Senado aprova MP que aumenta tributos sobre produtos importados\" data-url=\"http://g1.globo.com/politica/noticia/2015/05/senado-aprova-mp-que-aumenta-tributos-sobre-produtos-importados.html\" data-image-url=\"http://s2.glbimg.com/DJKCCecHkWM2jBF75F4dHCHhunk=/1200x630/s03.video.glbimg.com/320x200/4213482.jpg\" data-hashtags=\"#G1\">\r\n<div class=\"wm-poster-play\" style=\"opacity: 0.6; top: 125.5px; left: 251.5px; display: block; visibility: visible;\">O <a class=\"premium-tip\" href=\"http://g1.globo.com/tudo-sobre/senado-federal/\">Senado</a> aprovou nesta quinta-feira (28) a medida provis&oacute;ria (MP) 668, que aumenta impostos sobre produtos importados, incluindo cerveja, produtos farmac&ecirc;uticos e cosm&eacute;ticos. Como j&aacute; foi aprovada pela C&acirc;mara, a proposta segue agora para san&ccedil;&atilde;o presidencial.</div>\r\n</div>\r\n<div id=\"materia-letra\" class=\"materia-conteudo entry-content\">\r\n<div>\r\n<p>A mat&eacute;ria &eacute; a terceira MP do governo para ajustar as contas p&uacute;blicas aprovada pelo Congresso Nacional. Nos &uacute;ltimos dois dias, o Senado aprovou as<a href=\"http://g1.globo.com/politica/noticia/2015/05/senado-aprova-mp-que-restringe-o-acesso-ao-seguro-desemprego.html\"> MPs 665</a>, que limita o acesso ao seguro-desemprego, ao abono salarial e ao seguro-defeso, e <a href=\"http://g1.globo.com/politica/noticia/2015/05/senado-aprova-texto-base-da-mp-que-restringe-acesso-pensao-por-morte.html\">664</a>, que restringe as pens&otilde;es por morte, ambas consideradas essenciais para o ajuste fiscal.</p>\r\n<div id=\"entenda_o_caso_255\" class=\"entenda-o-caso componente_materia\">&nbsp;<a class=\"box-entenda-o-caso\" href=\"http://g1.globo.com/economia/\"> <img class=\"foto-caso\" src=\"http://s2.glbimg.com/SfJalu3-_GQfANaB8_pCqfT2Hpc=/0x141:1700x906/300x135/s.glbimg.com/jo/g1/f/original/2015/04/20/levy.jpg\" alt=\"\" width=\"300\" height=\"135\" /></a>\r\n<div class=\"conteudo\">\r\n<div class=\"titulo\">AJUSTE FISCAL</div>\r\n<div class=\"sub-titulo\">Governo corta gastos e sobe impostos</div>\r\n</div>\r\n<ul class=\"lista-de-links\">\r\n<li class=\"link\"><a href=\"http://g1.globo.com/economia/noticia/2015/05/entenda-por-que-o-governo-precisa-fazer-o-ajuste-fiscal-em-2015.html\">entenda</a></li>\r\n<li class=\"link\"><a href=\"http://g1.globo.com/economia/noticia/2015/05/veja-como-sera-o-ajuste-fiscal-do-governo-e-em-que-ele-afeta-sua-vida.html\">efeitos para os brasileiros</a></li>\r\n<li class=\"link\"><a href=\"http://g1.globo.com/economia/noticia/2015/05/entenda-medidas-do-ajuste-fiscal.html\">medidas do ajuste</a></li>\r\n</ul>\r\n</div>\r\n<p>Para completar as altera&ccedil;&otilde;es enviadas ao Legislativo, o Congresso ainda tem de avaliar o projeto de lei que sobe a tributa&ccedil;&atilde;o sobre a folha de pagamentos. A C&acirc;mara ainda n&atilde;o come&ccedil;ou a apreciar o assunto.<br /><br /> O governo argumenta que as medidas tamb&eacute;m visam corrigir distor&ccedil;&otilde;es da economia brasileira.</p>\r\n<p>A estimativa do governo &eacute; que, com a aprova&ccedil;&atilde;o da MP 668, a arrecada&ccedil;&atilde;o anual com importa&ccedil;&otilde;es aumente em R$ 1,19 bilh&atilde;o a partir de 2016. S&oacute; neste ano, o impacto seria de R$ 694 milh&otilde;es. Pelo texto aprovado, a al&iacute;quota do PIS-Pasep para a entrada de bens importados no pa&iacute;s passa de 1,65% para 2,1%. No caso da Cofins, vai de 7,6% para 9,65%.</p>\r\n<p>O Executivo diz que, al&eacute;m de aumentar a arrecada&ccedil;&atilde;o, a medida visa a proteger a ind&uacute;stria nacional.</p>\r\n<p><strong>Altera&ccedil;&otilde;es</strong><br /> Nesta quinta, os senadores mantiveram no texto um artigo inserido pelos deputados que autoriza a C&acirc;mara e o Senado a celebrar parcerias p&uacute;blico-privadas (PPPs), prerrogativa que hoje &eacute; apenas do Executivo.</p>\r\n<p>A mudan&ccedil;a &eacute; de interesse especial do atual comando da C&acirc;mara porque viabiliza a constru&ccedil;&atilde;o de mais pr&eacute;dios para abrigar gabinetes parlamentares, incluindo um shopping, que est&aacute; em discuss&atilde;o na Casa. Pelas PPPs, a iniciativa privada arca com a obra e, em contrapartida, pode explorar servi&ccedil;os ou &aacute;reas do empreendimento.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</body>\r\n</html>','public/storage/noticia-foto/large/556767df80d2d.png',11),(8,'<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>','public/storage/noticia-foto/large/556aa0cfd6184.jpg',15),(9,'<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>sdfdsfsdfdf</p>\r\n</body>\r\n</html>','public/storage/noticia-foto/large/5576ef0515c87.jpg',16);

/*Table structure for table `partido` */

DROP TABLE IF EXISTS `partido`;

CREATE TABLE `partido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `logo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `partido` */

insert  into `partido`(`id`,`nome`,`sigla`,`logo`) values (1,'Partido Trabalhista','PT','public/storage/partido-logo/556228630ec4d.jpg');

/*Table structure for table `pessoa` */

DROP TABLE IF EXISTS `pessoa`;

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `apelido` varchar(45) DEFAULT NULL,
  `dataNascimento` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `pessoa` */

insert  into `pessoa`(`id`,`nome`,`apelido`,`dataNascimento`) values (1,'PlÃ­nio JosÃ© Naves','Plinio','1990-06-30'),(2,'Fulano de Tal','Fulaninho','1969-12-31'),(3,'Ciclano de Tal','ciclaninho','2015-05-24');

/*Table structure for table `politico` */

DROP TABLE IF EXISTS `politico`;

CREATE TABLE `politico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partido` int(11) NOT NULL,
  `tipo` tinyint(4) NOT NULL,
  `usuario` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `falecimento` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_politico_usuario_idx` (`usuario`),
  KEY `fk_politico_partido_idx` (`partido`),
  CONSTRAINT `fk_politico_partido` FOREIGN KEY (`partido`) REFERENCES `partido` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_politico_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `politico` */

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `dataPostagem` datetime NOT NULL,
  `dataAlteracao` datetime DEFAULT NULL,
  `visualizacoes` bigint(20) DEFAULT '0',
  `destaque` tinyint(1) NOT NULL DEFAULT '0',
  `ativo` tinyint(1) NOT NULL DEFAULT '0',
  `autor` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_post_usuario_idx` (`autor`),
  CONSTRAINT `fk_post_usuario` FOREIGN KEY (`autor`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*Data for the table `post` */

insert  into `post`(`id`,`titulo`,`dataPostagem`,`dataAlteracao`,`visualizacoes`,`destaque`,`ativo`,`autor`) values (1,'Minecraft: CHUME LABS - DOWNLOAD DO MAPA! ','2015-05-25 14:00:57','2015-05-31 00:32:28',4,0,1,1),(3,'GOLS DA ZUEIRA - LIBERTADORES E COPA DO BRASIL ','2015-05-21 21:39:45','2015-06-09 20:35:54',4,1,1,1),(4,'PEGADINHA: Carona ( Ride Prank ) ','2015-05-25 14:03:58','2015-05-31 00:33:53',1,0,1,1),(5,'Teste','2015-05-23 10:54:06',NULL,0,0,0,1),(6,'Nova NotÃ­cia','2015-05-23 10:57:46','2015-05-26 12:23:13',0,0,0,1),(7,'Noticia de teste','2015-05-23 11:00:39','2015-05-25 14:32:25',2,0,0,1),(8,'sasdasdsad','2015-05-23 11:31:39','2015-05-26 12:23:17',0,0,0,1),(9,'Na abertura de congresso da Fifa, Blatter diz que corruptos sÃ£o minoria','2015-05-23 11:32:30','2015-05-28 16:41:54',12,0,1,1),(10,'Gasto de brasileiros no exterior Ã© o menor para abril em 5 anos','2015-05-23 11:33:05','2015-05-28 16:09:11',6,0,1,1),(11,'Senado aprova MP que aumenta tributos sobre produtos importados','2015-05-28 15:24:44','2015-06-09 20:31:44',7,1,1,1),(14,'VÃ­deo de teste','2015-05-31 02:04:35','2015-06-09 20:26:55',3,1,0,1),(15,'sdfdsfsdfdsfsd','2015-05-31 02:48:52','2015-06-09 20:31:35',2,1,1,1),(16,'Teste de NotÃ­cia','2015-06-09 10:49:57','2015-06-09 20:31:07',2,1,1,1);

/*Table structure for table `prefeito` */

DROP TABLE IF EXISTS `prefeito`;

CREATE TABLE `prefeito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partido` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `falecimento` date DEFAULT NULL,
  `sobre` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_politico_usuario_idx` (`usuario`),
  KEY `fk_politico_partido_idx` (`partido`),
  KEY `fk_vereador_tipo_idx` (`tipo`),
  CONSTRAINT `fk_prefeito_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_prefeito_partido` FOREIGN KEY (`partido`) REFERENCES `partido` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_prefeito_tipo` FOREIGN KEY (`tipo`) REFERENCES `tipoprefeito` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `prefeito` */

insert  into `prefeito`(`id`,`partido`,`tipo`,`usuario`,`foto`,`falecimento`,`sobre`) values (1,1,1,2,'public/storage/prefeito-foto/556601af8a5e2.jpg','0000-00-00','Teste de sobre o vereador');

/*Table structure for table `tipoprefeito` */

DROP TABLE IF EXISTS `tipoprefeito`;

CREATE TABLE `tipoprefeito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tipoprefeito` */

insert  into `tipoprefeito`(`id`,`descricao`) values (1,'Presidente'),(2,'2Âº Presidente');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(70) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '0',
  `nivel` tinyint(4) NOT NULL,
  `pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_pessoa_idx` (`pessoa`),
  CONSTRAINT `fk_usuario_pessoa` FOREIGN KEY (`pessoa`) REFERENCES `pessoa` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`usuario`,`email`,`senha`,`ativo`,`nivel`,`pessoa`) values (1,'pnaves','pliniopjn@gmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220',1,2,1),(2,'fulanotal123','outro@hotmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220',1,1,2),(3,'ciclano','ciclano@email.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220',1,1,3);

/*Table structure for table `video` */

DROP TABLE IF EXISTS `video`;

CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video` varchar(100) NOT NULL,
  `post` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_video_post_idx` (`post`),
  CONSTRAINT `fk_video_post` FOREIGN KEY (`post`) REFERENCES `post` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `video` */

insert  into `video`(`id`,`video`,`post`) values (1,'https://www.youtube.com/watch?v=r3eK7NUyMtk',1),(3,'https://www.youtube.com/watch?v=gEfWrvS8xBM',3),(4,'https://www.youtube.com/watch?v=-4OIOBfs_EM',4),(5,'https://www.youtube.com/watch?v=tJE1dEHiq8o',14);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
