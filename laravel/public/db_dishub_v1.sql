CREATE DATABASE db_proyek_dishub;
USE db_proyek_dishub;
CREATE TABLE users (
    id INT(10)AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    PASSWORD VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE channels (
    id INT AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(255) NOT NULL,
    DESCRIPTION TEXT,
    city VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    content_type VARCHAR(255) NOT NULL,
    suscribe INT,
    followers INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE contents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    DESCRIPTION TEXT,
    channel_id INT,
    user_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (channel_id) REFERENCES channels(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);
CREATE TABLE watch_later (
    id INT AUTO_INCREMENT PRIMARY KEY,
    NAMES VARCHAR(255) NOT NULL,
    user_id INT,  -- Add this line to define user_id
    content_id INT,  -- Add this line to define content_id
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (content_id) REFERENCES contents(id)
);
CREATE TABLE play_list (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    user_id INT,  -- Add this line to define user_id
    content_id INT,  -- Add this line to define content_id
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (content_id) REFERENCES contents(id)
);
CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    COMMENT VARCHAR(1000) NOT NULL,
    STATUS VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_id INT,  -- Add this line to define user_id
    content_id INT,  -- Add this line to define content_id
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (content_id) REFERENCES contents(id)
);
CREATE TABLE suscribes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    user_id INT,  -- Add this line to define user_id
    content_id INT,  -- Add this line to define content_id
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (content_id) REFERENCES contents(id)
);

INSERT INTO users (name, email, password) VALUES
('John Doe', 'john.doe@example.com', 'password123'),
('Jane Smith', 'jane.smith@example.com', 'securepass'),
('Alice Johnson', 'alice.johnson@example.com', 'mypassword'),
('Bob Williams', 'bob.williams@example.com', 'pass123'),
('Eva Davis', 'eva.davis@example.com', 'letmein'),
('Charlie Brown', 'charlie.brown@example.com', 'p@ssw0rd'),
('Grace Taylor', 'grace.taylor@example.com', 'strongpassword'),
('Daniel Lee', 'daniel.lee@example.com', '12345'),
('Sophia Anderson', 'sophia.anderson@example.com', 'qwerty'),
('William Moore', 'william.moore@example.com', 'password567');

INSERT INTO channels (name, description, city, country, gender, content_type, suscribe, followers) VALUES
('Tech Explorers', 'Exploring the latest in technology', 'San Francisco', 'USA', 'Mixed', 'Technology', 5000, 20000),
('Travel Adventures', 'Discovering new places around the world', 'Paris', 'France', 'Mixed', 'Travel', 3000, 15000),
('Foodies Delight', 'A journey through delicious cuisines', 'New York', 'USA', 'Mixed', 'Food', 7000, 25000),
('Fitness Freaks', 'Get fit and stay healthy', 'London', 'UK', 'Mixed', 'Fitness', 4000, 18000),
('Music Mania', 'Exploring the world of music', 'Los Angeles', 'USA', 'Mixed', 'Music', 6000, 22000),
('Fashion Forward', 'The latest trends in fashion', 'Milan', 'Italy', 'Mixed', 'Fashion', 4500, 19000),
('Gaming Gurus', 'Mastering the gaming universe', 'Tokyo', 'Japan', 'Mixed', 'Gaming', 5500, 21000),
('Science Explained', 'Unraveling the mysteries of science', 'Berlin', 'Germany', 'Mixed', 'Science', 3500, 17000),
('Artistic Vibes', 'Celebrating creativity in all its forms', 'Barcelona', 'Spain', 'Mixed', 'Art', 5000, 20000),
('Nature Lovers', 'Connecting with the beauty of nature', 'Sydney', 'Australia', 'Mixed', 'Nature', 6500, 23000);

INSERT INTO contents (title, description, channel_id, user_id) VALUES
('Introduction to Artificial Intelligence', 'Learn the basics of AI and its applications', 1, 1),
('Paris: The City of Lights', 'Explore the enchanting streets and landmarks of Paris', 2, 2),
('Delicious Pasta Recipes', 'Discover mouthwatering pasta dishes from around the world', 3, 3),
('Full Body Workout Routine', 'Achieve your fitness goals with this comprehensive workout', 4, 4),
('Music Theory 101', 'Unlock the fundamentals of music theory for beginners', 5, 5),
('Fashion Trends 2023', 'Stay stylish with the latest fashion trends and tips', 6, 6),
('Top 10 Must-Play Video Games', 'Explore the most exciting video games of the year', 7, 7),
('The Wonders of Quantum Physics', 'Dive into the mind-bending world of quantum physics', 8, 8),
('Expressive Abstract Art Techniques', 'Create stunning abstract artworks with these techniques', 9, 9),
('Discovering Australias Wildlife', 'Explore the diverse wildlife of Australia', 10, 10);

INSERT INTO watch_later (names, user_id, content_id) VALUES
('AI Basics Tutorial', 1, 1),
('Paris Travel Documentary', 2, 2),
('Delicious Pasta Cooking Class', 3, 3),
('Full Body Workout Session', 4, 4),
('Music Theory Lecture', 5, 5),
('Fashion Trends Recap', 6, 6),
('Top Video Games Countdown', 7, 7),
('Quantum Physics Lecture', 8, 8),
('Abstract Art Workshop', 9, 9),
('Australian Wildlife Documentary', 10, 10);

INSERT INTO play_list (title, user_id, content_id) VALUES
('My AI Favorites', 1, 1),
('Travel Adventure Playlist', 2, 2),
('Cooking Delights', 3, 3),
('Fitness Motivation', 4, 4),
('Melodic Vibes', 5, 5),
('Fashionista Picks', 6, 6),
('Gaming Extravaganza', 7, 7),
('Science Wonders', 8, 8),
('Artistic Inspirations', 9, 9),
('Nature Escapes', 10, 10);

INSERT INTO comments (comment, status, user_id, content_id) VALUES
('Great tutorial! Very informative.', 'Approved', 1, 1),
('I love Paris! Such a beautiful city.', 'Pending', 2, 2),
('These recipes are making me hungry!', 'Approved', 3, 3),
('Awesome workout routine. Feeling the burn!', 'Approved', 4, 4),
('The music theory lecture was mind-blowing!', 'Pending', 5, 5),
('Fashion trends are always changing. Love it!', 'Approved', 6, 6),
('Top video games list is on point!', 'Pending', 7, 7),
('Quantum physics is so fascinating!', 'Approved', 8, 8),
('Abstract art workshop is inspiring!', 'Pending', 9, 9),
('Australia has such unique wildlife. Amazing!', 'Approved', 10, 10);

INSERT INTO suscribes (title, user_id, content_id) VALUES
('AI Enthusiasts', 1, 1),
('Travel Enthusiasts', 2, 2),
('Foodies Club', 3, 3),
('Fitness Enthusiasts', 4, 4),
('Music Lovers', 5, 5),
('Fashion Enthusiasts', 6, 6),
('Gaming Community', 7, 7),
('Science Geeks', 8, 8),
('Art Lovers', 9, 9),
('Nature Explorers', 10, 10);
