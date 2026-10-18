# DevBlog

DevBlog is a dynamic blog application and REST API built completely from scratch using native PHP, MySQL (PDO), JavaScript, HTML, and CSS, without relying on any external frameworks.

The project features a full public browsing interface, a secure administrator dashboard, and a complete REST API for article management.

## Features

- **Public Pages**: Browse home, view all articles, read specific article details, and interact with user layouts.
- **Admin Dashboard**: Secure login system (`admin/`), and complete management interfaces (`create-post.php`, `edite-post.php`, `delete.php`).
- **REST API (Articles)**: Full CRUD operations built with native PHP and PDO:
  - `GET /api/articles/` (Fetch all articles in JSON)
  - `GET /api/articles/show.php?id={id}` (Fetch a single article)
  - `POST /api/articles/create.php` (Create a new article)
  - `PUT /api/articles/update.php` (Update an existing article)
  - `DELETE /api/articles/delete.php` (Delete an article)
- **Visual Design**: Clean orange visual theme (`#FF9408`), responsive layouts, and custom CSS styling.

## Technologies

- **Backend**: Native PHP, PDO
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript (Fetch API / App scripts)
- **Tools**: XAMPP, Postman (for API testing), Git & GitHub

## Project Structure

```text
DevBlog/
├── api/
│   └── articles/
│       ├── create.php
│       ├── delete.php
│       ├── index.php
│       ├── show.php
│       └── update.php
├── database/
│   └── schema.sql
├── public/
│   ├── index.php
│   ├── article.php
│   ├── login.php
│   ├── logout.php
│   ├── admin/
│   │   ├── dashboard.php
│   │   ├── create-post.php
│   │   ├── edite-post.php
│   │   └── delete.php
│   ├── assets/
│   │   ├── css/
│   │   ├── images/
│   │   └── js/
│   └── include/
│       ├── header.php
│       └── footer.php
├── src/
│   ├── auth/
│   │   └── auth.php
│   ├── config/
│   │   └── db.php
│   ├── helpers/
│   │   └── response.php
│   ├── models/
│   │   ├── Comment.php
│   │   ├── Post.php
│   │   └── User.php
│   └── validation/
│       └── post-validation.php
├── storage/
│   └── uploads/
├── tests/
│   └── postman-tests.md
├── .gitignore
└── README.md