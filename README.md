# CAMAG Web Application README

## Overview
CAMAG is a web application built using Laravel (a PHP framework) for the backend and Vite (a frontend build tool) for the frontend. This README provides step-by-step instructions on how to clone the project from GitHub , create a new branch to work on, and set up the application to run locally.

## Prerequisites
Before you begin, ensure you have the following software installed on your system:
- Composer (https://getcomposer.org/) - PHP package manager.
- Node.js (https://nodejs.org/) - JavaScript runtime environment.
- MySQL (https://www.mysql.com/) - Database management system.
- PHP 8.0+

## Clone the Repository
1. Open your terminal or command prompt.
2. Navigate to the directory where you want to clone the project.
3. Run the following command to clone the repository from the GitHub branch:

```bash
git clone -b branch_name https://github.com/your_username/CAMAG_GH.git
```

Replace `branch_name` with the name of the branch you want to clone.

## Create a New Branch
1. Change into the project directory:

```bash
cd CAMAG_GH
```

2. Create a new branch for your work:

```bash
git checkout -b new_branch_name
```

Replace `new_branch_name` with a descriptive name for your branch.

## Configure Database
Before running the application, you need to update the database configuration.

1. Open the `config/database.php` file in the project.
2. In the MySQL configuration array, make sure the 'engine' option is set to 'InnoDB':

```php
'mysql' => [
    // Other config options...
    'engine' => 'InnoDB',
],
```

## Install Dependencies
1. Install backend dependencies using Composer:

```bash
composer install
```

2. Install frontend dependencies using npm:

```bash
npm install
```

## Environment Configuration

1. Create a copy of the `.env.example` file and save it as `.env`.

```bash
cp .env.example .env
```

2. Generate an application key:

```bash
php artisan key:generate
```

## Database Migration
Before running the application, you need to migrate the database:

```bash
php artisan migrate
```

This command will create the necessary database tables.

## Build Assets
To build the frontend assets using Vite, run:

```bash
npm run dev
```

This command will compile the assets and make them ready for the application.

## Start the Development Server
To run the CAMAG web application, use the following command:

```bash
php artisan serve
```

This will start the Laravel development server, and you should see an output indicating the application is running at a specific URL, e.g., http://localhost:8000.

## Access the Application
Open your web browser and visit the URL where the application is running (e.g., http://localhost:8000). You should see the CAMAG web application homepage.

Now you are ready to work on the CAMAG web application. Make sure to commit your changes to the new branch you created and push them to the repository when you are done.

## Additional Configuration

Depending on the application's requirements, you might need to configure additional settings in the `.env` file, such as database credentials, email configuration, and more.

## Making Changes and Committing

While you work on your new branch, make changes to the codebase as needed. Use `git add` and `git commit` to stage and commit your changes:

```bash
git add .
git commit -m "Your commit message here"
```

## Pushing Changes to GitHub

To push your new branch and changes to the GitHub repository:

```bash
git push origin new_branch_name
```

Replace `new_branch_name` with the name of your branch.

You can then create a pull request on GitHub to merge your changes into the main repository.

## Additional Notes
- Before pushing your changes to the remote repository, always pull the latest changes from the main branch to avoid conflicts.
- If you encounter any issues, refer to the project's documentation or seek help from the project team.

## Payment Model
