-- Criação da tabela "Alunos"
CREATE TABLE Alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    matricula VARCHAR(9) NOT NULL UNIQUE,
    nome VARCHAR(255) NOT NULL
);


-- Criação da tabela "Chapas"
CREATE TABLE Chapas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(3) NOT NULL UNIQUE,
    nome VARCHAR(255) NOT NULL,
    lider INT NOT NULL,
    vice_lider INT NOT NULL,
    FOREIGN KEY (lider) REFERENCES Alunos(id) ON DELETE CASCADE,
    FOREIGN KEY (vice_lider) REFERENCES Alunos(id) ON DELETE CASCADE
    -- Adicionando a opção ON DELETE CASCADE para a chave estrangeira Alunos
);


-- Criação da tabela "Votos"
CREATE TABLE Votos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    aluno INT NOT NULL,
    chapa INT NOT NULL,
    FOREIGN KEY (aluno) REFERENCES Alunos(id) ON DELETE CASCADE,
    FOREIGN KEY (chapa) REFERENCES Chapas(id) ON DELETE CASCADE
);

