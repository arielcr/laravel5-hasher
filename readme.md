# Laravel 5 Password Hasher

Command to convert a string to a Laravel hashed password to use directly on the database.

## Usage

### Step 1: Install Through Composer

```
composer require arielcr/laravel5-hasher
```

### Step 2: Add the Service Provider

Add the service provider to `config/app.php`:

```php
'providers' => [
    // ...
    'Laravel\Hasher\HasherServiceProvider',
],
```


### Step 3: Run Artisan!

You're all set. Run `php artisan` from the console, and you'll see the new command.

## Example

```
php artisan hash password=123456
```