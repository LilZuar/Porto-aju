# Laravel Project Portfolio

This repository contains a simple and professional portfolio website structured with Laravel's MVC pattern.

## Included

- A portfolio route in `routes/web.php`
- A dedicated controller in `app/Http/Controllers/PortfolioController.php`
- Blade templates in `resources/views`
- Custom styling in `resources/css/app.css`

## How to run

Because this machine does not currently have PHP or Composer installed, the app was prepared but not executed here.

When you have PHP 8.2+, Composer, and Node.js available, run:

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Then open `http://127.0.0.1:8000`.

## Customize

- Update the sample projects in `app/Http/Controllers/PortfolioController.php`
- Replace the email links in the Blade view with your own contact details
- Adjust colors and spacing in `resources/css/app.css`
