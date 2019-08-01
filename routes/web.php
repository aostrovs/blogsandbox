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

//class Dog {
//public $name;

//public function__construct($name)
//{
//$name= $name;
//}

//public function whatIsName()
//{
//return $this->$name;
//}

//public static function bark()
//{
//echo 'bark';
//}
//}

//$fido = new Dog('fido)');
//$fido->walk();

//Dog::bark()

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    //return view('temporary');
    return 'test';
});

Route::get('/blog/create', function () {
    return view('create');
})->name('create');

Route::get('/blog/all', "BlogController@all")->name('blogs');

// Route::post('/blog/create', function () {
//     return view('blog');
// });

Route::post('/blog/create', "BlogController@create");

//Route::get('/thisisapost', function () {
    //return view('made it here');
//});
