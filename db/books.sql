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