## Requirement:

- PHP 7.0+ (with ext-json, ext-pdo)
- MySQL 8.0

---

## Installation

Open terminal then `cd` to root directory of project.

```bash
cd /path/to/project
```

Run the following command to import dumped data to MySQL database (replace MYSQL_USERNAME and DB_NAME)

```bash
mysql -u {MYSQL_USERNAME} -p {DB_NAME} < db_dump.sql
```

Open `config.php` then update database connection & options:

```php
return [
    'debug' => true,

    'database' => [
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '1',
        'db_name' => 'php_test',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    ]
];
```

Run composer.

```bash
composer install
```

Start server:

```bash
php -S localhost:8000 -t public
```
---
## API Endpoints

Bearer Token

```
xK2ZzpFN6a6rU9EnEHAQ4Gq1WjP8ZBVoXND4xhMNxhXVSGMb7QBKiE37f0Vh
```

For endpoints which require authenticated user, the request header must include `Authorization` with above bearer token. 

### Movie
#### GET
```
GET /movies/{movie_id}
```

#### INDEX
```
GET /movies?page={page}&per_page={per_page}
```

#### CREATE
```
POST /movies
Authorization: Bearer {bearer_token}
```

##### Fields & Validations

- title: required|string|max:150
- description: required|string|max:300
- year: required|date_format:Y
- director: required|string|max:100
- release_date: required|date_format:Y-m-d

#### UPDATE
```
PUT /movies/{movie_id}
Authorization: Bearer {bearer_token}
```

##### Fields & Validations

- title: required|string|max:150
- description: required|string|max:300
- year: required|date_format:Y
- director: required|string|max:100
- release_date: required|date_format:Y-m-d

#### DELETE
```
DELETE /movies/{movie_id}
Authorization: Bearer {bearer_token}
```

### Song
#### GET
```
GET /songs/{song_id}
```

#### INDEX
```
GET /songs?page={page}&per_page={per_page}
```

#### CREATE
```
POST /songs
Authorization: Bearer {bearer_token}
```

##### Fields & Validations

- title: required|string|max:150
- album: required|string|max:150
- year: required|date_format:Y
- artist: required|string|max:100
- release_date: required|date_format:Y-m-d

#### UPDATE
```
PUT /songs/{song_id}
Authorization: Bearer {bearer_token}
```

##### Fields & Validations

- title: required|string|max:150
- album: required|string|max:150
- year: required|date_format:Y
- artist: required|string|max:100
- release_date: required|date_format:Y-m-d

#### DELETE
```
DELETE /songs/{song_id}
Authorization: Bearer {bearer_token}
```
