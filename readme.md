# My Portfolio Web-page

It is my Portfolio WEB-page.

## Installation ##
0. `sudo chgrp -R www-data storage bootstrap/cache`
0. `sudo chmod -R ug+rwx storage bootstrap/cache`
0. `cp .env.example .env`
0. `nano .env`  -- configure env (pusher keys are reuqired)
0. `composer install`
0. `php artisan key:generate`
0. `php artisan storage:link`
0. `php artisan migrate`
0. `php artisan db:seed`
0. `php artisan voyager:install`

## To Do ##
`composer dump-autoload && 
php artisan cache:clear && 
php artisan migrate` after each git pull

## To Do on hosting ##
`php-7.1 composer.phar dump-autoload && 
 php-7.1 artisan cache:clear && 
 php-7.1 artisan migrate` after each git ftp pull
 
## Used frameworks

[Laravel](http://laravel.com/) <br>
[bootstrap3](http://bootstrap3.com/).

## License
[MIT license](http://opensource.org/licenses/MIT).

