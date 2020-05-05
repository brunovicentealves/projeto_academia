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
sobrenome_usuario varchar(100),
email_usuario varchar(45),
telefone varchar(15),
senha_usuario varchar(100),
endereco varchar(100),
cep varchar(10),
complemento varchar(100),
cidade varchar(100),
pais varchar(100),
estado varchar(10),
numero int
);

-- -----------------
-- TABELA PROFESSOR
-- -----------------

CREATE TABLE professor(
id_professor int AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome_professor varchar(100),
sobrenome_professor varchar(100),
cref_professor varchar(45),
email_professor varchar(45),
telefone varchar(15),
senha_professor varchar(45),
endereco varchar(100),
cep varchar(10),
complemento varchar(100),
cidade varchar(100),
pais varchar(100),
estado varchar(10),
numero int
);

-- ----------------------
-- TABELA PROFESSOR_ALUNO
-- ----------------------

CREATE TABLE professor_usuario(
id_professor_usuario int AUTO_INCREMENT NOT NULL PRIMARY KEY,
id_professor int,
id_usuario int
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
torax double,
cintura double,
abdomen double ,
quadril double ,
antebraco_esquerdo double ,
antebraco_direito double ,
braco_esquerdo double ,
braco_direito double,
coxa_esquerdo double ,
coxa_direito double ,
panturrilha_esquerda double ,
panturrilha_direita double ,
data_avaliacao date ,
id_ficha int
);

-- ------------------------
-- TABELA TREINO DOS ALUNOS
-- ------------------------

CREATE TABLE treino (
id_treino int AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome_treino varchar(100),
descricao_treino varchar(100),
id_tipo_treino int,
id_ficha int
);

-- -----------------------------
-- TABELA TIPO TREINO DOS ALUNO
-- -----------------------------

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
-- -------------------------------------------------
-- RELACIONAMENTO  ENTRE AS TABELAS
-- -------------------------------------------------

-- -------------------------------------------------
-- RELACIONAMENTO  ENTRE A TABELA FICHA E AVALIACAO
-- -------------------------------------------------
ALTER TABLE avaliacao ADD CONSTRAINT  FOREIGN KEY(id_ficha) REFERENCES ficha(id_ficha);

-- -------------------------------------------------
-- RELACIONAMENTO  ENTRE A TABELA FICHA E USUARIO
-- -------------------------------------------------
ALTER TABLE ficha ADD CONSTRAINT  FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario);

-- ----------------------------------------------------------
-- RELACIONAMENTO  ENTRE A TABELA PROFESSOR_USUARIO E USUARIO
-- ----------------------------------------------------------

ALTER TABLE professor_usuario ADD CONSTRAINT  FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario);

-- -------------------------------------------------------------
-- RELACIONAMENTO  ENTRE A TABELA PROFESSOR_USUARIO E PROFESSOR
-- -------------------------------------------------------------
ALTER TABLE professor_usuario ADD CONSTRAINT  FOREIGN KEY(id_professor) REFERENCES professor(id_professor);

-- -------------------------------------
-- RELACIONAMENTO  ENTRE TABELA TREINO E FICHA
-- -------------------------------------

ALTER TABLE treino ADD CONSTRAINT  FOREIGN KEY(id_ficha) REFERENCES ficha(id_ficha);

-- ---------------------------------------------------
-- RELACIONAMENTO  ENTRE A TABELA EXERCICIOS E TREINO
-- ---------------------------------------------------

ALTER TABLE exercicio ADD CONSTRAINT  FOREIGN KEY(id_treino) REFERENCES treino(id_treino);

-- ---------------------------------------
-- RELACIONAMENTO  ENTRE TABELA DIETA E CARDAPIO
-- ---------------------------------------
ALTER TABLE dieta ADD CONSTRAINT  FOREIGN KEY(id_cardapio) REFERENCES cardapio(id_cardapio);

-- ----------------------------------------------------
-- RELACIONAMENTO  ENTRE A TABELA TREINO E TIPO_TREINO
-- ----------------------------------------------------

ALTER TABLE treino ADD CONSTRAINT  FOREIGN KEY(id_tipo_treino) REFERENCES tipo_treino (id_tipo_treino);

-- ----------------------------------------------------
-- RELACIONAMENTO  ENTRE A TABELA CARDAPIO E FICHA
-- ----------------------------------------------------

ALTER TABLE cardapio ADD CONSTRAINT  FOREIGN KEY(id_ficha) REFERENCES ficha(id_ficha);