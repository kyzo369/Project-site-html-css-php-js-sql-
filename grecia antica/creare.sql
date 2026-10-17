CREATE DATABASE atestat_andrei;
USE atestat_andrei;

CREATE TABLE rezultate (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nume VARCHAR(100),
    punctaj INT,
    data_test DATETIME
);
