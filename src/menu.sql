CREATE TABLE IF NOT EXISTS menu (
    id INT AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    parent_id INT DEFAULT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (parent_id) REFERENCES menu(id)
) ENGINE=INNODB, CHARACTER SET = utf8;

INSERT INTO menu(name)
VALUES ('Kategoria główna');

SET @main_category_id = LAST_INSERT_ID();

INSERT INTO menu(name, parent_id)
VALUES ('Podkategoria 1', @main_category_id);

SET @first_sub_category_id = LAST_INSERT_ID();

INSERT INTO menu(name, parent_id)
VALUES ('Podkategoria 1.1', @first_sub_category_id);

INSERT INTO menu(name, parent_id)
VALUES ('Podkategoria 1.2', @first_sub_category_id);

INSERT INTO menu(name, parent_id)
VALUES ('Podkategoria 2', @main_category_id);

SET @second_sub_category_id = LAST_INSERT_ID();

INSERT INTO menu(name, parent_id)
VALUES ('Podkategoria 2.1', @second_sub_category_id);

INSERT INTO menu(name, parent_id)
VALUES ('Podkategoria 2.2', @second_sub_category_id);