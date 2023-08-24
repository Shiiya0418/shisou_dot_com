<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\Customer\instHomeController;
use App\Http\Controllers\Admin\AdminHomeController;
use Illuminate\Support\Facades\Route;

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




Route::get('/home', function () {
    return view('home');
})->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/post/index', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

    Route::get('/myposts', [PostController::class, 'myPosts'])->name('myposts');
});
//トップ画面のルート
Route::get('/', [\App\Http\Controllers\TopController::class, 'show']);


//管理者画面トップ画面のルート
Route::get('admin/login', [\App\Http\Controllers\Admin\Admin_TopController::class, 'show']);
Route::post('admin/login', [\App\Http\Controllers\Admin\Admin_TopController::class, 'show']);

//楽器詳細のルート.
Route::get('/InstrumentHome/{instrument_id}', [instHomeController::class,'showDetail'])->name('instrument.detail');

Route::get('top', [\App\Http\Controllers\TopController::class, 'show']);

//店舗登録楽器一覧のルート.
Route::get('/admin/top',[AdminHomeController::class,'adminShowList'])->name('AdminInstHome');

//楽器一覧のルート.
Route::get('/instrumentHome',[instHomeController::class,'showList'])->name('InstHome');

//予約関係
Route::get('/customer/reservation/{instrument_id}', [\App\Http\Controllers\Customer\ReservationController::class, 'reservationGet']);
Route::post('/customer/result', [\App\Http\Controllers\Customer\ReservationController::class, 'registerReservation'])->name('customer.reservation');
// Route::get('/customer/result', [\App\Http\Controllers\Customer\ReservationController::class, 'showReservation'])->name('customer.reservation-view');

Route::get('/admin/register', [\App\Http\Controllers\Admin\RegisterInstrumentController::class, 'instrumentForm'])->name('admin.instrument-form');
Route::post('/admin/instrument', [\App\Http\Controllers\Admin\RegisterInstrumentController::class, 'registerInstrument'])->name('admin.instrument-view');
// Route::get('/admin/register', [\App\Http\Controllers\Admin\RegisterInstrumentController::class, 'showInstrument'])->name('admin.register-view');

// 予約一覧
Route::get('/admin/reservation/{shop_id}', [\App\Http\Controllers\Admin\ReservationListController::class, 'showReservationList'])->name('admin.reservation-list');

require __DIR__.'/auth.php';

