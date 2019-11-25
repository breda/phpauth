<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).


# Getting started

## System requirements
You need to have these installed on your system:
- PHP >= 7.2.0
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

Installation depend on your system, but let's suppose you have an Ubuntu 18.04
```
sudo apt-get install php7.2-common php7.2-json php7.2-mbstring php7.2-xsl php7.2-xml php7.2-mysql php7.2-bcmath php7.2-cli php7.2-sqlite3
```
And make sure you have them enabled in your `php.ini`. 

Next up, for quicker database setup, let's use SQLite.
Create the DB with : `touch database/database.sqlite`
And configure it in Laravel, in your `.env` file like so:
```
...
...
DB_CONNECTION=sqlite
DB_DATABASE=/home/breda/truly/lab/phpauth-laravel/database/database.sqlite
```
Replace `DB_DATABASE` with the **full path** of your sqlite database file.

Next, run the mirations w/ seeds:
```
php artisan migrate
php artisan db:seed
```

And start the dev web server:
```
php artisan serve
```

Visit: http://localhost:8000/login