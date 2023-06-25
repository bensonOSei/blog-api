# Blog-API

## Description

This is a simple blog API that allows users to create, read, update and delete blog posts. This API is built using Laravel 8 and SQLite.

## Installation

1. Clone the repository

```bash
git clone
```

2. Install dependencies

```bash
composer install
```

3. Create a copy of the .env file

```bash
cp .env.example .env
```

4. Generate an app encryption key

```bash
php artisan key:generate
```

5. Generate database migration and seed

```bash
php artisan migrate --seed
```

6. Start the local development server

```bash
php artisan serve
```

You can now access the server at http://localhost:8000

## API Documentation
