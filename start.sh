#!/bin/sh

# Start MariaDB
service mariadb start

# Create user databaze with generated password
export DB_PASSWORD=$(pwgen -Bs1 12)
echo "CREATE USER 'databaze'@'localhost' IDENTIFIED BY '$DB_PASSWORD'" | mysql

# Create the database
echo "CREATE DATABASE IF NOT EXISTS db" | mysql

# Import the database
mysql db < /app/database.sql

# Start Apache in the foreground
apache2ctl -D FOREGROUND

