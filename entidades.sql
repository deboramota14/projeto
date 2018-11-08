CREATE DATABASE basaar;
USE basaar;
CREATE TABLE tblProduto (
	idProduto INT AUTO_INCREMENT not null,
	nomeproduto VARCHAR (60) not null,
	descricao VARCHAR(100) not null,
	tipoproduto VARCHAR (100) not null,
	preco VARCHAR(20) not null,

	PRIMARY KEY (idProduto)

) engine = innodb;

CREATE TABLE tblUsuario (
	idUsuario INT AUTO_INCREMENT not null,
	nomeusuario VARCHAR(60),
	dataNasci DATE,
	cpf VARCHAR(11),
	email VARCHAR(100),
	telefone VARCHAR(8),
	sexo VARCHAR(1),
	senha VARCHAR (8),
	tipouser INT,

	PRIMARY KEY(idUsuario)
) engine = innodb;

CREATE TABLE tblCategoria (	
	idCategoria INT AUTO_INCREMENT not null,
	idProduto int not null,
	PRIMARY KEY(idCategoria),
	FOREIGN KEY(idProduto) REFERENCES tblProduto(idProduto)
) engine = innodb;

CREATE TABLE tblPedido (
	idPedido INT AUTO_INCREMENT not null,
	precofrete VARCHAR (8),
	idProduto int,
	nomeproduto VARCHAR (60) not null,
	unidade VARCHAR(2) not null,
	PRIMARY KEY (IdPedido),
	FOREIGN KEY (idProduto) REFERENCES tblProduto(idProduto)
) engine = innodb;
