# Instalation

Clone your project
Go to the folder application using cd command on your cmd or terminal 
Run on your cmd or terminal
``` 
composer install 
```

Copy .env.example file to .env on the root folder. If using command prompt Windows you can type: 
```
copy .env.example .env 
```

Or 
```
cp .env.example .env 
```
if using terminal, Ubuntu

Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
By default, the username is root and you can leave the password field empty. (This is for Xampp)
By default, the username is root and password is also root. (This is for Lamp)

Run 
```
php artisan key:generate
php artisan migrate
```

Run 
```
php artisan db:seed 
```
to run seeders, if any.

The next commands its to add auth system.

```
composer require laravel/ui
```

```
php artisan ui vue --auth
```

```
npm install
```

```
npm run dev
```

Add the bootstrap 4.6.1 or new in resources/views/layouts/app.blade.php

```
php artisan serve
```

Go to localhost:8000

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
