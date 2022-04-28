select * from stories;
select * from account;

INSERT INTO stories (title, name, description, location, category)
VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger' , 'Stavanger');

use storyera;
CREATE TABLE account (
id INT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(50)
);

CREATE TABLE stories (
title VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
description VARCHAR(700),
location VARCHAR(20),
category VARCHAR(20),
image VARCHAR(20)
);

CREATE TABLE Admin (
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL
);
