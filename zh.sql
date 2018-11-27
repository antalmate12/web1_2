CREATE DATABASE `zh`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `zh`;

CREATE TABLE `regisztracio` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `email` varchar(45) NOT NULL,
  `nev` varchar(45) NOT NULL,
  `jelszo` varchar(40) NOT NULL,
  `kor` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
)
ENGINE = InnoDB
CHARACTER SET utf8 COLLATE utf8_hungarian_ci;

