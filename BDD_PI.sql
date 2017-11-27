DROP DATABASE IF EXISTS emballe_pese;
CREATE DATABASE emballe_pese;
USE emballe_pese;

DROP TABLE IF EXISTS Categorie;
CREATE TABLE Categorie(
  id_categorie INT(11),
  Categorie ENUM('fermier', 'consommateur', 'gerant'),
  PRIMARY KEY (id_categorie)
);

DROP TABLE IF EXISTS User;
CREATE TABLE User(
  id_user INT(11),
  Categorie INT(11),
  Nom VARCHAR(45),
  Prenom VARCHAR(45),
  Adresse VARCHAR(45),
  Tel VARCHAR(45),
  Mail VARCHAR(45),
  Mdp VARCHAR(45),
  PRIMARY KEY(id_user),
  FOREIGN KEY (Categorie)  REFERENCES Categorie (id_categorie)
);

DROP TABLE IF EXISTS Cmd_vente;
CREATE TABLE Cmd_vente(
  id_cmd_vente INT(11),
  Consommateur INT NULL,
  Paye bool,
  Livre bool,
  Date_cmd DATE,
  PRIMARY KEY (id_cmd_vente),
  FOREIGN KEY (Consommateur)
  REFERENCES User (Categorie)
);

DROP TABLE IF EXISTS Ligne_cmd_vente;
CREATE TABLE Ligne_cmd_vente(
  id_ligne_cmd_vente INT(11),
  cmd_vente INT,
  Produit INT,
  Qte INT,
  Prix_facture INT,
  PRIMARY KEY (id_ligne_cmd_vente),
  FOREIGN KEY (cmd_vente)
  REFERENCES Cmd_vente (id_cmd_vente),
  FOREIGN KEY (Produit)
  REFERENCES Produit (id_produit)
);

DROP TABLE IF EXISTS Produit;
CREATE TABLE Produit(
  id_produit INT(11),
  Type INT,
  Article INT,
  Nom VARCHAR(45),
  Qte_stock INT,
  Stock_mini INT,
  Marge INT,
  PRIMARY KEY (id_produit),
  FOREIGN KEY (Type)
  REFERENCES Type (id_type),
  FOREIGN KEY (Article)
  REFERENCES Article (id_article)
);

DROP TABLE IF EXISTS Type;
CREATE TABLE Type(
  id_type INT(11),
  Type VARCHAR(45),
  PRIMARY KEY (id_type)
);

DROP TABLE IF EXISTS Article;
CREATE TABLE Article(
  id_article INT(11),
  Composition VARCHAR(45),
  Nom VARCHAR(45),
  DLC DATE,
  Date_crea DATE,
  Prix_achat INT,
  Label INT,
  Fermier VARCHAR(45),
  PRIMARY KEY (id_article),
  FOREIGN KEY (Label)
  REFERENCES Label (id_label)
);

DROP TABLE IF EXISTS Label;
CREATE TABLE Label(
  id_label INT(11),
  Label VARCHAR(45),
  PRIMARY KEY (id_label)
);

DROP TABLE IF EXISTS Ligne_cmd_achat;
CREATE TABLE Ligne_cmd_achat(
  id_ligne_cmd_achat INT(11),
  Cmd_achat INT,
  Article INT,
  Qte INT,
  Prix_facture INT,
  PRIMARY KEY (id_ligne_cmd_achat),
  FOREIGN KEY (Cmd_achat)
  REFERENCES Cmd_achat (id_cmd_achat),
  FOREIGN KEY (Article)
  REFERENCES Article (id_article)
);

DROP TABLE IF EXISTS Cmd_achat;
CREATE TABLE Cmd_achat(
  id_cmd_achat INT(11),
  Paye bool,
  Livre bool,
  Date_cmd DATE,
  Fermier INT,
  PRIMARY KEY (id_cmd_achat),
    FOREIGN KEY (Fermier)
    REFERENCES User (Categorie)
);