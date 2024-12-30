<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'showIndex'])->name('index');
