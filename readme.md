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
0. `ng build`

## To Do ##
`composer dump-autoload && 
php artisan cache:clear && 
php artisan migrate && ng build` after each git pull
 
## Used frameworks

[Laravel](http://laravel.com/) <br>
[bootstrap3](http://bootstrap3.com/).
[Angular4](https://angular.io/).

## License
[MIT license](http://opensource.org/licenses/MIT).

