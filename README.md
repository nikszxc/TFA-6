# POS System (Laravel) - v0.2 Database

The Laravel POS app with a real database. The static arrays from v0.1 are replaced by migrations, seeders and Eloquent models, using the same schema as TFA2.

## Pages

| URL          | Route name  | Controller                    | Data source                |
|--------------|-------------|-------------------------------|----------------------------|
| `/`          | `home`      | `PageController@index`        | none                       |
| `/about`     | `about`     | `PageController@about`        | none                       |
| `/customers` | `customers` | `CustomerController@index`    | `Customer` model (MySQL)   |
| `/users`     | `users`     | `UserController@index`        | `User` model (MySQL)       |

## Database schema

```
customers(id, full_name, email, phone, created_at)
users(id, username UNIQUE, full_name, created_at)
```

The users table has no role column, so the User Accounts page shows Username and Full Name only.

## Requirements

- PHP 8.2 or newer
- Composer
- MySQL (or SQLite, which is Laravel's default)

## Installation

This folder holds only the files that were added or changed. Start from your existing Laravel POS project (the four-page v0.1 version).

1. Copy the files from this folder into the project. Overwrite when asked: `database/migrations/0001_01_01_000000_create_users_table.php`, `database/seeders/DatabaseSeeder.php` and `app/Models/User.php` replace Laravel defaults.
2. Delete `database/factories/UserFactory.php`.
3. Create a MySQL database and set it in `.env`:
   ```sql
   CREATE DATABASE pos_system CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=pos_system
   DB_USERNAME=root
   DB_PASSWORD=
   ```
4. Build the tables, seed them and start the server:
   ```bash
   php artisan config:clear
   php artisan migrate:fresh --seed
   php artisan serve
   ```
5. Open http://127.0.0.1:8000/customers and http://127.0.0.1:8000/users. Each page should list 6 records.

See `SETUP.md` for more detail.

## Project structure

```
routes/web.php
app/Models/
    Customer.php
    User.php
app/Http/Controllers/
    PageController.php
    CustomerController.php    Customer::orderBy('id')->get()
    UserController.php        User::orderBy('id')->get()
database/migrations/
    0001_01_01_000000_create_users_table.php
    2026_10_25_000001_create_customers_table.php
database/seeders/
    DatabaseSeeder.php
    CustomerSeeder.php        6 sample customers
    UserSeeder.php            6 sample users
resources/views/
    layouts/app.blade.php
    home.blade.php
    about.blade.php
    customers.blade.php
    users.blade.php
```

## Notes

- Both models set `UPDATED_AT = null` because the schema only has `created_at`.
- Running `php artisan db:seed` twice fails on the unique username. Use `php artisan migrate:fresh --seed` to reset.
- To verify the data, run `php artisan tinker` and then `App\Models\Customer::count()` and `App\Models\User::count()`.
