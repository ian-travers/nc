<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/','Home', ['name' => 'Ian Travers']);

Route::get('settings', function () {
    sleep(1);

    return Inertia::render('Settings');
});
