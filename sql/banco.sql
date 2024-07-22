create database translations ;

use translations ;

CREATE TABLE word (
    id INT AUTO_INCREMENT PRIMARY KEY,
    palavra VARCHAR(255) NOT NULL,
    traducao VARCHAR(255) NOT NULL,
    letra CHAR(1) NOT NULL
);