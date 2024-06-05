<?php


use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::controller(StudentsController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/create', 'create')->name('create');
    Route::get('/show','show')->name('show');
    Route::get('/destroy/{id}','destroy')->name('destroy');
    Route::get('/destroyall','destroyAll')->name('destroyall');
    Route::match(['get','post'],'/edit/{id}','edit')->name('edit');
});



route::view('/add','add');
