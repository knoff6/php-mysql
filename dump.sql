-- Create the database
CREATE DATABASE IF NOT EXISTS user;

-- Switch to the newly created database
USE user;

-- Create a new user
CREATE USER IF NOT EXISTS 'witcher'@'localhost' IDENTIFIED BY 'witcher@123';

-- Grant privileges to the user for the database
GRANT ALL PRIVILEGES ON user.* TO 'witcher'@'localhost';

-- Flush privileges to apply changes
FLUSH PRIVILEGES;

-- Create the registration table
CREATE TABLE IF NOT EXISTS registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

