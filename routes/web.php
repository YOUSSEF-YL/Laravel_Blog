<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {return view('welcome');});


Route::get('/index',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/contact',[PagesController::class,'contact']);
Route::get('/category',[PagesController::class,'category']);

Route::get('/Post/{Slug}',[ArticleController::class,'show']);
Route::get('/postsbycategory/{category_id}',[ArticleController::class,'showbycategory']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/myaccount', UserController::class);

Route::get('/email',function($Useremail)
{
    mail::to($Useremail)->send(new WelcomeMail());
    return new WelcomeMail();

});