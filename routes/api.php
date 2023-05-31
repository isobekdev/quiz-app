<?php

use App\Http\Controllers\AllowedUserController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum', 'verified')->get('/user', function(Request $request) {
    return $request->user();
});

Route::post('/signup',[UserController::class,'register']);
Route::post('/signin',[UserController::class,'singIn']);

Route::post('email/verification-notification',[EmailVerificationController::class, 'sendVerificationEmail'])->middleware('auth:sanctum');
Route::get('verify-email/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify')->middleware('auth:sanctum');
Route::middleware(['auth:sanctum', 'abilities:admin'])->get('/user/getme',[UserController::class,'show']);

Route::middleware(['auth:sanctum', 'abilities:admin'])->apiResource('/category', CategoryController::class);

Route::middleware(['auth:sanctum', 'abilities:admin'])->apiResource('/collection', CollectionController::class);

Route::middleware(['auth:sanctum', 'abilities:admin'])->apiResource('/question', QuestionController::class);

Route::middleware(['auth:sanctum', 'abilities:admin'])->apiResource('/allowedUser', AllowedUserController::class);

Route::middleware(['auth:sanctum', 'abilities:admin'])->apiResource('/answer', AnswerController::class);

Route::middleware(['auth:sanctum', 'abilities:admin'])->apiResource('/result', ResultController::class);
