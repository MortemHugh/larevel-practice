<?php

use Illuminate\Support\Facades\Route;

// Long syntax loading the view
// Route::get('/', function () {
//     return view('welcome');
// });

// Short syntax just to load a view
// Route::view('/', 'home' );

Route::view('/', 'welcome' );
