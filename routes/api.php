<?php

use App\Http\Controllers\AllowedUserController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/singup',[UserController::class,'register']);
Route::post('/singin',[UserController::class,'singIn']);

Route::middleware(['auth:sanctum', 'abilities:admin'])->get('/user/getme',[UserController::class,'show']);

Route::middleware(['auth:sanctum', 'abilities:admin'])->apiResource('/category', CategoryController::class);

Route::middleware(['auth:sanctum', 'abilities:admin'])->apiResource('/collection', CollectionController::class);

Route::middleware(['auth:sanctum', 'abilities:admin'])->apiResource('/question', QuestionController::class);

Route::middleware(['auth:sanctum', 'abilities:admin'])->apiResource('/allowedUser', AllowedUserController::class);

Route::middleware(['auth:sanctum', 'abilities:admin'])->apiResource('/answer', AnswerController::class);

Route::middleware(['auth:sanctum', 'abilities:admin'])->apiResource('/result', ResultController::class);
