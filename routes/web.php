<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('registration','homeController@registration');
Route::post('registred','homeController@registred');



Route::get('login','homeController@login');
Route::post('/login-status','homeController@admin_login');
Route::get('/admin/logout','homeController@admin_logout');


//dashboard route
Route::get('admin/dashboard', 'dashboardController@admin_dashboard');



Route::get('add-product','ProductController@add_product');
Route::resource('product',ProductController::class);


// Route::get('add-inventory','InventoryController@add_inventory');
Route::resource('inventory',InventoryController::class);




Route::get('/', function () {
    return view('/login');


});


