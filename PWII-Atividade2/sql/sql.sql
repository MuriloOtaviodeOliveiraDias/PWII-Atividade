-- Criação do banco de dados (execute primeiro)
CREATE DATABASE  farmacia_pwii;

-- Seleciona o banco criado
USE farmacia_pwii;

-- Criação da tabela produtos (execute depois)
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    descricao TEXT,
    quantidade INT NOT NULL DEFAULT 0,
    categoria VARCHAR(50),
    cantinho_produto VARCHAR(50),
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ativo BOOLEAN DEFAULT TRUE
);

-- Inserção de dados de teste (opcional)
INSERT INTO produtos (nome, marca, preco, descricao, quantidade, categoria) 
VALUES 
('Paracetamol 750mg', 'Genérico', 12.90, 'Analgésico e antitérmico', 100, 'Medicamentos'),
('Ibuprofeno 400mg', 'Advil', 18.50, 'Anti-inflamatório não esteroidal', 50, 'Medicamentos');