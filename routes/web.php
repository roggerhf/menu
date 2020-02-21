<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\getUsers;
Route::get('/set_language/{lang}', 'Controller@setLanguage')->name( 'set_language');

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
    return view('index');
});


Route::get('home','RestauranteController@home');
Route::post('registroPedido','RestauranteController@registroPedido');

Route::get('mozo','RestauranteController@mozo');
Route::get('cocinero','RestauranteController@cocinero');

Route::post('cambioEstado','RestauranteController@cambioEstado');

