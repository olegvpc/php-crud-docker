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
git clone https://github.com/olegvpc/laravel-riit.git
```
* 2: cd to work-project

* 3: for short record use ALIAS
```
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```
* 4: To start all of the Docker containers in the background, you may start Sail in "detached" mode:
```shell
sail up -d
```
* 5: Run MIGRATION
```shell
sail artisan migrate 
```
* 6: You may use the shell command to connect to your application's container, allowing you to inspect its files and installed services as well execute arbitrary shell commands within the container:
```shell
sail shell
```
* 7: for install all dependencies
```shell
composer dump
```

* 8: Project run: 
```
http://localhost:80
``` 
