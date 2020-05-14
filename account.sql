DROP DATABASE IF EXISTS account;

CREATE DATABASE account;

USE account;

CREATE TABLE account
(
   username varchar(20) NOT NULL PRIMARY KEY,
   password varchar(30),
   email varchar(50)
);

INSERT INTO account (username,password,email) VALUES ('muna','2222','muna@gmail.com');
INSERT INTO account (username,password,email) VALUES ('rahaf','1234','rahaf@gmail.com');
