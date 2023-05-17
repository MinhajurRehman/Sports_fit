<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\member_controller;
use App\Http\Controllers\latestgame;
use App\Http\Controllers\Store;
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

// Admin Dashboard
Route::get('/Admin/Dashboard', function () {
    return view('Admins.Dashboard');
});


//Membership Routes
Route::get('folder/read', [member_controller::class, 'readproject']);
Route::get('folder/create', [member_controller::class, 'create'])->name('folder.create');
Route::post('folder/create', [member_controller::class, 'store']);
//Go to View page and delete data
Route::get('/member/del/{id}', [member_controller::class, 'delete'])->name('member.delete');
//Go to View page and Edit data
Route::get('/member/edit/{id}', [member_controller::class, 'edit'])->name('member.edit');
//After Edit data that update in database and view page using post method
Route::POST('/member/update/{id}', [member_controller::class, 'update'])->name('member.update');
//Membership routes close

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
// latest games routes close


//upcoming events Routes
Route::get('upcomingevents/show', [upcomming::class, 'readproject']);
Route::get('upcomingevents/get', [upcomming::class, 'create'])->name('upcomming.get');
Route::POST('upcomingevents/get', [upcomming::class, 'store']);
// Go to View page and delete data
Route::get('/upcomingevents/del/{id}', [upcomming::class, 'delete'])->name('upcomming.delete');
//Go to View page and Edit data
Route::get('/upcomingevents/edit/{id}', [upcomming::class, 'edit'])->name('upcomming.edit');
//After Edit data that update in database and view page using post method
Route::POST('/upcomingevents/update/{id}', [upcomming::class, 'update'])->name('upcomming.update');
// upcoming events routes close

//Store Routing

Route::get('/login', [Store::class, 'login']);
Route::get('/Reg', [Store::class, 'Register']);
Route::get('/int', [Store::class, 'interface']);
Route::get('/info', [Store::class, 'information']);
