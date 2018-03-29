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



Auth::routes();

Route::get('/yukle',function (){
   \App\User::create([
       'name' => 'Esma',
       'surname' => 'TURAN',
       'email'=> 'info@semihduman.net',
       'password' => bcrypt('123456'),
       'rutbe' => 1
   ]) ;

   return redirect('/');
});

Route::middleware('yonetici')->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
});

