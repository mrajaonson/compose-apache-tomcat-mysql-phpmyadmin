CREATE DATABASE IF NOT EXISTS test;
USE test;

CREATE TABLE cities (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL,
    population INT NOT NULL
);

INSERT INTO cities (name, country, population) VALUES
    ("Paris", "France", 2200000),
    ("New York", "United States", 8500000),
    ("Tokyo", "Japan", 13500000),
    ("São Paulo", "Brazil", 21000000),
    ("Shanghai", "China", 24000000);
