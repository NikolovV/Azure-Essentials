CREATE TABLE Person
(
    personid int identity primary key,
    data_time datetime2 DEFAULT GETDATE(),
    name nvarchar(128) not null
);

INSERT INTO Person (name) VALUES ('Pesho'); 
INSERT INTO Person (name) VALUES ('Gosho'); 
INSERT INTO Person (name) VALUES ('Kireto'); 
INSERT INTO Person (name) VALUES ('Siika'); 
INSERT INTO Person (name) VALUES ('Marika'); 
INSERT INTO Person (name) VALUES ('Minka'); 