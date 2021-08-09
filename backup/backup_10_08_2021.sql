set foreign_key_checks=0;


#
# //Criação da Tabela : tb_cliente
#

CREATE TABLE `tb_cliente` (
  `cli_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(120) DEFAULT NULL,
  `cli_data_nascimento` date DEFAULT NULL,
  `cli_email` varchar(180) DEFAULT NULL,
  `cli_sexo` char(1) DEFAULT NULL,
  `cli_data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`cli_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_cliente VALUES('1', 'Luis Ed', '2021-02-11', 'luised@gmail.com', 'F', '2021-02-19 22:14:41')
,('5', 'afsf', '2021-03-18', '33@asfas', 'M', '2021-03-26 21:27:20')
;

#
# //Criação da Tabela : tb_fornecedor
#

CREATE TABLE `tb_fornecedor` (
  `for_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `for_nome` varchar(120) DEFAULT NULL,
  `for_fone` varchar(14) DEFAULT NULL,
  `for_cel` varchar(15) DEFAULT NULL,
  `for_email` varchar(180) DEFAULT NULL,
  `for_data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`for_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_fornecedor VALUES('7', 'ITTASrs', '33', '03929', 'sfasf@afikjas', '2021-03-26 22:07:27')
,('8', 'tESTE', '222222222', '333333333', '1DGDG@DSGDG', '2021-03-26 22:17:37')
;

#
# //Criação da Tabela : tb_itens_venda
#

CREATE TABLE `tb_itens_venda` (
  `ite_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ven_codigo` int(11) DEFAULT NULL,
  `pro_codigo` int(11) DEFAULT NULL,
  `ite_valor_unit` decimal(7,2) DEFAULT NULL,
  `ite_qtde` int(11) DEFAULT NULL,
  `ite_total` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`ite_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#


#
# //Criação da Tabela : tb_login
#

CREATE TABLE `tb_login` (
  `log_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `log_nome` varchar(120) DEFAULT NULL,
  `log_login` varchar(20) DEFAULT NULL,
  `log_senha` varchar(30) DEFAULT NULL,
  `log_data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`log_codigo`),
  UNIQUE KEY `log_login` (`log_login`),
  UNIQUE KEY `log_nome` (`log_nome`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_login VALUES('5', 'luis', 'luis', 'luis', '2021-02-19 22:15:05')
,('11', 'teste2', 'teste2', 'teste2 ', '2021-05-14 22:39:30')
;

#
# //Criação da Tabela : tb_news
#

CREATE TABLE `tb_news` (
  `new_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `new_titulo` varchar(120) DEFAULT NULL,
  `new_descricao` varchar(250) DEFAULT NULL,
  `new_autor` varchar(100) DEFAULT NULL,
  `new_data_publicacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `new_status` char(1) DEFAULT NULL,
  PRIMARY KEY (`new_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_news VALUES('1', 'testeaaaa', '2242Sfasf', 'sfasfsafAAAAAAAAAA', '2021-05-14 22:38:33', 'I')
;

#
# //Criação da Tabela : tb_produto
#

CREATE TABLE `tb_produto` (
  `pro_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `pro_descricao` varchar(200) DEFAULT NULL,
  `pro_qtde` int(5) DEFAULT NULL,
  `pro_preco` decimal(6,2) DEFAULT NULL,
  `pro_data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `pro_status` char(1) DEFAULT NULL,
  `pro_foto` varchar(250) DEFAULT NULL,
  `for_codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`pro_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_produto VALUES('5', 'Testew', '22', '33.00', '2021-03-26 22:22:38', 'A', 'Testew', '8')
,('8', 'produto', '200', '100.00', '2021-06-08 22:13:32', 'A', '', '7')
;

#
# //Criação da Tabela : tb_venda
#

CREATE TABLE `tb_venda` (
  `ven_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cli_codigo` int(11) DEFAULT NULL,
  `ven_tipo_pagamento` int(1) DEFAULT NULL,
  `ven_data` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ven_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_venda VALUES('31', '1', '1', '2021-07-29 22:15:53')
;
