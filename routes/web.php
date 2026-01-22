<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greating', function(){
    return 'Hello world';
});

Route::post('/greating', function() {
    return "Post Request sent";
});

Route::get('/greating/{id}', function($id) {
    return "Id request set ".$id;
});

Route::redirect('/welcome', '/greating', 301);

$context = ['name'=>'Thivanka', 'age'=>25];
Route::view('/myview', 'sample', $context);

Route::get('/optional/{name?}', function (?string $name = 'Guest') {
    return 'Hello '. $name;
});

// Route Regular Expression Constraints
Route::get('/user/{name}', function (string $name) {
    return 'User '.$name;
})->where('name', '[A-Za-z]+');
 
Route::get('/user/{id}', function (string $id) {
    return 'User Id '.$id;
})->where('id', '[0-9]+');
 
Route::get('/user/{id}/{name}', function (string $id, string $name) {
    return 'User Id '.$id.' User Name '.$name;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);