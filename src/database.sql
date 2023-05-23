create database php_crud;

use php_crud;

-- CREATE TABLE `items` (
--   `id` int(11) NOT NULL auto_increment, 
--   `name` varchar(255), 
--   `phone` varchar(15),
--   `key` varchar(25) NOT NULL,
--   `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--   `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--   PRIMARY KEY (`id`));

  CREATE TABLE `items` (
  `id` int(11) NOT NULL auto_increment, 
  `name` char(255), 
  `phone` char(15),
  `key` char(25) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));

-- Query OK, 0 rows affected, 1 warning (0.04 sec)