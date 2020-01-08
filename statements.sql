--- Erstelle Member Tabelle
CREATE TABLE members
(id int IDENTITY (1,1) not null,
charname varchar(20),
realm varchar(20),
classId INT NOT NULL FOREIGN KEY REFERENCES classes(id),
roleId INT NOT NULL FOREIGN KEY REFERENCES roles(id),
PRIMARY KEY (id)
);

--- Member laut Discordliste 
INSERT INTO members (charname, realm, classId, roleId)
VALUES
('Amaterasû','Anetheron',1,1),
('Skairipa','Guldan',12,1),
('Tack','Guldan',4,4),
('Lýnxx','Anetheron', 4,4),
('Sinopa','Anetheron',2,4),
('Trepuur','Guldan',1,4),
('Lâxûs','Guldan',2,4),
('Valafar','Anetheron',12,4),
('Veily','Anetheron',6,4),
('Darkeddie','Rajaxx',7,4),
('Rolorck','Anetheron',5,2),
('Kreischi','Nathrezim',7,2),
('Ginflut','Anetheron',10,2),
('Bünzli','Rajaxx',5,2),
('Subbì','Anetheron',5,3),
('Damari','Rajaxx',9,3),
('Pitfall','Anetheron',8,3),
('Gefearfach','Anetheron',9,3),
('Hauie','Anetheron',3,3),
('Machtgeil','Rajaxx',8,3),
('Lorelin','Anetheron',8,3),
('Sêppêl','Guldan',3,3),
('Vinkly','Anetheron',9,3),
('Swarloz','Anetheron',11,3),
('Hêavy','Nathrezim',11,3)
---('Corruptìon','Thrall',2,4),
---('Nyalarthotep','Anetheron',4,4),
---('Büffelhüfte','Thrall',7,2),
---('Weaver','Anetheron',10,1),
---('Nanir','Anetheron',9,3),
--- ('Menardinus','Anetheron',4,4),

---Klassentabelle
CREATE TABLE classes
(id int IDENTITY (1,1) not null,
name varchar(20) not null,
color varchar(20) not null,
PRIMARY KEY(id)
);

--- Inserts Klassen
INSERT INTO classes (name, color)
VALUES
('Krieger','#C79C6E'),  /*1*/
('Paladin','#F58CBA'),  /*2*/
('Jäger','#ABD473'),    /*3*/
('Schruke','#FFF569'),  /*4*/
('Priester','#FFFFFF'), /*5*/
('Todesritter','#C41F3B'),  /*6*/
('Schamane','#0070DE'), /*7*/
('Magier','#69CCF0'),   /*8*/
('Hexenmeister','#9482C9'), /*9*/
('Mönch','#00FF96'),    /*10*/
('Druide','#FF7D0A'),   /*11*/
('Dämonenjäger','#A330C9')  /*12*/

--- Rollentabelle
CREATE TABLE roles
(id int IDENTITY (1,1) not null,
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

create table discord 
(id int IDENTITY,
 dcserver varchar(20),
  dcurl varchar(255)
  PRIMARY KEY (id)
  )
