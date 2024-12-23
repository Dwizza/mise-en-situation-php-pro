CREATE DATABASE registre
CREATE TABLE role(
	id INT AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(50)
) 
CREATE TABLE user(
	user_id INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(50),
    email varchar(100),
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES role(id)
)
INSERT INTO role( `role`) VALUES ('admin');
INSERT INTO role( `role`) VALUES ('users');