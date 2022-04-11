<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Ian Travers',
    ]);
});

Route::get('settings', function () {
    return Inertia::render('Settings');
});
