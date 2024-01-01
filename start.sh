#!/bin/sh

# Start MariaDB
service mariadb start

# Create the database
echo "CREATE DATABASE IF NOT EXISTS db" | mysql

# Import the database
mysql db < /app/database.sql


chmod 666 /php/api/lecturers/database.db
chmod -R 664 /php/api/lecturers
chown -R www-data:www-data /php/api/lecturers

# Start Apache in the foreground
apache2ctl -D FOREGROUND

