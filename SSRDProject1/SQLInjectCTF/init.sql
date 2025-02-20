-- SQL script to initialize the database 

-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS sqli_ctf;
USE sqli_ctf;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Insert an admin user with a flag
INSERT INTO users (username, password) VALUES
('admin', 'password123'),
('flaguser', 'flag{sql_injection_success}');
