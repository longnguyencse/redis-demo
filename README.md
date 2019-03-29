# redis-demo
composer global require laravel/installer

laravel new redis-demo

php artisan serve


php artisan make:model Store -m
php artisan make:model Products -m

php artisan migrate

php artisan make:seeder StoreTableSeeder

php artisan make:seeder ProductsTableSeeder




php artisan db:seed


php artisan make:controller ProductsController


composer require predis/predis
