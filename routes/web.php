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
 Route::get('/Contact','TestController@Contact');


Route::get('accueil',function(){
		return view('accueil');

});
Route::get('loginacc',function(){
		return view('loginacc');

});
Route::get('loginsec',function(){
		return view('loginsec');

});

Route::get('pnani',function(){
		return view('pnani');

});
Route::get('second',function(){
		return view('second');

});


Route::get('sinin',function(){
		return view('sinin');

});
Route::get('reg',function(){
		return view('reg');

});

Route::get('/Contact/{name}/numero/{id}',function($name,$id)
{

echo "je suis " . $name . "....." . $id ;

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
