-- create sample table
create table IF not exists `users`
(
 `id`               INT(20) AUTO_INCREMENT,
 `name`             VARCHAR(20) NOT NULL,
 `address`          VARCHAR(255) DEFAULT NULL,
 `password`         VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- insert sample data
INSERT INTO users VALUES ( 1, 'Administrator', '', '$2y$10$lawARxHYB8.taj1MaNSHMugp6HxDmnCvpjhBrpVJjT2ersj6Wj68S' );
