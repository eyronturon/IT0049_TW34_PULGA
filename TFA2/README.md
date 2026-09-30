# A Point-of-Sale System
This project contains a basic four-page Point-of-Sale system built with CodeIgniter 4!

# Features
- Landing page
- About page
- Customer Accounts page
- User Accounts page
- Navigation between all pages
- Customer records retrieved from the MySQL database using CustomerModel
- User records retrieved from the MySQL database using UserModel
- Styled page with a gradient background and hover effect on the main container

# Requirements

- PHP 8.2 or higher
- Composer
- XAMPP or another PHP server
- CodeIgniter 4

# Installation

1. Clone or download this project.
2. Open the project folder in a terminal.
3. Install the dependencies:

	```bash
	composer install
	```

4. Start Apache and MySQL in XAMPP.
5. Open phpMyAdmin at http://localhost/phpmyadmin and create a database named `pos_db`.
6. Create the tables and add sample records by running this SQL in phpMyAdmin:

	```sql
	CREATE TABLE customers (
		 id INT AUTO_INCREMENT PRIMARY KEY,
		 full_name VARCHAR(100) NOT NULL,
		 email VARCHAR(100) NOT NULL,
		 phone VARCHAR(20),
		 created_at DATETIME NOT NULL
	);

	CREATE TABLE users (
		 id INT AUTO_INCREMENT PRIMARY KEY,
		 username VARCHAR(50) NOT NULL UNIQUE,
		 full_name VARCHAR(100) NOT NULL,
		 created_at DATETIME NOT NULL
	);

	INSERT INTO customers (full_name, email, phone, created_at) VALUES
	('Harry Kane', 'HKane@gmail.com', '09164813317', NOW()),
	('Mark Snowpher', 'wynter@gmail.com', '09264968843', NOW()),
	('Declan Rice', 'declan@gmail.com', '09148534476', NOW()),
	('Daniel Gipal', 'daniel@example.com', '09234865591', NOW()),
	('Jai Opetaia', 'jaiOp@gmail.com', '09153427741', NOW());

	INSERT INTO users (username, full_name, created_at) VALUES
	('admin', 'Admin User', NOW()),
	('employee1', 'Frank Castle', NOW()),
	('employee2', 'Michael Olise', NOW()),
	('manager1', 'Matt Murdock', NOW()),
	('staff1', 'John Cena', NOW());
	```

7. Create or update the `.env` file in the project folder with your local MySQL settings. For the default XAMPP setup, the database settings are usually:

	```dotenv
	CI_ENVIRONMENT = development
	database.default.hostname = localhost
	database.default.database = pos_db
	database.default.username = root
	database.default.password =
	database.default.DBDriver = MySQLi
	database.default.port = 3306
	```

	Change the username or password if your local MySQL uses different credentials. The `.env` file is ignored by Git, so do not upload database passwords.

# To run the project

Open: http://localhost/IT0049_TW34_PULGA/TFA2/public/

The customer and user pages are available at `/customers` and `/users`.

