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
    git status then git add . then git status then git commit

*/
