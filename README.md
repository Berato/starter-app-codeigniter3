# Starter App CodeIgniter 3

**Starter app Code Igniter 3** is a project made in CodeIgniter v3.1.0.

This project was made for quick start a CodeIgniter aplication, it contains:
 * A register part
 * A login part
 
## How to start
 * You need to download [CodeIgniter 3.1.0](https://www.codeigniter.com/download).
 * [Clone](https://github.com/1fabiosoares/starter-app-codeigniter3#cloning-the-repository) this repository.
 * Unzip the CodeIgniter folder.
 * Copy the *system* CodeIgniter's diretory to the Starter App diretory.
 * Config the `application/config/database.php` file.
 * And make the queries below in your database.

## Database

Create a Database

    CREATE DATABASE IF NOT EXISTS `starterapp`;

Create table

    CREATE TABLE IF NOT EXISTS `starterapp`.`users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
    `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `name` (`name`),
    UNIQUE KEY `email` (`email`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

## Requeriments

**PHP v5.6** or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features. 

## Cloning the repository

If you have [Git](https://git-scm.com/) insalled, you can open your command line and type
   
    git clone https://github.com/1fabiosoares/starter-app-codeigniter3.git
    
or you can use the SSH protocol

    git clone git@github.com:1fabiosoares/starter-app-codeigniter3.git
    
