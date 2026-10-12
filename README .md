# DevBlog

DevBlog is a blog application built progressively to practice web development using HTML, CSS, JavaScript, PHP, and MySQL.

## Project Overview

The project aims to build a functional blog with a dynamic frontend, a PHP backend, and a MySQL database.

The interface uses a clean design, consistent navigation, and orange (`#FF9408`) as the main accent color.

## Designed Interfaces

- Home page
- Articles listing page
- Article details page
- Login page
- Admin dashboard

## Implemented Features

- MySQL database connection using PHP and PDO.
- Database table creation for articles.
- Insertion of sample articles into the database.
- Retrieving all articles using the `ReadAll()` function.
- Retrieving a specific article using the `ReadById()` function.
- Dynamic display of article titles, descriptions, categories, images, and content.
- Displaying full article content with HTML paragraphs and headings.
- Dynamic navigation between article details using article IDs.

## Technologies Used

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL
- PDO
- Git and GitHub

## Project Structure

```text
DevBlog/
├── public/
│   ├── index.php
│   ├── article.php
│   └── assets/
├── src/
│   ├── config/
│   │   └── db.php
│   └── models/
│       └── Post.php
├── README.md
└── .gitignore
```

*Note: The structure may vary depending on the current project organization.*

## Getting Started

### Requirements

- PHP
- MySQL
- Apache server (XAMPP recommended)
- Web browser

### Installation

1. Clone or download the repository.
2. Place the project folder inside the XAMPP `htdocs` directory.
3. Start Apache and MySQL from the XAMPP Control Panel.
4. Create a MySQL database named `devBlog`.
5. Import or create the required database tables.
6. Configure the database connection in `src/config/db.php`.
7. Open the following URL in your browser:

```text
http://localhost/devBlog/public/
```

Make sure the database credentials and project path match your local environment.

## Future Improvements

- Implement complete CRUD operations for articles.
- Add article editing and deletion.
- Implement comments and database relationships.
- Add administrator authentication and authorization.
- Develop a REST API using PHP.
- Work with HTTP methods such as `GET`, `POST`, `PUT`, `PATCH`, and `DELETE`.
- Connect the frontend to the API using JavaScript and Fetch API.
- Test API requests using Postman.
- Improve input validation and application security.

## Project Goal

The goal of DevBlog is to build a complete blog application step by step, from frontend design and database integration to backend development and REST API implementation.

## Author

**Hassan Achehri**
