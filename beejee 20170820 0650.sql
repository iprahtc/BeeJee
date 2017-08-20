--
-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 7.2.58.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 20.08.2017 6:50:09
-- Версия сервера: 5.6.34
-- Версия клиента: 4.1
--


-- 
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установить режим SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8';

-- 
-- Установка базы данных по умолчанию
--
USE beejee;

--
-- Описание для таблицы admin
--
DROP TABLE IF EXISTS admin;
CREATE TABLE admin (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  name_admin VARCHAR(50) NOT NULL,
  pass VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 2
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы tasks
--
DROP TABLE IF EXISTS tasks;
CREATE TABLE tasks (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  id_user INT(11) UNSIGNED NOT NULL,
  status VARCHAR(50) NOT NULL,
  text TEXT NOT NULL,
  img VARCHAR(255) DEFAULT NULL,
  name_text VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE INDEX UK_tasks_id_user (id_user),
  CONSTRAINT FK_tasks_id_user FOREIGN KEY (id_user)
    REFERENCES user(id_user) ON DELETE NO ACTION ON UPDATE RESTRICT
)
ENGINE = INNODB
AUTO_INCREMENT = 15
AVG_ROW_LENGTH = 16384
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы user
--
DROP TABLE IF EXISTS user;
CREATE TABLE user (
  id_user INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  email VARCHAR(50) NOT NULL,
  name VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_user)
)
ENGINE = INNODB
AUTO_INCREMENT = 16
AVG_ROW_LENGTH = 1365
CHARACTER SET utf8
COLLATE utf8_general_ci;

-- 
-- Вывод данных для таблицы admin
--
INSERT INTO admin VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- 
-- Вывод данных для таблицы tasks
--
INSERT INTO tasks VALUES
(3, 2, 'Не выполненно', 'jghjgjgh', '1.jpg', 'Задача 1'),
(5, 4, 'Выполненно', 'Задание', '1.jpg', 'Задача 2'),
(7, 6, 'Выполненно', 'з3', '1.jpg', 'з3'),
(8, 7, 'Выполненно', 'z3', '1.jpg', 'z4'),
(9, 8, 'Выполненно', 'z5', '1.jpg', 'z5'),
(10, 9, 'Выполненно', 'z6', '1.jpg', 'z6'),
(11, 10, 'Выполненно', 'z7', '1.jpg', 'z7'),
(12, 11, 'Выполненно', 'z8', '1.jpg', 'z8'),
(13, 14, 'Выполненно', 'test3', '12.jpg', 'test3'),
(14, 15, 'Выполненно', 'test4', '13.jpg', 'test4');

-- 
-- Вывод данных для таблицы user
--
INSERT INTO user VALUES
(2, 'test@gmail.com', 'test'),
(4, 'test2@gmail.com', 'test2'),
(6, 'test3@gmail.com', 'test3'),
(7, 'test4@gmail.com', 'test4'),
(8, 'test5@gmail.com', 'test5'),
(9, 'test6@gmail.com', 'test6'),
(10, 'test7@gmail.com', 'test7'),
(11, 'test8@gmail.com', 'test8'),
(12, 'xcvx', 'vcxv'),
(13, 'test2@mail.ru', 'test2'),
(14, 'test3@gmail.com', 'test3'),
(15, 'test4@gmail.com', 'test4');

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;