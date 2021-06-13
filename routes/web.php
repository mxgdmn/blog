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

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/feedback-form', function () { return view('feedback-form'); })->name('feedback-form');
Route::post('/feedback-send', [ContactsController::class, 'sendFeedbackMessage'])->name('feedback-send');
Route::get('/feedback-messages', [ContactsController::class, 'showFeedbackMessages'])->name('feedback-messages');
Route::get('/feedback/message/{id}', [ContactsController::class, 'showOneFeedbackMessage'])->name('feedback-message');
Route::get('/feedback/message/{id}/edit', [ContactsController::class, 'editFeedbackMessage'])->name('feedback-edit');
Route::post('/feedback/message/{id}/update', [ContactsController::class, 'updateFeedbackMessage'])->name('feedback-update');
Route::get('/feedback/message/{id}/delete', [ContactsController::class, 'deleteFeedbackMessage'])->name('feedback-delete');
