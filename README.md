
# Login and Signup Form - PHP OOP & PDO 

PHP OOP script for a login and signup form. The script uses PDO to connect to a MySQL database.

## Description

This project is a simple login and signup form written in PHP using the Object Oriented Programming (OOP) paradigm. The script uses PDO to connect to a MySQL database. The script is designed to be easily integrated into any existing project.

It will validate if the user has entered a valid email address, username, and password. It will also check if the username or email address already exists in the database. If the user has entered valid information, the script will create a new account and log the user in.

Password hashing is used to store the user's password in the database. The password is hashed using the `password_hash()` function. The script will also check if the user has entered the correct password when logging in. The password is checked using the `password_verify()` function.

The script uses sessions to keep track of the user's login status. The user's username is stored in the session variable `$_SESSION['useruid'] = $user[0]['users_uid']`. 

The script uses prepared statements to prevent SQL injection. The script also uses prepared statements to check if the username or email address already exists in the database.

## Installation

To install this project, simply clone the repository:

git clone https://github.com/Rouy17Sept/oop-login.git

Then, copy the files to your web server or local machine running PHP.

## Personal portfolio website 

[Youri Jilderda](https://yjilderda.nl)

## Acknowledgments

* [Youtube - Dani Krossing](https://www.youtube.com/@Dani_Krossing)

