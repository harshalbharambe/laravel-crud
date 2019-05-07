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

Route::resource('contacts', 'ContactController');
Route::resource('contacts2', 'ContactController2');

Route::get('/getData', function()
{
$fetchData = DB::select('select * from users where id = ?', array(1));
echo "<pre>";
print_r($fetchData);
echo "</pre>";
});

Route::get('/myLink', function (){
    echo "<h2> This is Link Page</h2>";
	$fetchData = DB::select('select * from users where id = ?', array(1));
echo "<pre>";
print_r($fetchData);
echo "</pre>";
});

Route::post('foo', function(){
 print_r($_REQUEST);
});

Route::get('foo', function(){
 echo '<form method="POST" action="foo">';
 echo 'Enter Name:<input type="text" name="name">';
 echo '<input type="submit">';
 echo csrf_field();
 echo '</form>';
 
});

Route::get('/indexLink', 'ContactController@index');


Route::get('/hello', function () {
    return view('contacts.hello',['name'=>'Harshal']);
});

Route::get('/home', 'homeController@index');

