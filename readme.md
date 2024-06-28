# Simple PHP User Authentication System for demonstrating F5 XC Bot Defense

This is a simple user authentication system implemented in PHP with a MariaDB backend. It provides user registration, login, and logout functionality.
I use it to demonstrate F5 XC Bot Defense capabilities.

## Features

- User Registration: Allows new users to register with a username and password.
- User Login: Allows registered users to log in with their credentials.
- Session Management: Uses PHP sessions to keep users logged in across multiple pages until they log out.
- SQL Injection: A search page vulnerable to SQL injection
- Logout: Provides a logout functionality to securely terminate user sessions.

## Prerequisites

To run this project locally, you need to have the following software installed:

- PHP (>= 7.4.33)
- MariaDB 10.5.23 (for the database backend)
- A web server (>= nginx/1.18.0)

## Installation

1. Clone this repository to your local machine:

    ```bash
    git clone https://github.com/webserverdude/f5_xc_botd.git
    ```

2. Import the database schema (`users.sql`) into your MariaDB database:

    ```bash
    mysql -u your-username -p your-database-name < users.sql
    ```

3. Update the database connection details in `login.php`, `register.php`, and `index.php` with your MariaDB credentials:

    ```php
    $conn = new mysqli("localhost", "username", "password", "users");
    ```

4. Make sure your web server is running and PHP is enabled.

5. Navigate to the project directory in your web server's document root.

6. You're ready to go! Access the project in your web browser.

## Usage

- Register: Navigate to `register.html`, fill out the registration form, and submit.
- Login: Navigate to `login.html`, enter your credentials, and submit.
- Logout: Click on the "Logout" link on the index page (`index.php`) to terminate your session.
- Search: A search page vulnerable to SQLi (example: `' OR '1'='1`)

## License

This project is licensed under the GNU GPLv3 license.