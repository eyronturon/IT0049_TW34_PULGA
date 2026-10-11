# TSA1: Tasks for Today

This is TSA1 for managing and viewing tasks. 

## Live Website

You can open the hosted website here:

[Tasks for Today](http://pulgatsa1.freepage.cc/)

## What the Website Does

- The home page shows tasks scheduled for today.
- The **All Tasks** page shows all tasks, ordered by task date.
- The **Profile** page displays the user information from the database.
- The **About** page gives information about the project.

## Running the Project on XAMPP

### Requirements

- XAMPP with PHP 8.2 or higher
- MySQL or MariaDB
- Composer

### 1. Put the project in the web server folder

Place the `TSA1` folder inside `C:\xampp\htdocs\IT0049_TW34_PULGA\`.

Start **Apache** and **MySQL** from the XAMPP Control Panel.

### 2. Install the project dependencies

Open a terminal in the `TSA1` folder and run:

```bash
composer install
```

### 3. Create and set up the database

Open phpMyAdmin at [http://localhost/phpmyadmin](http://localhost/phpmyadmin), create a database named `tasks_db`, and import the `tasks_db.sql` file from this folder.

### 4. Set up the environment file

Make sure there is a `.env` file in the `TSA1` folder. If there isn't one yet, copy the `env` file and rename the copy to `.env`.

Set the app URL and database settings in `.env`. For a typical local XAMPP setup, they look like this:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost/IT0049_TW34_PULGA/TSA1/public/'
database.default.hostname = localhost
database.default.database = tasks_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

If your MySQL username or password is different, update those values to match your local setup.

### 5. Open the website

With Apache running, open:

[http://localhost/IT0049_TW34_PULGA/TSA1/public/](http://localhost/IT0049_TW34_PULGA/TSA1/public/)

The main pages are:

- `/` - Today's tasks
- `/tasks` - All tasks
- `/profile` - Profile
- `/about` - About

## Built With

- CodeIgniter 4
- PHP
- MySQL / MariaDB
- Bootstrap 4
