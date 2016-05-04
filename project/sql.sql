

CREATE database totalFitness;

USE totalFitness; 

CREATE TABLE USER (
 USERNAME            	VARCHAR(10),
 PASSWRD           	 	VARCHAR(20),
CONSTRAINT USERNAME_PK PRIMARY KEY (USERNAME));

INSERT INTO USER VALUES ('admin', 'adminpassword');

INSERT INTO USER VALUES ('test1', 'test1password');