<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MailController;
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

// Route::get('/', function () {
//     return view('techstone.landpage');
// });
Route::get('/', [PageController::class, 'landpage']);
Route::get('/about', [PageController::class, 'aboutpage']);
Route::get('/services', [PageController::class, 'servicepage']);
Route::get('/request', [PageController::class, 'requestpage']);
Route::get('/contact', [PageController::class, 'contactpage']);
Route::get('/thankyou', [PageController::class, 'thankyoupage']);
// Route::get('/email', 'MailController@create');
// Route::post('/email', 'MailController@sendEmail')->name('techstone.requestpage');
// Route::get('/subscribe', [MailController::class, 'subscribeForm']);
// Route::get('/contact', [MailController::class, 'contactForm']);
Route::post('/contact', [MailController::class, 'sendContactEmail'])->name('contact');
Route::post('/subscribe', [MailController::class, 'sendSubscribeEmail'])->name('subscribe');
Route::post('/request',[MailController::class, 'RequestQuoteEmail'])->name('request');
