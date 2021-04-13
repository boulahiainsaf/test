CREATE DATABASE automobile ;
 USE DATABASE automobil ;

 CREATE TABLE voiture(
 id_voiture INT PRIMARY KEY NOT NULL AUTO_INCREMENT ;
 modéle_voiture VARCHAR(225) NOT NULL;
 typr_voiture  VARCHAR(225) NOT NULL;
 prix  DECIMAL NOT NULL ;
 date_vente  DATE 
 )

 CREATE TABLE entretien()
 id_voiture INT NOT NULL;
 id_entretien INT PRIMARY KEY NOT NULL AUTO_INCREMENT;
 type_entretien VARCHAR(225) ;
 date_entretien DATE;
 FOREIGN KEY (id_voiture) REFERENCES voiture(id_voiture)
 )
 CREATE TABLE vente(
     id_vente INT PRIMARY KEY NOT NULL AUTO_INCREMENT ;
     date_vente  DATE ;
     type_contrat_vente VARCHAR NOT NULL;
     client VARCHAR(225) NOT NULL;
     FOREIGN KEY (date_vente) REFERENCES voiture(date_vent);
 )
 CREATE TABLE accessoire(
     id_accessoire INT PRIMARY KEY NOT NULL AUTO_INCREMENT;
 )

