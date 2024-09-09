CREATE DATABASE translations ;
    
USE translations ;

CREATE TABLE word (
    id INT AUTO_INCREMENT PRIMARY KEY,
    palavra VARCHAR(255) NOT NULL,
    traducao VARCHAR(255) NOT NULL,
    letra CHAR(2) NOT NULL
);