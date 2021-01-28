
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Introduction
This application is a simple REST API backend for CRUD usage. It's capable to do Create, Read, Update and Delete data from the app's database through API endpoints using HTTP request methods such as GET, POST, PUT/PATCH, DELETE. Here's the list of the available endpoints:

![enter image description here](https://raw.githubusercontent.com/edrhyt/laravel-crud-api/master/public/images/endpoints.JPG)

## Installation
To install this application you have to install composer in your machine. Then install laravel package globally using composer. After got composer and laravel installed in your machine you can follow the steps below to get this application installed properly.

### Using Git Clone
If you have git installed in your machine you can follow simply open the terminal (cmd for windows user) then execute the command below.

    git clone https://github.com/edrhyt/laravel-crud-api.git

The command above will create a folder which is "laravel-crud-api" inside your active directory. After successfully clone the project then move to the "laravel-crud-api" folder using terminal with this command.

    cd ./laravel-crud-api

After that you can follow the rest of the steps.

### Using Git Download Zip
If you prefer to download the zip from the https://github.com/edrhyt/laravel-crud-api you can follow the steps below.

 1. Download the zip
 Go to the github repository by following the link above. Then download the zip as shown below.
 ![enter image description here](https://raw.githubusercontent.com/edrhyt/laravel-crud-api/master/public/images/zip_down.png)
 2. After successfully downloaded the zip, you can extract to wherever directory you wish using archive application you prefer (e.g WinRAR).
 3. Open terminal inside the downloaded folder which is "laravel-crud-api".

### Install dependencies
Before dependecies installation you have to rename the ".env.example" file to ".env". You can also do that in the terminal by typing this command (for windows user):

    ren .env.example .env
After successfully renaming the ".env" file you should good to go to the installation by typing the command below.

    composer update
After a while that should install all the required dependencies for the project to run properly.

### Configuring the Project
To configure the project correctly you can use these commands below and type it in the terminal. Make sure the MySQL server are running at port: 3306.

    php artisan key:generate  
    php artisan db:create laravel_eloquent_relationship  
    php artisan migrate --force  
    php artisan serve
Open browser then head to http://localhost:8000/ to see if it's running.

## Usage
To use the REST API service you can use application like Postman or Insomnia. Example are provided using Insomnia application in the [Example](http://localhost:8000/example) page. Or you can simply test using the browser by visiting the endpoints provided above. For example you can visit http://localhost:8000/api/v1/brands/ to make a GET http request.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
