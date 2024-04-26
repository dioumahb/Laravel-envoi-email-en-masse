<?php

use App\Http\Controllers\SendMassEmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SendMassEmailController::class, 'index']);

Route::get('/send-email', [SendMassEmailController::class, 'sendEmail'])->name('sendEmail');
