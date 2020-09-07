<?php

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
Route::get('/', function () {
  return view('welcome');
});
Route::get('/hello', function () {
  return view('hello');
});

/*Route::get('/{name}', function ($name) {
  return view('welcome',['you'=>$name]);
});*/

//Route::redirect('/hello','login');

Route::get('/login', function () {
    return view('login');});

Route::get('/registration', function () {
    return view('registration');});

Route::get('users','login@demo');   
Route::get('regc',"registration@reg");
//Route::get('menu','menu_pages@menu_items');
//Route::get('/menu_pages',function(){
  //  return view('menu_pages');
//});
Route::post('upload','file_upload@upload');
Route::view('/file','file_upload');
Route::view('/insert','insert');
Route::get('insertc','insert@upload');
Route::view('update','update');
Route::get('updatec','insert@update');
Route::view('delete','delete');
Route::get('deletec','insert@delete');

