CREATE TABLE book (
                      id INT(11) NOT NULL AUTO_INCREMENT,
                      isbn VARCHAR(30) NOT NULL,
                      title VARCHAR(255) NOT NULL,
                      autor VARCHAR(255) NOT NULL,
                      date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
                      PRIMARY KEY(id)
);
