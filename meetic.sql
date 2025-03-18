DROP DATABASE IF EXISTS meetic;
CREATE DATABASE meetic;

USE meetic;

DROP TABLE IF EXISTS user;

CREATE TABLE user(
    id              INT             NOT NULL AUTO_INCREMENT,
    email           VARCHAR(255)    NOT NULL UNIQUE,
    firstname       VARCHAR(255)    NOT NULL,
    lastname        VARCHAR(255)    NOT NULL,
    birthdate       DATETIME        NOT NULL,
    genre_name      VARCHAR(255)    NOT NULL,
    hobbies_name    VARCHAR(255)    NOT NULL,
    password        VARCHAR(255)    NOT NULL,
    city            VARCHAR(255),
    is_actif        BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (id)
);

INSERT INTO user
            (email, firstname, lastname, birthdate, genre_name, hobbies_name, password, city, is_actif)
    VALUES  ('randy.black@ore.com', 'Randy', 'Black', '1997-10-28T00:34:58', 'Homme',"J'aime les mangas , j'aime aussi la dance", MD5('10190'), 'Paris', FALSE ),
            ('jeffrey.wheeler@ota.com', 'Jeffrey', 'Wheeler', '1962-11-18T19:30:07', 'Femme',"J'aime la dance , j'aime aussi la cuisine", MD5('31160'), 'Paris',FALSE),
            ('bill.garza@mom.eu', 'Bill', 'Garza', '1995-12-10T22:04:23', 'Autre',"J'aime la dance , j'aime aussi le skateboard",MD5('79000'), 'Lyon',FALSE),
            ('duane.christensen@ti.fr', 'Duane', 'Christensen', '1970-01-15T16:11:56', 'Femme',"J'aime les mangas , j'aime aussi les licornes", MD5('56860'), 'Marseille',TRUE)
;
