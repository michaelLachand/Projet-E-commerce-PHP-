CREATE TABLE user(
                     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                     usernmane VARCHAR(50) NOT NULL UNIQUE,
                     password VARCHAR(255) NOT NULL ,
                     created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL

);