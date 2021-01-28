@ECHO OFF 
:: This batch file details is for Laravel CRUD API Installation purpose.
TITLE Installing Laravel CRUD API
ECHO Please wait... Checking system information.
:: Section 1: Windows 10 information
ECHO ==========================
ECHO Installing Laravel CRUD API
ECHO ============================
ren .env.example .env
composer update
php artisan key:generate
php artisan db:create laravel_eloquent_relationship
php artisan migrate --force
php artisan serve
ECHO Installation completed...
PAUSE