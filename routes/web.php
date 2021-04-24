<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PdfFeedback;
use App\Http\Controllers\MailController;

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

Route::get('/apply-now/{id?}', [JobsController::class, 'applyJob']);
Route::post('/apply-now/{id?}', [JobsController::class, 'applyJobStore'])->name('applyjob.store');

Route::get('/jobs/edit/{id?}', [JobsController::class, 'edit']);
Route::delete('/jobs/delete/{id?}', [JobsController::class, 'destroy'])->name('jobs.destroy');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/adminlogin', [LoginController::class, 'adminlogin'])->name('adminlogin');

/* Routes for Admins */
Route::group([
    'middleware' => ['auth', 'admin']
], function() {
Route::get('/get-feedback',[PdfFeedback::class,'getAllFeedback']);
Route::get('/download-pdf',[PdfFeedback::class,'downloadPDF'])->name('downloadpdf');

/* Routes for Templates */
Route::get('/createtemplate', [TemplateController::class, 'viewforcreatetemplate'])->name('createtemplate');
Route::post('/createtemplate', [TemplateController::class, 'storetemplate']);
Route::get('/listtemplates', [TemplateController::class, 'listtemplates'])->name('listtemplates');
Route::get('/edittemplate/{id?}', [TemplateController::class, 'edittemplate'])->name('edittemplate');
Route::post('/updatetemplate/{id?}', [TemplateController::class, 'updatetemplate'])->name('updatetemplate');
Route::get('/deletetemplate/{id?}', [TemplateController::class, 'deletetemplate'])->name('deletetemplate');

/* Routes for Feedback */
Route::get('/generatefeedback/{id?}',[FeedbackController::class, 'generatefeedback'])->name('generatefeedback');
Route::post('/generatefeedback',[FeedbackController::class, 'storefeedback'])->name('storefeedback');
Route::get('/listfeedback', [FeedbackController::class, 'listfeedback'])->name('listfeedback');
Route::get('/editfeedback/{id?}',[FeedbackController::class, 'editfeedback'])->name('editfeedback');
Route::post('/editfeedback',[FeedbackController::class, 'updatefeedback'])->name('updatefeedback');

Route::get('/admindashboard', [DashboardController::class, 'admindash'])->name('admindashboard');

Route::get('/posts', function () {
    return view('posts.index');
});

/* Routes for Interview */
Route::get('data','App\Http\Controllers\InterviewevaluationController@create')->name('interviewpage');
Route::post('data','App\Http\Controllers\InterviewevaluationController@store')->name('addform');
Route::get('getrole/{id}','App\Http\Controllers\InterviewevaluationController@getjobrole');

});


/* Route for Email*/
Route::get('/sendemail/{uid}/{head}/{body}', [MailController::class, 'SendMail'])->name('sendemail');
Route::post('/sendbulkmail/{head}/{bodyresult}', [MailController::class, 'SendBulkMail'])->name('sendbulkmail');
