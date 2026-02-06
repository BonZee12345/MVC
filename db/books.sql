CREATE DATABASE IF NOT EXISTS 2025_library_app;
USE 2025_library_app;

-- Table to store books
CREATE TABLE IF NOT EXISTS books (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    book_name VARCHAR(255),
    author VARCHAR(255),
    publication_year INT(4),
    book_status INT(1),
    book_img VARCHAR(255)
);

-- Insert data
INSERT INTO books (book_name, author, publication_year, book_status, book_img) VALUES
    ('The Midnight Library', 'Matt Haig',       2020, 1, 'midnight_library.jpg'),
    ('Educated', 'Tara Westover',               2018, 0, 'educated.jpg'),
    ('Where the Crawdads Sing', 'Delia Owens',  2018, 1, 'where_the_crawdads_sing.jpg'),
    ('Becoming', 'Michelle Obama',              2018, 0, 'becoming.jpg'),
    ('Project Hail Mary', 'Andy Weir',          2021, 1, 'project_hail_mary.jpg'),
    ('The Vanishing Half', 'Brit Bennett',      2020, 1, 'the_vanishing_half.jpg'),
    ('Atomic Habits', 'James Clear',            2018, 0, 'atomic_habits.jpg'),
    ('Normal People', 'Sally Rooney',           2018, 0, 'normal_people.jpg');
 

-- Vriendelijke groeten
-- Mnr. Fiers
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

    CREATE TABLE IF NOT EXISTS wishlist (
        wishlsit_id INT AUTO_INCREMENT,
        book_id INT, book_name
    );