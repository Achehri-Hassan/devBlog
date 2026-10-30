# DevBlog

DevBlog is a dynamic blog application and REST API built completely from scratch using native PHP, MySQL (PDO), JavaScript, HTML, and CSS, without relying on any external frameworks.

The project features a full public browsing interface, a secure administrator dashboard, and a complete REST API for article management.

## Run with Docker

Start the application and its MySQL database from the project root:

```sh
docker compose up --build
```

Open [http://localhost:8080](http://localhost:8080). The article API is available
under `/api/articles/`. Docker initializes MySQL with `database/schema.sql` on
the first start; uploaded article images and database data are kept in named
volumes.

To use a different host port, set `APP_PORT` (for example,
`APP_PORT=9000 docker compose up --build`). Stop the services with
`docker compose down`; to also delete the persisted database and uploaded
images, use `docker compose down --volumes`.

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