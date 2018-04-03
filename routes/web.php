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


Route::get('new',[
    'uses' => 'PagesController@new',
]);

Route::get('todo',[
    'uses' => 'TodosController@index',
]);

Route::get('todo/delete/{id}',[
    'uses' => 'TodosController@delete',
]);

Route::get('todo/update/{id}',[
    'uses' => 'TodosController@update',
]);

Route::post('/save/{id}',[
    'uses' => 'TodosController@save',
]);

Route::post('/create/todo',[
    'uses' => 'TodosController@add',
]);


Route::get('todo/complete/{id}',[
    'uses' => 'TodosController@complete'
]);







