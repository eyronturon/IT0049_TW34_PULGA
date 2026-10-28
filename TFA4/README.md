# My Point-of-Sale System

This is my updated POS project made with CodeIgniter 4. It has customer
accounts, user accounts, and a login system.

## What it can do

- Log in using a username and hashed password
- Protect customer and user pages from logged-out visitors
- Log out and destroy the session
- Show customer and user accounts
- Add, edit, view, and delete customers
- Add, edit, view, and delete users
- Validate form fields before saving
- Upload a JPG or PNG user avatar and prepare it as a 300 x 300 image
- Use employee pictures from `public/images` when no avatar was uploaded
- Use Bootstrap for the page design

## What I need

- PHP 8.2 or newer
- Composer
- XAMPP or another PHP and MySQL server
- PHP GD and fileinfo extensions

## How to set it up

1. Clone or download this project and open the `TFA4` folder.
2. Run:

   ```bash
   composer install
   ```

3. Start Apache and MySQL in XAMPP.
4. Create a database called `pos_db` in phpMyAdmin.
5. Import `pos_db.sql` into the database.
6. Create or update the `.env` file:

   ```dotenv
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost/IT0049_TW34_PULGA/TFA4/public/'
   database.default.hostname = localhost
   database.default.database = pos_db
   database.default.username = root
   database.default.password =
   database.default.DBDriver = MySQLi
   database.default.port = 3306
   ```

7. Open:

   <http://localhost/IT0049_TW34_PULGA/TFA4/public/login>

## Login accounts

The database export contains sample users with hashed passwords for testing.
I should change these passwords before using the application online.

## Avatar images

Uploaded avatars are saved in `public/uploads`. The user table stores the
generated avatar filename. The `emp1.jpg` to `emp5.jpg` files in
`public/images` are used as default pictures when there is no uploaded avatar.

The web server needs permission to write to `public/uploads`.

## Hosting

Before uploading the project, I need to update the hosted URL and database
settings. I should keep the `.env` file and database passwords private.
