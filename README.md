
# Book management information system

Simple Information System Laravel Project.


## Installation

Install my-project with npm

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

