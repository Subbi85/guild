--- Erstelle Member Tabelle
CREATE TABLE member
(
id serial,
charname varchar(20),
realm varchar(20),
class integer,
role varchar(20),
PRIMARY KEY (id),
FOREIGN KEY (class) REFERENCES classes(id)
);

--- Member laut Discordliste 
INSERT INTO member(charname, realm, class, role)
VALUES
('Amaterasû','Anetheron',1,'tank'),
('Sinnerella','Guldan',6,'tank'),
('Parulor','Anetheron',11,'melee'),
('Tack','Guldan',12,'melee'),
('Corruption','Thrall',2,'melee'),
('Darkeddie','Rajaxx',7,'melee'),
('Sinopa','Anetheron',2,'melee'),
('Aywi','Rajaxx',4,'melee'),
('Tievy','Anetheron',7,'melee'),
('Valafar','Guldan',12,'melee'),
('Menardius','Guldan',4,'melee'),
('Lýnxx','Anetheron',8,'melee'),
('Nyalarthotep','Anetheron',4,'melee'),
('Subbì','Anetheron',5,'heal'),
('Kreischi','Nathrezim',7,'heal'),
('Büffelhüfte','Thrall',7,'heal'),
('Ginflut','Anetheron',10,'heal'),
('Damari','Anetheron',9,'ranged'),
('Pitfall','Anetheron',8,'ranged'),
('Gefearfach','Anetheron',9,'ranged'),
('Hauie','Anetheron',3,'ranged'),
('Machtgeil','Rajaxx',8,'ranged'),
('Lorelin','Anetheron',8,'ranged'),
('Sêppêl','Guldan',3,'ranged'),
('Vinkly','Anetheron',9,'ranged'),
('Nanir','Anetheron',9,'ranged'),
('Swarloz','Anetheron',11,'ranged')

---Klassentabelle
CREATE TABLE classes
(id serial,
name varchar(20) not null,
color varchar(20) not null,
PRIMARY KEY(id)
);

--- Inserts Klassen
INSERT INTO classes (id,name, color)
VALUES
('1','Krieger','#C79C6E'),
('2','Paladin','#F58CBA'),
('3','Jäger','#ABD473'),
('4','Schruke','#FFF569'),
('5','Priester','#FFFFFF'),
('6','Todesritter','#C41F3B'),
('7','Schamane','#0070DE'),
('8','Magier','#69CCF0'),
('9','Hexenmeister','#9482C9'),
('10','Mönch','#00FF96'),
('11','Druide','#FF7D0A'),
('12','Dämonenjäger','#A330C9'),
PRIMARY KEY(id)

--- Rollentabelle
CREATE TABLE roles
(id serial,
role varchar(20),
PRIMARY KEY(id)
);

---Inserts Rollen
INSERT INTO roles(role)
VALUES
('tank'),
('heal'),
('ranged'),
('melee')