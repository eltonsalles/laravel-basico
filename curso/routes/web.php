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
| Route::METODO_HTTP
|
| get('rota', function() {})
| post('rota', function() {})
| delete('rota', function() {})
| put('rota', function() {})
| path('rota', function() {})
| options('rota', function() {})
| match(['get', 'post'], 'rota', function() {}) => Usando essa opção você diz que quando acessar
| tanto get quanto post ele vai fazer o que tiver na função
*/

Route::get('/', function () {
    return view('welcome');
});

/*
 * ...hello/{name}... O que esá dentro de chaves são parâmetros dinâmicos
 * ...hello/{name?}.. Usando '?' significa que o parâmetro name é opcional, sendo assim na função anonima
 * é necessário passar um valor default
 *
 * Route::get('/hello/{name?}', function ($name = 'Word') {
 *     return 'Hello ' . $name;
 * });
 *
 */

Route::get('/hello/{name?}', 'HelloController@index');
Route::post('/hello/{name?}', 'HelloController@render');

/*
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('pages', 'Admin\PagesController');
});
*/

Route::prefix('admin')
    ->middleware(['auth'])
    ->group(function () {
        Route::resource('pages', 'Admin\PagesController');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
