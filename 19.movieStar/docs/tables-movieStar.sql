USE movie_star;

CREATE TABLE users (
	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT, 
    name VARCHAR(100) NOT NULL,
    lastname VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    password VARCHAR(200) NOT NULL,
    image VARCHAR(255),
    bio TEXT,
    token VARCHAR(200) NOT NULL
);

CREATE TABLE categories (
	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100)
);

CREATE TABLE movies (
	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(200) NOT NULL,
    trailer VARCHAR(200),
    length VARCHAR(45),
    user_id INT UNSIGNED,
    category_id INT UNSIGNED,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY  (category_id) REFERENCES categories(id)
);

CREATE TABLE reviews (
	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    review INT NOT NULL,
    body VARCHAR(255),
    user_id INT UNSIGNED,
    movie_id INT UNSIGNED,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (movie_id) REFERENCES movies(id)
);

