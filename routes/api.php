<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('/send_email', [EmailController::class, 'send_email'])->name('api.send_email');
Route::post('/trail_mail', [EmailController::class, 'trail_mail'])->name('api.trail_mail');
