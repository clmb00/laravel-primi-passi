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

Route::get('/', function(){

    $msg = 'Hello';

    $data = [
        'name' => 'John',
        'surname' => 'Dove',
        'age' => '37',
        'email' => 'dove.john77@mail.com',
        'role' => 'CEO',
        'hobbies' => ['Cars', 'Soccer', 'Books']
    ];

    return view('home', compact('msg','data'));
});

Route::get('/about-me', function(){

    $img = 'https://i.picsum.photos/id/19/400/400.jpg?hmac=v2_t0RlKnDVx_OlDdbfL5SzRrBPOxzYMOYLbqWjour0';

    return view('about-me', compact('img'));
});
