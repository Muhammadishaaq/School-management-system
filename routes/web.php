<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmessionController;
use App\Http\Controllers\ContactUsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home',function(){
    return view('home');
})->name('home');
Route::get('/financial-management',function(){
    return view('financialManage');
})->name('financial-management');

Route::get('/admession-form/create',[AdmessionController::class,'create'])->name('admession-form.create');
Route::post('/admession-form/store',[AdmessionController::class,'store'])->name('admession-form.store');
Route::get('/contact-us/create',[ContactUsController::class,'create'])->name('contact-us.create');
Route::post('/contact-us/store',[ContactUsController::class,'store'])->name('contact-us.store');

Route::get('/ist-year-result',function(){
    return view('istYearResult');
})->name('ist-year-result');
Route::get('/2st-year-result',function(){
    return view('2ndYearResult');
})->name('2nd-year-result');
Route::get('/ist-year-merit-list',function(){
    return view('istYearMeritList');
})->name('ist-year-merit-list');
Route::get('/2nd-year-merit-list',function(){
    return view('2ndYearMeritList');
})->name('2nd-year-merit-list');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');

Route::group(['prefix'=>'admin'], function(){
    Route::group(['middleware'=>'admin.guest'], function(){
        Route::view('/login','admin.login')->name('admin.login');
        Route::post('/login',[App\Http\Controllers\AdminController::class,'authenticate'])->name('admin.auth');
    });
    Route::group(['middleware'=>'admin.auth'], function(){
        Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'dashboard'])->name('admin.dashboard');
        Route::get('/logout',[App\Http\Controllers\AdminController::class,'logout'])->name('admin.logout');
        Route::get('/online-form-submitted',[App\Http\Controllers\AdmessionController::class,'show'])->name('admin.online-form-submitted');
        Route::get('/online-complain-submitted',[App\Http\Controllers\ContactUsController::class,'show'])->name('admin.online-complain-submitted');
    });
});
