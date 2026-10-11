
CREATE DATABASE IF NOT EXISTS devBlog
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE devBlog;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE articles (
    id_article INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255),
    admin_id INT NOT NULL,
    category VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (admin_id)
        REFERENCES users(id)
        ON DELETE RESTRICT
);

CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL,
    content TEXT NOT NULL,
    article_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (article_id)
        REFERENCES articles(id_article)
        ON DELETE CASCADE
);
