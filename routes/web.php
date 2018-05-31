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

Route::get('/', 'HomeController@index')->name('home');

Route::resource('customer', 'CustomersController');
Route::resource('task',     'TasksController');
Route::resource('devis',    'DevisController');
/*———————————————————————————————————*\
        $ AUTH
\*———————————————————————————————————*/
Auth::routes();

/*———————————————————————————————————*\
        $ PDF
\*———————————————————————————————————*/
Route::get('/devis', 'pdfController@devis')->name('pdf.devis');