<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::post('/contacts/submit', [ContactsController::class, 'submit'])->name('contact-form');
Route::get('/contacts/all', [ContactsController::class, 'allData'])->name('contact-data');
Route::get('/contacts/all/{id}', [ContactsController::class, 'userData'])->name('user-data');
