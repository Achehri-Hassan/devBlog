# DevBlog

DevBlog is a simple blog application built from scratch using HTML, CSS, JavaScript, PHP, and MySQL, without using any frameworks.

The project allows visitors to browse articles and read their details. It also includes an admin system for managing articles.

## Features

- Home page
- Display all articles
- View article details
- Dynamic article content retrieved from MySQL
- Article images and categories
- PHP and MySQL database connection using PDO
- Article CRUD operations:
  - Create articles
  - Read articles
  - Update articles
  - Delete articles
- Responsive user interface
- Orange theme: `#FF9408`

## Technologies

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
│   ├── articles.php
│   ├── article.php
│   └── assets/
│       ├── css/
│       │   ├── style.css
│       │   ├── articles.css
│       │   └── article-details.css
│       └── js/
│           └── app.js
├── src/
│   ├── config/
│   │   └── db.php
│   └── models/
│       └── Post.php
├── README.md
└── .gitignore
```

## Database

The project uses a MySQL database named `devBlog`.

### Articles Table

The `articles` table contains the following fields:

- `id_article`: Unique article ID
- `title`: Article title
- `description`: Article content
- `image`: Article image path
- `admin_id`: ID of the administrator who created the article
- `category`: Article category
- `created_at`: Creation date
- `updated_at`: Last update date

## Installation

1. Clone or download this repository.
2. Place the project inside your XAMPP `htdocs` directory.
3. Start Apache and MySQL from the XAMPP Control Panel.
4. Create the `devBlog` database in phpMyAdmin.
5. Create the required tables and insert your sample data.
6. Configure your database connection in `src/config/db.php`.
7. Open the application in your browser:

   `http://localhost/DevBlog/public/`

## Current Progress

The frontend pages have been created, and the PHP/MySQL integration allows articles to be retrieved and displayed dynamically.

The article CRUD operations have been implemented.

## Next Steps

- Complete and improve the comments feature.
- Implement administrator authentication and protect the dashboard.
- Build a REST API for articles and comments.
- Test API endpoints using Postman.
- Use HTTP methods such as GET, POST, PUT, PATCH, and DELETE.
- Connect the API to JavaScript using Fetch API.
- Improve validation and application security.

## Security

Security improvements include:

- Using PDO prepared statements for database queries.
- Using `password_hash()` and `password_verify()` for passwords.
- Using `htmlspecialchars()` to help prevent XSS.
- Validating user input on the server.
- Protecting administrator pages with sessions.

## Author

**Hassan Achehri**

Full-Stack Web Development Learner