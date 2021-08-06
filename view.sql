CREATE DATABASE movies;
use movies;
CREATE TABLE Movie (ID int NOT NULL PRIMARY KEY,Movie_name varchar(255) NOT NULL,Lead_actor varchar(255),Lead_actress varchar(255),Director varchar(255),Release_year int);
INSERT INTO Movie (ID,Movie_name,Lead_actor,Lead_actress,Director,Release_year)VALUES(1,'Dora','pathna','nayanthara','Doss',2017);
INSERT INTO Movie (ID,Movie_name,Lead_actor,Lead_actress,Director,Release_year)VALUES(2,'Avathar','Sam Worthington','Zoe Saldana','James Cameron',2009);
