CREATE DATABASE IF NOT EXISTS projeto_db;

USE projeto_db;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Inserir alguns dados de exemplo
INSERT INTO usuarios (nome, email) VALUES
    ('Usuário Teste 1', 'usuario1@teste.com'),
    ('Usuário Teste 2', 'usuario2@teste.com'); 