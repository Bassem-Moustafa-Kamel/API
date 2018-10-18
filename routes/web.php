<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
1) We want to create a model for the products called Product, but we want to create migration, factory and resouce controller at the same time : php artisan make:model Model/Product -a
2) Do the same thing with reviews : php artisan make:model Mode/Review -a
3) Go to api.php file ctrl + p then type api.php
4) Make the apiResource for the products and reviews then push everything on github :
git status then git add . then git status then git commit -m 'Created Model -a' then git push

5) Now its time for the migration process, so got the products and reviews mgration fiels and implement them
6) Create and database and set its connection with the application to run the migration command : php artisan migrate
7) Create a folder called db and export the database created and paste it in this folder, so at every commit you get the database too
8) Push everthing on github again

9) We want to push some data to the databse through the factories, so go to the ProductFactory and ReviewFactory to add some data
10) Now we add the data, to seed them go to the seeder then run the seed artisan command : php artisan db:seed
11) Export the database againg and place it in the db folder the push on github again

12) Lets build some relationships between the products and reviews,so go to the Product and Review models
13) Go to the tinker to test the relationship
14)



*/
