CREATE TABLE `tb_login` (
  `log_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `log_nome` varchar(120) DEFAULT NULL,
  `log_login` varchar(20) DEFAULT NULL,
  `log_senha` varchar(30) DEFAULT NULL,
  `log_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_codigo`),
  UNIQUE KEY `log_login` (`log_login`),
  UNIQUE KEY `log_nome` (`log_nome`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

