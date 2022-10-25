<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LangMiddleware;

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

Route::get('/lang/{lang}',function ($lang){
    App::setLocale($lang);  
    session()->put('locale', $lang);

    return redirect()->back();
});
Route::middleware([LangMiddleware::class])->group(function () {
    Route::post('/login', 'LoginController@login')->name('login');
    Route::get('/login', function () {
        return view('auth.login');
    });
    Route::get('/', function () {
        return view('welcome');
    });
    Route::post('/search',  'UserController@search');
    Route::post('/search/city',  'UserController@search_city');
    Route::get('/elon/{id}',  'UserController@elon');
    Route::get('/search',  'UserController@search');
    Auth::routes(['login'=>false]);

    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/add/save', 'HomeController@save');
    Route::middleware(['auth'])->group(function () {
        Route::get('/add',  'UserController@add');
        Route::get('/rasm/delete/{id}/{index}',  'UserController@rasm_delete');
        Route::get('/edit/{id}',  'UserController@edit');
        Route::post('/edit/save/{id}',  'HomeController@esave');
        Route::post('/delete/{id}',  'UserController@delete');
    });

    Route::prefix('/admin')->middleware(['auth'])->group(function () {
        Route::get('/', 'AdminController@index');
        Route::get('/category', 'CategoryController@index');
        Route::post('/category/save', 'CategoryController@save');
        Route::post('/category/edit/{id}', 'CategoryController@edit');
        Route::post('/category/delete/{id}', 'CategoryController@delete');
        Route::get('/shaxar', 'ShaxarController@index');
        Route::post('/shaxar/save', 'ShaxarController@save');
        Route::post('/shaxar/edit/{id}', 'ShaxarController@edit');
        Route::post('/shaxar/delete/{id}', 'ShaxarController@delete');
        Route::get('/mahalla', 'MahallaController@index');
        Route::post('/mahalla/save', 'MahallaController@save');
        Route::post('/mahalla/edit/{id}', 'MahallaController@edit');
        Route::post('/mahalla/delete/{id}', 'MahallaController@delete');


    });
});