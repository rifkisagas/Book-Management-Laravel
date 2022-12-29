
# Fantasia Laravelia

A Simple Information System Laravel Project.


## Installation

Install the project

```bash
  git clone https://github.com/rifkisagas/Book-Management-Laravel
  cd Book-Management-Laravel
  composer Install
```
    
After installation, setting the laravel environtment
```bash
  cp .env.example .env
  php artisan key:generate
  php artisan migrate
  php artisan db:seed --class=CreateRolesSeeder
  php artisan db:seed --class=CreateUsersSeeder
  php artisan storage:link
```


## Running Tests

To run tests, run the following command

```bash
  php artisan serve
```


## Features

- Simple and Magical UI in the index view
- The uploaded data will be viewed in the index view
- The information of the book uploaded will also viewed in the index



#
### Created by :
Muhamad Rifki Arisagas (5520120073)
