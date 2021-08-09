CREATE TABLE `tb_cliente` (
  `cli_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(120) DEFAULT NULL,
  `cli_data_nascimento` date DEFAULT NULL,
  `cli_email` varchar(180) DEFAULT NULL,
  `cli_sexo` char(1) DEFAULT NULL,
  `cli_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cli_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
