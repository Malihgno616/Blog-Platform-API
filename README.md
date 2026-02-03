# BLOGGING PLATFORM API - RESTful

## Tools used for this project

- PHP 8.4.1
- Laravel 12
- MySQL

## Routes

- GET ALL POSTS: `GET /posts`
- GET A SINGLE POST: `GET /posts/{id}`
- CREATE A BLOG POST: `POST /posts`
- UPDATE A BLOG POST: `PUT /posts/{id}`
- DELETE BLOG POST: `DELETE /posts/{id}`

### Request/Response Examples

**Create Post:**

```json
{
    "title": "My First Blog Post",
    "content": "This is the content of my first blog post.",
    "category": "Technology",
    "tags": ["Tech", "Programming"]
}
```

## 📦 Installation Steps

### 1. Clone Repository

```bash
git clone https://github.com/transito/blogging-api.git
cd blogging-api
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure Database

Update `.env` with:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blogging_api
DB_USERNAME=blogging_user
DB_PASSWORD=blogging_password
```

### 5. Start MySQL with Docker

```bash
docker compose up -d
docker compose ps
```

### 6. Run Migrations

```bash
php artisan migrate
```

### 7. Start Server

```bash
php artisan serve
```

API available at: `http://localhost:8000````

### 7. Start Server

```bash
php artisan serve
```

API available at: `http://localhost:8000`
