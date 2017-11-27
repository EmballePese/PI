DELETE FROM Categorie;
INSERT INTO Categorie VALUES('1', 'gerant');
INSERT INTO Categorie VALUES('2', 'consommateur');
INSERT INTO Categorie VALUES('3', 'fermier');

DELETE FROM User;
INSERT INTO User VALUES('1', '1', 'admin', 'muller', '7 rue du 19 mars 1962', '0640788914', 'muller@intechinfo.fr', '1234batterie1234');
INSERT INTO User VALUES('2', '2', 'consommateur', 'CHICHE', '7 rue Pierre et Marie Curie', '0640788915', 'chiche@intechinfo.fr', '123batterie123');
INSERT INTO User VALUES('3', '3', 'fermier', 'Theo', '7 rue Val Plaisance', '0640788916', 'theo@intechinfo.fr', '12batterie12');




