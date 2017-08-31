# InteractiveRegistrationForm

This is an User Interactive Registration Form.

## Installation and Contribution

### Requirements :

1. PHP >= 5.6
2. MySQL
3. Composer
4. Laravel > 5.2

### Installation :

Fork and Clone this repo or download it on your local system.

Open composer and run this given command.

```shell
composer install
composer update
```

After installing composer, Rename the file `.env.example` to `.env`.

```shell
cp .env.example .env
```

> Set db credentials in `.env` and run the following Commands.

Generate the Application key

```php
php artisan key:generate
```

Migrate the database.

```php
php artisan migrate
```


Run this project on localhost

```php
php -S localhost:8000
```

This project will run on this server:

```
http://localhost:8000/
```

### Contribution

1. Fork and clone the repo.
2. Follow the installation procedure to make it run on your local system.
3. Open an issue for adding any feature or to resolve any bug.
4. Make your own branch and send pull request to that branch.

* Always make branch and send PR, Dont merge code directly to the Master Branch as master branch is auto deployed to our website  [register.hackncs.com](http://register.hackncs.com)
