<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\time;
use Illuminate\Support\Facades\Route;

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
Route::get('/app', function () {
    return view('appoinment');
});
Route::get('/patient', function () {
    return view('details');
});
Route::get('/confirm_details', function () {
    return view('confirmdetails');
});
Route::get('/payment/success', function () {
    return view('payment');
});
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/payment/success', function () {
    return view('payment');
})->name('success');

Route::get('/payment/cancel', function () {
    return 'Payment was cancelled.';
})->name('cancel');

Route::get('t/{doctor}/{date}',[time::class,'cash']);