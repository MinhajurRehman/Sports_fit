<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\contact;
use App\Http\Controllers\index;
use App\Http\Controllers\latest_new;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\member_controller;
use App\Http\Controllers\latestgame;
use App\Http\Controllers\Store;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\ticketes;
use App\Http\Controllers\upcomming;




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



// Index Page
Route::get('/', [index::class, 'index']);

// contact page
Route::get('/contact', [index::class, 'contact']);

// ticket page
Route::get('/tickets', [index::class, 'Tickets']);

Route::get('/Admins/Login', [AdminController::class, 'fetch']);
Route::get('/Reg', [AdminController::class, 'Reg']);
Route::post('/Reg', [AdminController::class, 'Registration']);
Route::post('login-admin', [AdminController::class, 'loginadmin'])->name('login-admin');
Route::get('/Logout', [AdminController::class, 'Logout']);

// ticket page Data store & Send Via Email
Route::post('/tickets', [ticketes::class, 'store']);

//Contact page store Data & Send Via Email
Route::post('/contact', [contact::class, 'store']);

// Admin Dashboard
Route::get('/Admins/Dashboard', [AdminController::class, 'Dashboard'])->middleware('isLogIn');

//fetch layout index data from databaseE
Route::get('/', [index::class, 'Dashboard']);

//Membership Routes
Route::get('folder/read', [member_controller::class, 'readproject'])->middleware('isLogIn');
Route::get('/membership', [member_controller::class, 'create'])->name('folder.create');
Route::post('/membership', [member_controller::class, 'store']);
//Go to View page and delete data
Route::get('/member/del/{id}', [member_controller::class, 'delete'])->middleware('isLogIn')->name('member.delete');
//Go to View page and Edit data
Route::get('/member/edit/{id}', [member_controller::class, 'edit'])->middleware('isLogIn')->name('member.edit');
//After Edit data that update in database and view page using post method
Route::POST('/member/update/{id}', [member_controller::class, 'update'])->middleware('isLogIn')->name('member.update');

//latest games Routes
Route::get('latestgames/show', [latestgame::class, 'readproject'])->middleware('isLogIn');
Route::get('latestgames/get', [latestgame::class, 'create'])->middleware('isLogIn')->name('latestgames.get');
Route::post('latestgames/get', [latestgame::class, 'store']);
// Go to View page and delete data
Route::get('/latestgames/del/{id}', [latestgame::class, 'delete'])->middleware('isLogIn')->name('latestgames.delete');
//Go to View page and Edit data
Route::get('/latestgames/edit/{id}', [latestgame::class, 'edit'])->middleware('isLogIn')->name('latestgames.edit');
//After Edit data that update in database and view page using post method
Route::POST('/latestgames/update/{id}', [latestgame::class, 'update'])->name('latestgames.update');

//upcoming events Routes
Route::get('upcomingevents/show', [upcomming::class, 'readproject'])->middleware('isLogIn');
Route::get('upcomingevents/get', [upcomming::class, 'create'])->middleware('isLogIn')->name('upcomming.get');
Route::post('upcomingevents/get', [upcomming::class, 'store']);
// Go to View page and delete data
Route::get('/upcomingevents/del/{id}', [upcomming::class, 'delete'])->middleware('isLogIn')->name('upcomming.delete');
//Go to View page and Edit data
Route::get('/upcomingevents/edit/{id}', [upcomming::class, 'edit'])->middleware('isLogIn')->name('upcomming.edit');
//After Edit data that update in database and view page using post method
Route::POST('/upcomingevents/update/{id}', [upcomming::class, 'update'])->name('upcomming.update');

// payment Gateways route
Route::get('/stripe', [StripePaymentController::class, 'paymentStripe'])->name('addmoney.paymentstripe');
Route::post('add-money-stripe', [StripePaymentController::class, 'postPaymentStripe'])->name('addmoney.stripe');



//Latest news Routes
Route::get('news/show', [latest_new::class, 'readproject'])->middleware('isLogIn');
Route::get('news/get', [latest_new::class, 'create'])->middleware('isLogIn')->name('news.get');
Route::post('news/get', [latest_new::class, 'store']);
// Go to View page and delete data
Route::get('/news/del/{id}', [latest_new::class, 'delete'])->middleware('isLogIn')->name('news.delete');
//Go to View page and Edit data
Route::get('/news/edit/{id}', [latest_new::class, 'edit'])->middleware('isLogIn')->name('news.edit');
//After Edit data that update in database and view page using post method
Route::POST('/news/update/{id}', [latest_new::class, 'update'])->name('news.update');


// Products
Route::get('product/show', [Store::class, 'read'])->middleware('isLogIn');
Route::get('product/get', [Store::class, 'index'])->middleware('isLogIn')->name('product.get');
Route::post('product/get', [Store::class, 'save']);
// Go to View page and delete data
Route::get('/product/del/{id}', [Store::class, 'delete'])->middleware('isLogIn')->name('product.delete');
//Go to View page and Edit data
Route::get('/product/edit/{id}', [Store::class, 'edit'])->middleware('isLogIn')->name('product.edit');
//After Edit data that update in database and view page using post method
Route::POST('/product/update/{id}', [Store::class, 'update'])->name('product.update');


//Store Routing
Route::get('/login', [Store::class, 'login']);
Route::get('/Register', [Store::class, 'Register']);
Route::post('/Register', [Store::class, 'Registration']);
Route::post('login-store', [Store::class, 'loginstore'])->name('login-store');
Route::get('/int', [Store::class, 'interface'])->middleware('LogIn');
Route::get('Y', [Store::class, 'information'])->middleware('LogIn');
//Store Product fetch by id on inforamtion page from the help of this route
Route::get('/info/Buy/{id}', [Store::class, 'Buy'])->middleware('LogIn')->name('store.Buy');
Route::post('/info/Buy/{id}', [Store::class, 'storage']);


Route::get('store/bill', [AdminController::class, 'review'])->middleware('isLogIn');
Route::get('/Logout', [Store::class, 'Logout']);
