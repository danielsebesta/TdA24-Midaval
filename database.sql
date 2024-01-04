-- Vytvoření databáze
CREATE DATABASE IF NOT EXISTS lecturerdb;

CREATE USER 'databaze'@'localhost' IDENTIFIED BY '${{ secrets.DB_PASSWORD }}';
GRANT ALL PRIVILEGES ON mydatabase.* TO 'databaze'@'localhost';
FLUSH PRIVILEGES;

USE mydatabase;

CREATE TABLE IF NOT EXISTS lecturers (
    uuid TEXT NOT NULL,
    title_before TEXT,
    first_name TEXT NOT NULL,
    middle_name TEXT,
    last_name TEXT NOT NULL,
    title_after TEXT,
    picture_url TEXT,
    location TEXT,
    claim TEXT,
    bio TEXT,
    tags TEXT,
    price_per_hour INT,
    contact TEXT
);
