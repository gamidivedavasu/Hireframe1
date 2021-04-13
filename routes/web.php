<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/jobs', [JobsController::class, 'index']); 
Route::get('/jobs/{id?}', [JobsController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

/* Routes for Templates */
Route::get('/createtemplate', [TemplateController::class, 'viewforcreatetemplate'])->name('createtemplate');
Route::post('/createtemplate', [TemplateController::class, 'storetemplate']);
Route::get('/listtemplates', [TemplateController::class, 'listtemplates'])->name('listtemplates');

/* Routes for Feedback */
Route::get('/generatefeedback/{id?}',[FeedbackController::class, 'generatefeedback'])->name('generatefeedback');
Route::post('/generatefeedback',[FeedbackController::class, 'storefeedback'])->name('storefeedback');


Route::get('/posts', function () {
    return view('posts.index');
});

/* Routes for Interview */
Route::post('data','App\Http\Controllers\InterviewevaluationController@store')->name('addform');

Route::get('/interviewpage', function (){
    return view('interview.interviewevaluation');
});