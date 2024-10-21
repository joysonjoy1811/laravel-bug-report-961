<?php

use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test/foo', [TestController::class, 'foo']);
Route::post('/test/bar', [TestController::class, 'bar']);