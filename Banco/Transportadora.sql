DROP TABLE IF EXISTS motorista;
DROP TABLE IF EXISTS destinatario;
DROP TABLE IF EXISTS remetente;
DROP TABLE IF EXISTS carro;
DROP TABLE IF EXISTS carga;
DROP TABLE IF EXISTS filial;


CREATE TABLE motorista (
    id int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome varchar(255) NOT NULL,
    id_carro int(11) NOT NULL,
    cpf varchar(11) NOT NULL,
    id_filial int(11) NOT NULL
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

INSERT INTO filial(localidade) VALUES ( "Criciúma");
INSERT INTO filial(localidade) VALUES ("Lages");


INSERT INTO carro(placa, modelo, id_filial) VALUES ("856-GBA", "Sandero", 1);
INSERT INTO carro(placa, modelo, id_filial)  VALUES ("584-GJO", "Minivan", 1);
INSERT INTO carro(placa, modelo, id_filial)  VALUES ("451-LPO", "Palio", 1);
INSERT INTO carro(placa, modelo, id_filial)  VALUES ("879-POR", "Clio", 2);
INSERT INTO carro(placa, modelo, id_filial)  VALUES ("908-EQU", "Prius", 2);

INSERT INTO motorista(nome, id_carro, cpf, id_filial) VALUES ("Alexandre", 1 , "43084962090" , 1 );
INSERT INTO motorista(nome, id_carro, cpf, id_filial) VALUES ("Marina", 2 , "89410480019" , 1 );
INSERT INTO motorista(nome, id_carro, cpf, id_filial) VALUES ("João", 3 , "61492650056" , 1 );
INSERT INTO motorista(nome, id_carro, cpf, id_filial) VALUES ("Marcelo", 4 , "57791931001" , 2 );
INSERT INTO motorista(nome, id_carro, cpf, id_filial) VALUES ("Vinicius", 5 , "93555039032" , 2 );

INSERT INTO carga(produto, id_motorista, destino, saida, status_) VALUES 
("Computador", 1 , "Içara", "Criciúma", "A");
INSERT INTO carga(produto, id_motorista, destino, saida, status_) VALUES 
("Documentos corporativos", 2 , "Tubarão", "Criciúma", "A");
INSERT INTO carga(produto, id_motorista, destino, saida, status_) VALUES 
("Peça industrial", 3 , "Torres", "Criciúma", "A");
INSERT INTO carga(produto, id_motorista, destino, saida, status_) VALUES 
("Peça industrial", 4 , "Rio do Sul", "São José", "A");
INSERT INTO carga(produto, id_motorista, destino, saida, status_) VALUES 
("Peça industrial", 5 , "Florianópolis", "Lages", "A");
INSERT INTO carga(produto, id_motorista, destino, saida, status_) VALUES 
("Peça industrial", 1 , "Criciúma", "Porto Alegre", "C");
INSERT INTO carga(produto, id_motorista, destino, saida, status_) VALUES 
("Peça industrial", 2 , "Curitiba", "Criciúma", "C");