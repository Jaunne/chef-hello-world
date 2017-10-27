create database demo; 
use demo;
		
CREATE TABLE IF NOT EXISTS ponies (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(45) DEFAULT NULL,
  description VARCHAR(200) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB
		
INSERT INTO ponies VALUES 
(NULL, "Twilight", NULL),
(NULL, "Fluttershy", NULL),
(NULL, "Applejack", NULL),
(NULL, "Pinkie", NULL),
(NULL, "Rainbow Dash", NULL),
(NULL, "Princess Luna", NULL);