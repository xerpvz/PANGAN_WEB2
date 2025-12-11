Welcome to my Laravel Portfolio Website!
This project is built using the Laravel framework and showcases my skills, projects, and experiences as a Computer Science student and aspiring developer.

🚀 About This Project

This portfolio serves as:

A personal space to highlight my background and skills

A showcase of the projects I’ve built

A platform to present my education and work experience

An accessible way to contact me

Designed with a modern, clean, and responsive layout.

🛠️ Built With

Laravel 10+ (Blade templating engine)

PHP 8+

Tailwind CSS (or your chosen CSS framework)

MySQL (optional)

JavaScript

Composer & Artisan

📦 Installation & Setup

Follow these steps to run the project locally:

1. Clone the repository
git clone https://github.com/your-username/your-portfolio.git
cd your-portfolio

2. Install dependencies
composer install
npm install
npm run build

3. Configure the environment

Copy the example .env file:

cp .env.example .env


Generate the application key:

php artisan key:generate

4. Optional – Set up database

If your portfolio uses a database:

Create a new MySQL database

Update DB settings inside .env

Then run migrations:

php artisan migrate

5. Run the development server
php artisan serve


Visit your app at:

http://127.0.0.1:8000

📁 Project Structure
app/
resources/
    ├── views/
    │     ├── home.blade.php
    │     ├── about.blade.php
    │     ├── projects.blade.php
    │     └── contact.blade.php
public/
routes/
    └── web.php

🎨 Features

Fully responsive modern UI

Home, About, Education, Works, and Contact.

Blade templating for clean structure

Reusable components

Smooth navigation and organized layout

📞 Contact

If you’d like to reach out, feel free to contact me through the details on the portfolio.

💛 Acknowledgements

Thank you for viewing my project!
This portfolio will continue to grow as I build more projects and improve my skills.