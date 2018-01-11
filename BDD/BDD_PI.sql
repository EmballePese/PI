DROP DATABASE IF EXISTS emballe_pese;
CREATE DATABASE emballe_pese;
USE emballe_pese;

DROP TABLE IF EXISTS Categorie;
CREATE TABLE Categorie(
  id_categorie INT(11) NOT NULL AUTO_INCREMENT,
  Categorie ENUM('fermier', 'consommateur', 'gerant'),
  PRIMARY KEY (id_categorie)
);

DROP TABLE IF EXISTS Label;
CREATE TABLE Label(
  id_label INT(11) NOT NULL AUTO_INCREMENT,
  Label VARCHAR(45),
  PRIMARY KEY (id_label)
);

DROP TABLE IF EXISTS Type;
CREATE TABLE Type(
  id_type INT(11) NOT NULL AUTO_INCREMENT,
  Type VARCHAR(45),
  PRIMARY KEY (id_type)
);

DROP TABLE IF EXISTS User;
CREATE TABLE User(
  id_user INT(11) NOT NULL AUTO_INCREMENT,
  Categorie INT(11) NOT NULL,
  Nom VARCHAR(45),
  Prenom VARCHAR(45),
  Adresse VARCHAR(60),
  CP VARCHAR(5),
  Ville VARCHAR(45),
  Tel VARCHAR(12),
  Mail VARCHAR(60),
  Mdp VARCHAR(45),
  Status ENUM('Actif','Ban'),
  Avatar BLOB,
  PRIMARY KEY(id_user),
  FOREIGN KEY (Categorie) REFERENCES Categorie (id_categorie) on delete cascade
);

DROP TABLE IF EXISTS Cmd_achat;
CREATE TABLE Cmd_achat(
  id_cmd_achat INT(11) NOT NULL AUTO_INCREMENT,
  Paye ENUM('oui', 'non'),
  Livre ENUM('oui', 'non'),
  Date_cmd DATE,
  Fermier INT(11) NOT NULL,
  PRIMARY KEY (id_cmd_achat),
  FOREIGN KEY (Fermier) REFERENCES User (Categorie) on delete cascade 
);

DROP TABLE IF EXISTS Article;
CREATE TABLE Article(
  id_article INT(11) NOT NULL AUTO_INCREMENT,
  Composition VARCHAR(45),
  Nom VARCHAR(45),
  DLC DATE,
  Date_crea DATE,
  Prix_achat FLOAT(6),
  Label INT(11) NOT NULL,
  Fermier VARCHAR(45),
  Statut ENUM('A vendre', 'Achete', 'Vendu'),
  PRIMARY KEY (id_article),
  FOREIGN KEY (Label) REFERENCES Label (id_label) on delete cascade
);

DROP TABLE IF EXISTS Ligne_cmd_achat;
CREATE TABLE Ligne_cmd_achat(
  id_ligne_cmd_achat INT(11) NOT NULL AUTO_INCREMENT,
  Cmd_achat INT(11) NOT NULL,
  Article INT(11) NOT NULL,
  Qte INT(4),
  Prix_facture FLOAT(6),
  PRIMARY KEY (id_ligne_cmd_achat),
  FOREIGN KEY (Cmd_achat) REFERENCES Cmd_achat (id_cmd_achat) on delete cascade,
  FOREIGN KEY (Article) REFERENCES Article (id_article) on delete cascade
);

DROP TABLE IF EXISTS Produit;
CREATE TABLE Produit(
  id_produit INT(11) NOT NULL AUTO_INCREMENT,
  Type INT(11) NOT NULL,
  Article INT(11) NOT NULL,
  Nom VARCHAR(45),
  Qte_stock INT(4),
  Stock_mini INT(3),
  Marge FLOAT(4),
  Prix_total FLOAT(6),
  PRIMARY KEY (id_produit),
  FOREIGN KEY (Type)  REFERENCES Type (id_type) on delete cascade,
  FOREIGN KEY (Article) REFERENCES Article (id_article) on delete cascade
);

DROP TABLE IF EXISTS Cmd_vente;
CREATE TABLE Cmd_vente(
  id_cmd_vente INT(11) NOT NULL AUTO_INCREMENT,
  Consommateur INT(11) NOT NULL,
  Paye ENUM('oui', 'non'),
  Livre ENUM('Market', 'House'),
  Date_cmd DATE,
  Date_livraison DATE,
  PRIMARY KEY (id_cmd_vente),
  FOREIGN KEY (Consommateur)  REFERENCES User (id_user) on delete cascade
);

DROP TABLE IF EXISTS Ligne_cmd_vente;
CREATE TABLE Ligne_cmd_vente(
  id_ligne_cmd_vente INT(11) NOT NULL AUTO_INCREMENT,
  cmd_vente INT(11) NOT NULL,
  Produit INT(11) NOT NULL,
  Qte INT(2),
  Prix_facture FLOAT(6),
  PRIMARY KEY (id_ligne_cmd_vente),
  FOREIGN KEY (cmd_vente) REFERENCES Cmd_vente (id_cmd_vente) on delete cascade,
  FOREIGN KEY (Produit) REFERENCES Produit (id_produit) on delete cascade
);
