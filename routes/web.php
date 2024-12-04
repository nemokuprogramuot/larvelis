<?php

use Illuminate\Support\Facades\Route;
$posts = [
    1 =>[
    'title' => 'Post 1',
    'content'=> 'This is the post 1',
    'is_new' => 'true',
    'authors' =>[
        1=> [
            'name' => 'John',
            'surname' => 'Doe'
        ],
    ],
        ],
    2 => [
        'title' => 'Post 2',
        'content'=> 'This is the post 2',
        'is_new' => 'false',
        'authors' =>[
            1 => [
                'name' => 'Joe',
                'surname' => 'Biden'

            ],
    ],
        ],
];
Route::get('/', static function () {
    return view('home.index',[]);
})->name('home.index');

Route::get('/contact', static function () {
    return view('home.contact',[]);
})->name('home.contact');

$variable = "";
Route::get('/publications', function () use ($variable){
    $variable = "aaaaaaa";
    return $variable;
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
