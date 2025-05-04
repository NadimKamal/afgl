<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewPagesController;

// Route::get('/index', function () {
//     return view('index');
// });

Route::controller(ViewPagesController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::get('/gallery','gallery')->name('gallery');
    Route::get('/tournaments','tournaments')->name('tournaments');
    Route::get('/faq','faq')->name('faq');
    Route::get('/notices','notices')->name('notices');
    Route::get('/about','about')->name('about');
    Route::get('/membership-fee','membershipFee')->name('membership.fee');
    Route::get('/other-charges','otherCharges')->name('other.charges');
    Route::get('/committee','committee')->name('committee');
    Route::get('/contact','contact')->name('contact');
    Route::get('/signin','signin')->name('signin');
    Route::get('/signup','signup')->name('signup');
    Route::get('/apply-membership','applyMembership')->name('apply.membership');
    Route::get('/cancel-membership','cancelMembership')->name('cancel.membership');
    Route::get('/active-member','activeMember')->name('active.member');
    Route::get('/silent-member','silentMember')->name('silent.member');
});