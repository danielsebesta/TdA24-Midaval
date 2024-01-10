-- Vytvoření databáze
CREATE DATABASE IF NOT EXISTS lecturerdb;

GRANT ALL PRIVILEGES ON lecturerdb.* TO 'databaze'@'localhost';
FLUSH PRIVILEGES;

USE lecturerdb;

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
