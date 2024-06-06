<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/send-email/{order}', [OrderController::class, 'sendEmail']);
Route::get('/send-notification/{invoice}', [NotificationController::class, 'sendNotification']);
Route::get('/invoices/{id}', [InvoiceController::class, 'show']);
