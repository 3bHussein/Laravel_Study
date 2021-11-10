<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\UserController;
use Illuminate\Support\Facades\Route;

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




Route::get('/about','UserController@showuser')->name('about');

Route::get('/g',function(){

});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/get','Controller@index')->name('home');

// route name
Route::namespace('Front')->group(function(){
    //that main all route  here access from only controller  in folder folder call front;
    Route::get('totalSt/{id}',function($id){
        return $id;
    })->name('ToS');


});