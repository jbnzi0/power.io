CREATE TABLE publication (
  id INT(11) NOT NULL AUTO_INCREMENT,
  compact_title VARCHAR(50) NOT NULL COLLATE 'utf8_unicode_ci',
  type VARCHAR(50) NOT NULL COLLATE 'utf8_unicode_ci',
  content VARCHAR(400) NOT NULL COLLATE 'utf8_unicode_ci',
  creation_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);
CREATE TABLE award (
  id INT(11) NOT NULL AUTO_INCREMENT,
  type VARCHAR(50) NOT NULL COLLATE 'utf8_unicode_ci',
  name VARCHAR(100) NOT NULL COLLATE 'utf8_unicode_ci',
  creation_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);
CREATE TABLE picture (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  size int NOT NULL,
  filepath VARCHAR(255) NOT NULL
);

CREATE TABLE member (
  id INT(11) NOT NULL AUTO_INCREMENT,
  first_name INT(11) NOT NULL,
  last_name VARCHAR(255) NOT NULL COLLATE 'utf8_unicode_ci',
  email varchar(255) NOT NULL COLLATE 'utf8_unicode_ci',
  password varchar(255) NOT NULL,
  status VARCHAR(100) NOT NULL COLLATE 'utf8_unicode_ci',
  is_admin BOOLEAN NOT NULL,
  description TEXT NOT NULL COLLATE 'utf8_unicode_ci',
  creation_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

CREATE TABLE p2m (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  picture_id INT,
  member_id INT,
    
  FOREIGN KEY(member_id) REFERENCES member(id),
  FOREIGN KEY(picture_id) REFERENCES picture(id)
);

CREATE TABLE p2p (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  picture_id INT(11),
  publication_id INT(11),

  FOREIGN KEY (publication_id) REFERENCES publication(id),
  FOREIGN KEY (picture_id) REFERENCES picture(id)
);

CREATE TABLE m2p (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  member_id INT(11),
  publication_id INT(11),
  FOREIGN KEY (publication_id) REFERENCES publication(id),
  FOREIGN KEY (member_id) REFERENCES member(id)
);
CREATE TABLE m2a (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  award_id INT(11),
  member_id INT(11),
  FOREIGN KEY (award_id) REFERENCES award(id),
  FOREIGN KEY (member_id) REFERENCES member(id)
);


