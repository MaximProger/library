CREATE DATABASE library;

USE library;

CREATE TABLE books (title VARCHAR(50), description TEXT(100),
       author VARCHAR(50), id INT PRIMARY KEY NOT NULL AUTO_INCREMENT);

CREATE TABLE authors (name VARCHAR(50), id INT PRIMARY KEY NOT NULL AUTO_INCREMENT);


INSERT INTO books (title, description, author) 
VALUES ('Psychoanalysis', 'Psychoanalysis is defined as a set of psychological theories and therapeutic techniques that have their origin in the work and theories of Sigmund Freud. The core idea at the center of psychoanalysis is the belief that all people possess unconscious thoughts, feelings, desires, and memories.', 'Freud');
        
INSERT INTO books (title, description, author) 
VALUES ('Principles of physiological psychology', '…in the history of psychology, Grundzüge der physiologischen Psychologie, 2 vol. (1873–74; 3 vol., 6th ed., 1908–11; Principles of Physiological Psychology). The Grundzüge advanced a system of psychology that sought to investigate the immediate experiences of consciousness, including sensations, feelings, volitions, and ideas; it also contained the concept of apperception,…', 'Wundt');

INSERT INTO books (title, description, author) 
VALUES ('The Red Book', 'While the work has in past years been descriptively called simply "The Red Book", Jung did emboss a formal title on the spine of his leather-bound folio: he titled the work Liber Novus (in Latin, the "New Book"). His manuscript is now increasingly cited as Liber Novus, and under this title implicitly includes draft material intended for but never finally transcribed into the red leather folio proper.', 'Jung ');

INSERT INTO authors (name) 
VALUES ('mcWilliams');
        
INSERT INTO authors (name) 
VALUES ('Jung');

INSERT INTO authors (name) 
VALUES ('Vunt');

INSERT INTO authors (name) 
VALUES ('Gorky');

INSERT INTO authors (name) 
VALUES ('Wundt');