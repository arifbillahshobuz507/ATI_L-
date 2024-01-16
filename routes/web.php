<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\MailController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\backend\EmployeeController;
use App\Http\Controllers\frontend\customerController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\backend\AdminController as BackendAdminController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SMSController;

// frontend routes

// report generate
Route::get('/summarised-reports', [ReportController::class, 'summarisedReports'])->name('summarised.reports');
Route::get('/filter', [ReportController::class, 'filter'])->name('filter');


// user Routes
Route::prefix('employees')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('employees');
});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::get('/pay', [SslCommerzPaymentController::class, 'index'])->name('order');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

//Home route
Route::get('/', [HomeController::class, 'home'])->name('home');

//Customer Routes
Route::get('/customer-add', [UserController::class, 'form'])->name('customer.from');
Route::post('/customer-store', [UserController::class, 'store'])->name('customer.store');



//backend Routes
Route::get('/admin-from', [AdminController::class, 'from'])->name('admin.from');
Route::post('/admin-login', [AdminController::class, 'login'])->name('admin.login');


Route::group(['middleware' => 'checkAdmin'], function () {
    // PDF Generate Routes
    Route::get('/pdf', [PDFController::class, 'getpdf'])->name('pdf');
    Route::get('/pdf-download', [PDFController::class, 'downloadPdf'])->name('pdf.generate');

    // SMS Systen Routes
    Route::get('/sms', [SMSController::class, 'sms'])->name('sms');
    Route::post('/send-sms', [SMSController::class, 'sendSms'])->name('send.sms');

    //Mail routes
    Route::get('/mail', [MailController::class, 'index'])->name('email');
    Route::post('/send-mail', [MailController::class, 'email'])->name('send.email');

    Route::prefix('admin')->group(function () {
        Route::get('/', [BackendAdminController::class, 'index'])->name('admins');
        Route::get('/add', [BackendAdminController::class, 'form'])->name('admin.add');
        Route::post('/store', [BackendAdminController::class, 'store'])->name('sotre.admin');
        Route::get('/delete/{id}', [BackendAdminController::class, 'delete'])->name('delete.admin');
        Route::get('/edit/{id}', [BackendAdminController::class, 'edit'])->name('edit.admin');
        Route::post('/update/{id}', [BackendAdminController::class, 'update'])->name('update.admin');
        Route::get('/view/{id}', [BackendAdminController::class, 'view'])->name('view.admin');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });   
});
