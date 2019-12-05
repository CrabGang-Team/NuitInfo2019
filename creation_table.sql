
CREATE TABLE User(
        id          Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        prenom      Varchar (50) NOT NULL ,
        email       Varchar (50) NOT NULL ,
        code_postal Varchar (5) NOT NULL ,
        rank        Int NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


CREATE TABLE Message(
        id           Int  Auto_increment  NOT NULL ,
        content      Varchar (200) NOT NULL ,
        date         Date NOT NULL ,
        destinataire Int NOT NULL COMMENT "correspond a l'id de la personne"  ,
        id_User      Int NOT NULL
	,CONSTRAINT Message_PK PRIMARY KEY (id)

	,CONSTRAINT Message_User_FK FOREIGN KEY (id_User) REFERENCES User(id)
)ENGINE=InnoDB;


CREATE TABLE Post(
        id      Int  Auto_increment  NOT NULL ,
        titre   Varchar (50) NOT NULL ,
        content Text NOT NULL ,
        date    Date NOT NULL ,
        id_User Int NOT NULL
	,CONSTRAINT Post_PK PRIMARY KEY (id)

	,CONSTRAINT Post_User_FK FOREIGN KEY (id_User) REFERENCES User(id)
)ENGINE=InnoDB;



CREATE TABLE Categorie(
        id    Int  Auto_increment  NOT NULL ,
        titre Varchar (50) NOT NULL
	,CONSTRAINT Categorie_PK PRIMARY KEY (id)
)ENGINE=InnoDB;



CREATE TABLE Commentaire(
        id      Int  Auto_increment  NOT NULL ,
        content Text NOT NULL ,
        date    Date NOT NULL ,
        id_Post Int NOT NULL ,
        id_User Int NOT NULL
	,CONSTRAINT Commentaire_PK PRIMARY KEY (id)

	,CONSTRAINT Commentaire_Post_FK FOREIGN KEY (id_Post) REFERENCES Post(id)
	,CONSTRAINT Commentaire_User0_FK FOREIGN KEY (id_User) REFERENCES User(id)
)ENGINE=InnoDB;



CREATE TABLE Contenir(
        id      Int NOT NULL ,
        id_Post Int NOT NULL
	,CONSTRAINT Contenir_PK PRIMARY KEY (id,id_Post)

	,CONSTRAINT Contenir_Categorie_FK FOREIGN KEY (id) REFERENCES Categorie(id)
	,CONSTRAINT Contenir_Post0_FK FOREIGN KEY (id_Post) REFERENCES Post(id)
)ENGINE=InnoDB;

