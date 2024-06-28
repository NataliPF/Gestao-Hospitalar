

CREATE DATABASE IF NOT EXISTS gestao_hospitalar;

USE gestao_hospitalar;

CREATE TABLE tbl_pacientes (

id_paciente INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50),
sobrenome VARCHAR(50),
email VARCHAR(50),
cep INT,
logradouro VARCHAR(100),
numero INT,
bairro VARCHAR(50),
cidade VARCHAR(50),
uf CHAR(2),
id_status INT,
id_prontuario INT,
FOREIGN KEY id_status REFERENCES tbl_status(id_status),
FOREIGN KEY id_prontuario REFERENCES tbl_prontuarios(id_prontuario)
);

CREATE TABLE tbl_prontuarios(

id_prontuario INT AUTO_INCREMENT PRIMARY KEY,
data_cadastro DATETIME
);

CREATE TABLE tbl_status(

id_status INT AUTO_INCREMENT PRIMARY KEY,
descricao VARCHAR(20)
);

CREATE TABLE tbl_funcionarios(

id_funcionario INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50),
sobrenome VARCHAR(50),
id_cargo INT,
id_status INT, 
FOREIGN KEY id_cargo REFERENCES tbl_cargos(id_cargo),
FOREIGN KEY id_status REFERENCES tbl_status(id_status)
);

CREATE TABLE tbl_cargos(
    id_cargo INT AUTO_INCREMENT PRIMARY KEY,
    descricao_cargo VARCHAR(50) I
);

CREATE TABLE tbl_exames(
    id_exame INT AUTO_INCREMENT PRIMARY KEY,
    id_prontuario INT, 
    id_funcionario INT,
    id_procedimentos INT,
    FOREIGN KEY id_prontuario REFERENCES tbl_prontuarios(id_prontuario),
    FOREIGN KEY id_funcionario REFERENCES tbl_funcionarios(id_funcionario),
    FOREIGN KEY id_procedimentos REFERENCES tbl_procedimentos_exame(id_procedimentos),
    data_solicitacao DATETIME
);

CREATE TABLE tbl_consultas(
    id_consulta INT AUTO_INCREMENT PRIMARY KEY,
    id_prontuario INT,
    id_funcionario INT,
    FOREIGN KEY id_prontuario REFERENCES tbl_prontuarios(id_prontuario),
    FOREIGN KEY id_funcionario REFERENCES tbl_funcionarios(id_funcionario),
    detalhes VARCHAR(200)
);

CREATE TABLE tbl_procedimentos_exame(
    id_procedimentos INT AUTO_INCREMENT PRIMARY KEY,
    id_tipo_procedimento INT,
    FOREIGN KEY id_tipo_procedimento REFERENCES tbl_tipos_procedimento(id_tipo_procedimento)
);

CREATE TABLE tbl_tipos_procedimento(
    id_tipo_procedimento INT AUTO_INCREMENT PRIMARY KEY,
    descricao_procedimento VARCHAR(255)
);


