# Simple Create, Read, Update, Delete (CRUD) in PHP & MySQL $ Docker

## Предлагаем выполнить тестовое задание 


Цель:
- Разработать REST API (CRUD) сервис.
- Создание элементов
- Обновление элементов
- Удаление элементов
- Получение информации о элементе
- Валидацию полей сущности
- Тестами покрывается и функционал и БД
- Использование token для доступа к данным
- История изменений сущности
Вводные данные:
Сущность: Item
Поля сущности:
id - int автоинкремент
name - char(255)
phone - char(15)
key - char(25) not null
created_at - datetime - дата создания элемента
updated_at - datetime - дата обновления элемента

Стек технологий: PHP5.6, PHP8(без использования фреймворков)

Тестовое задание необходимо выложить на репозитории, GitHub дать доступ, если приватный репозиторий.

Хорошего дня !
Алексей Шеломенцев

### Выполнено:
#### 1: Проект запускается в Docker
#### 2: Написан код на PHP без использования FW 
#### 3: DB - MySQL
#### 4: FrontEnd не делал в связи с отсутствием требований в ТЗ
![react](https://github.com/olegvpc/laravel-riit/blob/main/images/react.png?raw=true)

#### 7: История изменений 
![validation](https://github.com/olegvpc/laravel-riit/blob/main/images/validation.png?raw=true)
#### 8: Подключены русские варианты сообщений верификации
#### 9: Выводится сообщение при создании записи в ВD (через запись в session())
![alert](https://github.com/olegvpc/laravel-riit/blob/main/images/alert.png?raw=true)
#### 10: Настроены route(End-points) как для записи данных из формы, так и через API

### Установка BackEnd (запускается локально в Docker)
* 1: clone repository
``` 
git clone https://github.com/olegvpc/php-crud-docker.git
```
* 2: cd to work-project

* 3: To start all of the Docker containers in the background, you may start docker-compose in "detached" mode:
```shell
docker-compose up -d
```
* 4: Create DATABASE and Table
```shell
create database php_crud;
```
```
use php_crud;
```
```
 CREATE TABLE `items` (
  `id` int(11) NOT NULL auto_increment, 
  `name` char(255), 
  `phone` char(15),
  `key` char(25) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));
```


* 5: Project run: 
```
http://localhost:8000
``` 
