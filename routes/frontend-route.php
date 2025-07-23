<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Frontend::class, 'Home']);
Route::get('about', [App\Http\Controllers\Frontend::class, 'About']);
Route::get('career', [App\Http\Controllers\Frontend::class, 'Career']);
Route::get('developmentprocess', [App\Http\Controllers\Frontend::class, 'Devlopment']);
Route::get('webdevlopment', [App\Http\Controllers\Frontend::class, 'Webdevlopment']);
Route::get('appdevlopment', [App\Http\Controllers\Frontend::class, 'Appdevlopment']);
Route::get('digitalmarketing', [App\Http\Controllers\Frontend::class, 'Digitalmarketing']);
Route::get('graphicslogo', [App\Http\Controllers\Frontend::class, 'Graphicslogo']);
Route::get('qatesting', [App\Http\Controllers\Frontend::class, 'Qatesting']);
Route::get('digitalcard', [App\Http\Controllers\Frontend::class, 'Digitalcard']);
Route::get('hostingservice', [App\Http\Controllers\Frontend::class, 'Hostingservice']);
Route::get('support', [App\Http\Controllers\Frontend::class, 'Support']);
Route::get('phpinternship', [App\Http\Controllers\Frontend::class, 'Phpinternship']);
Route::get('webinternship', [App\Http\Controllers\Frontend::class, 'Webinternship']);
Route::get('flutterinternship', [App\Http\Controllers\Frontend::class, 'Flutterinternship']);
Route::get('reactinternship', [App\Http\Controllers\Frontend::class, 'Reactinternship']);
Route::get('nodeinternship', [App\Http\Controllers\Frontend::class, 'Nodeinternship']);
Route::get('portfolio', [App\Http\Controllers\Frontend::class, 'Portfolio']);
Route::get('blog', [App\Http\Controllers\Frontend::class, 'Blog']);
Route::get('contact-us', [App\Http\Controllers\Frontend::class, 'contact']);
Route::get('service', [App\Http\Controllers\Frontend::class, 'Service']);
Route::get('internship', [App\Http\Controllers\Frontend::class, 'Internship']);