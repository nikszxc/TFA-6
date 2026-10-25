# POS Laravel Lab (database version): Setup

Start from your existing Laravel POS project (the four pages from the previous lab).

## 1. Copy in the files from this folder

```
database/migrations/0001_01_01_000000_create_users_table.php   (REPLACES the default file of the same name)
database/migrations/2026_10_25_000001_create_customers_table.php
database/seeders/CustomerSeeder.php
database/seeders/UserSeeder.php
database/seeders/DatabaseSeeder.php                            (replaces the default)
app/Models/Customer.php
app/Models/User.php                                            (replaces the default)
app/Http/Controllers/CustomerController.php
app/Http/Controllers/UserController.php
resources/views/customers.blade.php
resources/views/users.blade.php
resources/views/about.blade.php
```

Then delete `database/factories/UserFactory.php`. It targets the default users table (name, email, password) and no longer matches.

Why the default users migration is replaced: a fresh Laravel project already ships a `users` table (name, email, password). The lab schema is `users(id, username UNIQUE, full_name, created_at)`, so the default file is overwritten rather than adding a second migration that would clash.

## 2. Create the database and configure .env

Laravel defaults to SQLite. To use MySQL as in the CodeIgniter version, create an empty database first:

```sql
CREATE DATABASE pos_system CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Then in `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pos_system
DB_USERNAME=root
DB_PASSWORD=
```

(If you would rather keep SQLite, leave `.env` as is and skip the CREATE DATABASE step.)

## 3. Migrate, seed, run

```bash
php artisan config:clear
php artisan migrate:fresh --seed
php artisan serve
```

`migrate:fresh` drops all tables and rebuilds them, which is what you want for the replaced users migration.

## 4. Check

- http://127.0.0.1:8000/customers shows 6 customers from the database.
- http://127.0.0.1:8000/users shows 6 users from the database.
- `php artisan tinker` then `App\Models\Customer::count()` and `App\Models\User::count()` should each return 6.

## Notes

- The users table has no role column, matching the schema in the lab, so the User Accounts page shows Username and Full Name only.
- Both models set `UPDATED_AT = null` because the schema only has `created_at`.
- Running `php artisan db:seed` a second time will fail on the unique username. Use `migrate:fresh --seed` to reset.
