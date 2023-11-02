<?php

use Illuminate\Support\Facades\Route;
 
Route::get('/greeting', function () {
    return 'Hello World';
});



use App\Http\Controllers\UserController;
 
Route::get('/user', [UserController::class, 'index']);


//регистрация маршрутов
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);


Route::match(['get', 'post'], '/', function () {
    //
});
 
Route::any('/', function () {
    //
});


//Внедрение зависимостей
use Illuminate\Http\Request;
 
Route::get('/users', function (Request $request) {
    // ...
});

//маршруты перенаправления
Route::redirect('/here', '/there');
Route::redirect('/here', '/there', 301);
Route::permanentRedirect('/here', '/there');


// просмотр маршрутов
Route::view('/welcome', 'welcome');
 
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

