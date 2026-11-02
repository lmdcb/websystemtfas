# Laravel POS Foundations — IT0049 TFA5

A simple four-page POS demonstration built using Laravel MVC and Blade templates.

## Requirements
- PHP and Composer versions compatible with your chosen Laravel release
- Laravel project generated using Composer

## Setup
1. Create a fresh Laravel application: `composer create-project laravel/laravel pos-system`
2. Copy the contents of this starter pack into the `pos-system` folder, keeping the folder structure. Replace `routes/web.php` if asked.
3. In the project folder, run `php artisan serve`.
4. Open `http://127.0.0.1:8000`.

## Pages
- `/` — Home
- `/about` — About
- `/customers` — Customer Accounts (5 records)
- `/users` — User Accounts (5 records)

## Architecture
Routes are defined in `routes/web.php`. PageController, CustomerController, and UserController handle the four routes. Blade views live in `resources/views` and share a layout. Account data is supplied by static PHP arrays inside the account controllers, and displayed using `@foreach`.

## Optional database artifacts
The migration and seeder are included for submission completeness; the four displayed pages **do not** read the database. To create tables and seed sample data, configure a supported database in `.env`, then run:

```bash
php artisan migrate
php artisan db:seed --class=PosSampleSeeder
```

Do not run the sample seeder repeatedly unless you clear its inserted data first, because the sample emails are unique.

## Deployment
Use a Laravel-compatible PHP host with the web document root pointing to `public/`, PHP/Composer dependencies installed, an application key, and writable `storage` and `bootstrap/cache`. Never commit `.env`, secrets, or the `vendor` directory. The site is not deployed by this starter pack.

## Important
This is an overlay for a freshly generated Laravel project, not a standalone full Laravel framework installation. It does not include `vendor`, `.env`, or framework boilerplate. The sample account information is fictional.
