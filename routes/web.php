<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dataset;


Route::resource('dataset', Dataset::class);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/team', [Dataset::class, 'team']);
Route::get('/project', [Dataset::class, 'project']);
Route::get('/project2', [Dataset::class, 'project2']);

