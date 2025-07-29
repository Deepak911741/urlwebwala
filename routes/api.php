<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [App\Http\Controllers\Login::class, 'checkLogin']);
Route::prefix('admin/v1')->group(function () {
    
    Route::get('contact/filter', [App\Http\Controllers\ContactController::class, 'list']);
    Route::post('contact/add', [App\Http\Controllers\ContactController::class, 'add']);
    
    Route::get('newslatter/filter', [App\Http\Controllers\NewslatterController::class, 'list']);
    Route::post('newslatter/add', [App\Http\Controllers\NewslatterController::class, 'add']);
    
    Route::get('service/filter', [App\Http\Controllers\ServiceController::class, 'list']);
    Route::post('service/add', [App\Http\Controllers\ServiceController::class, 'add']);
    Route::post('service/update/{id}', [App\Http\Controllers\ServiceController::class, 'edit']);
    Route::post('service/delete', [App\Http\Controllers\ServiceController::class, 'delete']);
    Route::post('service/statusUpdate', [App\Http\Controllers\ServiceController::class, 'updateStatus']);
    
    Route::get('testinomial/filter', [App\Http\Controllers\TestinomialController::class, 'list']);
    Route::post('testinomial/add', [App\Http\Controllers\TestinomialController::class, 'add']);
    Route::post('testinomial/update/{id}', [App\Http\Controllers\TestinomialController::class, 'edit']);
    Route::post('testinomial/delete', [App\Http\Controllers\TestinomialController::class, 'delete']);
    Route::post('testinomial/statusUpdate', [App\Http\Controllers\TestinomialController::class, 'updateStatus']);
    
    Route::get('client/filter', [App\Http\Controllers\ClientController::class, 'list']);
    Route::post('client/add', [App\Http\Controllers\ClientController::class, 'add']);
    Route::post('client/update/{id}', [App\Http\Controllers\ClientController::class, 'edit']);
    Route::post('client/delete', [App\Http\Controllers\ClientController::class, 'delete']);
    Route::post('client/statusUpdate', [App\Http\Controllers\ClientController::class, 'updateStatus']);
    
    Route::get('blog/filter', [App\Http\Controllers\BlogController::class, 'list']);
    Route::post('blog/add', [App\Http\Controllers\BlogController::class, 'add']);
    Route::post('blog/update/{id}', [App\Http\Controllers\BlogController::class, 'edit']);
    Route::post('blog/delete', [App\Http\Controllers\BlogController::class, 'delete']);
    Route::post('blog/statusUpdate', [App\Http\Controllers\BlogController::class, 'updateStatus']);
    
    Route::get('seo/filter', [App\Http\Controllers\seoContentController::class, 'list']);
    Route::post('seo/add', [App\Http\Controllers\seoContentController::class, 'add']);
    Route::post('seo/update/{id}', [App\Http\Controllers\seoContentController::class, 'edit']);
    
    Route::post('category/add', [App\Http\Controllers\CategoryController::class, 'add']);
    Route::get('category/filter', [App\Http\Controllers\CategoryController::class, 'list']);
    Route::post('category/delete', [App\Http\Controllers\CategoryController::class, 'delete']);
    Route::post('category/update/{id}', [App\Http\Controllers\CategoryController::class, 'edit']);
    Route::post('category/updateStatus', [App\Http\Controllers\CategoryController::class, 'updateStatus']);
});