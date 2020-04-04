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
-- TABELA AVALIACAO DOS ALUNO
-- -------------------------

CREATE TABLE avaliacao(
id_avaliacao int AUTO_INCREMENT NOT NULL PRIMARY KEY,
peso double,
altura double,
imc double,
rendimento varchar(100),
id_ficha int
);

-- ------------------------
-- TABELA TREINO DOS ALUNOS
-- ------------------------

CREATE TABLE treino (
id_treino int AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome_treino varchar(100),
descricao_treino varchar(100),
id_tipo int,
id_fica int
);

-- -------------------
-- TABELA TIPO TREINO DOS ALUNO
CREATE TABLE tipo_treino(
id_tipo_treino int AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome_tipo_treino varchar(100)
);

-- --------------------------
-- TABELA EXERCICIO DOS ALUNO
-- --------------------------

CREATE TABLE exercicio(
id_exercicio int AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome_exercicio varchar(100),
serie varchar(45),
repeticoes varchar(100),
carga varchar(100),
descanso varchar(100),
descricao_exercicio varchar(100),
id_treino int
);

-- --------------------------
-- TABELA CARDAPIO DOS ALUNOS
-- --------------------------
CREATE TABLE cardapio(
id_cardapio int  AUTO_INCREMENT NOT NULL PRIMARY KEY,
descricao_cardapio varchar(100),
id_ficha int
);

-- -----------------------
-- TABELA DIETA DOS ALUNOS
-- -----------------------
CREATE TABLE dieta (
id_dieta int AUTO_INCREMENT not null PRIMARY KEY,
nome_dieta varchar(100),
alimento varchar(45),
quantidade varchar(45),
id_cardapio int
);




