-- ------------
--  NOME BANCO
-- ------------
CREATE DATABASE academia;

-- --------------
-- TABELA USUARIO
-- --------------

CREATE TABLE usuario (
id_usuario int AUTO_INCREMENT  NOT NULL PRIMARY KEY,
nome_usuario varchar(100),
email_usuario varchar(45),
senha_usuario varchar(100),
endereco varchar(100),
cep varchar(10),
complemento varchar(100)
);

-- -----------------
-- TABELA PROFESSOR
-- -----------------

CREATE TABLE professor(
id_professor int AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome_professor varchar(100),
cref_professor varchar(45),
email_professor varchar(45),
senha_professor varchar(45),
endereco varchar(100),
cep varchar(10),
complemento varchar(100)
);

-- ----------------------
-- TABELA PROFESSOR_ALUNO
-- ----------------------

CREATE TABLE professor_usuario(
id_professor_aluno int AUTO_INCREMENT NOT NULL PRIMARY KEY,
id_professor int,
id_aluno int
);

-- ---------------------
-- TABELA FICHA DO ALUNO
-- ---------------------

CREATE TABLE ficha(
id_ficha int AUTO_INCREMENT NOT NULL PRIMARY KEY,
objetivo_ficha varchar(100),
id_usuario int
);

-- -------------------------
-- TABELA AVALIACAO DO ALUNO
-- -------------------------

CREATE TABLE avaliacao(
id_avaliacao int AUTO_INCREMENT NOT NULL PRIMARY KEY,
peso double,
altura double,
imc double,
rendimento varchar(100),
id_ficha int
);




