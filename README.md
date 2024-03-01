# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Clone the repository

    git clone https://github.com/KhantSiLwinMobilityManagement/Filament-test.git

Switch to the repo folder

    cd Filament-test

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Filament User Create

    php artisan make:filament-user

Generate a new application key

    php artisan key:generate

Run the database migrations and seeder(**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000/admin/login
