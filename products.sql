DROP DATABASE IF EXISTS Products;

CREATE DATABASE Products;

USE Products;

CREATE TABLE Products
(
   id varchar (50) PRIMARY KEY,
   quantity int,
   price int
);

INSERT INTO Products (id , quantity) VALUES ('Blouse1' ,'5' ,'200$');
INSERT INTO Products (id , quantity) VALUES ('Blouse3' ,'10');
INSERT INTO Products (id , quantity) VALUES ('Blouse2' ,'9');
INSERT INTO Products (id , quantity) VALUES ('dress3' ,'5');
INSERT INTO Products (id , quantity) VALUES ('dress1' ,'6');
INSERT INTO Products (id , quantity) VALUES ('dress2' ,'3');
