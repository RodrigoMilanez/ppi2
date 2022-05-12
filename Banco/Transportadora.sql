DROP TABLE IF EXISTS motorista;
DROP TABLE IF EXISTS destinatario;
DROP TABLE IF EXISTS remetente;
DROP TABLE IF EXISTS carro;
DROP TABLE IF EXISTS carga;
DROP TABLE IF EXISTS filial;
DROP TABLE IF EXISTS usuario;



CREATE TABLE motorista (
    id int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome varchar(255) NOT NULL,
    id_carro int(11) NOT NULL,
    cpf varchar(11) NOT NULL,
    id_filial int(11) NOT NULL,
    foto varchar(255) NOT NULL
);

CREATE TABLE carga (
    id int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    produto varchar(100) NOT NULL,
    id_motorista  int(11) NOT NULL,
    destino varchar(100) NOT NULL,
    saida  int(11) NOT NULL,
    status_ char(1)NOT NULL
);

CREATE TABLE carro (
    id int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    placa varchar(8) NOT NULL,
    modelo varchar(100) NOT NULL,
    id_filial int(11) NOT NULL
);

CREATE TABLE filial (
    id int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    localidade varchar(100) NOT NULL
);

CREATE TABLE usuario (
    id int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    apelido varchar(100) NOT NULL,
    senha varchar(100) NOT NULL,
);

INSERT INTO filial(localidade) VALUES ( "Criciúma");
INSERT INTO filial(localidade) VALUES ("Lages");

INSERT INTO usuario(apelido,senha) VALUES ("ADMIN","4a7d1ed414474e4033ac29ccb8653d9b");
INSERT INTO usuario(apelido,senha) VALUES ("Marcelo","PlanetHemp");
INSERT INTO usuario(apelido,senha) VALUES ("Alexandre","CBJR");


INSERT INTO carro(placa, modelo, id_filial) VALUES ("856-GBA", "Sandero", 1);
INSERT INTO carro(placa, modelo, id_filial)  VALUES ("584-GJO", "Minivan", 1);
INSERT INTO carro(placa, modelo, id_filial)  VALUES ("451-LPO", "Palio", 1);
INSERT INTO carro(placa, modelo, id_filial)  VALUES ("879-POR", "Clio", 2);
INSERT INTO carro(placa, modelo, id_filial)  VALUES ("908-EQU", "Prius", 2);

INSERT INTO motorista(nome, id_carro, cpf, id_filial, foto) VALUES ("Alexandre", 1 , "43084962090" , 1 ,'default.jpg');
INSERT INTO motorista(nome, id_carro, cpf, id_filial, foto) VALUES ("Marina", 2 , "89410480019" , 1 ,'default.jpg');
INSERT INTO motorista(nome, id_carro, cpf, id_filial, foto) VALUES ("João", 3 , "61492650056" , 1 ,'default.jpg');
INSERT INTO motorista(nome, id_carro, cpf, id_filial, foto) VALUES ("Marcelo", 4 , "57791931001" , 2 ,'default.jpg');
INSERT INTO motorista(nome, id_carro, cpf, id_filial, foto) VALUES ("Vinicius", 5 , "93555039032" , 2 ,'default.jpg');

INSERT INTO carga(produto, id_motorista, destino, status_) VALUES 
("Computador", 1 , "Içara", "A");
INSERT INTO carga(produto, id_motorista, destino,  status_) VALUES 
("Documentos corporativos", 2, "Palhoça" , "A");
INSERT INTO carga(produto, id_motorista, destino, status_) VALUES 
("Peça industrial", 3 , "Torres", "A");
INSERT INTO carga(produto, id_motorista, destino, status_) VALUES 
("Peça industrial", 4 , "Rio do Sul", "A");
INSERT INTO carga(produto, id_motorista, destino, status_) VALUES 
("Peça industrial", 5 , "Florianópolis", "A");
INSERT INTO carga(produto, id_motorista, destino, status_) VALUES 
("Peça industrial", 1 , "Criciúma", "C");
INSERT INTO carga(produto, id_motorista, destino, status_) VALUES 
("Peça industrial", 2 , "Curitiba", "C");