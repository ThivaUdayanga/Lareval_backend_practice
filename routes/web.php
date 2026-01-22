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

Route::redirect('/welcome', '/greating', 301);

$context = ['name'=>'Thivanka', 'age'=>25];
Route::view('/myview', 'sample', $context);