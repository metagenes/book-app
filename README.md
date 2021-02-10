# BookApp
Simple BookApp to store Book, Author and Members detail using laravel 8, Bootstrap, dan SB Admin 2.
## Project setup
```
git clone https://github.com/metagenes/book-app
```
```
Copy `env.example` to `env`. update .env with your database config
```
```
composer install
```

```
php artisan key:generate
```

```
php artisan storage:link
```

```
php artisan migrate --path=database/migrations/*
```

```
php artisan migrate --seed
```

```
php artisan serve
```
