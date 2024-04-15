CREATE DATABASE users;
USE users;

CREATE TABLE user_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);



' CLI Oupput
root@php-dev:~# mariadb
MariaDB [(none)]> CREATE DATABASE users;
Query OK, 1 row affected (0.001 sec)

MariaDB [(none)]> USE users;
Database changed
MariaDB [users]> CREATE TABLE user_info (
    ->     id INT AUTO_INCREMENT PRIMARY KEY,
    ->     username VARCHAR(50) NOT NULL UNIQUE,
    ->     password VARCHAR(255) NOT NULL
    -> );
Query OK, 0 rows affected (0.005 sec)

MariaDB [users]> 
MariaDB [users]> 
MariaDB [users]> quit;
Bye
'