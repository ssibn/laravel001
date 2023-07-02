<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\SendMailController;
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

Route::middleware('guest')->group(function() {
    Route::get('/login', [MainController::class, 'login']) -> name('login');
    Route::post('/login', [AuthController::class, 'postSignin']) -> name('postSignin');
    Route::get('/registration', [MainController::class, 'registration']) -> name('registration');
    Route::post('/registration', [AuthController::class, 'postRegistration']) -> name('postRegistration');
});

Route::get('/', [MainController::class, 'home']) -> name('home');
Route::get('/about', [MainController::class, 'about']) -> name('about');
Route::get('/form', [MainController::class, 'form']) -> name('form');
Route::post('/form/check', [MainController::class, 'form_check']) -> name('form_check');
Route::get('/test', [MainController::class, 'test']) -> name('test');

/*Route::get('/name/{id}/{name}/{age}', function ($id, $name, $age) {
    return 'ID: ' . $id . '<br>' . 'Name: ' . $name . '<br>' . 'Age: ' . $age;
});*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/send-email', [SendMailController::class, 'index']) ->middleware('auth');
Route::post('/send-email', function(Request $request){
    $sm = new SendMailController();
    return $sm -> send($request['message']);
}) -> middleware('auth');