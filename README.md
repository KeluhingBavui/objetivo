# Objetivo

##About

This project is part of our course subject, which is Web Programming. The system is developed by 7 of us group members, each with expertise of their own. This web application uses Laravel's framework and MySQL for the database. The aim of the system is to help individuals to set personal goals, manage and keep track of the progress of their goals.

## Requirements

1. All Laravel 9 dependencies
2. NodeJS
3. MySQL/MariaDB

## Contributing

```bash
$ git clone https://github.com/xputerax/objetivo-full.git
$ cd objetivo-full
$ composer i # download dependencies
$ npm i # download dependencies
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate # to setup the database
$ php artisan db:seed # to populate with fake data
$ npm run watch # to build the JS assets
```
