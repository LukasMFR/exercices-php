-- Création de la base de données exo8 si elle n'existe pas
CREATE DATABASE IF NOT EXISTS exo8;
USE exo8;

-- Création de la table users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Vérification et suppression des données existantes pour éviter les doublons
TRUNCATE TABLE users;

-- Insertion de données exemple dans la table users
INSERT INTO users (nom, email) VALUES ('Alice Dupont', 'alice.dupont@example.com');
INSERT INTO users (nom, email) VALUES ('Bob Martin', 'bob.martin@example.com');
INSERT INTO users (nom, email) VALUES ('Cécile Dujardin', 'cecile.dujardin@example.com');
INSERT INTO users (nom, email) VALUES ('David Éloi', 'david.eloi@example.com');
INSERT INTO users (nom, email) VALUES ('Émilie Bouchard', 'emilie.bouchard@example.com');
INSERT INTO users (nom, email) VALUES ('François Lemaire', 'francois.lemaire@example.com');
INSERT INTO users (nom, email) VALUES ('Ghislaine Barot', 'ghislaine.barot@example.com');
INSERT INTO users (nom, email) VALUES ('Hervé Dupuis', 'herve.dupuis@example.com');
INSERT INTO users (nom, email) VALUES ('Isabelle Morin', 'isabelle.morin@example.com');
INSERT INTO users (nom, email) VALUES ('Jeanne D’Arc', 'jeanne.darc@example.com');
INSERT INTO users (nom, email) VALUES ('Kévin Chaloux', 'kevin.chaloux@example.com');
INSERT INTO users (nom, email) VALUES ('Léa Fontaine', 'lea.fontaine@example.com');
INSERT INTO users (nom, email) VALUES ('Maurice Chevalier', 'maurice.chevalier@example.com');
INSERT INTO users (nom, email) VALUES ('Nathalie Portman', 'nathalie.portman@example.com');
INSERT INTO users (nom, email) VALUES ('Olivier Giroud', 'olivier.giroud@example.com');
INSERT INTO users (nom, email) VALUES ('Patricia Conde', 'patricia.conde@example.com');
INSERT INTO users (nom, email) VALUES ('Quentin Mosimann', 'quentin.mosimann@example.com');
INSERT INTO users (nom, email) VALUES ('Rosalie Verte', 'rosalie.verte@example.com');
INSERT INTO users (nom, email) VALUES ('Stéphanie de Monaco', 'stephanie.monaco@example.com');
INSERT INTO users (nom, email) VALUES ('Thierry Henry', 'thierry.henry@example.com');
