<?php

use App\Http\Controllers\GlobalController;
use App\Http\Controllers\MailController;
use App\Http\Middleware\XssSanitizer;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

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

Route::get('/', [GlobalController::class, 'index']);
Route::get('en', [GlobalController::class, 'indexen']);
Route::get('secure_mail', function () {
    return view('secure_mail');
});
Route::get('secure_mail_en', function () {
    return view('secure_mail_en');
});

// mes routes avec middleware throttle______________________
Route::middleware(['throttle:global'])->group(function () {

Route::post('contact', [MailController::class, 'sendMessage'])->middleware(XssSanitizer::class);
Route::post('bulksave', [GlobalController::class, 'bulksave']);
Route::post('bulksaveemail', [GlobalController::class, 'bulksaveemail']);
});