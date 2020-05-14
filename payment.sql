DROP DATABASE IF EXISTS payment;

CREATE DATABASE payment;

USE payment;

CREATE TABLE payment
(
   fname varchar(20) PRIMARY KEY,
   city varchar(30),
   cnum int(50),
   cname varchar(20),
   email varchar(50)  REFERENCES account(email),
   cvv int(3),
   expyear int(4)
);

INSERT INTO payment (fname , city , cnum , cname , email , cvv , expyear) VALUES ('rahaf ibrahim' ,'riyadh ', '123456789','rahaf alarfaj','rahaf@gmail.com', '567' , '2020');
