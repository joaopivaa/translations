create database translations ;

use translations ;

CREATE TABLE word (
    id int NOT NULL AUTO_INCREMENT,
    palavra varchar (50) NOT NULL,
    traducao varchar (50) NOT NULL,
    letra varchar (1) NOT NULL,
    PRIMARY KEY (id)
);