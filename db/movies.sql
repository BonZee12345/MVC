CREATE DATABASE IF NOT EXISTS 2025_library_app;
USE 2025_library_app;

CREATE TABLE IF NOT EXISTS movies (
    movie_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    genre VARCHAR(100),
    release_year INT,
    director VARCHAR(255),
    stock_total INT DEFAULT 0,
    stock_available INT DEFAULT 0,
    movie_img VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- een veelgebruikt en zeer handig iets! 
);

INSERT INTO movies (title, genre, release_year, director, stock_total, stock_available, movie_img)
VALUES
    ('Inception',           'Science Fiction',  2010, 'Christopher Nolan',              10, 8, 'inception.jpg'),
    ('The Lion King',       'Animation',        1994, 'Roger Allers & Rob Minkoff',     7, 5, 'the-lion-king.webp'),
    ('The Matrix',          'Science Fiction',  1999, 'The Wachowskis',                 12, 10, 'the-matrix.jpg'),
    ('The Godfather',       'Crime',            1972, 'Francis Ford Coppola',           6, 4, 'the-godfather.jpg'),
    ('Interstellar',        'Science Fiction',  2014, 'Christopher Nolan',              15, 15, 'placeholder.jpg'),
    ('Spirited Away',       'Animation',        2001, 'Hayao Miyazaki',                 9, 7, 'spirited-away.jpg'),
    ('Pulp Fiction',        'Crime',            1994, 'Quentin Tarantino',              8, 6, 'pulp-fiction.jpg'),
    ('Shrek',               'Animation',        2001, 'Andrew Adamson & Vicky Jenson',  5, 3, 'shrek.jpg'),
    ('The Dark Knight',     'Action',           2008, 'Christopher Nolan',              14, 12, 'MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_FMjpg_UX1000_.jpg'),
    ('Back to the Future',  'Adventure',        1985, 'Robert Zemeckis',                10, 9, 'the-matrix.jpg');