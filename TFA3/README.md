# My Point-of-Sale System

This is my Updated POS project made with CodeIgniter 4. It has pages for customers and user accounts, and the records are connected to a MySQL database.

## What it can do

- Show customer and user accounts
- Add and edit customers
- Add and edit users
- Validate the form fields before saving
- Upload a JPG or PNG user avatar and prepare it as a 300 x 300 image
- Show user avatars, with employee pictures from `public/images` used when no avatar was uploaded
- View and delete customer and user records
- Use Bootstrap buttons and form styles

## What I need

- PHP 8.2 or newer
- Composer
- XAMPP or another PHP and MySQL server

## How to set it up on my computer

1. Clone or download this project and open the `TFA3` folder.
2. Run Composer to install the project packages:

   ```bash
   composer install
   ```

3. Start Apache and MySQL in XAMPP.
4. Open phpMyAdmin at <http://localhost/phpmyadmin> and create a database called `pos_db`.
5. Select `pos_db`, open the **Import** tab, and import `pos_db.sql`.
6. Create or update the `.env` file in the project folder with my local database settings. For a default XAMPP setup, use:

   ```dotenv
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost/IT0049_TW34_PULGA/TFA3/public/'
   database.default.hostname = localhost
   database.default.database = pos_db
   database.default.username = root
   database.default.password =
   database.default.DBDriver = MySQLi
   database.default.port = 3306
   ```

   If my local MySQL username or password is different, I need to use those values instead. I should not upload `.env` or share database passwords.

## How to open it

With Apache and MySQL running, open:

<http://localhost/IT0049_TW34_PULGA/TFA3/public/>

The customer and user pages are at `/customers` and `/users`.

## Avatar images

Uploaded avatars are saved in `public/uploads`. The user table stores the avatar filename. The `emp1.jpg` to `emp5.jpg` files in `public/images` are used as default pictures for users who do not have an uploaded avatar.

For this to work, PHP needs the GD image extension enabled, and the web server needs permission to write to `public/uploads`.

## Hosting

Before uploading the project, I need to set the hosted URL and hosted database details in the hosting environment. I must keep those credentials private and make sure the host supports PHP 8.2 or newer, MySQL, GD image processing, and file uploads.
