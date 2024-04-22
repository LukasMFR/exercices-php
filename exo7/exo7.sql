CREATE DATABASE IF NOT EXISTS exo7;

USE exo7;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Insérer des données exemple
INSERT INTO users (nom, email) VALUES ('Alice Dupont', 'alice.dupont@example.com');
INSERT INTO users (nom, email) VALUES ('Bob Martin', 'bob.martin@example.com');
