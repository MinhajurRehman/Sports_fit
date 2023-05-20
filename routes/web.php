<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\contact;
use App\Http\Controllers\index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\member_controller;
use App\Http\Controllers\latestgame;
use App\Http\Controllers\Store;
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
Route::get('/', function () {
    return view('index');
});

// contact page
Route::get('/contact', function () {
    return view('contact');
});

// ticket page
Route::get('/tickets', function () {
    return view('Tickets');
});

// ticket page Data store & Send Via Email
Route::post('/tickets', [ticketes::class, 'store']);

//Contact page store Data & Send Via Email
Route::post('/contact', [contact::class, 'store']);

// Admin Dashboard
Route::get('/Admins/Dashboard', [AdminController::class, 'Dashboard']);

//fetch layout index data from database
Route::get('/', [index::class, 'Dashboard']);

//Membership Routes
Route::get('folder/read', [member_controller::class, 'readproject']);
Route::get('/membership', [member_controller::class, 'create'])->name('folder.create');
Route::post('/membership', [member_controller::class, 'store']);
//Go to View page and delete data
Route::get('/member/del/{id}', [member_controller::class, 'delete'])->name('member.delete');
//Go to View page and Edit data
Route::get('/member/edit/{id}', [member_controller::class, 'edit'])->name('member.edit');
//After Edit data that update in database and view page using post method
Route::POST('/member/update/{id}', [member_controller::class, 'update'])->name('member.update');


//latest games Routes
Route::get('latestgames/show', [latestgame::class, 'readproject']);
Route::get('latestgames/get', [latestgame::class, 'create'])->name('latestgames.get');
Route::post('latestgames/get', [latestgame::class, 'store']);
// Go to View page and delete data
Route::get('/latestgames/del/{id}', [latestgame::class, 'delete'])->name('latestgames.delete');
//Go to View page and Edit data
Route::get('/latestgames/edit/{id}', [latestgame::class, 'edit'])->name('latestgames.edit');
//After Edit data that update in database and view page using post method
Route::POST('/latestgames/update/{id}', [latestgame::class, 'update'])->name('latestgames.update');



//upcoming events Routes
Route::get('upcomingevents/show', [upcomming::class, 'readproject']);
Route::get('upcomingevents/get', [upcomming::class, 'create'])->name('upcomming.get');
Route::post('upcomingevents/get', [upcomming::class, 'store']);
// Go to View page and delete data
Route::get('/upcomingevents/del/{id}', [upcomming::class, 'delete'])->name('upcomming.delete');
//Go to View page and Edit data
Route::get('/upcomingevents/edit/{id}', [upcomming::class, 'edit'])->name('upcomming.edit');
//After Edit data that update in database and view page using post method
Route::POST('/upcomingevents/update/{id}', [upcomming::class, 'update'])->name('upcomming.update');


//Store Routing
Route::get('/login', [Store::class, 'login']);
Route::get('/Reg', [Store::class, 'Register']);
Route::get('/int', [Store::class, 'interface']);
Route::get('/info', [Store::class, 'information']);
