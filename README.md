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

### Endpoints

| Method | URI             | Description                      |
| ------ | --------------- | -------------------------------- |
| GET    | /api/posts      | Get all posts                    |
| GET    | /api/posts/{id} | Get a single post                |
| POST   | /api/posts      | Create a new post                |
| PUT    | /api/posts/{id} | Update multiple fields of a post |
| PATCH  | /api/posts/{id} | Update a post                    |
| DELETE | /api/posts/{id} | Delete a post                    |

### Request Body

#### Get all posts

**Endpoint:** /api/posts

**Request Method:** GET

Example response:

```json
[
    "data" : [
        {
            "id": 1,
            "title": "Post Title",
            "slug": "post-title",
            "body": "Post body",
            "createdAt": "2023-01-01 00:00:00"
        },
        {
            "id": 2,
            "title": "Post Title",
            "slug": "post-title",
            "body": "Post body",
            "createdAt": "2023-01-01 00:00:00"
        }
    ]

]
```

#### Get a single post

**Endpoint:** /api/posts/{id}

**Request Method:** GET

Example response:

```json
{
    "data": {
        "id": 1,
        "title": "Post Title",
        "slug": "post-title",
        "body": "Post body",
        "createdAt": "2023-01-01 00:00:00"
    }
}
```

#### Create a new post

**Endpoint:** /api/posts

**Request Method:** POST

**Request body:**

```json
{
    "title": "Post Title",
    "slug": "post-title",
    "body": "Post body"
}
```

Example response:

```json
{
    "data": {
        "id": 1,
        "title": "Post Title",
        "slug": "post-title",
        "body": "Post body",
        "createdAt": "2023-01-01 00:00:00"
    }
}
```

#### Update multiple fields of a post (PUT)

_This request will replace all the fields of the post with the new values._

**Endpoint:** /api/posts/{id}

**Request Method:** PUT

**Request body:**

```json
{
    "title": "Post Title",
    "slug": "post-title",
    "body": "Post body"
}
```

#### Update a post (PATCH)

_This request will only update the fields that are present in the request body._

**Endpoint:** /api/posts/{id}

```json
{
    "title": "Post Title",
    "slug": "post-title"
}
```

#### Delete a post

**Endpoint:** /api/posts/{id}

Example response:

```json
{
    "message": "Post deleted successfully"
}
```
