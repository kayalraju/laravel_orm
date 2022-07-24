<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneToManyController;

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
/****One to one relationship */
 Route::get('/add_data',[OneToOneController::class,'add_data']);
 //get mobile through customer table 
 Route::get('/show_mobile/{id}',[OneToOneController::class,'getmobile']);
 //get customer through mobile table 
 Route::get('/show_customer/{id}',[OneToOneController::class,'getCustomer']);

//show customet through mobile table in blade templete
Route::get('/show_customer_view/{id}',[OneToOneController::class,'getCustomerBlade']);
//fetch both table data
Route::get('/fetchAllData/{id}',[OneToOneController::class,'fetchAllData']);



/******************One to many relationship */

    //add author
Route::get('/add_author',[OneToManyController::class,'add_author']);
 //add post
 Route::get('/add_post/{id}',[OneToManyController::class,'add_post']);

   //get post base from author id
 Route::get('/show_post/{id}',[OneToManyController::class,'show_post']);

  //get author base from post id
  Route::get('/show_author/{id}',[OneToManyController::class,'show_author']);
  Route::get('/all_post_author/{id}',[OneToManyController::class,'all_post_author']);