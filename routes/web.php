<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewPagesController;

Route::get('/index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('welcome');
});

Route::controller(ViewPagesController::class)->group(function(){
    Route::get('/test','test')->name('test');
    Route::get('/contact','contact')->name('contact');
    Route::get('/signin','signin')->name('signin');
    Route::get('/signup','signup')->name('signup');
    Route::get('/apply-membership','applyMembership')->name('apply.membership');
    Route::get('/cancel-membership','cancelMembership')->name('cancel.membership');
    Route::get('/active-member','activeMember')->name('active.member');
    Route::get('/silent-member','silentMember')->name('silent.member');
});