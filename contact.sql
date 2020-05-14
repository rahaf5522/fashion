DROP DATABASE IF EXISTS contact;

CREATE DATABASE contact;

USE contact;

CREATE TABLE contact
(
   firstname varchar(20)  ,
   lastname  varchar(20),
   city varchar(20),
   email varchar(30) PRIMARY key,
   subject varchar(200)
);
