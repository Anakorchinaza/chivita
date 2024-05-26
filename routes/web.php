<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PollsController;

Route::get('/', function () {
    return view('index');
});

Route::post('/submit-user-details', [UserController::class, 'store'])->name('user.details.submit'); 

Route::controller(PollsController::class)->group(function(){
    Route::get('/thank-you', 'thankYou')->name('thank.you');
    Route::post('/save-answers', 'saveAnswers')->name('save.answers');
});
