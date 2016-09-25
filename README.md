# Starter App CodeIgniter 3



## Database

Create a Database

    CREATE DATABASE IF NOT EXISTS `starterapp`;

Create table

    CREATE TABLE IF NOT EXISTS `starterapp`.`users` (
    `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing id of each user, unique index',
    `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
    `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
    `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
    PRIMARY KEY (`id`),
    UNIQUE KEY `name` (`name`),
    UNIQUE KEY `email` (`email`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';
