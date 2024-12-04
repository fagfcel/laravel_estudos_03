<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function()
{
    echo 'Blade Layout!';
});

Route::get('/show', [MainController::class, 'showPage']);