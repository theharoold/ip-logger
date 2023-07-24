CREATE TABLE logs (
	id INT AUTO_INCREMENT,    
	ip VARCHAR(50) NOT NULL,
    create_time TIMESTAMP NOT NULL,
    PRIMARY KEY (id)
);