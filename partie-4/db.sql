-- Active: 1678706437666@@127.0.0.1@3306@travail_collaboratif
CREATE DATABASE travail_collaboratif;

USE travail_collaboratif;

-- TABLE UTILISATEUR :
CREATE TABLE `utilisateur` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    d_naissance DATE,
    mail VARCHAR(50) UNIQUE NOT NULL,
    mdp VARCHAR(15),
    CHECK (CHAR_LENGTH(mail) BETWEEN 5 AND 50),
    CHECK (CHAR_LENGTH(mdp) BETWEEN 4 AND 15)
);


